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
 * Strings for component 'factor_token', language 'tr', version '5.0'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'Çoklu Faktör Doğrulaması oluşturuldu.';
$string['form:trust'] = '{$a} karşılığında bu cihaza güvenin.';
$string['pluginname'] = 'Bu cihaza güvenin';
$string['privacy:metadata'] = 'Bu cihaza güven faktörü eklentisi hiçbir kişisel veriyi saklamaz.';
$string['settings:description'] = 'Kullanıcıların ilk kimlik doğrulamasından sonra güvenilir olarak işaretlenmiş cihazlarda ekstra kimlik doğrulamasını atlamasına izin verin.';
$string['settings:expireovernight'] = 'Güveni bir gecede sona erdirme';
$string['settings:expireovernight_help'] = 'Bu, belirteçlerin süresinin gece boyunca dolmasını zorlayarak kullanıcılar için gün ortası kesintilerini önler. Bunun yerine, süre dolduktan sonra bir günün başlangıcında çok faktörlü kimlik doğrulaması yapmaları istenecektir.';
$string['settings:expiry'] = 'Güven süresi';
$string['settings:expiry_help'] = 'Yeni bir çok faktörlü kimlik doğrulama gerektirmeden önce bir cihaza güvenilen süre.';
$string['settings:shortdescription'] = 'Kullanıcıların güvenilir olarak işaretlenmiş cihazlarda kimlik doğrulamasını atlamasına izin verin. Diğer faktörlerle birleştirilmesi gerekir.';
$string['summarycondition'] = 'kullanıcı daha önce bu cihaza güvendi';
$string['tokenstoredindevice'] = '{$a->userid} kimliğine sahip kullanıcının cihazında depolanan çok faktörlü bir kimlik doğrulama jetonu var.  <br> Bilgi: {$a->string}.';
