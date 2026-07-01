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
 * Strings for component 'block_annotate', language 'tr', version '5.0'.
 *
 * @package     block_annotate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_default_msg'] = 'Bireysel (Varsayılan). Bu, yapılandırmada değiştirilebilir.';
$string['access_set_to_msg'] = 'Annotate\'de belge erişimi şu şekilde ayarlanır:';
$string['access_shareuser_msg'] = 'Belge sahibi:';
$string['access_shareuser_msg_dft'] = 'Henüz ayarlanmadı. Yapılandırmayı kullanın.';
$string['annotate:accessannotate'] = 'Annotate Erişimi';
$string['annotate:addinstance'] = 'Annotate bloğunu ekle';
$string['annotate:myaddinstance'] = 'Annotate bloğunu Giriş sayfama ekle';
$string['annotate_api_key_lbl'] = 'Kullanıcı için API anahtarı';
$string['annotate_api_key_msg'] = 'API anahtarı, API erişimi olan bir kullanıcı olarak Annotate\'e giriş yaptığınızda ayarlar sayfasının alt kısmında bulunabilir.';
$string['annotate_api_user_lbl'] = 'API kullanıcı E postası';
$string['annotate_api_user_msg'] = 'Annotate kullanıcısının API erişimi olan e-postası. Bu genellikle lisansın verildiği kullanıcıdır.';
$string['annotate_header_config'] = 'Annotate sunucu ayarları';
$string['annotate_header_description'] = 'Burada, Annotate sunucunuza bağlanmak için gerekli parametreleri girebilirsiniz.';
$string['annotate_moodleId_lbl'] = 'Moodle Kurulum Tanımlayıcısı';
$string['annotate_moodleId_msg'] = 'Çalışma alanlarını Moodle kurulum yerini temel alarak ayırmak için.';
$string['annotate_server_uri_lbl'] = 'Annotate Sunucu URI\' i';
$string['annotate_server_uri_msg'] = 'Bunu Annotate sunucusuna ayarlayın. Sınama için, Moodle ile aynı sunucuda varsayılan bir Ek Açıklama yüklemeniz varsa "http: //localhost/annotate" deneyin. Her iki sunucu da aynı yerel alt ağda bulunuyorsa, her biri kendi adresini bildirecek şekilde yapılandırıldıkça, yerel ip adreslerini de burada kullanabilirsiniz.';
$string['annotate_wsuser_token_lbl'] = 'Web Hizmetleri kullanıcı simgesi';
$string['annotate_wsuser_token_msg'] = 'Annotete\'in  Moodle sunucusundan dosyaları almasına izin vermek için belirli bir Moodle Web Hizmeti kullanıcısı oluşturulmalıdır. Bu konuyla ilgili talimatları https://moodle.org/plugins/block_annotate adresinde bulabilirsiniz.';
$string['config_access_label'] = 'Erişim';
$string['config_access_label_help'] = '"Bireysel" erişimle her kullanıcı, eriştiği her kaynaktan bağımsız bir örnek alır ve belgeyi annotate açıkça paylaşmadığı sürece notlar gizli kalır. "Grup" erişimi ile, aşağıda belirtilen kullanıcıya ait olan grubun bir kopyası bulunur. Öğrenciler yine de özel notlar oluşturabilir, ancak Paylaşılan notları diğer kullanıcılara görünür hale getirebilirler.';
$string['config_group_access'] = 'Grup';
$string['config_header_label'] = 'Doküman paylaşma seçenekleri';
$string['config_individual_access'] = 'Bireysel';
$string['config_shareuser_label'] = 'Belge sahibi (yalnızca grup)';
$string['config_shareuser_label_help'] = '"Grup" erişimi için, belgeyi Annotate olarak sahibi olacak kullanıcının e-postası sağlanmalıdır. Bu çoğunlukla ders eğitmeni tarafından belirlenir.';
$string['enter_email_msg'] = 'E posta girin';
$string['invalid_email_msg'] = 'Geçersiz E posta';
$string['pluginname'] = 'Ek açıklama';
$string['transfer_error'] = 'Hata';
$string['transfer_error_msg'] = 'Belgeyi görüntülemek için Annotate Ekranı\'na aktarılırken bir sorun oluştu. Lütfen sunucu yöneticinize başvurun.';
