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
 * Strings for component 'qtype_combined', language 'tr', version '5.0'.
 *
 * @package     qtype_combined
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['controlnamegapselect'] = 'açılır kutu';
$string['controlnamegapselectplural'] = 'açılır kutular';
$string['controlnamemultichoice'] = 'radio grup';
$string['controlnameshowworking'] = 'metin girişi';
$string['correct_choice_embed_code'] = '[[{$a->qid}:{$a->qtype}:{correct choice}]]';
$string['embeddedquestionremovedfromform'] = 'Bir veya daha fazla gömülü soru, soru metninden kaldırılmıştır. Bu sorulara ait soru verileri hala aşağıda gösterilmektedir, ancak \'Formu güncelle\' veya \'Değişiklikleri kaydet\' düğmesine bastığınızda, gömülü kodları soru metnine tekrar yerleştirmediğiniz sürece kalıcı olarak kaldırılacaktır.';
$string['err_accepts_vertical_or_horizontal_layout_param'] = '<p>\'{$a}\' soru türü, soru türünüzün düzenini aşağıdaki gibi belirtmenize olanak tanır:<ul>
<li>[[{soru tanımlayıcı}:{$a}:v]] dikey VEYA</li>
<li>[[{soru tanımlayıcı}:{$a}:h]] yatay.</li></ul>
<p>İkinci iki nokta üst üsteden sonra başka bir şey girmemelisiniz.</p>';
$string['err_duplicateids'] = 'Her gömülü soru örneğinin farklı bir tanımlayıcısı olmalıdır. Aşağıdaki tanımlayıcı(lar) ı birden fazla soru için kullandınız \'{$a}\'.';
$string['err_fillinthedetailsforsubq'] = '\'{$a}\' alt sorusunu açıklamak için ayrıntıları doldurmanız gerekir.';
$string['err_fillinthedetailshere'] = '\'{$a}\' alt sorusunu açıklamak için ayrıntıları doldurmanız gerekir.';
$string['err_insufficientnoofcodeparts'] = 'Hata, \'{$a->fullcode}\' soru kontrolünü gömmek için kullandığınız kodda iki nokta üst üste ile ayrılmış çok az parça var. En azından bir soru tanımlayıcı kimliğiniz ve ardından bir soru türü tanımlayıcınız olmalıdır.';
$string['err_invalid_number'] = '\'{$a}\' soru türü, soru türü tanımlayıcısından sonra bir sayı bekler; yerleştirme kodunuz [[{soru kimliğiniz}:{$a}:{buraya bir sayı}]] olmalıdır';
$string['err_invalid_width_specifier_postfix'] = '<p>\'{$a}\' soru türü, soru türünüzün genişliğini aşağıdaki gibi belirtmenize olanak tanır:<ul>
<li>[[{soru tanımlayıcı}:{$a}:____]] burada giriş kutusunun genişliği alt çizgi sayısına bağlı olacaktır veya</li>
<li>[[{soru tanımlayıcı}:{$a}:__10__]] burada giriş kutusunun genişliği sayıya bağlı olacaktır.</li></ul>
<p>İkinci iki nokta üst üsteden sonra başka bir şey girmemelisiniz.</p>';
$string['err_invalid_width_specifier_postfix_showworking'] = '<p>\'{$a}\' soru türü, soru türünüzün genişliğini aşağıdaki gibi belirtmenize olanak tanır:
<ul>
 <li>[[{soru tanımlayıcı}:{$a}:____]] burada giriş kutusunun genişliği şunlara bağlı olacaktır:
  alt çizgi sayısı veya</li>
  <li>[[{soru tanımlayıcı}:{$a}:__10__]] burada giriş kutusunun genişliği şunlara bağlı olacaktır:
  numara.</li>
  <li>[[{soru tanımlayıcı}:{$a}:__80x5__]] burada giriş kutusunun genişliği ve yüksekliği şunlara bağlı olacaktır:
  numara.</li>
</ul>
<p>İkinci iki nokta üst üsteden sonra başka bir şey girmemelisiniz.</p>';
$string['err_invalidquestionidentifier'] = 'Soru tanımlayıcı kodunuz bir veya daha fazla alfanümerik karakterden oluşur.';
$string['err_questionidentifiertoolong'] = '\'{$a}\' alt soru adı çok uzun. En fazla 10 alfanümerik karakter kullanabilirsiniz.';
$string['err_subq_not_included_in_question_text'] = 'Görünüşe göre bu soruyu soru metninden kaldırmışsınız. Bu soruyu {$a} kodu ile forma yerleştirin, aksi takdirde bu formu tekrar gönderdiğinizde kaldırılacaktır.';
$string['err_thisqtypecannothavemorethanonecontrol'] = 'Soru örneği adı \'{$a->qid}\' olan \'{$a->qtype}\' soru türü için birden fazla kontrol yerleştirmeye çalıştınız. Bu soru türü, soru örneği başına yalnızca bir kontrol yerleştirmenize izin verir.';
$string['err_thisqtypedoesnotacceptextrainfo'] = 'Bu soru türü [[{soru kimliğiniz}:{$a}]] kodu ile gömülüdür. qtype tanımlayıcısından sonra ikinci bir iki nokta üst üste dahil olmak üzere hiçbir şey eklememelisiniz.';
$string['err_unrecognisedqtype'] = '\'{$a->fullcode}\' gömülü koduna girdiğiniz \'{$a->qtype}\' soru türü tanımlayıcısı bilinmiyor.';
$string['err_weightingsdonotaddup'] = 'Alt soruların ağırlıkları 1\'e eşit değildir.';
$string['err_you_must_provide_third_param'] = '{$a} soru türü için üçüncü bir parametre sağlamanız gerekir.';
$string['err_youneedmorechoices'] = 'İki veya daha fazla seçenek girmeniz gerekiyor.';
$string['incorrectfeedback'] = 'Herhangi bir yanlış cevap için geri bildirim';
$string['multiresponse'] = 'Çok yanıtlı alt sorular için varsayılan seçenekler';
$string['noembeddedquestions'] = 'En az bir gömülü alt soru olmalıdır.';
$string['nosubquestiontypesinstalled'] = 'Bu soru türü, diğer soru türlerinin işlevselliğinin birleştirilmesine olanak tanır. Alt soru olarak kullanılacak bu diğer soru türlerinden en az birini yüklemeniz gerekir.

Daha fazla ayrıntı ve ek bilgi için <a href="https://moodle.org/plugins/view.php?plugin=qtype_combined">eklenti veritabanındaki girişe</a> bakın.
Alt soru olarak kullanılabilecek soru türlerinin listesi.';
$string['pluginname'] = 'Birleşik';
$string['pluginname_help'] = 'Soru metninizde gömülü yanıt alanları olan bir soru oluşturun.

Moodle\'ınızda yüklü olan alt soru türlerine bağlı olarak öğrenciden sayısal veya metin değeri girmesini ya da bir dizi seçenek arasından bir değer seçmesini isteyebilirsiniz. Soru metnindeki gömülü kodlar, öğrencinin cevabını girebilmesi için onay kutuları, seçim kutuları veya bir metin giriş alanı ile değiştirilecektir.

Yeni bir soru oluşturduğunuzda, mevcut alt soru türlerini gömmek için tüm kodlar, kullanabileceğiniz kod örnekleri olarak soru metnine otomatik olarak eklenir. Aynı zamanda, her bir soru için seçenekleri belirlemek üzere uygun form parçaları soru metni giriş alanının altında görünür. Soru metnini düzenleyin ve hangi alt soru türlerinin soru metnine dahil edileceğini değiştirmek için soru metnindeki kodları değiştirin ve ardından formun doğru bölümlerinin düzenlenmek üzere görüntülenmesi için "Formu güncelle" düğmesine basın
alt soru ayarlarınız.';
$string['pluginname_link'] = 'question/type/combined';
$string['pluginnameadding'] = 'Birleşik soru ekleniyor';
$string['pluginnameediting'] = 'Birleşik soruyu düzenle';
$string['pluginnamesummary'] = 'Soru metninde mevcut çeşitli alt sorular için cevap alanlarının yerleştirilmesine izin veren birleşik bir soru türü.

Yüklediğiniz soru türlerine bağlı olarak, öğrenci sayısal veya kısa metin cevabı girebilir veya bir seçim kutusu veya onay kutuları kullanarak bir cevap /cevaplar seçebilir.';
$string['privacy:metadata'] = 'Birleşik eklenti herhangi bir kişisel veri saklamaz.';
$string['regradeissuenumsubquestionschanged'] = 'Soruya katıştırılmış alt soruların sayısı değişti.';
$string['shuffle'] = 'Rastgele';
$string['singlechoice'] = 'Tek seçenekli alt sorular için varsayılan seçenekler';
$string['subqheader'] = '\'{$a->qtype}\' girişi \'{$a->qid}\'';
$string['subqheader_not_in_question_text'] = '\'{$a->qtype}\' girişi \'{$a->qid}\' (soru metnine gömülmemiş).';
$string['subquestiontypenotinstalled'] = 'Yüklü olmayan bir alt soru türü \'{$a}\' ile birleştirilmiş bir soru kullanmaya çalışıyorsunuz.';
$string['subquestiontypes'] = 'Alt soru yer tutucuları';
$string['updateform'] = 'Formu güncelle';
$string['validationerror'] = 'Cevabınızın bir kısmına dikkat edilmesi gerekiyor: {$a}';
$string['validationerror_part'] = 'Bölüm {$a->identifier} - {$a->error}';
$string['validationerrors'] = 'Cevabınızın bazı kısımlarına dikkat etmeniz gerekiyor: {$a}';
$string['vertical_or_horizontal_embed_code'] = '[[{$a->qid}:{$a->qtype}:v]] veya [[{$a->qid}:{$a->qtype}:h]] seçeneklerin dikey mi yoksa yatay mı yerleştirilmesini istediğinize bağlı olarak.';
$string['weighting'] = 'Ağırlık';
$string['widthspecifier_embed_code'] = '[[{$a->qid}:{$a->qtype}:{width specifier}]] or just [[{$a->qid}:{$a->qtype}]]';
$string['yougot1right'] = 'Cevaplarınızdan 1 tanesi doğru.';
$string['yougotnright'] = 'Cevaplarınızın {$a->num}\'u doğru.';
