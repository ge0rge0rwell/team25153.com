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
 * Strings for component 'autoattendmod', language 'tr', version '5.0'.
 *
 * @package     autoattendmod
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoattendmod:addinstance'] = 'Yeni bir otomatik devam takip modülü ekleyin';
$string['autoattendmod:receivemail'] = 'E-posta bildirimi al';
$string['autoattendmod:view'] = 'Modülü görüntüle';
$string['autoattendmod:viewreports'] = 'Raporları görüntüle';
$string['autoattendmod_options'] = 'Otomatik Devam takikp modülü seçenekleri';
$string['backup_block'] = 'Bu kurs yedeklendiğinde, Otomatik devam takip bloğunun yönettiği yoklama verileri yedeklenir.';
$string['backup_block_help'] = 'Bu sürümde, Otomatik devam takip bloğu devamsızlık verilerini yönetir.  Bir otomatik devam takip modunu silseniz bile, kursun devamsızlık verileri veritabanında kalır.';
$string['backup_block_title'] = 'Devamsızlık Verilerinin Yedekleme';
$string['description'] = 'Tanım';
$string['email_allrep'] = 'Tüm raporları e-posta ile öğretmenlere gönderin';
$string['email_allrep_help'] = 'E-posta etkinse ve bunu kontrol ederseniz, tüm günlerin devamsızlık raporları e-posta ile gönderilir.  Ve bunu işaretlerseniz, yalnızca bir deamszılk raporu gönderilir';
$string['email_allrep_title'] = 'Tüm raporları gönder';
$string['email_enable'] = 'Devamsızlık verilerinin Öğretmenlere e-posta ile bildirilmesini sağlayın';
$string['email_enable_help'] = 'Bunu işaretlerseniz, bir oturum sona erdiğinde yoklama verileri e-posta kullanılarak öğretmenlere gönderilir. Ancak, autoattendmod:receivemail özelliğine "Öğretmen" eklemeniz gerekir.';
$string['email_enable_title'] = 'Öğretmenlere Bildirim Sonucu';
$string['email_key'] = 'Öğretmenlere devamsızlık anahtar kelimesinin e-posta bildirimini etkinleştir';
$string['email_key_help'] = 'Bunu işaretlerseniz, bir oturum başladığında yoklama anahtar kelimesi öğretmenlere e-posta ile gönderilir. Ancak, autoattendmod:receivemail özelliğine"Öğretmen" eklemelisiniz.';
$string['email_key_title'] = 'Öğretmenlere Anahtar Kelime Bildirimi';
$string['email_user'] = 'Öğrenciler için e-posta ile devamsızlık bildirimini etkinleştirin';
$string['email_user_help'] = 'Bunu işaretlerseniz, öğrencinin devam durumu değiştiğinde öğrenciye e-posta ile bildirim gönderilir. Ancak, autoattendmod:receivemail yeteneğine "Öğrenci"yi eklemelisiniz.';
$string['email_user_title'] = 'Öğrencilere Bildirim';
$string['excelver_disp'] = 'İndirirken Excel eski  (Excel2007) biçimini kullanın';
$string['excelver_disp_help'] = 'Excel Raporunu indiremezseniz, lütfen bunu kontrol edin.';
$string['excelver_title'] = 'Eski Excel2007\'yi kullanın';
$string['feedback_disp'] = 'Geri Bildirim bağlantısını göster';
$string['feedback_disp_help'] = 'Bunu işaretlerseniz, Geribildirim bağlantıları görüntülenmez';
$string['feedback_title'] = 'Geri Bildirim Bağlantısı';
$string['firstinstallblock'] = 'Lütfen önce Otomatik Devam Bloğu\'nu kurun.';
$string['firstinstanceblock'] = 'Lütfen bu kursta önce bir Otomatik Daveam Takip Bloğu örneği oluşturun.';
$string['misconfigured'] = 'Kurs yanlış yapılandırılmış';
$string['modidincorrect'] = 'Kurs Modülü Kimliği yanlıştı';
$string['modincorrect'] = 'Kurs modülü yanlış<br />Otomatik Devam Takip Bloğu kurulmamış olabilir';
$string['modulename'] = 'Otomatik Devam Takip';
$string['modulename_help'] = 'Kurs başına yalnızca bir Otomatik Devak Takip modülü ekleyebilirsiniz.  Bu modülü kaldırırsanız devam durumunu etkilemez!  <br />
Bu modülü yalnızca Otomatik Devam Takip modülü ile birlikte kullanabilirsiniz.  Lütfen bu modülü eklemeden önce bir otomatik devam takip ve blok ekleyin.<br />
Bu modül, yarı otomatik devam gerektirir ve ana ders notlarına devam durumlarını içerir.';
$string['modulenameplural'] = 'Otomatik Devam';
$string['modulenamesimple'] = 'Otomatik Devam';
$string['name'] = 'İsim';
$string['onlyonemodule'] = 'Homeroom Modülünden erişime izin ver';
$string['permit_homeroom'] = 'Homeroom Modülünden erişime izin ver';
$string['permit_homeroom_help'] = 'Bunu işaretlerseniz, Homeroom modülü bu otomatik katılım modülüne/bloğuna erişemez.';
$string['permit_homeroom_title'] = 'Homeroom Modülü için';
$string['pluginadministration'] = 'Otomatik Devam Takip Modülü Yöneticisi';
$string['pluginname'] = 'Otomatik Devam  Takip Modülü';
$string['session_num'] = 'Oturum sayısı';
$string['summertime_disp'] = 'Yaz Saati oturumlarda ayarlanabilir.';
$string['summertime_disp_help'] = 'Bazı oturumlarda Yaz Saati ayarlayabilirsiniz.';
$string['summertime_title'] = 'Yaz Saatini Kullan';
$string['use_item'] = '{$a} kullan';
$string['username_manage'] = 'Kullanıcı Adı Yönetimi';
$string['username_manage_help'] = 'Bu modülde görüntülenen ad modelini seçebilirsiniz.';
