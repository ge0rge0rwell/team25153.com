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
 * Strings for component 'plagiarism_plagscan', language 'tr', version '5.0'.
 *
 * @package     plagiarism_plagscan
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allfileschecked'] = 'PlagScan sunucusunda tüm belgelerin durumunu kontrol et';
$string['allowgroups'] = 'Kategorilere İzin Ver';
$string['allowgroups_help'] = 'PlagScan\'ı kullanmanızı sağlayan kategori adını yazın (Örn: category1, category2, ...). Tüm kategorilere izin vermek için alanı boş bırakın';
$string['always'] = 'Daima';
$string['api_language'] = 'Rapor dili';
$string['api_language_help'] = 'Tüm PlagScan raporları bu dilde indirilecek.';
$string['assignments'] = 'Ödevler';
$string['autodel'] = 'Belgeyi otomatik kaydet';
$string['autodescription'] = 'Son başvuru tarihi geldiğinde belgeleri otomatik olarak yükle';
$string['autodescriptionsubmitted'] = 'Dosyalar otomatik olarak {$a} üzerine Plagscan\'a yüklendi - tek tek belgeleri tekrar göndermek için \'manuel\' moduna geçin';
$string['autostart'] = 'Otomatik Başvuru İntihal Kontrolleri';
$string['badcredentials'] = 'PlagScan hesap ayrıntılarını tanımadı - lütfen sunucu URL\'si, kullanıcı adı ({$a->user}), API anahtarı ve sürüm numarası ({$a->version}) doğru olup olmadığını kontrol edin';
$string['checkstatus'] = 'Durumu kontrol et';
$string['compareinternet'] = 'Veri politikası';
$string['connectionfailed'] = 'PlagScan sunucusuna bağlanılamadı';
$string['cron_help'] = 'Eğer cron işini sıfırlarsanız, çoğaltılan dosyalar PlagScan\'a gönderilebilir';
$string['cron_normal'] = 'Cron iş yapılandırması kabul edildi';
$string['cron_reset'] = 'Cron işi sıfırlandı';
$string['cron_running1'] = 'Cron işi şu an sürüyor';
$string['cron_running2'] = 'Sıfırlamak için tıkla';
$string['data_policy'] = 'Veri politikası';
$string['datapolicyhelp'] = 'Analiz için belgelerimi paylaş (karşılaştır)';
$string['datapolicyhelp_help'] = 'Analiz için belgelerimi paylaş (karşılaştır)';
$string['docxemail'] = '.docx raporu üretin ve e-postayla gönderin.';
$string['docxgenerate'] = 'Yalnızca .docx raporu üretin.';
$string['docxnone'] = '.docx raporu üretmeyin';
$string['donotgenerate'] = 'Üretmeyin';
$string['downloadreport'] = '.docx raporunu indirin.';
$string['email_policy'] = 'E-posta politikası';
$string['email_policy_always'] = 'Tüm raporları e-postayla gönder';
$string['email_policy_ifred'] = 'Yalnızca kırmızı bir seviye belirtilmişse e-postayı gönderin';
$string['email_policy_never'] = 'Raporlara e-posta gönderme';
$string['email_policy_notification_account'] = 'Yeni kimlik bilgileri için bildirim';
$string['email_policy_notification_account_help'] = '<b> onay kutusunu etkinleştirerek </b>, tüm yeni oluşturulan <b> hesap kimlik bilgileri </b> hemen size gönderilir.';
$string['english'] = 'İngilizce';
$string['filechecked'] = 'Plagscan sunucusunda belge durumu kontrol edildi';
$string['filesassociated'] = 'Belge hesabınıza yüklenecek \'{$a}\\';
$string['filesubmitted'] = '\'{$a}\' belgesi Plagscan\'a gönderildi';
$string['filetypeunsupported'] = '\'{$a}\' belge türü PlagScan sunucusu tarafından desteklenen bir dosya türü değil';
$string['french'] = 'Fransızca';
$string['generaldatabase'] = 'Genel veritabanı ile karşılaştır';
$string['generateemail'] = 'Üretin ve e-postayla gönderin';
$string['generateonly'] = 'Sadece üret';
$string['german'] = 'Almanca';
$string['handledocx'] = 'Docx seçeneği';
$string['if_plagiarism_level'] = 'Sadece kırmızı PlagLevel';
$string['individualaccounts'] = 'Bireysel öğretmen hesapları';
$string['invalidupload'] = 'Plagscan sunucusu {$a->filename} dosyasını kabul etmedi. Yanıt: {$a->content}';
$string['max_file_size'] = 'Maksimum dosya boyutu';
$string['maxfilesize'] = 'Maksimum dosya boyutu';
$string['maxfilesize_help'] = 'Dosya boyutu çok büyük ve yüklenemiyor. Önerilen değer 1000000\'dür.';
$string['months'] = 'Altı ay sonra';
$string['myinstitution'] = 'Kurum veritabanı ile karşılaştır';
$string['never'] = 'Asla';
$string['neverdelete'] = 'Asla Silme';
$string['newexplain'] = 'Bu eklenti hakkında daha fazla bilgi için bkz:';
$string['nodeadlinewarning'] = 'Uyarı: Plagscan\'a otomatik gönderim, bu ödev için son tarih belirtilmeksizin seçildi';
$string['nomultipleaccounts'] = 'PlagScan için bireysel öğretmen hesaplarının kullanılması bu sunucuda mümkün değildir';
$string['nondisclosure_notice_desc'] = 'Tüm açıklama dışı belgeler "{$a}" adresinde sunulacaktır. <br /> <br />';
$string['noone'] = 'Yalnızca web kaynaklarıyla karşılaştırın';
$string['noonedocs'] = 'Web ile belgelerimi karşılaştır';
$string['notprocessed'] = 'Plagscan bu dosyayı henüz analiz etmedi.';
$string['notsubmitted'] = 'Plagscan\'a gönderilmedi';
$string['online_text_yes'] = 'Evet';
$string['onlyassignmentwarning'] = 'Uyarı: Plagscan\'a otomatik gönderme yalnızca atama etkinliklerini kullanırken işlev görür';
$string['optin'] = 'İntihal seçildi';
$string['optin_explanation'] = 'İntihal tespitini tercih etmeyi seçtiniz. Bundan sonra, gönderdiğiniz tüm ödevler PlagScan sunucusuna yüklenecek ve diğer dokümanlarla karşılaştırılacaktır.';
$string['optout'] = 'İntihal devre dışı bırakıldı';
$string['optout_explanation'] = 'İntihal tespitini devre dışı bırakmayı seçtiniz. Gönderilen ödevler PlagScan sunucusuna gönderilen diğer dokümanlarla karşılaştırılamayacak.';
$string['plagscan'] = 'Plagscan';
$string['plagscan:control'] = 'PlagScan Gönderilerini Gönder/Yeniden Gönder';
$string['plagscan:enable'] = 'Bir etkinlik içinde PlagScan\'ı etkinleştir/devre dışı bırak';
$string['plagscan:viewfullreport'] = 'PlagScan Raporlarını Görüntüle/İndir';
$string['plagscan_API_key'] = 'Clave API\'si';
$string['plagscan_API_key_help'] = 'API anahtarınızı <a href="https://www.plagscan.com/apisetup" target="_blank"> https://www.plagscan.com/apisetup </a> adresinde görebilirsiniz.';
$string['plagscan_API_method'] = 'Yöntem';
$string['plagscan_API_version'] = 'API sürümü';
$string['plagscan_API_version_help'] = 'API en son sürüm<b>2.1</b>';
$string['plagscan_call_back_script'] = 'Geri arama betiği URL\'si';
$string['plagscan_multipleaccounts'] = 'Yüklenen dosyaları ilişkilendirin';
$string['plagscan_nondisclosure_notice_email'] = 'Gizli belgeler';
$string['plagscan_nondisclosure_notice_email_help'] = 'Bloke etme bildirimine sahip tüm belgeler ayrı bir PlagScan hesabına gönderilecektir. Hesapta bulunan tüm belgeler, diğer kuruluş kullanıcılarıyla <b> paylaşılamaz </b>. Girilen <b> e-postası başka PlagScan hesabının parçası olamaz </b>.';
$string['plagscan_studentpermission'] = 'Öğrenciler Plagscan\'a yükleme iznini reddedebilir';
$string['plagscanerror'] = 'PlagScan sunucusu Hatası: {$a}';
$string['plagscanexplain'] = 'PlagScan bir intihal denetleyicisi. <br /> Yazılım, kendi kurumunuzdaki ve harici web kaynakları içindeki belgeleri karşılaştırır. <br/> Bu eklentiden yararlanmak için bir <a href="https://www.plagscan.com" target="_blank"> kuruluş hesabı </a> oluşturmanız gerekecek. <br /> <br /> <a href="https://www.plagscan.com/system-integration-moodle" target="_blank"> www.plagscan.com/system-integration adresinde bir kılavuz bulabilirsiniz. -moodle </a>. <br /> Ücretsiz bir deneme için <a href="mailto:pro@plagscan.com"> pro@plagscan.com </a> isteyin ve <a href = "https: // twitter ile ilgili en son haberleri okuyun. .com/plagscan "target =" _ blank "> Twitter </a>. <br /> <br /> Genel bilgiler <a href="https://www.plagscan.com" target="_blank"> www.PlagScan.com </a> <hr /> adresinde bulunabilir.';
$string['plagscanmethod'] = 'Gönder';
$string['plagscanserver'] = 'PlagScan sunucusu';
$string['plagscanserver_help'] = 'Standart yapılandırma, Moodle proxy sunucusu kullanıyorsa "<b> ssl://api.plagscan.com/ </b>" veya "<b> https://api.plagscan.com/ </b>" şeklindedir';
$string['plagscanversion'] = '2.3';
$string['pluginname'] = 'PlagScan';
$string['psreport'] = 'PS Raporu';
$string['red'] = 'Kırmızı PlagLevel oradan başlar:';
$string['report'] = 'Rapor';
$string['resubmit'] = 'Plagscan\'a tekrar gönder';
$string['runalways'] = 'Derhal başla';
$string['runautomatic'] = 'İlk son tarihten hemen sonra başlayın';
$string['runduedate'] = 'Tüm son tarihlerden hemen sonra başlayın';
$string['runmanual'] = 'El ile başlat';
$string['save'] = 'Kaydet';
$string['savedapiconfigerror'] = 'PlagScan ayarlarınızı güncelleme hatası oluştu';
$string['savedconfigsuccess'] = 'Plagscan ayarları başarıyla kaydedildi';
$string['serverconnectionproblem'] = 'PlagScan sunucusuna bağlanma sorunu';
$string['serverrejected'] = 'PlagScan sunucusu bu dosyayı reddetti - dosya bozuk veya korunuyor.';
$string['settings_cancelled'] = 'Karşı İntihal ayarları iptal edildi';
$string['settings_saved'] = 'Karşı intihal Ayarları Başarıyla Kaydedildi';
$string['settingsfor'] = 'Hesap ayarlarını güncelle \'{$a}\\';
$string['settingsreset'] = 'formüller';
$string['show_to_students'] = 'Sonuçları öğrencilerle paylaş';
$string['show_to_students_actclosed'] = 'Son teslim tarihinden sonra';
$string['show_to_students_always'] = 'Daima';
$string['show_to_students_help'] = 'Tüm katılımcılar PlagScan analiz sonuçlarını görebilirler.';
$string['show_to_students_links'] = 'PlagLevel ve Raporları';
$string['show_to_students_never'] = 'Asla';
$string['show_to_students_opt2'] = 'Bu sonuçları paylaş';
$string['show_to_students_opt2_help'] = 'Bu, öğrencinin sadece PlagLevel\'i veya tam raporları görmesini sağlar';
$string['show_to_students_plvl'] = 'PlagLevel';
$string['singleaccount'] = 'Ana PlagScan hesabı';
$string['spanish'] = 'İpanyolca';
$string['ssty'] = 'Duyarlılık';
$string['sstyhigh'] = 'Yüksek';
$string['sstylow'] = 'Düşük';
$string['sstymedium'] = 'Orta';
$string['studentdisclosure'] = 'Öğrenci Bilgilendirme';
$string['studentdisclosure_help'] = 'Bu metin, dosya yükleme sayfasındaki tüm öğrencilere gösterilir.';
$string['studentdisclosuredefault'] = 'Yüklenen tüm dosyalar bir intihal tespit servisine gönderilecek';
$string['studentdisclosureoptedout'] = 'İntihal tespitinden çıkmışsın';
$string['studentdisclosureoptin'] = 'İntihal algılamaya katılmak için burayı tıklayın';
$string['studentdisclosureoptout'] = 'İntihal tespitinden çıkmak için burayı tıklayın';
$string['submit'] = 'Plagscan\'a gönderin';
$string['submituseroptedout'] = 'Dosya \'{$a}\' gönderilmedi - kullanıcı intihal algılamayı reddetti';
$string['testconnection'] = 'Test bağlantısı';
$string['testconnection_fail'] = 'Bağlantı başarısız oldu!';
$string['testconnection_success'] = 'Bağlantı başarılı oldu!';
$string['unsupportedfiletype'] = 'Bu dosya türü PlagScan tarafından desteklenmiyor';
$string['updateyoursettings'] = 'PlagScan ayarlarınıza';
$string['useplagscan'] = 'Plagscanı etkinleştir';
$string['useroptedout'] = 'İntihal algılamayı kabul edilmedi';
$string['viewmatches'] = 'Eşleşmeleri görüntüle';
$string['viewreport'] = 'Raporu görüntüle';
$string['wasoptedout'] = 'Kullanıcı, intihal algılamayı reddetti';
$string['webonly'] = 'İnternette ara';
$string['week'] = 'Bir hafta sonra';
$string['weeks'] = 'Üç ay sonra';
$string['windowsize'] = 'Pencere boyutu';
$string['windowsize_help'] = 'Pencere boyutu, teknoloji araştırmasının ne kadar ayrıntılı olacağını gösterir. Önerilen değer 60\'dır.';
$string['wipe_plagscan_user_cache_link'] = 'Wipe PlagScan User Cache';
$string['yellow'] = 'PlagLevel sarıdan başlar:';
