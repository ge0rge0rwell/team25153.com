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
 * Strings for component 'local_welcome', language 'tr', version '5.0'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Kimlik doğrulama eklentileri';
$string['auth_plugins_desc'] = 'Karşılama mesajının gönderileceği kimlik doğrulama eklentilerini seçin';
$string['configure'] = 'Bu eklentiyi yapılandır';
$string['customprofilefields'] = 'Özel profil alanları';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Yeni kullanıcı: [[fullname]]</h3>
    Yeni bir kullanıcı hesabı oluşturuldu:</td></tr>
<tr><td>Name:</td><td>[[fullname]]</td></tr>
<tr><td>Username: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Yeni bir kullanıcı [[sitename]] \'de hesap oluşturdu: [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Hoş geldin [[fullname]]</h3>
    [[sitelink]] sitesinde aşağıdaki bilgilerle sizin için yeni bir kullanıcı oluşturulmuştur:</td></tr>
<tr><td>Adı:</td><td>[[fullname]]</td></tr>
<tr><td>Soyadı: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Eğer şifreni unutursan sıfırlamak çok kolay:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Merhaba [[fullname]] , [[sitename]] \'a hoş geldiniz.';
$string['defaultprofilefields'] = 'Varsayılan profil alanları';
$string['fieldname'] = 'Alan adı';
$string['globalhelp'] = 'Moodle için bu eklenti, yeni kullanıcılara yapılandırılabilir bir karşılama mesajı gönderir.
<br><br>
Eklenti, Moodle\'daki olay sistemini kullanıyor ve yeni bir
Kullanıcı elle oluşturulmuş bir hesap veya olsaydı, oluşturulur
Kendi kayıt kullanarak oluşturulan hesap.<br>
<br>
Bu sayfadaki tablolar, bu eklentinin yapılandırma sayfasındaki ileti şablonunda kullanılabilen kullanılabilir profil alanlarını göstermektedir.
Bu tabloda gösterilen değerler, profil alan değerlerinizdir ve hoş geldiniz e-postası gönderildiğinde alıcı değerleri ile değiştirilecektir.';
$string['message_moderator'] = 'Moderatör mesajı';
$string['message_moderator_desc'] = 'Mesaj moderatörlere gönder';
$string['message_moderator_enabled'] = 'Moderatör mesajlarını aktifleştir';
$string['message_moderator_enabled_desc'] = 'Bu işaret kutusu bildirim mesajlarını moderatörlere göndermeyi etkinleştirir';
$string['message_moderator_subject'] = 'Moderatör konu';
$string['message_moderator_subject_desc'] = 'Bu moderatöre gönderilecek emailin konu başlığıdır. Etiket olarak [[fullname]] kullan, bu etiket kullanıcıların ad soyadı yerine geçer.';
$string['message_user'] = 'Kullanıcı mesajı';
$string['message_user_desc'] = 'Mesaj yeni kullanıcılara gönderilir.';
$string['message_user_enabled'] = 'Kullanıcı mesajlarını aktifleştir';
$string['message_user_enabled_desc'] = 'Bu işaret kutusu hoş geldin mesajlarını yeni kullanıcılara göndermeyi etkinleştirir';
$string['message_user_subject'] = 'Kullanıcı konu';
$string['message_user_subject_desc'] = 'Bu kullanıcıya gönderilecek emailin konu başlığıdır. Etiket olarak [[fullname]] kullan, bu etiket kullanıcıların ad soyadı yerine geçer.';
$string['moderator_email'] = 'Moderator email';
$string['moderator_email_desc'] = 'Yeni kullanıcı bildirimleri bu email adresine gönderilir.';
$string['pluginname'] = 'Moodle hoş geldin';
$string['resetpass'] = 'Şifreni burada değiştir';
$string['sender_email'] = 'Gönderici email adresi';
$string['sender_email_desc'] = 'Yeni kullanıcılar sistemde oturum açtığında bu email adresine bir bildirim gönderilir, kullanıcılar bu email adresini görebilirler.';
$string['sender_firstname'] = 'Hoş geldin mesajı gönderici adı';
$string['sender_firstname_desc'] = 'Kullanıcılara mail gönderilirken ad kullanıldı.';
$string['sender_lastname'] = 'Moderatör soyadı';
$string['sender_lastname_desc'] = 'Kullanıcılara mail gönderilirken soyad kullanıldı.';
$string['type'] = 'Tür';
$string['welcomefields'] = 'Ek şablon alanları';
$string['yourvalue'] = 'Verdiğiniz Değer';
