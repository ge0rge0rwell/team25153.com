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
 * Strings for component 'block_skypeweb', language 'tr', version '5.0'.
 *
 * @package     block_skypeweb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['lbl_title'] = 'Başlık';
$string['privacy:metadata'] = 'Bu eklenti herhangi bir kullanıcı verisini saklamaz, ancak geçerli kullanıcı olarak uzak hizmetle iletişim kurar. Varlık ve sohbet bilgileri iletilir.';
$string['setup_desc'] = 'İşte bu eklentiyi kurmak için gerçekleştirmeniz gereken birkaç kurulum adımı.
     <br /><br />
 <b>Şu anda Moodle / Microsoft Office 365 entegrasyon eklentilerini kullanıyorsanız:</b>
 <ol>
     <li><a href="https://portal.azure.com" target="_blank">Azure Portal</a>\'da kayıtlı Azure Active Directory uygulamanıza gidin.</li>
     <li>"Tüm ayarlar"ı ve ardından "Yanıt URL\'leri"ni tıklayın.</li>
     <li>Uygulama için yanıt URL\'leri listesine <b>{$a->wwwroot}/blocks/skypeweb/skypeloginreturn.php</b> ekleyin.  Kaydet\'i tıklayın.</li>
     <li>Skype izinleri eklemek için son bölümdeki adımları izleyin.</li>
 </ol>
 <br />
 <b>Moodle / Microsoft Office 365 entegrasyon eklentilerini kullanmıyorsanız ve kurulu bir Azure Active Directory uygulamanız yoksa:</b>
 <ol>
     <li><a href="https://portal.azure.com" target="_blank">Azure Portal</a>\'a gidin, "Azure Active Directory"yi ve ardından "Uygulama kayıtları"nı tıklayın.</li>
     <li>"Yeni başvuru kaydı"nı tıklayın.</li>
     <li>Seçtiğiniz bir adı girin ve "Oturum açma URL\'si" olarak <b>{$a->wwwroot}/blocks/skypeweb/skypeloginreturn.php</b> kullanın.</li>
     <li>"Oluştur"u tıklayın.</li>
     <li>Kayıtlı uygulamalar listesinde uygulamanızın adını tıklayın.</li>
     <li>"Uygulama Kimliği" değerini yukarıdaki "Müşteri Kimliği" ayarına kopyalayın ve bu sayfada "Değişiklikleri kaydet"i tıklayın.</li>
     <li>Sonraki bölümdeki adımları izleyin.</li>
 </ol>
 <br />
 <b>Azure Active Directory uygulamanıza Skype izinleri ekleyin:</b>
 <ol>
     <li>Kayıtlı Azure Active Directory uygulamanıza gidin.</li>
     <li>"Manifest"e tıklayın ve "oauth2AllowImplicitFlow"u false yerine true olarak değiştirin.  Kaydet\'i tıklayın.</li>
     <li>"Tüm ayarlar"ı ve ardından "Gerekli izinler"i tıklayın.</li>
     <li>"Ekle"yi ve ardından "Bir API seçin"i tıklayın.</li>
     <li>Listede "Skype Kurumsal Çevrimiçi" öğesini bulun, tıklayın ve ekranın alt kısmındaki "Seç"i tıklayın.</li>
     <li>"Yetki Verilmiş İzinler" bölümündeki tüm izinleri etkinleştirin ve ekranın alt kısmındaki "Seç"i tıklayın.</li>
     <li>"Bitti" düğmesini tıklayın.</li>
 </ol>
 Azure Active Directory uygulamanız ayarlandığında ve yukarıdaki "Client ID" ayarı için bir değer girdiğinizde, Skype\'ı ekleyebilirsiniz.
 Tıpkı normal bir blok gibi herhangi bir Moodle sayfasına web bloğu.  Oturum açmadıysanız blokta bir oturum aç düğmesi gösterilir.  Eğer oturum açtıysanız, Skype bilgilerinizin görüntülendiğini göreceksiniz.';
