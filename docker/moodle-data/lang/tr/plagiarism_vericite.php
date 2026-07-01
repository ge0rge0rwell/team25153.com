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
 * Strings for component 'plagiarism_vericite', language 'tr', version '5.0'.
 *
 * @package     plagiarism_vericite
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced_settings'] = 'Gelişmiş Ayarlar';
$string['disable_dynamic_inline'] = 'Dinamik satır içi gönderimleri devre dışı bırak';
$string['disable_dynamic_inline_help'] = 'Dinamik satır içi gönderimleri devre dışı bırakmak yalnızca bir kez gönderilir. Öğrencinin satır içi metne yaptığı değişiklikler VeriCite\'e tekrar gönderilmeyecektir.';
$string['enable_debugging'] = 'Hata ayıklamayı etkinleştir';
$string['enable_debugging_help'] = 'VeriCite modülü için hata ayıklamayı etkinleştirin. Hatalar, Moodle dataroot\'undaki bir vericite.log dosyasına yazdırılacaktır.';
$string['excludequotesvericite'] = 'Alıntıları Hariç Tut';
$string['excludequotesvericite_help'] = 'Bu ödev için gönderilen tüm raporların varsayılan değerini ayarlayın. Yanlış eşlemelerin sayısını azaltmak için, varsayılan olarak tekliflerin hariç tutulmasını öneriyoruz. Eğitmenler, sunum sonrasında her bir rapor için bu seçeneği değiştirme olanağını yine de koruyacaktır.';
$string['excludeselfplagvericite'] = 'Kendini intihalden Hariç Tutma';
$string['excludeselfplagvericite_help'] = 'Bu ödev için gönderilen tüm raporların varsayılan değerini ayarlayın. Sahte eşleşme sayısını azaltmak için, varsayılan olarak aynı derste kendi kendinize ait intihalin hariç tutulmasını öneriyoruz. Eğitmenler, sunum sonrasında her bir rapor için bu seçeneği değiştirme olanağını yine de koruyacaktır. Kişisel intihal, diğer derslerde kullanıcının raporlarına karşı daima kontrol edilir.';
$string['pluginname'] = 'VeriCite';
$string['savedconfigsuccess'] = 'İntihal Ayarları Kaydedildi';
$string['sendfiles'] = 'VeriCite cron işi dosyaları göndermek için';
$string['similarity'] = 'Benzerlik';
$string['storeinstindexvericite'] = 'Kurumsal dizinde saklanan';
$string['storeinstindexvericite_help'] = 'Bu ödev için gönderilen tüm raporların varsayılan değerini ayarlayın. Kurum dizininize raporlar saklamamayı seçerseniz, raporlar kurumunuzdaki diğer öğrenci raporlarına göre intihal olup olmadığını kontrol etmek için kullanılamaz. Bir rapor gönderildikten sonra, o rapor için bu seçeneği değiştiremezsiniz.';
$string['studentdisclosure'] = 'Öğrenci Bilgilendirme';
$string['studentdisclosuredefault'] = 'Metin ve dosya gönderimleri eğitmen incelemesi için bir intihal tespit hizmetine yüklenecektir.';
$string['studentreportvericite'] = 'Öğrencilerin raporları görüntülemesine izin ver';
$string['studentreportvericite_help'] = 'Öğrencilerin, bulunan maçlarla ilgili bağlam da dahil olmak üzere VeriCite raporunun tamamını görüntülemelerine izin vermek için etkinleştirin.';
$string['studentscorevericite'] = 'Öğrencilerin puanı görüntülemesine izin ver';
$string['studentscorevericite_help'] = 'Öğrencilerin VeriCite benzerlik puanlarını görmelerini sağlamak için etkinleştirin. Benzerlik puanları 0-100 arasında değişir ve diğer öğrenci belgelerine veya web içeriğine karşı eşleşen içeriğin miktarını temsil eder.';
$string['usevericite'] = 'VeriCite İntihal Hizmetini Etkinleştir';
$string['usevericite_help'] = 'Yeni ödevlerin varsayılan olarak VeriCite\'yi etkinleştirmesini isterseniz etkinleştirin.';
$string['vericite'] = 'VeriCite intihal eklentisi';
$string['vericiteaccountid'] = 'Hesap kimliği';
$string['vericiteaccountid_help'] = 'VeriCite ile yapılan bir deneme sözleşmesinin parçası olarak verilen kimlik';
$string['vericiteapi'] = 'API URL\'si';
$string['vericiteapi_help'] = 'VeriCite ile yapılan bir deneme sözleşmesinin parçası olarak verilen API URL\'si';
$string['vericitedefaultsettings'] = 'Yeni ödevler için varsayılan ayarlar:';
$string['vericitedefaultsettingsforums'] = 'Yeni forumların varsayılan ayarları:';
$string['vericiteexplain'] = 'VeriCite, gönderilen eseri giderek artan bir kaynak veritabanıyla karşılaştırarak intihal durumunu tanımlayan bulut tabanlı bir hizmettir. VeriCite ticari bir hizmettir ve geçerli bir abonelik gerektirir. <a href="https://www.vericite.com" target="_blank"> www.VeriCite.com </a> adresinde 30 günlük denemeler var. <br/> <br/> VeriCite sürekli olarak izleniyor Ve <a href="http://status.vericite.com/" target="_blank""> durum güncellemeleri mevcuttur </a>. <br/> Haber ve sistem güncellemeleri <a Href = "https://updates.vericite.com" target = "_ blank" /> updates.vericite.com </a>. <br/> <hr />';
$string['vericitesecretkey'] = 'Gizli anahtar';
$string['vericitesecretkey_help'] = 'VeriCite ile yapılan bir deneme anlaşmasının parçası olarak verilen gizlilik';
