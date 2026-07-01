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
 * Strings for component 'factor_webauthn', language 'tr', version '5.0'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Güvenlik anahtarını yönetin';
$string['action:revoke'] = 'Güvenlik ahantarını iptal et';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Hibrit';
$string['authenticator:internal'] = 'Dahili';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Güvenlik anahtarı adı';
$string['error'] = 'Kimlik doğrulama başarısız';
$string['error:alreadyregistered'] = 'Bu güvenlik anahtarı sırrı zaten kayıtlı.';
$string['info'] = 'Fiziksel bir güvenlik anahtarı veya parmak izi tarayıcısı kullanın.';
$string['logindesc'] = 'Güvenlik anahtarınızı kullanmak için devam düğmesine tıklayın.';
$string['loginoption'] = 'Güvenlik anahtarını kullan';
$string['loginskip'] = 'Güvenlik anahtarım yanımda değil';
$string['loginsubmit'] = 'Devam';
$string['logintitle'] = 'Güvenlik anahtarıyla siz olduğunuzu doğrulayın';
$string['managefactor'] = 'Güvenlik anahtarını yönet';
$string['managefactorbutton'] = 'Yönet';
$string['manageinfo'] = 'Kimlik doğrulamak için \'{$a}\' kullanıyorsunuz.';
$string['pluginname'] = 'Güvenlik anahtarı';
$string['privacy:metadata'] = 'Güvenlik anahtar faktörü eklentisi herhangi bir kişisel veri depolamaz.';
$string['register'] = 'Güvenlik anahtarını kaydet';
$string['registererror'] = 'Güvenlik anahtarı kaydedilemedi: {$a}';
$string['registersuccess'] = 'Güvenlik anahtarı kaydedildi.';
$string['replacefactor'] = 'Güvenlik anahtarını yenile';
$string['replacefactorconfirmation'] = '\'{$a}\' güvenlik anahtarını mı değiştirdin?';
$string['revokefactorconfirmation'] = '\'{$a}\' güvenlik anahtarını kaldır?';
$string['settings:authenticatortypes'] = 'Kimlik doğrulayıcı türleri';
$string['settings:authenticatortypes_help'] = 'Belirli kimlik doğrulayıcı türlerini değiştir';
$string['settings:description'] = '<p>Kullanıcılar, USB veya NFC belirteci gibi fiziksel bir güvenlik anahtarı veya parmak izi gibi biyometrik bir yöntem kullanarak kimlik doğrulaması yapar. Oturum açma sırasında, kimliklerini doğrulamak için güvenlik anahtarlarını fiziksel olarak kullanmaları gerekir.</p>
<p>Kullanıcıların öncelikle kendi güvenlik anahtarlarını oluşturmaları gerekecektir.</p>';
$string['settings:shortdescription'] = 'Kullanıcıların oturum açma sırasında USB veya NFC belirteci gibi bir güvenlik anahtarı veya biyometrik bir yöntem kullanmasını zorunlu kılın.';
$string['settings:userverification'] = 'Kullanıcı doğrulama';
$string['settings:userverification_help'] = 'Kimlik doğrulayıcıyı ayarla';
$string['setupfactor'] = 'Güvenlik anahtarını ayarla';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Bir güvenlik anahtarı kaydedin.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Anahtarınıza bir ad verin.';
$string['setupfactor:intro'] = 'Güvenlik anahtarı, kimliğinizi doğrulamak için kullanabileceğiniz fiziksel bir cihazdır. Güvenlik anahtarları USB belirteçleri, Bluetooth cihazları veya telefonunuzdaki ya da bilgisayarınızdaki yerleşik parmak izi tarayıcıları olabilir.';
$string['setupfactor:securitykeyinfo'] = 'Bu, hangi güvenlik anahtarını kullandığınızı belirlemenize yardımcı olur.';
$string['setupfactorbutton'] = 'Kurulum';
$string['setupfactorbuttonadditional'] = 'Güvenlik anahtarı ekle';
$string['summarycondition'] = 'Kimlik doğrulaması yapan kişinin aslında söylediği kişi olduğundan emin olmaya yarar. Kullanıcı doğrulaması parola, PIN, parmak izi vb. gibi farklı şekillerde olabilir.';
$string['userverification:discouraged'] = 'Örneğin kullanıcı etkileşimini en aza indirmek için kullanıcı doğrulaması kullanılmamalıdır';
$string['userverification:preferred'] = 'Kullanıcı doğrulaması tercih edilir, kullanıcı doğrulaması eksikse kimlik doğrulama başarısız olmaz';
$string['userverification:required'] = 'Kullanıcı doğrulaması gereklidir (örn. pin ile). Anahtarın kullanıcı doğrulaması yoksa kimlik doğrulama başarısız olur';
