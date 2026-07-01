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
 * Strings for component 'block_course_checker', language 'tr', version '5.0'.
 *
 * @package     block_course_checker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_noactivedates'] = '"Etkinlik tamamlama" bölümünde etkin tarihler olmamalıdır.';
$string['activedates_noactivedatesinactivity'] = '{$a->modtype} etkinliğinde etkinleştirilmiş tarihler olmamalıdır, aşağıdaki alanları arayın: {$a->adateissetin}';
$string['activedates_setting_coursesregex'] = 'Kurs tam adı normal ifade filtresi';
$string['activedates_setting_coursesregex_help'] = 'Normal ifadeyi, bu denetleyiciye yalnızca kursun tam adlarıyla eşleştiği yerde izin verecek şekilde tanımlayın.';
$string['activedates_setting_modules'] = 'Etkin modüller';
$string['activedates_setting_modules_help'] = 'Etkin tarihler için kontrol edilmesine izin verilen modülleri tanımlayın (<a href="/admin/modules.php" target="_blank">Etkinlikleri yönet</a> içinde etkinleştirilmelidir).';
$string['activedates_success'] = '{$a} etkinliği doğru şekilde yapılandırıldı';
$string['admin_domain_list_notvalid'] = 'Liste geçerli bir etki alanı listesi değil';
$string['admin_domain_name_default_missing'] = 'Alan adı eksik: {$a}';
$string['admin_domain_name_notvalid'] = 'Alan adı geçerli değil: {$a}.  Lütfen her satıra yalnızca bir alan adı ekleyin';
$string['admin_restrictedint_max'] = 'Maksimum değer {$a}';
$string['admin_restrictedint_min'] = 'Minimum değer {$a}';
$string['attendance_missingattendanceactivity'] = 'Devamlsızlık kontrolü başarısız oldu - bu kursta yoklama etkinliği yok';
$string['attendance_missingplugin'] = 'mod_attendance yüklü olmadığı için bu testi atlayın';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Devamlsızlık kontrolü başarısız oldu - yalnızca bir devamsızlık etkinliğine izin verilir';
$string['attendance_sessionsnotemty'] = 'Devamlsızlık kontrolü başarısız oldu - herhangi bir devamlılık oturumuna izin verilmiyor';
$string['attendance_success'] = 'Devamlsızlık kontrolü etkinliği doğru şekilde yapılandırıldı';
$string['automaticcheck'] = 'Son otomatik kontrol';
$string['automaticcheckempty'] = 'Bu kurs için kontroller hiç başlatılmadı';
$string['backtocourse'] = 'Kursa dön';
$string['blocks_activity'] = '"{$a->name}" engelle';
$string['blocks_comparison'] = '(Referans kursu: "{$a->valuereference}" | Mevcut kurs: "{$a->valuecurrent}")';
$string['blocks_error'] = 'Blok hatalı olarak mevcut veya mevcut kursta yok.';
$string['blocks_setting'] = 'Etkin bloklar';
$string['blocks_setting_help'] = 'İzin verilen blokları tanımlayın (<a href="/admin/blocks içinde etkinleştirilmelidir.php "target=" _blank " > Blokları yönet</a>) kontrol edilecek.';
$string['blocks_success'] = 'Blok geçerli kursa doğru şekilde yerleştirilmiştir';
$string['check_failed'] = 'Hata';
$string['check_successful'] = 'Başarılı';
$string['checker_activedates'] = 'Aktif tarih kontrolü';
$string['checker_activedates_display'] = 'Etkinlik yapılandırmalarında etkin tarihler';
$string['checker_attendance'] = 'Katılım oturumları kontrolü';
$string['checker_attendance_display'] = 'Katılım oturumları';
$string['checker_blocks'] = 'Blok kontrolü';
$string['checker_blocks_display'] = 'Bloklar mevcut';
$string['checker_col_block_header'] = 'Kontrol et';
$string['checker_data'] = 'Veri etkinliği kontrolü';
$string['checker_data_display'] = 'Alanlarla veri etkinliği';
$string['checker_groups'] = 'Grup gönderim kontrolü';
$string['checker_groups_display'] = 'Ödevler için grup gönderimi';
$string['checker_last_run'] = 'Son çalıştırma {$a}';
$string['checker_last_run_global'] = 'Bu denetleyici için bilinmeyen tarih.  Global kurs kontrolü {$a} tarihinde yapıldı';
$string['checker_links'] = 'Bağlantılar kontrolü';
$string['checker_links_activity'] = 'Etkinlik: {$a->name} ({$a->modname})';
$string['checker_links_book_chapter'] = 'Kitap Bölümü: {$a->title}';
$string['checker_links_display'] = 'Kurs özeti ve URL etkinliklerindeki bağlantılar';
$string['checker_links_error_code'] = '{$a->url} üzerinde HTTP Hatası {$a->http_code}';
$string['checker_links_error_curl'] = '{$a->url} üzerinde cURL Hatası {$a->curl_errno} {$a->curl_error}';
$string['checker_links_error_httpsecurity'] = 'Verilen {$a} etki alanı, adresi ve bağlantı noktası numarası Moodle HTTP güvenliğindeki kara/beyaz listelere göre kontrol edilerek kara listeye alınır.';
$string['checker_links_error_skipped'] = '{$a->host} alanı, {$a->url} için beyaz listeye alındı';
$string['checker_links_error_undefined'] = 'Bağlantıyla ilgili tanımsız bir hata oluştu';
$string['checker_links_ok'] = '{$a->url} geçerli (Kod {$a->http_code})';
$string['checker_links_setting_connect_timeout'] = 'cURL bağlantı zaman aşımı';
$string['checker_links_setting_timeout'] = 'cURL zaman aşımı';
$string['checker_links_setting_useragent'] = 'Kullanıcı Aracısı';
$string['checker_links_setting_useragent_help'] = 'Kullanıcı Aracısı';
$string['checker_links_setting_whitelist'] = 'Bağlantı denetleyici beyaz listesi';
$string['checker_links_setting_whitelist_desc'] = '<code>www.w3.org</code> öğesinin bulunması gerektiğini unutmayın.';
$string['checker_links_setting_whitelist_help'] = 'Lütfen her satıra bir URL ekleyin, örneğin <code>https://moodle.org</code>';
$string['checker_links_summary'] = 'Kurs özeti';
$string['checker_links_wiki_page'] = 'Viki Sayfası: {$a->title}';
$string['checker_quiz'] = 'Sınav kontrolü';
$string['checker_quiz_display'] = 'Etkinlik sınavında toplam puan';
$string['checker_referencefilter_comparison'] = '(Referans kursu: "{$a->filtervaluereference}" | Mevcut kurs: "{$a->filtervaluecurrent}")';
$string['checker_referencefilter_enabled'] = 'Referans ayarları filtre kontrolü etkin';
$string['checker_referencefilter_enabled_help'] = 'Tüm kurs filtrelerini referans kursla karşılaştırmak için lütfen bunu etkinleştirin.';
$string['checker_referencefilter_failing'] = '"{$a->filterkey}" filtresi doğru değil';
$string['checker_referencefilter_filternotsetincurrentcourse'] = 'Geçerli kursta "{$a->filterkey}" filtresi eksik.';
$string['checker_referencefilter_success'] = 'Geçerli kursta tüm filtreler doğru şekilde ayarlandı';
$string['checker_referenceformatoptions_enabled'] = 'Referans ayarları format seçenekleri kontrolü etkin';
$string['checker_referenceformatoptions_enabled_help'] = 'Tüm kurs biçimi seçeneklerini referans kursla karşılaştırmak için lütfen bunu etkinleştirin.';
$string['checker_referenceformatoptions_failing'] = '"{$a->optionkey}" biçim seçeneği doğru değil';
$string['checker_referenceformatoptions_success'] = 'Geçerli kursta tüm biçim seçenekleri doğru şekilde ayarlanmıştır';
$string['checker_referencesettings'] = 'Referans ayarları kontrolü';
$string['checker_referencesettings_checklist'] = 'Referans kursu denetleyicisi ayarları kontrol listesi';
$string['checker_referencesettings_checklist_help'] = 'Referans kursu ile kontrol etmek için lütfen bir veya daha fazla ayar seçin.';
$string['checker_referencesettings_comparison'] = '(Referans kursu: "{$a->settingvaluereference}" | Geçerli kurs: "{$a->settingvaluecurrent}")';
$string['checker_referencesettings_display'] = 'Referans kursa kıyasla ayarlar';
$string['checker_referencesettings_failing'] = '"{$a->setting}" ayarı doğru değil';
$string['checker_referencesettings_settingismissing'] = '"{$a->ayar}" bir kurs ayarı değildir';
$string['checker_referencesettings_success'] = '"{$a->ayar}" ayarı doğru';
$string['checker_subheadings'] = 'Etiket alt başlıkları kontrolü';
$string['checker_subheadings_display'] = 'Etiket alt başlıkları';
$string['checker_subheadings_setting_whitelist'] = 'Alt başlık denetleyicisi dizeleri beyaz listesi';
$string['checker_subheadings_setting_whitelist_help'] = 'Lütfen satır başına bir satır ekleyin. Örn: "Liebe(r) Modulentwickler".';
$string['checker_userdata'] = 'Kullanıcı veri kontrolü';
$string['checker_userdata_display'] = 'Etkinliklerde saklanan kullanıcı verileri';
$string['course_checker:addinstance'] = 'Yeni bir kurs denetleyicisi bloğu ekleyin';
$string['course_checker:view'] = 'Kurs denetleyicisi bloğunu görüntüleyin';
$string['course_checker:view_notification'] = 'Kurs denetleyicisi bildirimlerini görüntüleyin';
$string['course_checker:view_report'] = 'Kontrol sonucu sayfasını görüntüleyin';
$string['data_success'] = 'Veritabanı etkinliği doğru yapılandırıldı ve alanlar tanımlandı';
$string['group_activities'] = 'Etkinlik ayarları';
$string['group_blocks'] = 'Blok ayarları';
$string['group_course_settings'] = 'Kurs ayarları';
$string['group_links'] = 'Bağlantı doğrulayıcı';
$string['groups_activity'] = 'Etkinlik "{$a->name}"';
$string['groups_deactivated'] = 'Grup gönderme ayarı devre dışı bırakıldı';
$string['groups_idmissing'] = 'Grup gönderimi etkin, ancak gruplandırma ayarlanmamış';
$string['groups_lessthantwogroups'] = 'Etkin gruplandırma için 2\'den az grup oluşturuldu';
$string['groups_missing'] = 'Gruplandırma doğru ayarlanmamış';
$string['pluginname'] = 'Kurs denetleyicisi';
$string['privacy:metadata'] = 'Kurs denetleyicisi bloğu yalnızca anonim veriler içerir.';
$string['quiz_grade_sum_error'] = 'Bu sınavda maksimum not ({$a->grade}) ve Toplam notlar ({$a->sumgrades}) aynı sayı denk olmalıdır';
$string['quiz_grade_sum_success'] = 'Bu sınav doğru yapılandırılmış';
$string['result'] = 'Sonuç';
$string['result_col_block_header'] = 'Sonuç';
$string['result_col_page_header'] = 'Sonuç';
