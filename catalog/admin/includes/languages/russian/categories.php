<?php
/*
  $Id: categories.php,v 1.26 2003/07/11 14:40:28 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', '��������� / ������');
define('HEADING_TITLE_SEARCH', '�����:');
define('HEADING_TITLE_GOTO', '������� �:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '��������� / ������');
define('TABLE_HEADING_ACTION', '��������');
define('TABLE_HEADING_STATUS', '������');

define('TEXT_NEW_PRODUCT', '����� ����� � &quot;%s&quot;');
define('TEXT_CATEGORIES', '���������:');
define('TEXT_SUBCATEGORIES', '������������:');
define('TEXT_PRODUCTS', '������:');
define('TEXT_PRODUCTS_PRICE_INFO', '����:');
define('TEXT_PRODUCTS_TAX_CLASS', '����� �������:');
define('TEXT_PRODUCTS_AVERAGE_RATING', '������� ������:');
define('TEXT_PRODUCTS_QUANTITY_INFO', '����������:');
define('TEXT_DATE_ADDED', '���� ����������:');
define('TEXT_DATE_AVAILABLE', '�������� �:');
define('TEXT_LAST_MODIFIED', '��������� ���������:');
define('TEXT_IMAGE_NONEXISTENT', '�������� �� �������');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '��������, ����������, ����� ��������� ��� ����� �<br>&nbsp;<br><b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', '����� ��������� ���������� � ������ <a href="http://%s" target="blank"><u>�� ���� ��������</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', '���� ����� ��� �������� � ������� %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '���� ����� ����� � ������� � %s.');

define('TEXT_EDIT_INTRO', '����������, ������� ����������� ���������');
define('TEXT_EDIT_CATEGORIES_ID', 'ID ���������:');
define('TEXT_EDIT_CATEGORIES_NAME', '�������� ���������:');
define('TEXT_EDIT_CATEGORIES_IMAGE', '�������� ��� ���������:');
define('TEXT_EDIT_SORT_ORDER', '������� ����������:');

define('TEXT_INFO_COPY_TO_INTRO', '��������, ����������, ����� ���������, ���� �� ������ ����������� ���� �����');
define('TEXT_INFO_CURRENT_CATEGORIES', '������� ���������:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '����� ���������');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '�������� ���������');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '������� ���������');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '��������� ���������');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '������� �����');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '��������� �����');
define('TEXT_INFO_HEADING_COPY_TO', '���������� �');

define('TEXT_DELETE_CATEGORY_INTRO', '�� ������������� ������ ������� ��� ���������?');
define('TEXT_DELETE_PRODUCT_INTRO', '�� ������������� ������ ������� ���� �����?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>��������:</b> ���� ��� %s ������������, ��������� � ���� ����������!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>��������:</b> ���� ��� %s ������������ ������, ��������� � ���� ����������!');

define('TEXT_MOVE_PRODUCTS_INTRO', '����������, �������� ��������� ��� ����������� <b>%s</b> �');
define('TEXT_MOVE_CATEGORIES_INTRO', '����������, �������� ��������� ��� ����������� <b>%s</b> �');
define('TEXT_MOVE', '����������� <b>%s</b> �:');

define('TEXT_NEW_CATEGORY_INTRO', '����������, ��������� ��������� ���������� ��� ����� ���������');
define('TEXT_CATEGORIES_NAME', '�������� ���������:');
define('TEXT_CATEGORIES_IMAGE', '�������� ���������:');
define('TEXT_SORT_ORDER', '������� ����������:');

define('TEXT_PRODUCTS_STATUS', '������ ������:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '���� �����������:');
define('TEXT_PRODUCT_AVAILABLE', '� �������');
define('TEXT_PRODUCT_NOT_AVAILABLE', '��� � �������');
define('TEXT_PRODUCTS_MANUFACTURER', '�������������:');
define('TEXT_PRODUCTS_NAME', '��������:');
define('TEXT_PRODUCTS_DESCRIPTION', '�������� ������:');
define('TEXT_PRODUCTS_QUANTITY', '���������� ������ �� ������:');
define('TEXT_PRODUCTS_MODEL', '��� ������:');
define('TEXT_PRODUCTS_IMAGE', '�������� ������:');
define('TEXT_PRODUCTS_URL', 'URL ������:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(��� http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', '���� (��� ������):');
define('TEXT_PRODUCTS_PRICE_GROSS', '���� (� �������):');
define('TEXT_PRODUCTS_WEIGHT', '��� ������:');

define('EMPTY_CATEGORY', '������ ���������');

define('TEXT_HOW_TO_COPY', '����� �����������:');
define('TEXT_COPY_AS_LINK', '������ �� �����');
define('TEXT_COPY_AS_DUPLICATE', '����������� �����');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '������: ������ ������ ������ �� ����� � ��� �� ���������.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '������: ������� � ���������� ����� �������� ����� �������: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '������: ������� � ���������� �����������: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', '������: ��������� �� ����� ���� ����������.');
?>
