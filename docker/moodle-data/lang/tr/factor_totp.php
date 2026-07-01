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
 * Strings for component 'factor_totp', language 'tr', version '5.0'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Zaman tabanlı tek seferlik parola ((ZTSP) doğrulayıcıyı yönetme';
$string['action:revoke'] = 'Zaman tabanlı tek seferlik parola (ZTSP) doğrulayıcısını kaldırın';
$string['devicename'] = 'Cihaz etiketi';
$string['devicename_help'] = 'Bu, bir kimlik doğrulama uygulamasının yüklü olduğu cihazdır. Birden fazla cihaz ayarlayabilirsiniz, böylece bu etiket hangilerinin kullanıldığını izlemeye yardımcı olur. Ayrı ayrı iptal edilebilmeleri için her cihazı kendi benzersiz koduyla ayarlamanız gerekir.';
$string['devicenameexample'] = 'örneğin "iPhone 11\'de çalışın"';
$string['error:alreadyregistered'] = 'Bu zamana dayalı tek seferlik parola (ZTSP) sırrı zaten kaydedilmiştir.';
$string['error:codealreadyused'] = 'Bu kod kimlik doğrulaması için zaten kullanıldı. Lütfen yeni bir kod oluşturulmasını bekleyin ve tekrar deneyin.';
$string['error:futurecode'] = 'Bu kod geçersiz. Lütfen kimlik doğrulama cihazınızdaki saatin doğru olduğunu doğrulayın ve tekrar deneyin.
    Geçerli sistem saati {$a}.';
$string['error:oldcode'] = 'Bu kod çok eski. Lütfen kimlik doğrulama cihazınızdaki saatin doğru olduğunu doğrulayın ve tekrar deneyin.
    Geçerli sistem saati {$a}.';
$string['error:wrongverification'] = 'Yanlış doğrulama kodu';
$string['factorsetup'] = 'Uygulama kur';
$string['info'] = 'Bir kimlik doğrulayıcı uygulaması kullanarak doğrulama kodu oluşturun.';
$string['logindesc'] = 'Bir kod oluşturmak için mobil cihazınızdaki kimlik doğrulayıcı uygulamasını kullanın.';
$string['loginoption'] = 'Kimlik Doğrulayıcı uygulamasını kullan';
$string['loginskip'] = 'Cihazım yaınmda değil.';
$string['loginsubmit'] = 'Devam et';
$string['logintitle'] = 'Mobil uygulama ile sizin olduğunuzu doğrulayın';
$string['managefactor'] = 'Kimlik doğrulayıcı uygulamasını yönetin';
$string['managefactorbutton'] = 'Yöneti';
$string['manageinfo'] = 'Kimlik doğrulamak için \'{$a}\' kullanıyorsunuz.';
$string['pluginname'] = 'Kimlik doğrulayıcı uygulaması';
$string['privacy:metadata'] = 'Zamana dyalı tek seferlik faktörü eklentisi hiçbir kişisel veriyi saklamaz';
$string['replacefactor'] = 'Kimlik doğrulayıcı uygulamasını değiştirin';
$string['replacefactorconfirmation'] = '\'{$a}\' kimlik doğrulama uygulaması değiştirilsin mi?';
$string['revokefactorconfirmation'] = '\'{$a}\' kimlik doğrulama uygulaması kaldırılsın mı?';
$string['settings:description'] = 'Kullanıcıların, oturum açma sırasında girmeleri gereken bir kod oluşturmak için mobil cihazlarında yüklü bir kimlik doğrulayıcı uygulamasına ihtiyaçları olacaktır.';
$string['settings:shortdescription'] = 'Kullanıcıların oturum açma sırasında cihazlarındaki bir kimlik doğrulayıcı uygulamasından bir kod girmelerini zorunlu kılın.';
$string['settings:totplink'] = 'Mobil uygulama kurulum bağlantısını göster';
$string['settings:totplink_help'] = 'Etkinleştirilirse, kullanıcı doğrudan otpauth:// bağlantısı olan 3. bir kurulum seçeneği görecektir';
$string['settings:window'] = 'Zamana dayalı tek seferlik porala doğrulama penceresi';
$string['settings:window_help'] = 'TOTP penceresi zaman kayması olarak işlev görür ve her bir kodun ne kadar süreyle geçerli olacağını belirler.
    Yeni oluşturulan kodlar arasındaki süre olan periyot 30 saniyedir.
    Pencere 15 ise (varsayılan) ve geçerli zaman damgası 147682209 ise, test edilen OTP 147682194 (147682209 - 15), 147682209 ve 147682224 (147682209 + 15) içinde yer alır.
    Pencere 30\'dan küçük olmalıdır. Bu nedenle, bu test bir önceki OTP\'yi içerir ancak bir sonrakini içermez.
    Kullanıcınızın cihaz saatleri genellikle biraz yanlışsa, geçici bir çözüm olarak bunu daha yüksek bir değere (29\'a kadar) ayarlayabilirsiniz.';
$string['setupfactor'] = 'Kimlik doğrulayıcı uygulamasını kur';
$string['setupfactor:account'] = 'Hesap';
$string['setupfactor:devicename'] = 'Cihaz adı';
$string['setupfactor:devicenameinfo'] = 'Bu, doğrulama kodunu hangi cihazın alacağını belirlemenize yardımcı olur.';
$string['setupfactor:enter'] = 'Ayrıntıları elle girin';
$string['setupfactor:instructionsdevicename'] = '1. Cihazınıza bir isim verin.';
$string['setupfactor:instructionsscan'] = '2. Kimlik doğrulayıcı uygulamanızla QR kodunu tarayın.';
$string['setupfactor:instructionsverification'] = '4. Doğrulama kodunu girin.';
$string['setupfactor:intro'] = 'Bu yöntemi kurmak için, bir kimlik doğrulayıcı uygulaması olan bir cihaza sahip olmanız gerekir. Bir uygulamanız yoksa, bir tane indirebilirsiniz. Örneğin, <a href="https://2fas.com/" target="_blank">2FAS Auth</a>, <a href="https://freeotp.github.io/" target="_blank">FreeOTP</a>, Google Authenticator, Microsoft Authenticator veya Twilio Authy.';
$string['setupfactor:key'] = 'Gizli anahtar:';
$string['setupfactor:link'] = 'Veya ayrıntıları manuel olarak girin.';
$string['setupfactor:link_help'] = 'Bir mobil cihaz kullanıyorsanız ve zaten bir kimlik doğrulayıcı uygulaması yüklüyse bu bağlantı işe yarayabilir. Oturum açtığınız cihazla aynı cihazda ZTKP kullanmanın ÇFD\'nın faydalarını zayıflatabileceğini unutmayın.';
$string['setupfactor:linklabel'] = 'Bu cihazda zaten yüklü olan uygulamayı aç';
$string['setupfactor:mode'] = 'Mod:';
$string['setupfactor:mode:timebased'] = 'Zaman tabanlı';
$string['setupfactor:scanwithapp'] = 'QR kodunu seçtiğiniz kimlik doğrulayıcı uygulamasıyla tarayın.';
$string['setupfactor:verificationcode'] = 'Doğrulama kodu';
$string['setupfactorbutton'] = 'Kurun';
$string['summarycondition'] = 'Zamana dayalı tek kullanımlık parola uygulamasını seç';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = '6 haneli doğrulama kodunuzu girin';
$string['verificationcode_help'] = 'Google Authenticator gibi kimlik doğrulayıcı uygulamanızı açın ve bu site ve kullanıcı adıyla eşleşen 6 haneli kodu arayın';
