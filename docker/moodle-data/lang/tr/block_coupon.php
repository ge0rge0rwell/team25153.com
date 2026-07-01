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
 * Strings for component 'block_coupon', language 'tr', version '5.0'.
 *
 * @package     block_coupon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coursegrouping:edit'] = 'Gruplandırmayı düzenle';
$string['cleanup:confirm:confirmmessage'] = 'Evet, bu seçeneklerle kuponları silmek istiyorum';
$string['close'] = 'Kapat';
$string['cohort'] = 'topluluk';
$string['coupon:send:fail'] = 'E-posta gönderilemedi!  Nedeni: {$a}';
$string['coupon:type:cohort'] = 'Topluluk kaydı';
$string['coupon:type:course'] = 'Kurs kaydı';
$string['coupon:type:coursegrouping'] = 'Kurs grupu kaydı';
$string['coupon_mail_csv_content'] = 'Sevgili ##to_gender## ##to_name##, <br /><br />

Yakın zamanda ##course_fullnames## eğitimimize kaydoldunuz.
Kurs sırasında Çevrimiçi Öğrenme Ortamımıza erişebilirsiniz: ##site_name##.<br /><br />

Bu ortamda, kurs materyallerinin dışında, diğer öğrencilerle ağ kurma olanağına sahip olacaksınız.
Kurs bir takım hazırlık ödevleriyle başlayacak, bunlara bir göz atmanızı rica ederiz.
Kurs başlamadan en geç 3 (iş) günü önce.
Hem siz hem de öğretmen kursa uygun şekilde hazırlanabilirsiniz.<br /><br />

Tüm kurs materyalleri, kurs başlamadan en geç 4 gün önce sizin için erişilebilir olacaktır.
Öğretmenin daha sonra ilave materyaller eklenmesini istediği her zaman olabilir, örneğin
fiziksel bir seanstan sonra.  Böyle bir durumda, bunu öğrenme ortamında görebileceksiniz.
Toplantılar sırasında size herhangi bir basılı ders materyali verilmeyecektir, dizüstü bilgisayar ve/veya tablet getirmenizi tavsiye ederiz.<br /><br />

Kaydolmak için gereken kupon kodu: ##submission_code##<br/><br/>

Bu kupon kişisel ve benzersizdir ve eğitiminiz için uygun kurslara erişim sağlar.
Lütfen kupon üzerindeki açıklamaları dikkatlice okuyunuz.<br /><br />

Hesap oluşturmayla ilgili herhangi bir sorunuz varsa veya başka bir sorunla karşılaşırsanız, yardım masasıyla iletişime geçebilirsiniz.
Bilgi, Öğrenme Ortamımızda bulunabilir.
Sorunuzu yanıtlayacak kimse olmadığında, lütfen adınızı, e-posta adresinizi ve telefon numaranızı bırakın, size şu şekilde geri döneceğiz:
en kısa sürede.<br /><br />

Derste bol şans dileriz.<br /><br />

Saygılarımla, <br /><br />

##site adı##';
$string['coupon_mail_csv_content_cohorts'] = 'Sevgili ##to_gender## ##to_name##, <br /><br />

Kısa süre önce eğitimimize kaydoldunuz **LÜTFEN ELLE DOLDURUN**.
Kurs sırasında Çevrimiçi Öğrenme Ortamımıza erişebilirsiniz: ##site_name##.<br /><br />

Bu ortamda, ders materyallerinin dışında, diğer öğrencilerle ağ kurma olanağına sahip olacaksınız.
Kurs bir takım hazırlık ödevleriyle başlayacak, bunlara bir göz atmanızı rica ederiz.
Kurs başlamadan en geç 3 (iş) günü önce.
Hem siz hem de öğretmen kursa uygun şekilde hazırlanabilirsiniz.<br /><br />

Tüm kurs materyalleri, kurs başlamadan en geç 4 gün önce sizin için erişilebilir olacaktır.
Öğretmenin daha sonra ilave materyaller eklenmesini istediği her zaman olabilir, örneğin
fiziksel bir seanstan sonra.  Böyle bir durumda, bunu öğrenme ortamında görebileceksiniz.
Toplantılar sırasında size herhangi bir basılı ders materyali verilmeyecektir, dizüstü bilgisayar ve/veya tablet getirmenizi tavsiye ederiz.<br /><br />

Kaydolmak için gereken kupon kodu: ##submission_code##<br/><br/>

Bu kupon kişisel ve benzersizdir ve eğitiminiz için uygun kurslara erişim sağlar.
Lütfen kupon üzerindeki açıklamaları dikkatlice okuyunuz.<br /><br />

Hesap oluşturmayla ilgili herhangi bir sorunuz varsa veya başka bir sorunla karşılaşırsanız, yardım masasıyla iletişime geçebilirsiniz.
Bilgi, Öğrenme Ortamımızda bulunabilir.
Sorunuzu yanıtlayacak kimse olmadığında, lütfen adınızı, e-posta adresinizi ve telefon numaranızı bırakın, size şu şekilde geri döneceğiz:
en kısa sürede.<br /><br />

Derste bol şans dileriz.<br /><br />

Saygılarımla, <br /><br />

##site adı##';
$string['coupon_mail_extend_content'] = 'Sevgili ##to_gender## ##to_name##, <br /><br />

##course_fullnames## eğitimimize kaydoldunuz ve süre uzatımı verlmiştir.
Çevrimiçi Öğrenme Ortamımıza zaten erişiminiz var: ##site_name##.<br /><br />
Süre uzatımınız ##extensionperiod##.<br /><br />

Kursa erişimi uzatmak için kuponu ekte bulacaksınız.  Bu kupon kişisel ve benzersizdir ve eğitiminiz için uygun kurslara erişimi genişletir.
Lütfen kupon üzerindeki açıklamaları dikkatlice okuyunuz.<br /><br />

Herhangi bir konu ile ilgili herhangi bir sorunuz varsa, yardım masasıyla iletişime geçebilirsiniz.
Bilgi, Öğrenme Ortamımızda bulunabilir.
Sorunuzu yanıtlayacak kimse olmadığında, lütfen adınızı, e-posta adresinizi ve telefon numaranızı bırakın, size şu şekilde geri döneceğiz:
en kısa sürede.<br /><br />

Saygılarımla, <br /><br />

##site adı##';
$string['coupon_notification_content'] = '<p>İstediğiniz kupon(lar) oluşturuldu<br/>
Oluşturulan kuponları indirme bağlantısını içeren bir e-posta almış olmalısınız.<br/>
{$a->indirme bağlantısını}</p> tıklayarak kuponlarınızı doğrudan indirmeyi de seçebilirsiniz.';
$string['coupons_generated'] = '<p>Kuponlarınız oluşturuldu.<br/>
Oluşturulan kuponları indirme bağlantısını içeren bir e-posta almış olmalısınız.<br/>
{$a}</p> düğmesini tıklayarak kuponlarınızı doğrudan indirmeyi de seçebilirsiniz.';
$string['coursegrouping'] = 'Kurs gruplaması';
$string['coursegrouping-details'] = 'Kurs gruplama ayrıntıları';
$string['delete:coursegrouping:successmsg'] = 'Kurs grubu başarıyla silindi';
$string['delete:requestuser:confirmmessage'] = 'Evet, bu kullanıcıyı silmek istiyorum';
$string['error:validate-courses'] = 'Kurs doğrulama hataları:';
$string['label:cohort'] = 'Topluluk';
$string['label:coupon_cohorts'] = 'Topluluk(lar)';
$string['label:coupon_courses'] = 'Kurs(lar)';
$string['label:mailusers'] = 'Seçilen kurs katılımcılarına e-posta yoluyla kupon gönderin.';
$string['label:personalsendpdf_help'] = 'Etkinleştirilirse bu, kişisel alıcılara kupon gönderirken PDF\'yi içerecektir.<br/>
Bu devre dışı bırakıldığında, kişisel kupon alıcılarının e-postasında bir kupon kodu alanı/şablon değişkeni <i>olması gerektiğini</i> unutmayın.<br/>
Bu şablon değişkeni eksikse ve PDF gönderilmezse, alıcı hangi kupon kodunu gireceğini bilemez.';
$string['label:type_course'] = 'Kurs kaydı';
$string['label:type_coursegrouping'] = 'Kurs gruplaması (kaydolmak için Y kurslarından X\'ini seçin)';
$string['name'] = 'Adı';
$string['recipient:none'] = 'Hiçbiri';
$string['report:cohorts'] = 'Topluluk';
$string['report:heading:cohortname'] = 'Topluluk(lar)';
$string['report:heading:coursename'] = 'Kurs adı';
$string['report:heading:coursetype'] = 'Kurs türü';
$string['report:status_completed'] = 'Kurs tamamlandı';
$string['report:status_not_started'] = 'Kurs henüz başlamadı';
$string['report:status_started'] = 'Kurs başladı';
$string['required:atleastonecohortorcourse'] = 'En az bir kurs veya topluluk gereklidir!';
$string['saveandclose'] = 'Kaydet ve kapat';
$string['saveandcontinue'] = 'Kaydet ve devam et';
$string['savechangespreview'] = 'Değişiklikleri kaydetme ve önizleme';
$string['savetemplate'] = 'Şablonu kaydet';
$string['str:request:cohortcoupons'] = 'Topluluk kuponları iste';
$string['tab:wzcoupongroupings'] = 'Kurs gruplamalarını yönet';
$string['th:cohorts'] = 'Topluluk';
$string['th:course'] = 'Kurs';
$string['topleft'] = 'Sol üst';
$string['topright'] = 'Sağ üst';
$string['view:coursegroupings:admin:heading'] = 'Kurs gruplamalarını yönet';
$string['view:coursegroupings:admin:title'] = 'Kurs gruplamaları';
