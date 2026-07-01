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
 * Strings for component 'local_amos', language 'tr', version '5.0'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS, Moodle dizelerinin ve geçmişinin merkezi bir deposudur. İngilizce dizelerin Moodle koduna eklenmesini izler, çevirileri bir araya getirir, ortak çeviri görevlerini yerine getirerek Moodle sunucularına dağıtılmak üzere dil paketleri oluşturur.</p>
<p>Daha fazla bilgi için <a href="https://docs.moodle.org/dev/AMOS_manual">AMOS belgelerine</a> bakın.</p>';
$string['amos'] = 'AMOS - Moodle çeviri araç seti';
$string['amos:changecontriblang'] = 'Katkıda bulunulan dizelerin dilini değiştir';
$string['amos:commit'] = 'Hazırlanan dizeleri ana depoya işle';
$string['amos:editlangconfig'] = 'Dil paketi yapılandırma dizelerini düzenle';
$string['amos:execute'] = 'Verilen AMOScript\'i çalıştır';
$string['amos:importfile'] = 'Yüklenen dosyadan çevirileri içe aktar ve geçici alana ekle.';
$string['amos:importstrings'] = 'Dizeleri (İngilizce olanlar dahil) doğruda ana depoya al.';
$string['amos:manage'] = 'AMOS portal\'ı yönetin';
$string['amos:stage'] = 'AMOS çeviri aracını kullanın ve metinleri hazırlama alanına ekleyin.';
$string['amos:stash'] = 'Geçerli aşamayı kalıcı depoda saklar';
$string['amos:usegoogle'] = 'Google Çeviri servisini kullanın';
$string['applangindexfile'] = 'Moodle Uygulaması langindex dosyası konumu';
$string['applangindexfile_desc'] = 'Dosyanın indirileceği tam URL. Bu işlem bir cron görevi tarafından yürütülecektir.';
$string['branchesall'] = 'Bilinen tüm Moodle sürümleri';
$string['branchesall_desc'] = 'AMOS tarafından desteklenen Moodle sürüm kodlarının virgülle ayrılmış listesi. Bu, çevirmen filtresindeki ve diğer yerlerdeki sürüm listesini oluşturmak için kullanılır.';
$string['branchsupported'] = 'Desteklenen en eski Moodle sürümü';
$string['branchsupported_desc'] = 'İngilizce metinlerdeki değişikliklerin takip edileceği ve dil paketlerinin oluşturulacağı en eski Moodle sürüm kodu. Referans için <https://docs.moodle.org/dev/Releases#Version_support> adresini kullanın.';
$string['cachedef_lists'] = 'AMOS\'ta bilinen dillerin ve bileşenlerin listeleri';
$string['cachedef_stats'] = 'AMOS tarafından oluşturulan istatistik verileri';
$string['commitbutton'] = 'İşle';
$string['commitkeepstaged'] = 'Dizeleri geçici alanda (stage) tut';
$string['commitmessage'] = 'Değişiklik notu';
$string['commitmessageempty'] = 'Lütfen bir işleme  (commit) notu girin.';
$string['commitstage'] = 'Hazırlanan dizeleri işle (commit)';
$string['commitstage_help'] = 'Geçici alandaki tüm çeviriler AMOS deposuna  kalıcı olarak kaydedidilir. (Çeviriler değerlendirme için onaya gönderildi.) Raflar teslimattan önce temizlenir ve hazır hale getirilir. Sadece teslime uygun olan dizeler saklanır. Bu sadece yeşil ile vurgulanan çevirilerine saklanacağı anlamına gelir. Raflar teslimattan sonra temizlenir.';
$string['committable'] = 'Bu dil paketini işlemek için izniniz var';
$string['committableall'] = 'tüm diller';
$string['committablenone'] = 'Kabul edilmiş dil yok- lütfen AMOS yöneticisine başvurun';
$string['componentsadditional'] = 'Ek olarak';
$string['componentsall'] = 'Tümü';
$string['componentsapp'] = 'Moodle Uygulaması';
$string['componentsnone'] = 'Hiçbiri';
$string['componentsstandard'] = 'Standart';
$string['componentsworkplace'] = 'Moodle Workplace';
$string['confirmaction'] = 'Emin misiniz? Bu işlem geri alınamaz';
$string['contribaccept'] = 'Kabul et';
$string['contribactions'] = 'Katkıda bulunulan çeviri işlemleri';
$string['contribactions_help'] = 'Yetkilerinize ve iş akışına bağlı olarak aşağıdaki işlemlerden birini seçebilirsiniz:

Uygula: Katkıda bulunulan çeviriyi kendi geçici alanınıza kopyalar (kaydı değiştirmez).
Bana Ata: İnceleme ve entegrasyon sorumluluğunu üzerinize alırsınız.
* Atamayı iptal et-müşterek çeviri için kimseye atamayın.
*İncelemeyi Başlat: Katkıyı kendinize atayıp durumunu \'İncelemede\' olarak günceller ve çeviriyi geçici alanınıza kopyalar.
* Kabul- çeviriyi kabul edildi olarak işaretleyin.
* Reddet: Çeviriyi reddeder; lütfen gerekçenizi yorum kısmında belirtin.
* Katkıda bulananlara durum değiştiğinde gönderisi ile ilgili değişiklikler e-posta ile bildirilecektir.';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Uygula';
$string['contribassignee'] = 'Sorumlu';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Bana devret';
$string['contribauthor'] = 'Yazar';
$string['contribclosedno'] = 'Sonuçlanmış katkıları gizle';
$string['contribclosedyes'] = 'Sonuçlanmış katkıları göster';
$string['contribcomponents'] = 'Bileşen(ler)';
$string['contribid'] = 'Kimlik';
$string['contribincomingnone'] = 'Gelen katkı yok';
$string['contribincomingsome'] = 'Gelen katkılar ({$a})';
$string['contriblanguage'] = 'Dil';
$string['contriblanguagebutton'] = 'Dönüştür';
$string['contriblanguagechange'] = 'Hatalı katkı dilinin düzeltilmesi';
$string['contriblanguagechange_help'] = 'Katkı hatalı olarak yanlış dil paketine gönderilmişse, aşağıdaki açılır menüden doğru dili seçin ve ardından Dönüştür düğmesini tıklayın.';
$string['contriblanguagereport'] = 'Yanlış katkı dilinin bildirilmesi';
$string['contriblanguagereport_help'] = 'Bu katkı yanlışlıkla yanlış dil paketine gönderildiyse, lütfen katkı URL\'sini kopyalayıp `translation@moodle.org` adresine bir e-postaya yapıştırın. Katkı daha sonra doğru dile taşınacaktır.';
$string['contriblanguagewrong'] = 'Yanlış bir dil mi?';
$string['contribnotif'] = '[AMOS] Teslimat bildirimi (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} sunduğunuz #{$a->id} {$a->subject} çeviri katkınızı kabul etti.
---------------------------------------------------------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} sunduğunuz #{$a->id} {$a->subject} çevirisini yorumladı.
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} katkıda bulunduğunuz çeviriyi dönüştürdü
# {$a->id} {$a->subject}

Katkınız için teşekkürler. Ancak çevirinizin sehven yanlış dil paketine gönderildiği tespit edilmiştir. Bu nedenle katkınız reddedilmiş ve incelenmek üzere doğru dil paketine taşınmıştır. Sizin bir işlem yapmanıza gerek yoktur.

İleride, dizeleri çevirmeye başlamadan önce lütfen kendi dilinizi seçtiğinizi iki kez kontrol edin.

---------------------------------------------------------------------
Orijinal katkı sayfası: {$a->contriborigurl}
Yeni katkı sayfası: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Dil paketi sorumlusu olarak, incelemeniz ve sisteme işlemeniz gereken  #{$a->id} {$a->subject} çeviri katkıları bulunlamaktadır.

Bir dil koordinatörü olarak size gönderilen çeviri katkılarını incelemeniz ve sonucunda kabul edildi veya red edildi olarak belirlemeniz gerekiyor.

Daha fazla bilgi için {$a->docsurl} bakın.
-------------------------------------------------- -------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} teslim ettiğiniz #{$a->id} {$a->subject} çevirisini red etti.
---------------------------------------------------------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} yeni  Çeviri teslim etti.
#{$a->id} {$a->subject}
---------------------------------------------------------------------

 {$a->message}

* Dil: {$a->language}
* Bileşen: {$a->components}
* Dize: {$a->strings}

---------------------------------------------------------------------
 Katkı sayfası: {$a->contriburl}';
$string['contribreject'] = 'Red';
$string['contribresign'] = 'Atamayı iptal et';
$string['contribstaged'] = '<a href="contrib.php?id={$a->id}">#{$a->id}</a>tarafından {$a->author} gönderilen katkı raflandı.';
$string['contribstagedinfo'] = 'Teslimat raflandı';
$string['contribstagedinfo_help'] = 'Raf dizeleri topluluk üyelerinin katkılarını içerir. Dil paketi yöneticileri tarafından gözden geçirilir ve durumları Kabul edildi (eğer kabul edilmişse) ve Re edildi ( eğer bazı nedenlerden dolayı resmi dil paketinde yer alamayacaksa) olarak ayarlanır.';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'İnceleme başlat';
$string['contribstatus'] = 'Durum';
$string['contribstatus0'] = 'Yeni';
$string['contribstatus10'] = 'İncelemede';
$string['contribstatus20'] = 'Red edildi';
$string['contribstatus30'] = 'Kabul edildi';
$string['contribstatus_help'] = 'Müşterek çeviri iş akışı aşağıdaki durumlardan oluşur:

* Yeni - teslimat yapılmış fakat henüz incelenmemiş
* İncelemede - çevirmen teslimatı yapmış fakat  koordinatör henüz incelememiş
* Red edildi - dil koordinatörü çeviriyi redetti ve muhtemelen makul bir açıklamada bulundu
* Kabul edildi - çeviri dil paketi koordinatörü tarafından kabul edildi';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'Dizeler';
$string['contribstringseq'] = '{$a->orig} yeni';
$string['contribstringsnone'] = '{$a->orig}  (bunların hepsi dil paketinde çevrildi)';
$string['contribstringssome'] = '{$a->orig} (bunlardan {$a->same} tanesi için zaten daha güncel bir çeviri mevcut';
$string['contribsubject'] = 'Konu';
$string['contribsubmittednone'] = 'Gönderilmiş teslimat yok';
$string['contribsubmittedsome'] = 'Katkıların ({$a})';
$string['contribtimemodified'] = 'Değiştirildi';
$string['contribute'] = 'Katkıda bulunun';
$string['contributenow'] = 'Şimdi katkıda bulunun!';
$string['contributestats'] = 'Şu ana kadar <Strong>toplam {$a->count}</strong> metin dizgesi AMOS sistemine kazandırıldı.';
$string['contributethanks'] = 'Son katkılarından dolayı {$a->listcontributors} \'a teşekkür ederiz.';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} and {$a->contributor4}';
$string['contributions'] = 'Katkılar';
$string['creditsaddcontributor'] = 'Katkıda bulunan Ekle';
$string['creditsaddmaintainer'] = 'Koordinatör ekle';
$string['creditscontact'] = 'Mesaj gönder';
$string['creditscontributors'] = 'Diğer katkıda bulunanlar';
$string['creditsdelcontributor'] = 'Katkıda bulunan kişi kaldır';
$string['creditsdelmaintainer'] = 'Koordinatör çıkar';
$string['creditsmaintainedby'] = 'Koordinatör';
$string['creditsnomaintainer'] = 'Hiç koordinatörü yok  <a href="{$a->url}"> Sen olur musun?  </a>';
$string['creditsthanks'] = 'Bu sayfada, Moodle çevirisine katkısı olan herkese teşekkür etmek istiyoruz.  Onların bu çabaları   Moodle\'ın dünya çapında  yayılmasını mümkün kıldı.';
$string['creditstitlelong'] = 'Dil koordinatörleri ve katkıda bulunanlar';
$string['creditstitleshort'] = 'Katkıda bulunanlar';
$string['diff'] = 'Karşılaştır';
$string['diffstringmode'] = 'Diğer çeviriye geç';
$string['err_exception'] = 'Hata: {$a}';
$string['err_invalidlangcode'] = 'Geçersiz lisan kodu';
$string['err_parser'] = 'Ayrıştırma hatası: {$a}';
$string['filtercmp'] = 'Bileşenler';
$string['filtercmp_desc'] = 'Bu bileşenlerdeki dizeleri göster';
$string['filtercmpnothingselected'] = 'Lütfen bir ve ya birkaç bileşen seçin';
$string['filterlng'] = 'Diller';
$string['filterlng_desc'] = 'Bu dillerdeki çevirileri görüntüle';
$string['filterlngnothingselected'] = 'Lütfen bir veya bir kaç dil seçin';
$string['filtermis'] = 'Çeşitli';
$string['filtermis_desc'] = 'Dizeleri görüntülemek için ek koşullar';
$string['filtermisfapp'] = 'yalnızca Moodle Uygulamasında kullanılan dizeler';
$string['filtermisfapp_help'] = 'Bu dize, Moodle Uygulamalarında {$a} olarak kullanılır';
$string['filtermisfhas'] = 'sadece çevrilmiş dizeler';
$string['filtermisfhlp'] = 'sadece yardım dizeleri';
$string['filtermisfmis'] = 'sadece eksik ve zaman aşımına uğramış dizeler';
$string['filtermisfout'] = 'sadece güncel olmayan dizeler';
$string['filtermisfstg'] = 'sadece rafdaki dizeler';
$string['filtermisfworkplace'] = 'Moodle Workplace\'te kullanılan dizeler';
$string['filtermisfworkplace_help'] = 'Bu dize Moodle Workplace\'te {$a} olarak kullanılır';
$string['filtersid'] = 'Dize tanımlayıcı';
$string['filtersid_desc'] = 'Dizeler kümesindeki anahtar';
$string['filtersidpartial'] = 'kısmı eşleşme';
$string['filtertxt'] = 'Alt dize';
$string['filtertxt_desc'] = 'Dize girilen metni içermelidir';
$string['filtertxtcasesensitive'] = 'harfe duyarlı';
$string['filtertxteng'] = 'İngilizce dizelerde';
$string['filtertxtregex'] = 'düzenli ifade';
$string['filtertxttra'] = 'çevrilmiş dizelerde';
$string['filterver'] = 'Sürüm';
$string['filterver_desc'] = 'Bu Moodle sürümü için dizeleri göster';
$string['filtervernothingselected'] = 'Lütfen bir sürüm seçin';
$string['foundmissing'] = '{$a} eksik';
$string['foundmissingonthispage'] = 'Bu sayfada {$a} eksik';
$string['foundtotal'] = '{$a} bulundu';
$string['googletranslate'] = 'google\'a sor';
$string['importfile'] = 'Dizeleri dosyadan al';
$string['importfile_help'] = 'Çevrimdışı tercüme edilmiş dizeleriniz varsa, onlara bu form aracılığıyla yerleştirebilirsiniz.

*Dosyalar Moodle PHP dosyasında tanımlı olana geçerli dizelereli içermelidir. Örnekler için Moodle kurulum `/lang/en/`dizinine bakabilirsiniz.

*Dosya adı ile  verilen bileşendeki dize tanımları İngilizce dize tanımları (\'moodle.php\', \'assignment.php\' veya \'enrol_manual.php\') ile aynı olmalıdır.
Dosyada bulunan tüm dizeler seçili sürüm ve dil için rafa eklenecektir.
Birden fazla PHP dosyasını bir ZİP dosyası içine koyarsanız aynı anda işlenebilir.';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Dil';
$string['languagepacks'] = 'Ek dil paketleri Moodle sitenize <em>Yönetim > Site yönetimi > Dil > Dil paketleri</em> aracılığıyla veya manuel olarak yüklenebilir. Daha fazla ayrıntı için <a href="https://docs.moodle.org/en/Language_packs">Dil paketleri belgelerine</a> bakın.';
$string['languages'] = 'Diller';
$string['languagesall'] = 'Hepsi';
$string['languagesnone'] = 'Hiçbiri';
$string['lastavailable'] = 'Mevcut en son sürüm';
$string['lessfilteringoptions'] = 'Daha az filtre seçeneği';
$string['limitreachedmsg'] = 'Çok fazla sonuç çıktı. Arama sonuçlarınızı daraltmak için filtre seçeneklerini değiştirmeyi deneyin.';
$string['log'] = 'Kayıt';
$string['logfilterbranch'] = 'Sürümler';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'İşleme (commit) mesajı içeriği';
$string['logfiltercommits'] = 'Teslimat fitresi';
$string['logfiltercommittedafter'] = 'Şu tarihten sonra işlenenler:';
$string['logfiltercommittedbefore'] = 'Şu tarihten önce işlenenler:';
$string['logfiltercomponent'] = 'Bileşenler';
$string['logfilterlang'] = 'Diller';
$string['logfiltershow'] = 'Filitrelen teslimatları ve dizeleri göster';
$string['logfiltersource'] = 'Kaynak';
$string['logfiltersourceamos'] = 'amos (web tabanlı çevirmen)';
$string['logfiltersourceautomerge'] = 'Otomatik birleştirme (ceviri başka bir daldan kopyalanır)';
$string['logfiltersourcebot'] = 'bot (toplu komut dosyası tarafından yürütülen işlemler)';
$string['logfiltersourcecommitscript'] = 'commitscript (commit mesajında AMOScript)';
$string['logfiltersourcefixdrift'] = 'fixdrift (sabit AMOS-git sürüklenme)';
$string['logfiltersourcegit'] = 'git (Moodle kaynak kodunun ve 1.x paketlerinin git aynası)';
$string['logfiltersourceimport'] = 'içe aktarma (katkıda bulunulan eklentiler)';
$string['logfiltersourcerevclean'] = 'revclean (ters temizleme işlemi)';
$string['logfilterstringid'] = 'Dize tanımlayıcı';
$string['logfilterstrings'] = 'Dize filtresi';
$string['logfilterusergrp'] = 'İşleyen (Committer)';
$string['logfilterusergrpor'] = 'veya';
$string['maintainers'] = 'Koordinötörler';
$string['manageamos'] = 'AMOS\'u yönet';
$string['markuptodate'] = 'Çeviriyi güncel olarak işaretle';
$string['markuptodatelabel'] = 'güncel olarak işaretle';
$string['messageprovider:checker'] = 'Dil paketi kontrol sonuçları';
$string['messageprovider:contribution'] = 'Teslim edilen çeviriler';
$string['morefilteringoptions'] = 'Daha fazla filtre seçeneği';
$string['newlanguage'] = 'Yeni dil';
$string['nodiffs'] = 'Fark bulunamadı';
$string['nofiletoimport'] = 'Alınacak bir dosya seçiniz';
$string['nologsfound'] = 'Hiç bir dize bulunamadı lütfen filtre seçeneklerini değiştirin';
$string['nostringsfound'] = 'Dize bulunamadı';
$string['nostringtoimport'] = 'Dosyada geçerli bir dize bulunamadı. Lütfen dosyanızın geçerli bir isim ve biçime sahip olduğundan emin olunuz.';
$string['nothingtostage'] = 'Hazırlama alanına eklenebilecek bir dize bulunamadı.';
$string['novalidzip'] = 'ZIP dosyası açılamıyor';
$string['numofcommitsabovelimit'] = 'En son {$a->limit} kullanılarak, katkıda bulunan filtresiyle eşleşen {$a->found} işlem bulundu';
$string['numofcommitsunderlimit'] = 'Katkıda bulunaan filtresiyle eşleşen {$a->found} işlem bulundu';
$string['numofmatchingstrings'] = 'Bunun içinde, {$a->commits} işlemelerindeki {$a->strings} değişiklikleri dize filtresiyle eşleşir';
$string['outdatednotcommitted'] = 'Güncel olmayan dizeler';
$string['outdatednotcommitted_help'] = 'AMOS, çeviri yapıldıktan sonra İngilizce orijinal metin değiştirildiği için bu dizenin güncelliğini yitirmiş olabileceğini tespit etti. Lütfen çeviriyi gözden geçirin.';
$string['outdatednotcommittedwarning'] = 'Güncel olmayan';
$string['ownstashactions'] = 'Ambar eylemleri';
$string['ownstashactions_help'] = '* Uygula: Ambardaki çevirileri hazırlama alanına kopyalar ve ambardaki kopyayı korur. Eğer dize zaten hazırlama alanındaysa, üzerine yazılır.
* Taşı (Pop): Çevirileri ambardan hazırlama alanına taşır ve ambarı siler (Uygula ve Sil işleminin birleşimidir).
* Sil (Drop): Ambarda saklanan dizeleri kalıcı olarak siler.
* Gönder (Submit): Ambardaki çevirilerin resmi dil paketine dahil edilmesi için koordinatörlere gönderilmesini sağlayan formu açar.';
$string['ownstashes'] = 'Ambarlarınız';
$string['ownstashes_help'] = 'Bu, oluşturduğunuz tüm ambarların listesidir.';
$string['ownstashesnone'] = 'Henüz bir ambarınız bulunmuyor.';
$string['permalink'] = 'Kalıcı bağlantı';
$string['placeholder'] = 'Yer tutucular';
$string['placeholder_help'] = 'Yer tutucular, dize içindeki {$a} veya {$a->something} gibi özel ifadelerdir. Metin ekrana yazdırıldığında bu ifadeler gerçek değerlerle değiştirilir.

Bunları orijinal metindeki haliyle, hiçbir değişiklik yapmadan kopyalamak çok önemlidir. Yer tutucuları tercüme etmeyin ve yazım yönlerini (soldan sağa) değiştirmeyin.';
$string['placeholderwarning'] = 'Yer tutucular';
$string['pluginclasscore'] = 'Çekirdek alt sistemler';
$string['pluginclassnonstandard'] = 'Standart olmayan eklentiler';
$string['pluginclassstandard'] = 'Standart eklentiler';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Eklenti türü konumları';
$string['plugintypelocations_desc'] = 'Standart eklentiler tarafından sağlanan alt eklenti türleri veya eski türler gibi ek standart eklenti türlerinin konumlarını tanımlamaya izin verir.';
$string['presetcommitmessage'] = '{$a->author} tarafından yapılan çeviri #{$a->id}';
$string['presetcommitmessage2'] = '{$a->source} dalındaki eksik dizeler {$a->target} dalına birleştirildi.';
$string['presetcommitmessage3'] = '{$a->versiona} ve {$a->versionb} arasındaki farkları düzelt.';
$string['privacy:commitnumber'] = 'Kaydet {$a}';
$string['privacy:contribnumber'] = 'Katkı {$a}';
$string['privacy:filterusage'] = 'Filtre kullanımı';
$string['privacy:metadata:db:amoscommits'] = 'Tüm commit ile ilgili meta verileri tutar.';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'Kullanıcı tarafından sağlanan işleme (commit) mesajı.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Katkının zaman damgası.';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Kaydetme kaynağı konumunda, örneğin Git\'te sağlanan kullanıcı kimliği.';
$string['privacy:metadata:db:amoscontributions'] = 'Topluluk üyelerinden katkıda bulunan çeviriler.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'Bu katkının ait olduğu dilin kodu.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Gönderimi açıklayan ilk mesaj.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'Ekli ambarın dahili tanımlayıcısı.';
$string['privacy:metadata:db:amoscontributions:status'] = 'Katkının iş akışı durumu ".';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Katkıda bulunan gönderimin konusu.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Katkı kaydının oluşturulduğu zamanın zaman damgası.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Katkı kaydının yakın zamanda değiştirildiği zamanın zaman damgası.';
$string['privacy:metadata:db:amosfilterusage'] = 'AMOS tercüman filtresi kullanım günlüğü.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Geçerli oturum dili.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'Kullanıcının AMOS deposuna işleme (commit) yapma yetkisi var mı?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Seçili bileşenlerin sayısı';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Seçilen dillerin sayısı';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Seçili sürümlerin sayısı';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Yalnızca mevcut çeviriler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Yalnızca gri listeli dize görüntülenmeli mi?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Yalnızca yardım dizeleri mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Yalnızca eksik ve güncel olmayan dizeler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Yalnızca güncel olmayan dizeler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Yalnızca aşamalı dizeler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Gri renkli dizeler sonuçlardan kaldırılmalı mı?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'Stringid için kısmi eşleşme isteniyor mu?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'Alt dizenin büyük / küçük harfe duyarlı olduğu düşünülmeli mi?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'Alt dizenin bir düzenli ifade (regex) olarak kabul edilip edilmeyeceği.';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Filtre formunun gönderildiği zamanın zaman damgası';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Kullanıcının profilinde seçilen ülke kodu';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Kullanıcının profilinden tercih ettiği dil';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'kullanıcı önceden seçilmiş dilleri kullandınız mı?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'Kullanıcı, formdaki önceden seçilmiş sürümleri kullandı mı?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Stringid belirtildi mi?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Belirtilen aramak için alt dize muydu?';
$string['privacy:metadata:db:amospreferences'] = 'Mevcut kullanıcı için AMOS tercihleri.';
$string['privacy:metadata:db:amospreferences:name'] = 'Tercih adı';
$string['privacy:metadata:db:amospreferences:value'] = 'Tercih değeri';
$string['privacy:metadata:db:amosstashes'] = 'Kasalarla ilgili bilgileri saklama havuzunda tutar';
$string['privacy:metadata:db:amosstashes:components'] = 'Saklanan aşamada depolanan bileşenlerin listesi';
$string['privacy:metadata:db:amosstashes:id'] = 'Kasanın dahili tanımlayıcısı';
$string['privacy:metadata:db:amosstashes:languages'] = 'Saklanan aşamada bulunan dillerin listesi';
$string['privacy:metadata:db:amosstashes:message'] = 'Kasayı açıklayan tam mesaj, zula katkıda bulunan bir çeviri olarak gönderildiğinde varsayılan tamamlama mesajı olarak kullanılır.';
$string['privacy:metadata:db:amosstashes:name'] = 'Kasanın adı veya unvanı';
$string['privacy:metadata:db:amosstashes:strings'] = 'Kasanın başlığı';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'Kasanın oluşturulduğu zamanın zaman damgası';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Kaydın yakın zamanda değiştirildiği zamanın zaman damgası';
$string['privacy:metadata:db:amostranslators'] = 'Bir dil paketi ile kullanıcı arasındaki ilişkiyi tanımlar. Bu kişi koordinatör (işleme yetkisi olan) veya katkıda bulunan olabilir.';
$string['privacy:metadata:db:amostranslators:lang'] = 'Çevirmenin çevirmesine izin verilen dil kodu veya tüm diller için yıldız işareti.';
$string['privacy:metadata:db:amostranslators:status'] = 'Kullanıcının, dil paketinin bakımcısı (0) veya açık katkı sağlayıcısı (1) olup olmadığını belirler.';
$string['privacy:metadata:external:languagepacks'] = 'Çeviri katkıları, dünya çapında dağıtılan ve Moodle sitelerine yüklenen ZIP dosyalarına aktarılır.';
$string['privacy:metadata:external:languagepacks:email'] = 'Katkıda bulunan e-posta adresi, dil paketi dosyalarına eklenebilir.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Katkıda bulunan adı, dil paketi dosyalarına eklenebilir.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Katkıda bulunan soyadı, dil paketi dosyalarına eklenebilir.';
$string['privacy:metadata:subsystem:comment'] = 'Yorum alt sisteminin eklenti tarafından nasıl kullanıldığını açıklayın.';
$string['privacy:stashnumber'] = 'Sakla {$a}';
$string['privileges'] = 'Yetkileriniz';
$string['privilegesnone'] = 'Genel bilgilere salt okunur erişimin var.';
$string['processing'] = 'işleniyor........';
$string['quicklinks'] = 'Hızlı bağlantı';
$string['quicklinks_amos'] = 'AMOS çevirmen';
$string['quicklinks_forum'] = 'Çeviri forumu';
$string['quicklinks_manual'] = 'Kullanım kılavuzu';
$string['quicklinks_newcomers'] = 'Yeni başlayanlar için Yardım';
$string['requestactions'] = 'Eylem';
$string['requestactions_help'] = '* Uygula - Raflanmış dizelereri kendi rafına kopyala. Eğer dizge mevcutsa bir sadece depoya gönderilir.
* Gizle - blok çekme isteği için artık bir daha görüntülenmez.';
$string['savefilter'] = 'Dizeleri göster';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript dizeleri depo üzerinde çalıştırmak için talimatlar kümesidir.';
$string['scriptexecute'] = 'Çalıştır ve sonuçları rafla';
$string['sourceversion'] = 'Kaynak sürüm';
$string['stage'] = 'Geçici alan';
$string['stageactions'] = 'Geçici alan işlemleri';
$string['stageactions_help'] = '* Hazırlanan metinleri düzenle: Filtre ayarlarını sadece hazırlama alanındaki çevirileri gösterecek şekilde günceller.
* İşlenemeyenleri temizle (Prune): İşleme (commit) yetkiniz olmayan tüm çevirileri hazırlama alanından kaldırır.
* Temeli Güncelle (Rebase): Mevcut çeviriyle aynı olan veya depodaki güncel çeviriden daha eski kalan metinleri hazırlama alanından çıkarır.
* Tümünü kaldır: Hazırlama alanını temizler; tüm hazırlanan çeviriler silinir.';
$string['stagedownload'] = 'İndir';
$string['stageedit'] = 'Raf dizesi ayarlarını düzenle';
$string['stageprune'] = '';
$string['stagerebase'] = 'Temeli Güncelle (Rebase)';
$string['stagestringsnocommit'] = 'Hazırlama alanında {$a->staged} metin bekliyor.';
$string['stagestringsnone'] = 'Hazırlama alanında dize bulunmuyor.';
$string['stagestringssome'] = 'hazırlama alanında {$a->staged} dize var; {$a->committable} tanesi işlenebilir';
$string['stagesubmit'] = 'Dizeleri çeviri koordinatörüne gönder';
$string['stagetoolopen'] = 'Hazırlama alanına git';
$string['stagetranslation'] = 'Çeviri';
$string['stagetranslation_help'] = 'İşlenecek (commit) olan hazırlama alanındaki çevirileri görüntüler. Hücrelerin arka plan renkleri şu anlama gelir:

* Yeşil - eksik bir çeviriyi eklediniz ve bunu gerçekleştirme izniniz var.
* Sarı - bir dizeyi değiştirdiniz ve değişikliği yapmanıza izin verildi.
* Mavi - çeviriyi değiştirdiniz veya eksik bir çeviriyi eklediniz ancak bunu verilen dile çevirmenize izin verilmiyor.
* Renk yok - çeviri akım aynıdır ve bu nedenle işlenen edilmeyecektir düzenledi.';
$string['stageunstageall'] = 'Tümünü hazırlama alanından çıkar';
$string['standardcomponents'] = 'Standart bileşenlerin listesi';
$string['standardcomponents_desc'] = 'Moodle standart bileşenlerinin listesi. İsteğe bağlı sayı, bileşenin standart olduğu zamandan beri sürüm kodunu gösterir. Sayı negatifse, bileşenin standart olarak mevcut olduğu son sürümü gösterir. Her iki numara da mevcut olabilir. Örnek:

* `mod_workshop` - versiyonsuz, bu bileşen tüm versiyonlarda standart olarak kabul edilir
*` report_infectedfiles 310` - Moodle 3.10
* `theme_clean 25-36` ile başlayan standart olarak değerlendirilmesi gereken bir bileşeni belirtir - standart bileşen Moodle 2.5\'ten başlayarak 3.6 dahil';
$string['stashactions'] = 'Çalışmayı kaydet';
$string['stashactions_help'] = 'Abar raflanızınız anlık görüntüleridir. Abardaki teslimatlar resmi dil paketine eklenmesi için çeviri koordinatörüne teslim edilebilir.';
$string['stashapply'] = 'Uygula';
$string['stashautosave'] = 'Otomatik kaydedilen ambar';
$string['stashautosave_help'] = 'Bu ambar raflarınızın anlık görüntüsün içerir. Burdaki tüm dizeleri, örneğin metinlerin yanlışlıkla hazırlama alanından çıkarılması durumunda yedek olarak kullanılabilir. Bütün ambardaki dizeleri raflara (halihazırdaki rafladığınız dizelerin üzerine yazılır) tekrar yüklemek için "Uygula" butonunun kullanabilirsiniz.';
$string['stashcomponents'] = '<span>Bİleşenler:</span> {$a}';
$string['stashdownload'] = 'İndir';
$string['stashdrop'] = 'Sil';
$string['stashdropconfirm'] = 'Kaydedilmiş <em>\'{$a}\'</em> ambarını gerçekten kalıcı olarak silmek istiyor musunuz?';
$string['stashes'] = 'Ambarlar';
$string['stashlanguages'] = '<span>Lisanlar:</span> {$a}';
$string['stashpop'] = 'Uygula ve ambardan sil (Pop)';
$string['stashpush'] = 'Hazırlanan tüm metinleri yeni bir ambara (yedek) aktar.';
$string['stashstrings'] = '<span>Toplam dize sayısı:</span> {$a}';
$string['stashsubmit'] = 'Koordinatöre gönder';
$string['stashsubmitdetails'] = 'Gönderi detayı';
$string['stashsubmitmessage'] = 'Mesaj';
$string['stashsubmitsubject'] = 'Konu';
$string['stashtitle'] = 'Ambar başlığı';
$string['stashtitledefault'] = 'Çalışma devam ediyor {$a->time}';
$string['stdvernotebetween'] = 'Standart {$a->from} ile {$a->to} arası';
$string['stdvernotefrom'] = 'Standart {$a->from}';
$string['stdvernoteto'] = '{$a->to} sürümüne kadar standart';
$string['stringhistory'] = 'tarihçe';
$string['strings'] = 'Dizeler';
$string['stringversionnotlatest'] = 'daha güncel bir sürüm mevcut';
$string['submitting'] = 'Katkı gönderiliyor';
$string['submitting_help'] = 'Bu işlem, çevirdiğiniz dizeleri resmi dil paketi koordinatörlerine gönderir. Koordinatörler çalışmanızı kendi hazırlama alanlarına alabilir, inceleyebilir ve nihayetinde ana depoya işleyebilirler. Lütfen onlara yaptığınız çalışma ve bu katkının neden dahil edilmesi gerektiği hakkında kısa bir not bırakın.';
$string['targetversion'] = 'Hedef Sürüm';
$string['timeline'] = 'Dize zaman çizelgesi';
$string['timelineheading'] = 'Dize zaman çizelgesi:{$a->component} | {$a->strname}';
$string['translatortool'] = 'Çevirmen';
$string['translatortoolopen'] = 'AMOS Çeviriciyi aç';
$string['translatortranslation'] = 'Çeviri';
$string['translatortranslation_help'] = 'Giriş düzenleyicisine dönüştürmek için hücreye tıklayın. Çeviriyi ekleyin ve çeviriyi sahnelemek için hücrenin dışına tıklayın.
Hücre arka plan renklerinin anlamları:

  *  Yeşil: Dize zaten çevrilmiş; isterseniz üzerinde değişiklik yapabilirsiniz.
  *  Sarı: Dize güncel olmayabilir (Çeviriden sonra İngilizce orijinal metin değişmiş).
   * Kırmızı: Dize henüz çevrilmemiş.
   * Mavi: Çeviride değişiklik yaptınız ve dize şu an hazırlama alanında bekliyor.';
$string['typecontrib'] = 'İlave eklentiler';
$string['typecontribbadge'] = 'İlave';
$string['typecore'] = 'Çekirdek altsistem';
$string['typecorebadge'] = 'Çekirdek';
$string['typestandard'] = 'Standat Eklentiler';
$string['typestandardbadge'] = 'Standart';
$string['unableenfixaddon'] = 'İngilizce metin düzeltmelerine sadece standart eklentiler için izin verilir.';
$string['unableenfixcountries'] = 'Ülke isimleri ISO 3166-1\'den kopyalanır';
$string['unablelangconfig'] = 'Dil paketi yapılandırmasını düzenleme izni yok';
$string['unableunmaintained'] = '\'{$a}\' dil paketinin şu anda sorumlusu yok, bu nedenle çeviri katkıları kabul edilemez. Lütfen \'{$a}\' dil paketi bakımcısı olmak için gönüllü olmayı düşünün.';
$string['unstage'] = 'hazırlama alanından çıkar';
$string['unstageconfirm'] = 'Raftan kaldırmayı onaylayın';
$string['unstageconfirmlong'] = '<code>{$a->stringid} dizesinin (Bileşen: {$a->component}</code>, Dil paketi: <code>{$a->language}</code>) çevirisini hazırlama alanından kaldırmak istediğinize emin misiniz?';
$string['unstaging'] = 'hazırlama alanından çıkarılıyor';
$string['untranslate'] = 'çeviriyi geri al';
$string['untranslateconfirm'] = '<p><code>{$a->stringid}</code> dizesinin mevcut çevirisini, <code>{$a->component}</code> bileşenini <code>{$\'den kaldıracaksınız a->since}</code> ve <code>{$a->language}</code> dil paketinin daha yüksek sürümleri.</p><p>Emin misiniz?</p>';
$string['untranslatetitle'] = 'Çeviriler dil paketinden kaldırılıyor';
$string['untranslating'] = 'Çeviri geri alınıyor';
$string['userdefaultreset'] = 'Varsayılanlarıma sıfırla';
$string['userdefaultsave'] = 'Varsayılanlarım olarak kaydet';
$string['version'] = 'Sürüm';
