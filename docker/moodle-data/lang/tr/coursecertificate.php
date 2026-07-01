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
 * Strings for component 'coursecertificate', language 'tr', version '5.0'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'Bu etkinlik şu anda gizlidir. Görünür hale getirildiğinde, etkinlik erişim kısıtlamalarını karşılayan öğrenciler sertifikanın PDF kopyasını otomatik olarak alacaktır.';
$string['archivecertificates'] = 'Yayınlanan sertifikaları arşivle';
$string['archivecertificates_help'] = 'Arşivlenen sertifikalar yine de doğrulanabilir ve kullanıcı profili sayfasında görüntülenmeye devam eder.  Ancak mevcut bir kurs sertifikası arşivlendiğinde, etkinlik erişim kısıtlamalarını karşılayan bir kullanıcıya yeni bir sertifika verilebilir.';
$string['automaticsend_helptitle'] = 'Otomatik gönderme konusunda yardım';
$string['automaticsenddisabled'] = 'Bu sertifikanın otomatik gönderimi devre dışı bırakıldı.';
$string['automaticsenddisabled_help'] = 'Öğrenciler, bunu devre dışı bırakarak, bu etkinliğin erişim kısıtlamalarını karşıladıklarında sertifikayı almak için kurs sayfasında görüntülenen etkinlik bağlantısını tıklamalıdır.<br/><br/>
 Etkinleştirildiğinde, öğrenciler bu etkinliğin erişim kısıtlamalarını karşıladıklarında sertifikanın bir PDF kopyasını otomatik olarak alacaklardır.  Bu etkinliğin erişim kısıtlamalarını halihazırda karşılayan tüm öğrencilerin, bunu etkinleştirirken sertifikayı alacaklarını unutmayın.';
$string['automaticsenddisabledalert'] = 'Bu etkinliğin erişim kısıtlamalarını karşılayan öğrencilere, erişim sağladıkları anda sertifikaları verilecektir.';
$string['automaticsendenabled'] = 'Bu sertifikanın otomatik olarak gönderilmesi etkinleştirildi.';
$string['automaticsendenabled_help'] = 'Bu etkin durumda bırakıldığında öğrenciler, bu etkinliğin erişim kısıtlamalarını karşıladıklarında sertifikanın bir PDF kopyasını otomatik olarak alacaklardır.<br/><br/>
 Etkinliği devre dışı bırakarak, öğrencilerin bu etkinliğin erişim kısıtlamalarını karşıladıklarında sertifikayı almak için kurs sayfasında görüntülenen etkinlik bağlantısını tıklamaları gerekecektir.';
$string['certificateissues'] = 'Sertifika sorunları';
$string['certificatesarchived'] = 'Sertifikalar arşivlendi';
$string['certifiedusers'] = 'Sertifikalı kullanıcılar';
$string['chooseatemplate'] = 'Bir şablon seçin...';
$string['code'] = 'Kod';
$string['coursecertificate:addinstance'] = 'Yeni bir Kurs sertifikası etkinliği ekleyin';
$string['coursecertificate:receive'] = 'Verilen sertifikaları alın';
$string['coursecertificate:view'] = 'Kurs sertifikasını görüntüle';
$string['coursecertificate:viewreport'] = 'Kurs sertifikası sorunları raporunu görüntüleyin';
$string['coursecompletiondate'] = 'Tamamlama tarihi';
$string['courseinternalid'] = 'URL\'lerde kullanılan dahili kurs kimliği';
$string['courseurl'] = 'Kurs URL\'si';
$string['disableautomaticsend'] = 'Öğrenciler artık sertifikanın PDF kopyasını otomatik olarak almayacaklar.  bu etkinliğin erişim kısıtlamaları. Bunun yerine, aşağıdakileri almak için kurs sayfasında görüntülenen etkinlik bağlantısına tıklamaları gerekecektir  Bu faaliyetin erişim kısıtlamalarını karşıladıktan sonra sertifika.';
$string['enableautomaticsendpopup'] = 'Tüm öğrenciler, bu etkinliğin erişim kısıtlamalarını karşılar karşılamaz otomatik olarak sertifikanın bir PDF kopyasını alacaklardır.<br/><br/>
 Halihazırda bu erişim kısıtlamalarını karşılayan ancak henüz bu etkinliğe erişmemiş olan öğrenciler de kopyalarını hemen alacaklardır.<br/><br/>
 Bu aktiviteye zaten erişmiş olan öğrenciler sertifikayı tekrar alamayacak.';
$string['expirydate'] = 'Son kullanma tarihi';
$string['filterswarning'] = 'Etkinlik bağlamında tanımlanan filtreler, yalnızca etkinlik başlığı ve açıklaması için kullanılır.';
$string['filterswarninglist'] = 'Sertifika PDF dosyaları oluşturulurken yalnızca "{$a->list}" filtre(ler)i ve yalnızca <a href="{$a->link}">kurs düzeyinde</a> etkinleştirildiyse kullanılacaktır .';
$string['filterswarningnone'] = 'Sertifika PDF dosyaları oluşturulurken hiçbir filtre kullanılmayacaktır.';
$string['issueddate'] = 'Yayın tarihi';
$string['managetemplates'] = 'Sertifika şablonlarını yönetin';
$string['modulename'] = 'Kurs sertifikası';
$string['modulename_help'] = 'Kurs sertifikası modülü, katılımcıların sertifika alarak başarılarını kutlamaları için bir fırsat sunar.<br/><br/>Tam ad, ders, Vb.<br /><br /> Kullanıcılar bu etkinliğe erişerek sertifikanın bir PDF kopyasını indirebilecek, Ayrıca, onlara e-postayla otomatik olarak PDF kopyası gönderme seçenekleri de vardır.<br/><br/>Bu etkinlikte kullanılan şablon bir QR kodu içeriyorsa, kullanıcılar sertifikalarını doğrulamak için bu belgeyi tarayabilirler.';
$string['modulename_link'] = 'mod/certificate/view';
$string['modulenameplural'] = 'Kurs sertifikaları';
$string['notemplateselected'] = 'Seçilen şablon bulunamıyor.  Lütfen etkinlik ayarlarına gidin ve yeni bir tane seçin.';
$string['notemplateselecteduser'] = 'Sertifika mevcut değil.  Lütfen kurs yöneticisi ile iletişime geçin.';
$string['notemplateswarning'] = 'Kullanılabilir şablon yok.  Lütfen site yöneticisiyle iletişime geçin.';
$string['notemplateswarningwithlink'] = 'Kullanılabilir şablon yok.  Lütfen <a href="{$a}">sertifika şablonu yönetimi sayfasına</a> gidin ve yeni bir tane oluşturun.';
$string['nouserscertified'] = 'Sertifikalı kullanıcı yok.';
$string['open'] = 'Açık';
$string['page-mod-coursecertificate-x'] = 'Herhangi bir kurs sertifikası modülü sayfası';
$string['pluginadministration'] = 'Kurs sertifikası yönetimi';
$string['pluginname'] = 'Kurs sertifikası';
$string['previewcoursefullname'] = 'Kursun tam adı';
$string['previewcourseshortname'] = 'Kurs kısa adı';
$string['privacy:metadata'] = 'Kurs sertifikası etkinliği kişisel verileri saklamaz.';
$string['revoke'] = 'Geri çek';
$string['revokeissue'] = 'Bu kullanıcıdan alınan bu sertifikayı iptal etmek istediğinizden emin misiniz?';
$string['selectdate'] = 'Tarih seç';
$string['selecttemplatewarning'] = 'Bu etkinlik en az bir sertifika verdiğinde, bu alan kilitlenir ve artık düzenlenemez.';
$string['status'] = 'Durum';
$string['taskissuecertificates'] = 'Kurs sertifikaları verme';
$string['template'] = 'Şablon';
