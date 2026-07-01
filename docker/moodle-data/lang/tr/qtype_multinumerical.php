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
 * Strings for component 'qtype_multinumerical', language 'tr', version '5.0'.
 *
 * @package     qtype_multinumerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Cevabınız: {$a}';
$string['badfeedbackperconditionsyntax'] = 'Her satırın formu olmalıdır: &quot;Feedback doğruysa geri bildirim | Durum yanlış ise geri bildirim &quot;';
$string['badnumfeedbackperconditions'] = 'Kısıtlama geri bildirim başına sayısı, kısıtlamaların sayısından daha yüksek olamaz';
$string['binarygrade'] = 'Not hesaplama';
$string['conditionnotverified'] = 'Doğrulanmamış kısıtlama';
$string['conditions'] = 'Kısıtlamalar';
$string['conditionverified'] = 'Doğrulanan kısıtlama';
$string['displaycalc'] = 'Hesaplama sonucunu göster';
$string['feedbackperconditions'] = 'Her kısıtlama geribildirimi';
$string['gradebinary'] = 'Ya hep ya hiç';
$string['gradefractional'] = 'Kesirli';
$string['helponquestionoptions'] = 'Bu soru türü ve aşağıdaki seçeneklerin davranışı hakkında daha fazla bilgi için, lütfen bu formun üst kısmındaki yardım düğmesine tıklayın.';
$string['noncomputable'] = '(doğru cevaplar otomatik olarak hesaplanamaz)';
$string['onlyforcalculations'] = 'Yalnızca hesaplamalar için';
$string['parameters'] = 'Parametreler';
$string['pleaseenterananswer'] = 'Lütfen bir cevap girin';
$string['pluginname'] = 'Çok sayılı';
$string['pluginname_help'] = '<h2>Nasıl çalışır</h2>
<p>Çok sayılı bir soru, öğrencilerin birkaç (sayısal) parametreden oluşan bir cevap istemelerini sağlar.</p>
<p><strong>Örneğin:</strong> find <span style="font-family:monospace">X</span> and <span style="font-family:monospace">Y</span> such that </p>
<ul><li>X + Y < 20</li><li>X * Y > 35</li></ul>
<p>Bu sorunun <em>possibly</em>  her zaman doğru yanıtı vardır ve bu koşulları yerine getiren herhangi bir cevap doğru değerlendirilmelidir.</p>s
<p>Bu soru türü daha sonra aradığımız parametreleri tanımlamaya izin verir (burada, <span style="font-family:monospace">X</span> ve <span style="font-family:monospace">Y</span>) Ve verilen kısıtlamalar.</p>
<h2>Usage</h2>
<ul>
	<li>Virgülle ayrılmış parametrelerin listesini girin(in our example "<span style="font-family:monospace">X,Y</span>").<br />
	<strong>Note :</strong>Her bir parametrenin ardından birimler girilebilir:
	"<span style="font-family:monospace">X [m],Y [h]</span>" (Parametre ile birimi arasında boşluk olması gerekir).</li>
	<li>Sınırları, her satıra bir tane olmak üzere girin; Örneğin: <pre>X + Y < 20
X * Y > 35</pre>(Boş satırlar yok sayılır)
    <p>Kullanılabilir operatörler: <ul>
        <li>"<span style="font-family:monospace">=</span>" (eşitlik)</li>
        <li>"<span style="font-family:monospace"><</span>" (küçüktür)</li>
        <li>"<span style="font-family:monospace"><=</span>" (küçüktür veya eşittir)</li>
        <li>"<span style="font-family:monospace">></span>" (büyüktür)</li>
        <li>"<span style="font-family:monospace">>=</span>" (büyüktür veya eşittir)</li>
        <li>aralıklar:
            <pre><span style="font-family:monospace">X = [1;5]</span></pre> (kapalı)
            <pre><span style="font-family:monospace">X = ]1;5[</span></pre> (açık)
        </li>
    </ul></p></li>
	<li>İsterseniz her kısıtlama için bir geribildirim girin. Örneğimizde aşağıdakiler girebilir:
    <pre>OK : X + Y < 20 | No, X + Y >= 20 !
OK : X * Y > 35 | No, X + Y <= 35 !</pre>
    </li>
    <li>"Hesaplama sonucunu göster" seçeneği işaretlendiyse, geri bildirim her bir kısıtlamanın sayısal bir değerlendirmesini görüntüler.
     Bu yalnızca, bu kısıtlama için geri bildirim boş değilse görüntülenir.<br />
" Yalnızca hesaplamalar için " İşaretlendiğinde, (<span style = "font-family: monospace">X > 5</span> gibi) hesaplanmamış kısıtlamalar için bu sorunun cevabını vermeyecek şekilde öğrenciye gösterilmeyecektir</li>
    <li>"Not hesaplama"seçeneği kısmen doğru cevap notu, ya da boş not veya notun  bir kısmının verilişini belirler.</li>
</ul>';
$string['pluginname_link'] = 'question/type/multinumerical';
$string['pluginnameadding'] = 'Çok sayılı bir soru ekleme';
$string['pluginnameediting'] = 'Çok sayılı bir soruyu düzenleme';
$string['pluginnamesummary'] = 'Denklemler veya eşitsizlikler tarafından yönetilen, doğru cevapları çok olan bir soru oluşturmaya izin verir.';
$string['privacy:metadata'] = 'Çok Sayısal Soru Tipi eklentisi herhangi bir kişisel veri depolamaz.';
$string['qtypeoptions'] = 'Çok sayılı soru türüne özgü seçenekler';
$string['usecolorforfeedback'] = 'Kısıtlama geribildirim başına renk kullanın';
