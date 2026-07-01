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
 * Strings for component 'atto_styles', language 'tr', version '5.0'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['code_example'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Mavi Kutu", <br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block", <br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "kutu mavi", <br />
&nbsp;&nbsp;&nbsp;&nbsp;"preview": doğru<br />
}';
$string['config'] = 'Sitilleri yapılandırma';
$string['config_desc'] = 'JSON formatında atto için stiller widget\'ının yapılandırması. <br /> <a href="https://github.com/moodle-an-hochschulen/moodle-atto_styles/blob/master/README.md#usage--settings"> "Kullanım ve Ayarlar" </a> bölümündeki README.md dosyasında kapsamlı bir örnek bulabilirsiniz.
<hr />
Örnek olarak:<br />
{$a->kod_örnek}
 <hr/>
 <em>title</em> özniteliği, Atto stilleri widget\'ındaki stilin adını tanımlar.<br />
 <br />
 Bir başlık, Moodle çok dilli filtreyi de destekleyebilir (etkinse), ancak ek çift tırnakların ters eğik çizgi ile atlanması gerekir.<br />
 Lütfen bir örnek için eklentinin README dosyasına bakın.<br />
 <hr/>
 <em>type</em> özelliği iki değerden birini içerebilir: "block" veya "inline".<br />
 <br />
 "blok", verilen sınıf(lar) ile bir div etiketi oluşturacak ve standart bir blok düzeyi öğesi olarak işlev görecektir.  Bu, geçerli blok düzeyi öğesini devralacak ve yalnızca seçili olan metinden daha fazlası için geçerli olabilir.<br />
 <br />
 "inline", verilen sınıf(lar) ile bir yayılma etiketi oluşturacak ve standart bir satır içi öğe olarak işlev görecektir.  Bu yalnızca seçili olan metin için geçerli olacaktır.
  <hr/>
 <em>classes</em> niteliği, blok / satır içi metne uygulanacak CSS sınıf adını alır.<br />
 <br />
 Her öğe için bir boşlukla ayrılmış birden çok sınıf tanımlanabilir.  Hepsi bloğa / satır içi metne uygulanacaktır.<br />
 <br />
 CSS sınıf tanımları bu eklenti içerisinde yapılamaz.  CSS sınıf tanımlarınızı temanıza veya Moodle ek HTML ayarlarınıza eklemeniz gerekecektir.
 <hr/>
 <em>preview</em> özniteliği, true veya false (varsayılan) boolean değerlerini alır.  Bu değer true olarak ayarlanırsa, stil öğesi stilin gerçek bir önizlemesini alır.  Aksi takdirde, stil öğesi yalnızca başlığını düz metin olarak gösterir.<br />
 <br />
 Bir stil öğesinin önizlemesini göstermeyi seçerseniz, stil öğesinin kendisi blok düzeyinde bir öğe olsa bile, bu sınıfın CSS\'de yayılma etiketlerine uygulanabilecek şekilde tanımlanması gerektiğini lütfen unutmayın.
 <hr/>
 Önyükleme tabanlı temalara (özellikle <em>Boost</em>) sahip Moodle kurulumlarında, kendi sınıflarınızı tanımlamak yerine önyükleme CSS sınıflarıyla da stiller oluşturabilirsiniz.
 <br /><br />
 Örneğin:<br />
 {$a->code_example_bootstrap}
 <br/><br/>
 Bootstrap sınıfları hakkında daha fazla bilgi için lütfen Bootstrap 4 belgelerindeki aşağıdaki bağlantıları ziyaret edin:
 <ul>
 <li><a href="https://getbootstrap.com/docs/4.6/components/badge/">Bootstrap rozetleri</a></li>
 <li><a href="https://getbootstrap.com/docs/4.6/components/alerts/">Bootstrap uyarıları</a></li>
 <li><a href="https://getbootstrap.com/docs/4.6/utilities/">Bootstrap yardımcı programları</a></li>
 </ul>
 <hr/>
 Birden fazla tanımın köşeli parantez içine alınması gerektiğini lütfen unutmayın.
 <br /><br />
 Örneğin:<br />
 {$a->code_example_bootstrap_multiple}';
$string['nostyle'] = 'Sitil yok';
$string['pluginname'] = 'Sitiller';
$string['privacy:metadata'] = 'atto_styles eklentisi herhangi bir kişisel veri saklamaz.';
$string['settings'] = 'Sitil ayarları';
