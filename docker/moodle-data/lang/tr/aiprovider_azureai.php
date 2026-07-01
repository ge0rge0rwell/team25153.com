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
 * Strings for component 'aiprovider_azureai', language 'tr', version '5.0'.
 *
 * @package     aiprovider_azureai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:apiversion'] = 'API versiyonu';
$string['action:generate_image:apiversion'] = 'API versiyonu';
$string['action:generate_text:apiversion'] = 'API versiyonu';
$string['action:summarise_text:apiversion'] = 'API versiyonu';
$string['action_apiversion'] = 'API sürümü';
$string['action_deployment'] = 'Dağıtım Kimliği';
$string['action_deployment_desc'] = 'Sağlayıcının bu eylem için kullandığı API uç noktasıyla ilgili dağıtım kimliği.';
$string['action_systeminstruction'] = 'Sistem yönergesi';
$string['action_systeminstruction_desc'] = 'Bu yönerge, kullanıcının istemiyle birlikte YZ modeline gönderilir. Gerekmedikçe bu yönergenin düzenlenmesi kesinlikle önerilmez.';
$string['apikey'] = 'Azure YZ API anahtarı';
$string['apikey_desc'] = 'Azure YZ API anahtarınızı girin.';
$string['deployment'] = 'Azure YZ API dağıtım adı';
$string['deployment_desc'] = 'Azure YZ API\'niz için dağıtım adını girin.';
$string['enableglobalratelimit'] = 'Site genelinde isetk sınırını belirleme';
$string['enableglobalratelimit_desc'] = 'Azure AI API sağlayıcısının her saat tüm site genelinde alabileceği istek sayısını sınırlayın.';
$string['enableuserratelimit'] = 'Kullanıcı istek sınırını ayarla';
$string['enableuserratelimit_desc'] = 'Her kullanıcının her saat Azure YZ API sağlayıcısına yapabileceği istek sayısını sınırlayın.';
$string['endpoint'] = 'Azure YZ API uç noktası';
$string['endpoint_desc'] = 'Azure YZ API\'niz için uç nokta URL\'sini aşağıdaki biçimde girin: https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['globalratelimit'] = 'Site genelinde maksimum istek sayısı';
$string['globalratelimit_desc'] = 'Saat başına izin verilen site genelindeki istek sayısı.';
$string['pluginname'] = 'Azure Yapay Zeka API sağlayıcısı';
$string['privacy:metadata'] = 'Azure YZ API sağlayıcı eklentisi herhangi bir kişisel veri depolamaz.';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = 'Bu bilgiler, bir yanıt oluşturulabilmesi için Azure API\'ye gönderilir. Azure AI hesap ayarlarınız, Microsoft\'un bu verileri nasıl depoladığını ve sakladığını değiştirebilir. Bu eklenti tarafından Microsoft\'a açıkça hiçbir kullanıcı verisi gönderilmez veya Moodle LMS\'de saklanmaz.';
$string['privacy:metadata:aiprovider_azureai:model'] = 'Yanıtı oluşturmak için kullanılan model.';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = 'Görüntü oluştururken yanıtta kullanılan görüntü sayısı.';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = 'Yanıtı oluşturmak için kullanılan kullanıcı tarafından girilen metin istemi.';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = 'Görüntü oluştururken yanıtın biçimi.';
$string['userratelimit'] = 'Kullanıcı başına maksimum istek sayısı';
$string['userratelimit_desc'] = 'Kullanıcı başına saat başına izin verilen istek sayısı.';
