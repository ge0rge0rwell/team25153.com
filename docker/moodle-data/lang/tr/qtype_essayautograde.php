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
 * Strings for component 'qtype_essayautograde', language 'tr', version '5.0'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplebands'] = '{$a} not grubu daha ekleyin';
$string['addmultiplephrases'] = '{$a} hedef kelime öbeği daha ekleyin';
$string['addpartialgrades'] = 'Kısmi notlar mı veriliyor?';
$string['addpartialgrades_help'] = 'Bu seçenek etkinleştirilirse, kısmen tamamlanmış not bantları için notlar eklenir.';
$string['addsingleband'] = '1 sınıf grubu daha ekle';
$string['addsinglephrase'] = '1 hedef kelime öbeği daha ekle';
$string['auto'] = 'Otomatik';
$string['autograding'] = 'Otomatik not verme';
$string['chars'] = 'Karakter';
$string['charspersentence'] = 'Cümle başına karakter';
$string['commonerror'] = 'Yaygın hata';
$string['commonerrors'] = 'Genel hata';
$string['commonerrors_help'] = 'Yaygın hatalar, bu soruyla ilişkili "Hatalar sözlüğünde" tanımlanmıştır.';
$string['correctresponse'] = 'Bu sorudan tam puan almak için aşağıdaki kriterleri karşılamanız gerekir:';
$string['countcharslabel'] = 'Geçerli karakter sayısı';
$string['countfileslabel'] = 'Geçerli dosya sayısı';
$string['countparagraphslabel'] = 'Geçerli paragraf sayısı';
$string['countsentenceslabel'] = 'Geçerli cümle sayısı';
$string['countwordslabel'] = 'Geçerli kelime sayısı';
$string['crop'] = 'Kırp';
$string['enableautograde'] = 'Otomatik not vermeyi etkinleştir';
$string['enableautograde_help'] = 'Otomatik not vermeyi etkinleştirin veya devre dışı bırakın';
$string['errorbehavior'] = 'Hata eşleştirme davranışı';
$string['errorbehavior_help'] = 'Bu ayarlar, Yaygın Hatalar Sözlüğü\'ndeki girişler için eşleştirme davranışını hassaslaştırır.';
$string['errorcmid'] = 'Hata sözlüğü';
$string['errorcmid_help'] = 'Yaygın hataların bir listesini içeren Sözlüğü seçin.

Makale yanıtında her hata bulunduğunda, bu soru için öğrencinin notundan belirtilen ceza kesilecektir.';
$string['errorpercent'] = 'Hata başına ceza';
$string['errorpercent_help'] = 'Yanıtta bulunan her hata için düşülmesi gereken toplam not yüzdesini seçin.';
$string['excludecommonerrors'] = '<a href="{$a->href}" target="_blank">{$a->name}</a> içinde yaygın hatalardan hiçbirini yapmayın';
$string['explanationautopercent'] = 'Bu, normal yüzde aralığının dışında olduğundan, %{$a->autopercent} olarak ayarlandı.';
$string['explanationcommonerror'] = 'Yaygın bir hata olan "{$a->error}"ı içerdiği için {$a->percent}%';
$string['explanationcompleteband'] = '[{$a->gradeband}] Not aralığını tamamlamak için %{$a->percent}';
$string['explanationdatetime'] = 'üzerinde %Y %b %d (%a) %H:%M\'de';
$string['explanationfiles'] = '{$a->filecount} / {$a->itemcount} dosyalarını göndermek için %{$a->percent}';
$string['explanationfirstitems'] = 'İlk {$a->count} {$a->itemtype} için %{$a->yüzde}';
$string['explanationgrade'] = 'Bu durumda, bu yazılı için bilgisayar tarafından oluşturulan not {$a->finalgrade} = ({$a->finalpercent}% of {$a->maxgrade}) olarak belirlenmiştir.';
$string['explanationitems'] = '{$a->percent}% for {$a->count} {$a->itemtype}';
$string['explanationmaxgrade'] = 'Bu soru için en yüksek not {$a->maxgrade}\'dir.';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype}, not verilmesi için gereken asgari miktardan az.';
$string['explanationoverride'] = '{$a->count} {$a->itemtype}, not verilmesi için gereken asgari miktardan az.';
$string['explanationpartialband'] = 'Not aralığını [{$a->gradeband}] kısmen tamamlamak için %{$a->percent}';
$string['explanationpenalty'] = 'Ancak, gönderimden önce yanıtın kontrol edilmesi için {$a->penaltytext} düşülmüştür.';
$string['explanationrawpercent'] = 'Bu makale için ham yüzde notu {$a->rawpercent}% <br /> = ({$a->details}) şeklindedir.';
$string['explanationremainingitems'] = 'Kalan {$a->count} {$a->itemtype} için %{$a->percent}';
$string['explanationseecomment'] = '(aşağıdaki yoruma bakın)';
$string['explanationtargetphrase'] = '"{$a->phrase}" ifadesini dahil etmek için %{$a->percent}';
$string['feedback'] = 'geri bildirim';
$string['feedbackhintbreaks'] = 'Çok fazla satır sonu kullandınız mı?';
$string['feedbackhintchars'] = 'Gerekli sayıda karakter yazdınız mı?';
$string['feedbackhinterrors'] = 'Herhangi bir yaygın hata yaptınız mı?';
$string['feedbackhintfiles'] = 'Gerekli sayıda dosya eklediniz mi?';
$string['feedbackhintparagraphs'] = 'Gerekli sayıda paragraf yazdınız mı?';
$string['feedbackhintphrases'] = 'Tüm hedef cümleleri eklediniz mi?';
$string['feedbackhints'] = 'Notunuzu yükseltmek için ipuçları';
$string['feedbackhintsentences'] = 'Gerekli sayıda cümle yazdınız mı?';
$string['feedbackhintwords'] = 'Kelime sayısı hedefine ulaştınız mı?';
$string['files'] = 'Dosyalar';
$string['fogindex'] = 'Sis indeksi';
$string['fogindex_help'] = 'Gunning sis indeksi, okunabilirliğin bir ölçüsüdür. Aşağıdaki formül kullanılarak hesaplanır.

* ((cümle başına sözcük) + (cümle başına uzun sözcük)) x 0,4

Daha fazla bilgi için bkz.: <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = 'Zorla yükseltme';
$string['gradeband'] = 'Not bandı [{no}]';
$string['gradeband_help'] = 'Uygulanacak bu bant için minimum sayılabilen parça sayısını ve bu bant uygulanırsa verilecek notu belirtin.';
$string['gradebands'] = 'sınıf bantları';
$string['gradecalculation'] = 'Not hesaplama';
$string['gradeforthisquestion'] = 'Bu soru için puan';
$string['hidden'] = 'Gizli';
$string['hidesample'] = 'Örneği gizle';
$string['itemcount'] = 'Beklenen öğe sayısı';
$string['itemcount_help'] = 'Bu sorudan maksimum notu alabilmek için deneme metninde olması gereken en az sayılabilir madde sayısı.

Bu değerin, varsa, aşağıda tanımlanan derece bantları tarafından etkisiz hale getirilebileceğini unutmayın.';
$string['itemtype'] = 'Sayılabilir öğelerin türü';
$string['itemtype_help'] = 'Otomatik not vermeye katkıda bulunacak makale metnindeki öğelerin türünü seçin.';
$string['lexicaldensity'] = 'sözcük yoğunluğu';
$string['lexicaldensity_help'] = 'Sözcük yoğunluğu, aşağıdaki formül kullanılarak hesaplanan bir yüzdedir.

* 100 x (tek kelime sayısı) / (toplam kelime sayısı)

Bu nedenle, birçok kelimenin tekrarlandığı bir denemenin sözcük yoğunluğu düşük, çok sayıda benzersiz kelime içeren bir makalenin sözcük yoğunluğu yüksek.';
$string['longwords'] = 'uzun kelimeler';
$string['longwords_help'] = '"Uzun kelimeler", üç veya daha fazla hecesi olan kelimelerdir. Hece sayısını belirleme algoritmasının yalnızca yaklaşık sonuçlar verdiğini unutmayın.';
$string['longwordspersentence'] = 'Cümle başına uzun kelimeler';
$string['maximumfilecount'] = 'En fazla dosya sayısı: {$a}';
$string['maximumfilesize'] = 'En büyük dosya boyutu';
$string['maxwordserror'] = 'Hay aksi, çok fazla kelime yazdınız!';
$string['maxwordslabel'] = 'Maksimum kelime sayısı';
$string['maxwordswarning'] = 'Hay aksi, çok fazla kelime yazdın!';
$string['minimumfilecount'] = 'Minimum dosya sayısı: {$a}';
$string['minwordserror'] = 'Hay Allah! Yeterince kelime yazmamışsın.';
$string['minwordslabel'] = 'En az kelime sayısı';
$string['minwordswarning'] = 'Devam et! Henüz yeterince kelime yazmadın.';
$string['missing'] = 'Eksik';
$string['overflow'] = 'Taşma';
$string['paragraphs'] = 'Paragraflar';
$string['phrasebehavior'] = 'Hedef ifade [{no}] davranışı';
$string['phrasebehavior_help'] = 'Bu ayarlar, bu hedef kelime öbeği için eşleştirme davranışını hassaslaştırır.';
$string['phrasecasesensitiveno'] = 'Hedef ifade [{no}] davranışı';
$string['phrasecasesensitiveyes'] = 'Eşleşme büyük/küçük harfe duyarlıdır.';
$string['phrasefullmatchno'] = 'Tam veya kısmi kelimeleri eşleştirin.';
$string['phrasefullmatchyes'] = 'Yalnızca tam kelimeleri eşleştirin.';
$string['phraseignorebreaksno'] = 'Satır sonlarını tanıyın.';
$string['phraseignorebreaksyes'] = 'Satır sonlarını yoksay.';
$string['phrasematch'] = 'Eğer';
$string['phrasepercent'] = 'kullanılır, ödül';
$string['pleaseattachfiles'] = 'Lütfen gerekli sayıda dosya ekleyin.';
$string['pleaseinputtext'] = 'Lütfen yanıtınızı metin kutusuna girin.';
$string['pluginname'] = 'Yazılı (otomatik not verme)';
$string['pluginname_help'] = 'Bir resim içerebilecek bir soruya yanıt olarak, yanıtlayıcı bir veya daha fazla paragraftan oluşan bir yanıt yazar. Başlangıçta, karakter, kelime, cümle veya paragraf sayısına ve belirli hedef cümlelerin varlığına göre otomatik olarak bir not verilir. Otomatik not, daha sonra öğretmen tarafından geçersiz kılınabilir.';
$string['pluginname_link'] = 'question/type/essayautograde';
$string['pluginnameadding'] = 'Yazılı (otomatik not verme) sorusu ekleme';
$string['pluginnameediting'] = 'Yazılı Anlatım Düzenleme (otomatik notlandırma) sorusu';
$string['pluginnamesummary'] = 'Birkaç cümle veya paragraftan oluşan bir makalenin soru yanıtı olarak gönderilmesine izin verir. Makale otomatik olarak puanlanır . Not istenirse daha sonra geçersiz kılınabilir.';
$string['present'] = 'Mevcut';
$string['privacy:metadata'] = 'Yazılı (otomatik not verme) soru türü eklentisi herhangi bir kişisel veri saklamaz.';
$string['requiredfilecount'] = 'Gerekli dosya sayısı: {$a}';
$string['responseisnotoriginal'] = 'Lütfen metninizi daha özgün hale getirin.';
$string['responsesample'] = 'Örnek yanıt';
$string['responsesample_help'] = 'Öğrenci soru metninde "Örneği göster" bağlantısını tıklarsa, buradaki herhangi bir metin örnek yanıt olarak görüntülenecektir.';
$string['responsesampleformat'] = 'Örnek yazılı biçimi';
$string['responsesampleformat_help'] = 'Örnek yanıt metninin biçimini seçin.';
$string['rewriteresubmit'] = 've tekrar gönder.';
$string['rewriteresubmitbreaks'] = 'satır sonlarını kaldır';
$string['rewriteresubmitchars'] = 'daha fazla karakter ekle';
$string['rewriteresubmiterrors'] = 'yaygın hataları düzeltin,';
$string['rewriteresubmitfiles'] = 'gerekli sayıda dosya ekleyin';
$string['rewriteresubmitjoin'] = ',';
$string['rewriteresubmitparagraphs'] = 'daha fazla paragraf ekle';
$string['rewriteresubmitphrases'] = 'eksik ifadeleri ekleyin';
$string['rewriteresubmitsentences'] = 'daha fazla cümle ekle';
$string['rewriteresubmitwords'] = 'daha fazla kelime ekle';
$string['rotate'] = 'Döndür';
$string['scale'] = 'Ölçek';
$string['sentences'] = 'cümleler';
$string['sentencesperparagraph'] = 'Paragraf başına cümle';
$string['showcalculation'] = 'Not hesaplamasını göster?';
$string['showcalculation_help'] = 'Bu seçenek etkinleştirilirse, otomatik olarak oluşturulan notun hesaplanmasına ilişkin açıklama, not verme ve inceleme sayfalarında gösterilecektir.';
$string['showfeedback'] = 'Öğrenci geri bildirimi gösterilsin mi?';
$string['showfeedback_help'] = 'Bu seçenek etkinleştirilirse, not verme ve inceleme sayfalarında eyleme dönüştürülebilir bir geri bildirim tablosu gösterilir. Eyleme geçirilebilir geri bildirim, öğrencilere geliştirmek için ne yapmaları gerektiğini söyleyen geri bildirimdir.';
$string['showgradebands'] = 'Derece grupları gösterilsin mi?';
$string['showgradebands_help'] = 'Bu seçenek etkinleştirilirse, not bantlarının ayrıntıları not verme ve inceleme sayfalarında gösterilecektir.';
$string['showsample'] = 'Örneği göster';
$string['showtargetphrases'] = 'Hedef ifadeler gösterilsin mi?';
$string['showtargetphrases_help'] = 'Bu seçenek etkinleştirilirse, not verme ve inceleme sayfalarında hedef ifadelerin ayrıntıları gösterilecektir.';
$string['showtextstats'] = 'Metin istatistikleri gösterilsin mi?';
$string['showtextstats_help'] = 'Bu seçenek etkinleştirilirse, metinle ilgili istatistikler gösterilecektir.';
$string['showtostudentsonly'] = 'Evet, yalnızca öğrencilere göster';
$string['showtoteachersandstudents'] = 'Evet, öğretmenlere ve öğrencilere göster';
$string['showtoteachersonly'] = 'Evet, yalnızca öğretmenlere göster';
$string['targetphrase'] = 'Hedef kelime öbeği [{no}]';
$string['targetphrase_help'] = 'Bu hedef ifadenin denemede görünmesi durumunda eklenecek notu belirtin.

> **örn.** [Sonunda] kullanılırsa, soru notunun %10\'unu verin.]

Hedef sözcük grubu tek bir sözcük öbeği veya virgül "," ya da "VEYA" sözcüğüyle ayrılmış bir sözcük öbeği olabilir. (büyük harf).

> **ör.** [Son olarak VEYA Son olarak] kullanılırsa, [soru notunun %10\'unu verin.]

Bir soru işareti "?" bir ifadede herhangi bir tek karakterle eşleşirken, yıldız işareti "*" rastgele sayıda karakterle (sıfır karakter dahil) eşleşir.

> **ör.** [İlk\\*Sonra\\*Sonunda] kullanılıyorsa, [soru notunun %50\'sini] verin.';
$string['targetphrases'] = 'Hedef ifadeler';
$string['textstatistics'] = 'Metin istatistikleri';
$string['textstatitems'] = 'İstatistiksel öğeler';
$string['textstatitems_help'] = 'Not verme ve inceleme sayfalarında gösterilen metin istatistiklerinde görünmesini istediğiniz öğeleri buradan seçin.';
$string['uniquewords'] = 'benzersiz kelimeler';
$string['uploadfiles'] = 'Dosyaları yükle';
$string['visible'] = 'Görünür';
$string['words'] = 'Kelimeler';
$string['wordspersentence'] = 'Cümle başına kelime';
