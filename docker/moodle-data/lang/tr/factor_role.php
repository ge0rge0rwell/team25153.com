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
 * Strings for component 'factor_role', language 'tr', version '5.0'.
 *
 * @package     factor_role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Rol';
$string['privacy:metadata'] = 'Rol faktörü eklentisi hiçbir kişisel veriyi saklamaz.';
$string['settings:description'] = 'Kimlik doğrulamak için ek faktörler kullanması gereken rolleri seçin. Bu faktör açık değilse, tüm rollerin ek bir faktör kullanması gerekecektir.';
$string['settings:roles'] = 'Geçmeyen roller';
$string['settings:roles_help'] = 'Bu faktörü geçmeyecek rolleri seçin.  Bu, bu rolleri kimlik doğrulama için diğer faktörleri kullanmaya zorlamanıza olanak tanır.';
$string['settings:shortdescription'] = 'Rollerine bağlı olarak hangi kullanıcıların kimlik doğrulaması için diğer faktörleri kullanması gerektiğini belirtin. Diğer faktörlerle birleştirilmelidir.';
$string['summarycondition'] = 'herhangi bir bağlamda aşağıdaki rollerden hiçbirine sahip DEĞİLDİR: {$a}';
