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
 * Strings for component 'repository_onedrive', language 'tr', version '5.0'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Erişim';
$string['both'] = 'Dahili ve harici';
$string['cachedef_folder'] = 'Sistem hesabındaki klasörler için OneDrive dosya kimlikleri';
$string['configplugin'] = 'OneDrive eklentisini yapılandırın';
$string['confirmimportskydrive'] = 'Microsoft SkyDrive deposundaki tüm dosyaları Microsoft OneDrive deposuna aktarmak istediğinizden emin misiniz?  Microsoft OneDrive deposu, içe aktarılan dosyaların eskisi gibi çalışmaya devam etmesi için yapılandırılmalı ve çalışıyor olmalıdır.  Uyarı: Bu işlem geri alınamaz!';
$string['defaultreturntype'] = 'Varsayılan iade türü';
$string['external'] = 'Harici (yalnızca Moodle\'da saklanan bağlantılar)';
$string['fileoptions'] = 'Döndürülen dosyaların türleri ve varsayılanları burada yapılandırılabilir.  Harici olarak bağlanan tüm dosyaların, sahibi Moodle sistem hesabı olacak şekilde güncelleneceğine dikkat edin.';
$string['importskydrivefiles'] = 'Dosyaları Microsoft SkyDrive deposundan içe aktarın';
$string['internal'] = 'Dahili (Moodle\'da saklanan dosyalar)';
$string['issuer'] = 'OAuth 2 hizmeti';
$string['issuer_help'] = 'OneDrive API ile konuşacak şekilde yapılandırılmış OAuth 2 hizmetini seçin.  Hizmet henüz yoksa, oluşturmanız gerekir.';
$string['mysitenotfound'] = 'Daha önce OneDrive\'da hiç oturum açmadınız.  Moodle ile kullanılabilmesi için önce OneDrive\'da en az bir kez oturum açmalısınız.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="OAuth 2 hizmetleri yapılandırmasına bağlantı">OAuth 2 hizmetleri yapılandırması</a>';
$string['onedrive:view'] = 'OneDrive deposunu görüntüle';
$string['owner'] = 'Sahibi: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Microsoft OneDrive deposu, geçici erişim yetkilerini depolar ve kullanıcı verilerini Moodle\'dan uzak sisteme iletir.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Geçici erişim izni öğe kimliğine sahip Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'Microsoft OneDrive geçici erişim izni kimliği.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Microsoft OneDrive geçici erişim izni oluşturma tarihi/saati.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Microsoft OneDrive geçici erişim izni değiştirme tarihi/saati.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'Microsoft OneDrive geçici erişim yetkisini değiştiren kullanıcının kimliği.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Microsoft OneDrive deposu kullanıcı arama metni sorgusu.';
$string['removetempaccesstask'] = 'Kontrol edilen bağlantılardan geçici yazma erişimini kaldırın';
$string['searchfor'] = '{$a} için ara';
$string['servicenotenabled'] = 'Erişim yapılandırılmadı.';
$string['skydrivefilesexist'] = 'Microsoft SkyDrive deposu etkinleştirildi ancak kullanımdan kaldırıldı.  Lütfen mümkün olan en kısa sürede dosyaları SkyDrive\'dan OneDrive deposuna taşıdığınızdan emin olun.  Moodle 4.4\'te artık mümkün olmayacak.';
$string['skydrivefilesimported'] = 'Tüm dosyalar Microsoft SkyDrive deposundan içe aktarıldı.';
$string['skydrivefilesnotimported'] = 'Bazı dosyalar Microsoft SkyDrive deposundan içe aktarılamadı.';
$string['supportedreturntypes'] = 'Desteklenen dosyalar';
