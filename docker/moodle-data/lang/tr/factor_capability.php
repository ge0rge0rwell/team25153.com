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
 * Strings for component 'factor_capability', language 'tr', version '5.0'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'Kimlik doğrulaması için CFA\'da başka bir faktör kullanılması gerekir';
$string['pluginname'] = 'Kullanıcı yeteneği';
$string['privacy:metadata'] = 'Kullanıcı yetenek faktörü eklentisi herhangi bir kişisel veriyi saklamaz';
$string['settings:adminpasses'] = 'Site yöneticileri bu faktörü geçebilir';
$string['settings:adminpasses_help'] = 'Varsayılan olarak yöneticiler, \'factor/capability:cannotpassfactor\' kullanan bu faktör de dahil olmak üzere tüm yetenek kontrollerini geçerler, yani bu faktörde başarısız olurlar.
    İşaretlenirse, başka bir rolden bu yeteneğe sahip değillerse tüm site yöneticileri bu faktörü geçecektir.
    İşaretlenmezse site yöneticileri bu faktörde başarısız olur.';
$string['settings:description'] = '<p>Hangi kullanıcıların kimlik doğrulaması için başka bir faktör kullanması gerektiğini belirtmek için capability factor/capability:cannotpassfactor kullanın.</p>
<p> <a href="roles/manage.php">Rolleri tanımla</a> bölümünde seçilen roller için bu özelliğe izin verin.</p>';
$string['settings:shortdescription'] = 'Hangi kullanıcıların kimlik doğrulaması için diğer faktörleri kullanması gerektiğini belirtin. Diğer faktörlerle birleştirilmelidir.';
$string['summarycondition'] = 'site yöneticisi de dahil olmak üzere herhangi bir rolde \'factor/capability:cannotpassfactor\' özelliğine sahip DEĞİLDİR.';
