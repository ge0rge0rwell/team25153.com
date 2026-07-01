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
 * Strings for component 'tool_crawler', language 'tr', version '5.0'.
 *
 * @package     tool_crawler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Otomatik oluştur';
$string['bigfilesize'] = 'Büyük dosyaların boyutu';
$string['bigfilesizedesc'] = 'Büyük boy olarak işaretlenmesi için dosyanın ne kadar büyük olması gerekiyor. MB olarak';
$string['botcantgettestpage'] = 'Bot test sayfası talep edemedi';
$string['botpassword'] = 'Bot şifresi';
$string['botpassworddesc'] = 'Moodle kullanıcısının taranacağı şifre. Bu kullanıcının site genelinde görüntüleme iznine sahip olması, ancak çok sınırlı düzenleme izinlerine sahip olması ve temel kimlik doğrulamasını kullanacak şekilde yapılandırılması gerekir.';
$string['bottestpagenotreturned'] = 'Bot test sayfası döndürülmedi';
$string['bottestpageredirected'] = 'Bot test sayfası {$a->resredirect} adresine yönlendirildi';
$string['botuser'] = 'Bot kullanıcısı';
$string['botusermissing'] = 'Bot kullanıcısı eksik';
$string['botusername'] = 'Bot kullanıcı adı';
$string['botusernamedesc'] = 'Moodle kullanıcısının taranacağı kullanıcı adı';
$string['broken'] = 'Kırık bağlantılar / URL\'ler';
$string['broken_header'] = '<p>Yinelenen URL\'ler yalnızca bir kez aranır. </p>';
$string['configmissing'] = 'Yapılandırma eksik';
$string['course'] = 'Kurs';
$string['crawlend'] = 'Tarama sonu';
$string['crawlstart'] = 'Tarama başlatma';
$string['cronticks'] = 'Cron işareti';
$string['curcrawlstart'] = 'Şu anda tarama başladı';
$string['duration'] = 'Süre';
$string['event:crawlstart'] = 'Bağlantı kontrolü, tarama başladı';
$string['event:crawlstartdesc'] = 'Bağlantı kontrolü çekme başladı {$a}';
$string['eventrobotcleanupcompleted'] = 'Bağlantı denetleyicisi robot temizliği tamamlandı';
$string['eventrobotcleanupstarted'] = 'Bağlantı denetleyicisi robot temizleme başladı';
$string['excludecourses'] = 'Kursları hariç tut';
$string['excludecoursesdesc'] = 'Hat başına bir ders  düzenli ifade kısakodu';
$string['excludeexturl'] = 'Harici URL\'leri hariç tut';
$string['excludeexturldesc'] = 'Her satıra bir tane url düzenli ifadeleri, her biri tam url\'ye göre eşleştirilir';
$string['excludemdldom'] = 'Moodle DOM\'larını hariç tutun';
$string['excludemdldomdesc'] = 'Satır başına bir css / xpath ifadesi, DOM\'ların bu kısımları, bağlantılar çıkarılmadan kaldırılır';
$string['excludemdlparam'] = 'Moodle url parametrelerini hariç tut';
$string['excludemdlparamdesc'] = 'Her hat için bir tane param tuşu. Bunu kullanan URL\'ler hala taranacak, ancak bu parametreler kaldırılarak çoğaltılmaları önleyecek.';
$string['excludemdlurl'] = 'Moodle URL\'lerini hariç tut';
$string['excludemdlurldesc'] = 'Her satıra bir tane url düzenli ifadesi, wwwroot hariç her biri eşleştirilir';
$string['found'] = 'Bulundu';
$string['frompage'] = 'Sayfadan gelen';
$string['good'] = 'İyi';
$string['hellorobot'] = 'Merhaba robot: \'{$a->botusername}';
$string['idattr'] = 'HTML bağlamı';
$string['incomingurls'] = 'Gelen URL\'ler';
$string['incourse'] = 'Kursta';
$string['lastcrawledtime'] = 'Son tarama zamanı';
$string['lastcrawlend'] = 'Son tarama sona erdi:';
$string['lastcrawlproc'] = 'Son tarama işlemi';
$string['lastqueuesize'] = 'Son kuyruk boyutu';
$string['linktext'] = 'Bağlantı metni';
$string['maxcrontime'] = 'Cron çalışma sınırı';
$string['maxcrontimedesc'] = 'Tarayıcı, her bir cron işareti için bu sınır vuruşa kadar ağır ağır devam edecektir. Saniyeler içinde';
$string['maxtime'] = 'Maksimum yürütme süresi';
$string['maxtimedesc'] = 'Her bir tarama isteği için zaman aşımı';
$string['mimetype'] = 'Mime tipi';
$string['missing'] = 'Eksik';
$string['neverfinished'] = 'Bitirmedi';
$string['neverrun'] = 'Yürütemedi';
$string['no'] = 'Hayır';
$string['notyetknown'] = 'Henüz bilinmiyor';
$string['numberurlsfound'] = '{$a->reports_number} {$a->repoprt_type} URL bulundu';
$string['numlinks'] = 'Toplam bağlantılar';
$string['numurls'] = 'Toplam url\'ler';
$string['outgoingurls'] = 'Giden URL\'ler';
$string['oversize'] = 'Büyük / yavaş bağlantılar';
$string['oversize_header'] = '<p>Onlara birden fazla gelen bağlantıya sahip büyük dosyalar çoğaltılacaktır. </p>';
$string['pluginname'] = 'Bağlantı sürdürme robotu';
$string['privacy:no_data_reason'] = 'Tarayıcı eklentisi herhangi bir kişisel veri saklamaz.';
$string['progress'] = 'İlerleme';
$string['progresseta'] = '{$a->percent} ETA içinde {$a->eta}';
$string['queued'] = 'Sıraya alınan URL\'ler';
$string['queued_header'] = '<p>Başlık ve ders sadece URL\'nin önceki taramada görülmesi durumunda bilinir. </p>';
$string['recent'] = 'Son zamanlarda taranan URL\'ler';
$string['resetprogress'] = 'İlerlemeyi Sıfırla';
$string['resetprogress_header'] = 'Sürdürülebilir İlerleme Durumunu Sıfırla';
$string['resetprogress_warning'] = 'Uyarı. sürdürülebilir ilerlemeyi sıfırlamak üzeresiniz. Bunu yapmak istediğinden emin misin?';
$string['response'] = 'Yanıt';
$string['retentionperiod'] = 'Kötü URL\'ler için saklama süresi';
$string['retentionperioddesc'] = 'Kötü URL\'leri db\'de kaç gün tutucaksınız.';
$string['retry'] = 'Yeniden dene';
$string['robotcleanup'] = 'Robot temizleme';
$string['robotstatus'] = 'Robot durumu';
$string['seedurl'] = 'Çekirdek URL';
$string['seedurldesc'] = 'Tarayıcı nerede başlar?';
$string['settings'] = 'Ayarlar';
$string['size'] = 'Boyut';
$string['slowurl'] = 'Yavaş URL';
$string['status'] = 'Robot Durumu';
$string['unknown'] = 'Bilinmiyor';
$string['url'] = 'URL';
$string['urldetails'] = 'URL Ayrıntıları';
$string['urldetails_help'] = 'Bu, bu URL için gelen ve giden tüm bağlantıları gösterir.
Kara listeye alınmış veya hariç tutulan DOM öğelerindeki bağlantılar gösterilmeyecektir.';
$string['useraccount'] = 'Kullanıcı hesabı';
$string['useragent'] = 'Kullanıcı aracı dizesi Bot';
$string['useragentdesc'] = 'HTTP üstbilgilerinde kullandığı Kullanıcı Aracısı dizesi + bu eklentinin sürümü';
$string['whenqueued'] = 'Sıraya alındığında';
$string['yes'] = 'Evet';
