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
 * Strings for component 'auth_googleoauth2', language 'tr', version '5.0'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid'] = 'Uygulamanızın Anahtar / Gizililiği, <a href="https://www.dropbox.com/developers/apps" target="_blank"> Dropbox uygulama konsolunda </a> oluşturulur.
Bir uygulama oluştururken aşağıdaki ayarları girin (Dropbox yalnızca https url\'ini desteklediğine dikkat edin, böylece Moodle siteniz https\'yi desteklemelidir):
<br/>App website: {$a->siteurl}
<br/>Redirect URIs: {$a->callbackurl}';
$string['auth_dropboxclientid_key'] = 'Dropbox uygulama anahtarı';
$string['auth_dropboxclientsecret'] = '';
$string['auth_dropboxclientsecret_key'] = 'Dropbox Uygulama gizliliği';
$string['auth_facebookclientid'] = 'Yeni oluşturulan API anahtarı için çalışmıyor. Örneğin, Facebook API 2.8\'den bozulduğunu biliyoruz.


ve Facebook API 2.2\'ye kadar çalışıyor. Facebook API 2.3, 2.4, 2.5, 2.6 ve 2.7\'yi test etmedik. Özetlemek gerekirse, zaten eski bir Facebook API anahtarınız
yoksa, Facebook\'un bu girişte çalışmayacağının garantisidir. Lütfen eklenti alternatiflerine bakın veya bir sonraki büyük eklenti güncellemesini bekleyin (henüz planlanmadı).</strong>';
$string['auth_facebookclientid_key'] = 'Facebook Uygulama Kimliği';
$string['auth_facebookclientsecret'] = '';
$string['auth_facebookclientsecret_key'] = 'Facebook Uygulama gizliliği';
$string['auth_githubclientid'] = 'İstemci kimliğiniz / Gizliliğiniz, <a href="https://github.com/settings/applications/new" target="_blank"> Github kayıt başvuru sayfasında </a> oluşturulabilir:
<br/>Ana Sayfa URL: {$a->siteurl}
<br/>Yetkilendirme geri arama URL\'si: {$a->callbackurl}';
$string['auth_githubclientid_key'] = 'Github istemci kimliği';
$string['auth_githubclientsecret'] = '';
$string['auth_githubclientsecret_key'] = 'Github istemci gizliliği';
$string['auth_googleclientid'] = 'Müşteri kimliğiniz/Sırrınız <a href="https://code.google.com/apis/console" target="_blank">Google konsol API\'sinde</a> oluşturulabilir:
<br/>
Kontrol Paneli > Google Kimlik ve Erişim Yönetimi (IAM) API\'si > Etkinleştir > Kimlik Bilgileri > Yeni Oauth İstemci Kimliği Oluştur > Onay Ekranında Ürün adını Yapılandır > Kaydet > \'Web uygulaması\'nı seçin Kimlik Bilgileri Türü
<br/>
Yetkili Javascript kökenleri: {$a->jsorigins}
<br/>
Yetkili Yönlendirme URI\'sı: {$a->redirecturls}
<br/>';
$string['auth_googleclientid_key'] = 'Google İstemci kimliği';
$string['auth_googleclientsecret'] = 'Google İstemci gizliliği';
$string['auth_googleipinfodbkey'] = 'IPinfoDB, ziyaretçinin ülkesini ve şehrini öğrenmenize izin veren bir hizmettir.
Bu ayar isteğe bağlıdır. Ücretsiz bir anahtar almak için <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> \'ne abone olabilirsiniz. <br/>
Web sitesi: {$a->website}';
$string['auth_googleipinfodbkey_key'] = 'IPinfoDB Anahtarı';
$string['auth_googleoauth2description'] = 'Bir kullanıcının harici bir kimlik doğrulama sağlayıcısı ile siteye bağlanmasına izin verin: Google/Facebook/Windows Live.
Kullanıcı bir kimlik doğrulama sağlayıcısıyla ilk kez bağlantı kurduğunda yeni bir hesap oluşturulur.
Kimlik doğrulaması ayarlanmamış <b>gerekirse</b> hesap oluşturmayı engelle (authpreventaccountcreation yönetici ayarı).';
$string['auth_googlesettings'] = 'Sağlayıcı Ayarları';
$string['auth_linkedinclientid'] = 'API / Gizli anahtarlarınız <a href="https://www.linkedin.com/secure/developer" target="_blank"> Linkedin kayıt başvuru sayfasında </a> oluşturulabilir:
<br/> Web sitesi URL\'si: {$a->siteurl}
<br/> OAuth 2.0 Redirect URL\'sini kabul et: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'Linkedin API Anahtarı';
$string['auth_linkedinclientsecret'] = '';
$string['auth_linkedinclientsecret_key'] = 'Linkedin Gizlilik anahtarı';
$string['auth_microsoftclientid'] = 'İstemci Kimliğiniz / Gizliliğiniz, <a href="https://apps.dev.microsoft.com/" target="_blank"> Microsoft Uygulama Kayıt Yeri Portalında </a> oluşturulabilir:
<br /> Yönlendirme URI\'sı: {$a->callbackurl}';
$string['auth_microsoftclientid_key'] = 'Microsoft v2 Uygulama Kimliği';
$string['auth_microsoftclientsecret'] = '';
$string['auth_microsoftclientsecret_key'] = 'Microsoft v2 Uygulama gizliliği';
$string['auth_sign-in_with'] = '{$a->providername} ile oturum açın';
$string['auth_userprefix'] = 'Kullanıcı adı öneki';
$string['auth_userprefixdesc'] = 'Oluşturulan kullanıcının kullanıcı adı bu önekle başlayacaktır. Basit bir Moodle sitesinde onu değiştirmeniz gerekmez.';
$string['auth_vkontakteclientid'] = 'Uygulama kimliğiniz/Sırrınız <a href="https://vk.com/apps?act=manage" target="_blank">VK My Applications konsolunda</a> oluşturulur.
Bir uygulama oluştururken aşağıdaki ayarları girin:
<br/>Site adresi: {$a->siteurl}
<br/>Temel Etki Alanı: {$a->sitedomain}
<br/>Yetkili Yönlendirme URI\'sı: {$a-> geri arama URL\'si}{$a->callbackurl}';
$string['auth_vkontakteclientid_key'] = 'VK.com Uygulama Kimliği';
$string['auth_vkontakteclientsecret'] = '';
$string['auth_vkontakteclientsecret_key'] = 'VK.com Güvenli Anahtar';
$string['authdomains'] = 'oauth2 sağlayıcıları için izin verilen e-posta alanları';
$string['authdomainshelp'] = 'Bu seçenekle, oauth2 sağlayıcıları ile bu siteye girmesine izin verilen e-posta etki alanını kısıtlayabilirsiniz.<br /> Bu, virgülle ayrılmış öğeler içeren bir listedir (örn. example.com, mysite.net). Alt alanları da etkinleştirmek istiyorsanız, bunları alan adından önce bir nokta ile belirtin (örn.
';
$string['cantcreatenewuser'] = 'Bir kullanıcı yok ve otomatik kullanıcı oluşturulması yasaktır.';
$string['couldnotauthenticate'] = 'Kimlik doğrulama başarısız oldu - Lütfen tekrar oturum açmayı deneyin.';
$string['couldnotauthenticateuserlogin'] = 'Kimlik doğrulama yöntemi hatası: aynı e-posta adresine sahip bir hesap kullanıcısı zaten var!<br/>
Lütfen başka bir kimlik doğrulama yöntemi seçin veya site yöneticisiyle iletişime geçin .<br/>
<br/>
<a href="{$a->loginpage} ">Tekrar deneyin</a>.<br/>
<a href="{$a->forgotpass}">Şifrenizi mi unuttunuz</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'Kimlik doğrulama sağlayıcısı bize bir iletişim hatası gönderdi. Lütfen tekrar oturum açmayı deneyin.';
$string['couldnotgetuseremail'] = 'Sosyal Ağ bize bir <b>e-posta</b> sağlamaz. Moodle, doğru bir şekilde oturum açmak için geçerli bir e-posta gerektirir: lütfen sosyal ağdaki kullanıcı tercihlerinizi kontrol edin ve e-posta görünürlüğünüzü etkinleştirin.';
$string['displaybuttons'] = 'Giriş sayfasında butonlar gösterilsin mi?';
$string['displaybuttonshelp'] = 'Giriş sayfasının üst kısmında sağlayıcı logosu düğmelerini görüntüleyin.
Düğmeleri giriş sayfanızda kendiniz konumlandırmak istiyorsanız, bu seçeneği devre dışı bırakabilir ve şu kodu ekleyebilirsiniz: {$a}';
$string['donotcreatenewuser'] = 'Otomatik kullanıcı oluşturmayı yasaklayın.';
$string['donotcreatenewuserhelp'] = 'Bu seçenek etkinleştirildiğinde, "Hesap oluşturmayı engelle" etkinleştirilse bile, bu eklenti oturum açma sırasında otomatik olarak yeni bir kullanıcı oluşturmaz (normalde bu seçenek işaretlenmeden bırakılmalıdır).';
$string['dropbox'] = 'Dropbox';
$string['emailaddressmustbeverified'] = 'E-posta adresiniz, seçtiğiniz kimlik doğrulama yöntemiyle doğrulanmadı.
Google veya Facebook\'un hizmetlerine aboneliğiniz sırasında size göndermesi gereken "e-posta adresini doğrula" bağlantısını tıklamayı unutmuş olabilirsiniz .bağlantı.';
$string['emailnotallowed'] = 'E-posta adresinizin bu siteye giriş yapmasına izin verilmiyor.
';
$string['facebook'] = 'Facebook';
$string['faileduserdetails'] = 'Site, seçilen sağlayıcıya bağlanmayı başardı ancak kullanıcı ayrıntılarınızı alamadı.';
$string['github'] = 'GitHub';
$string['google'] = 'Google';
$string['horizontal'] = 'Yatay yerleşim';
$string['linkedin'] = 'LinkedIn';
$string['microsoft'] = 'Microsoft Live';
$string['microsoft_failure'] = 'Microsoft sunucularından bir yetkilendirme kodu almadı.';
$string['moreproviderlink'] = 'Başka bir hizmetle oturum açın.';
$string['noaccountyet'] = 'Siteyi henüz kullanma izniniz yok. Lütfen yöneticinizle iletişime geçin ve onlardan hesabınızı etkinleştirmesini isteyin.';
$string['othermoodle'] = 'Diğer Moodle auth';
$string['othersettings'] = 'Diğer Ayarlar';
$string['pluginname'] = 'Oauth2';
$string['providerlinksstyle'] = 'Oauth2';
$string['providerlinksstylehelp'] = 'Bu seçenekle, oturum açma bağlantılarının sağlayıcı listesi için dikey veya yatay görselleştirme stili arasında seçim yapabilirsiniz. Belirli bir tema, oturum açma formunu katı bir genişlik boyutuna yerleştirerek bu ayarı yine de sınırlayabilir.';
$string['providerlinkstext'] = 'Diğer Oturum açma sağlayıcıları:';
$string['saveaccesstoken'] = 'Kullanıcı erişim Simgesi kaydedilsin mi?';
$string['saveaccesstokenhelp'] = 'Kullanıcı erişim belirtecini eklenti dahili tablosuna kaydetmek için ayarlayın. Lütfen etkinleştirilmiş oauth2 sağlayıcıları için API politikasının belirteçleri yerel olarak kaydetmeye izin verip vermediğini kontrol edin (Çoğu izin vermiyor...).';
$string['signinwithanaccount'] = '{$a} ile giriş yapın';
$string['stattitle'] = 'Bu eklenti için giriş istatistikleri';
$string['stattitlecaption'] = 'Son {$a->periodindays} güne ait istatistikler.';
$string['supportmaintenance'] = 'Bu eklentinin bakımını desteklemek için <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2">Moodle.org eklenti sayfasına</a> giriş yapın ve \'Ekle\'yi tıklayın. Favorilerim\'. Teşekkürler!';
$string['unknownfirstname'] = 'Bilinmeyen İsim';
$string['unknownlastname'] = 'Bilinmeyen soyad';
$string['vertical'] = 'Dikey yerleşim';
$string['vkontakte'] = 'VK.com';
