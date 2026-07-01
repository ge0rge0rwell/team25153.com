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
 * Strings for component 'qtype_matrix', language 'tr', version '5.0'.
 *
 * @package     qtype_matrix
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Alt puanlar';
$string['allow_dnd_ui'] = 'Sürükle-Bırak UI kullanımına izin ver';
$string['allow_dnd_ui_descr'] = 'İzin verilirse, öğretmenler herhangi Matrix sorularına Sürükle-Bırak özelliğini kullanma olanağına sahip olacaklar.';
$string['cols_description'] = 'Açıklama';
$string['cols_shorttext'] = 'Yanıt';
$string['colsheader'] = 'Matris sütunları';
$string['colsheader_desc'] = '<p>Kısa metin, mevcut olduğunda ve uzun metni bir araç ipucu olarak kullanılacaktır.<br/>Bunun nasıl görüntüleneceğine dikkat edin.</p>
<p>Öğrenciler, sorunun nasıl yapılandırıldığına bağlı olarak satır başına birden çok veya tek sütun seçebilir ve her satır, derecelendirme yöntemlerinden biriyle tanımlanan bir not alır. </p>
<p>Sorunun son sınıfı, tüm yanıtların doğru olması gereken Kprime türünün istisnasına sahip her bir sıra için notlarının ortalamasıdır.</p>';
$string['false'] = 'Yanlış';
$string['grademethod'] = 'Puanlama yöntemi';
$string['grademethod_help'] = '<ul>
<li> <b>Kprime</b>: Öğrenci, tüm yanıtlar doğruysa, bir yanıt yanlış ve geri kalan cevaplar doğruysa yarım puan, aksi takdirde sıfır puan alır; öğrenciler bir puan alır.
<li> <b>Kprime1 / 0 </b>: Öğrenci, tüm yanıtlar doğruysa, bir puan alır ve aksi takdirde puan 0 puan alır.
<li><b>Alt puanlar</b>: Her doğru yanıt için öğrenciye alt puan verilir.
</ul>';
$string['kany'] = 'Kprime (en az bir doğru, yanlış cevap yok)';
$string['kprime'] = 'Kprime1/0';
$string['matrixheader'] = 'Yanıt matrisi';
$string['multipleallowed'] = 'Yanıt bildirimi başına birden çok yanıt verilsin mi?';
$string['mustaddupto100'] = 'Negatif olmayanların toplamı Her satırdaki ağırlıkların% 100 olması gerekir.';
$string['mustdefine1by1'] = 'En az 1 x 1 matris tanımlamanız gerekir; Her satır ve sütun için kısa veya uzun cevap tanımlanır';
$string['oneanswerperrow'] = 'Her satır için bir cevap vermelisiniz';
$string['pluginname'] = 'Kprime';
$string['pluginname_help'] = '<p> Kprime soruları bir öğe kökü ve dört karşılık gelen cevap ifadesinden oluşur. Her cevaplama ifadesi için öğrencilerin doğru olup olmadığına karar vermeleri gerekir. </p>';
$string['pluginname_link'] = 'question/type/matrix';
$string['pluginnameadding'] = 'Bir Kprime soru ekleme';
$string['pluginnameediting'] = 'Bir Kprime sorusunu düzenleme';
$string['pluginnamesummary'] = 'Kprime sorularında tam dört deyim "doğru" veya "yanlış" olarak doğru derecelendirilmelidir.';
$string['privacy:metadata'] = 'Kprime/Matrix Soru Türü eklentisi herhangi bir kişisel veri saklamaz.';
$string['refresh_matrix'] = 'Yanıtlama matrisini yenileyin';
$string['rows_description'] = 'Açıklama';
$string['rows_feedback'] = 'Geribildirim';
$string['rows_shorttext'] = 'Cevap bildirimi';
$string['rowsheader'] = 'Matris sıraları';
$string['rowsheader_desc'] = '<p> Kısa metin, uzun metni bir araç ipucu olarak olduğunda kullanılır. <br /> Bunun nasıl görüntüleneceğine dikkat edin </p>
<p> Öğrenciler, sorunun nasıl yapılandırıldığına bağlı olarak satır başına birden çok veya tek sütun seçebilir ve her satır, derecelendirme yöntemlerinden biriyle tanımlanan bir not alır. </p>
<p> Sorunun son sınıfı, tüm yanıtların doğru olması gereken Kprime türünün istisnasına sahip her bir sıra için notlarının ortalamasıdır. </p>';
$string['show_non_kprime_gui'] = 'Kprime matris seçenekleri (dört sıradan fazla, ikiden fazla sütun, birden fazla seçenek) olmayan seçenekler için grafik kullanıcı arayüzü gösterin.';
$string['shuffleanswers'] = 'Cevap tablolarını karışık mı?';
$string['shuffleanswers_help'] = 'Etkinleştirilirse, yanıt tablolarının sırası, etkinlik ayarlarında "Sorularda karışıklık" seçeneğinin de etkin olması koşuluyla her girişimi için rastgele karıştırılır.';
$string['true'] = 'Doğru';
$string['use_dnd_ui'] = 'Sürükle ve bırak kullanılsın mı?';
$string['weightednomultiple'] = 'Ağırlıklı derecelendirmeyi seçmek mantıklı değil, birden çok cevap verilmez.';
