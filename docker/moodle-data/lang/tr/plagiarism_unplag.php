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
 * Strings for component 'plagiarism_unplag', language 'tr', version '5.0'.
 *
 * @package     plagiarism_unplag
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Yapılan denemeler';
$string['check_all_submitted_assignments'] = 'Manuel kontrol';
$string['check_confirm'] = 'UNPLAG intihal eklentisi ile denetlemeye başlamak istediğinize emin misiniz?';
$string['check_file'] = 'Taramayı Başlat';
$string['check_start'] = 'Unplag özgünlük not verme devam etmekte';
$string['check_type'] = 'Kaynaklar';
$string['cronwarning'] = '<a href="../../admin/cron.php"> cron.php </a> bakım metni en az 30 dakika çalıştırılmadı - Cron\'un UNPLAG\'ın düzgün çalışmasına izin verecek şekilde yapılandırılması gerekmektedir.';
$string['defaultsdesc'] = 'Atama etkinliği için varsayılanları yapılandırın. Öğretmenler, bireysel görevlerdeki ayarları değiştirebilirler';
$string['defaultupdated'] = 'Varsayılan değerler güncellendi';
$string['delete'] = 'Sil';
$string['deletedwarning'] = 'Bu dosya bulunamadı - kullanıcı tarafından silinmiş olabilir';
$string['exclude_citations'] = 'Alıntıları ve Referansları tanımla';
$string['exclude_self_plagiarism'] = 'Şahsi intihali çıkar';
$string['explainerrors'] = 'Bu sayfa, şu anda hata durumunda olan dosyaları listeler. <br/> Dosyalar bu sayfadan silindiğinde tekrar gönderilemeyecek ve hatalar artık öğretmenlere veya öğrencilere gösterilemeyecek';
$string['file'] = 'Dosya';
$string['filedeleted'] = 'Dosya kuyruktan silindi';
$string['filereset'] = 'UNPLAG\'e tekrar gönderilmek üzere bir dosya sıfırlandı';
$string['fileresubmitted'] = 'Dosya yeniden gönderilmek üzere kuyruğa alındı';
$string['generalinfo'] = 'Genel bilgi';
$string['getscore'] = 'Puanı al';
$string['heldevents'] = 'Düzenlenen etkinlikler';
$string['heldeventsdescription'] = 'Bunlar, ilk denemede tamamlanmayan ve tekrar gönderilmek üzere kuyruğa atılan olaylardır - bu, sonraki olayların oluşmasını önler ve daha fazla araştırmaya ihtiyaç duyabilir. Bu olaylardan bazıları UNPLAG ile alakalı olmayabilir.';
$string['id'] = 'Kimlik';
$string['identifier'] = 'Tanımlayıcı';
$string['max_100000_words'] = 'Dosya(lar) en fazla 100 000 kelime içermeli ve 70MB daha büyük büyük olmamalıdır';
$string['min_30_words'] = 'En az 30 kelime gereklidir';
$string['module'] = 'Modül';
$string['my_library'] = 'Belge vs kütüphane';
$string['name'] = 'Adı';
$string['no_index_files'] = 'Sunulan başvuruları, Kurumsal Kütüphaneden hariç tutun';
$string['noreceiver'] = 'Alıcı adresi belirtilmedi';
$string['pending'] = 'Bu dosya UNPLAG\'e gönderilmeyi bekliyor';
$string['plagiarism'] = 'Potansiyel intihal';
$string['plagiarism_run_success'] = 'İntihal taraması için gönderilen dosya';
$string['pluginname'] = 'UNPLAG intihal eklentisi';
$string['previouslysubmitted'] = 'Daha önce şu şekilde sunuldu:';
$string['processing'] = 'Bu dosya UNPLAG\'e gönderildi, şimdi analizin hazır olmasını bekliyor';
$string['progress'] = 'Tara';
$string['receivernotvalid'] = 'Bu geçerli bir alıcı adresi değil.';
$string['refresh'] = 'Sonuçları görmek için sayfayı yenileyin';
$string['report'] = 'Tam raporu görüntüle';
$string['reportready'] = 'Rapor hazır';
$string['resubmit'] = 'Tekrar gönder';
$string['savedconfigfailed'] = 'Yanlış bir İstemci Kimliği/API Gizli bileşimi girildi. UNPLAG devre dışı bırakıldı, lütfen tekrar deneyin.';
$string['savedconfigsuccess'] = 'İntihal kontrolü ayarları kaydedildi';
$string['scoreavailable'] = 'Bu dosya UNPLAG tarafından işlendi ve bir rapor artık mevcut.';
$string['scorenotavailableyet'] = 'Bu dosya henüz UNPLAG tarafından işlenmedi.';
$string['showwhenclosed'] = 'Etkinlik kapandığında';
$string['similarity'] = 'Benzerlik';
$string['similarity_sensitivity'] = 'Eşleşen bir kaynağı, kaynakları daha az sakla (%)';
$string['status'] = 'Durum';
$string['studentdisclosure'] = 'Familiarize students with the UNPLAG Privacy Policy';
$string['studentdisclosure_help'] = 'Bu metin, dosya yükleme sayfasındaki tüm öğrencilere gösterilir.';
$string['studentdisclosuredefault'] = 'Yüklenen tüm dosyalar intihal dedektörü UNPLAG\'e gönderilecek.';
$string['studentemailcontent'] = '{$a->coursename} adresinde {$a->modulename} adresine gönderdiğiniz dosya, daha önce intihal tespit sistemi UNPLAG tarafından işlendi.
{$a->modulelink}';
$string['studentemailsubject'] = 'UNPLAG tarafından işlenmiş dosya';
$string['submitondraft'] = 'İlk yüklendiğinde dosyayı gönder';
$string['submitonfinal'] = 'Öğrenci not vermeye gönderdiğinde dosyayı gönder';
$string['toolarge'] = 'Bu dosya, UNPLAG\'ın işleyebilmesi için çok büyük';
$string['unknownwarning'] = 'Bu dosyayı UNPLAG\'a gönderirken bir hata oluştu';
$string['unplag'] = 'UNPLAG intihal eklentisi';
$string['unplag:enable'] = 'Bir etkinlik içinde öğretmenin UNPLAG\'ı etkinleştirmesine/devre dışı bırakmasına izin ver';
$string['unplag:resetfile'] = 'Hata oluştuğunda öğretmenin dosyayı UNPLAG\'a yeniden göndermesine izin ver';
$string['unplag:vieweditreport'] = 'Öğretmenlerin UNPLAG\'dan raporu düzenlemesine ve düzenlemesine izin ver';
$string['unplag:viewreport'] = 'Öğretmenin UNPLAG\'dan tam raporu görüntülemesine izin verin';
$string['unplag_api_secret'] = 'API Gizliliği';
$string['unplag_api_secret_help'] = 'UNPLAG tarafından sağlanan, API\'ya erişmek için sağlanan API Gizliliği <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'Müşteri Kimliği';
$string['unplag_client_id_help'] = 'API\'ye erişmek için UNPLAG tarafından sağlanan Müşteri\'nin kimliği, üzerinde bulabilirsiniz. <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_draft_submit'] = 'Dosya UNPLAG\'a ne zaman sunulmalıdır?';
$string['unplag_enableplugin'] = '{$a} için UNPLAG\'ı etkinleştir';
$string['unplag_lang'] = 'Dil';
$string['unplag_lang_help'] = 'UNPLAG tarafından sağlanan dil kodu';
$string['unplag_settings_url_text'] = 'Müsteri kimliği/API Gizliliğini görüntülemek/kopyalamak için Unplag.com admin hesabını açın';
$string['unplag_show_student_report'] = 'Öğrenciye benzerlik raporu gösterin';
$string['unplag_show_student_report_help'] = 'Benzerlik raporunda, gönderimin hangi bölümlerinin intihal edildiği ve UNPLAG\'ın bu içeriği bulduğu yerlerde bir döküm var.';
$string['unplag_show_student_score'] = 'Öğrenciye benzerlik puanı göster';
$string['unplag_show_student_score_help'] = 'Benzerlik skoru, diğer içeriğe eşleşen sunuş yüzdesidir.';
$string['unplag_studentemail'] = 'Öğrenciye e-posta gönder';
$string['unplag_studentemail_help'] = 'Bu, bir dosyanın bir raporun mevcut olduğunu bilmelerini sağlamak için işlendiğinde öğrenciye bir e-posta gönderir.';
$string['unplagdebug'] = 'Hata ayıklama';
$string['unplagdefaults'] = 'UNPLAG varsayılanları';
$string['unplagfiles'] = 'unplag Dosyaları';
$string['unsupportedfiletype'] = 'Bu dosya türü UNPLAG tarafından desteklenmiyor';
$string['use_unplag'] = 'UNPLAG\'ı etkinleştir';
$string['use_unplag_help'] = 'Unplag eklentisini kullanmak için önce Evet (Gönderimler ayarları) seçeneğine öğrenci gönderilmesini isteyin düğmesini ayarlayın.';
$string['useunplag'] = 'UNPLAG\'ı etkinleştir';
$string['useunplag_assign_desc_param'] = 'Unplag ayarlarının kilidini açmak için';
$string['useunplag_assign_desc_value'] = 'Gönderimler ayarlarını belirle → Öğrencilerin gönderilmesini istemek düğmesi = Evet';
$string['waitingevents'] = 'Cron\'u bekleyen {$a->countallevents} etkinliği ve yeniden göndermek için {$a->countheld} etkinlik düzenleniyor';
$string['web'] = 'Belge vs İnternet';
$string['web_and_my_library'] = 'Belge vs İnternet + Kütüphanesi';
