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
 * Strings for component 'factor_grace', language 'tr', version '5.0'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Belirli bir süre için başka bir faktör olmadan oturum açmaya izin verir.';
$string['pluginname'] = 'Ödemesiz dönem';
$string['preferences'] = 'Kullanıcı seçenekleri';
$string['privacy:metadata'] = 'Grace period factor eklentisi herhangi bir kişisel veri depolamaz';
$string['redirectsetup'] = 'Devam etmeden önce Çok faktörlü kimlik doğrulama kurulumunu tamamlamanız gerekir.';
$string['revokeexpiredfactors'] = 'Süresi dolan ödemesiz dönem faktörlerini iptal edin';
$string['settings:customwarning'] = 'Uyarı banner içeriği';
$string['settings:customwarning_help'] = 'Süresiz uyarı bildirimini özel HTML içerikleriyle değiştirmek için buraya içerik ekleyin. Metne {timeremaining} eklendiğinde, kullanıcı için geçerli süre ile değiştirilir ve {setuplink} kullanıcı için kurulum sayfasının URL\'si ile değiştirilir.';
$string['settings:description'] = 'Kullanıcıların belirli bir süre boyunca CFA olmadan oturum açmasına izin verin ve kimlik doğrulama faktörlerini ayarlamaları için zaman tanıyın. Bu süre dolduktan sonra, kullanıcılar oturum açmak için CFA kullanmalıdır.';
$string['settings:forcesetup'] = 'Faktör kurulumuna zorla';
$string['settings:forcesetup_help'] = 'Kullanıcıyı, ödemesiz dönem sona erdiğinde çok faktörlü kimlik doğrulamayı ayarlamak için tercihler sayfasına zorlar. İşaretlenmezse, kullanıcılar ödemesiz süre sona erdiğinde kimlik doğrulaması yapamaz.';
$string['settings:graceperiod'] = 'Ödemesiz dönem';
$string['settings:graceperiod_help'] = 'Kullanıcıların yapılandırılmış ve etkinleştirilmiş faktörler olmadan siteye erişebilecekleri süre.';
$string['settings:ignorelist'] = 'Göz ardı edilen faktörler';
$string['settings:ignorelist_help'] = 'Yetkisiz kullanım süresi, kullanıcıların çok faktörlü kimlik doğrulaması ile kimlik doğrulaması yapmak için kullanabilecekleri başka faktörler varsa puan vermez. Buradaki herhangi bir faktör, puan verilip verilmeyeceğine karar verirken Ödemesiz süre tarafından sayılmayacaktır. Bu, e-posta gibi başka bir faktörde yapılandırma veya sistem sorunları olması durumunda yetkisiz kullanım süresinin kimlik doğrulamasına izin vermesine izin verebilir.';
$string['settings:shortdescription'] = 'Kullanıcıların belirli bir süre boyunca CFA olmadan oturum açmalarına izin verin ve kimlik doğrulama faktörlerini ayarlamaları için onlara zaman tanıyın.';
$string['setupfactors'] = 'Şu anda ödemesiz dönemdesiniz ve ödemesiz dönem sona erdiğinde oturum açmak için yeterli faktör ayarlamamış olabilirsiniz. Kimlik doğrulama durumunuzu kontrol etmek ve daha fazla kimlik doğrulama faktörü ayarlamak için {$a->url} adresine gidin. Ek süreniz {$a->zaman} içinde sona eriyor.';
$string['summarycondition'] = 'ödemesiz dönem içinde';
