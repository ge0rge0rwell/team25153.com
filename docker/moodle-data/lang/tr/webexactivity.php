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
 * Strings for component 'webexactivity', language 'tr', version '5.0'.
 *
 * @package     webexactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Ek toplantı ayarları';
$string['allchat'] = 'Katılımcılar diğer katılımcılarla sohbet edebilir';
$string['apipassword'] = 'WebEx Yönetici şifresi';
$string['apipassword_help'] = 'Sitenizdeki bir yönetici hesabının şifresi.';
$string['apisettings'] = 'API Ayarları';
$string['apiusername'] = 'WebEx Yönetici kullanıcı adı';
$string['apiusername_help'] = 'Sitenizdeki bir yönetici hesabının kullanıcı adı. Bu, güvenlik nedenleriyle Moodle için ayrılmış bir hesap olmalıdır.';
$string['availabilityendtime'] = 'Genişletilmiş kullanılabilirlik bitiş zamanı';
$string['badpassword'] = 'WebEx kullanıcı adınız ve şifreniz eşleşmiyor.';
$string['badpasswordexception'] = 'WebEx şifreniz yanlış ve güncellenemedi.';
$string['calpublish'] = 'Toplantıyı takvime yayınla';
$string['calpublish_help'] = 'Toplantıyı Moodle takvimi kurslarında yayınlayın ve kullanıcının gösterge tablosu sayfalarında görüntüleyin. Genişletilmiş Kullanılabilirlik toplantıları yayınlanmayacak.';
$string['confirmrecordingdelete'] = '{$a->time} uzunluğundaki <b>{$a->name}</b> kaydını silmek istediğinizden emin misiniz? Bu geri alınamaz.';
$string['confirmrecordingsdelete'] = 'Seçilen kayıtları silmek istediğinizden emin misiniz? Bu geri alınamaz.';
$string['connectionexception'] = 'Bağlanmaya çalışırken bir hata oluştu: {$a-> error}';
$string['curlsetupexception'] = 'Kıvrılma ayarlanırken bir hata oluştu.';
$string['defaultmeetingtype'] = 'Varsayılan toplantı türü';
$string['defaultmeetingtype_help'] = 'Yeni bir toplantı oluşturulurken önceden seçilecek toplantı türü.';
$string['deletelink'] = '<a href="{$a->url}">Sil</a>';
$string['deletetime'] = 'Silme Zamanı';
$string['deletionin'] = '<div>{$a->time} silinene kadar.</div>';
$string['deletionsoon'] = '<div> Yakında silinecek.</div>';
$string['description'] = 'Açıklama';
$string['directlinks'] = 'Doğrudan bağlantılar';
$string['directlinkstext'] = '<p>Bu bağlantılar Moodle sunucusundaki kayıtlara doğrudan erişim sağlar. Bunlara erişmek için giriş yapmanız gerekmez ve giriş yapılmaz. </p> <br />
Akış: <a target="_blank" href="{$a->streamurl}" alt =" Akış bağlantısı">{$a->streamurl}</a><br />
İndir: <a target="_blank" href="{$a->fileurl}" alt ="Akış bağlantısı">{$a->fileurl}</a><br/>';
$string['duration'] = 'Beklenen süre';
$string['duration_help'] = 'Toplantının beklenen süresi. Yalnızca bilgi amaçlıdır ve toplantının ne kadar sürebileceğini etkilemez.';
$string['enablecallin'] = 'Telefon Görüşmesini Etkinleştir';
$string['enablecallin_help'] = 'Yeni oluşturulan toplantılar için telefonla arama desteğini etkinleştirin. CALLIN telefon desteğiniz olmadığı sürece etkinleştirmeyin.';
$string['entermeeting'] = 'Toplantıya girin';
$string['error_'] = '';
$string['error_HM_AccessDenied'] = 'Bu toplantıya ev sahipliği yapılması engellendi.';
$string['error_JM_InvalidMeetingKey'] = 'WebEx\'te bir toplantı anahtarı hatası oluştu ve bu toplantıya katılamazsınız.';
$string['error_JM_InvalidMeetingKeyOrPassword'] = 'WebEx\'te bir toplantı anahtarı veya parola hatası oluştu ve bu toplantıya katılamazsınız.';
$string['error_JM_MeetingLocked'] = 'Bu toplantı kilitlendi ve toplantıya katılamazsınız.';
$string['error_JM_MeetingNotInProgress'] = 'Toplantı şu anda devam etmiyor. Henüz başlamamış veya bitmiş olabilir.';
$string['error_LI_AccessDenied'] = 'Kullanıcı WebEx\'te oturum açamadı.';
$string['error_LI_AccountLocked'] = 'WebEx kullanıcı hesabı kilitli.';
$string['error_LI_AutoLoginDisabled'] = 'Bu kullanıcı için otomatik girişler devre dışı bırakıldı';
$string['error_LI_InvalidSessionTicket'] = 'Oturum bileti geçersiz. Lütfen tekrar deneyin.';
$string['error_LI_InvalidTicket'] = 'Giriş bileti geçersiz. Lütfen tekrar deneyin.';
$string['error_unknown'] = 'Bilinmeyen bir hata oluştu.';
$string['errordeletingrecording'] = 'Kayıt silinirken hata oluştu';
$string['event_meeting_ended'] = 'Toplantı sona erdi';
$string['event_meeting_hosted'] = 'Toplantı düzenlendi';
$string['event_meeting_joined'] = 'toplantı katıldı';
$string['event_meeting_started'] = 'Toplantı başladı';
$string['event_recording_created'] = 'Kayıt oluşturuldu';
$string['event_recording_deleted'] = 'Kayıt silindi';
$string['event_recording_downloaded'] = 'Kayıt indirildi';
$string['event_recording_undeleted'] = 'Kayıt silinemedi';
$string['event_recording_viewed'] = 'Kayıt görüntülendi';
$string['externallinktext'] = '<p> Bu bağlantı, bu kursa kayıtlı olmayan katılımcılar içindir. Kurstaki öğrencilerin bu bağlantıya e-posta ile gönderilmeleri gerekmez, çünkü önceki sayfadaki Toplantıya katıl bağlantısını tıklayabilirler. Bu bağlantı dikkatle dağıtılmalıdır - bu bağlantıya sahip olan herkes bu toplantıya erişebilir. Toplantıya başkalarını davet etmek için aşağıdaki URL\'yi kopyalayın ve onlara gönderin. Bu herkese açık bir toplantıysa, bu bağlantı bir web sitesine de yerleştirilebilir. </p>';
$string['externalpassword'] = 'Katılımcıların toplantı şifresini de bilmeleri gerekir: <b>{$a}</b>';
$string['getexternallink'] = '<a href="{$a->url}">Harici katılımcı bağlantısını al</a>';
$string['host'] = 'Ev Sahibi';
$string['hostmeetinglink'] = '<a href="{$a->url}">Toplantıya Ev Sahipliği</a>';
$string['hostschedulingexception'] = 'Kullanıcı bu toplantı sahibi için bir toplantı planlayamıyor.';
$string['inprogress'] = 'Devam etmekte';
$string['invalidtype'] = 'Geçersiz tür';
$string['longavailability_help'] = 'Bu seçeneği ayarlamak, toplantıyı Uzatılmış kullanılabilirlik bitiş saatine kadar düzenlemeye uygun bırakır.  Mesai saatleri gibi şeyler için yeniden kullanılabilir toplantılara izin verir.';
$string['meetingtemplate_help'] = 'Bu toplantı türü için WebEx hesabınızda kurduğunuz şablonun adı.  Varsayılan ayarları kullanmak için boş bırakın.  Not: Mevcut olmayan bir şablon adının belirtilmesi, bu toplantı türünde oturumların oluşturulmasını engelleyecektir.';
$string['privacy:metadata:webexactivity'] = 'Webex etkinlik örneği';
$string['recordingtrashtime_help'] = 'Bir kaydın kalıcı olarak silinmeden önce tutulacağı saat sayısı.';
$string['search:activity'] = 'WebEx Toplantısı - etkinlik bilgileri';
$string['sitename'] = 'Site adı';
