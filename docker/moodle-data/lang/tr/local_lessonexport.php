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
 * Strings for component 'local_lessonexport', language 'tr', version '5.0'.
 *
 * @package     local_lessonexport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['created'] = '{$a} tarihinde oluşturuldu';
$string['exportpdf'] = 'PDF olarak dışa aktar';
$string['filename'] = '{$a->lessonname} {$a->timestamp}, dışa aktar';
$string['lessonexport:exportpdf'] = 'Dersi PDF olarak dışa aktar';
$string['lessonexportfailed'] = '\'{$a}\' dersinin dışa aktarımı başarısız oldu';
$string['lessonexportfailed_body'] = '\'{$a->name}\' dersi güncellendi, ancak {$a->exportattempts} denemelerinden sonra dışa aktarma ve e-postayla gönderme girişimi başarısız oldu. Ders tekrar güncellenirse, dışa aktarmak için daha fazla girişimde bulunulacaktır. Ders şu adreste bulunabilir: {$a - > url}.';
$string['lessonpage'] = 'Ders Sayfaları';
$string['lessonupdated'] = 'Ders\' {$a} \' güncellendi';
$string['modified'] = 'En son {$a->modifiedby} tarafından {$a->timemodified} tarihinde değiştirildi';
$string['pdfexportanswers'] = 'Soru cevaplarını dışa aktar';
$string['plugingroup'] = 'Ders Dışa Aktar';
$string['pluginname'] = 'Dersi PDF Olarak Dışa Aktar';
$string['printed'] = 'Bu belge {$a} tarihinde indirilmiştir';
$string['truefalse'] = 'Toğru/Yanlış';
