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
 * Strings for component 'block_demostudent', language 'tr', version '5.0'.
 *
 * @package     block_demostudent
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adviceforfirstuse'] = 'DemoStudent hesabı oluşturmak, DemoStudent adlı bir kullanıcıyı kaydeder
                             kursunuza. Daha sonra test etmek için DemoStudent\'ınız olarak oturum açabilirsiniz.
                             kursunuzdaki farklı öğrenci deneyimleri.';
$string['adviceforinstructor'] = 'Bu kursta bir DemoStudent hesabı oluşturulmuştur.
                               DemoStudent hesabına geçmek şunları yapmanıza olanak tanır: <blockquote>
                               <ul><li>Kursunuzu öğrenci olarak görüntüleyin
                                   <li>Grup üyeliğine göre grup kısıtlamalarını test edin
                                   <li>Öğrencilerinizin gördüklerini tam olarak deneyimlemek için etkinlikleri test edin
                               </ul></blockquote>';
$string['advicetwowindows'] = '<p>Her ikisi de Moodle\'ın oturum açtığı iki tarayıcı,<br>
                               Biri Eğitmen, diğeri DemoStudent ikizi,<br>
                               Sonsuz anahtarlama lanetini önleyecek<br>
                               Bir bakıştan diğerine, ileri geri.';
$string['buttonfordemostudent'] = '<b>Eğitmen</b> rolüme dön';
$string['buttonforfirstuse'] = 'DemoStudent Oluşturun';
$string['buttonforinstructor'] = 'DemoStudent\'e geç';
$string['buttonforunenrol'] = 'Unenrol DemoStudent';
$string['demostudent'] = 'DemoStudent Görünümü';
$string['demostudent:addinstance'] = 'Yeni bir DemoStudent bloğu ekleyin (yalnızca eğitmenler için).';
$string['demostudent:seedemostudentblock'] = 'DemoStudent bloğuna bakın (eğitmenler ve DemoStudents için).';
$string['errorfailedtocreateuser'] = '<hr><h4>HATA:</h4><b>{$a}</b> kullanıcısı oluşturulamadı. Özgünüm.';
$string['errorinstructormasquerade'] = '<hr><h4>HATA:</h4> DemoStudent hesabı kursu şu şekilde görüntüleyemez:
                                        eğitmen. <p>Lütfen tekrar giriş yapın.<hr>';
$string['errormissingaddinstancecapability'] = '<hr><h4>HATA:</h4> Sahip olmalısınız
                                                <i>block/demostudent: addinstance</i> oluşturma yeteneği
                                                bir DemoStudent hesabı. <p>Lütfen bir yönetici kontrolü yaptırın
                                                Rolünüz ve yetenekleriniz.<p>Lütfen tekrar giriş yapın.<hr>';
$string['errorremovenotinstructor'] = '<hr><h4>HATA:</h4> Yalnızca bir eğitmen kendi DemoStudent\'ını kaldırabilir.<p>Lütfen tekrar giriş yapın.<hr>';
$string['pluginname'] = 'DemoStudent bloğu';
$string['privacy:metadata'] = 'Demo öğrenci bloğu, GDPR uyumlu olacak şekilde yapılandırılmamış.';
$string['returntocourse'] = '<p>Kursa <a href="{$a}">geri dönün</a>.';
$string['roledemostudentdescription'] = 'Eğitmenlerin kurslarını test etmeleri için DemoStudent bloğu aracılığıyla oluşturulan hesaplara atanan rol.';
$string['roledemostudentname'] = 'DemoStudent';
$string['switchfromdemostudentview'] = 'Eğitmen görünümüne dönün. Tekrar giriş yapmanız gerekebilir.';
$string['switchfromfirstuseview'] = 'Bu kursa DemoStudent oluşturun ve kaydolun.';
$string['switchfrominstructorview'] = 'Kursu DemoStudent olarak görüntüleyin.';
$string['unenroltip'] = 'DemoStudent\'i bu kurstan kaldırın.';
$string['viewisdemostudent'] = 'Şu anda <b>DemoStudent</b> görünümünü görüyorsunuz.';
$string['viewisfirstuse'] = 'Şu anda <b>Eğitmen</b> görünümünü görüyorsunuz.';
$string['viewisinstructor'] = 'Şu anda <b>Eğitmen</b> görünümünü görüyorsunuz.';
$string['warningcoursenotvisible'] = '<hr><h4>Bu kurs öğrencilere açık değildir.</h4>
                                      Eğitmenler bunu değiştirmek için kurs ayarlarını düzenleyebilir. <hr>';
$string['warningmissingrole'] = '<hr><h4>UYARI:</h4> Veritabanında "demostudent" rolü bulunamadı.
                                 Bu, DemoStudnet bloğunun beklenmedik davranışına neden olabilir.
                                 Lütfen bir yöneticiden sistem rollerini doğrulamasını isteyin,
                                 ve gerekirse eklentiyi yeniden yükleyin.<hr>';
