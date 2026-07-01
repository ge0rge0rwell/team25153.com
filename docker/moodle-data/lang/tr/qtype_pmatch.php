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
 * Strings for component 'qtype_pmatch', language 'tr', version '5.0'.
 *
 * @package     qtype_pmatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Ekle';
$string['addmoreanswerblanks'] = 'Daha Fazla Cevap için {no}  Boşluklar';
$string['addmoresynonymblanks'] = 'Daha Fazla eşanlamlı için {no}  Boşluklar';
$string['addtoanswer'] = 'Cevap Ekle';
$string['allowsubscript'] = 'Alt simge kullanımına izin ver';
$string['allowsuperscript'] = 'Üst simge kullanımına izin ver';
$string['amatiwsurl'] = 'Sevilen web hizmeti URL\'leri';
$string['amatiwsurl_desc'] = 'Amati web hizmetinin URL\'si';
$string['answer'] = 'Cevap: {$a}';
$string['answeringoptions'] = 'Cevap Girmek İçin Seçenekler';
$string['answermustbegiven'] = 'Bir not veya geri bildirim varsa bir cevap girmelisiniz.';
$string['answerno'] = 'Cevap: {$a}';
$string['answeroptions'] = 'Cevap seçenekleri';
$string['anyotheranswer'] = 'Başka bir cevap';
$string['apply_spellchecker_label'] = 'Öğrenci için yazım denetimi yapmayın';
$string['apply_spellchecker_missing_language_attempt'] = 'Bu soru, {$a} yazım denetimini kullanacak şekilde ayarlandı, ancak bu dil bu sunucuda mevcut değil.';
$string['apply_spellchecker_missing_language_select'] = '{$a} (Uyarı! Sözlük bu sunucuda yüklü değil)';
$string['apply_spellchecker_select'] = '{$a->name} ({$a->code})';
$string['applydictionarycheck'] = 'Yazım denetimi';
$string['caseno'] = 'Hayır, harf duyarlılığı yok';
$string['casesensitive'] = 'Harf duyarlı';
$string['caseyes'] = 'Evet, vaka eşleşmelidir';
$string['choosetoken'] = 'Jeton seç';
$string['combinedcontrolnamepmatch'] = 'metin girişi';
$string['converttospace'] = 'Boşluğa çevir';
$string['converttospace_help'] = 'Sistemin örüntü eşleştirme işlemini çalıştırmadan önce boşluğa dönüştürmesini istediğiniz karakterleri belirtin. Bu işlem, noktalama işaretleri önemli değilse girdiyi basitleştirmek için harikadır.';
$string['correctanswers'] = 'Cevap eşleşiyor';
$string['env_dictmissing'] = 'Yüklü dil {$a->humanfriendlylang} için eksik yazım denetimi sözlüğü {$a->langforspellchecker} yüklü.';
$string['env_dictmissing2'] = 'Öğrenci \'{$a}\' dilinde yazım denetimi yapmaya çalıştı. Ancak bu dil için aspell sözlüğü yüklü değil.';
$string['env_dictok'] = 'Yüklü dil {$a->humanfriendlylang} için yazım denetimi sözlüğü {$a->langforspellchecker} yüklendi.';
$string['env_peclnormalisationmissing'] = 'Unicode Normalleştirici için PECL Paketi doğru şekilde yüklenmemiş görünüyor';
$string['env_peclnormalisationok'] = 'Unicode Normalleştirici için PECL Paketi doğru şekilde yüklenmemiş görünüyor';
$string['env_pspellmissing'] = 'Pspell kütüphanesi doğru şekilde yüklenmemiş görünüyor';
$string['env_pspellok'] = 'Pspell kütüphanesi doğru şekilde yüklenmiş görünüyor';
$string['environmentcheck'] = 'ÖEşleştirme soru türü için ortam kontrolleri';
$string['err_ousupsubnotsupportedonmobile'] = 'Bu soru üst simgeler veya alt simgeler gerektirdiğinden henüz bu uygulamada çalışmıyor. Lütfen bu soruyu web tarayıcısında cevaplayın.';
$string['err_providepmatchexpression'] = 'Burada bir Örüntü Eşleme ifadesi sağlamalısınız.';
$string['error:blank'] = 'Cevap boş olamaz';
$string['error:title'] = 'Hata';
$string['errorfilecell'] = 'Dosya en az iki satır gerektirir (ilk satır başlık satırıdır, ikinci satır cevaplar içindir).';
$string['errorfilecolumnbigger'] = 'Dosyada ikiden fazla sütun bulunmaktadır. Lütfen yalnızca beklenen puanı ve cevabı ekleyin.';
$string['errorfilecolumnless'] = 'Dosya için en az iki sütun gerekir (beklenen işaretler için ilk sütun, yanıtlar için ikinci sütun).';
$string['errorfileformat'] = 'Dosya .csv/.xlsx/.html/.json/.ods biçiminde olmalıdır.';
$string['errors'] = 'Lütfen aşağıdaki sorunları düzeltin: {$a}';
$string['exclude'] = 'Hariç tutmak';
$string['extenddictionary'] = 'Bu kelimeleri sözlüğe ekle';
$string['filloutoneanswer'] = 'Olası yanıtları tanımlamak için sözdizimiyle örüntü eşleştirmeyi kullanın. Öğrencinin yanıtı sırayla bunlarla karşılaştırılacak ve ilk eşleşen örüntü puanı ve geri bildirimi belirleyecektir. En az bir örüntü vermelisiniz. <br> Genel notlandırma doğruluğu:';
$string['forcelength'] = 'Cevap 20 kelimeden fazla ise';
$string['forcelengthno'] = 'uyarı vermeyin';
$string['forcelengthyes'] = 'Yanıtın çok uzun olduğu konusunda uyarın ve yanıtlayanı kısaltmaya davet edin';
$string['ie_illegaloptions'] = '"match<strong><em>{$a</em></strong>()" ifadesindeki geçersiz seçenekler.';
$string['ie_lastsubcontenttypeorcharacter'] = 'Veya karakter, alt içeriği "{$a}" ile bitirmemelidir.';
$string['ie_lastsubcontenttypeworddelimiter'] = 'Kelime sınırlayıcı karakteri "{$a}" alt içeriğini bitirmemelidir.';
$string['ie_missingclosingbracket'] = '"{$a}" kod parçasında kapanış ayracı eksik.';
$string['ie_nofullstop'] = 'Örüntü Eşleme ifadelerinde nokta karakterlerine izin verilmez. (Sayıların ortasındaki ondalık noktalar uygundur.)';
$string['ie_nomatchfound'] = 'Örüntü eşleştirme kodunda hata.';
$string['ie_unrecognisedexpression'] = 'Tanınmayan ifade.';
$string['ie_unrecognisedsubcontents'] = '"{$a}" kod parçasında tanınmayan alt içerik.';
$string['inputareatoobig'] = '"{$a}" tarafından tanımlanan giriş alanı çok büyük. Giriş alanı boyutu 150 karakter genişlik ve 100 karakter yükseklik ile sınırlıdır.';
$string['minresponses'] = 'Minimum yanıt sayısı';
$string['minresponses_desc'] = 'Amati sisteminin kurallar oluşturabilmesi için yüklenmesi gereken minimum işaretli yanıt sayısı';
$string['modelanswer'] = 'Örnek cevap';
$string['modelanswer_help'] = 'Bu soruya doğru olarak değerlendirilebilecek olası bir cevap veriniz.';
$string['modelanswererror'] = '\'<strong>{$a}</strong>\' bu soru için doğru bir yanıt değildir.';
$string['nolanguagesfound'] = '<i>Dil bulunamadı</i>';
$string['nomatchingsynonymforword'] = 'No synonyms entered for word. Delete the word or enter synonym(s) for it.';
$string['nomatchingwordforsynonym'] = 'Eşanlamlının eşdeğer olduğu bir sözcük girmediniz. Eşanlamlı(lar)ı silin veya eşdeğer bir sözcük girin.';
$string['notenoughanswers'] = 'Bu tür bir soru en az {$a} cevapları gerektirir';
$string['or'] = 'veya';
$string['pleaseenterananswer'] = 'Örüntü eşleştirme sorusunu düzenleme';
$string['pluginname'] = 'Örüntü eşleştirme';
$string['pluginname_help'] = 'Katılımcı bir soruya (bir görsel içerebilir) cevap olarak kısa bir cümle yazar. Her biri farklı bir nota sahip birkaç olası doğru cevap olabilir. “Büyük/küçük harfe duyarlı” seçeneği seçilirse, ‘Kelime’ veya ‘sözcük’ için farklı puanlar alabilirsiniz.';
$string['pluginname_link'] = 'question/type/pmatch';
$string['pluginnameadding'] = 'Örüntü eşleştirme sorusu ekleniyor';
$string['pluginnameediting'] = 'Örüntü eşleştirme sorusu düzenleniyor';
$string['pluginnamesummary'] = 'Bir veya birkaç cümlelik kısa bir yanıta izin verir ve bu yanıt Açık Üniversitenin örüntü eşleştirme söz dizimi kullanılarak açıklanan çeşitli model yanıtlarla karşılaştırılarak puanlanır.';
$string['precedes'] = 'Öncelikli';
$string['precedesclosely'] = 'Yakından önce gelir';
$string['privacy:metadata'] = 'Pattern match soru tipi eklentisi, soru yazarlarının varsayılan seçenekleri kullanıcı tercihleri olarak ayarlamasına olanak tanır.';
$string['privacy:preference:allowsubscript'] = 'Örüntü eşleştirme soru tipi eklentisi, soru yazarlarının varsayılan seçenekleri kullanıcı tercihleri olarak ayarlamasına olanak tanır.';
$string['privacy:preference:allowsuperscript'] = 'Cevap girişi için üst simge kullanım durumu.';
$string['privacy:preference:applydictionarycheck'] = 'Öğrencilerin cevaplarının yazım denetimi yapılıp yapılmaması gerektiği';
$string['privacy:preference:converttospace'] = 'Hangi karakterlerin boşluklara dönüştürüleceği belirtilir.';
$string['privacy:preference:defaultmark'] = 'Belirli bir soru için ayarlanan varsayılan işaret.';
$string['privacy:preference:forcelength'] = 'Cevap 20 kelimeden fazla olduğunda bir uyarı gösterilip gösterilmeyeceği.';
$string['privacy:preference:penalty'] = 'Sorular \'Çoklu deneme ile etkileşimli\' veya \'Uyarlanabilir mod\' davranışı kullanılarak çalıştırıldığında her yanlış deneme için ceza.';
$string['privacy:preference:sentencedividers'] = 'Hangi karakterlerin cümle bitiş noktası olarak ele alınacağı belirtilir.';
$string['privacy:preference:testquestion_pagesize'] = 'Sayfa başına gösterilecek örüntü eşleştirme soru denemesi sayısı.';
$string['privacy:preference:usecase'] = 'Durumun önemsiz olup olmadığı veya öğrencinin cevabında eşleşmesi gerekip gerekmediği.';
$string['processingxofy'] = '{$a->total} öğesinin {$a->row} cevabı işleniyor: {$a->response}.';
$string['repeatedword'] = 'Bu sözcük eşanlamlılar listesinde birden fazla kez geçiyor.';
$string['resetrule'] = 'Kuralı sıfırla';
$string['row'] = 'Satır';
$string['rule'] = 'Kural';
$string['ruleaccuracy'] = 'Yukarıda eşleşmeyen cevaplar: {$a->responseneedmatch} <br> Bu kurala göre doğru şekilde eşleşti: {$a->correctlymatched}, <span class="{$a->class}">Yanlış eşleşti: {$a- >incorrectlymatched</span> <br> Cevapların aşağıda işlenmesi devam ediyor: {$a->responsestillprocess}';
$string['ruleaccuracylabel'] = 'Örnek cevaplar üzerindeki etkisi';
$string['rulecreationasst'] = 'Kural oluşturma yardımcısını göster/gizle';
$string['rulecreationtoomanyors'] = 'Üzgünüm çok fazla “veya” var.';
$string['rulecreationtoomanyterms'] = 'Üzgünüm çok fazla terim var.';
$string['rulesuggestionbutton'] = 'Eşleşen kuralları otomatik olarak oluştur';
$string['rulesuggestiondescriptionnoresponses'] = 'Bir dizi mevcut belirlenmiş cevabı yükleyerek otomatik olarak eşleştirme kuralları oluşturun';
$string['rulesuggestionlabel'] = 'Kural önerisi';
$string['savedxresponses'] = 'Kaydedilen {$a} cevapları';
$string['sentencedividers'] = 'Cümle bitiş noktaları';
$string['sentencedividers_help'] = 'Sistemin cümle bitiş noktaları olarak ele alacağı karakterleri belirtin. Varsayılan olarak, \'?\' bir cümle bitiş noktasıdır, bu nedenle "Merhaba?" ile eşleşmek istiyorsanız, \'?\' karakterini bu alandan kaldırır ve "match (hello\\?)" kullanırsınız. \'?\' özel bir karakter olduğu için eşleşme ifadesinde kaçış ( \\ ) gerektirdiğini, ancak \'.\' ve \'!\' karakterlerinin gerektirmediğini unutmayın.';
$string['sentencedividers_noconvert'] = '\'<strong>{$a}</strong>\' <strong>cümle bitiş noktası</strong> olarak kullanılır ve boşluğa dönüştürülemez.';
$string['setting_installed_spell_check_dictionaries'] = 'Yazım denetimi sözlükleri';
$string['setting_installed_spell_check_dictionaries_des'] = 'Bu ayar, bir soru oluşturduklarında veya düzenlediklerinde soru yazarlarına hangi yazım denetimi dil seçeneklerinin görüntüleneceğini kontrol eder.';
$string['showcoverage'] = 'Kapsamı göster';
$string['showingresponsesforquestion'] = 'Seçilen soruya ilişkin yanıtlar gösteriliyor: {$a}';
$string['spellcheckerenchant'] = 'Enchant yazım denetimi kütüphanesi';
$string['spellcheckernull'] = 'Yazım denetimi mevcut değil';
$string['spellcheckerpspell'] = 'Pspell yazım denetimi kütüphanesi';
$string['spellcheckertype'] = 'Yazım denetimi kitaplığı';
$string['spellcheckertype_desc'] = 'Hangi yazım denetimi kütüphanesinin kullanılacağı. Bu, kurulum sırasında otomatik olarak doğru değere ayarlanmalıdır.';
$string['spellingmistakes'] = 'Şu kelimeler sözlüğümüzde yok: {$a}. Lütfen yazımınızı düzeltin.';
$string['subsuponelineonly'] = 'Alt / süper komut dosyası düzenleyicisi yalnızca bir satır yüksekliğinde bir giriş kutusuyla kullanılabilir.';
$string['synonym'] = 'Eş anlamlılar';
$string['synonymcontainsillegalcharacters'] = 'Eşanlamlı geçersiz karakterler içeriyor.';
$string['synonymsheader'] = 'Yanıtlardaki Kelimeler İçin Eşanlamlıları Tanımlayın';
$string['synonymsno'] = 'Eşanlamlılar {$a}';
$string['template'] = 'Şablon';
$string['term'] = 'Kavram';
$string['test'] = 'Sınav';
$string['testquestionactualmark'] = 'Bilgisayar değerlendirmesi';
$string['testquestionbacklink'] = 'Sınav sorusuna geri dön';
$string['testquestionchangescore'] = 'Puanı değiştir';
$string['testquestioncorrect'] = 'Doğru';
$string['testquestiondeletedresponses'] = 'Yanıtlar başarıyla silindi.';
$string['testquestioneditresponse'] = 'Yanıtları düzenle';
$string['testquestionexpectedfraction'] = 'insan değerlendirmesi';
$string['testquestionformcancelresponsebutton'] = 'İptal';
$string['testquestionformdeletecheck'] = 'Bu yanıtları kesin olarak tamamen silmek istediğinizden emin misiniz?';
$string['testquestionformdeletesubmit'] = 'Sil';
$string['testquestionformduplicateresponse'] = 'Mükerrer yanıtlara izin verilmez.';
$string['testquestionformerror_incorrectquestionid'] = 'Yanlış soru kimliği veya örüntü eşleştirme sorusu değil.';
$string['testquestionformheader'] = 'Yüklenecek işaretlenmiş yanıtlar';
$string['testquestionforminfo'] = 'İki sütunlu bir elektronik tablo dosyası (.csv veya .xlsx) yüklemelisiniz. İlk sütun söz konusu yanıt için beklenen işareti, ikinci sütun ise bu yanıtı içermelidir. Dosyadaki ilk satırın sütun başlıklarını içerdiği varsayılır ve dikkate alınmaz.';
$string['testquestionformnewresponsebutton'] = 'Yeni yanıt ekle';
$string['testquestionformsaveresponsebutton'] = 'Kaydet';
$string['testquestionformtestsubmit'] = 'Seçilen yanıtları test edin';
$string['testquestionformtitle'] = 'Örüntü eşleştirme sorusu sınav aracı';
$string['testquestionformuploadlabel'] = 'İşaretlenmiş yanıtlar';
$string['testquestionheader'] = 'Test sorusu: {$a}';
$string['testquestionidlabel'] = '#';
$string['testquestionincorrectlymarkedrights'] = 'kaçırılan negatifler';
$string['testquestionincorrectlymarkedwrong'] = 'kaçırılan pozitifler';
$string['testquestionmatches'] = 'eşleştirme';
$string['testquestionresponse'] = 'Yanıt';
$string['testquestionresponsesthatare'] = 'Şu cevapları göster:';
$string['testquestionresultsheader'] = 'Sınav sonuçları: {$a}';
$string['testquestionresultssummary'] = 'Örnek cevaplar: {$a->total} <br>
     Doğru şekilde işaretlendi: {$a->correct} ({$a->accuracy}%)<br>
     <span>Hesaplanan puan insan puanlamasından daha büyük: {$a->misspositive} (kaçırılan pozitif)</span><br>
     <span>İnsan puanından daha az hesaplanan puan: {$a->missnegative} (kaçırılan negatif)</span>';
$string['testquestionruleslabel'] = 'Kurallar';
$string['testquestionseletresponsex'] = 'Cevap seçin {$a}';
$string['testquestiontool'] = 'Örüntü eşleştirme sınav aracı';
$string['testquestionungraded'] = 'değerlendirilmemiş';
$string['testquestionuploadanother'] = 'Başka bir dosya yükle';
$string['testquestionuploadresponses'] = 'Cevapları yükle';
$string['testquestionuploadrowhastwoitems'] = 'Her satır tam olarak iki öğe, bir sayısal işaret ve bir yanıt içermelidir. <b>{$a->row}</b> satırı <b>{$a->items}</b> öğe(ler) içerir.';
$string['testquestionuploadrownotvalidutf8'] = '<b>{$a}</b> satırındaki cevap tanınmayan özel karakterler içeriyor. Girdi geçerli UTF-8 olmalıdır.';
$string['testquestionuploadtheseresponses'] = 'Bu cevapları yükleyin';
$string['testsubquestionx'] = '{$a} alt sorusunu test edin';
$string['testthisquestion'] = 'Bu soruyu test et';
$string['testthisquestionnoresmoreponsesrequired'] = 'Otomatik önerinin çalışması için daha fazla yanıt gerekiyor. {$a->existing} yanıt var ve {$a->required} yanıtına ihtiyacınız var';
$string['testthisquestionnoresponsesfound'] = 'Herhangi bir yanıt bulunamadı.';
$string['testthisquestionnorulesreturned'] = 'Herhangi bir kural önerilmemiştir.';
$string['toomanywords'] = 'Cevabınız çok uzun. Lütfen 20 kelimeyi geçmeyecek şekilde düzenleyin.';
$string['tryrule'] = 'Kuralı deneyin';
$string['tryrulecoverage'] = 'Kapsam';
$string['tryrulegradeerror'] = 'Üzgünüz, deneme kuralı yalnızca not %100 veya Yok olarak ayarlandığında çalışır.';
$string['tryrulenogradedresponses'] = 'Notlandırılmış cevap yok, lütfen cevap kümesine not verin.';
$string['tryrulenomatch'] = 'Bu kural herhangi bir derecelendirilmiş yanıtla eşleşmez.';
$string['tryrulenovalidrule'] = 'Bu kural geçerli bir öeşleştirme ifadesi değildir.';
$string['unknownlanguagex'] = 'Bilinmeyen dil ({$a})';
$string['unparseable'] = 'Buradaki karakterleri veya noktalama işaretlerini anlamıyoruz "{$a}"';
$string['wordcontainsillegalcharacters'] = 'Kelime yasadışı karakterler içeriyor.';
$string['wordwithsynonym'] = 'Kelime';
$string['xresponsesduplicated'] = 'Aşağıdaki {$a} cevaplar kopyalandı';
$string['xresponsesproblems'] = 'Aşağıdaki {$a} cevapları kaydedilmedi';
$string['xrulesuggested'] = '{$a} yeni cevap önerildi ve mevcut cevapların sonuna eklendi';
