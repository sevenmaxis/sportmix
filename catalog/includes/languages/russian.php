<?php
/*
  $Id: russian.php,v 1.114 2003/07/09 18:13:39 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'ru_RU.CP1251');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
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

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="LTR" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'windows-1251');

// page title
define('TITLE', 'OsCommerce - ������� ������');

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', '�����������');
define('HEADER_TITLE_MY_ACCOUNT', '��� ������');
define('HEADER_TITLE_CART_CONTENTS', '�������');
define('HEADER_TITLE_CHECKOUT', '�������� �����');
define('HEADER_TITLE_TOP', '�������');
define('HEADER_TITLE_CATALOG', '�������');
define('HEADER_TITLE_LOGOFF', '�����');
define('HEADER_TITLE_LOGIN', '��� ������');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', '������������� ������� c');

// text for gender
define('MALE', '�������');
define('FEMALE', '�������');
define('MALE_ADDRESS', '�-�');
define('FEMALE_ADDRESS', '�-��');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', '�������');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', '�������������');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', '�������');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', '������� �����');
define('BOX_SEARCH_TEXT', '������� ����� ��� ������.');
define('BOX_SEARCH_ADVANCED_SEARCH', '����������� �����');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', '������');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', '������');
define('BOX_REVIEWS_WRITE_REVIEW', '�������� ���� ������ � ������!');
define('BOX_REVIEWS_NO_REVIEWS', '� ���������� ������� ��� �� ������ ������');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s �� 5 ����!');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', '�������');
define('BOX_SHOPPING_CART_EMPTY', '������� �����');

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', '������� �������');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', '������ ������');
define('BOX_HEADING_BESTSELLERS_IN', '������ ������ �����<br>&nbsp;&nbsp;');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', '�����������');
define('BOX_NOTIFICATIONS_NOTIFY', '�������� ��� � �������� �&nbsp;<b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', '�� ��������� ��� � �������� <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', '�������������');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '���� %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', '������ ������');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', '�����');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', '������');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', '����������');
define('BOX_INFORMATION_PRIVACY', '������������');
define('BOX_INFORMATION_CONDITIONS', '������� � ��������');
define('BOX_INFORMATION_SHIPPING', '�������� � �������');
define('BOX_INFORMATION_CONTACT', '��������� � ����');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', '���������� �����');
define('BOX_TELL_A_FRIEND_TEXT', '�������� ����� ������� � ������� � ����� ��������');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', '����� ��������');
define('CHECKOUT_BAR_PAYMENT', '������ ������');
define('CHECKOUT_BAR_CONFIRMATION', '�������������');
define('CHECKOUT_BAR_FINISHED', '����� ��������!');

// pull down default text
define('PULL_DOWN_DEFAULT', '��������');
define('TYPE_BELOW', '����� ����');

// javascript messages
define('JS_ERROR', '������ ��� ���������� �����!\n\n��������� ����������:\n\n');

define('JS_REVIEW_TEXT', '* ���� \'����� ������\' ������ ��������� �� ����� ' . REVIEW_TEXT_MIN_LENGTH . ' ��������.\n');
define('JS_REVIEW_RATING', '* �������, ����������, ������� �� ����������� �����.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* �������� ����� ������ ��� ������ ������.\n');

define('JS_ERROR_SUBMITTED', '��� ����� ��� ���������. ��������� Ok.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', '��������, ����������, ����� ������ ��� ������ ������.');

define('CATEGORY_COMPANY', '�����������');
define('CATEGORY_PERSONAL', '���� ������������ ������');
define('CATEGORY_ADDRESS', '��� �����');
define('CATEGORY_CONTACT', '���������� ����������');
define('CATEGORY_OPTIONS', '��������');
define('CATEGORY_PASSWORD', '��� ������');

define('ENTRY_COMPANY', '�������� ��������:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', '���:');
define('ENTRY_GENDER_ERROR', '�� ������ ������� ���� ���.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', '���:');
define('ENTRY_FIRST_NAME_ERROR', '���� ��� ������ ��������� ��� ������� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' �������.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', '�������:');
define('ENTRY_LAST_NAME_ERROR', '���� ������� ������ ��������� ��� ������� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' �������.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', '���� ��������:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '���� �������� ���������� ������� � ��������� �������: MM/DD/YYYY (������ 05/21/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (������ 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '���� E-Mail ������ ��������� ��� ������� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ��������.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '��� E-Mail ����� ������ �����������, ���������� ��� ���.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '�������� ���� E-Mail ��� ��������������� � ����� ��������, ���������� ������� ������ E-Mail �����.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', '����� � ����� ����:');
define('ENTRY_STREET_ADDRESS_ERROR', '���� ����� � ����� ���� ������ ��������� ��� ������� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ��������.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', '�����:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', '�������� ������:');
define('ENTRY_POST_CODE_ERROR', '���� �������� ������ ������ ��������� ��� ������� ' . ENTRY_POSTCODE_MIN_LENGTH . ' �������.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', '�����:');
define('ENTRY_CITY_ERROR', '���� ����� ������ ��������� ��� ������� ' . ENTRY_CITY_MIN_LENGTH . ' �������.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', '�������:');
define('ENTRY_STATE_ERROR', '���� ������� ������ ��������� ��� ������� ' . ENTRY_STATE_MIN_LENGTH . ' �������.');
define('ENTRY_STATE_ERROR_SELECT', '�������� �������.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', '������:');
define('ENTRY_COUNTRY_ERROR', '�������� ������.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', '�������:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '���� ������� ������ ��������� ��� ������� ' . ENTRY_TELEPHONE_MIN_LENGTH . ' �������.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', '����:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', '������� ��������:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', '�����������');
define('ENTRY_NEWSLETTER_NO', '���������� �� ��������');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', '������:');
define('ENTRY_PASSWORD_ERROR', '��� ������ ������ ��������� ��� ������� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ��������.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '���� ����������� ������ ������ ��������� � ����� ������.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', '����������� ������:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', '������� ������:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', '���� ������ ������ ��������� ��� ������� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ��������.');
define('ENTRY_PASSWORD_NEW', '����� ������:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', '��� ����� ������ ������ ��������� ��� ������� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ��������.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '���� ����������� ������ � ����� ������ ������ ���������.');
define('PASSWORD_HIDDEN', '--�����--');

define('FORM_REQUIRED_INFORMATION', '* ����������� ��� ����������');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', '��������:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '�������� <b>%d</b> - <b>%d</b> (����� <b>%d</b> ����������� �����������)');

define('PREVNEXT_TITLE_FIRST_PAGE', '������ ��������');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', '����������');
define('PREVNEXT_TITLE_NEXT_PAGE', '��������� ��������');
define('PREVNEXT_TITLE_LAST_PAGE', '��������� ��������');
define('PREVNEXT_TITLE_PAGE_NO', '�������� %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '���������� %d �������');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '��������� %d �������');
define('PREVNEXT_BUTTON_FIRST', '������');
define('PREVNEXT_BUTTON_PREV', '����������');
define('PREVNEXT_BUTTON_NEXT', '���������');
define('PREVNEXT_BUTTON_LAST', '���������');

define('IMAGE_BUTTON_ADD_ADDRESS', '�������� �����');
define('IMAGE_BUTTON_ADDRESS_BOOK', '�������� �����');
define('IMAGE_BUTTON_BACK', '�����');
define('IMAGE_BUTTON_BUY_NOW', '������ ������');
define('IMAGE_BUTTON_CHANGE_ADDRESS', '�������� �����');
define('IMAGE_BUTTON_CHECKOUT', '�������� �����');
define('IMAGE_BUTTON_CONFIRM_ORDER', '����������� �����');
define('IMAGE_BUTTON_CONTINUE', '����������');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', '��������� � �������');
define('IMAGE_BUTTON_DELETE', '�������');
define('IMAGE_BUTTON_EDIT_ACCOUNT', '������������� ������� ������');
define('IMAGE_BUTTON_HISTORY', '������� �������');
define('IMAGE_BUTTON_LOGIN', '�����');
define('IMAGE_BUTTON_IN_CART', '�������� � �������');
define('IMAGE_BUTTON_NOTIFICATIONS', '�����������');
define('IMAGE_BUTTON_QUICK_FIND', '������� �����');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', '������� �����������');
define('IMAGE_BUTTON_REVIEWS', '������');
define('IMAGE_BUTTON_SEARCH', '������');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', '������� ��������');
define('IMAGE_BUTTON_TELL_A_FRIEND', '�������� �����'); 
define('IMAGE_BUTTON_UPDATE', '��������');
define('IMAGE_BUTTON_UPDATE_CART', '�����������');
define('IMAGE_BUTTON_WRITE_REVIEW', '�������� �����');

define('SMALL_IMAGE_BUTTON_DELETE', '�������');
define('SMALL_IMAGE_BUTTON_EDIT', '��������');
define('SMALL_IMAGE_BUTTON_VIEW', '��������');

define('ICON_ARROW_RIGHT', '�������');
define('ICON_CART', '� �������');
define('ICON_ERROR', '������');
define('ICON_SUCCESS', '���������');
define('ICON_WARNING', '��������');

define('TEXT_GREETING_PERSONAL', '����� ���������� <span class="greetUser">%s!</span> �� ������ ���������� ����� <a href="%s"><u>����� ������</u></a> ��������� � ��� �������?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>���� �� �� %s, ���������� <a href="%s"><u>����������������� </u></a> � ������� ���� ������ ����������.</small>');
define('TEXT_GREETING_GUEST', '����� ���������� <span class="greetUser">��������� �����</span><br> ���� �� ��� ���������� ������, <a href="%s"><u>������� ���� ������������ ������</u></a> ��� �����. ���� �� � ��� ������� � ������ ������� �������, ��� ���������� <a href="%s"><u>������������������</u></a>.');

define('TEXT_SORT_PRODUCTS', '���������� ������� ');
define('TEXT_DESCENDINGLY', '�� ��������');
define('TEXT_ASCENDINGLY', '�� �����������');
define('TEXT_BY', ' �� ��������� ');

define('TEXT_REVIEW_BY', '� %s');
define('TEXT_REVIEW_WORD_COUNT', '%s �����');
define('TEXT_REVIEW_RATING', '�������: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', '���� ����������: %s');
define('TEXT_NO_REVIEWS', '� ���������� ������� ��� �������, �� ������ ����� ������.');

define('TEXT_NO_NEW_PRODUCTS', '������� ��� ����� ���������.');

define('TEXT_UNKNOWN_TAX_RATE', '��������� ������ ����������');

define('TEXT_REQUIRED', '<span class="errorText">�����������</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>������:</small> ���������� ��������� email ����� ������ SMTP. ���������, ����������, ���� ��������� php.ini � ���� ����������, �������������� ������ SMTP.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', '��������������: �� ������� ���������� ��������� ��������: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install. ����������, ������� ��� ���������� ��� ������������.');
define('WARNING_CONFIG_FILE_WRITEABLE', '��������������: ���� ������������ �������� ��� ������: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php. ��� - ������������� ���� ������������ - ����������, ���������� ����������� ����� ������� � ����� �����.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', '��������������: ���������� ������ �� ����������: ' . tep_session_save_path() . '. ������ �� ����� �������� ���� ��� ���������� �� ����� �������.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', '��������������: ��� ������� � �������� ������: ' . tep_session_save_path() . '. ������ �� ����� �������� ���� �� ����������� ����������� ����� �������.');
define('WARNING_SESSION_AUTO_START', '��������������: ����� session.auto_start �������� - ����������, ��������� ������ ����� � ����� php.ini � ������������� ���-������.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', '��������������: ���������� �����������: ' . DIR_FS_DOWNLOAD . '. �������� ����������.');

define('TEXT_CCVAL_ERROR_INVALID_DATE', '�� ������� �������� ���� ��������� ����� �������� ��������� ��������.<br>���������� ��� ���.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '�� ������� �������� ����� ��������� ��������.<br>���������� ��� ���.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '������ ����� ����� ��������� ��������: %s<br>���� �� ������� ����� ����� ��������� �������� ���������, �������� ���, ��� �� �� ��������� � ������ ������ ��� ��������� ��������.<br>���� �� ������� ����� ��������� �������� �������, ���������� ��� ���.');

/*
  The following copyright announcement can only be
  appropriately modified or removed if the layout of
  the site theme has been modified to distinguish
  itself from the default osCommerce-copyrighted
  theme.

  For more information please read the following
  Frequently Asked Questions entry on the osCommerce
  support site:

  http://www.oscommerce.com/community.php/faq,26/q,50

  Please leave this comment intact together with the
  following copyright announcement.
*/
define('FOOTER_TEXT_BODY', 'Copyright &copy; 2003 <a href="http://www.oscommerce.com" target="_blank">osCommerce</a><br>Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a><br>������� - <a href=mailto:orders@kypi.ru>��������� ����������</a>');
?>
