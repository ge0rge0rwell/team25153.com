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
 * Strings for component 'dmelearn', language 'tr', version '5.0'.
 *
 * @package     dmelearn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Erişim engellendi';
$string['alwaysopen'] = 'Daima açık';
$string['blankentry'] = 'Boş girdi';
$string['daysavailable'] = 'Kullanılabilir günler';
$string['dmelearn'] = 'DM e-Öğrenme';
$string['dmelearn:addentries'] = 'Digital Media e-Öğrenme girdileri ekleyin';
$string['dmelearn:addinstance'] = 'Digital Media e-Öğrenme örneklerini ekleyin';
$string['dmelearn:manageentries'] = 'Digital Media e-Öğrenme girişlerini yönetin';
$string['dmelearncoursepath'] = 'Digital Media e-Öğrenme Kursu';
$string['dmelearncoursepath_help'] = 'Lütfen açılır menüden bir ders seçin. <br/> <br/><em> Bu liste, bu Moodle Eklentisinin erişebildiği tüm dersleri görüntüler. İstediğiniz ders listede yoksa lütfen Digital Media ile iletişime geçin. </em>';
$string['dmelearnmail'] = '{$a->teacher} Sizinle ilgili bazı geri bildirimler yayınladı.
Digital Media e-Öğrenme girişi için \'{$a->ELMO}\'

Digital Medya e-Öğrenme girişinize eklenmiş olduğunu görebilirsiniz:

    {$a->url}';
$string['dmelearnmailhtml'] = '{$a->teacher}Sizinle ilgili bazı geri bildirimler yayınladı.
Digital Media e-Öğrenme girişi için \'<i>{$a->ELMO}</i>\'<br /><br />
 <a href="{$a->url}">Digital Medya e-Öğrenim girişi</a>.';
$string['dmelearnname'] = 'DM e-Öğrenme Moodle Etkinlik Adı';
$string['dmelearnname_help'] = 'Lütfen Digital Media e-Öğrenme dersi için bir ad girin, bu Moodle Etkinliğinin başlığı olacaktır.';
$string['dmelearnpreventearlierthanyear'] = 'Dersin bu yıldan daha önce   tamamlanması durumunda zorla yenileyin!';
$string['dmelearnpreventearlierthanyear_help'] = 'Ör. 2016\'yı seçerseniz, 2015 yılında veya daha önce tamamlanan herhangi bir ders bu etkinlikle senkronize edilmez. Kullanıcı bu etkinlik içerisinde derse başlamadan önce sıfırlama yapması gerekecek. <br> Not: "X ay sonra sıfırlama zorunluluğu" ayarı seçiliyse, yoksayılır.';
$string['dmelearnquestion'] = 'Digital Media e-Öğrenme Sorusu';
$string['dmelearnsetting'] = 'Digital Media e-Öğrenme ayarları';
$string['dmelearnsetting_URL'] = 'ELMO API URL\'si';
$string['dmelearnsetting_URL_help'] = '"/" Ile biten ELMO Bitiş noktası URL\'si. Http://example.com.au/';
$string['dmelearnsetting_appname'] = 'ELMO uygulama adı';
$string['dmelearnsetting_appname_help'] = 'Bu Moodle için özel olarak oluşturulan uygulamanın adı';
$string['dmelearnsetting_desc'] = 'Lütfen bağlanmak istediğiniz Digital Media e-Öğrenim sağlayıcınızın (ELMO API) yöneticileri tarafından sağlanan kimlik bilgileri ile aşağıdaki formu doldurun.';
$string['dmelearnsetting_public_key'] = 'ELMO genel anahtarı';
$string['dmelearnsetting_public_key_help'] = 'Size verilen açık anahtar';
$string['dmelearnsetting_secret_key'] = 'ELMO gizli anahtarı';
$string['dmelearnsetting_secret_key_help'] = 'Size verilen gizli anahtar';
$string['dmelearntimeframemonths'] = 'Sonra sıfırlamaya zorla X Ay Önce  <br> (0 = Kurs sonlandırma limitleri yok)';
$string['dmelearntimeframemonths_help'] = 'Bu seçenekler, DM e-Öğrenme dersini belirli bir süre önce (muhtemelen başka bir web sitesi veya Moodle üzerinden) tamamlayan kullanıcıların, tamamlama yüzdelerini bu etkinliklerle birlikte Moodle Notu ile senkronize etmelerini önlemek için vardır.
<br> <br> Kullanıcıların tamamlama tarihi burada ayarlanan ay miktarından daha büyükse, derslerini sıfırlamaları ve ders değerlendirmelerini en baştan tamamlaması gerekir. <br> <br> Eğer buna ihtiyacınız yoksa Özelliği, bu alanı 0 olarak ayarlayın.';
$string['editingended'] = 'Dönem düzenleme sona erdi';
$string['editingends'] = 'Dönem düzenleme bitiyor';
$string['elmo'] = 'ELMO';
$string['entries'] = 'Girdiler';
$string['feedbackupdated'] = '{$a} girdiler için geri bildirim güncellendi';
$string['mailsubject'] = 'Digital Media e-Öğrenme geri bildirimi';
$string['mfinstructions'] = '<style>.mf-instruct{color:#2ca02c;font-weight:bold;}</style><div><span class="mf-instruct">Instructions:</span>
Moodle Kursunuzdaki bir etkinliğe bir DM e-Öğrenim dersi ekleyin.
<ol><li>Aşağıdaki açılır listeden bir DM e-Öğrenme dersi seçin.</li><li>OPTİONAL: DM e\'de % 100 tamamlandıktan sonra bir derse erişmesine izin vereceğiniz ay sayısını girin. Öğrenme Süresinin dolması durumunda, kullanıcılar erişim sağlamadan önce rotayı ve Moodle notunu sıfırlamalıdırlar. (DEFAULT: 0 =  ders bitiş sınırları yok).</li><li>Moodle Etkinliği için bir ad sağlayın.</li><li>Seçiminizi kaydedin.</li></ol></div>';
$string['mfnocourse'] = 'Açılır menüdeki derslerden birini seçmelisiniz.';
$string['mfnocourses'] = '<style>.mf-info{color: # e32f0b; font-weight: bold;} </style><div><span class = "mf-info">Bilgi:</span>DM e-Learning sunucusu herhangi mevcut bir dersi döndürmedi. Lütfen yardım için  Digital Media ile iletişime geçin.</div><br/>';
$string['mfselectcourse'] = 'Lütfen bir ders seçiniz ...';
$string['mftfwrong'] = 'Tamamlanmış bir kursun yeniden başlatılmasına gerek kalmadan erişilebileceği 0 ya da bir kaç ay girmeniz gerekir.';
$string['modulename'] = 'DM e-Öğrenme';
$string['modulename_help'] = 'Bu Digital Media e-Öğrenme etkinlik modülü, Digital Media e-Öğrenme sitesinden e-Öğrenme kurslarının Moodle\'a yüklenmesini sağlar.<br> <br> Bu siteden bir ders yüklemek için etkinlik modülünün yöneticileri tarafından sağlanan bir anahtarı kullanarak siteler API\'si aracılığıyla bağlanması gerekir';
$string['modulenameplural'] = 'DM e-Öğrenme modülleri';
$string['newdmelearnentries'] = 'Yeni Digital Media e-Öğrenme girdileri';
$string['noentriesmanagers'] = 'Öğretmen yok';
$string['noentry'] = 'Girdi yok';
$string['noratinggiven'] = 'Hiçbir değerlendirme verilmedi';
$string['notopenuntil'] = 'Bu Digital Media e-Öğrenme değin açık olmayacak';
$string['notstarted'] = 'Bu  Digital Media e-Öğrenmeyi henüz başlatmadınız.';
$string['overallrating'] = 'Genel değerlendirme';
$string['pluginadministration'] = 'DM e-Öğrenim yönetimi';
$string['pluginname'] = 'Digital Media e-Öğrenme';
$string['rate'] = 'Oran';
$string['removeentries'] = 'Tüm girdileri kaldır';
$string['saveallfeedback'] = 'Tüm geribildirimleri kaydet';
$string['showoverview'] = 'Moodle\'ımda Digital Media e-Öğrenme genel bakışını göster';
$string['showrecentactivity'] = 'Son etkinliği göster';
$string['startoredit'] = 'Dijital Medya e-Öğrenim kaydını başlatın veya düzenleyin';
$string['viewallentries'] = '{$a}  Digital Media e-Öğrenim girdilerini görüntüle.';
$string['viewentries'] = 'Girdileri görüntüle';
