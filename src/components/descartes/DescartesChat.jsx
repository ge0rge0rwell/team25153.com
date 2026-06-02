import React, { useState, useEffect, useRef } from 'react'
import { DESCARTES_SYSTEM_PROMPT } from './ftcKnowledge'
import { callGemini } from './geminiService'
import AdobeViewer from './AdobeViewer'
import './descartes.css'

const DescartesChat = () => {
  const [isOpen, setIsOpen] = useState(false)
  const [messages, setMessages] = useState([
    { role: 'system', content: DESCARTES_SYSTEM_PROMPT },
    { role: 'assistant', content: "Hello teammate! I'm Descartes. I'm ready to help you with the FTC rulebook, engineering processes, and general competition info. What would you like to learn?" }
  ])
  const [input, setInput] = useState('')
  const [isMaximized, setIsMaximized] = useState(false)
  const [pdfPage, setPdfPage] = useState(1)
  const [activeTab, setActiveTab] = useState('chat')
  const [isTyping, setIsTyping] = useState(false)
  const messagesEndRef = useRef(null)

  useEffect(() => {
    messagesEndRef.current?.scrollIntoView({ behavior: 'smooth' })
  }, [messages])

  const handleSend = async () => {
    if (!input.trim()) return
    const userMessage = { role: 'user', content: input }
    setMessages(prev => [...prev, userMessage])
    setInput('')
    setIsTyping(true)
    try {
      const response = await callGemini([...messages, userMessage])
      setMessages(prev => [...prev, { role: 'assistant', content: response }])
    } catch (error) {
      setMessages(prev => [...prev, { role: 'assistant', content: 'Sorry, an error occurred: ' + error.message }])
    } finally {
      setIsTyping(false)
    }
  }

  const parseCitations = (content) => {
    return content.split(/(\[\[\d+\]\]\(#\d+\))/g).map((part, i) => {
      const match = part.match(/\[\[(\d+)\]\]\(#(\d+)\)/)
      if (match) {
        return (
          <a key={i} href={`#${match[2]}`} className="descartes-citation-link"
            onClick={(e) => { e.preventDefault(); setPdfPage(parseInt(match[2])); setActiveTab('pdf') }}>
            [{match[1]}]
          </a>
        )
      }
      return part
    })
  }

  return (
    <div className="descartes-widget">
      {/* Gooey filter */}
      <svg style={{ position: 'absolute', width: 0, height: 0, pointerEvents: 'none' }}>
        <defs>
          <filter id="descartes-gooey">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="gooey" />
            <feComposite in="SourceGraphic" in2="gooey" operator="atop" />
          </filter>
        </defs>
      </svg>

      {/* FAB */}
      <button
        className={`descartes-fab ${isOpen ? 'open' : ''}`}
        onClick={() => setIsOpen(!isOpen)}
        aria-label="Chat with Descartes"
      >
        {isOpen ? (
          <svg viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" /></svg>
        ) : (
          <img src="/descartes/logo-cartesian.jpg" alt="Descartes" className="descartes-fab-logo" />
        )}
      </button>

      {/* Chat overlay */}
      <div className={`descartes-overlay ${isOpen ? 'open' : 'closed'} ${isMaximized ? 'maximized' : ''}`}>
        <div className="descartes-container">

          {/* Header */}
          <header className="descartes-header">
            <div className="descartes-logo-row">
              <img src="/descartes/logo-cartesian.jpg" alt="DESCARTES" className="descartes-header-logo" />
              <span className="descartes-title">DESCARTES <span style={{ fontWeight: 300 }}>FTC AI</span></span>
            </div>
            <div className="descartes-header-actions">
              <button className="descartes-icon-btn" onClick={() => setIsMaximized(!isMaximized)}
                aria-label={isMaximized ? 'Restore' : 'Maximize'}>
                {isMaximized
                  ? <svg viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" /></svg>
                  : <svg viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" /></svg>
                }
              </button>
              <button className="descartes-icon-btn" onClick={() => setIsOpen(false)}>×</button>
            </div>
          </header>

          {/* Tabs */}
          <nav className="descartes-tabs">
            <button className={activeTab === 'chat' ? 'active' : ''} onClick={() => setActiveTab('chat')}>Chat</button>
            <button className={activeTab === 'pdf'  ? 'active' : ''} onClick={() => setActiveTab('pdf')}>Manual</button>
          </nav>

          {/* Main content */}
          <main className="descartes-main">
            <div className={`descartes-pdf-pane ${activeTab === 'pdf' ? 'active' : ''}`}>
              <AdobeViewer pdfUrl="/descartes/game-manual.pdf" pageNum={pdfPage} />
            </div>

            <div className={`descartes-chat-pane ${activeTab === 'chat' ? 'active' : ''}`}>
              <div className="descartes-messages">
                {messages.filter(m => m.role !== 'system').map((msg, i) => (
                  <div key={i} className={`descartes-message ${msg.role}`}>
                    <div className="descartes-bubble">
                      {msg.role === 'assistant' ? parseCitations(msg.content) : msg.content}
                    </div>
                  </div>
                ))}
                {isTyping && (
                  <div className="descartes-message assistant">
                    <div className="descartes-bubble descartes-typing">
                      <span /><span /><span />
                    </div>
                  </div>
                )}
                <div ref={messagesEndRef} />
              </div>

              <div className="descartes-input">
                <input
                  type="text"
                  placeholder="Ask about a rule or page number..."
                  value={input}
                  onChange={(e) => setInput(e.target.value)}
                  onKeyPress={(e) => e.key === 'Enter' && handleSend()}
                />
                <button onClick={handleSend} disabled={isTyping}>Ask</button>
              </div>
            </div>
          </main>

        </div>
      </div>
    </div>
  )
}

export default DescartesChat
