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
 * Strings for component 'block_quickmail', language 'tr', version '5.0'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Eylemler';
$string['additional_emails'] = 'Ek e-postalar';
$string['additional_emails_help'] = 'İletinin gönderilmesini istediğiniz diğer e-posta adresleri, virgül veya noktalı virgülle ayrılmış bir liste halinde. Örnek:

email1@example.com, email2@example.com';
$string['allowstudents'] = 'Öğrencilerin Quickmail\'i kullanmasına izin ver';
$string['alternate'] = 'Alternatif e-postalar';
$string['alternate_body'] = '<p>
{$a->fullname} , {$a->course} için alternatif bir gönderme adresi olarak {$a->address} ekledi.
</p>

<p>
Bu e-postanın amacı, bu adresin bulunduğunu ve bu adresin sahibinin Moodle\'da uygun izinlere sahip olduğunu doğrulamaktı.
</p>

<p>
Doğrulama işlemini tamamlamak istiyorsanız, lütfen tarayıcınızı aşağıdaki url’ye yönlendirerek devam edin: {$a->url}.
</p>

<p>
Bu e-postanın açıklaması size bir şey ifade etmiyorsa, yanlışlıkla almış olabilirsiniz. Bu mesajı silmeniz yeterli.
</p>

Teşekkür ederim.';
$string['alternate_new'] = 'Alternatif Adres Ekleyin';
$string['alternate_subject'] = 'Alternatif e-posta adresi doğrulama';
$string['backup_block_configuration'] = 'Quickmail Blok Seviyesi Yapılandırma Ayarlarını Yedekleme ([Öğrencilerin Quickmail\'i kullanmasına izin ver] gibi)';
$string['backup_history'] = 'Quickmail Geçmişini Dahil Et';
$string['body'] = 'Gövde';
$string['downloads'] = 'Ekler için giriş yapmayı iste';
$string['downloads_desc'] = 'Bu ayar eklerin yalnızca oturum açmış Moodle kullanıcıları için uygun olup olmadığını belirler.';
$string['drafts'] = 'Taslakları Görüntüle';
$string['edit_conditions'] = 'Koşulları Düzenle';
$string['edit_event_details'] = 'Etkinlik Ayrıntılarını Düzenle';
$string['edit_message'] = 'Mesajı Düzenle';
$string['edit_notification'] = 'Bildirimi Düzenle';
$string['edit_schedule'] = 'Takvimi Düzenle';
$string['eventalternateemailadded'] = 'Alternatif e-posta eklendi';
$string['ferpa_desc'] = 'Sistemin, ders grubu modu ayarına göre davranmasına, grup modu ayarını görmezden gelmesine ancak grupları ayırmasına veya grupları tamamen görmemesine izin verir.';
$string['from'] = 'Kimden';
$string['message_preview'] = 'Mesaj Önizlemesi';
$string['never'] = 'Asla';
$string['no_alternates'] = 'Alternatif e-postanız yok. Şimdi yeni bir tane oluşturun!';
$string['no_drafts'] = 'E-posta taslağınız yok.';
$string['notification_name'] = 'Başlık';
$string['overwrite_history'] = 'Quickmail Geçmişinin Üzerine Yaz';
$string['pluginname'] = 'Quickmail';
$string['prepend_class'] = 'Kurs ismini başa ekle';
$string['prepend_class_desc'] = 'Kursun kısa ismini e-postanın konusunun başına ekleyin.';
$string['quickmail:addinstance'] = 'Kurs sayfasına yeni bir Quickmail bloğu ekleyin';
$string['quickmail:allowalternate'] = 'Gönderilecek alternatif e-posta adresleri oluşturun';
$string['quickmail:canconfig'] = 'Kullanıcıların Quickmail örneğini yapılandırmalarına izin verir.';
$string['quickmail:cansend'] = 'Kullanıcıların Quickmail üzerinden e-posta göndermesine izin verir';
$string['quickmail:myaddinstance'] = 'Kontrol paneli sayfama yeni bir Quickmail bloğu ekle';
$string['receipt'] = 'Bir kopya al';
$string['receipt_help'] = 'Gönderilen e-postanın bir kopyasını alın';
$string['restore_history'] = 'Quickmail Geçmişini Geri Yükle';
$string['save'] = 'Kaydet';
$string['save_draft'] = 'Taslağı Kaydet';
$string['save_signature'] = 'İmzayı Kaydet';
$string['select_signature_for_edit'] = 'Düzenlenecek İmzayı Seçin';
$string['send_now'] = 'Şimdi Gönder';
$string['send_now_scheduled_modal_title'] = 'Mesaj Şimdi Gönder';
$string['signature'] = 'İmzalar';
$string['status'] = 'durum';
$string['strictferpa'] = 'Her Zaman Ayrı Gruplar';
$string['subject'] = 'Konu';
$string['time_unit_day'] = 'Gün';
$string['time_unit_days'] = 'Gün';
$string['title'] = 'Başlık';
