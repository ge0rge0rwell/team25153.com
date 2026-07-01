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
 * Strings for component 'factor_iprange', language 'tr', version '5.0'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Şu anda kimse bu faktörü geçemeyecek! Kendi IP adresinizi ekleyebilirsiniz (<i>{$a->ip</i>)';
$string['allowedipshasmyip'] = 'IP\'niz (<i>{$a->ip}</i>) listede yer alır ve bu faktörü geçersiniz.';
$string['allowedipshasntmyip'] = 'IP\'niz (<i>{$a->ip}</i>) listede yer almıyor ve bu faktörü geçemeyeceksiniz.';
$string['pluginname'] = 'IP Aralığı';
$string['privacy:metadata'] = 'IP aralığı faktörü eklentisi hiçbir kişisel veriyi saklamaz';
$string['settings:description'] = 'IP adreslerini kullanarak otomatik kullanıcı doğrulamasını etkinleştirin. Bu, kullanıcı kurulumu gerektirmez ve güvenilir ağlarda güvenli, sorunsuz bir oturum açma sağlayabilir.';
$string['settings:safeips'] = 'Güvenli IP aralıkları';
$string['settings:safeips_help'] = 'Geçiş faktörü olarak sayılacak IP adreslerinin veya alt ağların bir listesini girin. Eğer boş kalırsa kimse bu faktörü geçemez. {$a->info} {$a->syntax}';
$string['settings:shortdescription'] = 'Kullanıcıların kimliğini otomatik olarak doğrulamak için IP adreslerini kullanın.';
$string['summarycondition'] = 'güvenli bir ağda';
