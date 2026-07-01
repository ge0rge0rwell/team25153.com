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
 * Strings for component 'repository_nextcloud', language 'tr', version '5.0'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Dahili ve harici';
$string['cannotconnect'] = 'Kullanıcının kimliği doğrulanamadı.  Lütfen giriş yapın ve ardından dosyayı yükleyin.';
$string['chooseissuer'] = 'Yayıncı';
$string['chooseissuer_help'] = 'Yeni bir düzenleyici eklemek için Site yönetimi / Sunucu / OAuth 2 hizmetlerine gidin.';
$string['configplugin'] = 'Nextcloud veri havuzu yapılandırması';
$string['configuration_exception'] = 'OAuth 2 istemcisinin yapılandırmasında bir hata oluştu: {$a}';
$string['contactadminwith'] = 'İstenen işlem gerçekleştirilemedi.  Bu tekrar tekrar olursa, lütfen aşağıdaki ek bilgilerle birlikte site yöneticisiyle iletişime geçin:<br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'İstenen dosya {$a} klasörüne taşınamadı.';
$string['defaultreturntype'] = 'Varsayılan iade türü';
$string['endpointnotdefined'] = '{$a} uç noktası tanımlanmadı.';
$string['external'] = 'Harici (yalnızca Moodle\'da saklanan bağlantılar)';
$string['externalpubliclinkwarning'] = 'Uyarı: Bu dosya herkese açık olacak.';
$string['filenotaccessed'] = 'İstenen dosyaya erişilemedi.  Lütfen geçerli bir dosya seçip seçmediğinizi ve doğru hesapla kimliğinizin doğrulanıp onaylanmadığını kontrol edin.';
$string['fileoptions'] = 'Döndürülen dosyaların türleri ve varsayılanları burada yapılandırılabilir.  Harici olarak bağlanan tüm dosyaların, sahibi Moodle sistem hesabı olacak şekilde güncelleneceğine dikkat edin.';
$string['foldername'] = 'Erişim kontrollü tüm bağlantıların bulunduğu, Nextcloud kullanıcılarının özel alanında oluşturulan klasörün adı.';
$string['foldername_help'] = 'Kullanıcıların kendileriyle paylaşılan dosyaları bulmasını sağlamak için paylaşımlar belirli bir klasöre kaydedilir.

Bu ayar klasörün adını belirler.  Moodle örneğiniz ile ilişkilendirilmiş bir ad seçmeniz önerilir.';
$string['internal'] = 'Dahili (Moodle\'da saklanan dosyalar)';
$string['invalidresponse'] = 'Geçersiz sunucu yanıtı.';
$string['issuervalidation_invalid'] = 'Şu anda {$a} veren etkin, ancak gerekli tüm uç noktaları uygulamıyor.  Depo çalışmayacaktır.';
$string['issuervalidation_valid'] = 'Şu anda {$a} veren kuruluş etkin.';
$string['issuervalidation_without'] = 'OAuth 2 düzenleyicisi olarak henüz bir Nextcloud sunucusu seçmediniz.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Nextcloud\'u Görüntüle';
$string['no_right_issuers'] = 'Mevcut yayınlayıcıların hiçbiri gerekli tüm uç noktaları uygulamıyor.  Lütfen uygun bir yayıncıyı kaydedin.';
$string['noclientconnection'] = 'OAuth istemcileri bağlanamadı.';
$string['notauthorized'] = 'Bu isteği yürütme yetkiniz yok.  Lütfen doğru hesapla kimliğinizin doğrulandığından emin olun.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="OAuth 2 hizmetleri yapılandırmasına bağlantı">OAuth 2 hizmetleri yapılandırması</a>';
$string['pathnotcreated'] = 'Sistem hesabında {$a} klasör yolu oluşturulamadı.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud deposu';
$string['privacy:metadata'] = 'Nextcloud veri havuzu eklentisi, herhangi bir kişisel veri depolamaz veya kullanıcı verilerini uzaktaki sisteme iletmez.';
$string['request_exception'] = '{$a->örnek} isteği başarısız oldu.  {$a->hata mesajı}';
$string['requestnotexecuted'] = 'İstek yürütülemedi.  Bu durum tekrarlanırsa, lütfen site yöneticisiyle iletişime geçin.';
$string['right_issuers'] = 'Aşağıdaki yayınlayıcılar, gerekli uç noktaları uygular: <br> {$a}';
$string['supportedreturntypes'] = 'Desteklenen dosyalar';
