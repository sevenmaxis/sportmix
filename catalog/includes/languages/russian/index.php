<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:38:00 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', '<font color="#f0000"><b>' . PROJECT_VERSION . ' ������� ������</b></font>.<br>������� - <b><a href=mailto:orders@kypi.ru><font color=blue>��������� ����������</font></b></a>');
define('TABLE_HEADING_NEW_PRODUCTS', '������� %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', '���������');
define('TABLE_HEADING_DATE_EXPECTED', '���� �����������');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', '������ �������');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', '��� ������');
  define('TABLE_HEADING_PRODUCTS', '������������');
  define('TABLE_HEADING_MANUFACTURER', '�������������');
  define('TABLE_HEADING_QUANTITY', '����������');
  define('TABLE_HEADING_PRICE', '����');
  define('TABLE_HEADING_WEIGHT', '���');
  define('TABLE_HEADING_BUY_NOW', '������');
  define('TEXT_NO_PRODUCTS', '��� �� ������ ������ � ���� �������.');
  define('TEXT_NO_PRODUCTS2', '��� �� ������ ������ ������� �������������.');
  define('TEXT_NUMBER_OF_PRODUCTS', '���������� ������: ');
  define('TEXT_SHOW', '<b>��������:</b>');
  define('TEXT_BUY', '������ \'');
  define('TEXT_NOW', '\' ������');
  define('TEXT_ALL_CATEGORIES', '��� �������');
  define('TEXT_ALL_MANUFACTURERS', '��� �������������');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', '����� ����������');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', '�������');
}
?>
