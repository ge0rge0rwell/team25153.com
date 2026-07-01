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
 * Strings for component 'tool_advancedspamcleaner', language 'tr', version '5.0'.
 *
 * @package     tool_advancedspamcleaner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['akismetkey'] = 'Akismet anahtarınız';
$string['akismetkey_desc'] = 'Akismet.com\'dan aldığınız anahtarı girin';
$string['alreadyreported'] = 'Zaten bu içeriği spam olarak bildirmişsinizdir.';
$string['apilimit'] = 'Api sınırı';
$string['apilimit_help'] = 'Maksimum miktarda Api yapmak için çağırır. (0 = sınırsız)';
$string['blogpost'] = 'Blog yazısı';
$string['cannotdelete'] = 'Bu kullanıcı için içerik silinemiyor.';
$string['commment'] = 'Yorum Yap';
$string['confirmdelete'] = 'Spamcıyı sil';
$string['confirmdeletemsg'] = 'Eminim, <strong>{$a->firstname} {$a->lastname} ({$a->username})</strong>  işaretleyicisini spam olarak işaretlemek ister misiniz? Bu kullanıcıya ait veriler silinir veya kaldırılır.';
$string['confirmspamreportmsg'] = 'Bu içeriği spam olarak bildirmek istediğinizden emin misiniz?';
$string['countcomment'] = 'Yorumlar: {$a}';
$string['countforum'] = 'Forum gönderileri: {$a}';
$string['countmessageread'] = 'İletileri oku: {$a}';
$string['countmessageunread'] = 'Okunmamış iletiler: {$a}';
$string['counttags'] = 'Benzersiz etiketler: {$a}';
$string['datelimits'] = 'Tarih sınırları';
$string['deletebutton'] = 'Nuke spamcısı';
$string['enddate'] = 'Bitiş tarihi';
$string['forummessage'] = 'Forum iletisi';
$string['forumsubject'] = 'Forum konusu';
$string['hitlimit'] = 'hit sınırı';
$string['hitlimit_help'] = 'Bu miktarda istenmeyen posta girişi tespit edildikten sonra durun (0 = sınırsız)';
$string['keywordstouse'] = 'Kullanılacak anahtar kelimeler';
$string['limithit'] = 'Dizi sınırına gelindi. Takip eden sonuçlar tam olmayabilir ..';
$string['limits'] = 'Sınırlar';
$string['message'] = 'İleti';
$string['messageblocked'] = 'Spam önleme sistemimiz tarafından spam olabileceğini işaretlediğinden yayınınız engellendi. Durum böyle değilse, lütfen <a href="http://docs.moodle.org/en/Moodle.org_FAQ#My_post_has_been_incorrectly_flagged_as_containing_spam">http://docs.moodle.org/en/Moodle.org_FAQ</a>. Kopyalayıp yapıştırmanız gerekiyorsa mesajınız aşağıda.';
$string['messageblockedtitle'] = 'Potansiyel spam tespit edildi!';
$string['messageprovider:spamreport'] = 'Spam raporu';
$string['method'] = 'Kullanma yöntemi';
$string['methodoptions'] = 'Seçenekler yöntemi';
$string['methodused'] = 'Kullanılan spam araştırma metodu: {$a}';
$string['missingkeywords'] = 'Anahtar kelimeler boş olamaz';
$string['missingmethod'] = 'Kullanılacak yöntem boş olamaz';
$string['missingscope'] = 'Aramak için kapsam belirtilmedi';
$string['noakismetkey'] = 'Bu seçeneği kullanmadan önce api tuşunu ayarlar sayfasından ayarlayın.';
$string['notrecentlyaccessed'] = 'Dikkat edin! Bu hesabın ilk erişim tarihi bir aydan fazla. Gerçekten bir spamcı olduğundan emin olun.';
$string['nukeuser'] = 'Nuke kullanıcı';
$string['pluginname'] = 'Gelişmiş spam temizleyici';
$string['pluginpage'] = 'Eklenti sayfası';
$string['pluginsettings'] = '{$a} için gelişmiş spam temizleyici alt eklentileri ayarları';
$string['reportasspam'] = 'Spam olarak bildir';
$string['reportcontentasspam'] = 'İçeriği spam olarak bildir';
$string['reportissue'] = 'Bir sorunu bildirin';
$string['searchblogs'] = 'Blogları ekle';
$string['searchcomments'] = 'Yorumları ekle';
$string['searchforums'] = 'Forumları ekle';
$string['searchmsgs'] = 'İletileri ekle';
$string['searchscope'] = 'Spam arama kapsamı';
$string['searchusers'] = 'Kullanıcı profillerini ekle';
$string['settingpage'] = 'Gelişmiş spam temizleyici ayarları';
$string['showstats'] = 'Aşağıdaki kayıtların sayısı spam olup olmadığı kontrol edildi: <br/> Bloglar: {$a->blogs}, Kullanıcı Profilleri: {$a->users}, Yorumlar: {$a->comments},
     İletiler: {$a->msgs}, Forum Mesajları: {$a->forums} <br/> Kullanılan süre {$a->time} saniye civarında';
$string['spam_deletion:addinstance'] = 'Spam silme engellemeyi ekle';
$string['spam_deletion:spamdelete'] = 'Spam\' ı sil';
$string['spam_deletion:viewspamreport'] = 'Spam raporlarını görüntüle';
$string['spamauto'] = 'Ortak spam anahtar kelimeleri kullanarak spam\'i otomatik algıla';
$string['spamcannotdelete'] = 'Bu kullanıcı silinemiyor';
$string['spamcannotfinduser'] = 'Aramanızla eşleşen hiç kimse yok';
$string['spamcleanerintro'] = 'Bu komut, belirli dizeler için tüm kullanıcı profillerini, yorumları, blog yazılarını, forum yazılarını ve mesajlarını aramak ve daha sonra spamcıların oluşturduğu bu hesapları silmenizi sağlar.
     Virgül (örn. Casino, porno) kullanarak birden çok anahtar kelime arayabilir veya sitenizi taramak için bir üçüncü taraf sistemi kullanabilirsiniz (örn., Akizmet).
     Lütfen bunun arama yönteminize bağlı olarak bir süre alabileceğini unutmayın. Aramanın kapsamını azaltmak için sınırlar kullanın.';
$string['spamcount'] = 'Spam sayısı';
$string['spamdeleteall'] = 'Tüm bu kullanıcı hesaplarını sil';
$string['spamdeleteallconfirm'] = 'Tüm bu kullanıcı hesaplarını silmek istediğinizden emin misiniz? Bunu geri alamazsın.';
$string['spamdeleteconfirm'] = 'Bu girişi silmek istediğinizden emin misiniz? Bunu geri alamazsın.';
$string['spamdesc'] = 'Açıklama';
$string['spamdescription'] = 'Spamcı - spam silindi ve hesap bloke edildi {$a}';
$string['spameg'] = 'Örneğin: casino, porno, xxx';
$string['spamfromblog'] = 'Blog gönderisinden:';
$string['spamfromcomments'] = 'Yorumlardan:';
$string['spamfromforumpost'] = 'Forumun gönderilerinden:';
$string['spamfrommessages'] = 'İletilerden:';
$string['spaminvalidresult'] = 'Bilinmeyen ancak geçersiz sonuç';
$string['spamoperation'] = 'İşlem';
$string['spamreportmessage'] = '{$a->spammer} Bir spamcı olabilir. Spam raporlarını şu adresten görüntüleyin: {$a->url}';
$string['spamreportmessagetitle'] = '{$a->spammer} bir spamcı olabilir.';
$string['spamreports'] = 'Spam raporları:  {$a}';
$string['spamresult'] = 'Bir kullanıcının silinmesinin spam gönderilen girişi silmediğini lütfen unutmayın <br /> Aşağıdaki özelliklere sahip kullanıcı profillerini arama sonuçları:';
$string['spamsearch'] = 'Spam arama';
$string['spamtext'] = 'Spam metini';
$string['spamtype'] = 'Spam türü';
$string['startdate'] = 'Başlama tarihi';
$string['thanksspamrecorded'] = 'Teşekkürler, spam raporunuz kaydedildi.';
$string['totalcount'] = 'Bu kullanıcının toplam kayıtları: -';
$string['usedatestartlimit'] = 'Tarih sınırlarını kullan';
$string['usedatestartlimit_help'] = 'Varlıklardaki spam aramasını yalnızca seçili tarih aralığında çalıştırmak için etkinleştirin';
$string['usekeywords'] = 'Girilen anahtar kelimeleri kullan';
$string['uselimits'] = 'Sınırları kullan';
$string['uselimits_help'] = 'Kaynak kullanımını azaltmak için sınırlar kullanın <br /> (sınırların, otomatik algılama ve anahtar kelime yöntemleri için kullanılmadığına dikkat edin)';
$string['userdesc'] = 'Kullanıcı açıklaması';
