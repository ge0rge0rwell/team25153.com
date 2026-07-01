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
 * Strings for component 'childcourse', language 'tr', version '5.0'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Erişimde otomatik kaydol';
$string['autoenrol_help'] = 'Etkinleştirildiğinde, bu etkinlik üzerinden açtıklarında kullanıcıyı otomatik olarak alt kursa kaydedecektir. Kayıtlar, izlenebilir ve daha sonra güvenli bir şekilde geri alınabilir olmaları için özel bir Manuel kayıt örneği kullanılarak oluşturulur (kaldırma politikası). Devre dışı bırakılırsa, eklenti kullanıcıları otomatik olarak kaydetmeye çalışmayacaktır.';
$string['childcourse'] = 'Alt kurs';
$string['childcourse:addinstance'] = 'Yeni bir alt kurs etkinliği ekle';
$string['childcourse:manage'] = 'Alt kurs ayarlarını yönet';
$string['childcourse:sync'] = 'Alt kurs notunu ve tamamlanmayı senkronize et';
$string['childcourse:view'] = 'Alt kurs etkinliğini görüntüle';
$string['childcourse_help'] = 'Bu etkinlikle ilişkilendirilecek kursu seçin. Bu seçim, tüm kural özel ayarlarını (gruplar, tamamlanma kuralları, etkinlik seçiciler, not senkronizasyonu) kontrol eder. Etkinlik kaydedildikten sonra, alt kurs eşleşmeleri ve senkronizasyon geçmişi tutarlı kalması için değiştirilemez hale gelir.';
$string['childcoursenotset'] = 'Alt kurs ayarlanmadı.';
$string['completionmissing'] = 'Alt kurs tamamlanması etkinleştirilmemiş.';
$string['completionrule'] = 'Alt kursa dayalı tamamlanma kuralı';
$string['completionrule_allactivities'] = 'Takip edilen aktivitelerin %100\'ü tamamlandığında tamamlanır';
$string['completionrule_coursecompleted'] = 'Alt kurs tamamlandığında tamamlanır';
$string['completionrule_help'] = 'Bu etkinliğin, kullanıcının çocuk kursundaki ilerlemesine dayalı olarak otomatik olarak tamamlandığını nasıl belirlediğini tanımlar.

- Hiçbir işlem yapma: Bu etkinliğin tamamlanması, çocuk kursunun tamamlanmasıyla ilişkili değildir.
- Çocuk kursu tamamlandığında: Çocuk kursu tamamlandığında, bu etkinlik de tamamlanır.
- İzlenen aktivitelerin %100\'ü tamamlandığında: Çocuk kursundaki takip edilen tüm aktivitelerin tamamlanması gerekir.';
$string['completionrule_none'] = 'Hiçbir işlem yapma';
$string['enrolinstancename'] = 'Alt kurs bağlantısı #{$a}';
$string['error_manualenrolnotavailable'] = 'Manuel kayıt eklentisi mevcut değil.';
$string['grade_approval'] = 'Notu gönder';
$string['grade_approval_no'] = 'Not gönderme';
$string['grade_approval_yes'] = 'Notu alt kurstan kullan';
$string['gradebookmissing'] = 'Alt kurs not defteri yapılandırılmadı (kurs toplamı eksik).';
$string['hideinmycourses'] = 'Kurslarım\'da alt kursu gizle';
$string['hideinmycourses_help'] = 'Etkinleştirildiğinde, bu etkinlik aracılığıyla kaydolmuş kullanıcıların Kurslarım menüsünde alt kurs görünmez olur. Bu, bu kursta gezinmeyi güçlendirir. Bu ayar yalnızca bu eklenti tarafından izlenen kullanıcıları etkiler.';
$string['inheritgroups'] = 'Ana kurstan grupları miras al';
$string['inheritgroups_help'] = 'Etkinleştirildiğinde eklenti, ana kurstaki kullanıcıların grup üyeliklerini çocuk kursuna kopyalamaya çalışır; grup adlarına göre eşleşir. Çocuk kursunda mevcut olmayan bir grup adı varsa, oluşturulabilir. Bu, otomatik kaydolma sırasında uygulanır. Daha sonra özel bir yeniden senkronizasyon rutini uygulamazsanız sürekli bir senkronizasyon değildir.';
$string['keeprole'] = 'Rolü koru (estudante/teacher)';
$string['keeprole_help'] = 'Etkinleştirildiğinde, eklenti basitleştirilmiş bir rol dengesini sürdürmeye çalışır: Ana kurstaki öğretmen düzeyindeki yeteneklere sahip kullanıcılar öğretmen olarak kaydedilir (editingteacher/teacher mevcut olduğunda); aksi takdirde estudante olarak. Bu, özel roller veya karmaşık rol atamalarını kopyalamaz.';
$string['label_childcourse'] = 'Alt kurs';
$string['label_lastsynccompletion'] = 'Son tamamlanma senkronizasyonu';
$string['label_lastsyncgrade'] = 'Son not senkronizasyonu';
$string['lastsync'] = 'Son senkronizasyon';
$string['lockedcoursewarning'] = 'Kaydedildikten sonra alt kurs değiştirilemez.';
$string['manage_header_actions'] = 'İşlemler';
$string['manage_header_name'] = 'İsim';
$string['missingcourse'] = 'Eksik kurs';
$string['modulename'] = 'Alt kurs';
$string['modulenameplural'] = 'Alt kurslar';
$string['never'] = 'Asla';
$string['nogroup'] = 'Grup yok';
$string['openchildcourse'] = 'Çocuk kursunu aç';
$string['opennewtab'] = 'Yeni sekmede aç';
$string['opennewtab_help'] = 'Etkinleştirildiğinde, düğme çocuk kursunu yeni bir sekmede açacaktır. Bu, kayıt veya senkronizasyon davranışını değiştirmez; yalnızca kullanıcı için kursun açılma şeklini etkiler.';
$string['pluginadministration'] = 'Çocuk kursu yönetimi';
$string['pluginname'] = 'Çocuk kursu';
$string['privacy:metadata:childcourse_map'] = 'Bağlı kurs etkinliği tarafından oluşturulan eşleşme verilerini güvenli kayıttan çıkarmayı ve denetim için saklar.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'Bağlanan çocuk kursunun kimliği.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'Bağlı kurs etkinliği örneğinin kimliği.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'Eklenti tarafından atanan çocuk kurs grubu kimliklerinin listesi (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Eklentinin My derslerimde çocuk kursunu gizle tercihini ayarlayıp ayarlamadığını belirtir.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'Kullanıcıyı kaydettirmek için eklenti tarafından kullanılan kayıt örneğinin kimliği.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'Etkinliğin bulunduğu ana kursun kimliği.';
$string['privacy:metadata:childcourse_map:roleid'] = 'Çocuk kursunda eklenti tarafından atanan papelin kimliği.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'Bağlantı ile kaydolunduğu zaman.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'Eşleşme kaydının son değiştirilme zaman damgası.';
$string['privacy:metadata:childcourse_map:userid'] = 'Bağlantı üzerinden kaydolan kullanıcının kimliği.';
$string['privacy:metadata:childcourse_state'] = 'Kullanıcı başına önbelleğe alınmış durumu saklar ve artımlı not ve tamamlanma senkronizasyonunu destekler.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'Bağlı kurs etkinliği örneğinin kimliği.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Kullanıcı için tamamlanma kuralının yerine getirildiğini gösteren önbelleğe alınmış gösterge.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Artımlı senkronizasyon için kaynak tamamlanma verisinin son değiştirilme zaman damgası.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Çocuk kursu toplamından senkronize edilen not (yüzde) önbelleğe alınmıştır.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Not kaynağının tanımlayıcısı (örn. course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Artımlı senkronizasyon için kaynak not öğesinin son değiştirilme zaman damgası.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'Önbelleğe alınmış durum satırının son değiştirilme zamanı.';
$string['privacy:metadata:childcourse_state:userid'] = 'Kullanıcı kimliği.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'My derslerimde bir çocuk kursunu gizlemek için kullanılan kullanıcı tercihi (varsayılan tercih adı: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Çocuk kursu ayarları';
$string['syncdone'] = 'Senkronizasyon tamamlandı.';
$string['syncnow'] = 'Şimdi senkronize et';
$string['targetgroup'] = 'Gruba kaydol';
$string['targetgroup_help'] = 'Seçili ise, otomatik kaydolma sırasında kullanıcı bu özel gruba çocuk kursunda eklenir. Grup çocuk kursunda mevcut olmalıdır. Ayrıca \'Ana kurstan grupları miras al\' etkinse, her iki davranış da uygulanır (seçili grup ile miras alınan gruplar).';
$string['unenrolaction'] = 'Bağlantı kaldırıldığında';
$string['unenrolaction_help'] = 'Bu etkinlik tarafından oluşturulan kayıtlara ne olacağını, bağlı etkinlik silindiğinde kontrol eder. "Unenrol" yalnızca bu etkinlik tarafından oluşturulan kayıtları kaldırır (eşleşim tablosunda izlenir). "Keep enrolments" kullanıcıları çocuk kursunda kayıtlı bırakır.';
$string['unenrolaction_keep'] = 'Kayıtları sürdür';
$string['unenrolaction_unenrol'] = 'Bu bağlantı ile kaydolmuş kullanıcıları kayıttan çıkar';
