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
 * Strings for component 'auth_enrolkey', language 'tr', version '5.0'.
 *
 * @package     auth_enrolkey
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['edit_cohort'] = 'Ödevi düzenle';
$string['edit_profile'] = 'Alanları düzenle';
$string['edit_redirect'] = 'URL\'yi düzenle';
$string['label_cohortselect'] = 'Topluluk seçe';
$string['label_cohortselect_empty'] = 'Hiç topluluk seçilmedi';
$string['label_cohortselect_help'] = 'Bu alanda topluluk adlarını ve kimliklerini arayın.';
$string['menumanage'] = 'Topluluk rolleri kayıt anahtarlarını yönet';
$string['noemail'] = 'Size bir e-posta göndermeye çalıştı ancak başarısız oldu!';
$string['pluginname'] = 'Kayıt anahtarına dayalı kendi kendine kayıt';
$string['privacy:metadata'] = 'Yetkilendirme kaydı eklentisi herhangi bir kişisel veri saklamaz.';
$string['privacy:metadata:auth_enrolkey_cohort'] = 'Topluluk eklenti kayıt anahtarı duğrulama';
$string['privacy:metadata:auth_enrolkey_cohort:usermodified'] = 'Topluluk kullanıcı kimliği kayıt anahtarı doğrulama';
$string['recaptcha'] = 'Kendi kendine kaydolan kullanıcılar için kayıt sayfasına görsel/sesli bir onay formu öğesi ekler. Bu, sitenizi spam gönderenlere karşı korur ve değerli bir amaca katkıda bulunur. Daha fazla ayrıntı için <a href="http://www.google.com/recaptcha">http://www.google.com/recaptcha</a> adresine bakın.';
$string['recaptcha_key'] = 'reCAPTCHA öğesini etkinleştir';
$string['settings_content'] = '<p>Kayıt anahtarına dayalı kendi kendine kayıt, bir kullanıcının giriş sayfasındaki \'Yeni hesap oluştur\' düğmesi aracılığıyla kendi hesabını oluşturmasını sağlar. Kullanıcı daha sonra hesabını onaylayabilecekleri bir sayfanın güvenlik bağlantısını içeren bir e-posta alır. Gelecekteki girişler, kullanıcı adını ve şifreyi Moodle veri tabanında saklanan değerlerle karşılaştırmalı olarak kontrol eder.</p><p>Kendi kendine kayıt sırasında, kayıt anahtarı alanına bir kayıt anahtarı girilirse, yeni kullanıcı otomatik olarak şuraya kaydedilecektir. eşleşen herhangi bir ders. Anahtarlar (Kurs yönetimi > Kullanıcılar > Kayıt yöntemleri > Yöntem ekle > Kendi kendine kayıt) seçeneğinde etkinleştirilir.</p><p>Not: Eklentiyi etkinleştirmenin yanı sıra, Kayıt anahtarına dayalı kendi kendine kayıt da kendi kendine kayıttan seçilmelidir. \' üzerindeki kayıt açılır menüsü';
$string['settings_email_description'] = 'Kayıtlı derslere erişmeden önce kullanıcıların bir e-posta ile hesaplarını onaylamasını zorunlu kılın.
<ul>
 <li>Hayır - E-posta onayı gerekmez.</li>
 <li>Evet - Erişim, kullanıcılar hesaplarını e-posta yoluyla onayladıktan sonra verilecektir.</li>
 <li>Kısmi - İlk erişim verildi.  Ancak, kullanıcıların bir sonraki oturum açma girişiminden önce hesaplarını e-posta yoluyla doğrulaması gerekir.</li>
 </ul>';
$string['settings_email_title'] = 'E-posta onayı gerektir';
$string['settings_heading'] = 'Genel ayarlar';
$string['settings_required_description'] = 'Kayıt anahtarı, doğrulama için gerekli bir alan olacaktır';
$string['settings_required_title'] = 'Doğrulama için kayıt anahtarı gerektir';
$string['settings_visible_description'] = 'Kendi kendine kayıt yapan kullanıcılar için kayıt sayfasına yeni bir form öğesi ekler. Bu, mevcut kayıt anahtarlarına karşı kontrol edilecek ve kullanıcıyı eşleşen kurslara kaydedecektir.';
$string['settings_visible_title'] = 'Kayıt anahtar öğesini etkinleştir';
$string['signup_auth_instructions'] = 'Selam! Kurslara tam erişim için
bu web sitesinde kendinize yeni bir hesap oluşturmak için bir dakikanızı ayırmanız gerekir .
Her bir kursun, bu kayıt sırasında kullanabileceğiniz tek seferlik bir
"kayıt anahtarı" da olabilir:
<ol>
<li><a href="{$a}">Yeni Hesabı</a0> doldurun. a> bilgilerinizi içeren bir form.</li>
<li>Bir "kayıt anahtarı" istenir -
öğretmeninizin size verdiği anahtarı kullanın . Bu, sizi
kursa "kaydettirir" .</li>
<li>Hesabınız oluşturulacak ve giriş yapacaksınız.</li>
<li>Artık bu oturum için kursun tamamına erişebilirsiniz.</li >
<li>
<li>E-postanızı okuyun ve içerdiği web bağlantısını tıklayın.</li>
<li>Şu andan itibaren,
kaydolduğunuz herhangi bir kursa giriş yapmak ve erişmek için
yalnızca kişisel kullanıcı adınızı ve şifrenizi (bu sayfadaki formda) girmeniz gerekecektir.</li>
</ol>';
$string['signup_failure'] = 'Opps! Bir şeyler ters gitti ve düzgün bir şekilde kaydolmamış olabilirsiniz. <a href="{$a->href}">Ana Sayfa</a>\'ya gidin';
$string['signup_field_title'] = 'Kayıt anahtarı';
$string['signup_missing'] = 'Kayıt anahtarı eksik';
$string['signup_token_invalid'] = 'Girdiğiniz kayıt anahtarı geçersiz';
$string['signup_view'] = 'Kurs kaydı';
$string['signup_view_message_basic_dates'] = '{$a->kurs}\'a {$a->role} olarak kaydoldunuz.  <a href={$a->href}>Kursu görüntülemek için burayı tıklayın.</a><br />Kurs başlar: {$a->startdate}<br />Kurs biter: {$a->enddate }';
$string['signup_view_message_basic_dates_endonly'] = '{$a->kurs}\'a {$a->role} olarak kaydoldunuz.  <a href={$a->href}>Kursu görüntülemek için burayı tıklayın.</a><br />Kurs bitiş tarihi: {$a->enddate}';
$string['signup_view_message_basic_dates_startonly'] = '{$a->kurs}\'a {$a->role} olarak kaydoldunuz.  <a href={$a->href}>Kursu görüntülemek için burayı tıklayın.</a><br />Kurs başlangıç tarihi: {$a->startdate}';
$string['th_cohorts'] = 'Atanmış topluluklar';
$string['th_fullname'] = 'Kursun tam adı';
$string['title_cohort'] = 'Topluluk atamasını düzenle';
$string['title_profile'] = 'Profil alanlarını düzenle';
$string['title_redirect'] = 'Yönlendirme URL\'sini düzenle';
