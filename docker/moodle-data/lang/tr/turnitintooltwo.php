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
 * Strings for component 'turnitintooltwo', language 'tr', version '5.0'.
 *
 * @package     turnitintooltwo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor_help'] = 'Bu ayar, herhangi bir dosya türünün gönderilmesine izin verecektir. Bu seçenek "Evet" olarak ayarlandığında, gönderimler mümkün olduğunda benzerlik açısından kontrol edilecek, gönderimler indirilebilecek ve mümkün olduğunda GradeMark geri bildirim araçları kullanılabilecektir.';
$string['checkagainstnote'] = 'Not: Aşağıdaki "Şuna göre kontrol et..." seçeneklerinden en az biri için "Evet"i seçmezseniz, bir Benzerlik raporu OLUŞTURULMAZ.';
$string['close'] = 'Kapat';
$string['closebutton'] = 'Kapat';
$string['course'] = 'Kurs';
$string['courseiderror'] = 'Kurs Kimliği hatalı';
$string['coursemisconfigured'] = 'Kurs yanlış yapılandırılmış';
$string['coursemodidincorrect'] = 'Kurs Modülü Kimliği hatalıydı';
$string['coursemodincorrect'] = 'Kurs modülü hatalı';
$string['coursetitle'] = 'Kurs Başlığı';
$string['createcourse'] = 'Yeni Moodle Kursu Oluştur';
$string['createmoodlecourses'] = 'Kursları Yeniden Oluşturun';
$string['defaultcoursetiititle'] = 'Turnitin\'den Kurs';
$string['downloadexport'] = 'Dışa aktar';
$string['downloadgradexls'] = 'Orijinal biçimiyle dışa aktar';
$string['edit'] = 'Düzenle';
$string['exportexcel'] = 'Excel dosyası olarak dışa aktar';
$string['exportoriginal'] = 'Orijinal dosya olarak işaretle';
$string['exportpdf'] = 'PDF olarak dışa aktar';
$string['genimmediately2'] = 'Raporları hemen oluşturun (öğrenciler son tarihe kadar yeniden gönderebilir): {$a->num_resubmissions} yeniden gönderimden sonra, raporlar {$a->num_hours} saat sonra oluşturulur';
$string['linkcourse'] = 'Kursu mevcut Moodle Kursuna bağlama';
$string['migration_event_desc'] = 'Turnitin Aracı V1 Kursu: {$a->v1_name} ({$a->v1_cm_id}), Turnitin V2\'ye ({$a->v2_cm_id}) taşındı.';
$string['migrationcoursecreatederror'] = '{$a} kursu yeniden oluşturuldu ancak bağlantı kaydedilirken bir hata oluştu';
$string['migrationcoursecreateerror'] = '{$a} kursu Moodle\'da oluşturulamadı';
$string['moduleversion'] = 'Sürüm';
$string['no'] = 'Hayır';
$string['reportgenspeed_help'] = 'Bu ödev ayarı için üç seçenek vardır: "Raporları hemen oluştur (yeniden gönderimlere izin verilmez)", "Raporları hemen oluştur (yeniden gönderimlere teslim tarihine kadar izin verilir)" ve "Raporları teslim tarihinde oluştur (yeniden gönderimlere son tarihe kadar izin verilir)" \'<br /><br />\'Raporları hemen oluştur (yeniden gönderimlere izin verilmez)\' seçeneği, bir öğrenci gönderim yaptığında hemen Benzerlik Raporu oluşturur.  Bu seçenek seçildiğinde, öğrencileriniz ödevi yeniden gönderemezler.<br /><br />Yeniden gönderimlere izin vermek için \'Hemen rapor oluştur (yeniden gönderimlere teslim tarihine kadar izin verilir)\' seçeneğini belirleyin.  Bu, öğrencilerin teslim tarihine kadar ödev için ödevleri sürekli olarak yeniden göndermelerine olanak tanır.  Yeniden gönderimler için Benzerlik Raporlarının işlenmesi 24 saati bulabilir.<br /><br />\'Raporları teslim tarihinde oluştur (yeniden gönderimlere teslim tarihine kadar izin verilir)\' seçeneği, yalnızca ödevin teslim tarihinde bir Benzerlik Raporu oluşturur .  Bu ayar, Benzerlik Raporları oluşturulduğunda ödeve gönderilen tüm ödevlerin birbiriyle karşılaştırılmasını sağlar.';
$string['reportgenspeed_resubmission'] = 'Bu ödev için zaten bir makale gönderdiniz ve gönderiminiz için bir Benzerlik Raporu oluşturuldu.  Bildirinizi yeniden göndermeyi seçerseniz, önceki gönderiminiz değiştirilecek ve yeni bir rapor oluşturulacaktır.  {$a->num_resubmissions} yeniden gönderimden sonra, yeni bir Benzerlik Raporu görmek için yeniden gönderimden sonra {$a->num_hours} saat beklemeniz gerekecek.';
$string['savecourseenddate'] = 'Yeni kurs bitiş tarihini kaydet';
$string['saveusage'] = 'Veri Dökümünü Kaydet';
$string['searchcourses'] = 'Kursları ara';
$string['selectcourse'] = 'Moodle Kursu Seçin';
$string['selectcoursecategory'] = 'Kurs kategorisi seç';
$string['studentfirstname'] = 'İsim';
$string['studentlastname'] = 'Soy isim';
$string['submitted'] = 'Gönderilen';
$string['tiimiscsettings'] = 'Çeşitli Eklenti Ayarları';
$string['title'] = 'Başlık';
$string['turnitinanon'] = 'Anonim Değerlendirme';
$string['turnitinanon_help'] = 'Bu değeri Evet olarak ayarlayarak Turnitin ödevinizi Anonim İşaretleme kullanacak şekilde yapılandırabilirsiniz. Bir gönderim yapıldıktan sonra anonim işaretleme devre dışı bırakılamaz.';
$string['turnitinuseanon'] = 'Anonim Değerlendimeyi Kullan';
$string['turnitinuseanon_desc'] = 'Gönderimlere not verirken Anonim değerlendirmeye izin verilip verilmeyeceğini seçin.<br /><i>(Bu, yalnızca hesapları için Anonim değerlendirme yapılandırılmış olanlar tarafından kullanılabilir)</i>';
$string['updatepart'] = 'Bölümü Güncelle';
$string['user'] = 'Kullanıcı';
$string['yes'] = 'Evet';
$string['yesgrades'] = 'Evet, benzerlik puanlarını ve notlarını otomatik olarak yenile';
