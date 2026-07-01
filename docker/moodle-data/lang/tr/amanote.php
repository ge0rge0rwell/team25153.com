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
 * Strings for component 'amanote', language 'tr', version '5.0'.
 *
 * @package     amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amanote:addinstance'] = 'Yeni bir açıklama eklenebilir dosya ekle';
$string['amanote:view'] = 'Açıklama eklenebilir dosyayı aç';
$string['amanotecontent'] = 'Dosyalar ve alt klasörler';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['autosaveperiod'] = 'Otomatik kaydetme süresi';
$string['autosaveperiod_help'] = 'Otomatik kayıtlar arasındaki süreyi dakika cinsinden yapılandırın (min.: 1, maks.: 30). Dönemi 0\'a ayarlamak, otomatik kaydetme olmadığı anlamına gelir.';
$string['cannotcreatetoken'] = 'Amanote\'ta aç';
$string['cannotcreatetoken_help'] = 'Belgeyi Amanote\'ta açma izniniz yok.';
$string['clicktoamanote'] = 'Amanote\'ta aç';
$string['clicktodownloadfile'] = 'PDF dosyasını indirin';
$string['clicktodownloadnotes'] = 'Açıklamalı dosyayı indirin';
$string['clicktoopen'] = 'Yeni sekmede aç';
$string['dnduploadamanote'] = 'Açıklama eklenebilir dosya oluştur';
$string['downloadfile'] = 'İndir';
$string['guestsarenotallowed'] = 'Amanote\'ta aç';
$string['guestsarenotallowed_help'] = 'Konuk kullanıcıların Amanote\'ta bir kaynak açmasına izin verilmez. Bu özelliğe erişmek için lütfen oturum açın.';
$string['importantinformationdescription'] = 'Modülün düzgün çalışması için lütfen Moodle sitenizde aşağıdaki gereksinimlerin karşılanıp karşılanmadığını kontrol edin:

1. Web servisleri etkin (Site yönetimi > Gelişmiş özellik)

2. *Moodle mobil web hizmeti* etkin (Site yönetimi > Eklentiler) > Web servisleri > Harici servisler)

3. REST protokolü etkinleştirildi (Site yönetimi > Eklentiler > Web servisleri > Protokolleri yönet)

4. Yeteneğe *webservice/rest:use*, *kimliği doğrulanmış kullanıcılar* için izin verilir (Site yönetimi > Kullanıcılar > İzinler> Rolleri Tanımla> Kimliği Doğrulanmış Kullanıcılar > Rolleri Yönet)';
$string['importantinformationheading'] = 'Önemli kurulum bilgileri';
$string['key'] = 'Aktivasyon anahtarı';
$string['key_help'] = 'Bu anahtar, Podcast Creator gibi gelişmiş özellikler için gereklidir.';
$string['modifieddate'] = 'Değiştirilmiş {$a}';
$string['modulename'] = 'Açıklama eklenebilir dosya';
$string['modulename_help'] = 'Açıklama eklenebilir dosya, öğrencilerin açık ve yapılandırılmış notlar almak için Amanote©\'ta açabilecekleri bir kurs kaynağıdır (PDF).

Öğrenciler şunları yapabilir:

* Kurs kaynağını yeni bir tarayıcı sekmesinde
açma
* Kurs kaynağını bilgisayarlarına indirme * Kurs kaynağını Amanote©\'ta açma ve not almaya başlama

Öğrenciler kurs kaynağını Amanote©\'ta açtıklarında, akıllı not almaya başlama yeteneği. Notları, belgenin farklı sayfalarına bağlanır. Ayrıca notlarını ek açıklamalar, çizimler, formüller, resimler, slaytlarda vurgulamalar vb. ile zenginleştirebilirler.

Öğrenciler notlarını kaydettiklerinde, kişisel alanlarında kaynak içinde kaydedilirler. Kaynağı bir sonraki açışlarında notlarını geri alacaklar.';
$string['modulenameplural'] = 'Açıklama eklenebilir dosyalar';
$string['nonotestodownload'] = 'Açıklamalı dosyayı indirin';
$string['nonotestodownload_help'] = 'Henüz bu doküman için kaydedilmiş notunuz yok.';
$string['openinamanote'] = 'Amanote\'ta aç';
$string['openinamanote_help'] = 'Belgeyi Amanote\'ta açmak, not almaya başlamanıza veya devam etmenize olanak tanır.';
$string['openpodcastcreator'] = 'Podcast oluşturucuyu aç';
$string['openpodcastcreator_help'] = 'Podcast oluşturucu, yeni bir podcast kaydetmenize veya mevcut bir podcast\'i düzenlemenize olanak tanır.';
$string['openstatistics'] = 'Açık istatistikler';
$string['openstatistics_help'] = 'Bu, öğrencilerin kullanım istatistiklerine ve bu kaynakla ilgili geri bildirimlerine erişmenizi sağlar.';
$string['pluginadministration'] = 'Amanote modül yönetimi';
$string['pluginname'] = 'Notlar';
$string['podcastcreatorbutton'] = 'Podcast Oluşturucu\'yu açın';
$string['preventdownload'] = 'PDF indirmeyi engelle';
$string['preventdownload_desc'] = 'Kullanıcıların kaynak dosyayı indirmesini engelle.';
$string['printintro'] = 'Kaynak açıklamasını görüntüle';
$string['printintroexplain'] = 'İçeriğin altında kaynak açıklaması gösterilsin mi?';
$string['privacy:metadata'] = 'Amanote ile entegrasyon için bazı kullanıcı verilerinin Amanote istemci uygulamasına (uzak sistem) gönderilmesi gerekir.';
$string['privacy:metadata:email'] = 'Kullanıcının e-postası, daha iyi bir kullanıcı deneyimi (not paylaşımı, bildirim vb.) sağlamak için uzak sisteme gönderilir.';
$string['privacy:metadata:fullname'] = 'Daha iyi bir kullanıcı deneyimi sağlamak için kullanıcının tam adı uzak sisteme gönderilir.';
$string['privacy:metadata:subsystem:corefiles'] = 'Dosyalar (PDF, AMA) Moodle\'ın dosya sistemi kullanılarak saklanır.';
$string['privacy:metadata:userid'] = 'Kimlik doğrulama sürecini hızlandırmak için kullanıcı kimliği Moodle\'dan Amanote\'a gönderilir.';
$string['saveinprivate'] = 'Notları özel dosyalara kaydedin';
$string['saveinprivate_help'] = 'Açıklamalı dosyayı kullanıcının özel dosyalarına kaydedin. Bu, kullanıcının açıklama eklenebilir dosyayı Amanote\'ta bir sonraki açılışında notlarını geri almasına olanak tanır.';
$string['servicenotavailable'] = 'Amanote\'ta aç';
$string['servicenotavailable_help'] = 'Hizmet mevcut değil. Lütfen site yöneticisiyle iletişime geçin.';
$string['showdate'] = 'Yükleme/değiştirme tarihini göster';
$string['showdate_desc'] = 'Kurs sayfasında yükleme/değiştirme tarihi gösterilsin mi?';
$string['showdate_help'] = 'Kaynağa bağlantıların yanında yükleme/değiştirme tarihini görüntüler.';
$string['showsize'] = 'Boyutu göster';
$string['showsize_desc'] = 'Kurs sayfasında dosya boyutu gösterilsin mi?';
$string['showsize_help'] = 'Kaynağa bağlantıların yanında dosya boyutunu \'3.1 MB\' gibi görüntüler.';
$string['statisticsbutton'] = 'Açık Öğrenme Analitiği';
$string['unexpectederror'] = 'Amanote\'ta aç';
$string['unexpectederror_help'] = 'Beklenmeyen bir hata oluştu, kaynak Amanote\'ta açılamıyor. Lütfen site yöneticisiyle iletişime geçin.';
$string['unsecureconnection'] = 'Uyarı! Bağlantınız güvenli değil.';
$string['uploadeddate'] = '{$a} yüklendi';
