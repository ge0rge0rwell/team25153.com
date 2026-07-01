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
 * Strings for component 'allocationform', language 'tr', version '5.0'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Atama Formuna erişim red edildi';
$string['add_option'] = 'Yeni seçenek ekle';
$string['al_notwant'] = 'İstemiyorum';
$string['al_notwant_help'] = 'Atanması  istemediğiniz bir seçeneği seçin';
$string['allocationform:addinstance'] = 'Yeni bir atama formu ekle';
$string['allocationform:edit'] = 'Atama formlarını düzenle';
$string['allocationform:exportallocations'] = 'Dağıtımları dışa aktar';
$string['allocationform:exportchoices'] = 'Dışa aktarma seçenekleri';
$string['allocationform:reallocate'] = 'Yeniden Atamayı zorla';
$string['allocationform:viewallocations'] = 'Yapılan tüm dağıtımları görüntüleyin';
$string['allocationform:viewform'] = 'Atama formlarını görüntüle';
$string['allocationformname'] = 'Tahsis formu adı';
$string['allocationformname_help'] = 'Bu dağıtım formunun adı, forma bağlantı vermek için kullanılacaktır.';
$string['allocations'] = 'Dağıtımlar';
$string['allocations_not_visible'] = 'Dağıtımlar sadece editörler tarafından görülebilir.';
$string['allocationsexported'] = 'dağıtımlar dışa aktarıldı';
$string['allocationviewed'] = 'Atama formu görüntülendi';
$string['aria:delete'] = '{a} sil';
$string['aria:edit'] = '{$a} düzenle';
$string['aria:restrict'] = '{$a} kısıtla';
$string['availabilityheading'] = 'Form kullanılabilirliği';
$string['back_to_edit'] = 'Düzenleme moduna geç';
$string['back_to_edit_warning'] = 'Bu, forma gönderilen tüm bilgileri siler.';
$string['before_start'] = 'Bu dağıtım formunun başlangıç tarihi henüz geçmedi.';
$string['calendar:avaliable'] = '{$a} için serbest bırakılan atamalar';
$string['calendar:deadline'] = '{$a} için son tarih';
$string['cannoteditinapp'] = 'Tahsis formu Moodle Uygulamasında düzenlenemez';
$string['changestateto'] = 'Formu {$a} durumuna değiştirmek istediğinizden emin misiniz?';
$string['choice'] = 'Seçenek {$a->choice}';
$string['choice_help'] = 'Tahsis edilmesini istediğiniz bir seçeneği seçin.';
$string['choicealreadyselected'] = 'Bir seçenek yalnızca bir kez seçilebilir';
$string['choiceheading'] = 'Kurulum seçenekleri';
$string['choiceincorrectstate'] = 'Form açık değil. Lütfen sayfayı yenileyin.';
$string['choiceinvalid'] = 'Formun parçası olmayan bir seçenek belirlediniz';
$string['choicerequired'] = 'Bir seçim yapmak';
$string['choicesexported'] = 'Dışa aktarılan seçenekler';
$string['cron'] = 'Tahsis formları için arka planda işleme';
$string['csvgenerated'] = 'CSV oluşturuldu';
$string['deadline'] = 'Son tarih';
$string['deadline_help'] = 'Kullanıcıların dağıtımlarını seçebilecekleri en son zaman, aynı zamanda bir dağıtım formunun dağıtım işleminin gerçekleşmesi için sıraya alınacağı en erken zamandır.';
$string['deadline_message'] = 'Bu formu doldurmak için son tarih: {$a->deadline}';
$string['deadline_passed'] = 'Bu formun son teslim tarihi geçti, şimdi aktif hale getirirseniz hemen işlemeye başlayacaktır.';
$string['defaultrole'] = 'Geçerli rol';
$string['defaultrole_help'] = 'Etkinliği kullanarak dağıtılacak kullanıcıları seçmek için kullanılacak varsayılan rolü ayarlayın';
$string['deleteuserdata'] = 'Kullanıcı verilerini sil';
$string['disallow_list'] = 'İzin verme listesi';
$string['disallow_list_help'] = 'Kontrol edilen tüm kullanıcılar {$a->option_name} öğesini seçemeyecek';
$string['duplicate_choice'] = 'Bir seçeneği yalnızca bir kez seçebilirsiniz';
$string['duplicateoption'] = 'Hata: Yaptığınız değişiklikler veri tabanına kaydedilemedi. Bunun nedeni büyük olasılıkla yinelenen bir seçenek adının girilmesidir.';
$string['editingmode'] = 'düzenleme';
$string['editingoption'] = 'Düzenleme seçeneği';
$string['event:optiondcreated'] = 'Seçenek oluşturuldu';
$string['event:optiondeleted'] = 'Seçenek silindi';
$string['form_allocation_error'] = 'HATA {$a->formid} içinde:';
$string['form_allocation_error2'] = 'HATA: {$a->userid} kullanıcı kimliği ayrılamadı';
$string['generate_allocation_csv'] = 'Kullanıcı dağıtımlarının csv\'sini oluşturun';
$string['generate_csv'] = 'Kullanıcı seçeneklerinin csv\'sini oluşturun';
$string['in_editingmode'] = 'Form düzenleniyor, aşama 1/5.';
$string['in_processedmode'] = 'Dağıtım serbest bırakıldı, aşama 5/5.';
$string['in_processmode'] = 'Kullanıcıların dağıtımı yapılıyor, 5\'in 3. aşaması.';
$string['in_readymode'] = 'Form aktif, 2. aşama 5.';
$string['in_reviewmode'] = 'Dağıtımlar gözden geçiriliyor, aşama 4/5.';
$string['incorrectnumberofchoices'] = 'Formda doğru sayıda seçenek yok';
$string['instructions'] = '{$a->choices} seçeneklerini sıralamanız gerekir, seçeneklerin {$a->allocation}\'ına atanacaksınız.';
$string['instructionsnotwant'] = '{$a->choices} seçeneklerini sıralamanız gerekir, seçeneklerin {$a->allocation}\'ına atanacaksınız. Tahsis edilmesini istemediğiniz 1 seçeneği seçebilirsiniz.';
$string['invalidstate'] = 'Tahsis formuna geçersiz bir durum değişikliği geçirildi';
$string['invalidstatechange'] = 'Geçersiz durum değişikliği denendi';
$string['make_active'] = 'Formu aktif hale getirin';
$string['makechoice'] = 'seçimlerini yap';
$string['modulename'] = 'Atama formu';
$string['modulename_help'] = 'Dağıtım formu, öğrencileri bir ila on seçeneğe dağıtmak için kullanılabilir (örneğin modüller, ödevler, yerleştirmeler...)

Öğretmen şunları tanımlar:

* Öğrencilerin kullanabileceği seçenekler listesi.
* Bir seçeneğe atanabilecek öğrenci sayısı.
* Öğrencilere kaç seçenek atanır (bir ile on arasında)
* Bir öğrenci kaç seçeneği sıralayabilir (bir ile on arasında)
* Öğrenciler kendilerine verilmesini istemedikleri bir seçeneği seçebiliyorlarsa.
* Öğrencilerin seçim yapabilecekleri son nokta.

Uyarı: Etkinliği aktif moddan tekrar düzenleme moduna geçirirken, öğrencilerin yaptığı tüm seçimler silinecektir.

Kapanış tarihinden sonra, form öğrencilerin \'en uygun\' dağılımını yapmaya çalışacaktır, böylece:

* Olabildiğince çok öğrenci, sıralamalarında olabildiğince yüksek seçeneklere atanır.
* Öğrenciler asla \'İstemiyorum\' olarak seçtikleri bir seçime atanmazlar.
* Öğrenciler, seçmeleri kısıtlanan seçeneklere atanmaz.
* Seçim yapmayan öğrenciler en son yerleşecektir.

Dağıtımlar işlendikten sonra öğretmenler:

* Sonuçları gözden geçirin ve sonuçları öğrencilere açıklamadan önce seçeneklere dağıtılan öğrenci sayısını değiştirin.
* Öğrenci tercihlerinin bir csv\'sini alın.
* Dağıtımların bir csv\'sini alın.';
$string['modulenameplural'] = 'Tahsis formları';
$string['no_allocations'] = 'Dağıtım bulunamadı';
$string['noallocationforms'] = 'Bu ders için dağıtım formu bulunamadı';
$string['noformdatapassed'] = 'Hiçbir form verisi aktarılmadı. Güncelleme yapılmadı.';
$string['nopermission'] = 'Forma atanamazsınız, seçimleriniz kaydedilmedi';
$string['not_active'] = 'Atama formu kullanılamıyor, lütfen daha sonra tekrar deneyin.';
$string['not_enough_slots'] = 'Atama için uygun olan tüm kişiler için yeterli kontenjan mevcut değil';
$string['not_set'] = 'bir seçim yapmalısın';
$string['notrequired'] = 'Zorunlu değil';
$string['notwant'] = 'İstemiyorum dahil';
$string['notwant_help'] = 'Eğer seçilirse, kullanıcıya atanmak istemediği bir seçeneği belirtme fırsatı verilecektir';
$string['nousersallocated'] = 'Ayrılan kullanıcı yok';
$string['numberofallocations'] = 'Kullanıcı başına dağıtım';
$string['numberofallocations_help'] = 'Bir kullanıcıya atanacak seçenek sayısı';
$string['numberofchoices'] = 'Seçenek sayısı';
$string['numberofchoices_help'] = 'Bir kullanıcının seçmesi gereken seçeneklerin sayısı';
$string['ok_to_continue'] = 'Devam etmek istediğinizden emin misiniz?';
$string['option_form_header'] = 'Yeni seçenek';
$string['option_heading'] = 'Başlık';
$string['option_heading_help'] = 'Bu seçeneğin hemen üzerinde görüntülenecek bir başlık.';
$string['option_list'] = 'Seçenek listesi';
$string['option_maxallocation'] = 'En fazla dağıtım';
$string['option_maxallocation_help'] = 'Bu seçeneğe atanabilecek enfazla kişi sayısı.';
$string['option_maxallocation_invalid'] = 'Maksimum dağıtım ayarlanmadı';
$string['option_name'] = 'Seçenek adı';
$string['option_name_help'] = 'Kullanıcıya gösterilecek seçeneğin adı.';
$string['option_restricted'] = 'Kısıtlı kullanıcılar';
$string['optioncreated'] = 'Oluşturulan seçenek: {$a}';
$string['optiondeleted'] = 'Silinen seçenek: {$a}';
$string['optionedited'] = 'Seçenek düzenlendi';
$string['optionmodified'] = 'Değiştirilmiş seçenek: {$a}';
$string['overviewclose'] = 'Kapanış tarihi: {$a->closedate}';
$string['overviewname'] = 'Atama: {$a -> link}';
$string['overviewready'] = 'Yer atamanız mevcuttur.';
$string['overviewreview'] = 'İnceleme için hazır. Tahsis edilen kişiler sonuçları göremezler.';
$string['people'] = 'Tahsis edilecek kişi sayısı';
$string['permissionedited'] = 'İzin düzenlendi';
$string['permissionviewed'] = 'İzin görüntülendi';
$string['pluginadministration'] = 'Atama formu yönetimi';
$string['pluginname'] = 'Atama formları (eFormlar)';
$string['privacy:export:allocations'] = 'Dağıtımlar';
$string['privacy:export:choices'] = 'Seçenekler';
$string['privacy:export:restrictions'] = 'Kısıtlamalar';
$string['privacy:metadata:allocationform_allocations'] = 'Kullanıcı için yapılan dağıtımları saklar';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'Kullanıcının atandığı seçenek';
$string['privacy:metadata:allocationform_allocations:userid'] = 'Ataması yapılan kullanıcı';
$string['privacy:metadata:allocationform_choices'] = 'Bir kullanıcının bir atama formunda yaptığı seçimleri saklar';
$string['privacy:metadata:allocationform_choices:choice1'] = 'Kullanıcının ilk tercihi';
$string['privacy:metadata:allocationform_choices:choice10'] = 'Kullanıcının onuncu tercihi';
$string['privacy:metadata:allocationform_choices:choice2'] = 'Kullanıcının ikinci tercihi';
$string['privacy:metadata:allocationform_choices:choice3'] = 'Kullanıcının üçüncü tercihi';
$string['privacy:metadata:allocationform_choices:choice4'] = 'Kullanıcının dördüncü tercihi';
$string['privacy:metadata:allocationform_choices:choice5'] = 'Kullanıcının beşinci tercihi';
$string['privacy:metadata:allocationform_choices:choice6'] = 'Kullanıcının altıncı tercihi';
$string['privacy:metadata:allocationform_choices:choice7'] = 'Kullanıcının yedinci tercihi';
$string['privacy:metadata:allocationform_choices:choice8'] = 'Kullanıcının sekizinci tercihi';
$string['privacy:metadata:allocationform_choices:choice9'] = 'Kullanıcının dokuzuncu tercihi';
$string['privacy:metadata:allocationform_choices:notwant'] = 'Kullanıcının atanmasını istemediği bir seçenek';
$string['privacy:metadata:allocationform_choices:userid'] = 'Kullanıcının seçimleri yapması';
$string['privacy:metadata:allocationform_disallow'] = 'Kullanıcının seçmesi durdurulan seçenekleri saklar';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'Kullanıcının seçmesinin kısıtlandığı seçenek';
$string['privacy:metadata:allocationform_disallow:userid'] = 'Kullanıcı kısıtlanıyor';
$string['processedmode'] = 'İşlenmiş';
$string['processmode'] = 'İşleme';
$string['queued_for_processing'] = 'İşleme formu işlenmeyi bekliyor... lütfen daha sonra tekrar gelin.';
$string['readymode'] = 'Aktif';
$string['reprocess'] = 'Yeniden işlemeye zorla';
$string['reprocess_warning'] = 'Bu işlem mevcut tüm dağıtımları silecektir';
$string['requirechoice'] = 'Seçim gerektir';
$string['resetstate'] = 'Düzenleme durumuna sıfırla';
$string['restrict'] = 'kısıtla';
$string['restrictionsexceeded'] = '{$a->users} kullanıcıları için uygulanabilir kısıtlamaların sayısını aştınız. Kullanıcı başına en az {$a->numberofchoices} kullanılabilir seçenek gereklidir.';
$string['restrictionsmodified'] = 'Kısıtlamalar güncellendi.';
$string['reviewmode'] = 'gözden geçir';
$string['roleselect'] = 'Atanacak rol';
$string['roleselect_help'] = 'Form kullanılarak kurstaki kullanıcılara atanacak rollerini seçin.';
$string['saved'] = 'Seçimleriniz kaydedildi.';
$string['savefail'] = 'Seçimleriniz Moodle\'a kaydedilemedi';
$string['search:activity'] = 'Atama formu - etkinlik bilgileri';
$string['show_allocations'] = 'Dağıtımları kullanılabilir hale getir';
$string['slots'] = 'Atanacak alan sasıyı';
$string['startdate'] = 'Başlangıç tarihi';
$string['startdate_help'] = 'Kullanıcıların dağıtımlarını seçebilecekleri en erken zaman.';
$string['statechanged'] = 'Durum değişti';
$string['statechangefailed'] = 'Durum değiştirilemedi';
$string['trackcompletion'] = 'Bu etkinliği tamamlamak için seçim gönderimi mi gerekiyor?';
$string['unallocated'] = 'Atanmamış';
$string['youralloactions'] = 'Size atanan:';
