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
 * Strings for component 'local_navbarplus', language 'tr', version '5.0'.
 *
 * @package     local_navbarplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['setting_inserticonswithlinks_desc'] = 'Bu ayarla, "mesajlar" ve "bildirimler" simgelerinin solundaki gezinme çubuğu başlığına bağlantı simgeleri ekleyebilirsiniz.<br/>
 Her satır bir simge görüntüsünden, bir bağlantı URL\'sinden, bir metinden, desteklenen dil(ler)den (isteğe bağlı) ve dikey çizgi karakterleriyle ayrılmış yeni pencere ayarından (isteğe bağlı) oluşur.  Her simgenin yeni bir satıra yazılması gerekir.<br/>
 Örneğin:<br/>
 fa-question|http://moodle.org|Moodle|en, de|true|d-none d-sm-flex<br/>
 fa-çıkış|/login/logout.php|Çıkış||yanlış<br/><br/>
 Parametreler hakkında daha fazla bilgi:
 <ul>
 <li><b>Resim:</b> Font Awesome simge tanımlayıcıları ekleyebilirsiniz (<a href="https://fontawesome.com/v4.7.0/icons/">fontawesome.com\'daki simge listesine bakın< /a>).  Harika Font, 3.3 sürümünden bu yana Moodle\'ın temel Clean and Boost temalarına dahil edilmiştir.</li>
 <li><b>Bağlantı:</b> Bağlantı hedefi, tam bir web URL\'si (örn. https://moodle.org) veya Moodle örneğiniz içindeki göreli bir yol (örn. /login/logout.php) tarafından tanımlanabilir. .  </li>
 <li><b>Başlık:</b> Bu metin, simgenin başlık ve alt niteliklerinde yazılacaktır.</li>
 <li><b>Desteklenen dil(ler) (isteğe bağlı):</b> Bu ayar, bağlantıyı yalnızca belirtilen dilin kullanıcılarına göstermek için kullanılabilir.  Birden fazla desteklenen dili virgülle ayırın.  Bağlantının tüm dillerde görüntülenmesi gerekiyorsa bu alanı boş bırakın.</li>
 <li><b>Yeni pencere (isteğe bağlı)</b>: Varsayılan olarak bağlantı aynı pencerede açılır ve bu ayarın değeri false olarak ayarlanır.  Bağlantıyı yeni bir pencerede açmak istiyorsanız değeri true olarak ayarlayın.</li>
 <li><b>Ek sınıflar (isteğe bağlı)</b>: Bu isteğe bağlı parametre ile bireysel sınıflar ekleyebilirsiniz.  Yaygın bir kullanım durumu, belirli ekran boyutları için bir simgeyi gizlemek amacıyla Bootstrap\'in yanıt veren sınıflarını eklemek olabilir.  <br/> Tüm Boost için <a href="https://getbootstrap.com/docs/4.0/utilities/display/">Bootstrap sürüm 4</a> için duyarlı Bootstrap görüntü sınıflarının tanımlarına bakabilirsiniz. tabanlı temalar.<br/>
 Boost tabanlı temalar için en önemli sınıflar, küçük cihazlarda bir simgeyi gizlemek için "d-none d-sm-flex" veya yalnızca küçük ekranlarda simgeyi görüntülemek için "d-sm-none" olabilir.
 <li><b>Kimlik (isteğe bağlı)</b>: Simge öğenize ayrı bir kimlik ekleyebilirsiniz.  Bu, bu belirli simgeye CSS ile kolayca hitap etmeyi mümkün kılar (örneğin, Moodle kullanıcı turları için).  Buraya girdiğiniz dizenin önüne her zaman "localnavbarplus-" eklenecektir.</li>
 </ul>
 Lütfen aklınızda bulundurun:
 <ul>
 <li> İsteğe bağlı parametreler için boru ayırma, diğer seçenekler arasında bulunuyorlarsa her zaman gereklidir.  Bu, boş olmalarına rağmen paramları dikey çizgi karakteriyle ayırmanız gerektiği anlamına gelir.  Ayrıca yukarıdaki Harika Yazı Tipi simgesi örneğine bakın.  </li>
 <li> Simge gezinme çubuğunda görünmüyorsa, lütfen tüm zorunlu parametrelerin doğru ayarlanıp ayarlanmadığını ve isteğe bağlı dil ayarının mevcut Moodle kullanıcı dilinize uyup uymadığını kontrol edin.  </li>
 </ul>';
