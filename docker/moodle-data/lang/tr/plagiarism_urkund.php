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
 * Strings for component 'plagiarism_urkund', language 'tr', version '5.0'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Desteklenen tüm dosya türlerine izin ver';
$string['allowallsupportedfiles_help'] = 'Bu, öğretmenin hangi dosya türlerinin URKUND\'a gönderileceğini kısıtlamasına izin verir. Öğrencilerin ödevine farklı dosya türleri yüklemelerini engellemez.';
$string['attempts'] = 'Yapılan denemeler';
$string['cannotupgradeunprocesseddata'] = '<h1> Mevcut işlenmemiş veriler nedeniyle eklentinin bu sürümüne yükseltilemiyor, lütfen bu eklentinin önceki bir sürümüne geri dönün ve eski etkinlikleri silin. </h1> <p> Eklentinin bu sürümü, yeni etkinlikler API\'sine dayanır. Moodle, ancak kurulumunuz eski API ile ilişkili işlenmemiş olaylar içeriyor. </p>
  URKUND eklentisinin eski bir sürümüne dönmeli, siteyi bakım moduna geçirmeli, Moodle Cron işlemini çalıştırmalı ve eski tüm olayların temizlendiğinden emin olmalısın. Ardından, URKUND eklentisinin bu sürümüne yeniden geçmeyi deneyin. </p>
  <p> Daha fazla bilgi için bkz. <a href="https://docs.moodle.org/en/Plagiarism_Prevention_URKUND_Settings#Installation_failed_due_to_unprocessed_data"> URKUND İşlem yapılmayan veriler yüzünden kurulum başarısız oldu </a> </p>';
$string['confirmresetall'] = 'Bu durumdaki tüm dosyaları sıfırlayacak: {$a}';
$string['debugfilter'] = 'Dosyaları süzgeçle';
$string['defaultsdesc'] = 'Aşağıdaki ayarlar, bir Etkinlik Modülü içinde URKUND\'u etkinleştirirken ayarlanan varsayılan değerlerdir';
$string['defaultupdated'] = 'Varsayılan değerler güncellendi';
$string['deletedwarning'] = 'Bu dosya bulunamadı - kullanıcı tarafından silinmiş olabilir';
$string['explainerrors'] = 'Bu sayfada şu anda bir hata durumunda olan dosyaları listeler. <br/> Dosyalar bu sayfada silindiğinde tekrar gönderilemeyecek ve hatalar artık öğretmenler veya öğrenciler tarafından gösterilemeyecek';
$string['file'] = 'Dosya';
$string['filedeleted'] = 'Dosya kuyruktan silindi';
$string['filereset'] = 'URKUND\'a tekrar gönderilmek üzere bir dosya sıfırlandı';
$string['fileresubmitted'] = 'Dosya yeniden gönderilmek üzere kuyruğa alındı';
$string['filesresubmitted'] = '{$a} dosyalar yeniden gönderildi';
$string['filter30'] = '30 günden daha eskileri hariç tut';
$string['filter7'] = '7 günden daha eskileri hariç tut';
$string['filter90'] = '90 günden eskileri hariç tut';
$string['getallscores'] = 'Tüm puanları al';
$string['getscore'] = 'Puanı al';
$string['getscores'] = 'Puanları al';
$string['heldevents'] = 'Düzenlenen olaylar';
$string['heldeventsdescription'] = 'Bunlar, ilk denemede tamamlanmayan ve tekrar gönderilmek üzere kuyruğa eklenen olaylardır - bunlar, daha sonraki olayların oluşmasını önler ve daha fazla araştırmaya ihtiyaç duyabilirler. Bu olaylardan bazıları URKUND ile alakalı olmayabilir.';
$string['id'] = 'Kimlik';
$string['identifier'] = 'Tanımlayıcı';
$string['idisagree'] = 'İptal';
$string['module'] = 'Modül';
$string['name'] = 'Adı';
$string['nofilter'] = 'Filtre yok';
$string['noreceiver'] = 'Alıcı adresi belirtilmedi';
$string['optout'] = 'Devre dışı bırakılan';
$string['pending'] = 'Bu dosya URKUND\'a gönderilmeyi bekliyor';
$string['pluginname'] = 'URKUND intihal eklentisi';
$string['previouslysubmitted'] = 'Daha önce şu şekilde sunuldu:';
$string['processing'] = 'Bu dosya URKUND\'a gönderildi, şimdi analizin hazır olmasını bekliyor';
$string['receivernotvalid'] = 'Bu geçerli bir alıcı adresi değil.';
$string['report'] = 'rapor';
$string['restrictcontent'] = 'Ekli dosyalar ve satır içi metin gönderin';
$string['restrictcontent_help'] = 'URKUND, yüklenen dosyaları işleyebilir, ancak forum mesajlarındaki satır içi metni ve çevrimiçi metin atama gönderme türünün metnini de işleyebilir. Hangi bileşenlerin URKUND\'a gönderileceğine siz karar verebilirsiniz.';
$string['restrictcontentfiles'] = 'Yalnızca ekteki dosyaları gönderin';
$string['restrictcontentno'] = 'Her şeyi gönder';
$string['restrictcontenttext'] = 'Sadece satır içi metin gönderin';
$string['restrictfiles'] = 'Gönderilecek dosya türleri';
$string['resubmit'] = 'Tekrar gönder';
$string['resubmitall'] = 'Tümü şu durumla yeniden gönderin: {$a}';
$string['savedconfigfailed'] = 'Yanlış bir kullanıcı adı/şifre kombinasyonu girildi, URKUND devre dışı bırakıldı, lütfen tekrar deneyin.';
$string['savedconfigsuccess'] = 'İntihal Ayarları Kaydedildi';
$string['scoreavailable'] = 'Bu dosya URKUND tarafından işlendi ve bir rapor artık mevcut.';
$string['scorenotavailableyet'] = 'Bu dosya henüz URKUND tarafından işlenmedi.';
$string['sendfiles'] = 'Kuyruğa alınan dosyaları gönder';
$string['showall'] = 'Tüm hataları göster';
$string['status'] = 'Durum';
$string['studentdisclosure'] = 'Öğrenci Bilgilendirme';
$string['studentdisclosure_help'] = 'Bu metin, dosya yükleme sayfasındaki tüm öğrencilere gösterilir.';
$string['studentdisclosuredefault'] = 'Yüklenen tüm dosyalar intihal tespit hizmeti URKUND\'a gönderilecek,
Belgenizin bu sitenin dışındaki analizler için bir kaynak olarak diğer kuruluşlar tarafından kullanılmasını önlemek isterseniz, rapor üretildikten sonra sağlanan çıkma bağlantısını kullanabilirsiniz.';
$string['studentemailcontent'] = '{$a->coursename} adresinde {$a->modulename} adresine gönderdiğiniz dosya şimdi İntihal Aracı URKUND tarafından işlendi.
{$a->modulelink}

Dokümanınızın bu sitenin dışındaki analizler için bir kaynak olarak kullanılmasını engellemek istiyorsanız, bu bağlantıyı kullanarak devre dışı bırakabilirsiniz :.
{$a->optoutlink}';
$string['studentemailcontentnoopt'] = '{$a->coursename} adresinde {$a->modulename} adresine gönderdiğiniz dosya şimdi İntihal Aracı URKUND tarafından işlendi.
{$a->modulelink}';
$string['studentemailsubject'] = 'URKUND tarafından işlenmiş dosya';
$string['submitondraft'] = 'İlk yüklendiğinde dosyayı gönder';
$string['submitonfinal'] = 'Öğrenci işaretleme gönderdiğinde dosyayı gönder';
$string['timesubmitted'] = 'Süre gönderildi';
$string['toolarge'] = 'Bu dosya URKUND\'un işleyebilmesi için çok büyük';
$string['unknownwarning'] = 'Bu dosyayı URKUND\'a göndermeye çalışırken bir hata oluştu.';
$string['unsupportedfiletype'] = 'Bu dosya türü URKUND tarafından desteklenmiyor';
$string['updateallowedfiletypes'] = 'İzin verilen dosya türlerini güncelleyin ve silinmiş etkinliklerle ilişkili urkund kayıtlarını silin.';
$string['urkund'] = 'URKUND intihal eklentisi';
$string['urkund:enable'] = 'Öğretmenin bir etkinlik içinde URKUND\'u etkinleştirmesine/devre dışı bırakmasına izin ver';
$string['urkund:resetfile'] = 'Bir hatadan sonra öğretmenin dosyayı URKUND\'a yeniden göndermesine izin ver';
$string['urkund:viewreport'] = 'Öğretmenin tam raporu URKUND\'den görmesine izin ver';
$string['urkund_api'] = 'URKUND İlişkilendirme Adresi';
$string['urkund_api_help'] = 'Bu, URKUND API\'sinin adresidir';
$string['urkund_draft_submit'] = 'Dosya ne zaman gönderilmelidir?';
$string['urkund_enableoptout'] = 'Devre dışı bağlantısını göster';
$string['urkund_enableoptoutdesc'] = 'Bunu devre dışı bırakmak, diğer öğrencilerin öğrenci belgelerinde bir eşleşme bulunması durumunda (bkz. "Opt-in" ve "opt-out"), metinlerin içeriğini göstermek veya gizlemek (varsayılan ayara bağlı olarak) ). Bu özelliği devre dışı bırakarak, öğrencilerin gönderdikleri telif haklarının yönetim sorumluluğunu üstleneceğini ve bunun ülkenizdeki kanunlara aykırı olmadığını onaylarsınız.';
$string['urkund_enableplugin'] = '{$a} için URKUND\'u etkinleştir';
$string['urkund_lang'] = 'Dil';
$string['urkund_lang_help'] = 'Ouriginal tarafından sağlanan dil kodu';
$string['urkund_password'] = 'Parola';
$string['urkund_password_help'] = 'API\'ye erişmek için Ouriginal tarafından sağlanan şifre';
$string['urkund_receiver'] = 'Alıcı adresi';
$string['urkund_receiver_help'] = 'Ouriginal tarafından öğretmen için verilen benzersiz adres budur';
$string['urkund_show_student_report'] = 'Öğrenciye benzerlik raporu gösterin';
$string['urkund_show_student_report_help'] = 'Benzerlik raporunda, intihal hangi bölümlerin hangi bölümleri ve URKUND\'un ilk önce bu içeriği gördüğü yere dökülür.';
$string['urkund_show_student_score'] = 'Öğrenciye benzerlik puanı göster';
$string['urkund_show_student_score_help'] = 'Benzerlik puanı, diğer içeriğe eşleşen sunuş yüzdesidir.';
$string['urkund_studentemail'] = 'Öğrenci e-postası gönder';
$string['urkund_studentemail_help'] = 'Bu, bir dosyanın bir raporun mevcut olduğunu bilmesini sağlamak için işlendiğinde öğrenciye bir e-posta gönderir; e-postada ayrıca devre dışı bırakma bağlantısı da bulunur.';
$string['urkund_username'] = 'Kullanıcı adı';
$string['urkund_username_help'] = 'API\'ya erişmek için Ouriginal tarafından sağlanan kullanıcı adı';
$string['urkunddebug'] = 'Hata ayıklama';
$string['urkunddefaults'] = 'URKUND varsayılanları';
$string['urkundexplain'] = 'Bu eklenti hakkında daha fazla bilgi için, bkz. <a href="http://www.urkund.com/en" target="_blank"> http://www.urkund.com/int/en/ </a>';
$string['urkundfiles'] = 'Urkund Dosyaları';
$string['useurkund'] = 'URKUND\'u etkinleştir';
$string['waitingevents'] = 'Cron\'u bekleyen {$a->countallevents} etkinliği ve yeniden göndermek için {$a->countheld} etkinlik düzenleniyor';
