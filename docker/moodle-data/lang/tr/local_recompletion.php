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
 * Strings for component 'local_recompletion', language 'tr', version '5.0'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Sahipsiz';
$string['advancedrecompletiontitle'] = 'Gelişmiş';
$string['archive'] = 'Eski denemeleri arşivle';
$string['archivecertificate'] = 'Verilen sertifikaları arşivle (mod_certificate)';
$string['archivecertificate_help'] = 'Verilen sertifikalar arşivlensin mi?';
$string['archivechoice'] = 'Eski seçim denemelerini arşivle';
$string['archivecompletiondata'] = 'Tamamlama verilerini arşivleyin';
$string['archivecompletiondata_help'] = 'Tamamlanma verilerini local_recompletion_cc, local_recompletion_cc_cc ve local_recompletion_cmc tablolarına yazar.  Bu seçilmezse tamamlama verileri kalıcı olarak silinecektir.';
$string['archivecoursecertificate'] = 'Verilen sertifikaları arşivleyin (mod_coursecertificate)';
$string['archivecoursecertificate_help'] = 'Verilen sertifikalar arşivlenmeli mi?  Arşivlenen sertifikalar tool_certificate_issues tablosunda kalacak ancak arşivlenmiş durumuna sahip olacak.';
$string['archivecustomcertcertificates'] = 'Verilen özel sertifikaları arşivleyin (mod_customcert)';
$string['archivecustomcertcertificates_help'] = 'Verilen özel sertifikalar arşivlenmeli mi?';
$string['archiveh5p'] = 'Eski H5P denemelerini arşivle (mod_h5pactivity)';
$string['archivehotpot'] = 'Eski hotpot denemelerini arşivle';
$string['archivehvp'] = 'Eski H5P denemelerini arşivle (mod_hvp)';
$string['archivelesson'] = 'Eski Ders denemelerini arşivle';
$string['archivequestionnaire'] = 'Eski anket denemelerini arşivle';
$string['archivequiz'] = 'Eski sınav denemelerini arşivle';
$string['archivescorm'] = 'Eski SCORM denemelerini arşivle';
$string['assignattempts'] = 'Denemeleri ata';
$string['assignattempts_help'] = 'Kurs içinde ödev denemelerinin nasıl ele alınacağı.
\'Not değişikliğinde güncelle\' ayarı kullanılırsa, bir öğretmen bir ödev etkinliği içindeki notu güncellediğinde ve kullanıcı kursu zaten tamamlamışsa, kurs tamamlama tarihi ödev notu değişikliğinin tarihini kullanacak şekilde güncellenecektir.';
$string['assignevent'] = 'Not değişikliğinde kurs tamamlamayı güncelle';
$string['bulkchangedate'] = 'Seçilen kullanıcılar için tamamlanma tarihini değiştir';
$string['bulkresetallcompletion'] = 'Seçili kullanıcılar için tüm tamamlamaları sıfırla';
$string['certificate'] = 'Sertifikalar (mod_certificate)';
$string['certificate_help'] = 'Verilen sertifikalar silinsin mi?';
$string['certificateverifywarn'] = 'Dikkat! Verilen sertifikaların arşivlenmeden silinmesi, verilen sertifikaların artık Moodle\'da doğrulanamamasına neden olacaktır. Lütfen sertifikaları yalnızca bu sizin için kabul edilebilirse silin.';
$string['choiceattempts'] = 'Seçim denemeleri';
$string['choiceattempts_help'] = 'Mevcut Seçim denemeleri silinirse - arşivle seçilirse, eski Seçim denemeleri local_recompletion_cha tablosunda arşivlenecektir.';
$string['completed'] = 'Tamamlandı';
$string['completionnotenabled'] = 'Bu kursta tamamlama etkinleştirilmemiştir';
$string['completionreset'] = 'Bu derste seçilen öğrenciler için tamamlama sıfırlanmıştır.';
$string['completionresetuser'] = 'Bu kursta {$a} için tamamlama sıfırlandı.';
$string['completionupdated'] = 'Kurs tamamlama tarihleri güncellendi';
$string['coursecertificate'] = 'Sertifikalar (mod_coursecertificate)';
$string['coursecertificate_help'] = 'Verilen sertifikalar silinsin mi mi?';
$string['coursecertificateverifywarn'] = 'Dikkat! Verilen sertifikaların arşivlenmeden silinmesi, verilen sertifikaların artık Moodle\'da doğrulanamamasına neden olacaktır. Lütfen sertifikaları yalnızca bu sizin için kabul edilebilirse silin.';
$string['coursecompletiondate'] = 'Yeni kurs tamamlama tarihi';
$string['customcertcertificates'] = 'Özel sertifikalar (mod_customcert)';
$string['customcertcertificates_help'] = 'Verilen özel sertifikalar silinmeli mi?';
$string['customcertresetcertificates'] = 'Verilen sertifikaları silme';
$string['customcertresetcertificatesverifywarn'] = 'Dikkat! Verilen sertifikaları silmek, silmeden önce arşivlemiş olsanız bile, sertifikaların Moodle\'da artık doğrulanamamasına neden olacaktır. Lütfen sertifikaları yalnızca bu sizin için kabul edilebilirse silin.';
$string['datasource:local_recompletion_cc'] = 'Kurs tamamlama arşivi';
$string['datasource:local_recompletion_ccert_is'] = 'Verilen sertifikaların arşivi (mod_customcert)';
$string['datasource:local_recompletion_cert'] = 'Verilen sertifikaların arşivi (mod_certificate)';
$string['datasource:local_recompletion_cmc'] = 'Faaliyet tamamlama arşivi';
$string['datasource:local_recompletion_h5p'] = 'H5P denemeleri arşivi (mod_h5pactivity)';
$string['datasource:local_recompletion_hpa'] = 'Hotpot denemeleri arşivi';
$string['datasource:local_recompletion_lg'] = 'Ders notları arşivi';
$string['datasource:local_recompletion_qa'] = 'Sınav denemeleri arşivi';
$string['datasource:local_recompletion_qg'] = 'Sınav notları arşivi';
$string['defaultsettings'] = 'Varsayılan ayarları yeniden tamamlama';
$string['delete'] = 'Mevcut denemeleri sil';
$string['deletecertificate'] = 'Verilen sertifikaları silme';
$string['deletecoursecertificate'] = 'Verilen sertifikaları sil';
$string['deletegradedata'] = 'Kullanıcı için tüm notları sil';
$string['deletegradedata_help'] = 'Geçerli not tamamlama verilerini grade_grades tablosundan silin. Not tamamlama verileri kalıcı olarak silinir ancak veriler Not geçmişi veri tablosunda tutulur.';
$string['donothing'] = 'Hiçbir şey yapma';
$string['editcompletion'] = 'Kurs tamamlanma tarihini düzenle';
$string['editcompletion_desc'] = 'Aşağıdaki kullanıcılar için kurs tamamlama tarihini değiştirin:';
$string['editrecompletion'] = 'Kurs yeniden tamamlama ayarlarını düzenleyin';
$string['emailrecompletiontitle'] = 'Özel yeniden tamamlama mesajı ayarları';
$string['endtime'] = 'Bitiş zamanı';
$string['entity:local_recompletion_cc'] = 'Kurs tamamlama arşivi';
$string['entity:local_recompletion_ccert_is'] = 'Verilen sertifikaların arşivi (mod_customcert)';
$string['entity:local_recompletion_cert'] = 'Verilen sertifikaların arşivi (mod_certificate)';
$string['entity:local_recompletion_cmc'] = 'Faaliyet tamamlama arşivi';
$string['entity:local_recompletion_h5p'] = 'H5P denemeleri arşivi (mod_h5pactivity)';
$string['entity:local_recompletion_hpa'] = 'Hotpot denemeleri arşivi';
$string['entity:local_recompletion_lg'] = 'Ders notları arşivi';
$string['entity:local_recompletion_qa'] = 'Sınav denemeleri arşivi';
$string['entity:local_recompletion_qg'] = 'Sınav notları arşivi';
$string['eventrecompletion'] = 'Kursu yeniden tamamlama';
$string['extraattempt'] = 'Öğrenciye ekstra deneme/denemeler verin';
$string['forcearchivecompletiondata'] = 'Arşiv tamamlama verilerini zorla';
$string['forcearchivecompletiondata_help'] = 'Etkinleştirilirse, tamamlama verileri arşivleme tüm kurs yeniden tamamlamaları için zorunlu olarak açılır.  Bu, yanlışlıkla veri kaybını önleyebilir.';
$string['h5pattempts'] = 'H5P girişimleri (mod_h5pactivity)';
$string['h5pattempts_help'] = 'Kurs içindeki H5P denemelerinin nasıl ele alınacağı. Arşivle seçilirse eski H5P denemeleri local_recompletion_h5p ve local_recompletion_h5pr tablolarında arşivlenir.';
$string['hotpotattempts'] = 'Hotpot denemeleri';
$string['hotpotattempts_help'] = 'Kurs içindeki hotpot denemelerinin nasıl ele alınacağı. Arşivle seçilirse denemeler arşivlenecektir.';
$string['hvpattempts'] = 'H5P girişimleri (mod_hvp)';
$string['hvpattempts_help'] = 'Kurs içindeki H5P denemelerinin nasıl ele alınacağı. Arşivle seçilirse eski H5P denemeleri local_recompletion_hvp tablosunda arşivlenir.';
$string['inprogress'] = 'Devam ediyor';
$string['invalidscheduledate'] = 'Geçersiz program tarihi girildi.';
$string['lessonattempts'] = 'Ders girişimleri';
$string['lessonattempts_help'] = 'Kurs içindeki Ders denemelerinin nasıl işleneceği. Arşivle seçilirse denemeler arşivlenecektir.';
$string['modifycompletiondates'] = 'Kurs tamamlama tarihlerini değiştirme';
$string['noassigngradepermission'] = 'Tamamlama durumunuz sıfırlandı, ancak bu kurs sıfırlanamayan bir ödev içeriyor, lütfen gerekirse öğretmeninizden bunu sizin için yapmasını isteyin.';
$string['nousersselected'] = 'Hiçbir kullanıcı seçilmedi';
$string['penalties'] = 'Cezalar';
$string['pluginname'] = 'Kursu yeniden tamamlama';
$string['pluginssettings'] = 'Eklenti ayarları';
$string['privacy:metadata:attempt'] = 'Deneme sayısı';
$string['privacy:metadata:completionstate'] = 'Etkinlik tamamlandıysa';
$string['privacy:metadata:correct'] = 'Cevap doğru mu?';
$string['privacy:metadata:course'] = 'Bu tabloya bağlı kurs kimliği.';
$string['privacy:metadata:coursemoduleid'] = 'Etkinlik kimliği';
$string['privacy:metadata:coursesummary'] = 'Bir kullanıcı için kurs tamamlama verilerini depolar.';
$string['privacy:metadata:deadline'] = 'Son teslim tarihi';
$string['privacy:metadata:endtime'] = 'Bitiş zamanı';
$string['privacy:metadata:flag'] = 'Bayrak';
$string['privacy:metadata:grade'] = 'Not';
$string['privacy:metadata:gradefinal'] = 'Kursun tamamlanması için alınan final notu';
$string['privacy:metadata:lessontime'] = 'Ders süresi';
$string['privacy:metadata:local_recompletion_cc'] = 'Önceki kurs tamamlamalarının arşivi.';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Önceki course_completion_crit_compl arşivi.';
$string['privacy:metadata:local_recompletion_ccert_is'] = 'Önceki kurs customcert sorunlarının arşivi.';
$string['privacy:metadata:local_recompletion_ccert_is:emailed'] = 'Customcert sorunu e-posta ile gönderilmişse.';
$string['privacy:metadata:local_recompletion_ccert_is:timecreated'] = 'Customcert sürümünün oluşturulduğu zaman';
$string['privacy:metadata:local_recompletion_cert'] = 'Önceki sertifika sürümünleri arşivi.';
$string['privacy:metadata:local_recompletion_cert:timecreated'] = 'Sertifika sorununun oluşturulduğu zaman';
$string['privacy:metadata:local_recompletion_cha'] = 'Seçim cevapları arşivi';
$string['privacy:metadata:local_recompletion_cha:choiceid'] = 'Seçim cevapları arşivinin Seçim Kimliği';
$string['privacy:metadata:local_recompletion_cha:optionid'] = 'Seçilen cevapların Arşivinin Seçenek Kimliği';
$string['privacy:metadata:local_recompletion_cmc'] = 'Önceki kurs modülü tamamlamalarının arşivi.';
$string['privacy:metadata:local_recompletion_cmv'] = 'Önceki kurs modülü görünümlerinin arşivi.';
$string['privacy:metadata:local_recompletion_h5p'] = 'H5P (mod_h5pactivity) girişimi izleme bilgilerinin arşivi.';
$string['privacy:metadata:local_recompletion_h5pr'] = 'H5P (mod_h5pactivity) deneme sonuçları izleme bilgileri için arşiv.';
$string['privacy:metadata:local_recompletion_hpa'] = 'Hotpot denemeleri için arşiv.';
$string['privacy:metadata:local_recompletion_hvp'] = 'H5P (mod_hvp) kullanıcı verileri için arşiv.';
$string['privacy:metadata:local_recompletion_hvp:data'] = 'Depolanan gerçek kullanıcı verileri.';
$string['privacy:metadata:local_recompletion_hvp:hvp_id'] = 'Hvp içeriğinin kimliği';
$string['privacy:metadata:local_recompletion_la'] = 'lesson_attempts için arşiv';
$string['privacy:metadata:local_recompletion_lb'] = 'lesson_branch arşivi';
$string['privacy:metadata:local_recompletion_lg'] = 'lesson_grades arşivi';
$string['privacy:metadata:local_recompletion_lo'] = 'lesson_overrides arşivi';
$string['privacy:metadata:local_recompletion_lt'] = 'lesson_timer arşivi';
$string['privacy:metadata:local_recompletion_ltia'] = 'Kullanıcı erişim günlüğü ve gradeback verileri.';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'Kullanıcının kursa en son eriştiği zaman.';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'Kullanıcının sahip olduğu kaydedilen son not.';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'Kullanıcının kaydedildiği zaman.';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'LTI kayıt yöntemi aracı kimliği.';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'Kullanıcının kimliği.';
$string['privacy:metadata:local_recompletion_qr'] = 'Yeniden Tamamlama Anketi yanıt tablosu';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'tamamlama';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Değerlendirme';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'Anket kimliği';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Gönderilen';
$string['privacy:metadata:maxattempts'] = 'Maksimum deneme sayısı';
$string['privacy:metadata:overrideby'] = 'Faaliyet tamamlama işlemini geçersiz kılan kişinin kullanıcı kimliği';
$string['privacy:metadata:quiz_attempts'] = 'Bir testteki her deneme hakkında arşivlenmiş ayrıntılar.';
$string['privacy:metadata:quiz_attempts:attempt'] = 'Deneme numarası.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'Kullanıcının bulunduğu geçerli sayfa.';
$string['privacy:metadata:quiz_attempts:preview'] = 'Bunun sınavın bir önizlemesi olup olmadığı.';
$string['privacy:metadata:quiz_attempts:state'] = 'Denemenin mevcut durumu.';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'Denemedeki notların toplamı.';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'Durumun kontrol edildiği zaman.';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'Denemenin tamamlandığı zaman.';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'Denemenin güncellendiği zaman.';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'Denemenin çevrimdışı güncelleme yoluyla güncellendiği zaman.';
$string['privacy:metadata:quiz_attempts:timestart'] = 'Denemeni başlatıldığı zaman.';
$string['privacy:metadata:quiz_grades'] = 'Önceki sınav denemeleri için genel not hakkında arşivlenmiş ayrıntılar.';
$string['privacy:metadata:quiz_grades:grade'] = 'Bu sınav için genel not.';
$string['privacy:metadata:quiz_grades:quiz'] = 'Not verilen sınav.';
$string['privacy:metadata:quiz_grades:timemodified'] = 'Notun değiştirildiği zaman.';
$string['privacy:metadata:quiz_grades:userid'] = 'Not verilen kullanıcı.';
$string['privacy:metadata:rawscore'] = 'Elde edilen puan';
$string['privacy:metadata:reaggregate'] = 'Kurs tamamlama yeniden toplulaştırılmışsa.';
$string['privacy:metadata:retake'] = 'Yeniden Al';
$string['privacy:metadata:scoes_value:element'] = 'İzlenecek öğenin kimliği';
$string['privacy:metadata:scoes_value:value'] = 'Verilen öğenin değeri';
$string['privacy:metadata:score'] = 'Puan';
$string['privacy:metadata:scorm_attempt'] = 'Önceki SCORM denemelerinin arşivi.';
$string['privacy:metadata:scorm_scoes_value'] = 'Etkinliği ait SCO\'ların izlenen verilerinin arşivlenmesi';
$string['privacy:metadata:scormid'] = 'Scorm kimliği';
$string['privacy:metadata:starttime'] = 'Başlangıç zamanı';
$string['privacy:metadata:timecompleted'] = 'Kursun tamamlandığı zaman.';
$string['privacy:metadata:timecreated'] = 'İzlenen öğenin oluşturulduğu zaman';
$string['privacy:metadata:timeenrolled'] = 'Kullanıcının kursa kayıtlı olduğu zaman';
$string['privacy:metadata:timemodified'] = 'Öğenin en son izlendiği zaman';
$string['privacy:metadata:timestarted'] = 'Kursun başladığı saat.';
$string['privacy:metadata:unenroled'] = 'Kullanıcı kurstan kaydını sildirmişse';
$string['privacy:metadata:useranswer'] = 'Cevap';
$string['privacy:metadata:userid'] = 'Bu tabloya bağlı kullanıcı kimliği.';
$string['privacy:metadata:viewed'] = 'Etkinlik görüntülendiyse';
$string['pulsenotifications'] = 'Nabız bildirimleri';
$string['pulsenotifications_help'] = 'Zaten gönderilmiş olan Pulse bildirimleri sıfırlansın mı?';
$string['pulseresetnotifications'] = 'Bildirimleri sıfırla';
$string['questionnaireattempts'] = 'Anket denemeleri';
$string['questionnaireattempts_help'] = 'Mevcut Anket denemeleri ile ne yapılacağı. Sil ve arşivle seçilirse, eski Anket denemeleri local_recompletion tablolarında arşivlenecektir.';
$string['quizattempts'] = 'Sınav denemeleri';
$string['quizattempts_help'] = 'Mevcut Quiz denemeleri ile ne yapılacağı. Sil ve arşivle seçilirse, eski sınav denemeleri local_recompletion tablolarında arşivlenir, ekstra denemeler vermek üzere ayarlanırsa bu, kullanıcının izin verilen maksimum deneme sayısını ayarlamasına izin vermek için bir sınav geçersiz kılma ekler.';
$string['recompletion'] = 'yeniden tamamlama';
$string['recompletion:bulkoperations'] = 'Toplu işlemler';
$string['recompletion:manage'] = 'Kurs yeniden tamamlama ayarlarının değiştirilmesine izin verin';
$string['recompletion:resetmycompletion'] = 'Kendi tamamlamamı sıfırla';
$string['recompletioncalculateddate'] = 'Hesaplanan tarih: {$a}';
$string['recompletionemailbody'] = 'Yeniden tamamlama mesaj gövdesi';
$string['recompletionemailbody_help'] = 'Özel bir yeniden tamamlama e-posta konusu, HTML etiketleri ve çoklu dil etiketleri dahil olmak üzere düz metin veya Moodle-auto formatında eklenebilir

Aşağıdaki yer tutucular mesaja dahil edilebilir:

* Kurs adı {$a-&gt;coursename}
* Kursa bağlantı {$a-&gt;link}
* Kullanıcının profil sayfasına bağlantı {$a-&gt;profileurl}
* Kullanıcı e-postası {$a-&gt;email}
* Kullanıcı tam adı {$a-&gt;fullname}';
$string['recompletionemaildefaultbody'] = 'Merhaba, lütfen {$a->coursename} {$a->link} kursunu tekrar tamamlayın';
$string['recompletionemaildefaultsubject'] = '{$a->coursename} kursunun yeniden tamamlanması gerekiyor';
$string['recompletionemailsubject'] = 'Yeniden tamamlama mesaj konusu';
$string['recompletionemailsubject_help'] = 'Özel bir yeniden tamamlama e-posta konusu düz metin olarak eklenebilir

Aşağıdaki yer tutucular mesaja dahil edilebilir:
* Kurs adı {$a-&gt;kursadı}
* Kullanıcı tam adı {$a-&gt;tam adı}';
$string['recompletionnotenabledincourse'] = 'courseid: {$a} içinde yeniden tamamlama etkin değil';
$string['recompletionrange'] = 'Yeniden tamamlama periyodu';
$string['recompletionrange_help'] = 'Bir kullanıcının tamamlama sonuçları sıfırlanmadan önce geçecek süreyi ayarlayın.';
$string['recompletionschedule'] = 'Yeniden tamamlama programı';
$string['recompletionschedule_help'] = 'Tamamlama sonuçlarının sıfırlanacağı bir tarih (örn. 1 Ocak) belirleyin. Bu tarih, bir yeniden tamamlamanın en son çalıştırıldığı tarihten itibaren ileriye doğru hesaplanır. Bu sıfırlama daha sonrasında belirli bir aralıkta gerçekleşecektir. \'1 Ocak\' yıllık bir yeniden tamamlama ile sonuçlanırken, \'cuma\' her cuma yeniden tamamlamanın çalıştırılmasıyla sonuçlanacaktır.';
$string['recompletionsettingssaved'] = 'Yeniden tamamlama ayarları kaydedildi';
$string['recompletiontask'] = 'Yeniden tamamlaması gereken kullanıcıları kontrol edin';
$string['recompletiontype'] = 'Yeniden tamamlama türü';
$string['recompletiontype:disabled'] = 'Devredışı';
$string['recompletiontype:ondemand'] = 'Talep üzerine';
$string['recompletiontype:period'] = 'Dönem';
$string['recompletiontype:schedule'] = 'Takvim';
$string['recompletiontype_help'] = 'Yeni kurslar için kullanıcıların tamamlama sonuçlarının nasıl sıfırlanacağını belirler.

 * Devre Dışı - bu özelliği devre dışı bırakır.
 * Dönem - Kullanıcının son kursu tamamlama tarihine bağlı olarak bir yeniden tamamlama süresine (örneğin her 60 günde bir) izin verir.
 * Talep üzerine - Öğretmenin gerektiğinde bireysel kullanıcıları manuel olarak sıfırlamasına izin verin.
 * Program - belirli bir tarihte, örneğin her yıl 1 Ocak\'ta yeniden tamamlanmaya izin verir.';
$string['recompletionunenrolenable'] = 'Kayıt silindiğinde tamamlamayı sıfırla';
$string['recompletionunenrolenable_help'] = 'Kullanıcı kaydı kaldırıldığında tamamlama sıfırlamasını tetiklemeyi etkinleştir';
$string['resetallcompletion'] = 'Tüm tamamlamaları sıfırla';
$string['resetcompletionconfirm'] = '{$a} için bu kurstaki tüm tamamlama verilerini sıfırlamak istediğinizden emin misiniz?  Uyarı - bu, gönderilen bazı içeriği kalıcı olarak silebilir.';
$string['resetcompletionfor'] = '{$a} için tamamlamayı sıfırla';
$string['resetlti'] = 'LTI notlarını sıfırla';
$string['resetltis'] = 'LTI notları';
$string['resetltis_help'] = 'Kurs içinde LTI notlarının nasıl ele alınacağı.
"LTI notlarını sıfırla" ayarı kullanılırsa tüm not LTI sonuçları 0 olarak ayarlanacaktır.
Kullanıcı kursu yeni bir şekilde tamamladığında, güncellenen kurs notu LTI sağlayıcısına yeniden gönderilecektir.';
$string['resetmycompletion'] = 'Etkinlik tamamlama işlemlerimi sıfırla';
$string['resetquizoverride'] = 'Sınav kullanıcı geçersiz kılmalarını sıfırla';
$string['restricted'] = 'Belirli bir kullanıcı için tamamlama işleminin sıfırlanması kısıtlanmıştır';
$string['restrictedbyenrol'] = 'Belirli bir kullanıcı için tamamlama işleminin sıfırlanması, kayıt yöntemiyle sınırlıdır';
$string['restrictenrol'] = 'Kayıt yöntemi';
$string['restrictenrol_help'] = 'Tamamlama verilerinin sıfırlanmasına yalnızca seçilen kayıt yöntemleriyle kaydolan kullanıcılar dahil edilecektir.  Hiçbirinin seçilmemesi, kullanıcılar için kayıt yönteminde herhangi bir kısıtlama olmadığı anlamına gelir.';
$string['restrictionsettings'] = 'Kısıtlama ayarları';
$string['restrictionsheader'] = 'Kısıtlamalar';
$string['score'] = 'Puan';
$string['scormattempts'] = 'SCORM denemeleri';
$string['scormattempts_help'] = 'Mevcut SCORM denemelerinin silinmesi durumunda - arşiv seçilirse eski SCORM denemeleri local_recompletion_sst tablosunda arşivlenecektir.';
$string['starttime'] = 'Başlangıç zamanı';
$string['status'] = 'Tamamlanma durumu';
$string['timecreated'] = 'Oluşturulma zamanı';
$string['timedout'] = 'Zaman aşımına uğradı';
$string['timemodified'] = 'Değiştirilme zamanı';
$string['yearly'] = 'Yıllık';
