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
 * Strings for component 'factor_admin', language 'tr', version '5.0'.
 *
 * @package     factor_admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'This factor allows for NOT being an administrator to count as a factor. Its intended use is to ensure administators require tighter security, so regular users get the weight for free, while admins must use other factors.';
$string['pluginname'] = 'Yönetici olmayan';
$string['privacy:metadata'] = 'Yönetici olmayan faktör eklentisi herhangi bir kişisel veri saklamaz.';
$string['settings:description'] = 'Site yöneticileri dışındaki tüm kullanıcılar bu faktör için puan alır. Bu, site yöneticileri için ek kimlik doğrulama faktörleri gerektirmenize olanak tanır.';
$string['settings:shortdescription'] = 'Yöneticiler için ek kimlik doğrulama faktörleri gerektirir.';
$string['settings:weight_help'] = 'Bu faktör için normal kullanıcılara ağırlık verilir, bu nedenle yöneticilerin geçmek için normal bir kullanıcıdan daha fazla faktöre sahip olması gerekir.';
$string['summarycondition'] = 'Yönetici değil';
