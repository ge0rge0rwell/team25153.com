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
 * Strings for component 'plagiarism_turnitin', language 'tr', version '5.0'.
 *
 * @package     plagiarism_turnitin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor'] = 'Herhangi bir dosya türünün gönderilmesine izin verilsin mi?';
$string['allownonor_help'] = 'Bu ayar, herhangi bir dosya türünün gönderilmesine izin verir. Bu seçenek "Evet" olarak ayarlandığında, gönderilerin mümkünse orijinallik olup olmadığı kontrol edilecek, gönderimler indirilmek üzere sunulacak ve mümkün olduğunca GradeMark geribildirim araçları kullanılacaktır.';
$string['anonblindmarkingnote'] = 'Not: Ayrı Turnitin anonim işaretleme ayarı kaldırılmıştır. Turnitin, isimsiz işaretleme ayarını belirlemek için Moodle\'ın kör işaretleme ayarını kullanacaktır.';
$string['assigngeterror'] = 'İki veri için dönüverilemedi';
$string['attachrubric'] = 'Bu görev için bir değerlendirme listesi ekle';
$string['attachrubricnote'] = 'Not: Öğrenciler gönderilen değerlendirme ve içeriğini göndermeden önce görebilecektir.';
$string['because'] = 'Bunun nedeni, bir yöneticinin bekleyen atamayı işleme sırasından kaldırması ve Turnitin\'e gönderilmesini durdurmasıdır. <br /> <strong> Dosya hala Moodle\'da bulunmaktadır; lütfen öğretmeninizle iletişime geçin. </strong> <br /> Herhangi bir hata kodu için: Lütfen aşağıya bakın';
$string['changerubricwarning'] = 'Bir değerlendirme maddesinin değiştirilmesi veya ayrılması, mevcut ödev puanlamasını bu ödevdeki kağıtlardan çıkarır,
  Daha önce işaretlenmiş puan kartı da dahil olmak üzere.
Daha önce derecelendirilmiş kağıtlar için genel notlar kalacaktır.';
$string['checkagainstnote'] = 'Not: Aşağıdaki "Kontrol et ..." seçeneklerinden en az birisi için "Evet" seçeneğini seçmezseniz, bir Özgünlük raporu oluşturulmaz.';
$string['classupdateerror'] = 'Turnitin Sınıfı verileri güncellendi';
$string['closebutton'] = 'Kapat';
$string['code'] = 'Kod';
$string['compareinstitution'] = 'Gönderilen dosyaları, kurum içinde gönderilen kağıtlarla karşılaştır';
$string['config'] = 'Yapılandırma';
$string['configupdated'] = 'Yapılandırma güncellendi';
$string['configureerror'] = 'Bu modülü bir ders içinde kullanmadan önce tamamen Yönetici olarak yapılandırmanız gerekir. Lütfen Moodle yöneticinize başvurun.';
$string['connecttesterror'] = 'Dönüş hatası mesajının Turnitin\'e bağlanmasında bir hata oluştu: <br />';
$string['course'] = 'Kurs';
$string['coursegeterror'] = 'Kurs verisi alınamadı';
$string['cronsubmittedsuccessfully'] = 'Gönderi: {$a->coursename} adlı parkurda {$a->assignmentname} ödevi için {$a-> title} (TII Kimliği: {$a->submissionid}) Turnitin\'e başarıyla gönderildi.';
$string['dbexport'] = 'Veritabanı Dışa Aktar';
$string['dbexporttable'] = '{$a} veriyi dışa aktar';
$string['defaultinserterror'] = 'Varsayılan bir ayar değeri veritabanına eklenmeye çalışılırken bir hata oluştu';
$string['defaults'] = 'Varsayılan ayarlar';
$string['defaultsdesc'] = 'Aşağıdaki ayarlar, bir Etkinlik Modülü içinde Turnitin\'i etkinleştirirken ayarlanan varsayılan değerlerdir';
$string['defaultupdated'] = 'Turnitin varsayılanları güncellendi';
$string['defaultupdateerror'] = 'Veritabanında varsayılan ayar değerini güncelleştirmeye çalışırken bir hata oluştu';
$string['deleteconfirm'] = 'Bu gönderimi silmek istediğinizden emin misiniz? \\n\\n Bu işlemi geri alamazsınız.';
$string['deleted'] = 'Silidi';
$string['deletesubmission'] = 'Gönderimi sil';
$string['digital_receipt_subject'] = 'Bu Turnitin Dijital Makbuzunuz';
$string['digitalreceipt'] = 'Dijital Makbuz';
$string['draftsubmit'] = 'Dosya Turnitin\'e ne zaman sunulmalıdır?';
$string['errorcode0'] = 'Bu dosya Turnitin\'e gönderilmedi, lütfen sistem yöneticinize danışın';
$string['errorcode1'] = 'Bu dosya, bir Özgünlük Raporu üretmek için yeterli içeriğe sahip olmadığı için Turnitin\'e gönderilmedi.';
$string['errorcode10'] = 'Turnitin\'de, gönderimleri engelleyen sınıfın oluşturulmasında bir sorun olması nedeniyle bu dosya Turnitin\'e gönderilmedi. Daha fazla bilgi için lütfen API günlüklerine bakınız.';
$string['errorcode11'] = 'Bu dosya veri eksikliği nedeniyle Turnitin\'e gönderilmedi';
$string['errorcode2'] = 'Bu dosya izin verilen maksimum {$a} boyutunu aştığı için Turnitin\'e gönderilmeyecektir.';
$string['errorcode3'] = 'Kullanıcı Turnitin Son Kullanıcı Lisans Sözleşmesi\'ni kabul etmediği için bu dosya Turnitin\'e gönderilmedi.';
$string['errorcode4'] = 'Bu ödev için desteklenen bir dosya türü yüklemeniz gerekir. Kabul edilen dosya türleri şunlardır; doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps and .rtf';
$string['errorcode5'] = 'Turnitin\'de, gönderimleri engelleyen modül oluşturulurken bir sorun oluştuğundan, bu dosya Turnitin\'e gönderilmedi; lütfen daha fazla bilgi için API günlüğünüze başvurun.';
$string['errorcode6'] = 'Turnitin\'de, gönderimleri engelleyen modül ayarlarını düzenleme konusunda bir sorun olması nedeniyle bu dosya Turnitin\'e gönderilmedi; lütfen daha fazla bilgi için API günlüğünüze başvurun.';
$string['errorcode7'] = 'Turnitin\'de, gönderimi engelleyen bir kullanıcı oluşturulurken bu dosya Turnitin\'e gönderilmedi. Daha fazla bilgi için lütfen API günlüklerine bakınız.';
$string['errorcode8'] = 'Geçici dosya oluşturulurken bir sorun oluştuğundan bu dosya Turnitin\'e gönderilmedi. En olası nedeni, geçersiz bir dosya adıdır. Lütfen dosyayı yeniden adlandırın ve Gönderiyi Düzenle\'yi kullanarak yeniden yükleyin.';
$string['errorcode9'] = 'Gönderilecek dosya havuzunda erişilebilir herhangi bir içerik olmadığı için dosya gönderilemiyor.';
$string['errors'] = 'Hatalar';
$string['excludebiblio'] = 'Bibliyografayı Hariç Tutun';
$string['excludepercent'] = 'Yüzde';
$string['excludequoted'] = 'Alıntılanan Materyali Hariç Tut';
$string['excludevalue'] = 'Küçük Eşleşmeleri hariç tut';
$string['excludewords'] = 'Kelimeler';
$string['faultcode'] = 'Hata kodu';
$string['filedoesnotexist'] = 'Dosya silindi';
$string['grademark'] = 'GradeMark';
$string['id'] = 'Kimlik';
$string['institutionalrepository'] = 'Kurumsal Depo (Uygulanacak Yerler)';
$string['internetcheck'] = 'Internete karşı kontrol et';
$string['journalcheck'] = 'Dergilere, <br /> süreli yayınlara ve yayınlara karşı kontrol edin';
$string['launchpeermarkmanager'] = 'Peermark Yöneticisini Başlatın';
$string['launchpeermarkreviews'] = 'Peermark Yorumlarını Başlat';
$string['launchquickmarkmanager'] = 'Quickmark Yöneticisi\'ni başlatın';
$string['launchrubricmanager'] = 'Rubric Yöneticisini Başlatın';
$string['launchrubricview'] = 'işaretleme için kullanılan Değerlendirme Listesi görüntüle';
$string['line'] = 'Satır';
$string['loadingdv'] = 'Turnitin Belge Görüntüleyicisi Yükleniyor ...';
$string['locked_message'] = 'Kilitli mesaj';
$string['locked_message_default'] = 'Bu ayar, site düzeyinde kilitlendi';
$string['locked_message_help'] = 'Herhangi bir ayar kilitli ise, bu mesaj neden olduğunu söylemek için gösterilir.';
$string['message'] = 'İleti';
$string['messageprovider:submission'] = 'Turnitin İntihal Eklentisi Dijital Makbuz bildirimleri';
$string['module'] = 'Modül';
$string['norepository'] = 'Depo yok';
$string['norubric'] = 'Değerlendirme listesi yok';
$string['noscriptula'] = '(Javascript\'iniz etkin olmadığından Turnitin Kullanıcı Sözleşmesini kabul ettikten sonra gönderme yapmadan önce bu sayfayı manuel olarak yenilemek zorunda kalacaksınız)';
$string['notavailableyet'] = 'Müsait değil';
$string['notorcapable'] = 'Bu dosya için bir Özgünlük Raporu üretmek mümkün değildir.';
$string['otherrubric'] = 'Diğer öğretim elemanlarına ait ders listesini kullanın';
$string['pending'] = 'Beklemede';
$string['pluginname'] = 'Turnitin intihal eklentisi';
$string['pp_createsubmissionerror'] = 'Turnitin\'de gönderim oluşturmaya çalışılırken bir hata oluştu';
$string['pp_digital_receipt_message'] = 'Sayın {a->firstname} {$a->lastname}, <br /> <br /> <strong> {$a->submission_title} </strong> dosyasını başarıyla <strong> ödev gönderdiniz <strong> {$a->submission_date} </strong> adresindeki <strong> {$a->course_fullname} </strong> sınıfındaki {$a>assignment_name} {$a->assignment_part}</strong> >. Gönderim kimliğiniz <strong> {$a->submission_id} </strong>. <br /> <br /> Turnitin\'i kullandığınız için teşekkür ederiz, <br /> <br /> Turnitin Ekibi, tam dijital makbuzunuzu Doküman Görüntüleyici\'deki yazdırma / indirme butonundan izleyebilir ve bastırabilirsiniz.';
$string['pp_submission_error'] = 'Turnitin, gönderiminizle ilgili bir hata döndürdü:';
$string['pp_updatesubmissionerror'] = 'Turnitin\'e gönderiminizi tekrar denemeye çalışırken bir hata oluştu.';
$string['ppcronsubmissionlimitreached'] = 'Turnitin\'e bu cron uygulamasından başka gönderim gönderilmeyecektir, çünkü yalnızca {$a} tane işlem başına işlenir';
$string['pperrorsdesc'] = 'Aşağıdaki dosyaları Turnitin\'e yüklemeye çalışırken bir sorun oldu. Tekrar göndermek için, yeniden göndermek istediğiniz dosyaları seçin ve yeniden gönderme düğmesine basın. Bunlar daha sonra cron çalıştırıldığında işlenir.';
$string['pperrorsfail'] = 'Seçtiğiniz dosyaların bazılarında bir sorun vardı, onlar için yeni bir cron etkinliği oluşturulamadı.';
$string['pperrorssuccess'] = 'Seçtiğiniz dosyalar yeniden gönderildi ve cron tarafından işlenecek.';
$string['ppeventsfailedconnection'] = 'Turnitin\'e intihal eklentisi tarafından Turnitin ile bağlantı kurulamayacağı için bu cron\'un yürütmesi ile herhangi bir olay işlenmeyecektir.';
$string['ppqueuesize'] = 'İntihal Eklentisi etkinlik kuyruğundaki etkinliklerin sayısı';
$string['ppsubmissionerrorseelogs'] = 'Bu dosya Turnitin\'e gönderilmedi, lütfen sistem yöneticinize danışın';
$string['ppsubmissionerrorstudent'] = 'Bu dosya Turnitin\'e teslim edilmedi, lütfen daha ayrıntılı bilgi için öğretmeninize danışın.';
$string['queued'] = 'Kuyruğa alındı';
$string['reportgenspeed'] = 'Rapor Oluşturma Hızı';
$string['reportgenspeed_help'] = 'Bu ödev ayarı için üç seçenek vardır: "Raporları hemen oluştur (yeniden gönderimlere izin verilmez)", "Raporları hemen oluştur (yeniden gönderimlere teslim tarihine kadar izin verilir)" ve "Raporları teslim tarihinde oluştur (yeniden gönderimlere son tarihe kadar izin verilir)" \'<br /><br />\'Raporları hemen oluştur (yeniden gönderimlere izin verilmez)\' seçeneği, bir öğrenci gönderim yaptığında hemen Özgünlük Raporu oluşturur. Bu seçenek seçildiğinde, öğrencileriniz ödevi yeniden gönderemezler.<br /><br />Yeniden gönderimlere izin vermek için \'Hemen rapor oluştur (yeniden gönderimlere teslim tarihine kadar izin verilir)\' seçeneğini belirleyin. Bu, öğrencilerin teslim tarihine kadar ödev için ödevleri sürekli olarak yeniden göndermelerine olanak tanır. Özgünlük Raporlarının yeniden gönderimler için işlenmesi 24 saati bulabilir.<br /><br />\'Raporları teslim tarihinde oluştur (yeniden gönderimlere teslim tarihine kadar izin verilir)\' seçeneği, yalnızca ödevin teslim tarihinde bir Orijinallik Raporu oluşturur . Bu ayar, Özgünlük Raporları oluşturulduğunda ödeve gönderilen tüm ödevlerin birbirleriyle karşılaştırılmasını sağlar.';
$string['reportgenspeed_resubmission'] = 'Bu ödev için zaten bir makale gönderdiniz ve gönderiminiz için bir Benzerlik Raporu oluşturuldu. Bildirinizi yeniden göndermeyi seçerseniz, önceki gönderiminiz değiştirilecek ve yeni bir rapor oluşturulacaktır. {$a->num_resubmissions} yeniden gönderimden sonra, yeni bir Benzerlik Raporu görmek için yeniden gönderimden sonra {$a->num_hours} saat beklemeniz gerekecek.';
$string['resubmitselected'] = 'Seçili Dosyaları Tekrar Gönder';
$string['resubmitting'] = 'Tekrar gönderim';
$string['resubmittoturnitin'] = 'Turnitine tekrar gönder';
$string['saveusage'] = 'Veri dökümünü kaydet';
$string['semptytable'] = 'Sonuç bulunamadı.';
$string['sendqueuedsubmissions'] = 'Turnitin İntihal Eklentisi\'nden Kuyruğa alınan Dosyaları Göndermek';
$string['sharedrubric'] = 'Paylaşılan Referans';
$string['showusage'] = 'Veri Dökümünü Göster';
$string['similarity'] = 'Benzerlik';
$string['spapercheck'] = 'Saklanan öğrenci kağıtlarına karşı kontrol edin';
$string['standardrepository'] = 'Standart Depo';
$string['student'] = 'Öğrenci';
$string['student_notread'] = 'Öğrenci bu kağıda bakmadı.';
$string['student_read'] = 'Öğrenci kağıdı şu konularda izledi:';
$string['studentreports'] = 'Özgünlük Raporlarını Öğrencilere Gösterme';
$string['studentreports_help'] = 'Turnitin benzerlik raporlarını öğrenci kullanıcılarına göstermenizi sağlar. Evet olarak ayarlanırsa Turnitin tarafından oluşturulan benzerlik raporu öğrencinin görebileceği şekilde kullanılabilir.';
$string['submitondraft'] = 'İlk yüklendiğinde dosyayı gönder';
$string['submitonfinal'] = 'Öğrenci işaretleme gönderdiğinde dosyayı gönder';
$string['submitpapersto'] = 'Öğrenci Belgelerini Saklayın';
$string['submitpapersto_help'] = '<strong>Depo Yok: </strong><br />Turnitin\'e, gönderilen belgeleri herhangi bir depoda saklamaması talimatı verildi. Makaleyi yalnızca ilk benzerlik kontrolünü gerçekleştirmek için işleyeceğiz.<br /><br />Standart Depo: </strong><br />Turnitin, gönderilen belgenin bir kopyasını yalnızca Standart Depoda saklayacaktır. Bu seçeneğin seçilmesiyle Turnitin\'e gelecekte gönderilecek belgelerle benzerlik kontrolleri yapmak için yalnızca saklanan belgeleri kullanması talimatı verilir..<br /><br /><strong>IKurumsal Depo (Geçerli Olduğunda): /strong><br />Bu seçeneğin belirlenmesi Turnitin\'e gönderilen belgeleri yalnızca kurumunuza özel bir havuza ekleme talimatı verir. Gönderilen belgelere benzerlik kontrolleri yalnızca kurumunuzdaki diğer öğretim elemanları tarafından yapılacaktır.';
$string['tii_submission_failure'] = 'Ayrıntılı bilgi için lütfen öğretmeninize veya sistem yöneticinize danışın';
$string['tiiassignmentgeterror'] = 'Turnitin\'den bir ödev almaya çalışırken bir hata oluştu';
$string['tiiexplain'] = 'Turnitin ticari bir üründür ve daha fazla bilgi için bu servisi kullanmak için ücretli bir aboneliğiniz olmalıdır. <a href=http://docs.moodle.org/tr/Turnitin_administration> http://docs.moodle.org/en/ Turnitin_administration </a>';
$string['tiimiscsettings'] = 'Çeşitli Eklenti Ayarları';
$string['tiisubmissiongeterror'] = 'Turnitin\'den bir başvuru almaya çalışırken bir hata oluştu.';
$string['tiisubmissionsgeterror'] = 'Turnitin\'den bu ödev için gönderimler almaya çalışırken bir hata oluştu';
$string['transmatch'] = 'Çevrilmiş Eşleştirme';
$string['turnitin:enable'] = 'Turnitini etkinleştir';
$string['turnitin:viewfullreport'] = 'Özgünlük Raporunu Görüntüle';
$string['turnitinconfig'] = 'Turnitin İntihal Eklentisi Yapılandırması';
$string['turnitindefaults'] = 'Turnitin intihal eklentisi varsayılan ayarları';
$string['turnitindeletionerror'] = 'Turnitin gönderim silme işlemi başarısız oldu. Yerel Moodle kopyası kaldırıldı, ancak Turnitin\'deki kayıt silinemedi.';
$string['turnitinid'] = 'Turnitin kimliği';
$string['turnitinpluginsettings'] = 'Turnitin intihal eklentisi ayarları';
$string['turnitinppulapost'] = 'Dosyanız Turnitin\'e teslim edilmedi. EULA\'yı kabul etmek için lütfen buraya tıklayın.';
$string['turnitinppulapre'] = 'Turnitin\'e bir dosya göndermek için önce EULA\'nızı kabul etmelisin. EULA\'nızı kabul etmemeyi seçmek, dosyanızı yalnızca Moodle\'a gönderecektir. Kabul etmek için buraya tıklayın.';
$string['turnitinrefreshingsubmissions'] = 'Gönderimleri yenileme';
$string['turnitinrefreshsubmissions'] = 'Gönderimleri yenile';
$string['turnitinstatus'] = 'Turnitin durumu';
$string['turnitintoolofflineerror'] = 'Geçici bir sorun yaşıyoruz. Lütfen kısa bir süre sonra tekrar deneyin.';
$string['updatereportscores'] = 'Turnitin İntihal Eklentisi için Rapor Puanlarını Güncelle';
$string['useturnitin'] = 'Turnitini etkinleştir';
$string['useturnitin_mod'] = '{$a} için Turnitin\'i etkinleştir';
