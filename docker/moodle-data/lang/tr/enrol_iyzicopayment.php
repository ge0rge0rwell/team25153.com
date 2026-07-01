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
 * Strings for component 'enrol_iyzicopayment', language 'tr', version '5.0'.
 *
 * @package     enrol_iyzicopayment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Kodu Uygula';
$string['assignrole'] = 'Rol ata';
$string['canntenrol'] = 'Kayıt devre dışı veya etkin değil';
$string['charge_description1'] = 'e-posta makbuzu için müşteri oluştur';
$string['charge_description2'] = 'Ders Kayıt Ücreti.';
$string['cost'] = 'Kayıt maliyeti';
$string['costerror'] = 'Kayıt ücreti sayısal değil';
$string['costorkey'] = 'Lütfen aşağıdaki kayıt yöntemlerinden birini seçin.';
$string['couponcode'] = 'Kupon Kodu';
$string['currency'] = 'Para birimi';
$string['defaultrole'] = 'Varsayılan rol ataması';
$string['defaultrole_desc'] = 'iyzico kayıtları sırasında kullanıcılara atanması gereken rolü seçin';
$string['enrol'] = 'Kaydolun';
$string['enrolenddate'] = 'Bitiş tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse, kullanıcılar yalnızca bu tarihe kadar kaydolabilir.';
$string['enrolenddaterror'] = 'Kayıt bitiş tarihi, başlangıç tarihinden önce olamaz';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_desc'] = 'Kaydın geçerli olduğu varsayılan süre. Sıfır olarak ayarlanırsa, kayıt süresi varsayılan olarak sınırsız olacaktır.';
$string['enrolperiod_help'] = 'Kullanıcının kaydolduğu andan başlayarak, kaydın geçerli olduğu süre. Devre dışı bırakılırsa, kayıt süresi sınırsız olacaktır.';
$string['enrolstartdate'] = 'Başlangıç tarihi';
$string['enrolstartdate_help'] = 'Etkinleştirilirse, kullanıcılar yalnızca bu tarihten itibaren kaydolabilir.';
$string['expiredaction'] = 'Kayıt sona erme eylemi';
$string['expiredaction_help'] = 'Kullanıcı kaydı sona erdiğinde gerçekleştirilecek eylemi seçin. Ders kaydının iptali sırasında bazı kullanıcı verilerinin ve ayarlarının kurstan silindiğini lütfen unutmayın.';
$string['invalidcouponcode'] = 'Geçersiz Kupon Kodu';
$string['invalidcouponcodevalue'] = 'Kupon Kodu {$a} geçerli değil!
Kupon Kodu {$a} geçerli değil!';
$string['iyzico:config'] = 'iyzico kayıt örneklerini yapılandırın';
$string['iyzico:manage'] = 'Kayıtlı kullanıcıları yönet';
$string['iyzico:unenrol'] = 'Kullanıcıların dersten kaydını sil';
$string['iyzico:unenrolself'] = 'Kendini dersten sil';
$string['iyzico_sorry'] = 'Üzgünüz, komut dosyasını bu şekilde kullanamazsınız.';
$string['iyzicoaccepted'] = 'iyzico ödemeleri kabul edildi';
$string['iyzicopayment:config'] = 'iyzico ödemeyi yapılandırın';
$string['iyzicopayment:manage'] = 'iyzico ödemeyi yönet';
$string['iyzicopayment:unenrol'] = 'iyzicoödeme kaydını iptal et';
$string['iyzicopayment:unenrolself'] = 'iyzicoödeme kaydını iptal et';
$string['mailadmins'] = 'yöneticiye bildir';
$string['mailstudents'] = 'Öğrencileri bilgilendir';
$string['mailteachers'] = 'öğretmenleri bilgilendir';
$string['maxenrolled'] = 'Maksimum kayıtlı kullanıcı';
$string['maxenrolled_help'] = 'iyzico ödeme kaydı yapabilecek maksimum kullanıcı sayısını belirtir. 0 limit yok demektir.';
$string['maxenrolledreached'] = 'iyzico ödeme-kayıt için izin verilen maksimum kullanıcı sayısına ulaşıldı.';
$string['messageprovider:iyzico_enrolment'] = 'iyzico kayıt mesajları';
$string['messageprovider:iyzicopayment_enrolment'] = 'Mesaj Sağlayıcı';
$string['newcost'] = 'Yeni Maliyet';
$string['nocost'] = 'Bu derse kaydolmanın hiçbir maliyeti yoktur!';
$string['pluginname'] = 'iyzico Ödeme';
$string['pluginname_desc'] = 'iyzipay modülü, ücretli kurslar oluşturmanıza olanak tanır.  Herhangi bir kursun ücreti sıfır ise, öğrencilerden giriş için ödeme yapmaları istenmez.  Burada tüm site için varsayılan olarak ayarladığınız site genelinde bir maliyet ve ardından her kurs için ayrı ayrı ayarlayabileceğiniz bir kurs ayarı vardır. Kurs maliyeti site maliyetini geçersiz kılar.';
$string['publishablekey'] = 'iyzico API Anahtarı';
$string['publishablekey_desc'] = 'iyzico hesabının API Anahtarı';
$string['sandboxmode'] = 'iyzico Korumalı Alan Modu';
$string['sandboxmode_desc'] = 'Hata ayıklama için iyzico Sandbox Modunu kullanın';
$string['secretkey'] = 'iyzico Gizli Anahtar';
$string['secretkey_desc'] = 'iyzico hesabının API Gizli Anahtarı';
$string['sendpaymentbutton'] = 'iyzico ile ödeme gönder';
$string['status'] = 'iyzico kayıtlarına izin ver';
$string['status_desc'] = 'Kullanıcıların varsayılan olarak bir derse kaydolmak için iyzico\'yu kullanmalarına izin verin.';
$string['unenrolselfconfirm'] = 'Kendinizi "{$a}" dersten gerçekten silmek istiyor musunuz?';
