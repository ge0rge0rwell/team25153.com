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
 * Strings for component 'block_lord', language 'tr', version '5.0'.
 *
 * @package     block_lord
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['docs:whatis:desc1'] = 'Learning Object Relation Relation Discovery (LORD) eklentisi, öğrenme nesneleri arasındaki ilişkileri keşfetmek için tasarlanmıştır.  Bu, önce kurstaki her öğrenme modülünün metin içeriğinin çıkarılmasıyla yapılır.  Metin içeriği daha sonra cümlelere bölünür, böylece her cümle bir diğer cümle ile karşılaştırılabilir.  Karşılaştırma, bu amaçla oluşturulmuş bir Web hizmeti (https://ws-nlp.vipresearch.ca/) kullanılarak yapılır.  Her bir öğrenme nesnesi çifti arasına, daha sonra grafik düğümlerinin öğrenme modüllerini temsil ettiği bir ağ grafiğindeki düğümler arasında bir mesafe ölçüsü olarak kullanılan bir nihai benzerlik değeri atanır.  Bu süreç, benzer düğümlerin birlikte gruplandığı bir grafik konfigürasyonu oluşturmak için tasarlanmıştır.  Oluşturulan grafik daha sonra, öğrencinin ders materyaliyle etkileşimini analiz etmek için aynı öğrenme nesnesi ağ grafiğini kullanan Behavior Analytics eklentisi ile kullanılabilir.';
$string['name'] = 'Adı';
$string['percent'] = 'Tamamlandı';
$string['privacy:metadata:block_lord_comparisons'] = 'Öğrenme nesnesi karşılaştırma verilerini depolamak için tablo.';
$string['privacy:metadata:block_lord_coords'] = 'Modül koordinat verilerini depolamak için tablo.';
$string['privacy:metadata:block_lord_dictionary'] = 'Kelimeleri ve Wordnet durumlarını depolamak için tablo.';
$string['privacy:metadata:block_lord_links'] = 'Düğümler arasındaki bağlantı ağırlıklarını saklamak için tablo.';
$string['privacy:metadata:block_lord_max_words'] = 'Eklentiyle ilgili seçenekleri depolamak için tablo.';
$string['privacy:metadata:block_lord_modules'] = 'Kurs modülü verilerini depolamak için tablo.';
$string['privacy:metadata:block_lord_paragraph'] = 'Modül paragraf verilerini depolamak için tablo.';
$string['privacy:metadata:block_lord_scales'] = 'Grafik ölçekleme verilerini depolamak için tablo.';
