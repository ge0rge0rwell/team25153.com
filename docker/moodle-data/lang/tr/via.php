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
 * Strings for component 'via', language 'tr', version '5.0'.
 *
 * @package     via
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityversion'] = 'Sürüm';
$string['cancel'] = 'İptal';
$string['delete'] = 'Sil';
$string['df_header_title'] = 'Başlık';
$string['emailaccesslinkcolor_desc'] = 'Bu, Via hatırlatıcı ve davet e-postalarınızdaki erişim bağlantısına uygulanacaktır. Bu daha önemli olduğu için diğer bağlantılardan farklı bir renk kullanmanızı öneririz.';
$string['error:COMPANYNAME_TOO_LONG'] = 'COMPANYNAME_TOO_LONG - ŞirketAdı değeri maksimum 50 karakterden uzun.';
$string['error:INVALID_MONDAY_VALUE'] = 'INVALID_MONDAY_VALUE - Özelliğin değeri;  Pazartesi geçersiz.';
$string['error:INVALID_SUNDAY_VALUE'] = 'INVALID_SUNDAY_VALUE - Özelliğin değeri;  Pazar geçersiz.';
$string['error:INVALID_THURSDAY_VALUE'] = 'INVALID_THURSDAY_VALUE - Özelliğin değeri;  Perşembe geçersiz.';
$string['error:INVALID_TUESDAY_VALUE'] = 'Salı';
$string['error:INVALID_WEDNESDAY_VALUE'] = 'İNVALİD_WEDNESDAY_VALUE-Özelliğin değeri; Çarşamba geçersiz.';
$string['export'] = 'Görüntüle/Dışa aktar';
$string['inviteemail'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

Merhaba {$a->username},
Moodle, sizi {$a->datebegin} tarihinde {$a->hourbegin} ile {$a->hourend} arasında gerçekleşecek olan " {$a->title} " etkinliğine katılmaya davet ediyor.

{$a->invitemsg}
---------------------------------------------------------------------

Etki̇nli̇k hazirliği

Kurulum sihirbazı için buraya tıklayın: {$a->config}
Teknik destek almak için buraya tıklayın: {$a->assist}

---------------------------------------------------------------------
Web erişimi

Etkinliği ulaşmak bu bağlantıyı takip edin: {$a->aactivitylink}

---------------------------------------------------------------------

Dikkat : Bu etkinlik kayıt altına alınabilir. Kayıtta yer almak istemiyorsanız lütfen bu etkinliği katılmayın. Bu e-posta kişisel bağlantı bilgileri içermektedir. Bu bilgiler paylaşılmamalıdır.';
$string['inviteemail_viahtml5'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

Merhaba {$a->username},

Moodle sizi &quot; {$a->datebegin} tarihinde {$a->hourbegin} ile {$a->hourend} arasında gerçekleşecek&quot; {$a->title} etkinliğine katılmaya davet ediyor

{$a->invitemsg}

---------------------------------------------------------------------
Web erişimi

Etkinliği gitmek için bu bağlantıyı takip edin: {$a-> {$a->activitylink}
---------------------------------------------------------------------';
$string['inviteemailhtml'] = '<p>Merhaba {$a->username},</p>
<p>Moodle, sizi <b>{$a->datebegin}</b> tarihinde <b>{$a->hourbegin} arasında gerçekleşecek olan « {$a->title} » etkinliğine katılmaya davet ediyor </b> ve <b>{$a->hourend}</b>.</p><p>{$a->invitemsg}</p>';
$string['modulename_help'] = 'Via modülü, sanal bir sınıfta eşzamanlı toplantılar oluşturmanıza, ses ve video kullanarak canlı paylaşım yapmanıza olanak tanır: gerçek zamanlı uzaktan sınıflar, toplantılar, çalışma ekibi toplantıları, özel dersler, seminerler vb.

Bu araç, alt çalışma gruplarını, ek açıklamaları, ekran paylaşımını yönetmenize, belgeleri içe aktarmanıza veya sunmanıza ve ses ve/veya video ile paylaşmanıza olanak tanır.

\'Katılımcı kayıtları\' seçenekleri, katılımcıları manuel olarak kaydetmenize veya \'Otomatik kayıt\' seçeneğini seçerek Moodle haklarına göre otomatik olarak senkronize etmenize olanak tanır.

\'Oturum parametreleri\', istediğiniz kayıt modunu ayarlamanıza ve bunların öğrencileriniz için kullanılabilirliğini seçmenize olanak tanır.';
$string['multimediaquality'] = 'Çoklu ortam profilleri';
$string['name'] = 'İsim';
$string['recallonehour'] = 'Bir saat önce';
$string['recalloneweek'] = 'Bir hafta önce';
$string['recalltwohours'] = 'İki saat önce';
$string['reminderemail'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

 Merhaba {$a->username},

Moodle, sizi {$a->datebegin} tarihinde {$a->hourbegin} ile {$a->hourend} arasında gerçekleşecek olan " {$a->title} " etkinliğine katılmaya davet ediyor

 -------------------------------------------------- -------------------
 Etkinlik hazırlığı

 Kurulum sihirbazı için buraya tıklayın: {$a->config}
 Teknik destek almak için buraya tıklayın: {$a->assist}

 -------------------------------------------------- -------------------
 Web erişimi

 Etkinliğe gitmek için şu bağlantıyı izleyin: {$a->activitylink}

 -------------------------------------------------- -------------------

Dikkat : Bu etkinlik kayıt altına alınabilir. Kayıtta yer almak istemiyorsanız lütfen bu etkinliği katılmayın. Bu e-posta kişisel bağlantı bilgileri içermektedir. Bu bilgiler paylaşılmamalıdır.';
$string['reminderemail_viahtml5'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

Hello {$a->username},
Moodle sizi {$a->datebegin} sitesinde {$a->hourbegin} ile {$a->hourend} arasında gerçekleşecek olan " {$a->title} " etkinliğine katılmaya davet ediyor

---------------------------------------------------------------------
Web erişimi

Etkinliğe gitmek için şu bağlantıyı izleyin : {$a->activitylink}

---------------------------------------------------------------------';
$string['resetdisablereviews'] = 'Tüm etkinlikler için incelemeleri devre dışı bırak';
$string['resources_edit'] = 'Kaynağı düzenle';
$string['reviewacitvity_help'] = 'Kayıtların kullanılabilir olmasını istiyorsanız, evet\'i seçin.  Aksi takdirde, listedeki her birini işaretlemeniz dışında hiçbir katılımcı kayıtları göremez.  Lütfen bu seçeneğin etkinlik sona erdiğinde bile herhangi bir zamanda düzenlenebileceğini unutmayın.';
$string['save'] = 'Kaydet';
$string['sendrecall_help'] = 'Otomatik bir hatırlatıcı ayarlamanızı sağlar.  Etkinlikten 1 veya 2 saat, 1 veya 2 gün, hatta bir hafta önce tüm katılımcılara otomatik olarak hatırlatma göndermeyi seçebilirsiniz.  Daha sonra e-posta ile bir hatırlatma alacaklar.';
