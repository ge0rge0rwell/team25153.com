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
 * Strings for component 'local_kopere_wpbridge', language 'tr', version '5.0'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'İşlemler';
$string['adminnotification_body'] = 'WooCommerce köprüsünde bir sorun tespit edildi.

{$a}';
$string['adminnotification_subject'] = 'WP Köprüsü sorunu';
$string['back'] = 'Geri';
$string['dashboard_laststatus'] = 'Bağlantı durumu';
$string['dashboard_mappingcount'] = 'Haritalamalar';
$string['dashboard_openui'] = 'Açık haritalamalar';
$string['dashboard_pendingcount'] = 'Bekleyen öğeler';
$string['dashboard_processedcount'] = 'İşlenen öğeler';
$string['dashboard_settings'] = 'Ayarlar';
$string['dashboard_subtitle'] = 'Tamamlanan satışları Moodle kurslarına ve kohortlara senkronize edin.';
$string['dashboard_title'] = 'WooCommerce ile Moodle köprüsü';
$string['error_configmissing'] = 'WooCommerce ayarları eksik.';
$string['error_invalidsignature'] = 'Geçersiz WooCommerce webhook imzası.';
$string['error_invalidwebhooktoken'] = 'Geçersiz webhook belirteci.';
$string['error_missingemail'] = 'Sipariş müşteri e-posta adresi içermiyor.';
$string['error_missingorderid'] = 'WooCommerce sipariş kimliği eksik.';
$string['error_nomanualenrol'] = 'Kurs içinde etkin bir manuel kaydolma örneği bulunamadı.';
$string['error_nomapping'] = 'Bu ürün için etkin bir haritalama bulunamadı.';
$string['manage'] = 'WooCommerce köprüsünü yönet';
$string['mapping_add'] = 'Haritalama ekle';
$string['mapping_cohort'] = 'Kohort';
$string['mapping_course'] = 'Kurs';
$string['mapping_delete'] = 'Haritalamayı sil';
$string['mapping_delete_confirm'] = 'Bu haritalamayı silmek istediğinize emin misiniz?';
$string['mapping_deleted'] = 'Haritalama başarıyla silindi.';
$string['mapping_edit'] = 'Haritalamayı düzenle';
$string['mapping_enabled'] = 'Etkin';
$string['mapping_itemtype'] = 'Hedef türü';
$string['mapping_itemtype_cohort'] = 'Kohort';
$string['mapping_itemtype_course'] = 'Kurs';
$string['mapping_missingcohort'] = 'Kohort eşleşmesi için bir kohort seçin.';
$string['mapping_missingcourse'] = 'Kurs eşleşimi için bir kurs seçin.';
$string['mapping_productid'] = 'WooCommerce ürün kimliği';
$string['mapping_role'] = 'Kurs kaydı için rol';
$string['mapping_saved'] = 'Eşleşme başarıyla kaydedildi.';
$string['mappings'] = 'Eşleşmeler';
$string['messageprovider_syncnotification'] = 'WP Bridge bildirimleri';
$string['ordernotification_body'] = 'Merhaba {$a->firstname},

Siparişiniz {$a->orderid} başarıyla işlendi.

Uygulanan erişim:
{$a->items}

Artık Moodle\'a şu adresten erişebilirsiniz:
{$a->siteurl}

Saygılarımızla,
{$a->sitename}';
$string['ordernotification_subject'] = 'Moodle erişiminiz hazır.';
$string['pluginname'] = 'WP Bridge\'i kopyala';
$string['privacy:metadata'] = 'Eklenti, Moodle kaydı işlemi için WooCommerce sipariş verilerini saklar.';
$string['savechanges'] = 'Değişiklikleri kaydet';
$string['settings_consumerkey'] = 'Tüketici anahtarı';
$string['settings_consumersecret'] = 'Tüketici sırrı';
$string['settings_debug'] = 'Hata ayıklama modu';
$string['settings_notconfigured'] = 'Bağlantı henüz yapılandırılmadı.';
$string['settings_section'] = 'WooCommerce bağlantısı';
$string['settings_statusheading'] = 'Son bağlantı testi';
$string['settings_storeurl'] = 'WooCommerce URL\'si';
$string['settings_storeurl_desc'] = 'Örnek: https://example.com';
$string['settings_testfailed'] = 'Bağlantı testi başarısız oldu: {$a}';
$string['settings_testok'] = 'Bağlantı başarıyla test edildi ve webhook kontrolü tamamlandı.';
$string['settings_webhookheading'] = 'Webhook uç noktası';
$string['settings_webhookheading_desc'] = 'Bu URL\'i WooCommerce\'te kullanın. Jeton her zaman sorgu dizesinde gereklidir.';
$string['settings_webhookurl'] = 'Webhook URL\'si';
$string['status_error'] = 'Hata';
$string['status_failed'] = 'Başarısız';
$string['status_ignored'] = 'Göz ardı edildi';
$string['status_ok'] = 'Tamam';
$string['status_pending'] = 'Beklemede';
$string['status_processed'] = 'İşlendi';
$string['task_syncorders'] = 'WooCommerce tamamlanmış siparişleri eşitle';
$string['wpbridge'] = 'WP Bridge';
