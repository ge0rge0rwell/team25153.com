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
 * Strings for component 'auth_oidc', language 'tr', version '5.0'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_method_certificate'] = 'Sertifika';
$string['cfg_customicon_desc'] = 'Kendi simgenizi kullanmak isterseniz buraya yükleyin.  Bu, yukarıda seçilen tüm simgeleri geçersiz kılar.  <br /><br /><b>Özel simgelerin kullanımına ilişkin notlar:</b><ul><li>Bu resim, giriş sayfasında <b>yeniden boyutlandırılmayacak</b>, bu nedenle bir simge yüklemenizi öneririz. resim 35x35 pikselden büyük değil.</li><li>Özel bir simge yüklediyseniz ve stok simgelerinden birine geri dönmek istiyorsanız, yukarıdaki kutuda bulunan özel simgeye tıklayın, ardından "Sil"e ve "Tamam"a, ardından bu formun altındaki "Değişiklikleri Kaydet"e tıklayın.  Seçilen stok simgesi artık Moodle giriş sayfasında görünecektir.</li></ul>';
$string['cfg_customicon_key'] = 'Özel Simge';
$string['cfg_iconalt_go'] = 'yeşil daire';
$string['cfg_iconalt_stop'] = 'Kırmızı daire';
$string['cfg_opname_key'] = 'Sağlayıcı Görünen Adı';
$string['clientauthmethod_help'] = '<ul>
 <li>IdP, tüm türlerde "<b>Gizli</b>" kimlik doğrulama yöntemini kullanabilir.</li>
 <li><b>Microsoft kimlik platformu (v2.0)</b> türündeki IdP ayrıca <b>Sertifika</b> kimlik doğrulama yöntemini kullanabilir.</li>
 </ul>
 Not <b>Sertifika</b> kimlik doğrulama yöntemi, <b>Kaynak Sahibi Parola Kimlik Bilgileri Verme</b> oturum açma akışında desteklenmez.';
$string['clientcert'] = 'İstemci sertifikası ortak anahtarı';
$string['clientcert_help'] = '<b>sertifika</b> kimlik doğrulama yöntemini kullanırken, bu, IdP ile kimlik doğrulaması yapmak için kullanılan genel anahtar veya sertifikadır.';
$string['clientprivatekey'] = 'İstemci sertifikası özel anahtarı';
$string['clientprivatekey_help'] = '<b>sertifika</b> kimlik doğrulama yöntemini kullanırken, bu, IdP ile kimlik doğrulaması yapmak için kullanılan sertifikanın özel anahtarıdır.';
$string['error_empty_client_cert'] = '"Sertifika" kimlik doğrulama yöntemi kullanılırken istemci sertifikası ortak anahtarı boş olamaz';
$string['error_empty_client_private_key'] = 'İstemci sertifikası özel anahtarı, "sertifika" kimlik doğrulama yöntemi kullanılırken boş olamaz';
$string['heading_additional_options'] = 'Ek seçenekler';
$string['idptype_help'] = 'Şu anda üç tür IdP desteklenmektedir:
 <ul>
 <li><b>Azure AD (v1.0)</b>: oauth2 v1.0 uç noktalarına sahip Azure AD, ör. https://login.microsoftonline.com/common/oauth2/authorize.</li>
 <li><b>Microsoft kimlik platformu (v2.0)</b>: oath2 v2.0 uç noktalarına sahip Azure AD, ör. https://login.microsoftonline.com/common/oauth2/v2.0/authorize.< /li>
 <li><b>Diğer</b>: Azure AD olmayan herhangi bir IdP.</li>
 </ul>
 <b>Azure AD (v1.0)</b> ve <b>Microsoft kimlik platformu (v2.0)</b> seçenekleri arasındaki farklar <a href="https://docs.microsoft" adresinde bulunabilir. .com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison">https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/ azure-ad-endpoint-karşılaştırması</a>.<br/>
 Özellikle, yapılandırılmış uygulama, <b>Microsoft kimlik platformu (v2.0)</b> IdP kullanırken kimlik doğrulama için <b>gizli</b> yanında <b>sertifika</b> kullanabilir.<br/>
 Yetkilendirme ve belirteç uç noktalarının, yapılandırılan IdP türüne göre yapılandırılması gerekir.';
$string['settings_fieldmap_field_companyName'] = 'Şirket Adı';
$string['settings_fieldmap_field_displayName'] = 'Ekran ismi';
$string['settings_fieldmap_field_givenName'] = 'İsim';
$string['settings_fieldmap_field_manager'] = 'Yönetici ismi';
$string['settings_fieldmap_field_manager_email'] = 'Yönetici e-postası';
$string['settings_fieldmap_field_preferredName'] = 'Tercih edilen isim';
$string['settings_fieldmap_field_streetAddress'] = 'Sokak Adresi';
$string['settings_fieldmap_field_teams'] = 'Takımlar';
$string['ucp_status_disabled'] = 'Devre dışı';
