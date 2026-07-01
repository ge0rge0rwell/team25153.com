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
 * Strings for component 'tool_coursearchiver', language 'tr', version '5.0'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Son erişim tarihi';
$string['accessbefore'] = 'Son giriş öncesi';
$string['course_skipped'] = '{$a->fullname}, önümüzdeki {$a->optoutmonths} ay(lar) için atlanacak.  Teşekkür ederim.';
$string['coursearchiver'] = 'Kurs Arşivi';
$string['coursearchiver_help'] = 'Şu ölçütleri kullanarak kursları arayın: kısa ad, tam ad, kimlik numarası, kurs kimliği, kursa son erişim tarihi veya *boş kurslar.\\n
 Kurslar zaten gizliyse gri olarak gösterilir.  Kurs *boş bir kurssa, kursun tam adı bir çizgiyle gösterilir.\\n\\n
 NOT: Son erişim araması, yalnızca sağlanan tarihten önce oluşturulmuş kursları döndürür.\\n
 NOT: Bulunan e-posta adreslerinin miktarı, gönderilen e-postalardan farklı olabilir.  Bunun 2 nedeni var.  \\N
    1. Halihazırda gizli olan bir kurs, kursun gizli olarak seçilmesi durumunda sahip(ler)i bilgilendirmek için bir e-posta göndermez.\\n
    2. Birden çok kurs altında görünen tek bir adres, tek bir e-postada birleştirilecek.\\n\\n
 *boş dersler, not defterinde 0 ödev, 0 kaynak, 0 kategori ve not defterinde 0 not öğesi olarak tanımlanır.';
$string['coursearchiver_settings'] = 'Kurs Arşivi Ayarları';
$string['coursearchiverpath'] = 'Arşivlenmiş kursları depolamak için klasör yolu';
$string['coursearchiverpath_help'] = 'Bu yol/adres Moodle\'ın $CFG->dataroot \'a göredir';
$string['coursearchiverpreview'] = 'Kursların önizlemesini yükleyin.';
$string['coursearchiverresult'] = 'Kursların sonuçlarını yükleyin';
$string['coursedeleted'] = 'Kurs silindi';
$string['coursedeletionnotallowed'] = 'Kursun silinmesine izin verilmiyor';
$string['coursefullname'] = 'Kursun tam adı';
$string['courseid'] = 'Kurs kimliği';
$string['courseidnum'] = 'Kursun kimlik numarası';
$string['courseselector'] = 'Kurs arama sonucu';
$string['courseshortname'] = 'Kursun kısa adı';
$string['courseteacher'] = 'Öğretmen kullanıcı adı/e-postası';
$string['createdafter'] = 'Sonra oluşturulmuş';
$string['createdbefore'] = 'Önce oluşturulmuş';
$string['createdbeforeafter'] = 'Önce / Sonra Oluşturuldu';
$string['crontask'] = 'Ders arşivi silme işi';
$string['delete'] = 'Kursları Sil';
$string['deletedarchiveemails'] = 'Öğretmen e-posta adresleri';
$string['deselectall'] = 'Hepsinin Seçimini Kaldır';
$string['email'] = 'E-posta Gönder';
$string['emailselector'] = 'E-posta almak için seçilen kullanıcılar.';
$string['empty'] = 'boş';
$string['emptycourse'] = 'Boş Kurs';
$string['emptyonly'] = 'Sadece boş dersleri döndür';
$string['endafter'] = 'Sonra biter';
$string['endbefore'] = 'Daha önce biter';
$string['error_key'] = 'Güvenlik anahtarı doğru değil.';
$string['error_nocourseid'] = 'Kurs kaydı bir kimlik taşımıyor';
$string['error_savepointid'] = 'Kaydetme noktası bulunamadı';
$string['errorarchivefile'] = 'Kurs arşiv dosyası bulunmuyor.';
$string['errorarchivepath'] = 'Arşiv yolu/adresi oluşturulamadı';
$string['errorarchivingcourse'] = 'Kurs : ({$a->id}) {$a->fullname} arşivlenemedi.';
$string['errorbackup'] = 'Yedekleme İşlemi Başarısız.';
$string['errordeletingcourse'] = 'Kurs : ({$a->id}) {$a->fullname} silinemedi.';
$string['erroremptysearch'] = 'Arama kriterleri belirtilmedi.';
$string['errorhidingcourse'] = 'Kurs : ({$a->id}) {$a->fullname} gizlenemedi.';
$string['errorinsufficientdata'] = 'Bu işlemi gerçekleştirmek için yeterli bilgi yok.';
$string['errormissingcourses'] = 'E-posta şablonunda %courses (dersler) değişkeni eksikti. Bu listede o dersler yer almaktadır.';
$string['errormissingto'] = 'E-posta şablonunda %to (kime/alıcı) değişkeni eksikti. Bu listede o alıcı isimleri yer almaktadır.';
$string['errornoform'] = 'Form verilmedi/belirtilmedi.';
$string['errornonnumericid'] = 'Kurs kimliği rakamlardan oluşmalıdır';
$string['errornonnumerictimestamp'] = 'Zaman damgası sayısal olmalıdır (UNIX zaman damgası)';
$string['erroroptoutcourse'] = 'Kurs: ({$a->ıd}) {$a->fullname} devre dışı bırakılamadı.';
$string['errors'] = 'Hatalar';
$string['errors_count'] = 'Hatalar: {$a}';
$string['errorsendingemail'] = 'E-posta gönderimi başarısız : {$a->firstname} {$a->lastname} ({$a->email})';
$string['errorvalidarchive'] = 'Geçerli bir yedekleme dosyası değil.';
$string['hidden'] = 'saklı';
$string['hide'] = 'Kursları Gizle';
$string['hideemail'] = '"Gizlenecek Kurslar" E-postası Gönder.';
$string['hidewarningemailsetting'] = 'Kurs Gizlemede Varsayılan Uyarı E-postası.';
$string['hidewarningemailsetting_help'] = 'Bu, gizlenmek üzere seçilen bir kursun tüm öğretmenlerine gönderilecek bir e-postanın içeriğidir.';
$string['hidewarningemailsettingdefault'] = '%to

Vermiş olduğunuz aşağıdaki Moodle kurs(lar)ının yakında gizleneceğini size bildirmek isteriz.
Bu, halen kursa kayıtlı olan öğrencilerin artık kurslara erişiminin olmayacağı anlamına gelmektedir.  Aşağıdaki kurslardan biri için bu süreçten çıkmak istiyorsanız, lütfen kursun yanındaki bağlantıya tıklayın.
%courses

Teşekkürler.';
$string['hidewarningsubject'] = 'Uyarı: Kurslar yakında gizlenecektir.';
$string['ignoreadmins'] = 'Yönetici Erişimlerini Yoksay';
$string['ignoresiteroles'] = 'Site Rolü Erişimlerini Yoksay';
$string['includesubcat'] = 'Kursları alt kategorilere dahil edin';
$string['invalidmode'] = 'Araç için geçerli bir mod verilmedi.';
$string['messageprovider:courseowner'] = 'Kurs arşivleme / gizleme aracından bildirimler.';
$string['never'] = 'Asla';
$string['nocoursesfound'] = 'Arama sonucunda 0 kurs bulundu.';
$string['nocoursesselected'] = 'Bu işlemi gerçekleştirmek için en az 1 kurs seçmiş olmanız gerekir.';
$string['noticecoursehidden'] = 'Kurs: ({$a->ıd}) {$a->fullname} zaten gizlenmişti.';
$string['notices'] = 'Bildirimler';
$string['notices_count'] = 'Uyarılar: {$a}';
$string['nousersfound'] = 'Bildirilecek kurs sahibi yok';
$string['nousersselected'] = 'Bu işlemi gerçekleştirmek için en az 1 kullanıcının seçilmiş olması gerekir.';
$string['optout'] = 'Kurslardan Ayrılma';
$string['optoutarchive'] = 'Bu kursu arşivleme';
$string['optoutby'] = 'Talep Eden';
$string['optouthide'] = 'Bu kursu gizleme';
$string['optoutleft'] = '{$a} gün kaldı';
$string['optoutlist'] = 'Devre Dışı Bırakma Listesini Yönet';
$string['optoutmonthssetting'] = 'Kurs devre dışı Bırakma sürekliliği';
$string['optoutmonthssetting_help'] = 'Devre dışı bırakma her kurs için kaç ay geçerli olacak?';
$string['optouttime'] = 'Kalan zaman';
$string['outaccess'] = 'Son erişim';
$string['outemail'] = 'Eposta';
$string['outfirstname'] = 'Adı';
$string['outfullname'] = 'Ad Soyad';
$string['outid'] = 'Kimlik Numarası';
$string['outidnumber'] = 'Kimlik Nuarası';
$string['outlastname'] = 'Soyadı';
$string['outowners'] = 'Kurs Sahipleri';
$string['outselected'] = 'Seçilen';
$string['outshortname'] = 'Kısa adı';
$string['outuse'] = 'Son Kullanım';
$string['pluginname'] = 'Kurs Arşivi';
$string['privacy:metadata'] = 'Eklenti, kullanıcı verilerini içermez.';
$string['processarchiving'] = 'Seçilen derslerin arşivlenmesi';
$string['processcomplete'] = 'İşlem Tamamlandı';
$string['processdeleting'] = 'Seçilen dersler siliniyor';
$string['processemailing'] = 'E-posta Gönderme';
$string['processhiding'] = 'Seçilen dersleri gizle';
$string['processoptout'] = 'Seçilen kursları devre dışı bırak';
$string['processstarted'] = 'Süreç çoktan başlatıldı';
$string['recover'] = 'Kurtarma Kursları';
$string['results'] = 'Sonuçlar';
$string['results_archive'] = 'Arşivlenen kurslar: {$a}';
$string['results_archiveemail'] = 'Gönderilen kurs arşivi uyarı e-postalarının sayısı: {$a}';
$string['results_courselist'] = 'Listelenen kurslar: {$a}';
$string['results_delete'] = 'Silinen kurslar: {$a}';
$string['results_getemails'] = 'Toplanan e-posta adresleri: {$a}';
$string['results_hide'] = 'Gizli kurslar: {$a}';
$string['results_hideemail'] = 'Gönderilen gizli kurs uyarı e-postaları: {$a}';
$string['results_optout'] = 'Devre dışı bırakılan kurslar: {$a}';
$string['resume'] = 'Devam et';
$string['resumenone'] = 'Kayıt bulunamadı.';
$string['resumeselect'] = 'Kayıt noktası seç.';
$string['save'] = 'Kayıt Noktası Oluştur.';
$string['saved'] = 'Kayıt noktası oluşturuldu';
$string['saveddate'] = 'Oluşturulma tarihi';
$string['savelimitsetting'] = 'Seçim listesinde gösterilen kayıt noktalarını sınırlayın.';
$string['savelimitsetting_help'] = 'Açılır listenin içinde kaç tane kayıt noktası gösterilecek.';
$string['savepoint_removed'] = 'Kaydetme noktası kaldırıldı';
$string['savestatelist'] = 'Kaydetme Noktası Listesini Yönet';
$string['search'] = 'Kurs ara';
$string['selectall'] = 'Tümünü Seç';
$string['startafter'] = 'Sonra başlar';
$string['startbefore'] = 'Önce başlar';
$string['startend'] = 'Başlangıç / Bitiş Tarihleri';
$string['status'] = 'Durum';
$string['step2savetitle'] = '{$a} ders listesini kaydet';
$string['step3savetitle'] = '{$a} e-posta listesini kaydet';
$string['unknownerror'] = 'İşlem, işlemin yeniden başlatılmasını gerektiren bir hata ile sonuçlandı.';
$string['visible'] = 'görülebilir';
