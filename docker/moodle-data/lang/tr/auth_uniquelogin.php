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
 * Strings for component 'auth_uniquelogin', language 'tr', version '5.0'.
 *
 * @package     auth_uniquelogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aplly_to_admin'] = 'Yöneticiye Uygula';
$string['aplly_to_teacher'] = 'Öğretmene Uygula';
$string['auth_uniquelogerror'] = 'Zaten etkin bir oturum var, bu yüzden gerçekleştirmek mümkün değildir.';
$string['auth_uniquelogindescription'] = 'Bu oturum her kullanıcının sadece bir aktif oturumu olmasını sağlar. <br/> <br/> Bir kullanıcı başarılı bir giriş yaptığında, o kullanıcıya ait diğer tüm oturumlar sonlandırılacaktır. <br/> <br/> <div style = "font-weight: bold;"> Not 1: Bu eklentinin çalışması için kullanıcı oturumları veritabanında saklanmalıdır. Bu yapılandırma, <a href="settings.php?section=sessionhandling"> Oturumlar </a> \'da belirlenir. </a> </div> <br/>';
$string['auth_uniquelogintitle'] = 'Benzersiz giriş';
$string['configaplly_to_admin'] = 'Kullanıcı sistem bağlamında Yönetici olarak rol aldığında benzersiz oturum açma kısıtlamasını uygulayın.';
$string['configaplly_to_teacher'] = 'Herhangi bir Moodle kursunda Öğretmen rolüne sahip kullanıcılara benzersiz oturum açma kısıtlaması uygulayın.';
$string['pluginname'] = 'Benzersiz Giriş';
