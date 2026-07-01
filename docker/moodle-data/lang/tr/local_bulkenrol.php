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
 * Strings for component 'local_bulkenrol', language 'tr', version '5.0'.
 *
 * @package     local_bulkenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol_form_intro'] = 'Burada, kullanıcıları kursunuza toplu olarak kaydedebilirsiniz.  Kaydedilecek bir kullanıcı, Moodle hesabında kayıtlı e-posta adresinden tanımlanır.';
$string['error_enrol_user'] = 'Kullanıcıyı <em>{$a->email}</em> e-postasıyla kursa kaydederken bir sorun oluştu.';
$string['error_getting_user_for_email'] = 'Veritabanından <em>{$a}</em> e-posta adresi için kullanıcı kaydı alınırken bir sorun oluştu.';
$string['error_group_add_member'] = '<em>{$a->email}</em> e-postasına sahip kullanıcıyı <em>{$a->group}</em> kurs grubuna eklerken bir sorun oluştu.';
$string['error_invalid_email'] = '{$a->row} satırında geçersiz e-posta adresi bulundu (<em>{$a->email}</em>).  Bu satır yoksayılacak.';
$string['error_more_than_one_record_for_email'] = '<em>{$a}</em> e-posta adresine sahip birden fazla mevcut Moodle kullanıcı hesabı bulundu.<br />Bu satır dikkate alınmayacak, mevcut Moodle kullanıcılarının hiçbiri kaydedilmeyecek.';
$string['error_no_email'] = '{$a->line} satırında e-posta adresi bulunamadı (<em>{$a->content}</em>).  Bu satır yoksayılacak.';
$string['error_no_record_found_for_email'] = '<em>{$a}</em> e-posta adresine sahip mevcut bir Moodle kullanıcı hesabı yok.<br />Bu satır yoksayılacak, anında oluşturulmuş bir Moodle kullanıcı hesabı olmayacak.';
$string['error_no_valid_email_in_list'] = 'Belirtilen listede geçerli bir e-posta adresi bulunamadı.<br />Lütfen <a href=\'{$a->url}\'>geri dönün ve girişinizi kontrol edin</a>.';
$string['error_usermails_empty'] = 'E-posta adresleri listesi boş.  Lütfen en az bir e-posta adresi ekleyin.';
$string['usermails'] = 'E-posta adres listesi';
$string['usermails_help'] = 'Mevcut bir Moodle kullanıcısını bu kursa kaydetmek için, onun e-posta adresini her satıra bir kullanıcı / e-posta adresi olacak şekilde bu forma ekleyin.<br /><br />Örnek:<br />alice@example.com< br />bob@example.com<br /><br />İsteğe bağlı olarak gruplar oluşturabilir ve kayıtlı kullanıcıları gruplara ekleyebilirsiniz. Tek yapmanız gereken, kullanıcı listesini ayırarak hash işareti ve grubun adını içeren bir başlık satırı eklemek.<br /><br />Örnek:<br /># Grup 1<br />alice@example .com<br />bob@example.com<br /># Grup 2<br />carol@example.com<br />dave@example.com';
