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
 * Strings for component 'subcourse', language 'tr', version '5.0'.
 *
 * @package     subcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentgrade'] = 'Sizin geçerli puanınız: {$a}';
$string['errfetch'] = 'Puanlar alınamıyor: hata kodu {$a}';
$string['errlocalremotescale'] = 'Sınıflar getirilemiyor: Uzak son sınıf öğesi yerel ölçek kullanıyor.';
$string['eventgradesfetched'] = 'Alınan puanlar';
$string['fetchnow'] = 'Şimdi al';
$string['gotocoursename'] = '<a href="{$a->href} "> {$a->name} </a> kursuna gidin';
$string['hiddencourse'] = '*gizli*';
$string['instantredirect'] = 'Referans kursuna yönlendirme';
$string['instantredirect_help'] = 'Etkinleştirilirse, kullanıcılar ders modülü sayfasını görüntülemeye çalışırken yönlendirilen ders yönlendirilir. Kullanıcıları, notları el ile almaya izniyle etkilemez.';
$string['lastfetchnever'] = 'Notlar henüz getirilmedi';
$string['lastfetchtime'] = 'Son getirim: {$a}';
$string['modulename'] = 'Altders';
$string['modulename_help'] = 'Modül çok basit ama kullanışlı bir işlevsellik sağlar. Bir kursa eklendiğinde dereceli bir etkinlik gibi davranır. Her bir öğrencinin notu başka bir dersteki bir final notundan alınır. Metacourses\'la birlikte, ders tasarımcıları kursları ayrı birimler halinde düzenlemeye izin verir.';
$string['modulenameplural'] = 'Altkurslar';
$string['nocoursesavailable'] = 'Ders notu getirebileceğiniz ders yok';
$string['nosubcourses'] = 'Bu derste altders alınmamaktadır.';
$string['pluginadministration'] = 'Altders yönetimi';
$string['pluginname'] = 'Altders';
$string['refcourse'] = 'Referans ders';
$string['refcourse_help'] = 'Referans verilen ders, faaliyet notunun alındığı derstir. Öğrenciler referans verilen derse kayıtlı olmalıdır.

Burada listelenmesi için kursta öğretmen olmanız gerekir. Diğer derslerden not alabilmeniz için site yöneticinizden bu etkinliği ayarlamasını istemeniz gerekebilir.';
$string['refcoursecurrent'] = 'Mevcut referansı koru';
$string['refcourselabel'] = 'Şuradan derecelerini getir';
$string['refcoursenull'] = 'Hiçbir başvurulan ders düzenlenmedi';
$string['subcourse:addinstance'] = 'Yeni altders ekle';
$string['subcourse:begraded'] = 'Başvurulan dersden not al';
$string['subcourse:fetchgrades'] = 'Referans kurstan puanları manuel olarak al';
$string['subcoursename'] = 'Altders adı';
$string['taskfetchgrades'] = 'Altkurs puanlarını getir';
