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
 * Strings for component 'local_ldap', language 'tr', version '5.0'.
 *
 * @package     local_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attributesynctask'] = 'Topluluklar LDAP özelliklerinden senkronize edin';
$string['cohort_synching_ldap_attribute_attribute'] = 'Aranacak nitelik adı';
$string['cohort_synching_ldap_attribute_attribute_desc'] = 'Aramak için LDAP kullanıcısının özniteliğine ayarlayın (saygı örneği)';
$string['cohort_synching_ldap_attribute_autocreate_cohorts'] = 'Eksik toplulukları otomatik oluştur';
$string['cohort_synching_ldap_attribute_autocreate_cohorts_desc'] = 'Seçilirse eksik toplulukları otomatik olarak oluşturur';
$string['cohort_synching_ldap_attribute_idnumbers'] = 'Hedef toplulukların kimlik numaraları';
$string['cohort_synching_ldap_attribute_idnumbers_desc'] = 'Hedef topluluk kimlik numaralarının virgülle ayrılmış bir listesi; Eksikse, öznitelikteki tüm farklı değerler senkronize edilmiş bir topluluk oluşturacaktır';
$string['cohort_synching_ldap_attribute_objectclass'] = 'Kullanıcı sınıfı';
$string['cohort_synching_ldap_attribute_objectclass_desc'] = 'LDAP veya CAS auth eklentisinden devralınan varsayılan değeri geçersiz kılmak için kullanın (saygı örneği)';
$string['cohort_synching_ldap_groups_autocreate_cohorts'] = 'Eksik toplulukları otomatik oluştur';
$string['cohort_synching_ldap_groups_autocreate_cohorts_desc'] = 'Seçilirse eksik toplulukları otomatik olarak oluşturur';
$string['cohort_synchronized_with_attribute'] = '{$a} LDAP özniteliğiyle senkronize edilen topluluk';
$string['cohort_synchronized_with_group'] = 'LDAP grubu ile senkronize topluluk {$a}';
$string['group_attribute'] = 'Grup özniteliği';
$string['group_attribute_desc'] = 'LDAP gruplarının adlandırma özniteliği, genellikle cn';
$string['group_class'] = 'Grup sınıfı';
$string['group_class_desc'] = 'Gruplarınız, grupOfNames gibi başka bir sınıfta bulunuyorsa ayarlayın ...';
$string['groupsynctask'] = 'LDAP gruplarından toplulukları senkronize et';
$string['pluginname'] = 'LDAP senkronizasyon betikleri';
$string['process_nested_groups'] = 'İç içe geçmiş grupları işleme';
$string['process_nested_groups_desc'] = 'Seçilirse, gruplara dahil edilen LDAP grupları işlenir';
$string['real_user_attribute'] = 'Gerçek kullanıcı sınıfı';
$string['real_user_attribute_desc'] = 'User_attribute\'unuz LDAP (sAMAccountName) içinde karma bir durumda, ancak Moodle\'ın CAS / LDAP ayarlarında değilse kullanın';
$string['synccohortattribute'] = 'Moodle\'ın topluluklarını LDAP özniteliğiyle senkronize edin';
$string['synccohortgroup'] = 'Moodle\'ın topluluklarını LDAP gruplarıyla senkronize edin';
