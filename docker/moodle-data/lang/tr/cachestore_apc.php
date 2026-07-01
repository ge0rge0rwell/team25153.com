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
 * Strings for component 'cachestore_apc', language 'tr', version '5.0'.
 *
 * @package     cachestore_apc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'APC\'nin kümelenmiş web sunucuları çalıştıran sitelerde uygun bir seçim olmadığını lütfen unutmayın. Böyle bir kurulumda kullanılması, önbelleklenmiş içeriğin dikkatle yönetilmediği sürece kümedeki diğer düğümlerle senkronize olmamasına neden olabilir.
Yalnızca tek bir web sunucusunun kullanıldığı durumlarda APC\'yi kullanmanızı öneririz.
Daha fazla bilgi için <a href="{$a}"> Moodle dokümanları </a> \'na bakın.';
$string['notice'] = 'Bilgi';
$string['pluginname'] = 'Alternatif PHP önbelleği (APC)';
$string['prefix'] = 'Ön ek';
$string['prefix_help'] = 'Yukarıdaki önek, bu APC mağazası örneğinde saklanan tüm anahtarlar için kullanılır. Varsayılan olarak veritabanı öneki kullanılır.';
$string['prefixinvalid'] = 'Seçtiğiniz önek geçersiz. Sadece a-z A-Z 0-9-_ kullanabilirsiniz.';
$string['prefixnotunique'] = 'Seçtiğiniz önek benzersiz değil. Lütfen benzersiz bir önek seçin.';
$string['testperformance'] = 'Performansı test et';
$string['testperformance_desc'] = 'Etkinleştirilirse, yönetim bloğundaki Performans test sayfasını görüntülerken APC performansı dahil edilir. Bunu üretim sitesinde etkinleştirmek önerilmez.';
