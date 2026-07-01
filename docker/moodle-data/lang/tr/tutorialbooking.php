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
 * Strings for component 'tutorialbooking', language 'tr', version '5.0'.
 *
 * @package     tutorialbooking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Öğrenci ekle';
$string['adminlockhelp'] = 'Tüm öğreticileri varsayılan olarak kilitli yapmak için seçin';
$string['adminlockprompt'] = 'Öğreticileri varsayılan olarak kilitlemek için seçin';
$string['adminnumbershelp'] = 'Öğreticiler için varsayılan katılımcı sayısını girin - Öğreticiler yapılandırılırken geçersiz kılınabilir';
$string['adminnumbersprompt'] = 'Varsayılan katılımcı sayısını seçin';
$string['adminservicehelp'] = 'DİKKAT: Bu özelliği açtığınızda e-postaların/bildirimlerin kayıtlara gönderileceği anlamına gelir - yalnızca ana yönetici kapalı olduğunda (id=2) bildirim alır';
$string['adminserviceprompt'] = 'Bu örneği canlı bir Moodle hizmeti olarak işaretleyin';
$string['after'] = 'Sonra {$a->session}';
$string['alreadysignedup'] = 'Zaten oturum oturumu açtınız.';
$string['attendcoltitle'] = 'Katılım';
$string['attendees'] = 'Katılımcılar';
$string['availabletoadd'] = 'Hazırdakileri ekle';
$string['backtosession'] = 'Gönderilen mesajlar, Kayıt Listesi\'ne geri dönmek için burayı tıklayın';
$string['cancel'] = 'İptal';
$string['completionsignedup'] = 'Öğrencilerin tamamlamak için bu etkinlikteki bir öğretmen grubuna kaydolmaları gerekir.';
$string['completionsignedupgroup'] = 'Kaydolma gerekir';
$string['confirm'] = 'Onay';
$string['confirmmessage'] = 'Kaldırmak istediğinizden emin misiniz {$a->name} from {$a->timeslot}?';
$string['confirmremovefromslot'] = 'Tutorial Bookingten kaydınızı kaldırmak istediğinizden emin misiniz?';
$string['confirmusersignupremoval'] = 'Kayıt kaldırma işlemini onayla';
$string['copysession'] = 'Kopyalama Zaman Aralığı';
$string['cronfixduplicates'] = 'Öğretici kayıtlarında yinelenmiş kullanıcı kayıtlarını düzelt';
$string['defaultdescription'] = 'Kayıt aralığı  {$a}';
$string['deletepageheader'] = 'Onayı sil';
$string['deletesession'] = 'sil';
$string['deletewarningtext'] = '"{$a}" ı silmek istediğinizden emin misiniz?';
$string['editsession'] = 'Düzenle';
$string['editsessionheading'] = 'Mevcut oturumu düzenle';
$string['editsessionhelp'] = 'Zaman aralığını değiştirmek için, lütfen aşağıdaki formu doldurun.';
$string['editspaceserror'] = 'HATA: Boşluk sayısını ({$a->spaces}), kayıt sayısından daha azına ({$a->signup}) azaltamazsınız.';
$string['emailgroupprompt'] = 'E posta grubu';
$string['emailpagetitle'] = 'E posta Grubu';
$string['eventsessionadded'] = 'Oturum eklendi';
$string['eventsessiondeleted'] = 'Oturum silindi';
$string['eventsessionmessage'] = 'Oturumdaki kullanıcılara ileti gönderildi';
$string['eventsessionupdated'] = 'Oturum güncellendi';
$string['eventsignupadded'] = 'Kullanıcı kaydı';
$string['eventsignupcapabilityremoved'] = 'Kullanıcı Kayıt olanağı kaybedildi';
$string['eventsignupremoved'] = 'Kullanıcı kaydı kaldırıldı';
$string['eventsignupteacheradded'] = 'Kullanıcı kaydı zorlandı';
$string['eventsignupteacherremoved'] = 'Kullanıcı Kayıt iptal edildi';
$string['export'] = 'Dışa aktar';
$string['exportcsvlistallprompt'] = 'Bu kurstaki tüm kayıt sayfalarındaki kayıtları dışa aktarın';
$string['exportlistprompt'] = 'Kayıt sayfasını dışa aktar';
$string['first'] = 'İlk';
$string['indexnoid'] = 'Tüm öğreticileri görüntülemek için bir ders kimliği şart koşulması gerekir';
$string['instancedesc'] = 'Kullanıcı Kayıt Listesi Notları';
$string['instancedeschelp'] = 'Öğrencilerin kayıt sırasında bilmeleri gereken, örneğin oturum süresi.';
$string['instanceheading'] = 'Genel ayarlar';
$string['instancenamehelp'] = 'Örneğin. Öğretici 1 veya Bilgisayar Laboratuvarları veya Gündelik Öğreticiler';
$string['instancetitle'] = 'Kullanıcı Kayıt Listesi Başlığı';
$string['last'] = 'Son';
$string['linktomanagetext'] = 'Kullanıcı kayıt listelerini yönet';
$string['liveservicemsg'] = 'Canlı hizmet tanımlanmış, tüm kullanıcı kayıtlarına bildirim gönderiliyor';
$string['locked'] = 'Öğretici kilidini aç';
$string['lockederror'] = 'Öğretici kilitli. Şu anda kaydolamazsınız.';
$string['lockedprompt'] = 'Kilitli';
$string['lockhelp'] = 'Kilitli öğrenciler, bu öğreticiden herhangi bir zaman diliminden kaydolamaz (veya ileti dizisi ekleyemez).
Şimdi kilitlendiğinde, kayıt listelerinin geçerli durumlarında etkin şekilde dondurulması sağlanacaktır.';
$string['lockwarning'] = 'Bu eğitim konrol araştırmacısı tarafından engellendi. Herhangi bir yuvaya kaydolamazsınız (veya kendinizden çıkamazsınız).';
$string['messageprompt'] = 'İleti';
$string['messageprovider:notify'] = 'Öğretici bildirimleri';
$string['messagessent'] = 'İletiler gönderildi';
$string['messagewillbesent'] = 'Kaldırılan öğrenciye mesaj';
$string['moduleadminname'] = 'Tutorial Booking';
$string['modulename'] = 'Tutorial Booking';
$string['modulename_help'] = 'Tutorial Booking etkinliği, öğrencilerin tek bir aralğıa kaydolmalarına olanak tanır.

Öğretmenler:

* Bir aralığa kaydolan diğer kişilerin adlarını öğrencilerden görünür veya gizli olacak şekilde ayarlayabilir.
* Aralıklara kaydolan öğrencilerin matbu kayıtları oluşturabilir.
* Kayıtlardan bir csv dosyası oluşturabilir.
* Aralıklardan el ile öğrenciler ekleyin ve öğrencileri kaldırabilir.
* Kilitler ve kullanıcı kayıt yeteneğini kilidini açabilir.
* Bir aralığa kaydolan herkese bir mesaj gönderebilir';
$string['modulenameplural'] = 'Tutorial Bookings';
$string['movedownsession'] = 'Aşağı taşı';
$string['moveslot'] = 'Taşımak için bu yuvayı sürükleyin.';
$string['moveupsession'] = 'Yukarı taşı';
$string['newsessionheading'] = 'Yeni zaman aralığı';
$string['newsessionhelp'] = 'Yukarıdaki kayıt sayfasında yeni bir oturum oluşturmak için lütfen aşağıdaki formu doldurun.';
$string['newtimslotprompt'] = 'Bu kayıt listesine bir Zaman Aralığı ekleyin';
$string['noslots'] = 'Bu Tutorial Bookingte zaman aralığı yoktur.';
$string['numbersline'] = 'Toplam {$a->total} yer var ({$a->alınmış}, {$a->left} ücretsiz)';
$string['numbersline_oversubscribed'] = 'Toplam {$a->total} yer var ({$a->alınmış} alındı, {$a->sol} tarafından abone oldu)';
$string['option_spaces_high'] = 'Boşlukların sayısı 65536\'dan az olmalı';
$string['option_spaces_low'] = 'Boşlukların sayısı 0\'dan büyük olmalı';
$string['oversubscribed'] = '{$a->timeslotname} üzerinde {$a->freeslots} yer var. {$a->numbertoadd} öğrenciyi eklemeye çalıştınız.';
$string['pagecrumb'] = 'Zaman aralıkları';
$string['pluginadministration'] = 'Tutorial Booking';
$string['pluginname'] = 'Tutorial Booking';
$string['positionfirst'] = 'Sayfanın üstü';
$string['positionlast'] = 'Sayfanın altı';
$string['positionprompt'] = 'Pozisyon';
$string['privacy'] = 'Gizlilik';
$string['privacy_showall'] = 'Öğrenciler tüm kayıtları görebilirler';
$string['privacy_showown'] = 'Öğrenciler yalnızca kendi kayıtlarını görebilirler';
$string['reasonrequired'] = 'Öğrenciyi kaldırmanızın sebebini belirtmelisiniz.';
$string['registerdateline'] = 'Lütfen Öğretici Yılı Girin';
$string['registerfooter'] = 'Devamını belirtmek için lütfen adınızın yanında oturum açın. İsminiz listede yoksa lütfen yapın
Önce sormadan onu eklemeyin.';
$string['registerprintdate'] = 'Baskı Kayıt (Kayıt ile)';
$string['registerprintname'] = 'Baskı Kaydı (Adıyla)';
$string['removalmessagesubject'] = 'Şuradan kaldırıldınız: {$a->timeslot}';
$string['removalreason'] = 'Kaldırma nedeni';
$string['remove'] = 'Kaldırmayı onayla';
$string['removefromslot'] = 'Beni bu aralıktan kaldır';
$string['removeuserfromslot'] = 'Bu aralıktan çıkar';
$string['reset'] = 'Geri al';
$string['save'] = 'Kaydet';
$string['saveasnew'] = 'Yeni oturum olarak kaydet';
$string['search:activity'] = 'Tutorial booking - Etkinliği bilgileri';
$string['search:session'] = 'Tutorial booking - zaman aralğı bilgileri';
$string['sendmessage'] = 'İleti gönder';
$string['sentby'] = 'Gönderici';
$string['senttime'] = 'Üzerinde gönderildi';
$string['sentto'] = 'Alıcılar';
$string['sessiondescriptionhelp'] = 'Tarih, Saat ve Konum ör. 14 Ağustos Perşembe günü saat 10: 00\'da Oda B35, Business School\'da veya 14 ve 21 Ağustos Perşembe günü saat 10:00, ve 4 Eylül\'de Oda B35, Business School\'da.';
$string['sessiondescriptionhelp2'] = 'Lütfen binanın adını girdiğinizden emin olun! <br/>
Modül Düzenleyicileri oda rezervasyonu yaptıklarından emin olmalı!';
$string['sessiondescriptionprompt'] = 'Başlık';
$string['sessionerror'] = '{$a}';
$string['sessionfull'] = 'Boşluk kalmaz, lütfen başka bir oturum seçin.';
$string['sessionpagetitle'] = 'Zaman aralığı yönetimi';
$string['sessionsummaryprompt'] = 'Ayrıntılar';
$string['showallmessages'] = 'Tüm iletileri göster';
$string['showalltutorialbookings'] = 'Tutorial booking dizini';
$string['showmymessages'] = 'Sadece benim iletilerimi göster';
$string['signupforslot'] = 'Bu aralık için beni üye yap';
$string['spacesprompt'] = 'Maksimum Öğrenci Sayısı';
$string['statsline'] = '({$a->places} aralıklar, {$a->signedup} alındı)';
$string['studentcoltitle'] = 'Katılımcı İsmi';
$string['subjecttitleprompt'] = 'Konu';
$string['testservicemsg'] = 'Canlı olmayan hizmet bildirimi - Yönetici\'ye gönderiliyor (id=2)';
$string['thereareno'] = 'Bu derste hiçbir öğretici yok';
$string['timeslottitle'] = 'ZamanAralığıBaşlığı';
$string['tutorialbooking'] = 'TutorialBooking';
$string['tutorialbooking:addinstance'] = 'Bir kullanıcının bu etkinliği bir derse eklemesine izin verir (Moodle 2.2\'de kullanılmaz)';
$string['tutorialbooking:adduser'] = 'Kullanıcının bir kayıt grubuna öğrenci eklemesine izin verir.';
$string['tutorialbooking:editsignuplist'] = 'Kullanıcıların kayıt listelerini ekleme, silme ve düzenleme izin verme.';
$string['tutorialbooking:export'] = 'Kullanıcının öğretici kayıtlarını dışa aktarmasına izin ver';
$string['tutorialbooking:exportallcoursetutorials'] = 'Bir dersteki tüm öğretici kayıtlar için listeyi dışa aktarmak için gereklidir.';
$string['tutorialbooking:message'] = 'Kullanıcının tutorialbooking etkinliği aracılığıyla öğrencilere mesaj göndermesine izin verir.';
$string['tutorialbooking:oversubscribe'] = 'Kullanıcının, öğrenci sayısını kullanıcı sınırını aşmasına rağmen öğrenciyi bir gruba eklemesine izin verir.';
$string['tutorialbooking:printregisters'] = 'Kullanıcıya etkinlik için kayıt yazdırabilmesine izin verir.';
$string['tutorialbooking:removeuser'] = 'Bir kayıt grubundaki öğrencilerin kaldırılmasına izin verir.';
$string['tutorialbooking:submit'] = 'Öğretici rezervasyon oturumuna kaydolmak için gerekli.';
$string['tutorialbooking:viewadminpage'] = 'Kullanıcının etkinliğin yönetici sayfasını görmesine izin verir.';
$string['tutorialbooking:viewallmessages'] = 'Diğer kullanıcıların tutorial booking  oturumunda gönderdiği iletileri görüntülemek için gereklidir.';
$string['unauthorised'] = 'Kaydolma izniniz yok.';
$string['unlocked'] = 'Öğreticiyi kilitle';
$string['useralreadysignedup'] = '{$a->id} kullanıcısı bir oturumda zaten oturum açtı.';
$string['viewmessages'] = 'Gönderilen iletileri görüntüle';
$string['you'] = 'Sen';
$string['yousignedup'] = 'Bu aralığa kaydolmuşsunuzdur';
