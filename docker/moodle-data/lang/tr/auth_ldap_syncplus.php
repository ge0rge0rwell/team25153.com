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
 * Strings for component 'auth_ldap_syncplus', language 'tr', version '5.0'.
 *
 * @package     auth_ldap_syncplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_syncplusdescription'] = 'Bu yöntem, harici bir LDAP sunucusuna kimlik doğrulama sağlar.
                                   Verilen kullanıcı adı ve şifre geçerli ise, Moodle yeni bir kullanıcı oluşturur
                                   Veritabanına giriş. Bu modül kullanıcı özniteliklerini LDAP\'den okuyabilir ve önceden doldurabilir
                                   Moodle\'da alanlar istedim. Aşağıdaki oturumlar için yalnızca kullanıcı adı ve
                                   Şifre kontrol edilir.';
$string['auth_remove_deletewithgraceperiod'] = 'İçeri askıya alma ve ek süre sonunda dahili silebilirsiniz';
$string['nouserentriestosuspend'] = 'Askıya alınacak kullanıcı girdisi yok';
$string['pluginname'] = 'LDAP sunucusu (Sync Plus)';
$string['privacy:metadata'] = 'LDAP sunucusu (Sync Plus) kimlik doğrulama eklentisi herhangi bir kişisel veri saklamaz.';
$string['removeuser_graceperiod'] = 'Bağımlılık süresini tamamen silme';
$string['removeuser_graceperiod_desc'] = 'Bir kullanıcıyı dahili olarak askıya alındıktan sonra, senkronizasyon komut dosyası, bu kullanıcı sayısının tamamen silinene kadar bekleyecektir. Kullanıcı, bu yetkisiz kullanım süresi içinde LDAP\'de yeniden görünürse, kullanıcı yeniden etkinleştirilir. Not: Bu ayar yalnızca, "Kaldırılan dahili kullanıcı", "Dahili askıya alma ve ek süre sonunda iç silebilir"';
$string['sync_script_createuser_enabled'] = 'Etkinleştirildiyse (varsayılan), senkronizasyon komut dosyası, daha önce hiç Moodle\'a giriş yapmadıysa, tüm LDAP kullanıcıları için Moodle hesapları oluşturacaktır. Devre dışı bırakılırsa, senkronizasyon komut dosyası tüm LDAP kullanıcıları için Moodle hesapları oluşturmaz.';
$string['sync_script_createuser_enabled_key'] = 'Yeni kullanıcılar ekle';
$string['syncroles'] = 'LDAP rolleri eşitleme işi (Sync Plus)';
$string['synctask'] = 'LDAP kullanıcıları işi senkronize eder (Sync Plus)';
$string['userentriestosuspend'] = 'Askıya alınacak kullanıcı girdileri: {$a}';
$string['waitinginremovalqueue'] = '{$a->days} gün izin verilen süre için kaldırma sırasında bekleniyor: {$a->name} Kimliği {$a->id}';
