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
 * Strings for component 'qtype_recordrtc', language 'tr', version '5.0'.
 *
 * @package     qtype_recordrtc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audio'] = 'Tek ses';
$string['audiobitrate'] = 'Ses bit oranı';
$string['audiobitrate_desc'] = 'Ses kaydının kalitesi (büyük sayılar daha yüksek kaliteyi gösterir)';
$string['filex'] = 'Dosya {$a}';
$string['gumabort'] = 'Yolunda gitmeyen bir şeyler internet kamerasının/mikrofonun kullanılmasını engelledi';
$string['gumabort_title'] = 'Bir şey oldu';
$string['gumnotallowed'] = 'Kullanıcının tarayıcının internet kamerasını/mikrofonu kullanmasına izin vermesi gerekir';
$string['gumnotallowed_title'] = 'İzinler yanlış';
$string['gumnotfound'] = 'Bağlı ya da devrede olan bir ses kayıt cihazı yok';
$string['gumnotfound_title'] = 'Ses kayıt cihazı yok';
$string['gumnotreadable'] = 'Bir şeyler tarayıcının internet kamerasına/mikrofona erişimini engelliyor';
$string['gumnotreadable_title'] = 'Donanım hatası';
$string['gumnotsupported'] = 'Tarayıcınız güvenli olmayan bir bağlantıdan kayıt yapmayı desteklemediği için bu eklentiyi kapatıyor';
$string['gumnotsupported_title'] = 'Güvenli olmayan bağlantı için destek yok';
$string['gumoverconstrained'] = 'Mevcut internet kameranız/mikrofonunuz gerekli sabitleri içeren bir eşzamanlı kayıt oluşturamaz';
$string['gumoverconstrained_title'] = 'Gerekli sabitler konusunda sorun var';
$string['gumsecurity'] = 'Tarayıcınız güvenli olmayan bir bağlantıdan kayıt yapmayı desteklemediği için bu eklentiyi kapatıyor';
$string['gumsecurity_title'] = 'Güvenli olmayan bağlantı için destek yok';
$string['gumtype'] = 'İnternet kamerasından/Mikrofondan eşzamanlı kayıt oluşturulmaya çalışıldı ama bazı sabitler belirlenemedi';
$string['gumtype_title'] = 'Belirlenmiş sabit yok';
$string['insecurewarning'] = 'HTTPS ya da localhost üzerinden kullanılmaması durumunda, tarayıcınız bu eklentiye izin vermeyebilir.';
$string['insecurewarningtitle'] = 'Bağlantı güvenli değil';
$string['mediatype'] = 'Kayıt türü';
$string['mediatype_help'] = 'Öğrenciden yalnızca ses,  video dosyası mı yoksa çok sayıda ses ve/veya video kaydetmesi mi isteniyor?

 <b>Tek ses:</b> Soru metninin altında bir ses kaydedici/oynatıcı görüntülenecektir.

 <b>Tek video:</b> Soru metninin altında bir video kaydedici/oynatıcı görüntülenecektir.

 <b>Özelleştirilmiş ses/görüntü:</b> soru metnine herhangi bir sayıda ses veya video kaydedici/oynatıcı için yer tutucular eklenebilir.  Örneğin [[ad1:ses]] veya [[ad2:video]].  Adların hepsi farklı olmalı ve kayıtların dosya adları olmalıdır.';
$string['nearingmaxsize'] = 'Dosya yüklemeleri için en fazla boyut sınırına ulaştınız';
$string['nearingmaxsize_title'] = 'Kayıt durdu';
$string['norecording'] = 'Kayıt yok';
$string['nowebrtc'] = 'Tarayıcınız WebRTC teknolojileri için çok az destek sağlıyor ya da hiç destek sağlamıyor ve bu nedenle de bu soru tipiyle kullanılamaz. Başka bir tarayıcı kullanın ya da tarayıcınızı güncelleyin.';
$string['nowebrtctitle'] = 'WebRTC desteklenmiyor';
$string['pluginname'] = 'Ses/video kaydet';
$string['pluginname_help'] = 'Öğrenciler soru metnine doğrudan tarayıcılarına ses veya video (veya \'Özelleştirilmiş ses/video\' seçeneğini seçerseniz her ikisinin bir karışımı) kaydederek cevap verirler. Bu daha sonra manuel olarak veya The Open University\'nin ücretsiz isteğe bağlı davranış eklentisini yüklediyseniz öz değerlendirme ile not verilebilir.';
$string['pluginname_link'] = 'question/type/recordrtc';
$string['pluginnameadding'] = 'Bir ses kayıt sorusu ekleniyor';
$string['pluginnameediting'] = 'Bir ses kayıt sorusu düzenleniyor';
$string['pluginnamesummary'] = 'Öğrenciler soru metnine doğrudan tarayıcılarına ses veya video (veya \'Özelleştirilmiş ses/video\' seçeneğini seçerseniz her ikisinin bir karışımı) kaydederek cevap verirler. Bu daha sonra manuel olarak veya The Open University\'nin ücretsiz isteğe bağlı davranış eklentisini yüklediyseniz öz değerlendirme ile not verilebilir.';
$string['privacy:metadata'] = 'Ses kayıt soru tipi kişisel hiçbir veriyi kaydetmez.';
$string['recordagain'] = 'Yeniden kaydet';
$string['recordingfailed'] = 'Kayıt başarısız; yeniden deneyin';
$string['startrecording'] = 'Kayıt işlemine başla';
$string['stoprecording'] = 'Kayıt işlemini durdur';
$string['timelimit'] = 'En fazla kayıt süresi';
$string['timelimit_help'] = 'Öğrencinin ses kaydı yanıtı için en üst zaman sınırı';
$string['uploadaborted'] = 'Kaydetme gerçekleştirilmedi';
$string['uploadcomplete'] = 'Kayıt kaydedildi';
$string['uploadfailed'] = 'Kayıt belleğe kaydedilemedi';
$string['uploadfailed404'] = 'Kayıt belleğe kaydedilemedi: muhtemelen dosyanın boyutu çok fazla';
$string['uploadpreparing'] = 'Kaydetmek için hazırlanıyor ...';
$string['uploadprogress'] = 'Kayıt ({$a}) belleğe kaydediliyor ...';
$string['video'] = 'Tek Video';
$string['videobitrate'] = 'Video bit oranı';
$string['videobitrate_desc'] = 'Video kaydının kalitesi (büyük sayılar daha yüksek kaliteyi gösterir)';
