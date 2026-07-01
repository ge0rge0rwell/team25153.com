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
 * Strings for component 'filter_jwplayer', language 'tr', version '5.0'.
 *
 * @package     filter_jwplayer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appearanceconfig'] = 'Görünüm';
$string['customskincss'] = 'Özel CSS arayüz adı';
$string['customskincssdesc'] = 'Özel bir CSS arayüzü kullanın. Stiller, <a href="http://support.jwplayer.com/customer/portal/articles/1412123-building-jw-player-skins"> JW Player web sitesinde </a> açıklandığı şekilde site CSS\'sine eklenmelidir. </a> .';
$string['defaultposter'] = 'Varsayılan poster';
$string['defaultposterdesc'] = 'Videolarla kullanılacak varsayılan poster resmi.';
$string['displayfixed'] = 'Sabit genişlik';
$string['displayresponsive'] = 'Duyarlı';
$string['displaystyle'] = 'Görüntü sitili';
$string['displaystyledesc'] = 'Video genişliği belirtilmemişse videolar için kullanılacak varsayılan görüntü stili.';
$string['downloadbutton'] = 'İndirme düğmesi';
$string['downloadbuttondesc'] = 'Video dosyasını indirmek için oynatıcının sol üst köşesine bir düğme ekleyin.';
$string['enabledevents'] = 'Olaylar günlüğü';
$string['enabledeventsdesc'] = 'Seçilen etkinlikler izlenir ve etkinlik günlüklerine kaydedilir (dersin Raporlar bölümünde görüntülenebilir). Yalnızca gerekli olanları seçtiğinizden emin olun çünkü daha fazla öğe seçmek, günlüğe kaydedilen veri boyutunu artıracaktır. Varsayılan olarak yalnızca "oynat" ve "duraklat" düğmelerini izleriz ve bu video tam olarak izlenmiştir ("tamamlanmış" etkinlik). Etkinliklerle ilgili ayrıntılar için lütfen <a href="http://support.jwplayer.com/customer/portal/articles/1413089-javascript-api-reference"> JW Player </a> web sitesini ziyaret edin.';
$string['enabledextensions'] = 'Etkinleştirilmiş uzantılar';
$string['enabledextensionsdesc'] = 'Yalnızca seçilen dosya uzantıları, filtre tarafından ele alınır. Not HLS (.m3u8) ve MPEG-Çizgisi (.mpd), oynatıcı için Premium, Enterprise veya Ads lisansına sahip olmanızı gerektirir.';
$string['errornojwplayerinstalled'] = 'Moodle\'de JW Oynatıcı dosyası bulunamadı';
$string['errornolicensekey'] = 'Kendiliğinden barındırılan oynatıcı, lisans anahtarı gerektirir';
$string['eventmedia_audiotrack_switched'] = 'Medya ses parçası izi değiştirildi';
$string['eventmedia_captions_switched'] = 'Medya altyazı izi değiştirildi';
$string['eventmedia_playback_completed'] = 'Medya yürütme işlemi tamamlandı';
$string['eventmedia_playback_failed'] = 'Medya yürütme başarısız oldu';
$string['eventmedia_playback_launched'] = 'Medya yürütme başlatıldı';
$string['eventmedia_playback_position_moved'] = 'Medya yürütme konumu taşındı';
$string['eventmedia_playback_started'] = 'Medya yürütme başladı';
$string['eventmedia_playback_stopped'] = 'Medya yürütme durduruldu';
$string['eventmedia_qualitylevel_switched'] = 'Medya kalitesi seviyesi değişti';
$string['filtername'] = 'JW Player multimedya filtresi';
$string['gaidstring'] = 'Oyna/Tamamlanma Eylemi';
$string['gaidstringdesc'] = 'Google Play\'de Oyun / Tam Etkinlikler (ör. Dosya veya başlık) için kaydetme işlemi. Daha fazla bilgi için JW Player web sitesinde documentaion\'daki ga.idstring yapılandırma seçeneğine bakın.';
$string['galabel'] = 'Diğer Olay Eylemleri';
$string['galabeldesc'] = 'Etkinlik için Google Analytics\'te kayıt yapmak için etiketleyin (ör. Dosya veya başlık). Daha fazla bilgi için JW Player web sitesinde documentaion\'daki ga.label yapılandırma seçeneğini inceleyin.';
$string['googleanalytics'] = 'Google Analytics Entegrasyonu';
$string['googleanalyticsconfig'] = 'Google Analytics';
$string['googleanalyticsconfigdesc'] = 'Google hakkında daha fazla bilgi için lütfen <a href="http://support.jwplayer.com/customer/portal/articles/1417179-integration-with-google-analytics"> JW Oynatıcı web sitesinde </a> bulunan dokümanlara bakın. Analytics entegrasyonu.';
$string['googleanalyticsdesc'] = 'Google Analytics ile entegrasyonu etkinleştirin. Sayfalara Google Analytics kodunun eklenmesi gerekir; <a href="{$a}"> Ek HTML </a> site ayarı kullanarak ekleyebilirsiniz.';
$string['hostingmethod'] = 'Oynatıcı barındırma yöntemi';
$string['hostingmethodcloud'] = 'Bulutda barındırılan';
$string['hostingmethoddesc'] = 'Cloud, JW Player\'ı barındırdı (<a href="https://developer.jwplayer.com/jw-player/docs/developer-guide/release_notes/release_notes_7/"> sürüm {$a} </a>) varsayılan olarak kullanılır . Bu bulut barındırma modunun, üzerinde açıklanan <a href="http://www.jwplayer.com/products/jwplayer/cloud-video-player/"> bulut video oynatıcı </a> konseptiyle hiçbir ilgisinin bulunmadığına dikkat edin. JW oynatıcı web sitesi. Bulut barındırma modu, kendi kendine barındırılan moddaki gibi belirli Moodle dizinine kıyasla sadece kendi CDN barındırmalarından JW Player kitaplıklarını yükler. Kendi kendine barındırılan seçeneği tercih ederseniz, <a href="https://dashboard.jwplayer.com/#/players/downloads"> Lisans Anahtarları ve İndirilme Sayısı\'ndan JW Player 7 (Otomatik Barındırılan) zip arşivini indirdiğinizden emin olun </a> sayfasına gidin, paketten kaldırın ve içeriği Moodle\'deki /lib /jwplayer /dizinine yerleştirin.';
$string['hostingmethodself'] = 'Kendinden barındırılan';
$string['licensekey'] = 'Oynatıcı lisans anahtarı';
$string['licensekeydesc'] = 'Oynatıcı lisans anahtarı, JW Player web sitesindeki <a href="https://dashboard.jwplayer.com/#/players/downloads"> Lisans Anahtarıları ve İndirmeleri </a> sayfasından. Yukarıdaki ayarlarda bulut barındırma yöntemi kullansanız bile, burada "JW Player 7 (Otomatik Barındırma)" için bir anahtar belirtin.';
$string['paideditionsconfig'] = 'JW Player\'ın ücretli sürümleri için ayarlar';
$string['paideditionsconfigdescr'] = 'Aşağıdaki ayarlar yalnızca Pro, Premium ve Ads sürümleriyle çalışır. Serbest sürüm için hiçbir etkisi yoktur.';
$string['standardskin'] = 'standart';
$string['supportrtmp'] = 'RTMP akışlarını destekle';
$string['supportrtmpdesc'] = 'Etkinleştirilirse, rtmp: // ile başlayan bağlantılar, desteklenen uzantılar ayarında uzantısının etkin olup olmamış olursa olsun, filtre tarafından ele alınır.';
$string['useplayerskin'] = 'Oynatıcı arayüzünü kullan';
$string['videodownloadbtntttext'] = 'Video indir';
