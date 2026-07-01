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
 * Strings for component 'factor_email', language 'tr', version '5.0'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'E-postayı siz talep etmediyseniz oturum açma girişimini geçersiz kılmak için Devam\'ı tıklayın. Bağlantıya yanlışlıkla tıkladıysanız iptal seçeneğini tıkladığınızda herhangi bir işlem yapılmayacaktır.';
$string['email:browseragent'] = 'Bu isteğin tarayıcı ayrıntıları şöyledir: \'{$a}\'';
$string['email:geoinfo'] = 'Bu talebin kaynağı yaklaşık olarak şu şekilde görünmektedir:';
$string['email:greeting'] = 'Merhaba {$a} 👋';
$string['email:ipinfo'] = 'Giriş isteği ayrıntıları:';
$string['email:link'] = 'doğrulama bağlantısı';
$string['email:loginlink'] = 'Ya da aynı cihazı kullanıyorsanız bunu {$a} kullanın.';
$string['email:message'] = 'İşte {$a->sitename} ({$a->siteurl}) için doğrulama kodunuz.';
$string['email:originatingip'] = 'Merhaba {$a} 👋';
$string['email:revokelink'] = 'Eğer bu siz değilseniz, {$a} yapabilirsiniz.';
$string['email:revokesuccess'] = 'Bu kod başarıyla iptal edildi. Bu kullanıcı için tüm oturumlar sonlandırıldı.
    Hesap güvenliği doğrulanana kadar e-posta bir faktör olarak kullanılamayacaktır.';
$string['email:stoploginlink'] = 'bu giriş denemesini durdur';
$string['email:subject'] = 'İşte doğrulama kodunuz';
$string['email:uadescription'] = 'Bu isteğe ilişkin tarayıcı kimliği:';
$string['email:validity'] = 'Kod yalnızca bir kez kullanılabilir ve {$a} için geçerlidir.';
$string['error:badcode'] = 'Kod bulunamadı. Bu eski bir bağlantı olabilir, yeni bir kod e-posta ile gönderilmiş olabilir veya bu kodla giriş denemesi başarılı olmuş olabilir.';
$string['error:parameters'] = 'Hatalı sayfa parametreleri.';
$string['error:wrongverification'] = 'Yanlış kod.  Tekrar deneyin.';
$string['event:unauthemail'] = 'Yetkisiz e-posta alındı';
$string['info'] = 'Kimlik doğrulamak için {$a} e-postasını kullanıyorsunuz. Bu, site yöneticiniz tarafından ayarlanmıştır.';
$string['logindesc'] = 'Az önce e-postanıza 6 haneli bir kod gönderdik: {$a}';
$string['loginoption'] = 'Kendinize e-postayla bir kod gönderilmesini sağlayın';
$string['loginskip'] = 'Bir kod almadım';
$string['loginsubmit'] = 'Devam';
$string['logintitle'] = 'E-posta ile kimliğinizi doğrulayın';
$string['managefactor'] = 'Epostayı yönet';
$string['manageinfo'] = 'Kimlik doğrulaması için \'{$a}\' kullanılıyor. Bu, yöneticiniz tarafından ayarlanmıştır.';
$string['pluginname'] = 'Eposta';
$string['privacy:metadata'] = 'E-posta faktörü eklentisi hiçbir kişisel veriyi saklamaz';
$string['settings:description'] = 'Kullanıcılara e-posta yoluyla giriş işlemini tamamlamak için girmeleri gereken 6 haneli bir doğrulama kodu gönderilecektir.';
$string['settings:duration'] = 'Geçerlilik süresi';
$string['settings:duration_help'] = 'Kodun geçerli olduğu süre.';
$string['settings:shortdescription'] = 'Kullanıcıların oturum açma sırasında e-posta yoluyla aldıkları bir kodu girmelerini zorunlu kılın.';
$string['settings:suspend'] = 'Yetkisiz hesapları askıya alın';
$string['settings:suspend_help'] = 'Yetkisiz bir e-posta doğrulaması alındığında kullanıcı hesaplarını askıya almak için bunu işaretleyin.';
$string['setupfactor'] = 'E-posta kurulumu';
$string['summarycondition'] = 'geçerli e-posta kurulumuna sahip';
$string['unauthemail'] = 'Yetkisiz e-posta';
$string['unauthloginattempt'] = 'ID {$a->userid} olan kullanıcı, aşağıdaki e-posta doğrulamasını kullanarak yetkisiz bir giriş denemesi yaptı
IP {$a->ip} ile tarayıcı aracısı {$a->useragent}.';
$string['verificationcode'] = 'Onay için doğrulama kodunu girin';
$string['verificationcode_help'] = 'E-postanıza bir doğrulama kodu gönderildi.';
