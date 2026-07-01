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
 * Strings for component 'local_mailtest', language 'tr', version '5.0'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Hiçbir hata olmasa da posta sunucusu ile iletişim günlüğünü daima gösterin.';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Danışmanlık A.Ş.</a>';
$string['errorcommunications'] = 'Moodle, posta sunucunuzla iletişim kuramadı.</p><p><strong>Öneri:</strong></p><p>Moodle <a href="{$a}"> SMTP posta ayarları</a>\'nızı kontrol ederek başlayın.<p>Doğru görünüyorlarsa, SMTP Sunucu ve/veya güvenlik duvarı ayarlarınızın Moodle web sunucunuzdan ve no-reply e-posta adresinizden bağlantıları kabul edecek şekilde ayarlandığından emin olunuz.';
$string['errorsend'] = 'Test mesajı posta sunucusuna iletilemedi.</p><p><strong>Öneri:</strong></p><p>Moodle <a href="{$a}" target="blank">E-posta ayarları</a>\'nızı kontrol ediniz.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'E-posta adresinden';
$string['heading'] = 'E-Posta konfigürasyon testi';
$string['message'] = '<p>Bu bir test mesajıdır. Lütfen dikkate almayın.</p>
<hr><p><strong>Ek kullanıcı bilgisi</strong></p>
<ul>
<li><strong>Kayıt durumu:</strong> {$a->regstatus}</li>
<li><strong>Dil tercihi:</strong> {$a->lang}</li>
<li><strong>Kullanıcının internet tarayıcısı:</strong> {$a->browser}</li>
<li><strong>Mesajın gönderildiği yer:</strong> {$a->referer}</li>
<li><strong>Moodle sürümü:</strong> {$a->release}</li>
<li><strong>Kullanıcının IP adresi:</strong> {$a->ip}</li>
</ul>';
$string['notregistered'] = 'Kayıtlı değil veya giriş yapmamış.';
$string['phpmethod'] = 'PHP varsayılan yöntemi';
$string['pluginname'] = 'E-Posta Test';
$string['pluginname_help'] = 'eMail Testi belirttiğiniz adrese bir test e-postası göndererek bu Moodle sitesinin e-posta ayarlarını doğrulayacaktır. Yalnızca Site Yöneticileri için.';
$string['primaryadminemail'] = 'Birincil yönetici e-postası';
$string['privacy:metadata'] = 'eMail Test eklentisi, herhangi bir kullanıcı hakkında herhangi bir kişisel veri depolamaz.';
$string['recipientisrequired'] = 'Alıcının e-posta adresini belirtmelisiniz.';
$string['registered'] = 'Kayıtlı kullanıcı ({$a}).';
$string['sendmethod'] = 'E-posta gönderme yöntemi';
$string['sendtest'] = 'Test mesajı gönder';
$string['sentmail'] = 'Test mesajı SMTP sunucusuna başarıyla gönderildi.';
$string['sentmailphp'] = 'Moodle test mesajı PHP Mail tarafından başarıyla kabul edildi.';
$string['smtpmethod'] = 'SMTP sunucuları: {$a}';
$string['toemail'] = 'Şu E-posta adresine';
$string['youremail'] = 'E-posta adresiniz';
