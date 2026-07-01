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
 * Strings for component 'tool_httpsreplace', language 'tr', version '5.0'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Tamamlandı';
$string['count'] = 'Tamamlanmış';
$string['disclaimer'] = 'Gömülü içerik ögelerinin sayısı';
$string['doclink'] = 'HTTPS dönüştürme aracı';
$string['doit'] = 'Dönüşüm gerçekleştir';
$string['domain'] = 'Sorunlu alan';
$string['domainexplain'] = 'Bir site HTTP\'den HTTPS\'ye taşındığında, tüm gömülü HTTP içeriği çalışmayı durduracaktır. Bu araç HTTP içeriğini otomatik olarak HTTPS\'ye dönüştürmenizi sağlar.

Dönüştürme işlemini gerçekleştirmeden önce içerik, dönüştürmeden sonra çalışmayabilecek URL\'leri bulmak için taranacaktır. Her birinin HTTPS\'ye sahip olup olmadığını kontrol etmek veya alternatif kaynaklar bulmak isteyebilirsiniz.';
$string['domainexplainhelp'] = 'Bu alan adları içeriğinizde bulunur, ancak HTTPS içeriğini desteklemiyor gibi görünür. HTTPS\'ye geçtikten sonra, bu sitelerden gelen içerik, güvenli modern tarayıcılara sahip kullanıcılar için artık Moodle\'da görüntülenmeyecektir. Bu sitelerin geçici veya kalıcı olarak kullanılamıyor olması ve her iki güvenlik ayarıyla da çalışmaması mümkündür. Yalnızca bu sonuçları inceledikten ve harici olarak barındırılan bu içeriğin gerekli olup olmadığını belirledikten sonra devam edin. Not: Bu içerik zaten HTTPS\'ye geçildiğinde artık çalışmayacaktır.';
$string['httpwarning'] = 'Bu örnek hala HTTP üzerinde çalışıyor. Bu aracı hala çalıştırabilirsiniz ve harici içerik HTTPS olarak değiştirilecektir, ancak dahili içerik HTTP\'de kalacaktır. Dahili içeriği dönüştürmek için HTTPS\'ye geçtikten sonra bu betiği tekrar çalıştırmanız gerekecektir.';
$string['notimplemented'] = 'Üzgünüz, bu özellik veritabanı sürücünüzde uygulanmamaktadır.';
$string['oktoprocede'] = 'Tarama, içeriğinizle ilgili herhangi bir sorun bulmaz. HTTP içeriğini HTTPS kullanmak üzere yükseltmeye devam edebilirsiniz.';
$string['pageheader'] = 'Harici olarak barındırılan içerik URL\'lerini HTTPS\'ye yükseltin';
$string['pluginname'] = 'HTTPS dönüştürme aracı';
$string['privacy:metadata'] = 'HTTPS dönüştürme aracı eklentisi herhangi bir kişisel veri depolamaz.';
$string['replacing'] = 'HTTP içeriğini HTTPS ile değiştirme...';
$string['searching'] = '{$a} aranıyor';
$string['takeabackupwarning'] = 'Uyarı: Bu araç çalıştırıldıktan sonra değişiklikler geri alınamaz. Küçük bir yanlış içerik değiştirme riski olduğundan, devam etmeden önce bir site yedeklemesi yapılması önerilir.';
$string['toolintro'] = 'Sitenizi HTTPS\'ye dönüştürmeyi planlıyorsanız, gömülü içeriğinizi HTTPS\'ye dönüştürmek için <a href="{$a}">HTTPS dönüştürme aracını</a> kullanabilirsiniz.';
