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
 * Strings for component 'tool_qeupgradehelper', language 'tr', version '5.0'.
 *
 * @package     tool_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousureresetmessage'] = 'Kurs {$a->shortname}\'deki \'{$a->name}\' sınavının {$a->totalattempts} denemesi vardır ve bunlardan {$a->convertedattempts} eski sistemden yükseltilmiştir. Bunlardan {$a->resettableattempts} daha sonra yeniden dönüştürülmek üzere sıfırlanabilir. Bununla devam etmek istiyor musunuz?';
$string['croninstructions'] = 'Kısmi bir yükseltmenin ardından yükseltmeyi otomatik olarak tamamlamak için cron\'u etkinleştirebilirsiniz. Cron gün içinde belirlenen saatler arasında çalışacaktır (sunucunun yerel saatine göre). Cron her çalıştığında, Zaman sınırı miktarı kullanılana kadar bir dizi denemeyi işleyecek, ardından duracak ve bir sonraki cron çalışmasını bekleyecektir. Cron\'u kurmuş olsanız bile, 2.1\'e ana yükseltmenin tamamlandığını tespit etmediği sürece hiçbir şey yapmayacaktır.';
$string['cronsetup_desc'] = 'Cron\'u sınav denemesi verilerinin yükseltmesini otomatik olarak tamamlayacak şekilde yapılandırabilirsiniz.';
$string['cronstarthour'] = 'Başlangıç saati';
$string['cronstophour'] = 'Bitiş saati';
$string['invalidquizid'] = 'Geçersiz sınav kimliği.  Ya sınav yok ya da dönüştürülecek deneme yok';
$string['listpreupgradeintro'] = 'Bunlar, sitenizi yükselttiğinizde işlenmesi gereken sınav denemelerinin sayısıdır.  Bu çokça endişe etmeniz gereken binlerce konu arasında küçük bir şey.  Sizin bunun çok ötesinde ve yükseltmenin ne kadar süreceğini düşünmeniz gerekiyor.';
$string['noquizattempts'] = 'Sitenizde hiç sınav denemesi yok!';
$string['numberofattempts'] = 'Sınav deneme sayısı';
$string['quizid'] = 'Sınav kimliği';
$string['quizupgrade'] = 'Sınav yükseltme durumu';
$string['resettingquizattempts'] = 'Sınav denemelerini sıfırlama';
$string['upgradingquizattempts'] = '{$a->shortname} kursunda \'{$a->name}\' sınavının denemeleri yükseltiliyor';
$string['veryoldattemtps'] = 'Sitenizde, Moodle 1.4\'ten Moodle 1.5\'e yükseltme sırasında hiçbir zaman tamamen güncellenmemiş {$a} sınav denemesi var.  Bu denemeler, ana yükseltmeden önce ele alınacaktır.  Bunun için gereken ekstra süreyi göz önünde bulundurmanız gerekir.';
