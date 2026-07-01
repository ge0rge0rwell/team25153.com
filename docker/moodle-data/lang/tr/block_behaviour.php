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
 * Strings for component 'block_behaviour', language 'tr', version '5.0'.
 *
 * @package     block_behaviour
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminheader'] = 'Elbette kullanıcıya araştırmacı rolü verin veya iptal edin';
$string['adminheadershownames'] = 'Öğrenciler için isimleri veya sıralı numaraları göster';
$string['adminheaderstudyid'] = 'Öğrenci çalışma kimliğini göster veya gizle';
$string['adminheaderuselord'] = 'Öğrenme Nesnesi İlişkileri Keşfi eklentisi ile entegre edin';
$string['adminuselorddesc'] = 'Bu, öğretmenlere Öğrenme Nesnesi İlişkileri Keşfi (ÖNİK) blok eklentisinden öğrenme nesnesi grafiğini alma seçeneği sunacaktır.';
$string['adminuselordlabel'] = 'Öğrenme Nesnesi İlişkileri Keşfinin grafiğini kullanmılsın mı?';
$string['alreadyexists'] = '{$a} dosyası zaten var, lütfen başka bir dosya adı seçin.';
$string['badfile'] = 'Bilinmeyen dosya alanları, doğru dosyayı aldınız mı?';
$string['behaviour'] = 'Davranış Analitiği';
$string['behaviour:addinstance'] = 'Yeni bir Davranış Analitiği bloğu ekleyin';
$string['behaviour:export'] = 'Dışa aktar';
$string['behaviour:myaddinstance'] = 'Moodle sayfama yeni bir Davranış Analitiği bloğu ekleyin';
$string['behaviour:view'] = 'Davranış Analitiği Görüntüle';
$string['close'] = 'Kapat';
$string['cluster'] = 'Küme';
$string['clusteringname'] = 'Bu analizin adı';
$string['clusteringnamebutton'] = 'Kaydet';
$string['clusterreplay'] = 'Kümeyi yeniden oynat';
$string['convergence'] = 'Çakışma';
$string['copy'] = 'Kopyala';
$string['decomposed'] = 'Ayrıştırılmış ağırlık merkezleri';
$string['delbutton'] = 'Seçili verileri sil';
$string['delcluster'] = 'Kümeleme verilerini sil';
$string['delclusterdesc'] = 'Bu kurstaki tüm kullanıcılar için tüm kümeleme, el ile kümeleme, küme üyeliği ve merkez yorum verilerini siler.';
$string['delconfirm'] = 'Seçili kümeleme verilerini silmek istediğinizden emin misiniz? Bu eylem geri alınamaz.';
$string['deldata'] = 'Verileri sil';
$string['deleteall'] = 'Kümeleme, grafik yapılandırması ve/veya öğrenci günlüğü verilerini silme';
$string['delgraph'] = 'Grafik verilerini silme';
$string['delgraphdesc'] = 'Bu dersteki tüm kullanıcılar için tüm grafik yapılandırma verilerini siler.';
$string['deluser'] = 'Öğrenci verilerini silme';
$string['deluserdesc'] = 'Bu ders için tüm öğrenci günlüğü verilerini siler.  Bu günlükler, Behavior Analytics\'in ayıkladığı Moodle günlüklerinin kopyasıdır.  Moodle günlüklerinden hiçbir veri silinmez.';
$string['disttocluster'] = 'Kümeye uzaklık';
$string['docsanchor'] = 'Belgeler';
$string['docsconfig1'] = 'Arayüz, tüm kurs etkinliklerinin grafiğini, bir ağırlık kaydırıcısını ve düğümlerin hiyerarşik bir açıklamasını içerir.  Araştırmacılar ayrıca, diğer kullanıcının görüntüleyebilecekleri ancak değiştiremeyecekleri grafik yapılandırmalarının bir menüsüne sahip olacaklar.  Ağırlık kaydırıcısı, pozitif değerlerin düğümleri birbirine çeken ve negatif değerin düğümleri birbirinden uzaklaştıracağı bağlantı ağırlıklarını kontrol eder.  Sıfır değeri, tüm düğümlerin durağan kalmasına neden olur.  Düğümler daha sonra konuma sürüklenebilir.  İstenmeyen düğümler, sağ tıklayıp kaldır seçeneği seçilerek veya hiyerarşik açıklamada ilgili kutunun işareti kaldırılarak kaldırılabilir.  Bir düğümün üzerine gelindiğinde, etkinliğin türü ve adı gösterilecek ve etkileşimli bir önizleme açılacaktır.  Fareyi önizlemenin dışına taşımak, önizlemenin kaybolmasına neden olur.';
$string['docsdelete1'] = 'Yöneticiler, eklenti tarafından saklanan kurs verilerini silebilir.  Bu, yeni bir öğrenci grubuna ders verirken faydalı olabilir.  Veya sadece eski verileri silmek ve temizlemeye başlamak isteyebilirsiniz.  Veri silme sayfası, kümeleme, grafik yapılandırma veya öğrenci günlüğü verilerini silmek için 3 seçeneğe sahiptir.  Kümeleme verileri, öğrencileri görüntülerken ve kümelerken yapılan şeydir.  Bu, kümeleme ve üyelik verilerinin yanı sıra yorum verilerini içerir.  Grafik konfigürasyon verileri, grafik düğümleri konumlandırılırken yapılır.  Bu verilerin silinmesi, kurs için tüm grafik yapılandırmalarının yanı sıra bu grafik yapılandırmalarıyla ilişkili öğrenci merkez verilerini kaldırır.  Öğrenci günlüğü verileri, Moodle günlüklerinden çıkarılır ve başka bir veritabanı tablosuna kopyalanır.  Moodle günlük verilerinin kendisi değil, kopyalanan veriler silinir.  Kurstaki tüm kullanıcıların verileri silinir.';
$string['docsdescription'] = 'Behavior Analytics, ders erişim günlüklerinden öğrencilerin sıralı davranış kalıplarını çıkarmayı amaçlayan bir Moodle blok eklentisidir.  Davranış Analitiği, bir kurs sayfasındaki tüm etkinlikleri bir grafikteki düğümler olarak kabul eder.  Düğümler arasındaki bağlantılar, bu etkinliklere öğrenci erişimleridir.  Her öğrencinin daha sonra etkinliklere erişimlerinden ve düğümlerin koordinatlarından türetilen bir merkez noktası vardır.  Öğrenci merkezleri, öğrencileri gruplandırmak ve ortak erişim modellerini bulmak için kümelenebilir.  Grafiğin düğümleri, öğrenci merkezlerini etkileyecek şekilde manuel olarak konumlandırılabilir ve/veya grafikten çıkarılabilir.  Öğrenciler sistem için yeni veriler oluşturduğunda, kümeleme sonuçları güncellenir ve yeni verilerin eklenmesiyle gruplamanın doğru kaldığını görsel olarak doğrulamak için yeniden oynatılabilir.  Yanlış gruplamalar manuel olarak değiştirilebilir.  Eklenti öğretmen kullanımına yöneliktir ve öğrenciler tarafından görülmeyecektir.';
$string['docsexport'] = 'Öğretmen kullanıcılar, eklentinin sahip olduğu her şeyi dışa aktaracak, ancak tüm öğrenci kimliklerini çalışma kimlikleriyle değiştirecek olan eksiksiz bir anonimleştirilmiş veri setini dışa aktarmak için bir "Dışa Aktar" düğmesi göreceklerdir. Ayrıca, sistem yöneticisi olan kullanıcılar blokta öğrenci kaynak erişim verilerini dışa veya içe aktarmak için kullanılan dışa ve içe aktarma formlarını göreceklerdir. Dışa aktarma formunda biri şu anda kayıtlı öğrenciler, diğeri daha önce kayıtlı öğrenciler için olmak üzere iki onay kutusu vardır. Dışa aktar düğmesine tıklamak verilerin indirilmesini sağlar. Dışa aktarma işlemi, Site Yönetimi -> Raporlar -> Günlükler bölümüne gidip Moodle\'ın raporlar arayüzü üzerinden de yapılabilir. Dışa aktarılacak kursu seçin ve eylemleri "Görüntüle" olarak ayarlayın, ardından "Bu günlükleri al" düğmesine tıklayın. Günlükler alındıktan sonra sayfanın en altına inin ve günlükleri JavaScript Object Notation (.json) dosyası olarak indirin. Komut satırından dışa aktarma, cli dizininde bulunan export-cli.php betiğini çalıştırarak da mümkündür. Betiği parametre olmadan çalıştırmak bir kullanım mesajı gösterecektir.';
$string['docshowconfig'] = 'Kaynak düğümleri nasıl yapılandırılır.';
$string['docshowdelete'] = 'Veriler nasıl silinir?';
$string['docshowimport'] = 'Veriler dışa veya içe nasıl aktarılır.';
$string['docshowlord'] = 'Öğrenme Nesnesi İlişkisi Keşfi (LORD) eklentisi ile nasıl entegre edilir.';
$string['docshowreplay'] = 'Kümeleme sonuçları nasıl yeniden oynatılır.';
$string['docshowset'] = 'Genel ayarlar nasıl değiştirilir?';
$string['docshowtask'] = 'Zamanlanmış görev nasıl kullanılır?';
$string['docshowview'] = 'Öğrenci davranış grafiği nasıl görüntülenir ve kümeleme nasıl çalıştırılır.';
$string['docsimport'] = 'İçe aktarma formu, sürüklenip bırakılan bir dosya alabilir veya "Dosya seç" düğmesi kullanılarak bir dosya seçilebilir. Yalnızca JavaScript Nesne Gösterimi (.json) dosya türleri kabul edilir. Dosya adı, kullanıcının doğru verileri doğru kursa aktardığından emin olmak için kurs kısa adının ilk kelimesini de içermelidir. Dışa aktarma formu veya Moodle\'ın rapor arayüzü aracılığıyla dışa aktarılan bir dosya içe aktarılabilir.';
$string['docsissues'] = 'Bir sorunu bildirin.';
$string['docslord1'] = 'Öncelikle LORD eklentisinin Moodle\'a yüklenmiş olması gerekmektedir.  Ardından, entegrasyona izin vermek için bir yönetici seçeneği vardır.  Yönetici seçeneği etkinleştirildiğinde, entegrasyonu yapılandırmak için blokta fazladan bir bağlantı görünecektir.  Blok içinden kullanılabilen 2 ayar vardır.  İlki, Behavior Analytics\'in LORD eklentisinde yapılan en son grafiği kullanmasına neden olur.  İkincisi, sistem tarafından oluşturulan grafik ile kullanıcı tarafından manipüle edilen grafik arasında geçiş yapar.  Kullanılacak LORD grafiği yoksa bunun yerine Behavior Analytics ile yapılan grafik kullanılacaktır.';
$string['docslord2'] = 'LORD tarafından oluşturulan grafiği kullanırken, "Kaynak düğümlerini yapılandır" özelliğini kullanarak düğümleri manipüle etmek mümkündür.  Grafik, gruplandırma düğümlerine ve bunlarla ilişkili bağlantılara sahip olacağından biraz farklı görünecektir.  Davranış Analitiği içinde bir LORD grafiği manipüle edilirse, LORD grafiği olmaktan çıkar.  Bu, yeni manipüle edilmiş grafiği kullanmak için LORD entegrasyonunun kapatılması gerektiği anlamına gelir.  Böyle bir grafikte tüm düğümler doğru konumlarda olacaktır, ancak artık düğümler arasında bağlantılar olmayacağından bağlantılar farklı görünecektir.';
$string['docsreplay1'] = 'Kümeleme yapılmazsa, yalnızca arabirim gösterilir. Arabirim, kullanıcı, grafik yapılandırması ve kümeleme çalışmasına göre sıralanmış kümeleme koşularından oluşan bir menüden oluşur. Menüden bir öğe seçildiğinde kümeleme başında gösterilen grafik de görüntülenir. Oynatma ve adım düğmeleri, yeniden oynatmayı kontrol eder ve hangi yinelemenin görüleceğini belirler. Yeniden oynatma ileriye veya geriye doğru yapılabilir, ancak yalnızca ileriye doğru oynatılabilir. Bir merkez işaretini tıklattığınızda, kümeleme sırasında bu merkez için herhangi bir yorum yapılmışsa notlar eklenebilir veya görüntülenebilir.';
$string['docsreplay2'] = 'Bir kümeleme çalıştırması, zaman kaydırıcısının tam zamanlı dilimini kullandığında ve aynı zamanda yakınsamaya çalıştığında, bu kümeleme çalıştırması, kullanılabilir olduğunda yeni öğrenci verileriyle güncellenecektir.  Bu güncelleme, öğrenci merkezlerini değiştirir, tekrara yinelemeler ekler ve küme üyeliğini değiştirebilir.  Ayrıştırılmış ağırlık merkezlerini kullanmak, merkezin bir düğüm üzerinde hizalanmasına neden olur ve öğrenci merkezini son derece hareketli hale getirebilir.  Geometrik ağırlık merkezleri, daha fazla veri olduğu için daha az hareket etme eğilimindedir.';
$string['docsreplay3'] = 'Yeniden oynatma sırasında manuel kümeleme mümkündür, ancak kümeleme sırasındakinden biraz farklı davranır.  Tekrar ilk yakınsamaya ulaştığında, öğrenci merkezleri başka bir kümeye yerleştirmek için sürüklenip bırakılabilir.  Manuel kümeleme, orijinallerle aynı renkte olan ikinci bir kümeleme merkezi kümesi üretir.  Manuel kümeler daha şeffafken ve kullanıcının yaptığı değişiklikleri temsil ederken orijinal küme değişmez.  Her iki küme kümesi de mevcut olan yeni verilerle güncellenir.';
$string['docssettings'] = 'Eklenti, bir kullanıcının programı kullanırken gördüklerini etkileyen bazı genel ayarlar içerir.  Öğrencilerin çalışma kimliklerini görmelerine ve sıralı sayılar yerine grafik menüsünde öğrenci adlarını göstermelerine olanak tanıyan bir seçenek vardır.  LORD eklentisi kuruluysa, onunla entegrasyona izin verme seçeneği vardır.  Ayarlar ayrıca, eklentinin yüklü olduğu bir kursa kayıtlı öğrenci olmayan herhangi bir kullanıcıya araştırmacı rolünü verme veya iptal etme seçeneği de sunar. Araştırmacı rolü, kullanıcının o dersteki diğer kullanıcıların mevcut grafik yapılandırmalarını ve kümeleme sonuçlarını görmesine olanak tanır. kurs.  Araştırmacı başka bir kullanıcının verilerini sadece görebilir, değiştiremez.  Ayarlara Site yönetimi -> Eklentilere genel bakış bölümünden yönetici olarak erişilebilir, ardından "Davranış Analitiği" aranır ve ilgili ayarlar bağlantısı tıklanır.';
$string['docstask'] = 'Bloğun, varsayılan olarak günde bir kez çalışacak şekilde ayarlanan zamanlanmış bir görevi vardır.  Görevin çalışma sıklığı, Site yönetimi -> Sunucu -> Zamanlanmış görevler\'e gidilerek ve ardından "Davranış Analizini Güncelle" için ayarlar simgesine tıklanarak değiştirilebilir.  Buradan, görevi manuel olarak çalıştırmak da mümkündür.';
$string['docsview1'] = 'Grafiği görüntülemeden önce kaynak düğümleri yapılandırılmamışsa, düğümlere otomatik konumlar verilir.  Görünüm arayüzü grafik, öğrenci grupları menüsü, öğrenci menüsü ve zaman kaydırıcıdan oluşur.  Grup ve öğrenci menüleri, grafikte hangi öğrencilerin görüntüleneceğinin seçilmesine olanak tanır.  Zaman kaydırıcı, hangi bağlantıların görüntüleneceğini seçmenize olanak tanır.  Tüm kullanıcıların zamanları erişim 1\'de başlar, bu nedenle tüm öğrencilerin zaman kaydırıcısının uzak ucundaki bağlantıları olmaz.  İki tutamaç, görüntülenen zaman dilimini kontrol eder.  Bir düğümün üzerine gelmek, ilişkili kaynağın adını ve etkileşimli bir pencerede etkinliğin önizlemesini üretecektir.  Fareyi önizlemenin dışına taşımak onu kaldırır.';
$string['docsview2'] = 'Öğrenci menüsünün üzerinde grafik görüntüleme aşamasından kümeleme aşamasına geçişi sağlayan "Küme" etiketli bir düğme bulunmaktadır. Bu düğmeye tıklandığında aynı grafik ve öğrenci bağlantıları gösterilir, ancak her öğrenci centroidi bir üçgenle gösterilir. Sol altta, ağırlıklı geometrik (varsayılan) ve ayrıştırılmış olmak üzere centroid türünü belirleyen iki radyo düğmesi vardır. Kümeleme arayüzündeki kaydırıcı, kümeleme aşamalarını kontrol eder. Kaydırıcıyı ikinci konuma getirmek grafiği kaldırır ve öğrenci merkezlerini görüntüleme alanının kenarına ölçeklendirir. Kaydırıcı üzerindeki üçüncü konum kümelemenin gerçekleştirilmesini sağlar. Bir metin kutusu kullanılacak küme sayısını alır veya varsayılan 3 sayısı kullanılır. Daha sonra k-ortalamalar kümelemesi adım düğmesi ile her seferinde bir iterasyon boyunca adımlanabilir veya oynat düğmesi kullanılarak yakınsamaya kadar oynatılabilir. Sıfırla düğmesi kümeleme aşamasını sıfırlayarak mevcut kümeleme sonuçlarını temizler. Tüm kümeleme sonuçları, her öğrencinin hangi kümeye ait olduğunu gösteren sağ taraftaki panelde kaydedilir.';
$string['docsview3'] = 'Kümeleme sırasında, öğrenci merkezlerine ve kümeleme merkezlerine yorumlar eklenebilir. Bir merkeze tıklandığında, küme veya üyeleri hakkında herhangi bir notun kaydedilebileceği bir yorum kutusu açılacaktır. Bir öğrenci merkezinin üzerine gelindiğinde o öğrencinin grafiği gösterilir. Bir kümeleme merkezinin üzerine gelindiğinde, o kümenin üyeleri arasındaki ortak bağlantıların grafiği gösterilir. Öğrenci grafiğinin aksine, ortak bağlantılar grafiği fare grafiğin dışına tıklanana kadar görünür kalacaktır. Ortak bağlantılar grafiği görünür durumdayken bir düğümün üzerine gelindiğinde o düğümün önizlemesi, bir bağlantının üzerine gelindiğinde ise o bağlantıya bağlı her iki düğümün önizlemesi görüntülenir.';
$string['docsview4'] = 'Kümeleme sırasında, öğrenci merkezlerini sürükleyip bırakarak kümeleme algoritmasına yardımcı olmak da mümkündür. Bir öğrenci centroidi orijinal konumundan sürüklenip başka bir yere bırakıldığında, öğrencinin bırakıldığı yere en yakın kümeleme centroidi o öğrenciyi kümeye dahil edecektir. Bu özellik, kullanıcının görselleştirme algısına göre sonuçları tam olarak istenen gibi olmadığında kümeleme algoritmasına yardımcı olabilir. Kümeleme algoritmasının tekrar çalışması gerekecektir ve bu noktada manuel kümelemeyi geçersiz kılabilir.';
$string['docswhatis'] = 'Davranış Analitiği nedir?';
$string['dragoff'] = 'Öğrencileri sürükleyin KAPALI';
$string['dragon'] = 'Öğrencileri sürükleyin AÇIK';
$string['eventbehaviourexported'] = 'Davranış Analitiği günlük dosyası dışa aktarıldı';
$string['eventbehaviourimported'] = 'Davranış Analizi günlük dosyası içe aktarıldı';
$string['eventbehaviourviewed'] = 'Davranış Analitiği görüntülendi';
$string['exportall'] = '_all';
$string['exportbutlabel'] = 'Dışa aktar';
$string['exportcliout'] = 'Günlükler {$a} konumunda dışa aktarılıyor';
$string['exportcliusage'] = 'Kullanım şekli: ./export-cli.php courseid past(0|1) current(0|1) [filename]';
$string['exportcurlabel'] = 'Şimdiki';
$string['exportcurrent'] = '_current';
$string['exportdata'] = 'Tüm verileri dışa aktar (anonimleştirilmiş)';
$string['exportdatafn'] = '{$a}_complete';
$string['exported'] = '\'{$a->uid}\' kimliğine sahip kullanıcı, \'{$a->cid}\' kimliğine sahip kurs için bir günlük dosyası verdi.';
$string['exportlogprefix'] = 'logs_';
$string['exportlogs'] = 'Öğrenci günlüklerini dışa aktar';
$string['exportpast'] = '_past';
$string['exportpastlabel'] = 'Geçmiş';
$string['f1'] = 'F1';
$string['f2'] = 'F2';
$string['fhalf'] = 'F0.5';
$string['geometrics'] = 'Geometrik merkezler';
$string['goodfile'] = 'Dosya içe aktarma başarılı.';
$string['graph'] = 'Grafik';
$string['hide'] = 'Gizle';
$string['importbutlabel'] = 'İçe aktar';
$string['imported'] = '\'{$a->uıd} \' kimliğine sahip kullanıcı, kurs için \'{$a->cıd}\'kimliğine sahip bir günlük dosyası içe aktardı.';
$string['importlogs'] = 'Öğrenci günlük dosyasının içe aktar';
$string['invalidcourse'] = 'Kurs kimlik numarası {$a} geçerli değil. Kurs mevcut değil.';
$string['iteration'] = 'Yineleme';
$string['launchconfiguration'] = 'Kaynak düğümlerini yapılandırma';
$string['launchplugin'] = 'Öğrenci davranışını görüntüle';
$string['launchreplay'] = 'Tekrar kümeleme';
$string['linksweight'] = 'Ağırlık bağlantıları';
$string['manualcluster'] = 'Manuel kümeleme';
$string['members'] = 'üyeler';
$string['nofile'] = 'Dosya seçilmedi, lütfen bir dosya seçin.';
$string['nogroup'] = 'Grup yok';
$string['nonodes'] = 'İçe aktarma başarısız oldu: önce kaynak düğümlerini yapılandırmanız gerekiyor.';
$string['nullexport'] = 'Dışarıya aktarılacak bir şey yok.';
$string['numclusters'] = 'Küme sayısı';
$string['numofclusters'] = 'Küme sayısı';
$string['numstudents'] = 'Öğrenci sayısı';
$string['pluginname'] = 'Davranış Analitiği';
$string['precision'] = 'Hassasiyet';
$string['print'] = 'Yazdır';
$string['privacy:metadata:block_behaviour:centroidx'] = 'Centroid x koordinat değeri.';
$string['privacy:metadata:block_behaviour:centroidy'] = 'Centroid y koordinat değeri.';
$string['privacy:metadata:block_behaviour:changed'] = 'Bu grafik düğümünün taşındığı son zaman değeri.';
$string['privacy:metadata:block_behaviour:clusterid'] = 'Kümeleme çalıştırmaları için benzersiz tanımlayıcı.';
$string['privacy:metadata:block_behaviour:clusternum'] = 'Farklı kümeler için tanımlayıcı.';
$string['privacy:metadata:block_behaviour:commentid'] = 'Yorum için benzersiz tanımlayıcı.';
$string['privacy:metadata:block_behaviour:coordsid'] = 'Grafik düğümü koordinat yapılandırmaları için benzersiz tanımlayıcı.';
$string['privacy:metadata:block_behaviour:courseid'] = 'Bu kaydın ait olduğu kursun özgün kimlik numarası.';
$string['privacy:metadata:block_behaviour:iteration'] = 'Kümeleme yineleme numarası.';
$string['privacy:metadata:block_behaviour:moduleid'] = 'Kurs modülleri için benzersiz tanımlayıcı.';
$string['privacy:metadata:block_behaviour:numnodes'] = 'Kaynak erişimi sayısı.';
$string['privacy:metadata:block_behaviour:remark'] = 'Yorum metni.';
$string['privacy:metadata:block_behaviour:scale'] = 'Grafik düğümlerini denormalize etmek için ölçeklendirme değeri.';
$string['privacy:metadata:block_behaviour:studentid'] = 'Öğrenciler için benzersiz tanımlayıcı.';
$string['privacy:metadata:block_behaviour:studyid'] = 'Öğrenciler için benzersiz, anonimleştirilmiş bir tanımlayıcı.';
$string['privacy:metadata:block_behaviour:time'] = 'Yalnızca sıralama için kullanılan, bu kaydın oluşturulduğu zamanı temsil eden değer.';
$string['privacy:metadata:block_behaviour:totalx'] = 'Birikmiş x koordinatı değeri.';
$string['privacy:metadata:block_behaviour:totaly'] = 'Birikmiş y koordinat değeri.';
$string['privacy:metadata:block_behaviour:usecustom'] = 'Manipüle edilmiş grafiği kullanmak veya kullanmamak için işaretleyin.';
$string['privacy:metadata:block_behaviour:usegeometric'] = 'Geometrik veya ayrıştırılmış ağırlık merkezlerini kullanmak için işaretleyin.';
$string['privacy:metadata:block_behaviour:uselord'] = 'Grafiği Öğrenme Nesnesi İlişki Keşfinin eklentisinden kullanıp kullanmamak için işaretleyin.';
$string['privacy:metadata:block_behaviour:userid'] = 'Bu kaydı bırakan öğrencinin benzersiz kimlik numarası.';
$string['privacy:metadata:block_behaviour:visible'] = 'Grafik düğümünün görünür olup olmadığı.';
$string['privacy:metadata:block_behaviour:xcoord'] = 'Grafik düğümünün x koordinat değeri.';
$string['privacy:metadata:block_behaviour:ycoord'] = 'Grafik düğümünün y koordinat değeri.';
$string['privacy:metadata:block_behaviour_centres'] = 'Ayrıştırılmış öğrenci merkezli değerler.';
$string['privacy:metadata:block_behaviour_centroids'] = 'Birikmiş merkez bilgilerini depolamak için tablo.';
$string['privacy:metadata:block_behaviour_clusters'] = 'Kümeleme verilerini depolamak için tablo.';
$string['privacy:metadata:block_behaviour_comments'] = 'Öğretmenlerin kümeler ve küme üyeleri için girdiği verileri yorumlayın.';
$string['privacy:metadata:block_behaviour_coords'] = 'Grafikteki her kurs modülünün düğüm noktaları için koordinatlar.';
$string['privacy:metadata:block_behaviour_imported'] = 'Hem Moodle tarafından oluşturulan günlükleri hem de eklentinin içe aktarma özelliği kullanılarak başka bir yerden içe aktarılanları içeren erişim günlüklerinin bir kopyasının saklandığı tablo.';
$string['privacy:metadata:block_behaviour_lord_options'] = 'LORD eklentisi entegrasyon seçeneklerini saklar.';
$string['privacy:metadata:block_behaviour_man_clusters'] = 'Yeniden oynatma sırasında manuel olarak değiştirilen kümeler için veriler.';
$string['privacy:metadata:block_behaviour_man_members'] = 'Yeniden oynatma sırasında el ile değiştirilen küme üyeleri için veriler.';
$string['privacy:metadata:block_behaviour_members'] = 'Kümeleme üyelik verilerini saklamak için kullanılan tablo.';
$string['privacy:metadata:block_behaviour_scales'] = 'Grafik yapılandırmaları için verileri ölçeklendirme.';
$string['privacy:metadata:block_behaviour_studyids'] = 'Kurs ve öğrenci kimliklerinin ilgili çalışma kimliklerine eşlenmesi.';
$string['randcentroids'] = 'Random centroidler';
$string['recall'] = 'Yeniden çağır';
$string['removegraph'] = 'Grafiği kaldır';
$string['researchrole'] = '{$a->coursename} için {$a->username} adlı kişiye araştırmacı rolü verin';
$string['reset'] = 'Sıfırla';
$string['runkmeans'] = 'K-Ortalamasını çalıştır';
$string['save'] = 'Kaydet';
$string['section'] = 'Bölüm';
$string['settings'] = 'LORD entegrasyon seçenekleri';
$string['showcentroids'] = 'Centroidleri göster';
$string['shownamesdesc'] = 'Bu, öğrenciler için ad ve soyad veya sıralı kimlikleri gösterecektir.';
$string['shownameslabel'] = 'Öğrenci adları gösterilsin mi?';
$string['studyid'] = 'Çalışma kimliğiniz: {$a}';
$string['studyiddesc'] = 'Bu, tüm derslerde öğrenci çalışma kimliğini gösterecektir.';
$string['studyidlabel'] = 'Öğrencilerin çalışma kimliklerini görmelerine izin verilsin mi?';
$string['title'] = 'Davranış Analitiği';
$string['totalmeasures'] = 'Toplam ölçümler';
$string['update'] = 'Davranış Analitiğini Güncelle';
$string['uselordcustomdesc'] = 'Bu, değiştirilmiş  Öğrenme Nesnesi İlişki Keşfinin grafiğini kullanacaktır.  Aksi takdirde sistem tarafından oluşturulan grafik kullanılacaktır.';
$string['uselordcustomlabel'] = 'Değiştirilmiş Öğrenme Nesnesi İlişki Keşfinin grafiğini mi kullanıyorsunuz?';
$string['uselorddesc'] = 'Bu, Öğrenme Nesnesi İlişkisi Keşfi (LORD) blok eklentisinden öğrenme nesnesi grafiğini alacaktır.';
$string['uselordlabel'] = 'Öğrenme Nesnesi İlişki Keşfinin grafiğini kullan?';
$string['viewed'] = '\'{$a->uid}\' kimliğine sahip kullanıcı, \'{$a->cid}\' kimliğine sahip kurs için Behavior Analytics\'i görüntüledi.';
$string['wrongfile'] = 'Kurs adı dosya adında değil, doğru dosyayı aldınız mı?';
