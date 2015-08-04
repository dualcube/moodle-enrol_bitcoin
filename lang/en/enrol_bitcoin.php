<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_bitcoin', language 'en'.
 *
 * @package    enrol_bitcoin
 * @copyright  2015 Dualcube, Moumita Ray, Parthajeet Chakraborty
 * @license    MIT
 */

$string['pluginname'] = 'Bitcoin';
$string['pluginname_desc'] = 'The Bitcoin module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['apikey'] = 'Bitcoin API key';
$string['apisecret'] = 'Bitcoin API secret key';
$string['clientid'] = 'Bitcoin Client ID';
$string['clientsecret'] = 'Bitcoin Client secret';
$string['redirecturi'] = 'Bitcoin redirect/callback URL';
$string['checkproductionmode'] = 'Check for production mode';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['assignrole'] = 'Assign role';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Bitcoin enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['bitcoin:config'] = 'Configure Bitcoin enrol instances';
$string['bitcoin:manage'] = 'Manage enrolled users';
$string['bitcoin:unenrol'] = 'Unenrol users from course';
$string['bitcoin:unenrolself'] = 'Unenrol self from the course';
$string['status'] = 'Allow Bitcoin enrolments';
$string['status_desc'] = 'Allow users to use Bitcoin to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';

// Currency List.

$string['AED'] = 'United Arab Emirates Dirham';
$string['AFN'] = 'Afghanistan Afghani';
$string['ALL'] = 'Albanian Lek';
$string['AMD'] = 'Armenian Dram';
$string['ANG'] = 'Netherlands Antillean Guilder';
$string['AOA'] = 'Angolan Kwanza';
$string['ARS'] = 'Argentine Peso';
$string['AUD'] = 'Australian Dollar';
$string['AWG'] = 'Aruban Florin';
$string['AZN'] = 'Azerbaijanian Manat';
$string['BAM'] = 'Bosnia and Herzegovina Convertible Mark';
$string['BBD'] = 'Barbados Dollar';
$string['BDT'] = 'Bangladeshi Taka';
$string['BGN'] = 'Bulgarian Lev';
$string['BHD'] = 'Bahraini Dinar';
$string['BIF'] = 'Burundi Franc';
$string['BMD'] = 'Bermudian Dollar';
$string['BND'] = 'Brunei Dollar';
$string['BOB'] = 'Bolivian Boliviano';
$string['BRL'] = 'Brazilian Real';
$string['BSD'] = 'Bahamian Dollar';
$string['BTN'] = 'Bhutanese Ngultrum';
$string['BWP'] = 'Botswana Pula';
$string['BYR'] = 'Belarusian Ruble';
$string['BZD'] = 'Belize Dollar';
$string['CAD'] = 'Canadian Dollar';
$string['CDF'] = 'Congolese Franc';
$string['CHF'] = 'Swiss Franc';
$string['CLF'] = 'Chilean Unidades de Fomento';
$string['CLP'] = 'Chilean Peso';
$string['CNY'] = 'Chinese Yuan (Renminbi)';
$string['COP'] = 'Colombian Peso';
$string['CRC'] = 'Costa Rican Colon';
$string['CUC'] = 'Cuban Convertible Peso';
$string['CUP'] = 'Cuban Peso';
$string['CVE'] = 'Cape Verde Escudo';
$string['CZK'] = 'Czech Koruna';
$string['DJF'] = 'Djibouti Franc';
$string['DKK'] = 'Danish Krone';
$string['DOP'] = 'Dominican Peso';
$string['DZD'] = 'Algerian Dinar';
$string['EGP'] = 'Egyptian Pound';
$string['ERN'] = 'Eritrean Nakfa';
$string['ETB'] = 'Ethiopian Birr';
$string['EUR'] = 'Euro';
$string['FJD'] = 'Fiji Dollar';
$string['FKP'] = 'Falkland Islands Pound';
$string['GBP'] = 'British Pound Sterling';
$string['GEL'] = 'Georgian Lari';
$string['GHS'] = 'Ghanaian Cedi';
$string['GIP'] = 'Gibraltar Pound';
$string['GMD'] = 'Gambian Dalasi';
$string['GNF'] = 'Guinea Franc';
$string['GTQ'] = 'Guatemalan Quetzal';
$string['GYD'] = 'Guyanese Dollar';
$string['HKD'] = 'Hong Kong Dollar';
$string['HNL'] = 'Honduran Lempira';
$string['HRK'] = 'Croatian Kuna';
$string['HTG'] = 'Haitian Gourde';
$string['HUF'] = 'Hungarian Forint';
$string['IDR'] = 'Indonesian Rupiah';
$string['ILS'] = 'Israeli Sheqel';
$string['INR'] = 'Indian Rupee';
$string['IQD'] = 'Iraqi Dinar';
$string['IRR'] = 'Iranian Rial';
$string['ISK'] = 'Iceland Krona';
$string['JMD'] = 'Jamaican Dollar';
$string['JOD'] = 'Jordanian Dinar';
$string['JPY'] = 'Japanese Yen';
$string['KES'] = 'Kenyan Shilling';
$string['KGS'] = 'Kyrgyzstani Som';
$string['KHR'] = 'Cambodian Riel';
$string['KMF'] = 'Comoros Franc';
$string['KPW'] = 'North Korean Won';
$string['KRW'] = 'South Korean Won';
$string['KWD'] = 'Kuwaiti Dinar';
$string['KYD'] = 'Cayman Islands Dollar';
$string['KZT'] = 'Kazakhstani Tenge';
$string['LAK'] = 'Lao Kip';
$string['LBP'] = 'Lebanese Pound';
$string['LKR'] = 'Sri Lanka Rupee';
$string['LRD'] = 'Liberian Dollar';
$string['LSL'] = 'Lesotho Loti';
$string['LTL'] = 'Lithuanian Litas';
$string['LVL'] = 'Latvian Lats';
$string['LYD'] = 'Libyan Dinar';
$string['MAD'] = 'Moroccan Dirham';
$string['MDL'] = 'Moldovan Leu';
$string['MGA'] = 'Malagasy Ariary';
$string['MKD'] = 'Makedonian Denar';
$string['MMK'] = 'Myanmar (Burmese) Kyat';
$string['MNT'] = 'Mongolian Tugrik';
$string['MOP'] = 'Macau Pataca';
$string['MRO'] = 'Mauritanian Ouguiya';
$string['MUR'] = 'Mauritius Rupee';
$string['MVR'] = 'Maldivian Rufiyaa';
$string['MWK'] = 'Malawi Kwacha';
$string['MXN'] = 'Mexican Peso';
$string['MYR'] = 'Malaysian Ringgit';
$string['MZN'] = 'Mozambican Metical';
$string['NAD'] = 'Namibian Dollar';
$string['NGN'] = 'Nigerian Naira';
$string['NIO'] = 'Nicaraguan Cordoba Oro';
$string['NOK'] = 'Norwegian Krone';
$string['NPR'] = 'Nepalese Rupee';
$string['NZD'] = 'New Zealand Dollar';
$string['OMR'] = 'Omani Rial';
$string['PAB'] = 'Panamanian Balboa';
$string['PEN'] = 'Peruvian Nuevo Sol';
$string['PGK'] = 'Papua New Guinea Kina';
$string['PHP'] = 'Philippine Peso';
$string['PKR'] = 'Pakistan Rupee';
$string['PLN'] = 'Polish Zloty';
$string['PYG'] = 'Paraguayan Guarani';
$string['QAR'] = 'Qatari Rial';
$string['RON'] = 'Romanian Leu';
$string['RSD'] = 'Serbian Dinar';
$string['RUB'] = 'Russian Ruble';
$string['RWF'] = 'Rwanda Franc';
$string['SAR'] = 'Saudi Arabian Riyal';
$string['SBD'] = 'Solomon Islands Dollar';
$string['SCR'] = 'Seychelles Rupee';
$string['SDG'] = 'Sudanese Pound';
$string['SEK'] = 'Swedish Krona';
$string['SGD'] = 'Singapore Dollar';
$string['SHP'] = 'St. Helena Pound';
$string['SLL'] = 'Sierra Leonean Leone';
$string['SOS'] = 'Somali Shilling';
$string['SRD'] = 'Surinamese Dollar';
$string['SSP'] = 'South Sudanese Pound';
$string['STD'] = 'Sao Tome and Principe Dobra';
$string['SVC'] = 'El Salvador Colon';
$string['SYP'] = 'Syrian Pound';
$string['SZL'] = 'Swazi Lilangeni';
$string['THB'] = 'Thai Baht';
$string['TJS'] = 'Tajikistani Somoni';
$string['TMT'] = 'Turkmenistani Manat';
$string['TND'] = 'Tunisian Dinar';
$string['TOP'] = 'Tongan Pa\'anga';
$string['TRY'] = 'Turkish Lira';
$string['TTD'] = 'Trinidad and Tobago Dollar';
$string['TWD'] = 'Taiwan Dollar';
$string['TZS'] = 'Tanzanian Shilling';
$string['UAH'] = 'Ukrainian Hryvnia';
$string['UGX'] = 'Ugandan Shilling';
$string['USD'] = 'US Dollar';
$string['UYU'] = 'Uruguayan Peso';
$string['UZS'] = 'Uzbekistani Sum';
$string['VEF'] = 'Venezuelan Bolivar Fuerte';
$string['VND'] = 'Vietnamese Dong';
$string['VUV'] = 'Vanuatu Vatu';
$string['WST'] = 'Samoan Tala';
$string['XAF'] = 'CFA Franc BEAC';
$string['XCD'] = 'East Caribbean Dollar';
$string['XOF'] = 'CFA Franc BCEAO';
$string['XPF'] = 'CFP Franc';
$string['YER'] = 'Yemeni Rial';
$string['ZAR'] = 'South African Rand';
$string['ZMK'] = 'Zambian Kwacha';
$string['ZWL'] = 'Zimbabwe Dollar';
$string['BTC'] = 'Bitcoin';
$string['EEK'] = 'Estonian Kroon';
$string['JEP'] = 'Jersey Pound';
$string['MTL'] = 'Maltese Lira';
$string['TMM'] = 'Turkmenistan Manat';
$string['XAG'] = 'Ounces of Silver';
$string['XAU'] = 'Ounces of Gold';
$string['XDR'] = 'IMF Special Drawing Rights';
$string['ZMW'] = 'Zambian Kwacha';
