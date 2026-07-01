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
 * Strings for component 'tool_wp', language 'tr', version '5.0'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcohorts'] = 'Tüm topluluklar';
$string['alldata'] = 'Bütün Veriler';
$string['allsystemcohorts'] = 'Tüm sistem toplulukları';
$string['cohortdetails'] = 'Topluluk detayları';
$string['cohortdetailswithmembers'] = 'Üyeler dahil topluluk ayrıntıları';
$string['cohortdetailswithmembers_help'] = 'Üyelik bilgileri de dahil olmak üzere topluluk ayrıntıları.  Kullanıcıların dahil edilmediğini unutmayın';
$string['cohortmembers'] = 'Topluluk üyeleri';
$string['cohortmembers_help'] = 'Yalnızca topluluk üyelik bilgileri dahil edilecek, ancak gerçek kullanıcılar dahil edilmeyecektir.';
$string['confirmdeleteimport'] = 'Bu içe aktarmayı silmek istediğinizden emin misiniz?';
$string['conflictidnumber'] = 'Topululk kimliği numarasına sayısal bir son ek ekleyin';
$string['coursesadmintab'] = 'Öğrenme';
$string['doexport'] = 'Dışa aktar';
$string['errorcantdeleteimport'] = 'İçe aktarma silinemiyor';
$string['errorcohortsameidnumber'] = 'Aynı kimlik numarasına sahip topluluklar zaten var';
$string['errorcouldnotallocatecohort'] = '\'{$a->originaluserfullname}\' kullanıcısı \'{$a->name}\' topluluğuna atanamadı';
$string['errorcouldnotimportissue'] = '\'{$a}\' için verilen sertifika içe aktarılamadı';
$string['errorcustomfielddoesnotexist'] = 'Özel alan mevcut değil, \'{$a}\' verileri içe aktarılamadı';
$string['exportcoursecategoriescontent'] = 'Kurs kategorisi detayları';
$string['exporterdescriptioncohorts'] = 'Kullanıcı verileri olmayan topululuk üyeleri dahil toplulukar';
$string['exportimportsiteerror'] = 'Site içe aktarılamadı';
$string['exportimportsitesame'] = 'Dışa aktarmanın kaynaklandığı aynı siteye içe aktarılamaz';
$string['exportimportuserfieldserror'] = '\'{$a}\' kullanıcı profili alanı içe aktarılamadı';
$string['exportnotfoundornotready'] = 'Dışa aktarma bulunamadı veya içe aktarma için hazır değil';
$string['exportnotready'] = 'Dışa aktarma, içe aktarma için hazır değil';
$string['exports'] = 'Dışa aktarılanlar';
$string['importaudiencelogerror'] = 'Kitle kaydı içe aktarılamadı';
$string['importaudiencelogsuccess'] = 'Kitle kaydı içe aktarıldı';
$string['importconflictskip'] = 'içe aktarma';
$string['importerrequired'] = 'Birden fazla içe aktarma yöntemi mevcut, bir içe akrtarma yöntemi belirtilmelidir';
$string['importfromfile'] = 'Bu dosyadan yeni içe aktarma';
$string['importgeneralsettingsalt'] = 'İçe aktarılan veriler için hedefi seçin.  Bir sonraki adımda hangi öğeleri içe aktarmak istediğinizi belirtebileceksiniz.';
$string['importlogerror'] = '\'{$a->name}\' sertifika şablonu içe aktarılamadı';
$string['importlogfailed'] = '\'{$a->fullname}\' kursu içe aktarılamadı';
$string['importlogfailedcohort'] = '\'{$a->name}\' topluluğuiçe aktarılamadı';
$string['importlogfailedcoursecategory'] = '\'{$a->name}\' kurs kategorisi içe aktarılamadı';
$string['importlogsuccesscohort'] = 'Yeni topluluk\'<a href="{$a->url}">{$a->name}</a>\' oluşturuldu';
$string['importlogsuccesscohortallocations'] = '\'{$a->userfullname}\' kullanıcısı \'{$a->name}\' topluluğan eklendi';
$string['importoptionsdesc'] = 'Hangi öğeleri içe aktarmak istediğinizi seçerek belirtin.';
$string['importreportlogerror'] = '\'{$a}\' raporu içe aktarılamadı';
$string['importreviewdesc'] = 'Dosyayı içe aktarmadan önce her şeyin doğru olup olmadığını kontrol edin.';
$string['importschedulelogerror'] = 'Program kaydı içe aktarılamadı';
$string['importschedulelogsuccess'] = 'Program kaydı içe aktarıldı';
$string['importselectsourcedesc'] = 'Geçerli bir CSV veya Moodle Workplace dosyası yükleyin.  Sonraki adımlarda, dosyadan hangi öğeleri içe aktarmak istediğinizi tanımlayabileceksiniz.';
$string['includecoursecontent'] = 'Kurs içeriğini dahil edin';
$string['includecoursecontent_help'] = 'Dışa aktarılan dosya, standart bir kurs yedeği oluştururken bu sitede varsayılan olarak ayarlananlarla aynı ayarları içerecektir. Hiçbir kullanıcı verisi dahil edilmeyecektir.';
$string['loading'] = 'Yükleniyor...';
$string['managecoursecategories'] = 'Kurs kategorilerini yönet';
$string['mappingerrorcohortheader'] = 'Bazı topluluklar mevcut değil';
$string['mappingerrorcohortlog'] = '{$a} topluluğu bulunamadı';
$string['mappingerrorcontextnotfound'] = 'Bağlam bulunamadı';
$string['messagefullimportcomplete'] = 'İçe aktarma işleminiz {$a->date} tarihinde tamamlandı

Durum: {$a->durum}

Ayrıntıları görmek için <a href="{$a->url}">burayı</a> tıklayın';
$string['messageprovider:exportcomplete'] = 'Dışa aktarma tamamlandı';
$string['noavailableimporter'] = 'Bu dosya için uygun bir içe aktarıcı bulamadık.';
$string['noavailableimporters'] = 'Kullanılabilir içe aktarma seçeneği yok';
$string['nocategoriesavailable'] = 'Burada kullanılabilcek kategori yok';
$string['nodetails'] = 'Detay bulunamadı';
$string['nonproductionsitemessage'] = 'Bu henüz inşa süreci tamamlanmış bir sitedir';
$string['nopermissioncategoryimport'] = 'Bu kategoride içe aktarma izniniz yok.';
$string['nothing'] = 'Hiçbirşey';
$string['nothingtoexport'] = 'Hiçbir şey dışa aktarılamadı';
$string['nothingtoimport'] = 'İçe aktarılacak bir şey yok';
$string['notpossible'] = 'İmkansız';
$string['numhour'] = '{$a} saat';
$string['outcomes'] = 'Kazanımlar';
$string['privacy:metadata:importcreatedby'] = 'İçe aktarmayı gerçekleştiren kullanıcının kimliği.';
$string['privacy:metadata:importstatus'] = 'İçe aktarma durumu.';
$string['privacy:metadata:timerequested'] = 'Zamanın sıfırlanması istendi.';
$string['privacy:metadata:tool_wp_course_reset'] = 'Kursu sıfırla';
$string['privacy:metadata:tool_wp_import'] = 'Sitede gerçekleştirilen içe aktarmalar hakkında bilgi.';
$string['privacy:metadata:userid'] = 'Kursu sıfırlayan kullanıcı.';
$string['privacy:metadata:usermodified'] = 'Kullanıcı değiştirdi.';
$string['privacy:metadata:userrequested'] = 'Kursun sıfırlanmasını talep eden kullanıcı.';
$string['problem'] = 'Sorun';
$string['productionsite'] = 'Üretim sitesi';
$string['productionstate'] = 'Üretim durumu';
$string['selectallcohortsinthisfile'] = 'Bu dosyadaki tüm toplulukları seçin';
$string['selectatleastonecohort'] = 'En az bir topluluk seçin';
$string['selectimporter'] = 'İçe aktarıcı seç';
$string['viewimport'] = 'İçe aktrmayı görüntüle';
$string['willbeimported'] = 'İçe aktarılacak';
$string['wp:manageexportimport'] = 'Workplace dışa/içe aktarmayı yönetme';
$string['wp:useexportimport'] = 'Workplace dışa/içe aktarmayı kullanma';
