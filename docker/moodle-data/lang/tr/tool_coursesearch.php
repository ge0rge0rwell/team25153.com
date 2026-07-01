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
 * Strings for component 'tool_coursesearch', language 'tr', version '5.0'.
 *
 * @package     tool_coursesearch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancecoursesearch_help'] = 'pre><b> 1. Arama kutusuyla otomatik öneri </b>:- Arama anahtar kelimenizi yazmaya başlayın, otomatik tamamlama önerileriniz olacaktır.  Öneri alanları idnumber, kurs fullname, shortname şeklindedir.
 <br/><br/></pre>
 <pre><b> 2. Joker karakterle arama </b>:- kursları ararken joker karakterler(?, *) kullanabilirsiniz.
 Örnek:- Moodle*, "moodle" kelimesinden başlayarak tüm dersleri arar.
 <br/><br/></pre>
 <pre><b> 3. Yakınlık eşleştirme </b>:- belirli bir mesafedeki kurslardan kelimelere göre arama yapabilirsiniz.
 Örnek : - Birbirinden 4 kelime içinde "foo bar" arayın.
 "foo bar"~4
 <br/><br/></pre>
 <pre><b> 4. Anahtar kelime eşleştirme (belirli bir alanda arama) </b>:- solr anahtar kelime eşleştirme özelliğini kullanarak aramanızı belirli bir alan içinde sınırlandırabilirsiniz.
 Örnek:- Tam ad alanında "PHP" kelimesini ve özet alanında "nesne yönelimli" kelimesini arayın.
 fullname:"PHP" VE özet:"nesne yönelimli"
 <br/><br/> </pre>
 <pre><b> 5. Sonuçları başlangıç tarihine göre filtreleme </b>:- Kursların yaklaşık tarih aralığını seçerek arama sonuçlarınızı filtreleyebilirsiniz.
 <br/><br/> </pre>
 <pre><b> 6. Sonuçları sıralama </b>:- Varsayılan olarak sonuçlar alaka düzeyine (skor) göre sıralanır.  sonuçları alaka düzeyine, başlangıç tarihine, kısa isme göre sıralayabilirsiniz.
 <br/><br/></pre>';
$string['showerrormessageyes'] = 'Hata mesajını göster: Evet';
