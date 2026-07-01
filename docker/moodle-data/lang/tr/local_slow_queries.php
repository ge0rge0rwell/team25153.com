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
 * Strings for component 'local_slow_queries', language 'tr', version '5.0'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'Yavaş sorguları görüntüle';
$string['checkperformance_slowqueries_details_found'] = 'Bulunan <strong>{$a->count}</strong> adet sorgu, bu <strong>{$a->seconds}s</strong> süreden uzun sürdü - bakınız <a href=\\"{$a->url}\\">Yavaş sorgu raporu</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'Toplam <strong>{$a->count}</strong> adet sorgu bu <strong>{$a->seconds}s</strong> süreden büyük - bakınız <a href=\\"{$a->url}\\">Yavaş sorgu raporu</a>';
$string['checkperformance_slowqueries_name'] = 'Moodle performansınızı etkileyen yavaş sorgular';
$string['checkperformance_slowqueries_none'] = 'Hiçbir sorgu 5 saniyeden uzun sürmedi.';
$string['checkperformance_slowqueries_notconfigured'] = 'Yapılandırılmadı';
$string['checkperformance_slowqueries_summary_found'] = 'Bulunan <strong>{$a->count}</strong> adet sorgu bu <strong>{$a->seconds}s</strong> süreden daha uzun sürdü';
$string['col_avgtime'] = 'Ort. süre (sn)';
$string['col_count'] = 'Sayı';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Geri izleme';
$string['col_parameters'] = 'Parametreler';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Yorumlar';
$string['detail_indexes'] = 'Olası eksik indeksler';
$string['detail_indexes_none'] = 'Bu sorgu için herhangi bir indeks önerisi tespit edilmedi.';
$string['detail_indexes_notice'] = 'Öneriler sezgiseldir. Staging ortamında dikkatlice test edin ve EXPLAIN/ANALYZE ile doğrulayın.';
$string['detail_sql'] = 'SQL ve parametreler';
$string['detail_sql_expanded'] = 'Parametreli SQL';
$string['detail_sql_expanded_desc'] = 'Analiz için en iyi çabayla genişletme (yalnızca görüntüleme)';
$string['detail_title'] = 'Sorgu ayrıntıları';
$string['duration_days'] = '{$a} gün';
$string['duration_hours'] = '{$a} saat';
$string['duration_minutes'] = '{$a} dakika';
$string['duration_seconds'] = '{$a} saniye';
$string['filter_apply'] = 'Uygula';
$string['filter_minexec'] = 'Min. çalıştırma süresi (sn)';
$string['filter_search'] = 'SQL ara';
$string['filter_search_ph'] = 'Aramak için SQL\'in bir kısmını yazın...';
$string['filter_title'] = 'Filtreler';
$string['index_title'] = 'Yavaş sorgular';
$string['logslow_warning_body'] = 'Bu sayfa <code>mdl_log_queries</code> tablosundan okur, ancak siteniz yavaş SQL sorgularını günlüğe kaydedecek şekilde yapılandırılmamıştır. <code>config.php</code> içinde <code>logslow</code> seçeneğini etkinleştirin (<code>true</code> veya saniye cinsinden bir sayı olarak ayarlayın). Örnek:';
$string['logslow_warning_current'] = 'Geçerli değer';
$string['logslow_warning_hint'] = '<code>config.php</code> dosyasını kaydettikten sonra, yavaş sayfayı/cron görevini yeniden üretin ve ardından yeni kayıtları görmek için bu sayfayı yenileyin.';
$string['logslow_warning_title'] = 'Yavaş sorgu günlüğü devre dışı';
$string['nav_index'] = 'Yavaş sorgular';
$string['pluginname'] = 'Yavaş sorgular';
$string['privacy:metadata'] = 'Yavaş sorgular eklentisi hiçbir kişisel veri saklamaz. Yalnızca mevcut veritabanı sorgu günlüğü kayıtlarını yöneticilere gösterir.';
$string['timeline_calendar'] = 'Takvim zaman çizelgesi';
$string['timeline_last_7'] = 'Son 7 günde <strong>{$a}</strong> yürütme';
$string['timeline_scale'] = 'Ölçek, {$a} piksel için 1 saniyeye karşılık gelir';
$string['timeline_title'] = 'Sorgu zaman çizelgesi';
$string['timeline_totaltime'] = 'Toplamda, veritabanı bu SQL ifadelerini yürütmek için <strong>{$a}</strong> harcadı';
