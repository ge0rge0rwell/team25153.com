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
 * Strings for component 'ratingallocate', language 'tr', version '5.0'.
 *
 * @package     ratingallocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Dağıtım algoritmasının başka bir örneği zaten çalışıyor. Lütfen birkaç dakika bekleyin ve sayfayı yenileyin.';
$string['algorithm_scheduled_for_cron'] = 'Dağıtım algoritması çalışmasının cron işi tarafından derhal yürütülmesi planlanıyor. Lütfen birkaç dakika bekleyin ve sayfayı yenileyin.';
$string['algorithmtimeout'] = 'Algoritma zaman aşımı';
$string['allocation_manual_explain_all'] = 'Bir kullanıcıya atanacak bir seçenek seçin.';
$string['allocation_manual_explain_only_raters'] = 'Bir kullanıcıya atanacak bir seçenek seçin.
Yalnızca en az bir seçeneğe oy veren ve henüz dağıtımı yapılmamış kullanıcılar listelenir.';
$string['allocation_notification_message'] = '"{$a->ratingallocate}" ile ilgili olarak, "{$a->choice} ({$a->explanation})" seçeneğine atandınız.';
$string['allocation_notification_message_subject'] = '{$a} için dağıtım sonuçları yayınlandı';
$string['allocation_statistics'] = 'Dağıtım İstatistikleri';
$string['allocation_statistics_description'] = 'Bu istatistik, dağıtımın genel olarak tatmin edildiği izlenimini vermektedir.
Kullanıcının ilgili seçeneğe verdiği puanlamaya göre dağıtımları sayıyor.
<ul>
<li>{$a->usersinchoice} kullanıcı arasından {$a->rated} kullanıcı(lar) oy kullandı.</li>
<li>{$a->total} kullanıcı arasından {$a->users} kullanıcı(lar) "{$a->rating}" ile derecelendirdikleri bir seçenek buldu.</li>
<li>{$a->unassigned} kullanıcı(lar) henüz bir seçeneğe atanamadı.</li>
</ul>';
$string['allocation_statistics_description_no_alloc'] = 'Bu istatistik, dağıtımın genel olarak tatmin edildiği izlenimini vermektedir.
Kullanıcının ilgili seçeneğe verdiği puanlamaya göre dağıtımları sayıyor.
<ul>
<li>Şu anda {$a->notrated} kullanıcı(lar) henüz bir derecelendirme vermedi.</li>
<li>{$a->rated} kullanıcı(lar) zaten oy verdi.</li>
<li>Henüz bir dağıtım yok.</li>
</ul>';
$string['allocation_table_description'] = 'Bu istatistik, bu örneğin tüm dağıtımları hakkında genel bir bakış sağlar.</br>
Değerlendirme yapan ve dağıtım yapılmayan tüm kullanıcılar \'Dağıtım Yok\' başlığı altında listelenir';
$string['allocations_table'] = 'Dağıtımlara Genel Bakış';
$string['allocations_table_choice'] = 'Seçenek';
$string['allocations_table_noallocation'] = 'Dağıtım Yok';
$string['allocations_table_users'] = 'Kullanıcılar';
$string['at_least_one_rateable_choices_needed'] = 'En az bir seçilebilir(makul) seçeneğe ihtiyacınız var.';
$string['choice_active'] = 'Seçenek aktif';
$string['choice_active_help'] = 'Sadece aktif seçenekler kullanıcıya gösterilir. Aktif olmayan seçenekler görüntülenmez.';
$string['choice_added_notification'] = 'Seçenek kaydedildi.';
$string['choice_deleted_notification'] = '"{$a}" seçeneği silindi.';
$string['choice_deleted_notification_error'] = 'Silmek için istenen seçenek bulunamadı.';
$string['choice_explanation'] = 'Açıklama (isteğe bağlı)';
$string['choice_maxsize'] = 'Maks. katılımcı sayısı';
$string['choice_maxsize_display'] = 'Maksimum öğrenci sayısı';
$string['choice_table_active'] = 'Aktif';
$string['choice_table_explanation'] = 'Açıklama';
$string['choice_table_maxsize'] = 'Maks. Boyut';
$string['choice_table_title'] = 'Başlık';
$string['choice_table_tools'] = 'Düzenle';
$string['choice_title'] = 'Başlık';
$string['choice_title_help'] = 'Seçeneğin başlığı. *Dikkat* Tüm aktif seçenekler başlığa göre sıralanarak gösterilecektir.';
$string['choicestatusheading'] = 'Durum';
$string['configalgorithmtimeout'] = 'Algoritmanın sıkışıp kaldığı tahmin edilen saniye cinsinden süre.
Geçerli çalışma sonlandırıldı ve başarısız olarak işaretlendi.';
$string['confirm_start_distribution'] = 'Algoritmayı çalıştırmak, varsa mevcut tüm dağıtımları siler. Devam edeceğine emin misin?';
$string['create_moodle_groups'] = 'Dağıtıma Göre Grupları Oluştur';
$string['crontask'] = 'Adil Dağıtım(Fair Allocation) için otomatik dağıtım';
$string['delete_choice'] = 'Seçeneği sil';
$string['delete_rating'] = 'Derecelendirmeyi Sil';
$string['deletechoice'] = 'Seçeneği sil';
$string['deleteconfirm'] = '"{$a}" seçeneğini gerçekten silmek istiyor musunuz?';
$string['distribution_algorithm'] = 'Dağıtım Algoritması';
$string['distribution_published'] = 'Dağıtım sonuçları yayınlandı';
$string['distribution_saved'] = 'Dağıtım ({$a}s içinde) kaydedildi.';
$string['distribution_table'] = 'Dağıtım Tablosu';
$string['edit_choice'] = 'Seçeneği düzenle';
$string['edit_rating'] = 'Derecelendirmeyi düzenle';
$string['err_maximum'] = 'Bu alan için maksimum değer {$a}.';
$string['err_minimum'] = 'Bu alan için minimum değer {$a}.';
$string['err_positivnumber'] = 'Burada pozitif bir sayı girmelisiniz.';
$string['err_required'] = 'Bu alan için bir değer girmeniz gerekir.';
$string['export_choice_alloc_suffix'] = '- Dağıtım';
$string['export_choice_text_suffix'] = '- Metin';
$string['export_options'] = 'Seçenekleri Dışa Aktar';
$string['filter_hide_users_without_rating'] = 'Değerlendirmesi olmayan kullanıcıları gizle';
$string['filter_show_alloc_necessary'] = 'Dağıtımı yapılmış kullanıcıları gizle';
$string['filtermanualtabledesc'] = 'Manuel dağıtım formu tablosuna uygulanan filtreleri açıklar.';
$string['filtertabledesc'] = 'Dağıtım tablosuna uygulanan filtreleri açıklar.';
$string['groupingname'] = '"{$a}" Adil Dağıtım(Fair Allocation) kullanılarak oluşturuldu';
$string['invalid_dates'] = 'Tarihler geçersiz. Başlangıç tarihi bitiş tarihinden önce olmalıdır.';
$string['invalid_publishdate'] = 'Yayınlanma tarihi geçersiz. Yayınlanma tarihi derecelendirme bitiminden sonra olmalıdır.';
$string['is_published'] = 'Yayınlanan';
$string['last_algorithm_run_date'] = 'Algoritma son çalıştırma zamanı';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Son çalıştırmanın durumu';
$string['last_algorithm_run_status_-1'] = 'Başarısız';
$string['last_algorithm_run_status_0'] = 'Başlatılmadı';
$string['last_algorithm_run_status_1'] = 'Çalışıyor';
$string['last_algorithm_run_status_2'] = 'Başarılı';
$string['log_allocation_published'] = 'Dağıtım yayınlandı';
$string['log_allocation_published_description'] = '"{$a->userid}" kimliğine sahip kullanıcı "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım sonuçlarını yayınladı.
 ';
$string['log_allocation_statistics_viewed'] = 'Dağıtım istatistikleri görüntülendi';
$string['log_allocation_statistics_viewed_description'] = '"{$a->userid}" kimliğine sahip kullanıcı "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım için dağıtım istatistiklerini inceledi.';
$string['log_allocation_table_viewed'] = 'Dağıtım tablosu görüntülendi';
$string['log_allocation_table_viewed_description'] = '"{$a->userid}" kimliğine sahip kullanıcı "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım için dağıtım tablosunu görüntüledi.';
$string['log_distribution_triggered'] = 'Dağıtım tetiklendi';
$string['log_distribution_triggered_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğiyle Adil Dağıtım dağılımını tetikledi. Algoritma için {$a->time_needed} sn gerekli.';
$string['log_index_viewed'] = 'Kullanıcı tüm Adil Dağıtım örneklerini inceledi';
$string['log_index_viewed_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, bu dersteki tüm Adil Dağıtım örneklerini inceledi.';
$string['log_manual_allocation_saved'] = 'Manuel dağıtım kaydedildi';
$string['log_manual_allocation_saved_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım için manuel bir dağıtım kaydetti.';
$string['log_rating_deleted'] = 'Kullanıcı derecelendirmesi silindi';
$string['log_rating_deleted_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım için derecelendirmesini silmiş.';
$string['log_rating_saved'] = 'Kullanıcı oyu kaydedildi';
$string['log_rating_saved_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğiyle Adil Dağıtım için derecelendirmesini kaydetti.';
$string['log_rating_viewed'] = 'Kullanıcı değerlendirmesi görüntülendi';
$string['log_rating_viewed_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım için derecelendirmesini inceledi.';
$string['log_ratingallocate_viewed_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğine sahip Adil Dağıtım\'ı inceledi.';
$string['log_ratings_and_allocation_table_viewed'] = 'Derecelendirmeler ve değerlendirme tablosu görüntülendi';
$string['log_ratings_and_allocation_table_viewed_description'] = '"{$a->userid}" kimliğine sahip kullanıcı, "{$a->ratingallocateid}" kimliğine sahip Adil Değerlendirme için derecelendirme ve dağıtım tablosunu inceledi.';
$string['manual_allocation'] = 'Manuel Dağıtım';
$string['manual_allocation_form'] = 'Manuel Dağıtım Formu';
$string['manual_allocation_nothing_to_be_saved'] = 'Kaydedilecek hiçbir şey yoktu.';
$string['manual_allocation_saved'] = 'Manuel dağıtımınız kaydedildi.';
$string['messageprovider:allocation'] = 'Yayınlanan dağıtım hakkında bildirim';
$string['modify_allocation_group'] = 'Dağıtımı Değiştir';
$string['modify_allocation_group_desc_published'] = 'Dağıtım sonuçları yayınlandı.
Sonuçları sadece özenle değiştirmelisiniz.
Bunu yaparsanız, lütfen değişiklikleri öğrencilere manuel olarak bildirin!';
$string['modify_allocation_group_desc_rating_in_progress'] = 'Derecelendirme aşaması şu anda çalışıyor. Derecelendirme aşaması sona erdikten sonra dağıtım işlemini başlatabilirsiniz.';
$string['modify_allocation_group_desc_ready'] = 'Derecelendirme aşaması sona erdi. Şimdi otomatik dağıtım için algoritmayı çalıştırabilirsiniz.';
$string['modify_allocation_group_desc_ready_alloc_started'] = 'Derecelendirme aşaması sona erdi. Bazı dağıtımlar zaten oluşturulmuş.
Algoritmanın yeniden çalıştırılması tüm mevcut dağıtımları siler.
Artık dağıtımları manuel olarak değiştirebilir veya dağıtımları yayınlamaya devam edebilirsiniz.';
$string['modify_allocation_group_desc_too_early'] = 'Derecelendirme aşaması henüz başlamadı. Derecelendirme aşaması sona erdikten sonra dağıtım işlemini başlatabilirsiniz.';
$string['modify_choices'] = 'Seçenekleri Düzenle';
$string['modify_choices_explanation'] = 'Tüm seçeneklerin listesini gösterir. Burada, seçenekler gizlenebilir, değiştirilebilir ve silinebilir.';
$string['modify_choices_group'] = 'Seçenekler';
$string['modify_choices_group_desc_published'] = 'Dağıtımlar yayınlandı, seçeneklerin değiştirilmesi artık tavsiye edilmiyor.';
$string['modify_choices_group_desc_rating_in_progress'] = 'Derecelendirme devam ediyor, bu adımdaki kullanılabilir seçenek kümesini değiştirmemelisiniz.';
$string['modify_choices_group_desc_ready'] = 'Derecelendirme aşaması sona ermiştir, artık her bir seçenekten gelen öğrenci miktarını değiştirebilir veya dağıtımın sonucunu değiştirmek için bazı seçenekleri devre dışı bırakabilirsiniz.';
$string['modify_choices_group_desc_ready_alloc_started'] = 'Derecelendirme aşaması sona ermiştir, artık her bir seçenekten gelen öğrenci miktarını değiştirebilir veya dağıtımın sonucunu değiştirmek için bazı seçenekleri devre dışı bırakabilirsiniz.';
$string['modify_choices_group_desc_too_early'] = 'Burada, öğrenciler için uygun olması gereken seçenekler belirtilebilir.';
$string['modulename'] = 'Adil Dağıtım';
$string['modulename_help'] = 'Adil Dağıtım modülü, katılımcılarınızın oylayabileceği seçenekleri belirlemenizi sağlar. Katılımcılar daha sonra derecelendirmelerine göre mevcut seçeneklere otomatik olarak dağıtılabilir.';
$string['modulenameplural'] = 'Adil Dağıtımlar';
$string['moodlegroups_created'] = 'Karşılık gelen Moodle grupları ve gruplamaları oluşturuldu.';
$string['newchoice'] = 'Yeni seçenek ekle';
$string['newchoicetitle'] = 'Yeni seçenek {$a}';
$string['no_allocation_notification_message'] = '"{$a->ratingallocate}" ile ilgili olarak, hiçbir seçeneğe atanamadınız.';
$string['no_choice_to_rate'] = 'Oy vermek için seçenek yok!';
$string['no_id_or_m_error'] = 'Bir course_module kimliği veya bir örnek kimliği belirtmelisiniz';
$string['no_rating_given'] = 'Derecelendirilmemiş';
$string['no_rating_possible'] = 'Şu anda, mümkün bir derecelendirme yok!';
$string['no_user_to_allocate'] = 'Dağıtım yapabileceğiniz kullanıcı yok';
$string['pluginadministration'] = 'Adil Dağıtım yönetimi';
$string['pluginname'] = 'Adil Dağıtım';
$string['privacy:metadata:preference:flextable_filter'] = 'Dağıtımlar tablosuna uygulanan filtreleri saklar.';
$string['privacy:metadata:preference:flextable_manual_filter'] = 'Manuel dağıtımlar tablosuna uygulanan filtreleri saklar.';
$string['privacy:metadata:ratingallocate_allocations'] = 'Bir etkinlik örneği için kullanıcının dağıtımı yapılmış seçimleri hakkındaki bilgiler.';
$string['privacy:metadata:ratingallocate_allocations:choiceid'] = 'Kullanıcının atamasının yapıldığı seçeneğin kimliği';
$string['privacy:metadata:ratingallocate_allocations:ratingallocateid'] = 'Bu dağıtımın ait olduğu etkinlik örneğinin kimliği';
$string['privacy:metadata:ratingallocate_allocations:userid'] = 'Bir seçeneğe dağıtımı yapılan kullanıcının kimliği';
$string['privacy:metadata:ratingallocate_ratings'] = 'Verilen seçenekler için kullanıcının derecelendirmeleri hakkında bilgiler.';
$string['privacy:metadata:ratingallocate_ratings:choiceid'] = 'Kullanıcının oyladığı seçeneğin kimliği';
$string['privacy:metadata:ratingallocate_ratings:rating'] = 'Bir kullanıcının bir seçeneğe verdiği puan.';
$string['publish_allocation'] = 'Dağıtımı Yayınla';
$string['publish_allocation_group'] = 'Dağıtımı Yayınla';
$string['publish_allocation_group_desc_published'] = 'Dağıtım sonuçları zaten yayınlandı.
Tüm dağıtımlar için dersiniz dahilinde gruplar oluşturmayı seçebilirsiniz.
Aynı gruplar bu eklenti tarafından zaten oluşturulduysa, yeniden doldurmadan önce temizlenirler.';
$string['publish_allocation_group_desc_rating_in_progress'] = 'Derecelendirme aşaması devam ediyor. Lütfen derecelendirme aşaması sona erene kadar bekleyin ve ardından ilk olarak dağıtımları oluşturmaya başlayın.';
$string['publish_allocation_group_desc_ready'] = 'Henüz bir dağıtım yok. Lütfen dağıtım değiştirme bölümüne bakınız.';
$string['publish_allocation_group_desc_ready_alloc_started'] = 'Dağıtım sonuçları şimdi yayınlanabilir.
Dağıtım sonuçlarını yayınladıktan sonra artık değiştirilemez.
Lütfen raporlar bölümündeki bağlantıyı izleyerek mevcut dağıtımlara bir göz atın.
Tüm dağıtımlar için dersiniz dahilinde gruplar oluşturmayı seçebilirsiniz.
Aynı gruplar bu eklenti tarafından zaten oluşturulduysa, yeniden doldurmadan önce temizlenirler.
Bu, dağıtımın yayınlanmasından önce ve sonra yapılabilir.';
$string['publish_allocation_group_desc_too_early'] = 'Derecelendirme aşaması henüz başlamadı. Lütfen derecelendirme aşaması sona erene kadar bekleyin ve ardından ilk olarak dağıtımları oluşturmaya başlayın.';
$string['publishdate'] = 'Tahmini yayınlanma tarihi';
$string['publishdate_estimated'] = 'Tahmini yayınlanma tarihi';
$string['rateable_choices'] = 'Uygun Seçenekler';
$string['rated'] = '{$a} olarak derecelendirildi';
$string['rating_begintime'] = 'Derecelendirme başlangıcı';
$string['rating_endtime'] = 'Derecelendirme bitişi';
$string['rating_is_over'] = 'Derecelendirme bitti.';
$string['rating_is_over_no_allocation'] = 'Derecelendirme bitti. Herhangi bir seçeneğe dağıtımınız yapılamadı.';
$string['rating_is_over_with_allocation'] = 'Derecelendirme bitti. \'{$a}\' için dağıtımınız yapıldı.';
$string['rating_raw'] = '{$a}';
$string['ratingallocate'] = 'Adil Dağıtım';
$string['ratingallocate:addinstance'] = 'Yeni bir Adil Dağıtım örneği ekleyin';
$string['ratingallocate:export_ratings'] = 'Kullanıcı derecelendirmelerini dışa aktarabilme yeteneği';
$string['ratingallocate:give_rating'] = 'Seçenek oluşturun veya düzenleyin';
$string['ratingallocate:modify_choices'] = 'Adil Dağıtım\'ın seçenekler kümesini değiştirme, düzenleme veya silme yeteneği';
$string['ratingallocate:start_distribution'] = 'Kullanıcıların seçeneklere dağıtımını başlat';
$string['ratingallocate:view'] = 'Adil Dağıtım örneklerini görüntüle';
$string['ratingallocatename'] = 'Bu Adil Dağıtım\'ın Adı';
$string['ratingallocatename_help'] = 'Lütfen bu Adil Dağıtım etkinliği için bir isim seçin.';
$string['ratings_deleted'] = 'Derecelendirmeleriniz silindi.';
$string['ratings_saved'] = 'Derecelendirmeleriniz kaydedildi.';
$string['ratings_table'] = 'Derecelendirmeler ve Dağıtımlar';
$string['ratings_table_sum_allocations'] = 'Dağıtım sayısı / Maksimum';
$string['ratings_table_sum_allocations_value'] = '{$a->sum} / {$a->max}';
$string['ratings_table_user'] = 'Kullanıcı';
$string['reports_group'] = 'Raporlar';
$string['results_not_yet_published'] = 'Sonuçlar henüz yayınlanmadı.';
$string['runalgorithmbycron'] = 'Derecelendirme döneminden sonra otomatik dağıtım';
$string['runalgorithmbycron_help'] = 'Dağıtım algoritmasını derecelendirme süresi sona erdikten sonra otomatik olarak çalıştırır. Ancak, sonuçların manuel olarak yayınlanması gerekir.';
$string['saveandcontinue'] = 'Kaydet ve Devam Et';
$string['saveandnext'] = 'Kaydet ve sonrakini ekle';
$string['select_strategy'] = 'Derecelendirme stratejisi';
$string['select_strategy_help'] = 'Bir derecelendirme stratejisi seçin:

* **Kabul Et-Reddet** Kullanıcı, her seçeneği kabul veya reddetmek için karar verebilir.
* **Kabul Et-Nötr-Reddet** Kullanıcı, her seçenek için kabul, red veya bu konuda tarafsız olmaya karar verebilir.
* **Likert Ölçeği** Kullanıcı her bir seçeneği belirli bir aralıktaki bir sayı ile değerlendirebilir. Sayı aralığı ayrı ayrı tanımlanabilir (0 ile başlayan). Yüksek bir sayı, yüksek bir tercihe karşılık gelir.
* **Puan Verme** Kullanıcı, bir dizi puan atayarak seçenekleri derecelendirebilir. Maksimum puan sayısı ayrı ayrı tanımlanabilir. Yüksek puanlar yüksek bir tercihe karşılık gelir.
* **Seçenekleri Sırala** Kullanıcının mevcut seçenekleri sıralaması gerekir. Kaç seçeneğin derecelendirilmesi gerektiği tek tek tanımlanabilir.
* **Kabul İşareti** Kullanıcı, kendisi için kabul edilebilir olup olmadığını her seçenek için belirtebilir.';
$string['show_allocation_statistics'] = 'Dağıtım İstatistiklerini Göster';
$string['show_allocation_table'] = 'Dağıtımlara Genel Bakış';
$string['show_choices_header'] = 'Tüm seçeneklerin listesi';
$string['show_table'] = 'Derecelendirmeleri ve Dağıtımları Göster';
$string['start_distribution'] = 'Dağıtım Algoritmasını Çalıştır';
$string['start_distribution_explanation'] = 'Bir algoritma otomatik olarak kullanıcıları verilen derecelendirmelerine göre adil bir şekilde dağıtmaya çalışacaktır.';
$string['strategy_lickert_max_no'] = 'En fazla {$a} seçeneğe 0 puan atayabilirsiniz.';
$string['strategy_lickert_name'] = 'Likert Ölçeği';
$string['strategy_lickert_rating_biggestwish'] = '{$a} - Çok beğendim';
$string['strategy_lickert_rating_exclude'] = '{$a} - Hariç tut';
$string['strategy_lickert_setting_maxlickert'] = 'Likert ölçeğinde en yüksek sayı (3, 5 veya 7 yaygın değerlerdir)';
$string['strategy_lickert_setting_maxno'] = 'Kullanıcının 0 ile oylayabileceği maksimum seçenek sayısı';
$string['strategy_not_specified'] = 'Bir strateji seçmelisin.';
$string['strategy_order_choice_none'] = 'Lütfen bir seçim yap';
$string['strategy_order_explain_choices'] = 'Her seçim kutusunda bir seçim yapın. İlk tercih en yüksek önceliği alır.';
$string['strategy_order_header_description'] = 'Mevcut Seçenekler';
$string['strategy_order_name'] = 'Seçenekleri Sırala';
$string['strategy_order_no_choice'] = '{$a}. Seçenek';
$string['strategy_order_setting_countoptions'] = 'Kullanıcının oy vermesi gereken asgari alan sayısı (seçenek sayısına eşit veya daha küçük!)';
$string['strategy_order_use_only_once'] = 'Seçenekler iki kez seçilemez ve benzersiz olmalıdır.';
$string['strategy_points_explain_distribute_points'] = 'Her seçeneğe puan verin, dağıtılacak toplam {$a} puanınız var. En fazla puanı vererek en iyi seçeneği önceliklendirin.';
$string['strategy_points_explain_max_zero'] = 'En fazla {$a} seçeneğe 0 puan atayabilirsiniz.';
$string['strategy_points_incorrect_totalpoints'] = 'Yanlış toplam puan sayısı. Tüm puanların toplamı {$a} olmalıdır.';
$string['strategy_points_max_count_zero'] = 'En az {$a} seçeneğe 0\'dan fazla puan vermelisin.';
$string['strategy_points_name'] = 'Puan Verme';
$string['strategy_points_setting_maxzero'] = 'Kullanıcının 0 puan verebileceği maksimum seçenek sayısı';
$string['strategy_points_setting_totalpoints'] = 'Kullanıcının atayabileceği toplam puan sayısı';
$string['strategy_settings_default'] = 'Derecelendirme formu için varsayılan değer';
$string['strategy_settings_default_help'] = 'Kullanıcılara sağlanan derecelendirme formu, mevcut her seçenek için bir dizi radyo düğmesi(radio buttons) içerir.
Bu değer, radyo düğmelerini oluştururken kullanılacak olan varsayılan değeri tanımlar.';
$string['strategy_settings_label'] = '"{$a}" için etiket';
$string['strategy_tickyes_accept'] = 'Kabul et';
$string['strategy_tickyes_error_mintickyes'] = 'En az {$a} kutu işaretlemelisiniz.';
$string['strategy_tickyes_explain_mintickyes'] = 'En az {$a} kutu işaretlemelisiniz.';
$string['strategy_tickyes_name'] = 'Kabul İşareti';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Kabul edilecek minimum seçenek sayısı';
$string['strategy_yesmaybeno_max_count_no'] = 'En fazla {$a} seçeneğine "Reddet" atayabilirsiniz.';
$string['strategy_yesmaybeno_max_no'] = 'Sadece {$a} seçeneğe "Reddet" atayabilirsiniz.';
$string['strategy_yesmaybeno_name'] = 'Kabul Et-Nötr-Reddet';
$string['strategy_yesmaybeno_rating_maybe'] = 'Nötr';
$string['strategy_yesmaybeno_rating_no'] = 'Reddet';
$string['strategy_yesmaybeno_rating_yes'] = 'Kabul Et';
$string['strategy_yesmaybeno_setting_maxno'] = 'Kullanıcının "Reddet" ile oylayabileceği maksimum seçenek sayısı';
$string['strategy_yesno_max_no'] = 'Sadece {$a} seçeneklerine "Reddet" atayabilirsiniz.';
$string['strategy_yesno_maximum_crossout'] = 'En fazla {$a} seçeneğe "Reddet" atayabilirsiniz.';
$string['strategy_yesno_name'] = 'Kabul Et-Reddet';
$string['strategy_yesno_rating_choose'] = 'Kabul Et';
$string['strategy_yesno_rating_crossout'] = 'Reddet';
$string['strategy_yesno_setting_crossout'] = 'Kullanıcının "Reddet" ile oylayabileceği maksimum seçenek sayısı';
$string['strategyname'] = 'Strateji "{$a}"';
$string['strategyspecificoptions'] = 'Stratejiye özel seçenekler';
$string['timeremaining'] = 'Kalan süre';
$string['too_early_to_distribute'] = 'Dağıtmak için çok erken. Değerlendirme henüz bitmedi.';
$string['too_early_to_rate'] = 'Oy vermek için henüz çok erken.';
$string['too_few_choices_to_rate'] = 'Oy vermek için çok az seçenek var! Öğrenciler en az {$a} seçeneği derecelendirmek zorunda!';
$string['unassigned_users'] = 'Atanmamış Kullanıcılar';
$string['update_filter'] = 'Filtreyi Güncelle';
$string['you_are_not_allocated'] = 'Hiçbir seçeneğe dağıtımın yapılmadı!';
$string['your_allocated_choice'] = 'Dağıtım Sonucunuz';
$string['your_rating'] = 'Değerlendirmeniz';
