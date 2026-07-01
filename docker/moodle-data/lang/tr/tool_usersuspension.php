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
 * Strings for component 'tool_usersuspension', language 'tr', version '5.0'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['form:static:uploadfile:desc'] = '2.7+ | form:statik:yüklemedosyası:desc | tool_usersuspension
Kullanıcı askıya alma dosyanızı buraya yükleyin<br/>
Yüklenen CSV dosyası şu şekilde yapılandırılabilir:<br/>
<ol>
<li>YALNIZCA e-posta adreslerini içeren \'basit\' dosya, her satıra bir tane</li>
<li>tür ve değeri gösteren 2 sütun içeren \'akıllı\' dosya.<br/>
Tür sütunu için olası değerler şunlardır:
<ul><li>email: değer sütunu, kullanıcı hesabının e-posta adresini gösterir</li>
<li>kimlik numarası: değer sütunu, kullanıcı hesabının kimlik numarasını gösterir</li>
<li>kullanıcı adı: değer sütunu, kullanıcı hesabının kullanıcı adını gösterir</li>
</ul></ol>';
$string['setting:desc:enablesmartdetectwarning'] = 'Etkinleştirildiğinde, kullanıcılara yaklaşan askıya almalarla ilgili e-postalar gönderir.';
$string['setting:desc:senddeleteemail'] = 'Silindikten sonra kullanıcıyı bilgilendiren bir e-posta gönderilsin mi?';
$string['setting:desc:sendsuspendemail'] = 'Kullanıcıya, hesabının askıya alındığını bildiren bir e-posta gönderilsin mi?';
$string['setting:enablesmartdetectwarning'] = 'Yaklaşan askıya alma kunusunda uyarı e-postaları gönderilsin mi?';
$string['thead:name'] = 'İsim';
