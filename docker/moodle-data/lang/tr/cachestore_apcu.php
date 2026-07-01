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
 * Strings for component 'cachestore_apcu', language 'tr', version '5.0'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'APCu\'nun tek düğümlü siteler veya yerel olarak depolanabilen önbellekler için yalnızca uygun bir seçim olduğuna dikkat edin.
Daha fazla bilgi için <a href="{$a}"> APC kullanıcı ön belgelerine </a> bakın.';
$string['notice'] = 'Uyarı';
$string['pluginname'] = 'APC kullanıcı ön belleği (APCu)';
$string['prefix'] = 'Önek';
$string['prefix_help'] = 'Yukarıdaki önek, bu APC deposu örneğinde saklanan tüm anahtarlar için kullanılır. Varsayılan olarak veritabanı öneki kullanılır.';
$string['prefixinvalid'] = 'Seçtiğiniz önek geçersiz. Sadece a-z A-Z 0-9-_ kullanabilirsiniz.';
$string['prefixnotunique'] = 'Seçtiğiniz önek benzersiz değil. Lütfen benzersiz bir önek seçin.';
$string['privacy:metadata'] = 'APC kullanıcı önbelleği (APCu) eklentisi, önbelleğe alma işlevinin bir parçası olarak verileri kısa süreliğine depolar, ancak bu veriler düzenli olarak temizlenir ve hiçbir şekilde harici olarak gönderilmez.';
$string['testperformance'] = 'Performansı test edin';
$string['testperformance_desc'] = 'Etkinleştirilirse, Performansı test sayfası görüntülenirken APCu performansı dahil edilir. Bunu son ürün sitesinden etkinleştirmek önerilmez.';
