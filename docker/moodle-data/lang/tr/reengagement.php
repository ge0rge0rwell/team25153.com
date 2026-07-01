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
 * Strings for component 'reengagement', language 'tr', version '5.0'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Bu etkinlik tamamlandı olarak işaretlendi';
$string['afterdelay'] = 'Gecikmeden sonra';
$string['completeattimex'] = 'Bu etkinlik {$a} tarihinde tamamlanacaktır';
$string['completion'] = 'Tamamlama';
$string['completiontime'] = 'Tamamlanma süresi';
$string['completionwillturnon'] = 'Bu aktiviteyi kursta eklemenin etkinliğin tamamlanmasını sağlayacağını unutmayın.';
$string['crontask'] = 'Yeniden cron görevi';
$string['cronwarning'] = 'Reengagment zamanlanmış görevi son 8 saat içinde çalıştırılmadı - Cron, Reenagagements\'ın düzgün çalışmasına izin verecek şekilde yapılandırılmalıdır.';
$string['days'] = 'Günler';
$string['duration'] = 'Süre';
$string['duration_help'] = '<p> Yenileme süresi, bir kullanıcı yeniden birleşmeye başlamış ve bitmiş olarak işaretlenmiş arasındaki süredir.
Yeniden alma süresi bir dönem uzunluğu (örneğin Haftalar) ve dönem sayısı (örn. 7) olarak belirtilir. </p>

<p> Bu örnek, bir yeniden üyelik dönemi başlatan bir kullanıcının şu anda 7 hafta süresince rekabet olarak işaretleneceği anlamına gelir. </p>';
$string['emailcontent'] = 'E-posta içeriği (Kullanıcı)';
$string['emailcontent_help'] = 'Modül bir kullanıcıya bir e-posta gönderdiğinde, bu alanın e-posta içeriğini alır.';
$string['emailcontentdefaultvalue'] = 'Bu, %coursename% adresinden gelen bir hatırlatma e-postasıdır.';
$string['emailcontentmanager'] = 'E-posta içeriği (Yönetici)';
$string['emailcontentmanager_help'] = 'Modül bir kullanıcı yöneticisine bir e-posta gönderdiğinde, e-posta içeriğini bu alandan alır.';
$string['emailcontentmanagerdefaultvalue'] = 'Bu, kullanıcı %userfirstname% %userlastname% ile ilgili %coursename% adresinden gelen bir hatırlatma e-postasıdır.';
$string['emailcontentthirdparty'] = 'E-posta içeriği (Üçüncü taraf)';
$string['emailcontentthirdparty_help'] = 'Modül bir üçüncü tarafa bildirimde bulunduğunda, bildirim içeriğini bu alandan alır.';
$string['emailcontentthirdpartydefaultvalue'] = 'Bu, kullanıcı %userfirstname% %userlastname% ile ilgili %coursename% adresinden gelen bir hatırlatma e-postasıdır.';
$string['emaildelay'] = 'E-posta gecikmesi';
$string['emaildelay_help'] = 'Modül e-posta kullanıcılarına "gecikmeden sonra" ayarlandığında, bu ayar gecikmenin ne kadar süreceğini kontrol eder.';
$string['emailrecipient'] = 'E-posta alıcıları';
$string['emailrecipient_help'] = 'Kullanıcının kursla yeniden etkileşimde bulunmasını istemek için bir e-posta gönderilmesi gerektiğinde, bu ayar kullanıcıya, yöneticisine veya her ikisine bir e-postanın gönderilip gönderilmediğini denetler.';
$string['emailsubject'] = 'E-posta konusu (Kullanıcı)';
$string['emailsubject_help'] = 'Modül bir kullanıcıya bir e-posta gönderdiğinde, e-posta konusu bu alandan alınır.';
$string['emailsubjectmanager'] = 'E-posta konusu (Yönetici)';
$string['emailsubjectmanager_help'] = 'Modül bir kullanıcı yöneticisine bir e-posta gönderdiğinde, e-posta konusu bu alandan alınır.';
$string['emailsubjectthirdparty'] = 'E-posta konusu (Üçüncü taraf)';
$string['emailsubjectthirdparty_help'] = 'Modül bir üçüncü tarafa bildirimde bulunduğunda, bildirim içeriğini bu alandan alır.';
$string['emailtime'] = 'E-posta zamanı';
$string['emailuser'] = 'E-posta kullanıcısı';
$string['emailuser_help'] = 'Etkinlik kullanıcıları ne zaman bilgilendirmelidir: <ul>
<li> Asla: Kullanıcıları belgilendirme. </li>
<li> Yeniden etkileşim tamamlandığında: Yeniden etkileşim etkinliği tamamlandığında kullanıcıyı bilgilendir.</li>
<li>Belirli bir süre sonra: Kullanıcıyı, modülü başlattıktan belirli bir süre sonra bilgilendir.</li>
</ul>';
$string['frequencytoohigh'] = 'Ayarladığınız gecikme süresiyle birlikte maksimum hatırlatma sayısı {$a} \'dır.';
$string['hours'] = 'Saatler';
$string['introdefaultvalue'] = 'Bu bir tekrarlanma etkinliği. Amacı, onu önceleyen faaliyetler ile onu izleyen faaliyetler arasında zaman kaybı uygulamaktır.';
$string['minutes'] = 'Dakikalar';
$string['modulename'] = 'Yeniden Yapılanma';
$string['modulenameplural'] = 'Yeniden Yapılanmalar';
$string['never'] = 'Asla';
$string['noemailattimex'] = 'Hedef etkinliği tamamladığınız için {$a} için planlanan mesaj gönderilmeyecek';
$string['nosuppresstarget'] = 'Hedef etkinlik seçilmedi';
$string['oncompletion'] = 'Yeniden yapılandırma tamamlandıktan sonra';
$string['periodtoolow'] = 'Gecikme çok düşük - en az 5 dakika olmalı.';
$string['pluginname'] = 'Yeni yükümlülükler';
$string['receiveemailattimex'] = 'Mesaj {$a} üzerine gönderilecek.';
$string['receiveemailattimexunless'] = 'Hedef etkinliği tamamlamadığınız sürece {$a} tarihinde mesaj gönderilecektir.';
$string['reengagement'] = 'yeni yükümlülükler';
$string['reengagement:addinstance'] = 'Yeni yükümlülük: eklentisi';
$string['reengagement:editreengagementduration'] = 'Yeni yükümlülük süresini düzenle';
$string['reengagement:startreengagement'] = 'Yeni Yükümlülüklere  Başla';
$string['reengagementduration'] = 'Yeni yükümlülük süresi';
$string['reengagementfieldset'] = 'Yeni yükümlülük ayrıntıları';
$string['reengagementintro'] = 'Yeni yükümlülük tanıtımı';
$string['reengagementname'] = 'Yeni yükümlülük adı';
$string['reengagementsinprogress'] = 'Devam Eden yeni yükümlülükler';
$string['remindercount'] = 'Hatırlatma sayısı';
$string['remindercount_help'] = 'Bu, her gecikme süresinden sonra bir e-postanın kaç kez gönderildiği sayısıdır. Kullanabileceğiniz değerlerin bazı sınırları vardır <ul>
<li> 24 saatten az - 2 hatırlatma sınırı. </li>
<li> 5 günden az - 10 hatırlatma sınırı. </li>
<li> 15 günden az - 26 hatırlatma sınırı. </li>
<li> 15 gün içinde - maksimum 40 hatırlatma sınırı. </li> </ul>';
$string['search:activity'] = 'Yeni yükümlülük- etkinlik bilgileri';
$string['suppressemail'] = 'Hedef etkinlik tamamlandıysa e-postayı önleyin';
$string['suppressemail_help'] = 'Bu seçenek, etkinliğe, adlandırılmış etkinliğin tamamlandığı yerlerde kullanıcılara e-postaları engelleme talimatı verir.';
$string['suppresstarget'] = 'Hedefi etkinlik.';
$string['suppresstarget_help'] = 'Hatırlatma e-postasını göndermeden önce hangi etkinliğin tamamlanıp tamamlanmadığını seçmek için bu açılır listeyi kullanın.';
$string['thirdpartyemails'] = 'Üçüncü taraf alıcılar';
$string['thirdpartyemails_help'] = 'Kullanıcı bildirim yaptığında bildirim alması gereken üçüncü tarafların e-posta adreslerinin virgülle ayrılmış bir listesi.';
$string['userandmanager'] = 'Kullanıcı ve Yönetici';
$string['weeks'] = 'Haftalar';
