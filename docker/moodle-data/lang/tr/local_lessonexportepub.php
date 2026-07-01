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
 * Strings for component 'local_lessonexportepub', language 'tr', version '5.0'.
 *
 * @package     local_lessonexportepub
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['exportepub'] = 'epub olarak dışa aktar';
$string['filename'] = '{$a->lessonname} {$a->timestamp} dışa aktar';
$string['lessonexportepub:export'] = 'Dersi epub olarak dışa aktar';
$string['lessonexportfailed'] = '\'{$a}\' dersinin dışa aktarımı başarısız oldu';
$string['lessonexportfailed_body'] = '\'{$a->name}\' dersi güncellendi, ancak onu dışa aktarma ve e-postayla gönderme denemesi, {$a->exportattempts} denemelerinden sonra başarısız oldu. Ders tekrar güncellenirse, dışa aktarmak için başka girişimlerde bulunulacaktır. Ders şu adreste bulunabilir: {$a->url}.';
$string['lessonupdated'] = 'Ders\' {$a} \' güncellendi';
$string['modified'] = 'En son {$a->modifiedby} tarafından {$a->timemodified} tarihinde değiştirildi';
$string['plugingroup'] = 'Ders Dışa Aktarma';
$string['pluginname'] = 'Dersi  EPUB olarak Dışa Aktar';
