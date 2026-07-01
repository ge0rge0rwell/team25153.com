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
 * Strings for component 'local_sandbox', language 'tr', version '5.0'.
 *
 * @package     local_sandbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adjustcoursestartdate'] = 'Kurs başlangıç tarihini ayarla';
$string['adjustcoursestartdate_desc'] = 'Kursun yedekleme dosyasında kaydedilen tarihe ayarlamak yerine, kurs başlangıç tarihini bugüne ayarlayın.';
$string['coursebackups'] = 'Kurs yedeklemeleri';
$string['coursebackups_desc'] = 'Kursu geri yüklemek için kullanmak üzere kurs yedekleme dosyalarını içeren .mbz dosyalarını buraya yükleyin. Bu dosya alanındaki kurs yedekleme dosyaları, uygun ders kısa adıyla adlandırılmalı ve .mbz dosya adı uzantısına sahip olmalıdır. Ayrıntılar için README dosyasına bakın.';
$string['coursebackupsheading'] = 'Kurs yedeklemeleri';
$string['cronrunday'] = 'Yürütme günleri';
$string['cronrunday_desc'] = 'Bu günlerde  deneme alanın derslerini geri yükle';
$string['cronruntime'] = 'Yürütme vakti';
$string['cronruntime_desc'] = 'Günün Bu vaktinde sandbox derslerini geri yükle';
$string['cronruntimeheading'] = 'Yürütme vakti';
$string['cronruntimescheduledtasksactivate'] = 'Varsayılan olarak, sanal alanın zamanlanmış görevi "Zamanlanmış görevler" sisteminde devre dışıdır. Bu eklentiyi kullanmak için orada etkinleştirmeniz gerekiyor.';
$string['cronruntimescheduledtasksmanagement'] = 'Moodle çekirdeği "Zamanlanmış görevler" adlı bir sistemi desteklemektedir. deneme alanı eklentisinin yürütme süresi ayarları "Zamanlanmış görevler" sisteminde yapılandırılmıştır.';
$string['cronruntimescheduledtasksstandardtime'] = 'Varsayılan olarak, deneme alanı zamanlanmış görevi, pazar günleri saat 1: 00\' GMT de "Zamanlanmış görevler" sisteminde çalışacak şekilde ayarlanmıştır. Lütfen bu saati ihtiyaçlarınıza göre değiştirin.';
$string['emailsubjecterror'] = 'HATA: Deneme alanı';
$string['emailsubjectnotice'] = 'BİLDİRİM: Deneme alanı';
$string['emailsubjectwarning'] = 'UYARI: Deneme alanı';
$string['errorlastcronerror'] = 'HATA: Son deneme alanı yürütme zaman damgası veri tabanından alınamadı, çıkılıyor ...';
$string['eventcourserestored'] = 'Kurs geri yüklendi';
$string['eventcourserestored_desc'] = 'Kurs \'{$a}\' önceden tanımlanmış kurs durumuna geri yüklendi';
$string['exitingnoneed'] = 'Deneme alanı derslerini şimdiye kadar geri yüklemeye gerek yok, bir sonraki cron çalışma zamanını bekleyelim, çıkalım ...';
$string['keepcourseid'] = 'Kurs kimliğini sakla
 ';
$string['keepcourseid_desc'] = 'Varsayılan olarak, ders yedekleme dosyalarından bir dersi geri yüklerken tamamen güvenli olmak için deneme alanının dersini siler ve yeni bir tane oluşturur. Geri yüklenen ders yeni bir ders kimliğine sahip olacaktır. Bu ayar etkinleştirildiğinde, korumalı alan mevcut dersi korumaya geçer ve ders içeriğini ders yedekleme dosyalarından geri yüklemeden önce yalnızca mevcut ders içeriğini siler. Geri yüklenen ders daha sonra aynı ders  kimliğine sahip olacaktır.
 ';
$string['noticedaysnotconfigured'] = 'DİKKAT: Deneme alanı yürütme günleri yapılandırılmadı, bu nedenle çıkılacak bir şey yok ...';
$string['noticenocoursebackups'] = 'DİKKAT: Deneme alanının herhangi bir ders yedeği içermez, bu yüzden yapacak bir şey yok, çıkılıyor ...';
$string['noticerestorecount'] = 'DİKKAT: Deneme alanı {$a} dersini geri yüklendi';
$string['notifyheading'] = 'Bildirimler';
$string['notifylevel'] = 'E-posta Eşiği';
$string['notifylevel_desc'] = 'E-posta bildirimleri yalnızca bilgilendirilmek istediğiniz etkinlikler için gönderilecektir. Ne bildirilmek istersiniz?';
$string['notifyonerrors'] = 'İçin e-posta başarısızlıkları';
$string['notifyonerrors_desc'] = 'Sandbox hataları oluşursa, e-posta bildirimleri gönderilebilir. Bu bildirimleri kim görmeli?';
$string['nowprocessing'] = 'ŞİMDİ: İşleme dersi "{$a}"';
$string['pluginname'] = 'Deneme alanı';
$string['privacy:metadata'] = 'Deneme alan eklentisi, Moodle yöneticilerine genişletilmiş işlevsellik sağlar, ancak herhangi bir kişisel veri depolamaz.';
$string['restoreheading'] = 'Ayarları eski haline getir';
$string['restoresettingsdescription'] = 'Moodle\'daki genel geri yükleme ayarlarına ve bir kursu manuel olarak geri yüklerken göreceğiniz geri yükleme ayarlarına benzer şekilde, deneme alanı derslerini geri yüklemek için ayrıntıları burada yapılandırabilirsiniz.';
$string['restoresettingswarning'] = 'Deneme alanının, yüklenen ders yedeklemesinin yapılandırılan ayarlarla uyumlu olup olmadığını doğrulamadığını lütfen unutmayın. Lütfen yalnızca deneme alanı ile gerçekten geri yüklemek istediğiniz ayarları kontrol ettiğinizden emin olun. Korumalı alanı gözetimsiz çalıştırmadan önce ayarlarınızı doğru şekilde test edin. Yalnızca tüm kurs yedekleme dosyalarınızın uyduğu geri yükleme ayarlarını etkinleştirdiğinizden emin olun, aksi takdirde sanal alanın kurs yedekleme dosyalarını geri yüklemeye çalıştığında oldukça nazikçe başarısız olma riskini alırsınız.';
$string['skippingadjuststartdatefailed'] = 'UYARI: Kurs "{$a}" ders başlangıç tarihi ayarlamasında başarısız oldu, dosya atlandı ...';
$string['skippingcreatefailed'] = 'UYARI: Kurs "{$a}" oluşturulma sırasında başarısız oldu, dosya atlandı ,...';
$string['skippingdbupdatefailed'] = 'UYARI: Bu dersin ders veritabanı güncelleme başarısız oldu "{$a}" dosyası atlandı, ...';
$string['skippingdeletecontentfailed'] = 'UYARI: "{$a}" dersindeki mevcut ders içeriğinin silinmesi başarısız oldu (kısmen veya tamamen), dosya atlanıyor ...';
$string['skippingdeletionfailed'] = 'UYARI: Varolan "{$a}" dersinin silinmesi (kısmen veya tamamen) başarısız oldu, dosya atlandı ...';
$string['skippingnocourse'] = 'UYARI: "{$a}" kısaltmasıyla hiçbir mevcut ders yoktur, dosya atlandı ...';
$string['skippingrestorefailed'] = 'UYARI: Kurs geri yüklenmesi "{$a}" dersi başarısız oldu, dosyayı atlandı ...';
$string['skippingunzipfailed'] = 'UYARI: "{$a}" yedek dosyasının sıkıştırılmaması başarısız oldu, dosyayı atlandı ...';
$string['successrestored'] = 'BAŞARILI: "{$a}" kursu geri yüklendi';
$string['taskrestorecourses'] = 'Deneme alanı derslerini geri yükleyin';
$string['upgrade_notice_2014051200'] = '<strong>YÜKSELTME NOTU:</strong> Deneme alanı eklentisinin bu güncellemesi, Moodle\'ın zamanlanmış görev sistemi için destek ekler. Eklentinin yürütme zamanı ayarları, zamanlanmış görevler sistemine <strong>taşınmayacaktır</strong>. Eklentinin zamanlanmış görevi bu yükseltmeden sonra devre dışı bırakılır ve yürütme süresi eklentinin varsayılan değerine ayarlanır, eklentiyi ihtiyaçlarınıza göre yapılandırmak ve yeniden etkinleştirmek için lütfen Moodle\'ın planlanmış görev ayarlarını kontrol edin.';
$string['upgrade_notice_2018020902'] = '<strong>YÜKSELTME BİLDİRİMİ:</strong> Kurs yedekleme dosyaları Moodle içindeki yeni dosya alanına taşındı. Eski Kurs yedekleri dizinini {$a} şimdi silebilirsiniz. Daha fazla yükseltme talimatı için README dosyasına bakın.';
