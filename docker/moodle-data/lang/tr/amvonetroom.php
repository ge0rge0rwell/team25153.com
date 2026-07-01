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
 * Strings for component 'amvonetroom', language 'tr', version '5.0'.
 *
 * @package     amvonetroom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amvonetroom:moderator'] = 'moderatör';
$string['error'] = '{$a}';
$string['error_backup_fail'] = '{$a->session} oturumunun yedeklenmesi sırasında bir hata oluştu. Lütfen {$a->support_begin}destek{$a->support_end} ile iletişime geçin.';
$string['error_backup_fail_with_msg'] = '{$a->session} oturumunun yedeklenmesi sırasında bir hata oluştu: {$a->message}';
$string['error_backup_space_limit_reached'] = 'Yedekleme alanı sınırına ulaşıldı. Lütfen okul yöneticinize başvurun ve bu sorunu bildirin.';
$string['error_key_not_defined'] = 'AMVONET Oda modülü kayıtlı değil.';
$string['error_limit_reached'] = 'Sınırlara ulaşıldı. Lütfen okul yöneticinize başvurun ve bu sorunu bildirin.';
$string['error_school_bad_request'] = 'master.amvonet.com hatalı istek bildirdi. Lütfen AMVONET teknik desteğini arayın.';
$string['error_school_forbidden'] = 'master.amvonet.com isteği reddetti. Lütfen AMVONET teknik desteğini arayın.';
$string['error_school_not_registered'] = 'Okul master.amvonet.com\'da kayıtlı değil';
$string['error_session_restoring'] = 'Yedekleme yapılamıyor, oturum şimdi geri yükleniyor. Lütfen daha sonra tekrar deneyin.';
$string['error_storage_space_limit_reached'] = 'Disk alanı sınırına ulaşıldı. Lütfen okul yöneticinize başvurun ve bu sorunu bildirin.';
$string['error_unavailable'] = 'master.amvonet.com geçici olarak kullanılamıyor.';
$string['error_version_incompatible'] = 'master.amvonet.com, AMVONET Room modülünün güncel sürümünü desteklemiyor. Lütfen AMVONET teknik desteğini arayın.';
$string['error_version_too_old'] = 'AMVONET Room modülünün çok eski versiyonu var. Lütfen modülü güncelleyin.';
$string['formatdate'] = 'Ymd h:i';
$string['introduction_text'] = 'giriş metni';
$string['key_caption'] = 'Kayıt anahtarı';
$string['key_hint'] = 'AMVONET Room modülünüzü master.amvonet.com\'da kaydedin ve anahtarınızı alın.';
$string['label_domain'] = 'Alan adı';
$string['label_status'] = 'Durum';
$string['label_version'] = 'Sürüm';
$string['label_version_enterprise'] = 'kurumsal';
$string['label_version_lite'] = 'Bir miktar';
$string['label_version_pro'] = 'İçin';
$string['label_version_type_com'] = 'Ticari';
$string['label_version_type_direct_sale'] = 'Ticari';
$string['label_version_type_free'] = 'Bedava';
$string['label_version_type_testing'] = 'Test yapmak';
$string['label_version_type_trial'] = 'Deneme';
$string['label_warning'] = 'Uyarı';
$string['link_account'] = 'Hesabım';
$string['link_buy'] = 'satın al';
$string['link_register'] = 'Eklentiyi kaydet';
$string['link_support'] = 'Destek';
$string['message_firewall_not_configured'] = 'Üzgünüz, yanlış yapılandırma nedeniyle istenen işlem başarısız oldu. En olası nedenleri ve çözümleri {$a->kb_begin}AŞAĞIDAKİ URL\'Yİ{$a->kb_end} ziyaret ederek bulabilirsiniz. Bu arada, yardıma ihtiyacınız olursa lütfen {$a->support_begin}destek{$a->support_end} ile iletişime geçmekten çekinmeyin.';
$string['moderator'] = 'moderatör';
$string['modulename'] = 'AMVONET Odası';
$string['modulename_help'] = 'AMVONET Odası, web seminerlerinin oluşturulması ve etkileşimli sunumların oluşturulması için kullanılır. Bu aracı kullanarak kayıtları da düzenleyebilirsiniz.';
$string['modulenameplural'] = 'AMVONET Odası';
$string['name_live_this_session'] = 'Bu odanın adı';
$string['pluginadministration'] = 'AMVONET Oda Yönetimi';
$string['pluginname'] = 'AMVONET Odası';
$string['status_active'] = 'Aktif';
$string['status_active_till'] = 'için';
$string['status_blocked'] = 'Engellendi';
$string['status_blocked_since'] = 'dan beri';
$string['status_no_key'] = 'Kayıtlı değil';
$string['warn_missed_plugin'] = 'AMVONET Room modülü {$a} PHP uzantısı gerektirir. Lütfen kurun.';
$string['warn_missed_plugins'] = 'AMVONET Room modülü aşağıdaki PHP uzantılarını gerektirir: {$a}. Lütfen onları kurun.';
$string['warn_no_crossdomain'] = 'Etki alanları arası politika doğru şekilde ayarlanmamış. Ayrıntılar için Kurulum Kılavuzuna bakın.';
