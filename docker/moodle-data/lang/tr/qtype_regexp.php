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
 * Strings for component 'qtype_regexp', language 'tr', version '5.0'.
 *
 * @package     qtype_regexp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addahint'] = 'Bir ipucu ekle';
$string['addingregexp'] = 'Düzenli ifade sorusu ekleme';
$string['addmoreanswers'] = '{no} tane daha cevap ekle';
$string['answer'] = 'Cevap:';
$string['answer1mustbegiven'] = 'Cevap 1 boş olamaz';
$string['answermustbegiven'] = 'Eğer bir sınıf/derece ya da geri bildirim varsa bir cevap girmelisiniz';
$string['answerno'] = 'Cevap: {$a}';
$string['bestcorrectansweris'] = '<strong>En iyi cevap:</strong><br />{$a}';
$string['calculatealternate'] = 'Alternatif cevapları (tekrar) hesapla';
$string['caseno'] = 'Hayır, büyük/küçük harf önemli değil';
$string['casesensitive'] = 'Büyük/küçük harf önemli';
$string['caseyes'] = 'Evet, büyük/küçük harf eşleşmeli';
$string['clicktosubmit'] = 'Bu cevabı onaylamak için<strong>Kontrol Et</strong> butonuna <strong>complete</strong> tıklayın.';
$string['correctansweris'] = '<strong>Doğru cevap:</strong><br />{$a}';
$string['correctanswersare'] = '<strong>Kabul edilen diğer cevaplar:</strong>';
$string['editingregexp'] = 'Düzenli ifade sorusunu düzenleme';
$string['filloutoneanswer'] = '<strong>Cevap 1</strong>Doğru bir cevap olmalı (not =% 100) ve düzenli bir ifade olarak analiz edilmeyecektir.';
$string['hidealternate'] = 'Alternatif cevapları gizle';
$string['illegalcharacters'] = '<strong>HATA!</strong> Cevaplarda notu > 0 olan <em>atlanmayan</em> meta karakterlere izin verilmiyor: <strong>{$a}</strong>';
$string['letter'] = 'Harf';
$string['notenoughanswers'] = 'Bu tip sorular en az bir cevap gerektirir';
$string['penaltyforeachincorrecttry'] = 'Yanlış denemeler için ceza ve bir harf ya da kelime alma';
$string['penaltyforeachincorrecttry_help'] = 'Sorularınızı \'Birden çok deneme ile etkileşimli\' veya \'Uyarlamalı mod\' davranışını kullanarak çalıştırabilirsiniz,
Böylece öğrenci soruyu doğru bir şekilde denemek için birkaç denemeye sahip olur, o zaman bu seçenek her hatalı deneme için ne kadar cezalandırıldığını denetler.

Cezai toplam soru notudur, yani soru üç puana değerse ve ceza 0.3333333 ise,
O zaman öğrenci, doğru ilk deneyi alırsa, 3, eğer ikinci denemede isterse 2, üçüncü denemede doğru bulursa 1 puan alacaktır.

Bu soru için <strong>Yardım Düğmesi</strong> modunu <strong>Harf</strong> veya <strong>Sözcük</strong> olarak ayarladıysanız,
öğrenci <strong>Harf  / Kelime Al</strong> düğmesini her tıkladığı zaman, <strong><em>aynı ceza</em> </strong> geçerlidir.';
$string['pleaseenterananswer'] = 'Lütfen bir cevap girin.';
$string['pluginname'] = 'Düzenli ifade kısa cevap';
$string['pluginname_help'] = 'Yardım sayfasını yeni bir sekmede / pencerede açmak için aşağıdaki <em>Daha Fazla Yardım</em> bağlantısını sağ tıklayın.';
$string['pluginname_link'] = 'question/type/regexp';
$string['pluginnameadding'] = 'Düzenli ifade sorusu ekleme';
$string['pluginnameediting'] = 'Düzenli ifade sorusunu düzenleme';
$string['pluginnamesummary'] = 'Kısa cevap gibi ama öğrencinin cevaplarının analizi düzenli ifadelere dayanmaktadır';
$string['privacy:metadata'] = 'RegExp Soru Tipi eklentisi herhangi bir kişisel veri depolamaz.';
$string['regexp'] = 'Düzenli ifade kısa cevap';
$string['regexp_help'] = '<em>Daha fazla yardım</em> linkine sağ tıklayıp aşağıda açılan Yardım Sayfasını yeni sekmede/sayfada açı seçin.';
$string['regexp_link'] = 'question/type/regexp';
$string['regexperror'] = 'Düzenli ifadede hata var:<strong>{$a}</strong>';
$string['regexperrorclose'] = 'Kapandı: <strong>{$a}</strong>';
$string['regexperrornopermutations'] = '<strong>HATA!</strong> Çift köşeli parantezlerinizde permütasyonlu kelimeler yok!';
$string['regexperroroddunderscores'] = '<strong>HATA!</strong> Çift köşeli parantezlerinizde TEK sayıda alt çizgi var!';
$string['regexperroropen'] = 'açılan: <strong>{$a}</strong>';
$string['regexperrorparen'] = '<strong>HATA!</strong> Parantezleri ve köşeli parantezleri kontrol edin!';
$string['regexperrorsqbrack'] = 'Köşeli parantez';
$string['regexperrortoomanypermutations'] = '<strong>HATA!</strong> Her cevap için izin verilen en fazla 2 permutasyon grubu (çift köşeli ayraç)!';
$string['regexpsensitive'] = 'Yanıtları kontrol etmek için düzenli ifadeler kullanın';
$string['regexpsummary'] = 'Kısa cevap gibi ama öğrencinin cevaplarının analizi düzenli ifadelere dayanmaktadır';
$string['settingsformultipletries'] = 'Çoklu deneme ve harf/kelime alma için ayarlar';
$string['showhidealternate'] = 'Alternatif cevapları Göster/Gizle';
$string['showhidealternate_help'] = 'Tüm doğru cevapları bu formda hesaplayın ve gösterin? Bu sunucunuzda biraz zaman alabilir,
Yanıt alanlarına girdiğiniz düzenli ifadelerin sayısına ve karmaşıklığına bağlı olarak!

Öte yandan, "doğru cevaplar" ifadelerinin doğru bir şekilde yazıldığını kontrol etmeniz önerilir.';
$string['studentshowalternate'] = 'Alternatifi göster';
$string['studentshowalternate_help'] = 'İnceleme sayfasında öğrenciye alternatif cevapları doğru olarak <strong>hepsi</strong> gösterilsin mi? Çok varsa
Otomatik olarak oluşturulan doğru alternatif cevapların hepsini görüntülemek inceleme sayfasını oldukça uzun sürebilir.';
$string['usehint'] = 'Yardım butonu modu';
$string['usehint_help'] = '<strong>Hiçbiri</strong> dışında bir mod seçtiğinizde
Öğrencinin bir sonraki harfi veya kelimeyi almasına izin vermek için bir düğme.

<strong>Uyarlanabilir</strong> modunda, görüntülenen düğme "<strong> Bir sonraki harfi al </strong>" veya "<strong> Sonraki kelimeyi satın al </strong>" yazar
Öğretmen tarafından seçilen moda göre. Bir harf veya sözcük satın alma "maliyetini" ayarlamak için, bkz.
<strong> Yanlış denemeler için ceza ve bir harf veya kelime satın alma </strong> ayarları bu sayfanın daha altındadır.

<strong> Uyabilen Cezalandırma yok </strong> modunda, görüntülenen düğme "<strong> Bir sonraki harfi al </strong>" veya "<strong> Sonraki kelimeyi al </strong>" yazar

Varsayılan olarak, Yardım düğmesi modu değeri <b> Yok </b> olarak belirlenir.';
$string['word'] = 'Kelime';
