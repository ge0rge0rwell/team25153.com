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
 * Strings for component 'filter_videoeasy', language 'tr', version '5.0'.
 *
 * @package     filter_videoeasy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bundle'] = 'Paket';
$string['defaultposterimage'] = 'Varsayılan poster resmi';
$string['defaultposterimage_desc'] = 'Standart varsayılan poster resmi yalnızca gri bir kutudur. Burada sitenize daha uygun özel bir resim yükleyebilirsiniz. Varsayılan bir poster resmi, yalnızca oyuncu şablonu belirtilmişse gösterilir.';
$string['extensionheading'] = 'Dosya Uzantısı İşleyicileri';
$string['extensions'] = 'Dosya Uzantıları';
$string['extensions_desc'] = 'Bu filtrenin ayrıştırılacağı dosya uzantılarının bir CSV (virgülle ayrılmış değer) listesi.';
$string['filterdescription'] = 'Video bağlantı dizelerini oynatıcılara dönüştürün';
$string['filtername'] = 'Kolay video';
$string['player'] = 'Oynatıcı {$a}';
$string['player_flowplayer'] = 'Oynatıcıakışı';
$string['player_jplayervideo'] = 'JPlayer (Video)';
$string['player_jwplayer'] = 'JW oynatıcısı';
$string['player_mediaelement'] = 'MediaElement.js';
$string['player_playereight'] = 'Oynatıcı 8';
$string['player_playereleven'] = 'Oynatıcı 11';
$string['player_playerfifteen'] = 'Oynatıcı 15';
$string['player_playerfourteen'] = 'Oynatıcı 14';
$string['player_playernine'] = 'Oynatıcı 9';
$string['player_playerseven'] = 'Oynatıcı 7';
$string['player_playersix'] = 'YouTube Lightbox';
$string['player_playerten'] = 'Oynatıcı 10';
$string['player_playerthirteen'] = 'Oynatıcı 13';
$string['player_playertwelve'] = 'Oynatıcı 12';
$string['player_sublimevideo'] = 'Görkemli video';
$string['player_videojs'] = 'Video.js';
$string['pluginname'] = 'Kolay video';
$string['presets'] = 'Şablonu Otomatik Önbellekle Otomatik Doldurma';
$string['presets_desc'] = 'VideoEasy, kutudan çıkarıp kendi şablonunuza başlamanıza yardımcı olmak için kullanabileceğiniz bazı varsayılan önayarlarla birlikte gelir. Bunlardan birini seçin veya sadece sıfırdan kendi şablonunuzu oluşturun. Yukarıdaki yeşil kutuyu tıklayarak bir şablonu paket olarak verebilirsiniz. Bir kutuyu yeşil kutuya sürükleyerek içe aktarabilirsiniz.';
$string['privacy:metadata'] = 'VideoEasy filtre eklentisi herhangi bir kişisel veri saklamaz.';
$string['sitedefault'] = 'Site varsayılanı';
$string['template'] = 'şablon';
$string['template_desc'] = 'Şablonu buraya koyun, değişkenleri e ile ya da @@ işaretleriyle çevreleyerek tanımlayın. Örneğin @@variable@@';
$string['templatealternate'] = 'Alternatif içerik';
$string['templatealternate_desc'] = 'Özel ve yüklenen CSS ve javascript içeriği mevcut olmadığında kullanılabilir içerik. Şu anda bu, şablon bir webcoder tarafından işlendiğinde, muhtemelen mobil uygulamadaki içerik için kullanılır';
$string['templatedefaults'] = 'varsayılanlar';
$string['templatedefaults_desc'] = 'Şablon/komut dosyasındaki özel değişkenler için varsayılan değerler. Genellikle sadece genişlik ve yükseklik. Virgülle ayrılmış isim = değer çiftleri grubunu girin. Örn. width=800,height=900,feeling=joy';
$string['templateheading'] = '{$a} için ayarlar';
$string['templatekey'] = 'Şablon anahtarı';
$string['templatekey_desc'] = 'Bu şablonu tanımlayan kimlik. Sitede benzersiz olmalı. Kullanıcılar bunu asla görmez. Değiştirirseniz şablonu/oynatıcıyı uygun dosya uzantısına yeniden atamanız gerekir. Değiştirmemeye çalışın. Yalnızca alfasayısal karakterler kullanın (boşluk bırakmayın)';
$string['templatename'] = 'Şablon adı';
$string['templatename_desc'] = 'Bu şablonun adı';
$string['templatepageheading'] = 'Şablon: {$a}';
$string['templatepageheading_handlers'] = 'Genel Ayarlar';
$string['templaterequire_amd'] = 'AMD\'den yükleme';
$string['templaterequire_amd_desc'] = 'AMD bir javascript yükleme mekanizmasıdır. Şablonunuza javascript kitaplıkları yüklerseniz veya bağlantı oluşturursanız, bu işaretin işaretini kaldırmanız gerekebilir. Sadece Moodle 2.9 veya daha üstü';
$string['templaterequirecss'] = 'CSS URL\' si';
$string['templaterequirecss_desc'] = 'Bu, gerekli herhangi bir CSS dosyasının URL\'si. // ile başlamak için deneyin.';
$string['templaterequirejs'] = 'javascript URL\' si';
$string['templaterequirejs_desc'] = 'Bu, gerekli herhangi bir javascript kitaplığının URL\'si. // ile başlamak için deneyin.';
$string['templaterequirejsshim'] = 'Requirejs Shim dışa aktarma';
$string['templaterequirejsshim_desc'] = 'Nelerin kesildiğini bilmediğiniz sürece boş bırakın.';
$string['templatescript'] = 'Komut dosyasını yükle';
$string['templatescript_desc'] = 'Yükleme komut dosyasını (varsa) buraya yerleştirin, değişkenleri her iki uçta da @@ işaretleriyle çevreleyerek tanımlayın. Örneğin @@variable@@';
$string['templatestyle'] = 'Özel CSS (şablon {$a})';
$string['templatestyle_desc'] = 'Şablonunuzun burada kullandığı özel CSS\'leri girin. Şablon değişkenleri burada çalışmaz. Sadece eski css.';
$string['templateuploadjsshim'] = 'Shim dışa aktarmayı yükleyin';
$string['templateuploadjsshim_desc'] = 'Nelerin kesildiğini bilmediğiniz sürece boş bırakın.';
$string['uploadcss'] = 'CSS yükleyin';
$string['uploadcss_desc'] = 'Şablonunuz için yüklenecek bir CSS dosyası yükleyebilirsiniz. Sadece bir.';
$string['uploadjs'] = 'JS\'yi yükle';
$string['uploadjs_desc'] = 'Şablonunuz için yüklenecek bir js kitaplık dosyası yükleyebilirsiniz. Sadece bir.';
$string['useplayer'] = '{$a} Oynatıcı';
$string['useplayerdesc'] = 'Seçilen oynatıcı uygun şablondan gelen bilgileri kullanacaktır.';
