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
 * Strings for component 'block_dashboard', language 'tr', version '5.0'.
 *
 * @package     block_dashboard
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockname'] = 'Gösterge Paneli';
$string['configcolouring_help'] = '<h3>Hedef sonuçlarını renklendirme</h3>
<p>Renklendirme ayarları, renkleri bir sütundaki veya sonuçtaki veri değeri aralığıyla eşleştirmeye olanak tanır.</p>
<p>Sol taraftaki textarea\'da bir dizi renk (her satır için bir tane) bildirebilirsiniz. Bulunan alanda
ortada, bir takma ad çıktı alanı adı gireceksiniz. Bu çıktı alanı aşağıdakiler için işlenecektir
coulouring veri. Şu anda sadece bir çıktı sütunu bu şekilde değerlendirilebilir.</p>
<p>En sağdaki metin alanında, her renk için karşılık gelen bir veri testi vermeniz gerekecektir.
Bu veri testi, etkin sonuç değeri için %% işaretini kullanan herhangi bir aritmetik ifade olabilir.</p>
<h4>Örnek</h4>

<pre><code>
    #FF0000                             %% < 0
    #00FF00                             %% > 0
    #0000FF     ->    outputcolumn  ->  %% == 0
</code></pre>

<p> kırmızı negatif değerler, yeşil pozitif değerler ve mavi renk sıfır. </p>
<p> Not rengi metin arka planına uygulanır.</p>';
$string['configcopy'] = 'Bir pano öğesinden tam yapılandırmayı içe aktarın';
$string['configcronhour'] = 'Saat';
$string['configcrontime'] = 'Saat';
$string['configgraphheight'] = 'Grafik yüksekliği';
$string['configgraphtype'] = 'Grafik türü';
$string['configgraphwidth'] = 'Grafik Genişliği';
$string['confighidetitle'] = 'Blok başlığını gizle';
$string['confighierarchic'] = 'Hiyerarşik oluşturma';
$string['confighierarchic_help'] = 'Hiyerarşik oluşturma';
$string['confighorizformat'] = 'Yatay tuş biçimlendirmesi';
$string['confighorizkey'] = 'Yatay anahtar';
$string['confighorizlabel'] = 'Yatay etiketler';
$string['confighorodatefiles_help'] = 'Etkinleştirildiğinde, oluşturulan her dosya adının sonuna bir zaman damgası eklenir';
$string['configimportexport'] = 'Yapılandırma içe/dışa aktarma';
$string['configsums'] = 'Yerel toplam ayarları';
$string['configsums_help'] = '<h3>Tablo tablo satır ve sütun toplamları</h3>

 <p>Bu özelliği etkinleştirirken, her satırda (ilgili sütunlar) fazladan bir sütun (ilgili satır) bulunur.
 tüm satırın hücre değerinin toplamı.  Hücredeki multiplet\'in ae\'sine dikkat edin, yalnızca ilk sayısal alan toplanır.';
$string['configtable'] = 'Tablo ayarları';
$string['configtablesplit'] = 'Veri tablosu bölme alanı';
$string['configtablesplit_help'] = 'Ayarlanırsa, bu alanın farklı değerleri ayrı alt tablolar oluşturur';
$string['configtabletype'] = 'Veri tablosu türü';
$string['configtabletype_help'] = '<h3>Veri sunum tablosu türü</h3>

 <p>Bu seçici, verileri sunmak için kullanılacak tablo türünün seçilmesine izin verir :</p>
 <ul><li><b>Doğrusal</b>: Veriler doğrusal olarak kayıtlar olarak görüntülenir</li>
 <ul><li><b>Tablo</b>: veriler iki boyutlu tablo dizisi içinde sunulur.  Ekstra parametreler kurulum gerektirecektir:
     <ul><li>yatay boyutu sağlayan benzersiz sütun</li>
         <li>Dikey boyutu yönlendiren Kolonlar.</li>
         <li>Hücreleri doldurmak için kullanılan veriler</li>
     </ul>
     </li>
     <li><b>Ağaç görünümü</b>: Verilerin hiyerarşik bir organizasyonu varsa (id, üst)
     bu mod, kayıtların hiyerarşik bir ağaç temsilini çizer.</li>
 </ul>';
$string['configtabular'] = 'Tablo düzeni ekstra ayarları';
$string['configtabular_help'] = '<h3>Tablo sonuçları</h3>

 <p>Tablo görünümü, sorgu sonuçlarını üretmek için özel bir çıktı alanı kullanarak iki boyutlu bir tabloda gösterir
 hiyerarşik düzenlenmiş satır başlıkları oluşturmak için sütunlar ve bir dizi alan.</p>
 <p>Hücredeki yazdırılan veriler, belirtilen "çıktı alanı"nın değeridir veya şu şekilde tanımlanmış olması durumunda
 bir liste, karşılık gelen çıktı alanlarından gelen bir n-uplet değeri.';
$string['configtabulartable'] = 'Sekmeli tablo ayarları';
$string['configtarget'] = 'Hedef db';
$string['configtickspacing'] = 'Y işareti aralığı';
$string['configtimelinecolouring'] = 'Zaman satırı öğelerinin renklendirilmesi';
$string['configtimeunits'] = 'Zaman birimleri';
$string['configtimeunits_help'] = 'Her bant için zaman birimlerini ve ölçeği ayarlayın.';
$string['configtitle'] = 'Blok başlığı';
$string['dashboard_cron_hour'] = 'Saat';
$string['dashboard_cron_hour_desc'] = 'Saat';
$string['dashboards'] = 'Gösterge Paneli';
$string['day'] = 'Gün';
$string['exportdataastable'] = 'Verileri tablo olarak dışa aktar';
$string['exportfiltered'] = 'Filtrelenmiş verileri dışa aktar';
$string['extradbparams'] = 'Ekstra DB parametreleri';
$string['filegenerated'] = 'Dosya başarıyla oluşturuldu';
$string['fileoutput'] = 'Veri Dışa aktarma ayarları';
$string['filesview'] = 'Dosya alanı içeriğini görüntüle';
$string['filters'] = 'Filtreler';
$string['friday'] = 'Cuma';
$string['generalparams'] = 'Pano ayarlarına erişim';
$string['generatedexports'] = 'Üretilen dışa aktarmalar';
$string['globalcron'] = 'Genel cron ayarları';
$string['googlelocationerror'] = 'Google konum hatası';
$string['googlemap'] = 'Google Haritalar';
$string['googleparams'] = 'Google Haritalar ayarları';
$string['graphparams'] = 'Grafik ayarları';
$string['guestsnotallowed'] = 'Konuklara izin verilmiyor';
$string['hour'] = 'Saat';
$string['hours'] = 'Saat';
$string['importconfig'] = 'Yapılandırmayı içe aktar';
$string['instancecron'] = 'Örnek cron ayarları';
$string['invalidorobsoletefilterquery'] = 'Geçersiz veya esk filtre sorgusu.';
$string['invalidorobsoletequery'] = 'Geçersiz veya eski sorgu.';
$string['line'] = 'Çizgiler';
$string['linear'] = 'Doğrusal';
$string['listvalue'] = 'Değer Listesi';
$string['log'] = 'Logaritmik';
$string['maptypehybrid'] = 'Hibrit görünüm';
$string['maptyperoadmap'] = 'Yol haritası';
$string['maptypesatellite'] = 'Uydu görüntüsü';
$string['maptypeterrain'] = 'Alan';
$string['mins'] = 'Minimum';
$string['monday'] = 'Pazartesi';
$string['month'] = 'Ay';
$string['newdashboard'] = 'Yeni kontrol paneli';
$string['noquerystored'] = 'Sorgu kaydedilmedi';
$string['norefresh'] = 'Yenileme yok';
$string['notretrievable'] = 'Veri alınamıyor.  Düzenleme modunda olabilirsiniz ve önceki hiçbir veri önbelleğe alınmamıştır.  Bu mod, boğulma sorgularında pano kurulumunun kontrolünü kaybetmeyi önlemek için zorlanır.';
$string['obsoletequery'] = 'Sorgu, eski Moodle 1.9 veritabanı için yazılıyor gibi görünüyor.';
$string['outputfilegeneration'] = 'Çıktı dosyası oluşturma';
$string['outputfiltered'] = 'Çıktı dosyası oluştur (filtrelenmiş)';
$string['outputparams'] = 'Çıktı ayarlarını sorgula';
$string['pageexport'] = 'Sayfa dışa aktarma';
$string['pie'] = 'Pasta';
$string['plotgraphparams'] = 'Çizilen grafik ayarları';
$string['pluginname'] = 'Gösterge Paneli';
$string['publishinblock'] = 'blok alanında';
$string['publishinpage'] = 'ayrı sayfada';
$string['querydesc'] = 'Sorgu tanımı';
$string['queryparams'] = 'Kullanıcı parametrelerini sorgula';
$string['rangevalue'] = 'Aralık';
$string['saturday'] = 'Cumartesi';
$string['savechangesandconfig'] = 'Yapılandırmayı kaydedin ve devam edin';
$string['savechangesandreturn'] = 'Kaydedin ve derse geri dönün';
$string['savechangesandview'] = 'Kaydet ve görüntüle';
$string['securityparams'] = 'Güvenlik ve performans ayarları';
$string['setup'] = 'Kurulum';
$string['sqlinserts'] = 'SQL Ekler';
$string['sqlparamlabel'] = 'Etiket';
$string['sqlparamtype'] = 'Tip';
$string['sqlparamvalues'] = 'Değerler';
$string['sqlparamvar'] = 'SQL Değişken Adı';
$string['subtotal'] = 'Alt Toplam';
$string['summatorsparams'] = 'Özetleyici ayarları';
$string['sunday'] = 'Pazar';
$string['tablecolormapping'] = 'Çıktı tablosu renk eşlemesi';
$string['tabular'] = 'Tablo';
$string['tabularparams'] = 'Tablo düzeni ekstra ayarlar';
$string['task_exportdata'] = 'Veri otomatik dışa aktarma';
$string['textvalue'] = 'Metin';
$string['thursday'] = 'Perşembe';
$string['timegraph'] = 'Zaman eğrileri';
$string['timeline'] = 'Zaman çizelgesi';
$string['timelinecolorfield'] = 'Zaman çizelgesi boyama alanı';
$string['timelineparams'] = 'Zaman çizelgesi ek ayarları';
$string['toomanyrecordsusepaging'] = 'Bu sorgunun çok fazla sonucu var. Bu sorgu için disk belleği zorlandı';
$string['total'] = 'Toplam';
$string['treeview'] = 'Ağaç görünümü';
$string['treeviewparams'] = 'Ağaç görünümü ek ayarları';
$string['tuesday'] = 'Salı';
$string['viewdashboard'] = 'Gösterge tablosunu görüntüle';
$string['wednesday'] = 'Çarşamba';
$string['week'] = 'Hafta';
$string['year'] = 'Yıl';
