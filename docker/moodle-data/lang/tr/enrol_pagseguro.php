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
 * Strings for component 'enrol_pagseguro', language 'tr', version '5.0'.
 *
 * @package     enrol_pagseguro
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rol ata';
$string['businessemail'] = 'PagSeguro iş e-postası';
$string['businessemail_desc'] = 'İşletmenizin PagSeguro hesabının e-posta adresi';
$string['businesstoken'] = 'PagSeguro iş simgesi';
$string['businesstoken_desc'] = 'İşinizin belirteci PagSeguro hesabı';
$string['cost'] = 'Kayıt ücreti';
$string['costerror'] = 'Kayıt ücreti sayısal değil';
$string['costorkey'] = 'Lütfen aşağıdaki kayıt yöntemlerinden birini seçin.';
$string['currency'] = 'Para birimi';
$string['currency_desc'] = 'Brezilya para: Brezilya Reali';
$string['defaultrole'] = 'Varsayılan rol ataması';
$string['defaultrole_desc'] = 'PagSeguro kayıtları sırasında kullanıcılara atanması gereken rolü seçin';
$string['enrolenddate'] = 'Bitiş tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse kullanıcılar yalnızca bu tarihe kadar kaydolabilir.';
$string['enrolenddaterror'] = 'Kayıt bitiş tarihi başlangıç tarihinden önce olamaz';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_desc'] = 'Kaydın geçerli olduğu varsayılan süre (saniye olarak). Sıfır olarak ayarlanırsa, kayıt süresi varsayılan olarak sınırsız olacaktır.';
$string['enrolperiod_help'] = 'Kaydın geçerli olduğu süre, kullanıcı kayıtlı olduğu andan itibaren. Devre dışı bırakılırsa, kayıt süresi sınırsız olur.';
$string['enrolstartdate'] = 'Başlangıç tarihi';
$string['enrolstartdate_help'] = 'Etkinleştirilirse kullanıcılar bu tarihten itibaren yalnızca kayıt edilebilir.';
$string['error:unauthorized'] = 'Bu sağlayıcı PagSeguro API\'sini kullanma yetkisine sahip değildir.';
$string['mailadmins'] = 'Yöneticiye bildir';
$string['mailstudents'] = 'Öğrencilere bildir';
$string['mailteachers'] = 'Öğretmenlere bildir';
$string['messageprovider:pagseguro_enrolment'] = 'PagSeguro kayıt mesajları';
$string['needsignuporlogin'] = 'Ödeme yapmadan önce kaydolmanız veya oturum açmanız gerekmektedir.';
$string['nocost'] = 'Bu kursa kaydolmanın hiçbir maliyeti yoktur!';
$string['pagseguro:config'] = 'PagSeguro kayıt örneklerini yapılandır';
$string['pagseguro:manage'] = 'Kayıtlı kullanıcıları yönet';
$string['pagseguro:unenrol'] = 'Kullanıcıları dersten kaydettirme';
$string['pagseguro:unenrolself'] = 'Kendi kendine dersten kaydettirme';
$string['pagseguroaccepted'] = 'PagSegu ödemeleri kabul edildi';
$string['paymentrequired'] = 'Bu kursa erişmek için PagSeguro aracılığıyla {$a->currency} {$a->cost} ödemelisiniz.';
$string['pluginname'] = 'PagSeguro';
$string['pluginname_desc'] = 'PagSeguro modülü, ücretli dersler kurmanıza izin verir. Herhangi bir dersin maliyeti sıfırsa, öğrencilerin giriş ücretini ödemeleri istenmez. Burada sitenin tamamı için bir varsayılan değer olarak belirlediğiniz site genelinde bir maliyet ve ardından her bir ders için ayrı ayrı ayarlayabileceğiniz bir ders ayarı var. Ders ücreti site maliyetini geçersiz kılar.';
$string['sendpaymentbutton'] = 'PagSeguro aracılığıyla ödeme gönderin';
$string['status'] = 'PagSeguro kayıtlarına izin ver';
$string['status_desc'] = 'Kullanıcıların varsayılan olarak bir derse kaydolmak için PagSeguro\'yu kullanmasına izin verin.';
$string['unenrolselfconfirm'] = 'Kendinizi "{$a}" dersinden kaydetmeyi gerçekten istiyor musunuz?';
