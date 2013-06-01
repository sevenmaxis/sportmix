<?php
/*
  $Id: russian.php,v 1.106 2003/06/20 00:18:31 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'ru_RU.CP1251');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'windows-1251');

// page title
define('TITLE', '�����������������');

// header text in includes/header.php
define('HEADER_TITLE_TOP', '�����������������');
define('HEADER_TITLE_SUPPORT_SITE', '���� ���������');
define('HEADER_TITLE_ONLINE_CATALOG', '�������');
define('HEADER_TITLE_ADMINISTRATION', '�������������');

// text for gender
define('MALE', '�������');
define('FEMALE', '�������');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '���������');
define('BOX_CONFIGURATION_MYSTORE', '�������');
define('BOX_CONFIGURATION_LOGGING', '����');
define('BOX_CONFIGURATION_CACHE', '���');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', '������');
define('BOX_MODULES_PAYMENT', '������');
define('BOX_MODULES_SHIPPING', '��������');
define('BOX_MODULES_ORDER_TOTAL', '����� �����');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', '�������');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', '���������/������');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', '����� �������');
define('BOX_CATALOG_MANUFACTURERS', '�������������');
define('BOX_CATALOG_REVIEWS', '������');
define('BOX_CATALOG_SPECIALS', '������');
define('BOX_CATALOG_PRODUCTS_EXPECTED', '��������� ������'); 

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', '�������');
define('BOX_CUSTOMERS_CUSTOMERS', '�������');
define('BOX_CUSTOMERS_ORDERS', '������');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', '����� / ������');
define('BOX_TAXES_COUNTRIES', '������');
define('BOX_TAXES_ZONES', '�������');
define('BOX_TAXES_GEO_ZONES', '��������� ����');
define('BOX_TAXES_TAX_CLASSES', '���� �������');
define('BOX_TAXES_TAX_RATES', '������ �������');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', '������');
define('BOX_REPORTS_PRODUCTS_VIEWED', '������������� ������');
define('BOX_REPORTS_PRODUCTS_PURCHASED', '���������� ������');
define('BOX_REPORTS_ORDERS_TOTAL', '������ �������');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', '�����������');
define('BOX_TOOLS_BACKUP', '��������� ����������� ��');
define('BOX_TOOLS_BANNER_MANAGER', '�������� ��������');
define('BOX_TOOLS_CACHE', '�������� ����');
define('BOX_TOOLS_DEFINE_LANGUAGE', '�������� �����');
define('BOX_TOOLS_FILE_MANAGER', '�������� ��������');
define('BOX_TOOLS_MAIL', '������� Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', '�������� �������� ��������');
define('BOX_TOOLS_SERVER_INFO', '���������� � �������');
define('BOX_TOOLS_WHOS_ONLINE', '��� � �������');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', '�����������');
define('BOX_LOCALIZATION_CURRENCIES', '������');
define('BOX_LOCALIZATION_LANGUAGES', '�����');
define('BOX_LOCALIZATION_ORDERS_STATUS', '������� �������');

// javascript messages
define('JS_ERROR', '��� ���������� ����� �� ��������� ������!\n��������, ����������, ��������� �����������:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* ����� ������� ������ ����� ����� ����\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* ����� ������� ������ ����� ����� ������� �������\n');

define('JS_PRODUCTS_NAME', '* ��� ������ ������ ������ ���� ������� ������������\n');
define('JS_PRODUCTS_DESCRIPTION', '* ��� ������ ������ ������ ���� ������� ��������\n');
define('JS_PRODUCTS_PRICE', '* ��� ������ ������ ������ ���� ������� ����\n');
define('JS_PRODUCTS_WEIGHT', '* ��� ������ ������ ������ ���� ������ ���\n');
define('JS_PRODUCTS_QUANTITY', '* ��� ������ ������ ������ ���� ������� ����������\n');
define('JS_PRODUCTS_MODEL', '* ��� ������ ������ ������ ���� ������ ��� ������\n');
define('JS_PRODUCTS_IMAGE', '* ��� ������ ������ ������ ���� ��������\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* ��� ����� ������ ������ ���� ����������� ����� ����\n');

define('JS_GENDER', '* ���� \'���\' ������ ���� �������.\n');
define('JS_FIRST_NAME', '* ���� \'���\' ������ ��������� �� ����� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ��������.\n');
define('JS_LAST_NAME', '* ���� \'�������\' ������ ��������� �� ����� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ��������.\n');
define('JS_DOB', '* ���� \'���� ��������\' ������ ����� ������: xx/xx/xxxx (����/�����/���).\n');
define('JS_EMAIL_ADDRESS', '* ���� \'E-Mail �����\' ������ ��������� �� ����� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ��������.\n');
define('JS_ADDRESS', '* ���� \'�����\' ������ ��������� �� ����� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ��������.\n');
define('JS_POST_CODE', '* ���� \'������\' ������ ��������� �� ����� ' . ENTRY_POSTCODE_MIN_LENGTH . ' ��������.\n');
define('JS_CITY', '* ���� \'�����\' ������ ��������� �� ����� ' . ENTRY_CITY_MIN_LENGTH . ' ��������.\n');
define('JS_STATE', '* ���� \'������\' ������ ���� �������.\n');
define('JS_STATE_SELECT', '-- �������� ���� --');
define('JS_ZONE', '* ���� \'������\' ������ ��������������� �������� ������.');
define('JS_COUNTRY', '* ���� \'������\' ����� ���� ���������.\n');
define('JS_TELEPHONE', '* ���� \'�������\' ������ ��������� �� ����� ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ��������.\n');
define('JS_PASSWORD', '* ���� \'������\' � \'�������������\' ������ ��������� � ��������� �� ����� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ��������.\n');

define('JS_ORDER_DOES_NOT_EXIST', '����� ����� %s �� ������!');

define('CATEGORY_PERSONAL', '������������');
define('CATEGORY_ADDRESS', '�����');
define('CATEGORY_CONTACT', '��� ��������');
define('CATEGORY_COMPANY', '��������');
define('CATEGORY_OPTIONS', '��������');

define('ENTRY_GENDER', '���:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">�����������</span>');
define('ENTRY_FIRST_NAME', '���:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ��������</span>');
define('ENTRY_LAST_NAME', '�������:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ��������</span>');
define('ENTRY_DATE_OF_BIRTH', '���� ��������:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(������ 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail �����:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ��������</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">�� ����� �������� email �����!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">������ email ����� ��� ���������������!</span>');
define('ENTRY_COMPANY', '�������� ��������:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_STREET_ADDRESS', '�����:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ��������</span>');
define('ENTRY_SUBURB', '�����:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', '������:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_POSTCODE_MIN_LENGTH . ' ��������</span>');
define('ENTRY_CITY', '�����:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_CITY_MIN_LENGTH . ' ��������</span>');
define('ENTRY_STATE', '������:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">�����������</span>');
define('ENTRY_COUNTRY', '������:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', '�������:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ��������</span>');
define('ENTRY_FAX_NUMBER', '����:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', '�������� ��������:');
define('ENTRY_NEWSLETTER_YES', '��������');
define('ENTRY_NEWSLETTER_NO', '�� ��������');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_ANI_SEND_EMAIL', '��������� E-Mail');
define('IMAGE_BACK', '�����');
define('IMAGE_BACKUP', '���. �����');
define('IMAGE_CANCEL', '��������');
define('IMAGE_CONFIRM', '�����������');
define('IMAGE_COPY', '����������');
define('IMAGE_COPY_TO', '���������� �');
define('IMAGE_DETAILS', '���������');
define('IMAGE_DELETE', '�������');
define('IMAGE_EDIT', '�������������');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_FILE_MANAGER', '�������� ������');
define('IMAGE_ICON_STATUS_GREEN', '��������');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', '��������������');
define('IMAGE_ICON_STATUS_RED', '����������');
define('IMAGE_ICON_STATUS_RED_LIGHT', '������� ����������');
define('IMAGE_ICON_INFO', '����������');
define('IMAGE_INSERT', '��������');
define('IMAGE_LOCK', '�����');
define('IMAGE_MODULE_INSTALL', '���������� ������');
define('IMAGE_MODULE_REMOVE', '������� ������');
define('IMAGE_MOVE', '�����������');
define('IMAGE_NEW_BANNER', '����� ������');
define('IMAGE_NEW_CATEGORY', '����� ���������');
define('IMAGE_NEW_COUNTRY', '����� ������');
define('IMAGE_NEW_CURRENCY', '����� ������'); 
define('IMAGE_NEW_FILE', '����� ����');
define('IMAGE_NEW_FOLDER', '����� �����');
define('IMAGE_NEW_LANGUAGE', '����� ����');
define('IMAGE_NEW_NEWSLETTER', '����� ������ ��������');
define('IMAGE_NEW_PRODUCT', '����� �����');
define('IMAGE_NEW_TAX_CLASS', '����� �����'); 
define('IMAGE_NEW_TAX_RATE', '����� ������ ������');
define('IMAGE_NEW_TAX_ZONE', '����� ��������� ����');
define('IMAGE_NEW_ZONE', '����� ����');
define('IMAGE_ORDERS', '������');
define('IMAGE_ORDERS_INVOICE', '����-�������');
define('IMAGE_ORDERS_PACKINGSLIP', '���������');
define('IMAGE_PREVIEW', '������������');
define('IMAGE_RESTORE', '������������');
define('IMAGE_RESET', '�����');
define('IMAGE_SAVE', '���������');
define('IMAGE_SEARCH', '������');
define('IMAGE_SELECT', '�������');
define('IMAGE_SEND', '���������');
define('IMAGE_SEND_EMAIL', '��������� Email');
define('IMAGE_UNLOCK', '��������������');
define('IMAGE_UPDATE', '��������');
define('IMAGE_UPDATE_CURRENCIES', '��������������� ����� �����');
define('IMAGE_UPLOAD', '���������');

define('ICON_CROSS', '���������������');
define('ICON_CURRENT_FOLDER', '������� ����������');
define('ICON_DELETE', '�������');
define('ICON_ERROR', '������');
define('ICON_FILE', '����');
define('ICON_FILE_DOWNLOAD', '��������');
define('ICON_FOLDER', '�����');
define('ICON_LOCKED', '�������������');
define('ICON_PREVIOUS_LEVEL', '���������� �������');
define('ICON_PREVIEW', '������������');
define('ICON_STATISTICS', '����������');
define('ICON_SUCCESS', '���������');
define('ICON_TICK', '������');
define('ICON_UNLOCKED', '��������������');
define('ICON_WARNING', '��������');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', '�������� %s �� %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �����)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �����)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������� �������)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ��������������)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ��������� �������)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ������ � �������)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ����������� �����������)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ����� �������)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ��������� ���)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ������ �������)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ���)');

define('PREVNEXT_BUTTON_PREV', '����������');
define('PREVNEXT_BUTTON_NEXT', '���������');

define('TEXT_DEFAULT', '�� ���������');
define('TEXT_SET_DEFAULT', '���������� �� ���������');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* �����������</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '������: � ���������� ������� �� ���� ������ �� ���� ����������� �� ���������. ����������, ���������� ���� �� ��� �: ����������� -> ������');

define('TEXT_CACHE_CATEGORIES', '���� ���������');
define('TEXT_CACHE_MANUFACTURERS', '���� ��������������');
define('TEXT_CACHE_ALSO_PURCHASED', '����� ������ �������'); 

define('TEXT_NONE', '--���--');
define('TEXT_TOP', '������');

define('ERROR_DESTINATION_DOES_NOT_EXIST', '������: ������� �� ����������.');
define('ERROR_DESTINATION_NOT_WRITEABLE', '������: ������� ������� �� ������, ���������� ����������� ����� �������.');
define('ERROR_FILE_NOT_SAVED', '������: ���� �� ��� ��������.');
define('ERROR_FILETYPE_NOT_ALLOWED', '������: ������ ���������� ����� ������� ����.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '���������: ���� ������� ��������.');
define('WARNING_NO_FILE_UPLOADED', '��������������: ����� ����� �� ���������.');
define('WARNING_FILE_UPLOADS_DISABLED', '��������������: ����� �������� ������ ��������� � ���������������� ����� php.ini.');
?>
