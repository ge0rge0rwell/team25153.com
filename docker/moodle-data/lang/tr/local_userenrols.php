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
 * Strings for component 'local_userenrols', language 'tr', version '5.0'.
 *
 * @package     local_userenrols
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ERR_CREATE_GROUP'] = 'Satır %u: \'%s\' grubu oluşturulamadı \\n';
$string['ERR_ENROLL_FAILED'] = 'Satır %u: \'%s\' kullanıcı kimliği için rol ataması oluşturulamadı \\n';
$string['ERR_ENROLL_META'] = 'Satır %u: \'%s\' kullanıcı kimliği için mevcut metacourse kaydı yok';
$string['ERR_GROUP_MEMBER'] = 'Satır %u: \'%s\' kullanıcısı \'%s\' grubuna eklenemiyor \\n';
$string['ERR_INVALID_GROUP_ID'] = '%u grup kimliği bu ders için geçersiz. \\n';
$string['ERR_NO_MANUAL_ENROL'] = 'Kurs Manuel Kayıt eklentisinin etkin olması gerekir.';
$string['ERR_NO_META_ENROL'] = 'Kursun \'Kurs meta bağlantı\' eklentisinin etkin olması gerekir.';
$string['ERR_PATTERN_MATCH'] = 'Satır %u: \'%s\' satır içeriğini ayrıştıramadı  \\n';
$string['ERR_USERID_INVALID'] = 'Satır %u: Geçersiz kullanıcı kimliği değeri \'% s\' \\n';
$string['ERR_USER_MULTIPLE_RECS'] = 'Satır %u: Kullanıcı kimliği değeri \'%s\' benzersiz değil. Birden fazla kayıt bulundu \\n';
$string['HELP_PAGE_IMPORT'] = 'Kayıtları & Grup Atamalarını İçe Aktar';
$string['HELP_PAGE_IMPORT_help'] = '<p>
Ayrılmış bir metin dosyasından (csv veya txt) kullanıcı kayıtlarını dersi almak için bu ders içe aktarma eklentisini kullanın. Yeni kullanıcı hesapları oluşturulmayacağından, giriş dosyasında listelenen kullanıcıların her birinin sitede ayarlanmış bir hesabı olması gerekir. <br />
<br />
Bir grup adı herhangi bir kullanıcı kaydına (satır) sahipse, o kullanıcı varsa o gruba eklenecektir. Gerekirse isteğe bağlı olarak yeni gruplar oluşturabilirsiniz.
</p>

<ul>
   <li> İçe aktarma dosyasının her satırı bir kaydı gösterir </li>
   <li> Her kayıt; kullanıcı adı, e-posta adresi veya id numarası gibi en az bir kullanıcı adı alanı içermelidir. </li>
   <li> Her kayıt, virgül, noktalı virgül veya sekme karakteri ile ayrılmış ek bir grup adı alanı içerebilir. </li>
   <li> Bu kullanıcıların atandığı rol seçilebilir, ancak dersin varsayılan rolü için varsayılan olmalıdır. </li>
   <li> Alanların herhangi biri ya da hiçbiri alıntı içeremez ve bir noktalı virgül veya virgül içeriyorsa grup adı alanının olması gerekir </li>
   <li> İçe aktarma dosyasındaki boş satırlar atlanacaktır </li>
   <li> Not: Bir kullanıcı derse zaten kaydolduysa, bu kullanıcının kaydında herhangi bir değişiklik yapılmaz (yani, rol değişikliği yapılmaz). </li>
</ul>

<p>
Metacourses hakkında bir not: Bu eklenti, kaydın alt derslerden birinde yapılması gerektiğinden, kullanıcı kayıtlarını bir meta kaynağa aktarmaz. Ancak, belirtilen kullanıcı kimliği zaten bir alt dersin kaydı yoluyla metacourse ile ilişkilendirildiğinde, grup atamaları yapacak ve gerekirse gruplar oluşturacaktır.
</p>

<h3>Örnekler</h3>

İç idnumber numarası ve grup
<pre>
2144323548;Salı Laboratuvarı
2144323623
2144323647;Çarşamba Laboratuvarı
2144323638;Çarşamba Laboratuvarı
</pre>

E-mail adresleri
<pre>
smith-john@university.edu
janedoe@university.edu, "Honors"
alan.jones@university.edu, "HonorsPlus"
</pre>

Kullanıcı adları (grup alanı sekme(tab) karakteriyle ayrılmış)
<pre>
johnsonf    "Sunum, Birinci Grup"
samsel    Ten O\'Clock Testi
</pre>';
$string['IMPORT_MENU_LONG'] = 'Kayıtları İçe Aktar';
$string['IMPORT_MENU_SHORT'] = 'İçe Aktar';
$string['INF_IMPORT_SUCCESS'] = 'Kullanıcı kaydı içe aktarma başarılı';
$string['INF_METACOURSE_WARN'] = '<b>UYARI</b>: Kayıtları doğrudan bir meta derse (metacourse) aktaramazsınız. Bunun yerine, alt derslerden birine kayıt yapın.<br /> <br />';
$string['LBL_ENROLL_OPTIONS'] = 'Kayıt Seçenekleri';
$string['LBL_FILE_OPTIONS'] = 'Dosyayı İçe Aktar';
$string['LBL_FILE_OPTIONS_help'] = 'Kullanıcı ve isteğe bağlı grup bilgileri içeren ayrılmış bir veri dosyası yükleyin veya bir depodan seçin. Dosya bir .txt veya .csv uzantısına sahip olmalıdır.';
$string['LBL_GROUP'] = 'Gruplara ata:';
$string['LBL_GROUP_CREATE'] = 'Grup oluştur:';
$string['LBL_GROUP_CREATE_help'] = 'İçe aktarma dosyasındaki gruplar mevcut değilse, gerektiği şekilde yenileri oluşturun, aksi takdirde kullanıcıları yalnızca belirtilen grup adı zaten varsa o gruplara atayın.';
$string['LBL_GROUP_ID'] = 'Grup kullan:';
$string['LBL_GROUP_ID_help'] = 'Varsa giriş dosyasındaki grup adını kullanmayı seçin veya mevcut bir grubu seçin ve giriş verilerini yoksayın.';
$string['LBL_GROUP_OPTIONS'] = 'Grup Seçenekleri';
$string['LBL_GROUP_help'] = 'Dosyaya veya seçilen bir gruba göre grup atamaları yapın.';
$string['LBL_IDENTITY_OPTIONS'] = 'Kullanıcı kimliği';
$string['LBL_IMPORT'] = 'İçe Aktar';
$string['LBL_IMPORT_TITLE'] = 'CSV Kayıt Dosyasını İçe Aktar';
$string['LBL_NO_GROUP_ID'] = 'Dosya verilerini kullan';
$string['LBL_NO_ROLE_ID'] = 'Kayıt Yok';
$string['LBL_ROLE_ID'] = 'Rol:';
$string['LBL_ROLE_ID_help'] = 'İçe aktarılan kullanıcıların derste hangi rolü almasını istiyorsunuz. Eğer \'Kayıt Yok\' ise, sadece grup atamaları yapılır.';
$string['LBL_USER_ID_FIELD'] = 'Kullanıcı Alanı:';
$string['LBL_USER_ID_FIELD_help'] = 'Kullanıcı kaydındaki hangi alanın içe aktarma dosyasının ilk sütununda temsil edildiğini belirtin.';
$string['VAL_INVALID_FORM_DATA'] = 'Geçersiz form veri gönderimi.';
$string['VAL_INVALID_SELECTION'] = 'Geçersiz seçim';
$string['VAL_NO_FILES'] = 'İçe aktarılacak dosya seçilmedi';
$string['pluginname'] = 'Kayıtları ve Grupları İçe Aktar';
$string['privacy:no_data_reason'] = 'Kayıtları ve Grupları İçe Aktar eklentisi herhangi bir kişisel veriyi saklamaz.';
