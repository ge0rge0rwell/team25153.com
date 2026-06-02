import { searchManual } from './searchService';

const OPENROUTER_API_KEY = import.meta.env.VITE_OPENROUTER_API_KEY;
const OPENROUTER_MODEL = "openrouter/free";

export const callGemini = async (messages) => {
    const lastUserMessage = messages[messages.length - 1].content;
    const searchResults = await searchManual(lastUserMessage);

    let contextHeader = "\n\n--- MANUAL SEARCH RESULTS ---\n";
    if (searchResults.length > 0) {
        searchResults.forEach(res => {
            contextHeader += `[SAYFA ${res.page}]:\n${res.content}\n\n`;
        });
    } else {
        contextHeader += "Aranan konu kural kitabında bulunamadı.\n";
    }
    contextHeader += "--- END OF SEARCH ---\n";

    const augmentedMessages = [...messages];
    augmentedMessages[0] = {
        ...augmentedMessages[0],
        content: augmentedMessages[0].content + contextHeader
    };

    try {
        const response = await fetch("https://openrouter.ai/api/v1/chat/completions", {
            method: "POST",
            headers: {
                "Authorization": `Bearer ${OPENROUTER_API_KEY}`,
                "HTTP-Referer": window.location.origin,
                "X-Title": "Descartes FTC",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                model: OPENROUTER_MODEL,
                messages: augmentedMessages,
                temperature: 0.5,
                max_tokens: 2048,
            })
        });

        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(`OpenRouter Error ${response.status}: ${errorData.error?.message || response.statusText}`);
        }

        const data = await response.json();
        if (!data.choices || !data.choices[0]) throw new Error('Invalid OpenRouter response');

        let cleaned = data.choices[0].message.content;
        let prev;

        const markers = ["</think>", "</thought>", "</reasoning>", "</analysis>", "--- END OF SEARCH ---"];
        markers.forEach(m => {
            if (cleaned.includes(m)) cleaned = cleaned.substring(cleaned.lastIndexOf(m) + m.length);
        });

        do {
            prev = cleaned.length;
            cleaned = cleaned
                .replace(/<(?:think|thought|reasoning|analysis|logic|thought_process|düşünme|muhakeme|internal)>[\s\S]*?(?:<\/(?:think|thought|reasoning|analysis|logic|thought_process|düşünme|muhakeme|internal)>|$)/gi, "")
                .replace(/^[\s\S]*?<\/think>/gi, "")
                .replace(/^[\s\S]*?<\/thought>/gi, "")
                .replace(/^[\s\S]*?<\/reasoning>/gi, "")
                .replace(/\[(?:thinking|thought|reasoning|analysis|internal)\][\s\S]*?(?:\[\/(?:thinking|thought|reasoning|analysis|internal)\]|$)/gi, "")
                .replace(/^(?:thought|thinking|reasoning|analysis|analiz|düşünme süreci|akıl yürütme|başlıyorum|muhakeme|planlama):?\s*.*$/gim, "")
                .replace(/^(?:düşünüyorum|thinking|analyzing|planlıyorum|hazırlıyorum)\.*$/gim, "")
                .replace(/Constructing response[\s\S]*?\.\.\./gi, "")
                .replace(/^(?:\*\*)?(?:thought|thinking|reasoning|analysis|analiz|düşünme süreci)(?:\*\*)?:?\s*.*$/gim, "")
                .replace(/^> [\s\S]*?$/gm, "");
        } while (cleaned.length !== prev);

        return cleaned.trim();
    } catch (error) {
        console.error("OpenRouter Error:", error);
        throw error;
    }
};
