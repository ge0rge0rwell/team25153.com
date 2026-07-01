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
 * Strings for component 'amaworksheet', language 'tr', version '5.0'.
 *
 * @package     amaworksheet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amaworksheet:addinstance'] = 'Yeni bir çalışma sayfası ekle';
$string['amaworksheet:view'] = 'Çalışma sayfasını aç';
$string['amaworksheetcontent'] = 'Dosyalar ve alt klasörler';
$string['amaworksheetdetails_sizedate'] = '{$a->size} {$a->date}';
$string['amaworksheetdetails_sizetype'] = '{$a->size} {$a->type}';
$string['amaworksheetdetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amaworksheetdetails_typedate'] = '{$a->type} {$a->date}';
$string['cannotcreatetoken'] = 'Çalışma sayfasını aç';
$string['cannotcreatetoken_help'] = 'Belgeyi Amanote\'ta açma izniniz yok.';
$string['clicktoamaworksheet'] = 'Çalışma sayfasını aç';
$string['clicktodownloadfile'] = 'PDF olarak indir';
$string['dnduploadamaworksheet'] = 'Çalışma sayfası dosyası oluştur';
$string['downloadfile'] = 'İndir';
$string['guestsarenotallowed'] = 'Çalışma sayfasını aç';
$string['guestsarenotallowed_help'] = 'Konuk kullanıcıların Amanote\'ta bir kaynak açmasına izin verilmez. Bu özelliğe erişmek için lütfen oturum açın.';
$string['importantinformationdescription'] = 'Modülün düzgün çalışması için lütfen Moodle sitenizde aşağıdaki gereksinimlerin karşılanıp karşılanmadığını kontrol edin:

1. Web servisleri etkin (Site yönetimi > Gelişmiş özellik)

2. *Moodle mobil web hizmeti* etkin (Site yönetimi > Eklentiler) > Web servisleri > Harici servisler)

3. REST protokolü etkinleştirildi (Site yönetimi > Eklentiler > Web servisleri > Protokolleri yönet)

4. Yeteneğe *webservice/rest:use*, *kimliği doğrulanmış kullanıcılar* için izin verilir (Site yönetimi > Kullanıcılar > İzinler> Rolleri Tanımla > Kimliği Doğrulanmış Kullanıcılar > Rolleri Yönet)';
$string['importantinformationheading'] = 'Önemli kurulum bilgileri';
$string['key'] = 'Aktivasyon anahtarı';
$string['key_help'] = 'Bu anahtar, Podcast Creator gibi gelişmiş özellikler için gereklidir.';
$string['messageprovider:submission'] = 'Bir öğrencinin çalışması gönderimi';
$string['modifieddate'] = 'Değiştirilmiş {$a}';
$string['modulename'] = 'PDF Çalışma Sayfası';
$string['modulename_help'] = 'Çalışma sayfası dosyası, öğrenciler için sorular veya alıştırmalar içeren bir PDF dosyasıdır. Amanote\'un Çalışma Sayfası eklentisi, öğrencilerin soruları doğrudan PDF\'nin üzerinde veya yanında yanıtlamasına ve öğretmenlerin öğrencilerin yanıtlarını almasına olanak tanır.';
$string['modulenameplural'] = 'PDF Çalışma Sayfası';
$string['openinamaworksheet'] = 'Çalışma sayfasını aç';
$string['openinamaworksheet_help'] = 'Çalışma sayfasını açmak, soruları Amanote ile cevaplamanıza olanak sağlayacaktır..';
$string['openpodcastcreator'] = 'Sözlü açıklamalar ekleyin';
$string['openpodcastcreator_help'] = 'Çalışma sayfasına sözlü açıklamalar ekleyin.';
$string['openstudentsnotes'] = 'Açık öğrenci çalışmaları';
$string['openstudentsnotes_help'] = 'Bu, öğrencilerin size gönderdiği yanıtlara erişmenizi sağlar.';
$string['pluginadministration'] = 'Amanote modül yönetimi';
$string['pluginname'] = 'Amanote Çalışma Sayfası';
$string['podcastcreatorbutton'] = 'Sözlü açıklamalar ekleyin';
$string['printintro'] = 'Kaynak açıklamasını görüntüle';
$string['printintroexplain'] = 'İçeriğin altında kaynak açıklaması gösterilsin mi?';
$string['privacy:metadata'] = 'Amanote ile entegrasyon için bazı kullanıcı verilerinin Amanote istemci uygulamasına (uzak sistem) gönderilmesi gerekir.';
$string['privacy:metadata:access_token'] = 'Notları Moodle\'ın özel dosyalar alanına kaydetmek için kullanıcının erişim belirteci gereklidir.';
$string['privacy:metadata:access_token_expiration'] = 'Kullanıcının uygulamayı süresi dolmuş bir belirteçle kullanmasını önlemek için erişim belirtecinin sona erme tarihi gönderilir.';
$string['privacy:metadata:email'] = 'Kullanıcının e-postası, daha iyi bir kullanıcı deneyimi (not paylaşımı, bildirim vb.) sağlamak için uzak sisteme gönderilir.';
$string['privacy:metadata:fullname'] = 'Daha iyi bir kullanıcı deneyimi sağlamak için kullanıcının tam adı uzak sisteme gönderilir.';
$string['privacy:metadata:subsystem:corefiles'] = 'PDF Dosyaları Moodle\'ın dosya sistemi kullanılarak saklanır.';
$string['privacy:metadata:userid'] = 'Kimlik doğrulama sürecini hızlandırmak için kullanıcı kimliği Moodle\'dan Amanote\'a gönderilir.';
$string['servicenotavailable'] = 'Çalışma sayfasını aç';
$string['servicenotavailable_help'] = 'Hizmet mevcut değil. Lütfen site yöneticisiyle iletişime geçin.';
$string['showdate'] = 'Yükleme/değiştirme tarihini göster';
$string['showdate_desc'] = 'Kurs sayfasında yükleme/değiştirme tarihi gösterilsin mi?';
$string['showdate_help'] = 'Kaynağa bağlantıların yanında yükleme/değiştirme tarihini görüntüler.';
$string['showsize'] = 'Boyutu göster';
$string['showsize_desc'] = 'Kurs sayfasında dosya boyutu gösterilsin mi?';
$string['showsize_help'] = 'Kaynağa bağlantıların yanında dosya boyutunu \'3.1 MB\' gibi görüntüler.';
$string['submissionnotification'] = '{$a} bir çalışma gönderdi';
$string['unexpectederror'] = 'Çalışma sayfasını aç';
$string['unexpectederror_help'] = 'Beklenmeyen bir hata oluştu, kaynak Amanote\'ta açılamıyor. Lütfen site yöneticisiyle iletişime geçin.';
$string['unsecureconnection'] = 'Uyarı! Bağlantınız güvenli değil.';
$string['uploadeddate'] = '{$a} yüklendi';
