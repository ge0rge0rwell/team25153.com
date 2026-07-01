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
 * Strings for component 'message_kopereemail', language 'tr', version '5.0'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Özel mesaj oluştur';
$string['action_delete'] = 'Özel mesajı sil';
$string['action_edit'] = 'Özel mesajı düzenle';
$string['action_export'] = 'JSON\'u dışa aktar';
$string['action_import'] = 'JSON\'u içe aktar';
$string['action_preview'] = 'Şablonlar';
$string['action_preview_click'] = 'Bu şablon testiyle bir e-posta almak için buraya tıklayın';
$string['action_preview_success'] = 'E-posta başarıyla gönderildi. Lütfen gelen kutunuzu veya spam klasörünüzü kontrol edin.';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'Şablonları dışa aktar';
$string['import_file'] = 'JSON dosyası';
$string['import_file_help'] = 'Diğer ortamdan dışa aktarılan JSON\'u seçin.';
$string['import_invalid_json'] = 'Geçersiz dosya: bozuk JSON.';
$string['import_invalid_payload'] = 'Geçersiz dosya: dışa aktarma yapısı eşleşmiyor.';
$string['import_overwrite'] = 'Mevcut şablonların üzerine yaz';
$string['import_overwrite_help'] = 'İşaretlenirse, mevcut şablonlar güncellenecektir. İşaretlenmezse, mevcut şablonlar yok sayılacaktır.';
$string['import_success'] = 'İçe aktarma tamamlandı.<br>&amp;nbsp;&amp;gt; <strong>İçe aktarıldı:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>Atlandı:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Sarmalayıcı güncellendi:</strong> {$a->wrapper}.';
$string['import_title'] = 'Şablonları içe aktar';
$string['import_wrapper'] = 'HTML sarmalayıcıyı içe aktar (temel şablon)';
$string['import_wrapper_help'] = 'İşaretlenirse, JSON HTML sarmalayıcı bu ortamda yapılandırılmış sarmalayıcının yerini alacaktır.';
$string['messages'] = 'mesajlar';
$string['placeholders_course_data_desc'] = 'Kurs verileri (tespit edilebildiğinde).';
$string['placeholders_course_url_desc'] = 'Kurs URL’si (tespit edilebildiğinde).';
$string['placeholders_dates_now_desc'] = 'Geçerli tarih/saat (userdate).';
$string['placeholders_desc'] = 'Mesajda Mustache yer tutucularını kullanabilirsiniz.';
$string['placeholders_fullmessage_desc'] = 'Düz metin mesaj.';
$string['placeholders_fullmessagehtml_desc'] = 'HTML mesajı (üçlü süslü parantez kullanın).';
$string['placeholders_site_fullname_desc'] = 'Tam site adı (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Site logosu (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Kısa site adı (<code>{$SITE->shortname}</code>).';
$string['placeholders_userfrom_data_desc'] = 'Gönderen verileri.';
$string['table_actions'] = 'İşlemler';
$string['table_component'] = 'Bileşen';
$string['table_name'] = 'Ad';
$string['table_provider'] = 'Sağlayıcı';
$string['template'] = 'Şablon';
$string['template_changue'] = 'Bu şablonu Kopere Mail için varsayılan olarak kullanmak istiyorum';
$string['template_changued'] = 'Şablon başarıyla güncellendi';
$string['template_delete_confirm'] = 'Bu sağlayıcı için özel mesajı silmek istediğinizden emin misiniz?';
$string['template_delete_title'] = 'Özel mesajı sil';
$string['template_deleted'] = 'Özel mesaj silindi.';
$string['template_edit_bodyhtml'] = 'Mesaj HTML';
$string['template_edit_provider'] = 'Sağlayıcı';
$string['template_edit_save'] = 'Kaydet';
$string['template_edit_subject'] = 'Konu (isteğe bağlı)';
$string['template_edit_title'] = 'Özel mesaj';
$string['template_preview'] = 'Şablonu önizle';
$string['template_saved'] = 'Özel mesaj kaydedildi.';
$string['templates_other'] = 'Diğer şablonlar';
$string['templates_transfer_desc'] = 'Ayarları ortamlar arasında taşımak için bu hizmeti kullanın (örn. staging -> production).';
$string['templates_transfer_title'] = 'Ayarları dışa aktar / içe aktar';
