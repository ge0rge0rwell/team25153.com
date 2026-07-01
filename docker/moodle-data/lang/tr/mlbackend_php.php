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
 * Strings for component 'mlbackend_php', language 'tr', version '5.0'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Boyutu nedeniyle veri setinin sadece bir kısmı değerlendirilmiştir.  Sisteminizin bir {$a} veri kümesiyle başa çıkabileceğinden eminseniz $CFG->mlbackend_php_no_memory_limit öğesini ayarlayın.';
$string['errorcantloadmodel'] = '{$a} model dosyası mevcut değil.  Model, tahmin etmek için kullanılmadan önce eğitilmelidir.';
$string['errorlowscore'] = 'Değerlendirilen model tahmin doğruluğu çok yüksek değildir, bu nedenle bazı tahminler doğru olmayabilir.  Model puanı = {$a->puan}, minimum puan = {$a->minscore}';
$string['errornotenoughdata'] = 'Sağlanan analiz aralığını kullanarak bu modeli değerlendirmek için yeterli veri yok.';
$string['errornotenoughdatadev'] = 'Değerlendirme sonuçları çok değişkendi.  Modelin geçerli olduğundan emin olmak için daha fazla verinin toplanması önerilir.  Değerlendirme sonuçları standart sapma = {$a->sapma}, önerilen maksimum standart sapma = {$a->kabul edilen sapma}';
$string['pluginname'] = 'PHP makine öğrenimi arka ucu';
$string['privacy:metadata'] = 'PHP makine öğrenimi arka uç eklentisi herhangi bir kişisel veriyi saklamaz.';
