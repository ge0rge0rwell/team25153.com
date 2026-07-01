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
 * Strings for component 'local_onenote', language 'tr', version '5.0'.
 *
 * @package     local_onenote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connction_error'] = 'OneNote\'a bağlanılamıyor. Lütfen biraz bekleyin ve tekrar deneyin.';
$string['error_noapiavailable'] = 'OneNote API\'sı yok. Office 365 eklentisi kümesini kullanıyorsanız, OneNote ile iletişime geçemedik. Aksi takdirde lütfen local_msaccount yükleyin.';
$string['errorfeedbackinstudentcontext'] = 'Öğrenci gönderim bağlamında geribildirim oluşturmaya çalışıldı.';
$string['errornopostdata'] = 'OneNote\'a gönderilecek sayfa verileri oluşturulamadı.';
$string['errornosection'] = 'OneNote Not Defterinizde bir bölüm oluşturulamadı veya alınamadı';
$string['erroronenoteapibadcall'] = 'API çağrısı hatası.';
$string['erroronenoteapibadcall_message'] = 'API çağrısı hatası: {$a}';
$string['errorsubmissioninteachercontext'] = 'Öğretmen not verme bağlamından bir gönderme oluşturmaya çalışıldı.';
$string['feedbacktitle'] = 'Geri bilidirim: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
$string['notebookname'] = 'Moodle Not defteri';
$string['onenote_page_error'] = 'Bu gönderim veya geri bildirim için OneNote sayfası açılamadı.';
$string['pluginname'] = 'Microsoft OneNote';
$string['submissiontitle'] = 'Gönderim: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
