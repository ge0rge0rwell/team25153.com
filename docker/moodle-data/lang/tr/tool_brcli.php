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
 * Strings for component 'tool_brcli', language 'tr', version '5.0'.
 *
 * @package     tool_brcli
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['directoryerror'] = 'Hata: Hedef dizin mevcut değil veya yazılabilir değil!';
$string['helpoptionbck'] = 'Belirli bir kategorideki kursların yedeklemesini gerçekleştirin.

Seçenekler:
--categoryid=INTEGER Yedekleme için kategori kimliği.
--destination=STRING Yedekleme dosyasının saklanacağı yol.
-h, --help Bu yardımı yazdırın.

Örnek:
    sudo -u www-data /usr/bin/php admin/tool/brcli/backup.php --categoryid=1 --destination=/moodle/backup/';
$string['helpoptionres'] = 'Belirli bir klasöre ait tüm yedekleme dosyalarını geri yükleyin.

Seçenekler:
--categoryid=INTEGER Yedeğin geri yüklenmesi gereken kategori kimliği.
--source=STRING Yedekleme dosyalarının (.mbz) bulunduğu yol.
-h, --help Bu yardımı yazdırın.

Örnek:
    sudo -u www-data /usr/bin/php admin/tool/brcli/restore.php --categoryid=1 --source=/moodle/backup/';
$string['invalidbackupfile'] = 'Geçersiz yedekleme dosyası: {$a}';
$string['noadminaccount'] = 'Hata: Yönetici hesabı bulunamadı!';
$string['nocategory'] = 'Hata: Kategori bulunamadı!';
$string['operationdone'] = 'Bitti';
$string['performingbck'] = '{$a} kursunun yedeklemesi gerçekleştiriliyor...';
$string['performingres'] = '$a} kursunun yedeği geri yükleniyor...';
$string['pluginname'] = 'Yedekleme ve Geri Yükleme Komut Satırı Arayüzü';
$string['unknowoption'] = 'Bilinmeyen seçenek: {$a}';
