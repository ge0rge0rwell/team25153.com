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
 * Strings for component 'local_staticpage', language 'tr', version '5.0'.
 *
 * @package     local_staticpage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Apache mod_rewrite\'u zorla';
$string['apacherewrite_desc'] = 'Statik sayfaları yalnızca temiz bir URL ile sunun, Apache mod_rewrite ile yeniden yazın. Ayrıntılar için README dosyasına bakın.';
$string['checkavailabilityyes'] = 'Evet, müsaitliği kontrol et';
$string['cleanhtml'] = 'HTML kodunu temizle';
$string['cleanhtml_desc'] = 'Statik sayfanın HTML kodunun temizlenip temizlenmeyeceğini yapılandırın (ve böylece <iframe> gibi özel etiketler kaldırılacaktır). Ayrıntılar için README\'ye bakınız.';
$string['cleanhtmlno'] = 'Hayır, HTML kodunu temizleme';
$string['cleanhtmlyes'] = 'Evet, HTML kodunu temizle';
$string['documentheadingsource'] = 'Doküman başlığının veri kaynağı';
$string['documentheadingsource_desc'] = 'Statik sayfanın belge başlığının veri kaynağı';
$string['documents'] = 'Belgeler';
$string['documents_desc'] = '.html dosyaları statik sayfaların HTML koduyla birlikte. Ayrıntılar için README dosyasına bakın.';
$string['documenttitlesource'] = 'Belge başlığının veri kaynağı';
$string['documenttitlesource_desc'] = 'Statik sayfaların belge başlığının veri kaynağı (tarayıcı başlık çubuğunda kullanılır)';
$string['documenttitlesourceh1'] = 'HTML kodundaki ilk h1 etiketi (genellikle gövde etiketini açtıktan kısa bir süre sonra bulunur)';
$string['documenttitlesourcehead'] = 'HTML kodunda ilk başlık etiketi (genellikle head etiketinde bulunur)';
$string['forcelogin'] = 'Girişi zorla';
$string['forcelogin_desc'] = 'Yalnızca oturum açmış olan kullanıcılar veya oturum açmamış ziyaretçiler için statik sayfalar sunun. Bu davranış, statik sayfalar için özel olarak ayarlanabilir veya Moodle\'ın global forcelin ayarına uyacak şekilde ayarlanabilir. Ayrıntılar için README\' e bakın.';
$string['forceloginglobal'] = 'Genel ayara riayet edin $CFG->forcelogin';
$string['pagenotfound'] = 'Sayfa bulunamadı';
$string['pluginname'] = 'Statik sayfa';
$string['processcontent'] = 'İşlem içeriği';
$string['processfilters'] = 'İşlem filtreleri';
$string['processfilters_desc'] = 'Statik sayfanın içeriğini sunarken Moodle filtrelerinin (özellikle çok dilli filtrenin) işlenip işlenmeyeceğini yapılandırın. Ayrıntılar için README\' e bakın.';
$string['processfiltersno'] = 'Hayır, filtreler işlemez';
$string['processfiltersyes'] = 'Evet, filtreler işlesin';
$string['settingspagelist'] = 'Statik sayfaların listesi';
$string['settingspagelistentryfilename'] = 'Aşağıdaki belge dosyası bulundu:<br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'Moodle, belge dosyasının dosya adına göre aşağıdaki sayfa adını türetmiştir:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'Statik sayfas aşağıdaki temiz URL için geçerli olmalıdır, ancak aslında bir tarayıcı açmak ve (belki sunucunuza veya mod_rewrite yapılandırması ile yanlış bir şey var - ayrıntılar için README dosyasına bakın) bunu görmek mümkün olmayacaktır:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'Statik sayfa mevcuttur ve aşağıdaki temiz URL\'den bağlanılabilir';
$string['settingspagelistentrystandardfail'] = 'Statik sayfa aşağıdaki standart URL\'den mevcut olmalıdır, ama aslında bir tarayıcı açmak ve (belki web sunucusu yapılandırma ile yanlış bir şey var - ayrıntılar için README dosyasına bakın) bunu görmek mümkün olmayacaktır:<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'Statik sayfa mevcuttur ve aşağıdaki standart URL\'de bağlanabilir:<br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Bu liste, içine yüklenen tüm statik sayfaları gösterir.<a href="{$a}"> statik sayfalar doküman alanı </a> ve URL\'leri';
$string['settingspagelistnofiles'] = '<a href="{$a}"> Statik sayfa dokümanlarında </a> .html dosyaları yok, bu nedenle teslim edilecek statik sayfa yok. Ayrıntılar için README dosyasına bakın.';
$string['upgrade_notice_2016020307'] = '<strong> YÜKSELTME İLE İLGİLİ BİLDİRİ: </strong> Statik sayfa belge dosyaları, Moodle içindeki yeni dosya alanına taşınmıştır. Eski belge dizinini {$a} şimdi silebilirsiniz. Daha fazla yükseltme talimatı için, özellikle bu eklentinin çok dilli özelliklerini kullanıyorsanız, README dosyasına bakın.';
