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
 * Strings for component 'factor_sms', language 'tr', version '5.0'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Cep telefonu numarasını yönet';
$string['action:revoke'] = 'Cep telefonu numarasını kaldır';
$string['addnumber'] = 'Cep telefonu numarası';
$string['clientnotfound'] = 'AWS Hizmeti istemcisi bulunamadı. İstemci tam nitelikli sınıf adı olmalıdır, örneğin \\Aws\\S3\\S3Client';
$string['editphonenumber'] = 'Telefon numarasını düzenle';
$string['editphonenumberinfo'] = 'Kodu alamadıysanız veya yanlış numara girdiyseniz lütfen numarayı düzenleyip tekrar deneyin.';
$string['error:emptyverification'] = 'Boş kod.  Tekrar deneyin.';
$string['error:wrongphonenumber'] = 'Sağladığınız telefon numarası geçerli bir biçimde değil.';
$string['error:wrongverification'] = 'Yanlış kod.  Tekrar deneyin.';
$string['errorawsconection'] = 'AWS sunucusuna bağlanırken hata oluştu: {$a}';
$string['errorsmssent'] = 'Doğrulama kodunuzu içeren SMS mesajı gönderilirken hata oluştu.';
$string['event:smssent'] = 'SMS mesajı gönderildi';
$string['event:smssentdescription'] = '{$a->userid} kimliğine sahip kullanıcıya SMS yoluyla bir doğrulama kodu gönderildi <br> Bilgi: {$a->debuginfo}';
$string['info'] = 'Seçtiğiniz cep telefonu numarasına bir doğrulama kodu gönderilmesini sağlayın.';
$string['logindesc'] = 'Az önce cep telefonu numaranıza 6 haneli bir kod içeren bir SMS gönderdik: {$a}';
$string['loginoption'] = 'Cep telefonunuza bir kod gönderilmesini sağlayın';
$string['loginskip'] = 'Kod almadım';
$string['loginsubmit'] = 'Devam';
$string['logintitle'] = 'Cep telefonunuza gönderilen doğrulama kodunu girin';
$string['managefactor'] = 'SMS leri yönet';
$string['managefactorbutton'] = 'Yönet';
$string['manageinfo'] = 'Kimlik doğrulamak için \'{$a}\' kullanıyorsunuz.';
$string['notification:smsgatewaymigration'] = 'SMS ayarları kaldırıldı';
$string['notification:smsgatewaymigrationinfo'] = 'SMS ile ilgili tüm işlevleri yönetmek ve yapılandırmak için artık yeni bir SMS alt sistemi mevcuttur. Mevcut SMS konfigürasyonlarınız <a href="{$a}">SMS ağ geçitleri</a> sayfasına taşınmıştır.';
$string['phonehelp'] = 'Doğrulama kodunu almak için cep telefonu numaranızı (ülke kodu dahil) girin.';
$string['pluginname'] = 'Kısa Mesaj';
$string['privacy:metadata'] = 'Cep telefonu SMS faktörü eklentisi herhangi bir kişisel veri saklamaz';
$string['revokefactorconfirmation'] = '\'{$a}\' SMS\'i kaldırılsın mı?';
$string['settings:aws'] = 'AWS SNM';
$string['settings:aws:key'] = 'Anahtar';
$string['settings:aws:key_help'] = 'Amazon API anahtarı kimlik bilgisi.';
$string['settings:aws:region'] = 'Bölge';
$string['settings:aws:region_help'] = 'Amazon API ağ geçidi bölgesi.';
$string['settings:aws:secret'] = 'Sır';
$string['settings:aws:secret_help'] = 'Amazon API gizli kimlik bilgisi.';
$string['settings:aws:usecredchain'] = 'AWS kimlik bilgilerini bulmak için varsayılan kimlik bilgisi sağlayıcı zincirini kullanın';
$string['settings:countrycode'] = 'Ülke telefon kodu';
$string['settings:countrycode_help'] = 'Kullanıcılar + önekine sahip uluslararası bir numara girmezlerse, varsayılan olarak baştaki + olmadan arama kodu.

Arama kodlarının bir listesi için bu bağlantıya bakın: {$a}';
$string['settings:duration'] = 'Geçerlilik süresi';
$string['settings:duration_help'] = 'Kodun geçerli olduğu süre.';
$string['settings:gateway'] = 'SMS ağ geçidi';
$string['settings:gateway_help'] = 'Mesaj göndermek istediğiniz SMS sağlayıcısı.';
$string['settings:heading'] = 'Kullanıcılar SMS yoluyla 6 haneli bir doğrulama kodu alacak ve giriş işlemini tamamlamak için bu kodu girmeleri gerekecektir. Kullanıcıların önce cep telefonu numaralarını kaydetmeleri gerekecektir.';
$string['settings:setupdesc'] = 'SMS\'i bir kimlik doğrulama faktörü olarak kullanmak için öncelikle <a href="{$a}">bir SMS ağ geçidi</a> kurmanız gerekir.';
$string['settings:shortdescription'] = 'Kullanıcıların oturum açma sırasında SMS yoluyla alınan bir kodu girmelerini zorunlu kılın.';
$string['settings:smsgateway'] = 'Kısa mesaj geçidi';
$string['settings:smsgateway_help'] = 'Listeden bir ağ geçidi seçin veya <a href="{$a}">yeni bir ağ geçidi oluşturun</a>.';
$string['setupfactor'] = 'SMS Kurulumu';
$string['setupfactorbutton'] = 'SMS\'i Ayarlayın';
$string['setupsubmitcode'] = 'Kaydet';
$string['setupsubmitphone'] = 'Kod gnderildi';
$string['smsstring'] = '{$a->code}, {$a->fullname} tek seferlik güvenlik kodunuzdur.

 @{$a->url} #{$a->code}';
$string['summarycondition'] = 'Tek seferlik SMS güvenlik kodu kullanın';
