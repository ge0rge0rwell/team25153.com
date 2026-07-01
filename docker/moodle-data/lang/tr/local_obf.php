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
 * Strings for component 'local_obf', language 'tr', version '5.0'.
 *
 * @package     local_obf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompletedby'] = 'Tamamlayan:';
$string['addcourses'] = 'Seçilen kursları ekle';
$string['addcriteria'] = 'Yeni ödüllendirme kuralı oluştur';
$string['addemaildescription'] = 'E-posta adresinizi yazın. Adres doğrulanmamışsa, bu adrese bir doğrulama kodu gönderilecektir.';
$string['addemailheader'] = 'E-posta adresinizi ekleyin ve doğrulayın';
$string['addnew'] = 'Yeni ekle';
$string['addnewclient'] = 'Yeni istemci ekle';
$string['addnewcriterion'] = 'Kurs Ekle';
$string['addnewoauth2'] = 'Yeni OAuth2 API bağlantısı ekleme';
$string['apidataretrieve'] = 'Rozet verme etkinlikleri';
$string['apidataretrieveall'] = 'OBF ile verilen tüm rozetleri göster';
$string['apidataretrievedesc'] = '"Tümü" seçeneğini seçerseniz, doğrudan Open Badge Factory\'den verilen rozetler tüm (rozet) sonuçlara dahil edilecektir.';
$string['apidataretrievelocal'] = 'Yalnızca bu sistemden verilen rozetleri göster';
$string['apierror'] = 'OBF hizmeti bulunamadı. Lütfen ayarlardan API URL\'sini kontrol edin.';
$string['apierror0'] = 'Open Badge Factory hizmet isteği başarısız oldu. Site yöneticisinin eklentinin ayarlarını yapılandırması gerekir.';
$string['apierror413'] = '413 İstek varlığı çok büyük';
$string['apierror429'] = '429 Çok fazla talep var';
$string['apierror495'] = '495 Sertifika hatası';
$string['apierror496'] = 'Open Badge Factory\'nin Moodle ile kullanılabilmesi için sertifikanın oluşturulması gerekmektedir. İstek belirtecini almak için Open Badge Factory\'de oturum açın ve aşağıdaki alana yapıştırın.';
$string['apierror500'] = '500 Dahili sunucu hatası';
$string['apierror502'] = '502 Kötü ağ geçidi';
$string['apierror503'] = 'OBF hizmeti geçici olarak kullanılamıyor. Lütfen daha sonra tekrar deneyin.';
$string['authenticate'] = 'Kimlik doğrulama';
$string['authenticationsuccess'] = 'Kimlik doğrulama başarılı';
$string['availablecategories'] = 'Kullanılabilir kategoriler';
$string['availablecategorieshelp'] = 'Bu kurumun rozet verme etkinliklerinde kullanılabilecek rozet kategorilerini seçin. Kategorilerden hiçbiri seçilmezse, her kategoriden rozetler verilebilir.';
$string['availablecategoriesselect'] = 'Kategoriler';
$string['back'] = 'Geri Dön';
$string['backpackconfig'] = 'Mozilla Rozet Paketi ayarları';
$string['backpackconnected'] = 'Bağlandı';
$string['backpackdisconnected'] = 'Bağlantı Kesildi';
$string['backpackemail'] = 'E-posta adresi';
$string['backpackemail_help'] = 'Mozilla OpenBadges Backpack hesabınızla ilişkili e-posta adresi.';
$string['backpackemailaddexternalbackpackprovider'] = '<p>{$a->backpackproviderfullname}\'den gelen \'<strong>{$a->useremail}</strong>\' e-postasıyla eşleşen bir kullanıcı bulunamadı.</p><p>Bir hesabınız olduğundan emin olun <a href="{$a->backpackprovidersiteurl}">{$a->backpackprovidersiteurl}</a> üzerinde ve \'<strong>{$a->useremail}</strong>\' profilinize eklendi.< /p>';
$string['backpackemailaddexternalobp'] = '<p>Open Badge Passport\'tan \'<strong>{$a}</strong>\' e-postasıyla eşleşen bir kullanıcı bulunamadı.</p><p>E-postanızı eklemek için <a href="https: //openbadgepassport.com">https://openbadgepassport.com</a> tarayıcınıza girin ve giriş yapın. </p><p>Giriş yaptıktan sonra <strong><i>Hesabım >  Hesap ayarları >  E-posta adresleri</i></strong> gezinme yolu.</p><p><i>E-posta adresleri</i> -sayfası açıkken, \'<strong>{$a}</\' ekleyin \'Yeni e-posta ekle\' alanına güçlü>\' yazın ve kaydedin.</p>';
$string['backpackemailnotfound'] = '{$a->provider}\'dan \'{$a->email}\' e-postasıyla bir kullanıcı bulunamadı.';
$string['backpackgroups'] = 'Rozet Grupları';
$string['backpackgroups_help'] = 'Rozet görüntüleyicinizde gösterilen rozet gruplarını seçin.';
$string['backpackprovideractions'] = 'Eylem';
$string['backpackprovideremailconfigureable'] = 'Kullanıcı e-posta adresini tanımlayabilir';
$string['backpackproviderfullname'] = 'Tam adı';
$string['backpackprovidersettings'] = '{$a} -ayarlar';
$string['backpackprovidershortname'] = 'Kısa adı';
$string['backpackproviderurl'] = 'URL';
$string['backpackproviderurlinvalid'] = 'URL düzgün tanımlanmamış, lütfen tam URL\'yi kullanın, örn. https://openbadgepassport.com/displayer/';
$string['backpackprovideruserwarning'] = 'Uyarı: {$a} kullanıcılarının sağlayıcı için kaydedilmiş e-posta ilişkilendirmeleri zaten var. Yeni hizmetler eklerken yeni sağlayıcılar oluşturun, mevcut sağlayıcıları diğer hizmetlere işaret edecek şekilde düzenlemeyin.';
$string['backpacksettings'] = 'Mozilla Rozet paketi ayarları';
$string['badgeactions'] = 'Eylemler';
$string['badgeblacklist'] = 'Rozet gizleme';
$string['badgecategories'] = 'Kategoriler';
$string['badgecriteriahtml'] = 'Kiriter';
$string['badgedescription'] = 'Açıklama';
$string['badgedetails'] = 'Rozet detayları';
$string['badgeemail'] = 'E-posta şablonu';
$string['badgeexport'] = 'Daha önce Moodle\'da oluşturulan rozetleri dışa aktarın';
$string['badgeexportdescription'] = 'Ödüllendirme geçmişi';
$string['badgehistory'] = 'Ödüllendirme geçmişi';
$string['badgeimage'] = 'Rozet';
$string['badgeissued'] = 'Rozet başarıyla verildi.';
$string['badgeissuedwhen'] = 'Bu rozet, aşağıdaki kurallardan herhangi biri karşılandığında otomatik olarak verilir:';
$string['badgelist'] = 'Rozet listesi';
$string['badgelisttitle'] = 'Tüm rozetler';
$string['badgename'] = 'İsim';
$string['badgetags'] = 'Etiket';
$string['badgewasautomaticallyissued'] = 'İncelemenin ardından rozet {$a} alıcı(lar)ına verilmiştir.';
$string['blacklistbadge'] = 'Rozeti gösterme';
$string['blacklistdescription'] = 'Profilinizde görüntülenmesini istemediğiniz rozetleri seçin. Bu Moodle ortamı tarafından verilen herhangi bir rozeti gizleyebilirsiniz.';
$string['blacklistsaved'] = 'Kara liste kaydedildi.';
$string['cachedef_obf_assertions'] = 'OBF rozeti doğrulama önbelleği';
$string['cachedef_obf_assertions_backpacks'] = 'Harici Open Badge hizmet önbelleği';
$string['cancel'] = 'İptal';
$string['categorysettings'] = 'Kategori ayarları';
$string['client'] = 'İstemci';
$string['clientname'] = 'İstemci adı';
$string['clientsaved'] = 'İstemci kaydedildi';
$string['closepopup'] = 'Kapat';
$string['configurecriteria'] = 'Ayarla';
$string['coursebadgelisttitle'] = 'Bu kursla ilgili rozetler';
$string['coursecompletedby'] = 'Tamamlayan:';
$string['coursecompletionnotenabled'] = 'Tamamlama takibi bu kursta etkinleştirilmemiştir. Bunu <a href="{$a}">kurs ayarları</a> bölümünden etkinleştirin.';
$string['courseeventhistory'] = 'Kurs verme tarihi';
$string['courseobfbadges'] = 'Rozetler';
$string['courserequired'] = 'En az bir kus seçilmelidir';
$string['coursereset'] = 'Kurs sıfırlandığında ödüllendirme kurallarını silin.';
$string['courseuserbadges'] = 'Kullanıcı rozetleri';
$string['createcsv'] = 'Rozet Geçmişi CSV\'sini İndirin';
$string['criteria_3'] = 'Profil alanlar';
$string['criteria_3_help'] = 'Rozet verilmesini tetiklemek için hangi profil alan(lar)ının doldurulması gerektiği.';
$string['criteriaaddcourse'] = 'Kurs ekle';
$string['criteriaaddendum'] = 'Kriter ekleri';
$string['criteriaaddendum_help'] = 'Verilen rozete bir kriter eki eklenecektir. Ek, rozet kriterlerinin altında gösterilecektir. Not: Markdown desteklenmektedir.';
$string['criteriaaddendumadd'] = 'Bir kriter eki ekleyin';
$string['criteriaaddendumheader'] = 'Kriter ekleri';
$string['criteriacompletedwhen'] = 'Bu kural şu durumlarda yerine getirilir...';
$string['criteriacompletedwhenall'] = 'Aşağıdaki kursların tümünün tamamlanması gerekmektedir:';
$string['criteriacompletedwhenany'] = 'Aşağıdaki kurslardan herhangi biri tamamlanmalıdır:';
$string['criteriacompletionmethodall'] = 'Bu kurslardan herhangi biri tamamlandığında';
$string['criteriacompletionmethodany'] = 'Bu kurslardan herhangi biri tamamlandığında';
$string['criteriacompletionmethodprofileall'] = 'Seçilen tüm profil alanları tamamlandı';
$string['criteriacompletionmethodprofileany'] = 'Seçilen profil alanlarından herhangi biri tamamlandı';
$string['criteriacourses'] = 'Bu kuraldaki kriterler';
$string['criteriatypeactivity'] = 'Bir dizi etkinliği tamamlama';
$string['criteriatypecourse'] = 'Kurs tamamlama';
$string['criteriatypecourseset'] = 'Kurs tamamlama';
$string['criteriatypeprofile'] = 'Profil tamamlama';
$string['criteriatypetotaracertif'] = 'Sertifika tamamlama';
$string['criteriatypetotaraprogram'] = 'Program tamalama';
$string['criteriatypeunknown'] = 'Eksik kriterler';
$string['deauthenticate'] = 'Bağlantıyı kes';
$string['disableassertioncache_help'] = 'Profil sayfalarındaki rozetler önbelleğe alınmaz.  Moodle ortamı dışından verilen rozetler, profil sayfalarında gecikmeden görünür, ancak profil sayfasının yüklenme sürelerini etkileyebilir.';
$string['edit'] = 'Düzenle';
$string['editemailmessage'] = 'E-posta mesajını düzenle';
$string['emailbadgerevokedbody'] = 'Kazanılan rozetlerinizden biri ({$a->revokedbadgename}) {$a->revokername} tarafından iptal edildi.';
$string['emailbadgerevokedsubject'] = 'Rozetiniz iptal edildi';
$string['emailbody'] = 'E-posta gövdesi';
$string['emailfooter'] = 'E-posta altbilgisi';
$string['emaillinktext'] = 'E-posta bağlantı metni';
$string['emailmessage'] = 'E-posta mesajı';
$string['emailsubject'] = 'E-posta konu';
$string['emailtemplatedescription'] = 'Burada, bu rozeti alan kullanıcıya gönderilecek e-posta için varsayılan şablonu ayarlayabilirsiniz. E-posta, rozet verilmeden önce özelleştirilebilir.';
$string['emailtemplatesaved'] = 'E-posta şablonu başarıyla kaydedildi.';
$string['emailverifytokenemailsubject'] = 'E-posta doğrulama';
$string['expiringcertificate'] = 'Open Badge Factory API anahtarının süresi <b>{$a->gün}</b> gün içinde doluyor.  Kuruluş yönetici hesabınızla <a href="{$a->obfurl}">Open Badge Factory\'de oturum açın</a> API anahtarını yenilemek için Yönetici araçları -> Organizasyon Ayrıntılarını Düzenle -> Diğer ayarlar\'a gidin, oluşturun <a href="{$a->congurl}">Açık Rozetler -> Ayarlar -> OBF istek belirteci</a>\'nde sertifika imzalama isteği belirtecini değiştirin ve API anahtarını yenileyin.';
$string['exportextrasettings'] = 'Dışa Aktarma Ayarları';
$string['exportsettings'] = 'Dışa Aktarma Ayarları';
$string['history'] = 'Ödüllendirme geçmişi';
$string['invalidtab'] = 'Sayfa bulunamadı';
$string['issuerdescription'] = 'Açıklama';
$string['issueremail'] = 'E-posta';
$string['issuername'] = 'İsimi';
$string['issuerroles_help'] = 'Bu istemci için rozet düzenleyecek rolleri yetkilendirin:';
$string['issuerurl'] = 'URL';
$string['issuethisbadge'] = 'Bu rozeti yayınlayın';
$string['localevents'] = 'Ödüllendirme geçmişi yalnızca bu sistemden verilen rozetleri gösterir';
$string['makeexporteddrafts'] = 'Dışa aktarılan rozetler varsayılan olarak taslaktır';
$string['messageprovider:revoked'] = 'Verilen rozet iptal edildi';
$string['minimumgrade'] = 'Asgari not';
$string['noparticipants'] = 'Katılımcı yok';
$string['numberofbadgesmany'] = 'rozetler';
$string['numberofbadgessingle'] = 'rozet';
$string['obf'] = 'Açık Rozetler';
$string['obf:earnbadge'] = 'Açık Rozet Kazanın';
$string['obf:revokeallevents'] = 'Olayı iptal et';
$string['obf:viewownbackpack'] = 'Kendi rozet paketini görüntüleyin';
$string['obfconnectionconfig'] = 'Eski API bağlantı ayarları';
$string['obfurl'] = 'API URL';
$string['obfuserpreferences'] = 'Açık rozet ayarları';
$string['obpbackpacksettings'] = 'Açık Rozet Pasaportu -ayarlar';
$string['personalbadgecloudservices'] = 'Gösterici rozet kaynağı';
$string['pkidirnotwritable'] = 'Sertifika dizini <i>{$a}</i> web sunucusu kullanıcısı için yazılabilir olmalıdır.';
$string['pluginname'] = 'Open Badge Factory';
$string['previewbadge'] = 'Rözeti önizle';
$string['previewcriteria'] = 'Önizleme';
$string['previewemail'] = 'Önizleme';
$string['privacy:metadata:activity_name'] = 'Etkinlik Adı';
$string['privacy:metadata:course_name'] = 'Kurs Adı';
$string['privacy:metadata:full_name'] = 'Ad Soyad';
$string['privacy:metadata:name'] = 'Adı';
$string['profilebadgelist'] = 'Rozetler';
$string['profilebadgelistbackpackprovider'] = '{$a} rozet';
$string['profilebadgelistobp'] = 'Açık Rozet Pasaport rozetleri';
$string['pubkeyextractionfailed'] = 'Sertifikadan ortak anahtar çıkarılırken bir hata oluştu.';
$string['pubkeyrequestfailed'] = 'API\'den genel anahtar talep edilirken bir hata oluştu';
$string['readmeenablecompletion'] = 'Rozet kazanma kriterleri';
$string['readmeenablecompletion_help'] = '<p>Otomatik rozet kazanma ölçütünün düzgün çalışması için tamamlama takibinin etkinleştirilmesi gerekir.  </p><p>Tamamlama izlemeyi etkinleştirmenin en kolay yolu şudur:</p><ol><li>"Ayarlar" bloğunu bulun.</li><li>Arama kutusuna "enablecompletion" yazın ve aramaya basın.</li><li>Tamamlama izlemeyi etkinleştirin: Evet.</li><li>İsteğe bağlı, ancak önerilir: Kurs varsayılan ayarlarında tamamlama izlemeyi etkinleştirin.</li></ol><strong>Kurs ayarları< /strong><p>Kursun varsayılan ayarlarında tamamlama izleme etkinleştirilmemişse veya bir kursta kurs izleme devre dışı bırakılmışsa, tamamlama izleme <i>Kurs yönetimi->Ayarları düzenle</i> -sayfası aracılığıyla etkinleştirilebilir .</p>';
$string['recipientcandidates'] = 'Aramayla eşleşen kullanıcılar';
$string['recipients'] = 'Alıcılar';
$string['requesttoken'] = 'OBF istek belirteci';
$string['resetfilter'] = 'Filitreyi sıfırla';
$string['reviewcriterionaftersave'] = 'Kaydettikten sonra kuralı inceleyin';
$string['reviewcriterionaftersave_help'] = 'Bu onay kutusu işaretlenirse, kural kaydedildikten sonra gözden geçirilecek ve eğer birisi bu kuralı daha önce karşılamışsa, bu rozet otomatik olarak verilecektir.';
$string['revoke'] = 'İptal';
$string['revokeuserbadges'] = 'Kullanıcı rozetlerini iptal et';
$string['saveconfiguration'] = 'Devam';
$string['savecriteria'] = 'Kaydet';
$string['savesettings'] = 'Kaydet';
$string['selectactivity'] = 'Etkinlik seç';
$string['selectatleastonerecipient'] = 'Rozet seç';
$string['selectbadge'] = 'Rozet seç';
$string['selectbadgestoexport'] = 'Open Badge Factory\'ye aktarmak istediğiniz rozetleri seçin';
$string['selectcompletionmethod'] = 'Tamamlama yönemini seç';
$string['selectcompletionmethod_help'] = 'Rozetin hangi yöntemle kazanılacağını seçin.';
$string['selectcourses'] = 'Kursları seç';
$string['selectcourses_help'] = 'Bu rozeti otomatik olarak almak için tamamlanması gereken kursları seçin.';
$string['selectcriteriatype'] = 'Seçi...';
$string['selectcriteriatype_help'] = 'Rozeti kazanma yöntemini seçin.';
$string['selectprogram'] = 'Programı seçin';
$string['selectrecipients'] = 'Alıcıları seçin';
$string['settings'] = 'Ayarlar';
$string['settingssaved'] = 'Ayarlar kaydedildi';
$string['showassertion'] = 'Detaylar';
$string['showbadgecriteria'] = 'Açık rozet kriterleri';
$string['showbadges'] = 'Rozetleri göster';
$string['showbadgesonmyprofile'] = 'Profil sayfasında rozetleri göster';
$string['showcategories'] = 'Bu kategorilerdeki rozetleri görüntüleyin:';
$string['showconnectionconfig'] = 'Çalıştığını biliyorum, yine de belirteci değiştireyim.';
$string['showmorerecipients'] = 'daha fazla';
$string['siteadmin'] = 'Site Yönetimi';
$string['testbackpackapiurlexception'] = '<a href="{$a->url}">{$a->url}</a> aracılığıyla API test edilirken hata oluştu! Hata kodu: {$a->errorcode}.';
$string['toearnthisbadge'] = 'Bu rozeti kazanmak için bu kursun tamamlanması gerekmektedir';
$string['tokendecryptionfailed'] = 'İstek belirtecinin şifresinin çözülmesi başarısız oldu. Sertifika imzalama isteği belirtecini tam olarak yapıştırdığınızdan emin olun.';
$string['totaraprogram'] = 'Program';
$string['totaraprogramexpiresbybadge'] = 'Rozet özelliklerinin sona ermesi';
$string['totaraprogramexpiresbycertificate'] = 'Rozet özelliklerinin sona ermesi';
$string['totaraprogramselectexpires'] = 'Ödüllendirilen rozetler için hangi ayarın kullanılacağını seçin';
$string['unknowncriterion'] = 'Tamamlanmamış kriter';
$string['upgradelegacyapi'] = 'İpucu: Pro abonelik düzeyinde OAuth2 tabanlı API kimlik doğrulamasına geçebilirsiniz. Bu bağlantıyı kaldırarak başlayın.';
$string['urlgroup'] = 'URL';
$string['urlgroup_help'] = '<p>Eğer varsayılan openbadgefactory.com sunucusunu kullanmıyorsanız. Hizmet adresini buradan ayarlayın.</p>';
$string['useremailupdater'] = 'Kullanıcı e-postası güncelleyici';
$string['userpreferences'] = 'Kullanıcı-ayarları';
$string['userpreferencessaved'] = 'Kullanıcı ayarları kaydedildi.';
$string['userscanmanagedisplayofbadges'] = 'Kullanıcılar rozetleri görüntülemeyi seçebilir';
$string['usersdisplaybadges'] = 'Kullanıcı rozetlerinin gösterimi';
$string['usersforcedtodisplaybadges'] = 'Rozetler profil sayfalarında gösterilir';
$string['usersnotallowedtodisplaybadges'] = 'Rozetler profil sayfalarında görüntülenmiyor';
$string['verification_failed'] = 'Rozet paketi doğrulaması başarısız oldu. Nedeni: {$a}';
$string['verifytoken'] = 'Jeton';
$string['verifytokenbutton'] = 'Doğrulama';
$string['verifytokendescription'] = 'Verilen adrese bir e-posta gönderildi. Doğrulama kodu için e-postanızı kontrol edin.';
$string['warningcannoteditafterreview'] = 'Bu kurallar gözden geçirilirken rozet verilirse, kural(lar)ın artık düzenlenemeyeceğini unutmayın. Rozet en az bir kişiye otomatik olarak verildikten sonra kuralların düzenlenmesi yasaktır. Bu nedenle incelemeden önce kuralların doğru ayarlandığından emin olun.';
