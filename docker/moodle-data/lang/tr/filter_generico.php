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
 * Strings for component 'filter_generico', language 'tr', version '5.0'.
 *
 * @package     filter_generico
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bundle'] = 'Paket';
$string['commonpageheading'] = 'Genel Ayarlar';
$string['dataset'] = 'Veri kümesi';
$string['dataset_desc'] = 'Generico, şablonunuzda kullanmak üzere bir veri kümesini veritabanından çekmenizi sağlar. Bu gelişmiş bir özelliktir. Bir $DB->get_records_sql çağrısının sql bölümünü buraya girin.';
$string['datasetvars'] = 'Veri Kümesi Değişkenleri';
$string['datasetvars_desc'] = 'SQL için değişkenleri virgülle ayrılmış bir liste halinde koyun. Değişkenleri burada ve muhtemelen kullanmayı isteyebilirsiniz.';
$string['filterdescription'] = 'Filtre dizelerini veriyle birleştirilen şablonlara dönüştürme';
$string['filtername'] = 'Generico';
$string['pluginname'] = 'Generico';
$string['presets'] = 'Şablonu Otomatik Önbellekle Otomatik Doldurma';
$string['presets_desc'] = 'Generico, kutudan çıkarıp kendi şablonunuza başlamanıza yardımcı olmak için kullanabileceğiniz bazı varsayılan hazır ayarlarla birlikte gelir. Bunlardan birini seçin veya sadece sıfırdan kendi şablonunuzu oluşturun. Yukarıdaki yeşil kutuyu tıklayarak bir şablonu paket olarak verebilirsiniz. Bir kutuyu yeşil kutuya sürükleyerek içe aktarabilirsiniz.';
$string['privacy:metadata'] = 'Generico filtre eklentisi herhangi bir kişisel veri saklamaz.';
$string['template'] = 'Şablonun gövdesi {$a}';
$string['template_desc'] = 'Şablonu buraya koyun, değişkenleri e ile ya da @@ işaretleriyle çevreleyerek tanımlayın. Örneğin @@variable@@';
$string['templatealternate'] = 'Alternatif içerik';
$string['templatealternate_desc'] = 'Özel ve yüklenen CSS ve javascript içeriği mevcut olmadığında kullanılabilir içerik. Şu anda bu, şablon bir webcoder tarafından işlendiğinde, muhtemelen mobil uygulamadaki içerik için kullanılır';
$string['templatealternate_end'] = 'Alternatif içerik sonu ((şablon {$a})';
$string['templatealternate_end_desc'] = 'Kullanıcı içeriğini başlangıç ve bitiş ile kuşatan şablonlar için alternatif içerik etiketlerini kapatma Generico etiketleri';
$string['templatecount'] = 'Şablon Sayısı';
$string['templatecount_desc'] = 'Sahip olabileceğiniz şablonların sayısı. Varsayılan 20\'dir.';
$string['templatedefaults'] = 'Değişken varsayılanlar ({$a} şablonu)';
$string['templatedefaults_desc'] = 'Varsayılanları, virgülle ayrılmış name=value çiftleri kümelerinde tanımlayın. Örneğin width=800,height=900,feeling=joy';
$string['templateend'] = 'Bitiş etiketleri ({$a} şablonu)';
$string['templateend_desc'] = 'Şablonunuz kullanıcı içeriğini, örneğin bir bilgi kutusu içeriyorsa, kapanış etiketlerini buraya koyun. Kullanıcı filtreyi kapatmak için {GENERICO: mytag_end} gibi bir şey girecek.';
$string['templateheading'] = 'Generico Şablonu {$a} için Ayarlar';
$string['templateheadingcss'] = 'CSS/Stil Ayarları.';
$string['templateheadingjs'] = 'Javascript Ayarları.';
$string['templateinstructions'] = 'Talimatlar (şablon {$a})';
$string['templateinstructions_desc'] = 'Burada girilen talimatlar, bu şablonun Genel taso biçiminde görüntülenir. Onları kısa tutun yoksa kötü görünecektir.';
$string['templatekey'] = 'Şablonu tanımlayan anahtar {$a}';
$string['templatekey_desc'] = 'Anahtar bir kelime olmalı ve yalnızca rakamlar ve harfler, alt çizgiler, tire ve noktalar içermelidir.';
$string['templatename'] = 'Şablon Adı';
$string['templatepageheading'] = 'Şablon: {$a}';
$string['templaterequire_amd'] = 'AMD\'den yükleme';
$string['templaterequire_amd_desc'] = 'AMD bir javascript yükleme mekanizmasıdır. Şablonunuza javascript kitaplıkları yüklerseniz veya bağlantı oluşturursanız, bu işaretin işaretini kaldırmanız gerekebilir. Sadece Moodle 2.9 veya daha üstü';
$string['templaterequire_css'] = 'CSS gerektiren (şablon {$a})';
$string['templaterequire_css_desc'] = 'Bu şablonun gerektirdiği harici bir CSS dosyasına bir bağlantı (yalnızca 1). isteğe bağlı.';
$string['templaterequire_js'] = 'JS gerektiren (şablon {$a})';
$string['templaterequire_js_desc'] = 'Bu şablonun gerektirdiği harici bir JS dosyasına bağlantı (yalnızca 1). isteğe bağlı.';
$string['templaterequirejsshim'] = 'Dolgunun dışa aktarılması gerekli';
$string['templaterequirejsshim_desc'] = 'Nelerin kesildiğini bilmediğiniz sürece boş bırakın.';
$string['templatescript'] = 'Özel JS (şablon {$a})';
$string['templatescript_desc'] = 'Şablonunuzun özel javascript çalıştırması gerekiyorsa, buraya girin. Sayfadaki tüm öğeler yüklendikten sonra çalıştırılacaktır.';
$string['templatestyle'] = 'Özel CSS (şablon {$a})';
$string['templatestyle_desc'] = 'Şablonunuzun burada kullandığı özel CSS\'leri girin. Şablon değişkenleri burada çalışmaz. Sadece eski css.';
$string['templateuploadjsshim'] = 'Dışa aktarmak için dolguyu yükle';
$string['templateuploadjsshim_desc'] = 'Nelerin kesildiğini bilmediğiniz sürece boş bırakın.';
$string['uploadcss'] = 'CSS yükle (şablon {$a})';
$string['uploadcss_desc'] = 'Şablonunuz için yüklenecek bir CSS dosyası yükleyebilirsiniz. Sadece bir.';
$string['uploadjs'] = 'JS\'yi yükle (şablon {$a})';
$string['uploadjs_desc'] = 'Şablonunuz için yüklenecek bir js kitaplık dosyası yükleyebilirsiniz. Sadece bir.';
