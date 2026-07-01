<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qformat_wordtable', language 'tr', version '5.0'.
 *
 * @package     qformat_wordtable
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Geçici dosya açılamıyor<b>{$a}</b>';
$string['cannotreadzippedfile'] = 'Sıkıştırılmış dosya okunamıyor <b>{$a}</b>';
$string['cannotwritetotempfile'] = 'Geçici dosyaya yazılamıyor <b>{$a}</b>';
$string['cloze_distractor_column_label'] = 'Dikkat dağıtıcılar';
$string['cloze_feedback_column_label'] = 'Dikkat dağıtıcılar geri bildirimi';
$string['cloze_instructions'] = 'Çok Çelişkili olanlar için <strong>kalın</strong>, Kısa Yanıt için <em>italik</em> ve Sayısal sorular için <u>altı çizil</u> kullanın.';
$string['cloze_mcformat_label'] = 'Yönlendirme (D = açılır; V = dikey, H = yatay radyo düğmeleri)';
$string['description_instructions'] = 'Bu aslında bir soru değil. Bunun yerine etkinliğe bazı talimatlar, övgü veya diğer içerikler eklemek için bir yol. Bu, ders sayfalarına içerik eklemek için etiketlerin kullanılma biçimine benzer.';
$string['docnotsupported'] = 'Word 2003 biçimindeki dosyalar desteklenmiyor: <b>{$a}</b>, bunun yerine Moodle2Word 3.x kullanın';
$string['essay_instructions'] = 'Birkaç cümle veya paragrafın yanıtını verir. Bu daha sonra manuel olarak derecelendirilmelidir.';
$string['htmldocnotsupported'] = 'Yanlış Word biçimi: <b>{$a}</b>\'yi yerel Word 2010 (.docx) biçiminde kaydetmek ve tekrar içe aktarmak için lütfen <i> Dosya> Farklı Kaydet ... </i> kullanın';
$string['htmlnotsupported'] = 'HTML formatındaki dosyalar desteklenmiyor: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'Word dosyasındaki etiketlerin dili mevcut Moodle arabirim dilinizle eşleşmediğinden hiçbir soru aktarılmadı.';
$string['multichoice_instructions'] = 'Önceden tanımlanmış bir listeden tek veya birden çok yanıt seçilmesini sağlar.';
$string['noquestions'] = 'Dışa aktarılacak soru yok';
$string['pluginname'] = 'Microsoft Word 2010 tablo biçimi (wordtable)';
$string['pluginname_help'] = 'Bu, Microsoft Word 2010 dosyalarını içe aktarmak için Moodle Question XML biçimine dönüştürmek ve Moodle Question XMLbiçimini Microsoft Word\'de düzenleme için uygun bir biçimde dönüştürmeyi sağlamakta kullanılan bir ön uçtur.';
$string['pluginname_link'] = 'qformat/wordtable';
$string['preview_question_not_found'] = 'Önizleme sorusu bulunamadı, ad / ders kimliği: {$a}';
$string['privacy:metadata'] = 'WordTable soru formatı eklentisi herhangi bir kişisel veri saklamaz.';
$string['stylesheetunavailable'] = 'XSLT Stil Sayfası <b>{$a}</b> kullanılamıyor';
$string['transformationfailed'] = 'XSLT dönüşümü başarısız oldu (<b>{$a}</b>)';
$string['truefalse_instructions'] = '\'100\' derecesini doğru cevaba ayarlayın.';
$string['unsupported_instructions'] = 'Bu soru türünü içe aktarma desteklenmiyor.';
$string['word_about_moodle2word'] = 'Moodle2Word Hakkında';
$string['word_about_moodle2word_screentip'] = 'Moodle2Word Word şablonları ve Moodle eklentisi hakkında';
$string['word_addcategory_supertip'] = 'Kategori adları, Başlık 1 stilini kullanır';
$string['word_currentquestion'] = '(Güncel Soru)';
$string['word_import'] = 'İçe aktar';
$string['word_multiple_answer'] = 'Birden çok cevap';
$string['word_new_question_file'] = 'Yeni Soru Dosyası';
$string['word_new_question_file_screentip'] = 'Sorular Word 2010 (.docx) biçiminde kaydedilmelidir';
$string['word_new_question_file_supertip'] = 'Her Word dosyası birden fazla kategori içerebilir';
$string['word_setunset_assessment_view'] = 'Değerlendirme Görünümünü Ayarla/Değiştir';
$string['word_showhide_assessment_screentip'] = 'Düzenlemek için soru meta verilerini göster, basılı değerlendirmeyi önizlemek için gizle';
$string['word_showhide_assessment_supertip'] = 'Gizli metni gösterir veya gizler';
$string['word_showhide_assessment_view'] = 'Değerlendirme Görünümünü Göster/Gizle';
$string['word_shuffle_screentip'] = 'MCQ/TF/MA sorularının yanıtlarını karıştır';
$string['word_shuffle_supertip'] = 'Birkaç karıştırma 1\'den iyidir';
$string['word_view'] = 'Görünüm';
$string['wordtable'] = 'Microsoft Word 2010 tablo biçimi (wordtable)';
$string['wordtable_help'] = 'Bu, Microsoft Word 2010 dosyalarını içe aktarmak için Moodle Question XML biçimine dönüştürmek ve Moodle Question XML biçimini Microsoft Word\'de düzenleme için uygun bir biçimde dışa aktarmak için geliştirilmiş bir XHTML biçimine dönüştürmek için kullanılan bir ön uçtur';
$string['xmlnotsupported'] = 'XML biçimindeki dosyalar desteklenmiyor: <b>{$a}</b>';
$string['xsltunavailable'] = 'Bu Word dosyasını kaydetmek için PHP\'de XSLT kitaplığına ihtiyacınız var.';
