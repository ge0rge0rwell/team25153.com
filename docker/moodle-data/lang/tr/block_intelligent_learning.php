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
 * Strings for component 'block_intelligent_learning', language 'tr', version '5.0'.
 *
 * @package     block_intelligent_learning
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['categorycutoff_help'] = '<p>Bir veya daha fazla kesme tarihi tanımlayabilirsiniz; bundan sonra ara sınav notları ve final notları
    ILP entegrasyon blokunda veya not verme formunda artık görünmez. Bir ders kategorisiyle ilişkilendirilen son
    tarih, bir alt kategori için ayrı bir son tarih tanımlamadığınız sürece o kategorideki tüm dersler ve alt kategorileri için geçerlidir.</p>

<p>Örnek: Her dönem için bir kategori tanımlanmıştır , her departman için alt kategorilerle. Kurs siteleri
    SP2010/English, SP2010/Math ve SP2010/Tarih kategorileri altında bulunur. SP2010 kategorisi için tanımlanan bir bitiş tarihi, bu
    kategorilerdeki tüm dersler için geçerli olacaktır. Ancak SP2010/Matematik kategorisi için ayrı bir bitiş tarihi tanımlanabilir ve bu kategorideki tüm dersler için geçerli olabilir.</p>

<p>Yeni bir kesinti eklemek için: Kurs kategorisini seçin, bir tarih girin ve Kesinti ekle\'yi tıklayın.</p>
<p>Mevcut bir kesintiyi silmek için: Bu kesintinin yanındaki Sil onay kutusunu seçin ve Değişiklikleri Kaydet\'i tıklayın. formun alt kısmı.</p>';
$string['gotogrades'] = 'Değerhendirici Raporu';
$string['intelligent_learning:addinstance'] = 'Yeni bir ILP Entegrasyon bloğu ekleyin';
$string['intelligent_learning:edit'] = 'Düzenle';
