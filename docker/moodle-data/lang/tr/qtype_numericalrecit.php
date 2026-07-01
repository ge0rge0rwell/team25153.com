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
 * Strings for component 'qtype_numericalrecit', language 'tr', version '5.0'.
 *
 * @package     qtype_numericalrecit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Mutlak hata';
$string['addcolumn'] = 'Sütun';
$string['addline'] = 'Çizgi';
$string['addmorepartsblanks'] = 'Daha fazla {no} bölüm için boşluk';
$string['algebraic_formula'] = 'Cebirsel formül';
$string['answer'] = 'Cevap*';
$string['answer_help'] = '**Gerekli**.
seçilen cevap türüne bağlı olarak bir sayı listesi veya bir dize listesi olmalıdır. Yalnızca bir cevap olduğunda, doğrudan bir sayı veya dize girilebilir. Listedeki eleman sayısının bu bölüm için cevap alanlarının sayısını tanımladığını lütfen unutmayın.

 <pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-at)"<br>[" vx t", "vy t - ^2\'de 0,5"]</pre><br>
 <a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche- recit.html-en.html#14_Answer" target="_blank">Daha fazla bilgi edinin</a>';
$string['answercombinedunitmulti'] = '{$a->part} kısmı için cevap ve birim';
$string['answercombinedunitsingle'] = 'Bölüm {$a->part} ve koordinat {$a->numanswer} için cevap';
$string['answercoordinatemulti'] = '{$a->part} kısmını cevaplayın ve {$a->numanswer}\'u koordine edin';
$string['answercoordinatesingle'] = '{$a->numanswer} koordinatı için cevap';
$string['answermark'] = 'Bölüm notu*';
$string['answermark_help'] = '**Gerekli**.
 Bu bölümün cevabına ilişkin not, 0\'dan büyük bir sayı olmalıdır.
Tüm sorunun varsayılan notu, tüm bölüm notlarının toplamıdır.

 Not: Bu bölümün cevabına ilişkin not, 0\'dan büyük bir sayı olmalıdır.
Tüm sorunun varsayılan notu, tüm bölüm notlarının toplamıdır.<br>
 <a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche- recit-en.html#13_Note_of_the_part" target="_blank">Daha fazla bilgi edinin</a>';
$string['answermissing'] = 'Lütfen önce cevap formülünü girin';
$string['answermulti'] = '{$a->kısım} için cevap';
$string['answerno'] = 'Bölüm {$a}';
$string['answersingle'] = 'Cevap';
$string['answertype'] = 'Cevap türü';
$string['answertype_help'] = 'Dört cevap türü vardır.

Rakam, sayısal ve sayısal formül cevapları, cevap olarak bir rakam veya rakam listesi gerektirir.

Cebirsel formül cevapları, cevap olarak bir dize veya dizeler listesi gerektirir.

Farklı cevap türleri, cevapları girerken farklı kısıtlamalar getirecektir, bu nedenle öğrenciler
bunları nasıl gireceğinizi bilmeniz gerekir. Soru kodundaki format kontrolü
ayrıca bir şeylerin yanlış olup olmadığını yazdıklarında onlara söyleyin. Ayrıntılar için lütfen belgeleri okuyun.';
$string['answerunitmulti'] = '{$a->part} bölümü için birim';
$string['answerunitsingle'] = 'Birim';
$string['automark'] = 'Otomatik not vermeyi etkinleştir';
$string['calculate'] = 'Hesapla';
$string['checkvarshdr'] = 'Değişken örneklemesini kontrol edin';
$string['choiceno'] = 'Hayır';
$string['choiceyes'] = 'Evet';
$string['commonsiunit'] = 'Ortak SI birimleri';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['globalvarshdr'] = 'Değişkenler';
$string['none'] = 'Yok';
$string['pluginname_link'] = 'https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html';
$string['privacy:metadata'] = 'Formüller soru tipi eklentisi herhangi bir kişisel veri depolamaz.';
$string['save'] = 'Kaydet';
$string['valuetable'] = 'Değer Tablosu';
$string['vars1_help'] = 'Soru düzeyinde genel değişkenler tanımlandığı gibi burada da değişkenler tanımlayabilirsiniz. Burada tanımlanan değişkenler bölümün cevabında veya geri bildiriminde kullanılabilir ve görünürlük kapsamları bölümle sınırlıdır.';
$string['varsglobal_help'] = 'Örneklenen rasgele değişkenleri manipüle etmek için formüller burada belirtilebilir.
 (tüm rastgele değişkenler burada mevcuttur).  matematiksel tam liste
 işlevler ve işleçler belgelerde verilmiştir.

 <pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;< br>e = yuvarlak(a, 0);<br>f = [0, 1, 2, 3][A];<br>g = ["sıfır", "bir", "iki", "üç" ][A];<br>uzaklık = sqrt(a*a + b*b);</pre><br>
 <a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche- recit-en.html#17_Global_variables" target="_blank">Daha fazla bilgi edinin</a>';
