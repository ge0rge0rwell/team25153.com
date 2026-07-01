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
 * Strings for component 'enrol_paymentpagseguro', language 'tr', version '5.0'.
 *
 * @package     enrol_paymentpagseguro
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cost'] = 'Her ay alınan fiyat';
$string['cost2'] = 'Kayıt fiyatı';
$string['cost2_help'] = 'Kullanıcının derse erişmek için ödemesi gereken değer!';
$string['cost_help'] = 'Aylık ödemede her ay tahsil edilen tutar!';
$string['costerror'] = 'Abonelik fiyatı sayı olmalıdır';
$string['costmonthly'] = 'Aylık maliyet: R$ {$a}';
$string['costunique'] = 'Maliyet: R$ {$a}';
$string['defaultrole'] = 'Rol ata';
$string['defaultrole_help'] = 'Pagseguro üzerinden ödeme yapılan kayıtlarda kullanıcılara atanması gereken rolü seçin';
$string['email'] = 'PagSeguro E-posta';
$string['email_desc'] = 'PagSeguro E-posta';
$string['enrolenddate'] = 'Son başvuru tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse, kullanıcılar yalnızca bu tarihe kadar abone olabilir.';
$string['enrolperiod'] = 'kayıt süresi';
$string['enrolperiod_help'] = 'Kullanıcının kaydolduğu andan itibaren aboneliğin geçerli olduğu süre. Devre dışı bırakılırsa, kayıt süresi sınırsız olacaktır.';
$string['enrolstartdate'] = 'Girişlerin başlangıcı';
$string['enrolstartdate_help'] = 'Etkinleştirilirse, kullanıcılar yalnızca bu tarihten itibaren kaydolabilir.';
$string['errorapi'] = 'API PagSeguro!';
$string['errorlowvalue'] = 'Değer çok düşük!';
$string['errornoenrolment'] = 'Matris bulunamadı!';
$string['expiredaction'] = 'Kayıt süresinin bitiminde yapılacak işlem';
$string['expiredaction_help'] = 'Kayıt sona erdiğinde nasıl bir işlem yaparsınız?';
$string['faulback'] = 'Varsayılan olarak devre dışı bırakılsın mı?';
$string['faulback_help'] = 'Öğrenim ücretinin ödenmesi başarısız olursa, öğrenim devre dışı bırakılmalıdır?!';
$string['months'] = 'Ay sayısı';
$string['months_help'] = '0 (SIFIR) olarak ayarlanırsa ödeme benzersizdir. 3\'ten fazla ayarlarsanız, aylık olacaktır!';
$string['monthserror'] = 'Ay, 0 ile 24 arasında bir tam sayı olmalıdır!';
$string['monthsmaxerror'] = 'Maksimum 24 ay';
$string['nocost'] = '<span style=\'color: #ff0404\'>Yönetici tarafından belirlenen fiyat yok!</span>';
$string['payforpagseguro'] = 'PagSeguro ile şimdi ödeyin';
$string['paymentpagseguro:config'] = 'pagseguro\'nun kayıt yöntemini yapılandırın';
$string['paymentpagseguro:manage'] = 'Abone olan kullanıcıları yönetin';
$string['paymentpagseguro:unenrol'] = 'Ders kullanıcılarının kaydını iptal et';
$string['paymentpagseguro:unenrolself'] = 'Beni dersten çıkar';
$string['paymentredirect'] = '<h2>Ödeme talebi oluşturuluyor</h2>
    <p>Ödeme URL\'si: <strong>{$a}</strong></p>
    <p><a title=\\"Ödeme URL\'si\\" href=\\"{$a}\\" target=\\_blank\\">Ödeme URL\'sine gidin.</a></p>';
$string['paytext'] = 'Her gün {$a->date}, {$a->fullname} dersi için {$a->costlocaled} R$ tahsil edilecektir';
$string['pluginname'] = 'Pagseguro tarafından ödeme ile abonelik';
$string['pluginname_desc'] = 'Pagseguro üzerinden ödeme için ücretsiz ders!';
$string['privacy:metadata'] = 'Eklenti, verileri PagSeguro ile paylaşıyor';
$string['requestpayforpagseguro'] = 'Bu ders, erişimden önce kayıt ücretinin ödenmesini gerektirir.';
$string['signforpagseguro'] = 'Şimdi PagSeguro ile imzalayın';
$string['status'] = 'İmzalar etkinleştirilsin mi?';
$string['subscriptions'] = 'Formdaki imzaları etkinleştir';
$string['subscriptions_desc'] = 'İşaretlenirse, abonelik imza seçeneğini etkinleştirir.';
$string['token'] = 'Güvenli Sayfa Simgesi';
$string['token_desc'] = 'Güvenli Sayfa Simgesi';
$string['unenrolselfconfirm'] = 'Gerçekten "{$ a}" kursundan  kaldırmak istiyor musunuz?';
