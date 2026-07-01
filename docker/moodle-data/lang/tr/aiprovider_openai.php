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
 * Strings for component 'aiprovider_openai', language 'tr', version '5.0'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:endpoint'] = 'API uç noktası';
$string['action:generate_image:model'] = 'YZ modeli';
$string['action:generate_image:model_desc'] = 'Kullanıcı istemlerinden görüntü oluşturmak için kullanılan model.';
$string['action:generate_text:endpoint'] = 'API uç noktası';
$string['action:generate_text:model'] = 'YZ modeli';
$string['action:generate_text:model_desc'] = 'Metin yanıtını oluşturmak için kullanılan model.';
$string['action:generate_text:systeminstruction'] = 'Sistem Yönergesi';
$string['action:generate_text:systeminstruction_desc'] = 'Bu yönerge, kullanıcının istemiyle birlikte yapay zeka modeline gönderilir. Kesinlikle gerekmedikçe bu yönergenin düzenlenmesi önerilmez.';
$string['action:summarise_text:endpoint'] = 'API uç noktası';
$string['action:summarise_text:model'] = 'YZ modeli';
$string['action:summarise_text:model_desc'] = 'Sağlanan metni özetlemek için kullanılan model.';
$string['action:summarise_text:systeminstruction'] = 'Sistem Yönergeleri';
$string['action:summarise_text:systeminstruction_desc'] = 'Bu yönerge, kullanıcının istemiyle birlikte YZ modeline gönderilir. Kesinlikle gerekli olmadıkça bu yönergenin düzenlenmesi önerilmez.';
$string['apikey'] = 'OpenAI API anahtarı';
$string['apikey_desc'] = '<a href="https://platform.openai.com/account/api-keys" target="_blank">OpenAI API anahtarlarınızdan</a> bir anahtar alın.';
$string['enableglobalratelimit'] = 'Site genelinde istek sınırı belirle';
$string['enableglobalratelimit_desc'] = 'OpenAI API sağlayıcısının her saat tüm site genelinde alabileceği istek sayısını sınırlayın.';
$string['enableuserratelimit'] = 'Kullanıcı hızı sınırını ayarlama';
$string['enableuserratelimit_desc'] = 'Her kullanıcının saat başına OpenAI API sağlayıcısına yapabileceği istek sayısını sınırlayın.';
$string['globalratelimit'] = 'Site genelinde maksimum istek sayısı';
$string['globalratelimit_desc'] = 'Site genelinde saat başına izin verilen istek sayısı.';
$string['orgid'] = 'OpenAI kuruluş kimliği';
$string['orgid_desc'] = 'OpenAI kuruluş kimliğinizi <a href="https://platform.openai.com/account/org-settings" target="_blank">OpenAI hesabınızdan</a> alın.';
$string['pluginname'] = 'OpenAI API Sağlayıcısı';
$string['privacy:metadata'] = 'OpenAI API sağlayıcı eklentisi herhangi bir kişisel veri saklamaz.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Bu bilgiler, bir yanıtın oluşturulabilmesi için OpenAI API\'sine gönderilir. OpenAI hesap ayarlarınız, OpenAI\'nin bu verileri nasıl depoladığını ve sakladığını değiştirebilir. Bu eklenti tarafından hiçbir kullanıcı verisi açıkça OpenAI\'ye gönderilmez veya Moodle ÖYS\'de saklanmaz.';
$string['privacy:metadata:aiprovider_openai:model'] = 'Yanıtı oluşturmak için kullanılan model.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'Görüntü oluştururken yanıtta kullanılan görüntü sayısı.';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'Kullanıcı, yanıtı oluşturmak için kullanılan metin istemini girdi.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'Yanıtın biçimi. Görüntü oluştururken.';
$string['userratelimit'] = 'Kullanıcı başına maksimum istek sayısı';
$string['userratelimit_desc'] = 'Kullanıcı başına saat başına izin verilen istek sayısı.';
