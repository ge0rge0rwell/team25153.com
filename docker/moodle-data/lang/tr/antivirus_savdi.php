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
 * Strings for component 'antivirus_savdi', language 'tr', version '5.0'.
 *
 * @package     antivirus_savdi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkconnectivity'] = 'SAVDI bağlantısı';
$string['checkconnectivityfalsepositive'] = 'Test taramasından yanlış pozitif.';
$string['checkconnectivitynoconfig'] = 'Hiçbir SAVDI arka plan programı yapılandırılmamış.';
$string['checkconnectivitynomethods'] = 'Tarayıcı iletişimi başarılı, ancak hiçbir tarama yöntemi etkinleştirilmedi.';
$string['checkconnectivityok'] = 'Tarayıcı testi başarılı oldu.';
$string['checkconnectivityscandataerror'] = 'SCANDATA test hatası: {$a}.';
$string['checkconnectivityscanfileerror'] = 'SCANFILE test hatası: {$a}.';
$string['chmodscanfile'] = 'Tarama dosyası izinlerini değiştir';
$string['chmodscanfiledescr'] = 'Bu seçeneği etkinleştirmek, taranan dosyanın izinlerinin geçici olarak dünya tarafından okunabilir olarak değiştirilmesini sağlar. Tarayıcı arka plan işlemi yerel sunucuya kuruluysa ve taranan dosya tarayıcı işlemi tarafından okunamıyorsa faydalıdır. Tarayıcı arka plan işlemi uzaktaysa gerekli değildir.';
$string['clientresult0'] = 'Tamam';
$string['clientresult1'] = 'virüs bulundu';
$string['clientresult2'] = 'Hata';
$string['clientresult4'] = 'Veri çok büyük';
$string['connretry'] = 'Bağlantıyı yeniden dene';
$string['conntypedescr'] = 'Eğer SAVDI daemon\'u web sunucusuna yerel ise ve web sunucusu tarafından oluşturulan dosyaları okuyabiliyorsa, daemon\'un \'SCANFILE\' istek tipini desteklediğinden emin olun ve SAVDI daemon\'u uzakta seçeneğini devre dışı bırakın.

Eğer SAVDI daemon\'u web sunucusuna uzakta ise veya yerel olsa da web sunucusu tarafından oluşturulan dosyaları okuyamıyorsa, daemon\'un \'SCANDATA\' istek tipini desteklediğinden emin olun ve SAVDI daemon\'u uzakta seçeneğini etkinleştirin.';
$string['conntypetcp'] = 'TCP/IP bağlantısı';
$string['connunix'] = 'Unix etki alanı soketine giden yol';
$string['daemonerroractlikevirus'] = 'Dosyaları virüslü olarak değerlendir';
$string['errorcantopentcpsocket'] = 'TCP soketine bağlanma {$a} hatasıyla sonuçlandı';
$string['errorservernotsupported'] = 'SAVDI sunucusu, {$a} istek türünü desteklemiyor';
$string['ondaemonerror'] = 'Tarayıcıda arka plan programı hatası';
$string['pluginname'] = 'Bağlantıyı yeniden dene';
$string['privacy:metadata'] = 'Sophos SAVDI antivirüs eklentisi herhangi bir kişisel veri saklamaz.';
$string['testclienthasscandata'] = 'SCANDATA isteğini destekler';
$string['testclienthasscandir'] = 'SCANDIR isteğini destekler';
$string['testclienthasscandirr'] = 'SCANDIRR isteğini destekler';
$string['testclienthasscanfile'] = 'SCANFILE isteğini destekler';
$string['testclientresult'] = 'Kazanım Bağlantısı';
$string['testclientscantestpath'] = 'Geçici dosya yüklendi';
$string['testclientscanuploaderror'] = 'Dosya yükleme hatası: {$a}.';
$string['testclientscanuploaderrornotrecognised'] = 'PHP dosya yükleme hatası: {$a}, yüklenen bir dosya olarak tanınmıyor.';
$string['testclientuploadandscan'] = 'Dosyayı yükleyin ve tarayın';
$string['testclientversion'] = 'Tarayıcı sürümü';
