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
 * Strings for component 'tool_cmdlinetools', language 'tr', version '5.0'.
 *
 * @package     tool_cmdlinetools
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['hideshow_plugin_cli_help'] = 'gizle eklenti göster
 kullanım:
		 \\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php hideshow_plugin plugintype pluginname hideshow

 where :
plugintype is
		mod,
		block,
		qtype,
		qbehaviour,
		enrol,
		filter,
		editor,
		auth,
		license,
		repository,
		courseformat,
		assignfeedback or assignsubmission
 pluginname eklentinin adıdır (eklenti dizininin adı)
 hideshow bir int değeridir 0 false veya off (filtre eklentisi), 1 true veya on (filtre eklentisi), -9999 devre dışı (filtre eklentisi)

 Seçenekler:
 -h, --help bu yardımı yazdır';
$string['role_assign_cli_contextxnotexists'] = 'Bağlam {$a} mevcut değil';
$string['schedule_task_cli_help'] = 'Görev takvimi, belirli bir moodle zamanlanmış görevi için parametreleri ayarlamayı etkinleştirir
 Kullanım:
                 \\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php
schedule_task taskname [options]
 görev adı şu şekilde yazılır: \\plugin\\task\\taskname örn. \\auth_cas\\task\\sync_task
 Seçenekler:
-h, --help bu yardımı yazdır
 -M, --minute                         * Her dakika (varsayılan değer)
    						 */5 Her 5 dakikada bir
    						 2-10 Saati 2 ile 10 geçe arasında her dakika (dahil)
    						 Saati 2, 6, 9 2 6 ve 9 dakika geçiyor

 -H, --hour                               * Her saat (varsayılan değer)
    						 */2 Her 2 saatte bir
    						 2-10 Saat 02:00\'den 10:00\'a kadar her saat (dahil)
    						 2, 6, 9 02:00, 06:00 ve 09:00

 -d, --day                                 * Her gün (varsayılan değer)
    						 */2 2 günde bir
    						 1 Her ayın ilki
    						 1, 15 Her ayın biri ve on beşi

 -m, --mont                             * Her ay (varsayılan değer)
    						 */2 Her iki ayda bir
    						 1 Her Ocak
    						 1, 5 Her Ocak ve Mayıs

 -w, --dayofweek                    * Her gün (varsayılan değer)
    						 0 Her Pazar
    						 6 Her Cumartesi
    						 1, 5 Her Pazartesi ve Cuma

 -x, --disabled                         0 devre dışı değil (varsayılan değer), 1 devre dışı

 -r, --restoretodefaults          0 varsayılana geri yüklenmiyor (varsayılan değer), 1 varsayılana geri yükleniyor diğer seçenekler dikkate alınmayacaktır';
