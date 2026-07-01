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
 * Strings for component 'report_customsql', language 'tr', version '5.0'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Yeni bir kategori ekle';
$string['addcategorydesc'] = 'Bu roparun kategorisini değiştirmek için, bu raporu düzenlemeniz gerekir. Burada, kategori metinleri düzenleyebilir,  kategoriyi silebilir veya yeni bir kategori ekleyebilirsiniz.';
$string['addreport'] = 'Yeni bir kategori ekle';
$string['addreportcategory'] = 'Rapor için yeni bir kategori ekle';
$string['anyonewhocanveiwthisreport'] = 'Bu raporu herkes görebilir (Rapor / customsql: view)';
$string['archivedversions'] = 'Bu sorgunun Arşivlenen versiyonları';
$string['at'] = 'de';
$string['automaticallydaily'] = 'Günlük olarak planlanmış';
$string['automaticallymonthly'] = 'Her ayın ilk günü olarak planlanmış';
$string['automaticallyweekly'] = 'Her haftanın ilk günü olarak planlanmış';
$string['availablereports'] = 'Talebe bağlı sorgular';
$string['availableto'] = '{$a}\'de kullanılabilir';
$string['backtoreportlist'] = 'Sorgu listesine dön';
$string['categorycontent'] = '({$a->manual} talep üzerine,  {$a->daily} günlük, haftalık {$a->weekly}, {$a->monthly} aylık)';
$string['categoryexists'] = 'Bu isim kullanılıyor, kategorisi ismi benzersiz olmalıdır.';
$string['categorynamex'] = 'Kategori: {$a}';
$string['changetheparameters'] = 'Parametreleri değiştir.';
$string['customdir'] = 'CSV raporunu yola / dizine aktar';
$string['customsql:definequeries'] = 'Özel sorgu tanımlayın';
$string['customsql:managecategories'] = 'Özel kategori tanımlayın';
$string['customsql:view'] = 'Özel sorgu raporlarını görüntüleyin';
$string['dailyheader'] = 'Günlük';
$string['dailyheader_help'] = 'Bu sorgular günün belli bir zamanında çalıştırılmak üzere planlanmıştır.  Daha önceki sorgu sonuçlarını görmek için bağlantıya tıklayınız.';
$string['defaultcategory'] = 'Çeşitli';
$string['delete'] = 'Sil';
$string['deleteareyousure'] = '<p>Bu sorguyu silmek istediğinizden emin misiniz? </p>';
$string['deletecategoryareyousure'] = '<p> Herhangi bir sorgu içermeyen </p><p>Bu kategoriyi silmek istediğinizden emin misiniz? </p>';
$string['deletecategoryyesno'] = '<p>Bu kategoriyi silmek istediğinizden  emin misiniz? </p>';
$string['description'] = 'Açıklama';
$string['displayname'] = 'Sorgu adı';
$string['displaynamerequired'] = 'Bir sorgu adı girmelisiniz';
$string['displaynamex'] = 'Sorgu adı: {$a}';
$string['downloadthisreportascsv'] = 'Sonuçları CSV dosyası olarak indir';
$string['edit'] = 'Ekle/Düzenle';
$string['editcategory'] = 'Kategoriyi güncelle';
$string['editcategoryx'] = '\'{$a}\' sorgusunu düzenle';
$string['editingareport'] = 'Ad-hoc veritabanı sorgusunu düzenle';
$string['editreportx'] = '\'{$a}\' sorgusunu düzenle';
$string['emailbody'] = 'Sevgili {$a}';
$string['emailink'] = 'Raporuna erişmek için, bu bağlantıyı tıklayın: {$a}';
$string['emailnumberofrows'] = 'Sadece satır sayısı ve bağlantı';
$string['emailresults'] = 'Sonuçları e-posta gövdesine koyun';
$string['emailrow'] = 'Rapor {$a} satırlarını döndürdü.';
$string['emailrows'] = 'Rapor {$a} satırlarını döndürdü.';
$string['emailsent'] = '{$a}\'ya bir e-posta bildirimi gönderildi.';
$string['emailsentfailed'] = '{$a}';
$string['emailsubject'] = 'Sorgu {$a}';
$string['emailto'] = '\'ya otomatik e-posta gönder';
$string['emailwhat'] = 'Hangi e-posta';
$string['enterparameters'] = 'Ad-hoc veritabanı sorgusu için parametreleri girin';
$string['errordeletingcategory'] = '<p>Sorgu kategorisini  silerken hata oluştu. </p><p> Bunu silmek için kategorinin boş olması gerekir. </p>';
$string['errordeletingreport'] = 'Sorguyu silerken hata oluştu';
$string['errorinsertingreport'] = 'Sorgu eklenirken hata oluştu';
$string['errorupdatingreport'] = 'Sorgu yüklenirken hata oluştu';
$string['invalidreportid'] = 'Geçersiz sorgu kimliği {$a}.';
$string['lastexecuted'] = 'Bu sorgulama, en son {$a->lastrun}\'da çalıştır. Bu çalışma $a->lastexecutiontime} kadar zaman aldı.';
$string['managecategories'] = 'Rapor kategorilerini yönet';
$string['manual'] = 'Talep üzerine';
$string['manualheader'] = 'Talep üzerine';
$string['manualheader_help'] = 'Bu sorgular talep üzerine çalıştırılır. Sonuçları görmeki için bağlantıya tıklayınız.';
$string['messageprovider:notification'] = 'Geçerli SQL bildirim ve uyarıları';
$string['monthlyheader'] = 'Aylık';
$string['monthlyheader_help'] = 'Bu sorgular önceki ayın roparları hazırlamak için otomatik olarak her ayın ilk günü çalışır. Bu bağlantılar, halihazırdaki sonuçlarını görüntülemenize olanak sağlar.';
$string['monthlynote_help'] = 'Bu sorgular önceki ayın roparları hazırlamak için otomatik olarak her ayın ilk günü çalışır. Bu bağlantılar, halihazırdaki sonuçlarını görüntülemenize olanak sağlar.';
$string['morethanonerowreturned'] = 'Birden fazla satır döndürdü. Bu sorgu bir satır döndürmelidir.';
$string['nodatareturned'] = 'Bu sorgu herhangi bir ver döndürmedi.';
$string['noreportsavailable'] = 'Kullanılabilir sorgu mevcut değildir.';
$string['note'] = 'Notlar';
$string['notrunyet'] = 'Bu sorgu henüz çalıştırılmadı';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Ad-hoc veritabanı sorguları';
$string['privacy:metadata'] = 'Geçici veritabanı sorguları eklentisi herhangi bir kişisel veri depolamaz.';
$string['privacy:metadata:reportcustomsqlqueries:customdir'] = 'CSV raporunu yola / dizine aktar';
$string['privacy:metadata:reportcustomsqlqueries:runable'] = 'Çalıştırılabilir \'elle\', \'haftalık\' veya \'aylık\'';
$string['query_deleted'] = 'Sorgu silindi';
$string['query_edited'] = 'Sorgu düzenlendi';
$string['query_viewed'] = 'Sorgu görüntülendi';
$string['queryfailed'] = '{$a} sorgusu çalıştırılırken hata oluştu';
$string['querylimit'] = 'Sınır satır döndürdü';
$string['querylimitrange'] = 'Sayı 1 ve {$a} arasında olmalıdır';
$string['queryparameters'] = 'Sorgu parametreleri';
$string['queryparams'] = 'Sorgu parametreleri için varsayılan değerleri girin.';
$string['queryparamschanged'] = 'Sorguda yer tutucular değiştirildi';
$string['queryrundate'] = 'sorgu çalıştırma tarihi';
$string['querysql'] = 'SQL sorgusu';
$string['querysqlrequried'] = 'Birkaç SQL grişi yapmalısınız.';
$string['recordlimitreached'] = 'Bu sorgu {$a} satır sınırına ulaştı. Sondaki bazı satırlar atlanmış olabilir.';
$string['reportfor'] = '{$a} \'da  Sorguyu çalıştır.';
$string['requireint'] = 'Tam sayı gerekli';
$string['runable'] = 'Çalıştır';
$string['runablex'] = 'Çalıştırın: {$a}';
$string['schedulednote'] = 'Bu sorgular önceki haftanın veya ayın roparları hazırlamak için otomatik olarak hafta veya ayın ilk günü çalışır. Bu bağlantılar, halihazırdaki sonuçlarını görüntülemenize olanak sağlar.';
$string['scheduledqueries'] = 'Planlanmış sorgular';
$string['typeofresult'] = 'Sonuç türü';
$string['unknowndownloadfile'] = 'Bilinmeyen download dosyası.';
$string['userhasnothiscapability'] = 'Kullanıcı \'$a {username->}\' \'$a \'{$a->capability}\' özelliğine sahip değildir. Lütfen bu kullanıcı listeden silin veya \'$a {whocanaccess->}\' ın seçimini değiştirin.';
$string['userinvalidinput'] = 'Geçersiz giriş, kullanıcı adlarının virgülle ayrılmış bir listeolması gerekir.';
$string['usermodified'] = '<span class="font-weight-bold">En son değiştiren:</span> {$a}';
$string['usernotfound'] = 'Kullanıcı adı ile \'{$a}\' kullanıcısı yok';
$string['userswhocanconfig'] = 'Sedece yöneticiler  (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Sistem raporlarını kimler görebilir. (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'SQL sorgu metnini doğrulayın ve formu güncelleyin';
$string['weeklyheader'] = 'Haftalık';
$string['weeklyheader_help'] = 'Bu sorgular önceki haftanın roparları hazırlamak için otomatik olarak haftanın ilk günü çalışır. Bu bağlantılar, halihazırdaki sonuçlarını görüntülemenize olanak sağlar.';
$string['whocanaccess'] = 'Bu sorguya kimler erişebilir';
