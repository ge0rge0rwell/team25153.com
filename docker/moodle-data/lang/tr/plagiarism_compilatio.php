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
 * Strings for component 'plagiarism_compilatio', language 'tr', version '5.0'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_title'] = 'Compilatio.net hesabınız kısa süre içinde sona eriyor';
$string['activate_compilatio'] = 'Compilatio\' yu etkinleştir';
$string['admin_disabled_reports'] = 'Yönetici, öğretmenlerin benzerlik raporlarını öğrencilere göstermesine izin vermez.';
$string['allow_teachers_to_show_reports'] = 'Öğretmenlerin öğrencilerine benzerlik raporları göstermelerine izin ver';
$string['analysing'] = 'Belgeyi analiz etme';
$string['analysis_completed'] = 'Analiz tamamlandı: Benzerliklerin {$a}%\'si.';
$string['analysis_date'] = 'Analiz Tarihi (Sadece süreli analiz)';
$string['analysis_started'] = '{$a} analiz talep edildi.';
$string['analysistype_manual'] = 'El ile';
$string['analysistype_prog'] = 'Süreli';
$string['analyze'] = 'Analiz';
$string['analyzing'] = 'Analiz etme';
$string['api_key_not_tested'] = 'Compilatio.net ile olan bağlantı başarısız olduğundan API anahtarınız doğrulanmadı.';
$string['api_key_not_valid'] = 'API anahtarınız geçerli değil. Kullanılan platforma özeldir. Temas ederek bir tane edinebilirsiniz. <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'API anahtarınız geçerlidir.';
$string['assign_statistics'] = 'Ödevlerle ilgili istatistikler';
$string['auto_diagnosis_title'] = 'Otomatik teşhis';
$string['average'] = 'Ortalama oran';
$string['average_similarities'] = 'Bu ödevde, ortalama benzerlik oranı {$a}% \'dır.';
$string['compilatio'] = 'Compilatio intihal eklentisi';
$string['compilatio:enable'] = 'Bir etkinlik içinde Öğretmenin Compilatio\' yu etkinleştirmesine/devre dışı bırakmasına izin ver';
$string['compilatio:resetfile'] = 'Hata sonrası öğretmenin dosyayı Compilatio\'ya yeniden göndermesine izin ver';
$string['compilatio:triggeranalysis'] = 'Öğretmenin elle analiz tetiklemesine izin verin';
$string['compilatio:viewreport'] = 'Öğretmenin Derleme\'den tam raporu görüntülemesine izin ver';
$string['compilatio_display_student_report'] = 'Öğrenciye benzerlik raporu gösterin';
$string['compilatio_display_student_report_help'] = 'Benzerlik raporunda, gönderimin hangi bölümlerinin intihal edildiği ve tespit edilen kaynakların yeri hakkında bir döküm var.';
$string['compilatio_display_student_score'] = 'Öğrenciye benzerlik puanı göster';
$string['compilatio_display_student_score_help'] = 'Benzerlik puanı, diğer içeriğe eşleşen gönderim yüzdesidir.';
$string['compilatio_help_assign'] = 'Compilatio eklentisi hakkında yardım görüntüleyin';
$string['compilatio_studentemail'] = 'Öğrenci e-postasını gönder';
$string['compilatio_studentemail_help'] = 'Bu, bir dosyanın bir rapor geldiğini bildirmek için işlendiğinde öğrenciye bir e-posta gönderir.';
$string['compilatioapi'] = 'Compilatio API Adresi';
$string['compilatioapi_help'] = 'Bu, Compilatio API\'si adresidir';
$string['compilatiodefaults'] = 'Compilatio varsayılanları';
$string['compilatioenableplugin'] = '{$a} için Compilatio\' yu etkinleştir';
$string['compilatioexplain'] = 'Bu eklenti hakkında daha fazla bilgi için bkz: <a href="http://www.compilatio.net/en/" target="_blank">compilatio.net</a>';
$string['compilatiopassword'] = 'API anahtarı';
$string['compilatiopassword_help'] = 'API\'ya erişmek için Compilatio tarafından sağlanan kişisel kod';
$string['context'] = 'Bağlam';
$string['cron_check'] = 'CRON son {$a} tarihinde çalıştırıldı.';
$string['cron_check_never_called'] = 'Eklentinin etkinleştirilmesinden beri CRON hiç çalıştırılmadı. Sunucunuzda yanlış yapılandırılmış olabilir.';
$string['cron_check_not_ok'] = 'Son bir saat içinde çalıştırılmadı.';
$string['cron_frequency'] = 'Her dakika {$a} dakika içinde çalışıyor gibi görünüyor.';
$string['cron_recommandation'] = 'Her bir CRON uygulaması arasında 15 dakikanın altında bir gecikme kullanmanızı öneririz.';
$string['defaults_desc'] = 'Aşağıdaki ayarlar, bir Etkinlik Modülü\'nde Compilatio\' yu etkinleştirirken ayarlanan varsayılan değerlerdir';
$string['defaultupdated'] = 'Varsayılan değerler güncellendi';
$string['disclaimer_data'] = 'Compilatio\'yu iyileştirmek için Moodle yapılandırmanızla ilgili verilerin toplanacağını kabul etmiş olursunuz.';
$string['display_notifications'] = 'Görüntülü ilan bildirimleri';
$string['display_stats'] = 'Bu ödevle ilgili istatistikleri göster';
$string['documents_analyzed'] = '{$a->countAnalyzed} Belge(leri) {$a->documentsCount} Gönderildi ve analiz edildi.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} Arasındaki belge(ler) {$a->greenThreshold}% ve {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} den daha büyük olan belge(ler) {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} den daha küçük olan belge(ler) {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} belge (ler) analiz edildi.';
$string['documents_in_queue'] = 'Analiz edilecek {$a} belge(ler) sıralanıyor.';
$string['documents_number'] = 'Analiz edilen belgeler';
$string['enable_javascript'] = 'Compilatio eklentisi ile daha iyi bir deneyim kazanmak için lütfen Javascript\'i etkinleştirin.<br/>
Buradadır. <a href=\'http://www.enable-javascript.com/\' target=\'_blank\'>
 Web tarayıcınızda JavaScript\'i nasıl etkinleştireceğinizle ilgili talimatlar</a>.';
$string['enabledandworking'] = 'Compilatio eklentisi etkinleştirildi ve çalışıyor.';
$string['error'] = 'Hata';
$string['errors'] = 'Hatalar:';
$string['export_csv'] = 'Bu etkinlikle ilgili verileri bir CSV dosyasına aktarın';
$string['export_global_csv'] = 'Bu veriyi CSV biçiminde dışa aktarmak için burayı tıklayın';
$string['export_raw_csv'] = 'Ham verileri CSV biçiminde dışa aktarmak için burayı tıklayın';
$string['failedanalysis'] = 'Compilatio dokümanınızı analiz etmek için başarısız oldu:';
$string['filename'] = 'Dosya adı';
$string['filereset'] = 'Compilatio\' ya tekrar gönderilmek üzere bir dosya sıfırlandı';
$string['firstname'] = 'İlk adı';
$string['formdelete'] = 'Sil';
$string['get_scores'] = 'Complatio.net\'den intihal puanı alın';
$string['global_statistics'] = 'Genel istatistikler';
$string['green_threshold'] = 'Yeşile kadar';
$string['help_compilatio_format_content'] = 'Compilatio.net sözcük işlemcilerinde ve internette kullanılan birçok biçimi yönetir.
Aşağıdaki biçimler desteklenir:
<ul>
<li>
Metin \'.txt\'
</li>
<li>
Adobe Acrobat \'.pdf\'
</li>
<li>
Zengin metin biçimi \'.rtf\'
</li>
<li>
Metin düzenleyici \'.doc\', \'.docx\', \'.odt\'
</li>
<li>
Elektronik tablo \'.xls \', \'.xlsx\'
</li>
<li>
slayt gösterisi \'.ppt \', \'.pptx\'
</li>
<li>
web dosyası \'.html\'
</li>
</ul>
.';
$string['hide_area'] = 'Compilatio bilgilerini gizle';
$string['immediately'] = 'Hemen';
$string['lastname'] = 'Son ad';
$string['loading'] = 'Yükleniyor lütfen bekleyin...';
$string['manual_analysis'] = 'Bu belgenin analizi el ile başlatılmalıdır.';
$string['manual_send_confirmation'] = 'Compilatio\' ya {$a} dosya (lar) gönderildi.';
$string['maximum'] = 'Maksimum hız';
$string['minimum'] = 'Minimum hız';
$string['news_analysis_perturbated'] = 'Compilatio.net - Karıştırılan analiz';
$string['news_incident'] = 'Compilatio.net yükleyen';
$string['news_maintenance'] = 'Compilatio.net bakım';
$string['news_update'] = 'Compilatio.net güncelleme';
$string['no_document_available_for_analysis'] = 'Analiz için hazırlanmış bir belge yok';
$string['no_documents_available'] = 'Bu ödevde analiz için herhangi bir belge mevcut değildir.';
$string['no_statistics_yet'] = 'Henüz hiçbir analiz belgesi bulunmamaktadır.';
$string['not_analyzed'] = 'Aşağıdaki belgeler analiz edilemez:';
$string['not_analyzed_unextractable'] = '{$a} belge(ler)i Compilatio\'ya yüklenemediği için analiz edilemedi.';
$string['not_analyzed_unsupported'] = 'Biçimleri desteklenmediği için {$a} belgele(si)leri analiz edilmemiştir.';
$string['numeric_threshold'] = 'Eşik bana bir sayı olmalı';
$string['orange_threshold'] = 'Kadar turuncu';
$string['pending'] = 'Bu dosya Compilatio\' ya gönderilmeyi bekliyor';
$string['pending_status'] = 'Beklemede';
$string['planned'] = 'Planlanan';
$string['plugin_disabled'] = 'Eklenti Moodle platformunda etkinleştirilmedi.';
$string['plugin_disabled_assign'] = 'Eklenti ödevler için etkin değil.';
$string['plugin_disabled_forum'] = 'Eklenti forumlar için etkin değil';
$string['plugin_disabled_workshop'] = 'Eklenti çalıştaylar için etkin değil';
$string['plugin_enabled'] = 'Eklenti, Moodle platformunda etkinleştirilmiştir.';
$string['plugin_enabled_assign'] = 'Eklenti ödevler için etkinleştirilmiştir.';
$string['plugin_enabled_forum'] = 'Eklenti forumlar için etkinleştirilmiştir.';
$string['plugin_enabled_workshop'] = 'Eklenti çalıştaylar için etkinleştirilmiştir';
$string['pluginname'] = 'Compilatio intihal eklentisi';
$string['previouslysubmitted'] = 'Daha önce şu şekilde gönderildi:';
$string['processing_doc'] = 'Compilatio bu dosyayı analiz ediyor.';
$string['programmed_analysis_future'] = 'Belgeler {$a} üzerine Compilatio ile analiz edilecektir.';
$string['programmed_analysis_past'] = 'Analiz için {$a} üzerine Compilatio için belgeler gönderilmiştir.';
$string['progress'] = 'İlerleme :';
$string['queue'] = 'Kuyruk';
$string['queued'] = 'Belge şimdi sıradadır ve yakında Compilatio tarafından analiz edilecektir.';
$string['red_threshold'] = 'Aksi takdirde kırmızı';
$string['report'] = 'Rapor';
$string['reset'] = 'Sıfırla';
$string['results'] = 'Sonuçlar:';
$string['saved_config_failed'] = '<strong> Girilen kombinasyon API anahtarı - adresi geçersiz. Compilatio devre dışı, lütfen tekrar deneyin. <br/>
<a href="autodiagnosis.php"> otomatik tanı </a> sayfası, bu eklentiyi yapılandırmanıza yardımcı olabilir. </strong> <br/>
Hata :';
$string['savedconfigsuccess'] = 'İntihal ayarları kaydedildi';
$string['send_files'] = 'İntihal tespiti için dosyaları Compilatio.net\'e yükle';
$string['showwhenclosed'] = 'Etkinlik kapandığında';
$string['similarities'] = 'Benzerlikler';
$string['similarities_disclaimer'] = 'Bu ödevin belgelerindeki benzerlikleri, <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a> ile analiz edebilirsiniz. <br/> Dikkatli olun: Analiz sırasında ölçülen benzerlikler Mutlaka intihal demek değildir. Analiz raporu, benzerliklerin uygun tırnak ya da intihal ile uyumlu olup olmadığını belirlemenize yardımcı olur.';
$string['similarity_percent'] = 'Benzerlik yüzdesi %';
$string['start_analysis_title'] = 'Analizi başlat';
$string['startallcompilatioanalysis'] = 'Tüm belgeleri analiz edin';
$string['startanalysis'] = 'Analize başla';
$string['statistics_title'] = 'İstatistikler';
$string['studentdisclosuredefault'] = 'Burada yüklenen tüm dosyalar, Compilatio İntihal Tespit Hizmetine gönderilecek';
$string['studentemailcontent'] = 'Gönderdiğiniz dosya {$a->modulename} in {$a->coursename} Şimdi İntihal aracı Derleme tarafından işlendi.
{$a->modulelink}';
$string['studentemailsubject'] = 'Compilatio tarafından işlenmiş dosya';
$string['students_disclosure'] = 'Öğrenci Bilgilendirme';
$string['students_disclosure_help'] = 'Bu metin, dosya yükleme sayfasındaki tüm öğrencilere gösterilir.';
$string['tabs_title_help'] = 'Yardım';
$string['tabs_title_notifications'] = 'Bildirimler';
$string['tabs_title_stats'] = 'İstatistikler';
$string['teacher'] = 'Öğretmen';
$string['thresholds_description'] = 'Analiz raporunun bulunmasını kolaylaştırmak için kullanmak istediğiniz eşiği belirtin (benzerliklerin yüzdesi %):';
$string['thresholds_settings'] = 'Sınırlar :';
$string['timesubmitted'] = 'Compilatio\'ya Eklenme Tarihi';
$string['toolarge'] = 'Bu dosya, Compilatio\' nun işlenmesi için çok büyük';
$string['unextractable'] = 'Bu belgenin içeriği çıkarılamadı';
$string['unextractable_files'] = 'Aşağıdaki dosya(lar) Compilatio tarafından analiz edilemez. Ya yeterli kelime içermiyor ya da metin çıkartılamıyor:';
$string['unextractablefile'] = 'Belgeniz yeterli kelime içermiyor veya metin çıkartılamıyor.';
$string['unknownwarning'] = 'Bu dosyayı Compilatio\' ya göndermeye çalışırken bir hata oluştu.';
$string['unsent_documents'] = 'Belge(ler) gönderilmedi';
$string['unsent_documents_content'] = 'Bu ödev, Compilatio\' ya gönderilmeyen belgeleri içerir.';
$string['unsupported'] = 'Desteklenmeyen belge';
$string['unsupported_files'] = 'Aşağıdaki dosya(lar), biçimleri desteklenmediği için Compilatio ile analiz edilemez:';
$string['unsupportedfiletype'] = 'Bu dosya türü Compilatio tarafından desteklenmiyor';
$string['update_meta'] = 'Compilation.net\'in planlanan işlemlerini yapın';
$string['updatecompilatioresults'] = 'Bilgileri yenile';
$string['updated_analysis'] = 'Compilatio analiz sonuçları güncellendi.';
$string['use_compilatio'] = 'Compilatio ile benzerlik algılamaya izin ver';
$string['waitingforanalysis'] = 'Bu dosya {$a} tarihinde işleme koyulacak';
$string['webservice_not_ok'] = 'Sunucu, web hizmetine bağlanamadı. Güvenlik duvarınız bağlantıyı engelliyor olabilir.';
$string['webservice_ok'] = 'Sunucu, web hizmetine bağlanabiliyor.';
$string['webservice_unreachable_content'] = 'Compilatio.net şu anda kullanılamıyor. Verdiğimiz rahatsızlık için özür dileriz.';
$string['webservice_unreachable_title'] = 'Compilatio.net kullanılamıyor.';
