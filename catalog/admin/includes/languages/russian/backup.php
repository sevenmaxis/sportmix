<?php
/*
  $Id: backup.php,v 1.16 2002/03/16 21:30:02 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', '��������� �����������');

define('TABLE_HEADING_TITLE', '���');
define('TABLE_HEADING_FILE_DATE', '����');
define('TABLE_HEADING_FILE_SIZE', '������');
define('TABLE_HEADING_ACTION', '��������');

define('TEXT_INFO_HEADING_NEW_BACKUP', '��������� ������');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', '������������ ��������');
define('TEXT_INFO_NEW_BACKUP', '�� ���������� �������, ������� ����� ������ ���� �����.');
define('TEXT_INFO_UNPACK', '<br><br>(����� ���������� ����� �� ������)');
define('TEXT_INFO_RESTORE', '�� ���������� ������� ��������������.<br><br>������� ���� ������, ����� ������ �������!<br><br>���� ��������, ����������� shell �������.<br><br>��������:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', '�� ���������� ������� ��������������.<br><br>������� ���� ������, ����� ������ �������!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', '����������� ���� ������ ���� ��������� ������ sql.');
define('TEXT_INFO_DATE', '����:');
define('TEXT_INFO_SIZE', '������:');
define('TEXT_INFO_COMPRESSION', '������:');
define('TEXT_INFO_USE_GZIP', '������������ GZIP');
define('TEXT_INFO_USE_ZIP', '������������ ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', '��� ������ (������ SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', '������ �������� (�� ���������� �� ��������� ������)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', '��������� ������� - ����� ����� HTTPS');
define('TEXT_DELETE_INTRO', '�� ������������� ������ ������� ��� �����?');
define('TEXT_NO_EXTENSION', '���');
define('TEXT_BACKUP_DIRECTORY', '��������� ����������:');
define('TEXT_LAST_RESTORATION', '��������� ��������������:');
define('TEXT_FORGET', '(<u>������</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', '������: ���������� ��� ���������� ����������� �� ����������.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '������: ���������� ��� ���������� ����������� �������� �� ������, ���������� ������ ����� �������.');  
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '������: ������ ��� �������� �� ���������.');
define('ERROR_FILE_NOT_REMOVEABLE', '������: ���������� ������� ����, ��� �������. ���������� ������ ����� �������.');

define('SUCCESS_LAST_RESTORE_CLEARED', '���������: ��������� ���� �������������� �������.');
define('SUCCESS_DATABASE_SAVED', '���������: ���� ������ ���������.');
define('SUCCESS_DATABASE_RESTORED', '���������: ���� ������ �������������.');
define('SUCCESS_BACKUP_DELETED', '���������: ����� �������.');
?>
