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
 * Strings for component 'tool_bloglevelupgrade', language 'tr', version '5.0'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p>Bu site kısa süre önce Moodle 2.0 sürümüne yükseltildi.</p>
<p>Blog (günlük) görünümü 2.0 sürümü tarafından basitleştirilmiştir, ancak siteniz halen eski görünüm tiplerinden birini kullanmaktadır.</p>
<p>Siteniz genelinde ders ya da grup tabanlı blog girişlerini korumak istiyorsanız aşağıdaki yükseltme komut dizisi özel bir blog tipi forum yaratacak ve blog girişlerini bu özel foruma kopyalayacak.</p>
<p>Bloglar daha sonra site düzeyinde kapalı hale getirilecek. Bu işlem sırasunda blog girişleri silinmeyecektir.</p>
<p><a href="{$a->fixurl}">Blog seviyesi yükseltme sayfasını</a>ziyaret ederek komut dizisini çalıştırabilirsiniz.</p>';
$string['bloglevelupgradeinfo'] = 'Blog (günlük) görünümü 2.0 sürümü tarafından basitleştirilmiştir, ancak siteniz halen eski görünüm tiplerinden birini kullanmaktadır. Siteniz genelinde ders ya da grup tabanlı blog girişlerini korumak istiyorsanız aşağıdaki yükseltme komut dizisi özel bir blog tipi forum yaratacak ve blog girişlerini bu özel foruma kopyalayacak. Bloglar daha sonra site düzeyinde kapalı hale getirilecek. Bu işlem sırasunda blog girişleri silinmeyecektir.';
$string['bloglevelupgradeprogress'] = 'İlerleme durumu: {$a->userscount} kullanıcı incelendi, {$a->blogcount} kayıt çevrildi.';
$string['pluginname'] = 'Blog görünürlük güncellemesi';
