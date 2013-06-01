<?php
/*
  $Id: authorizenet.php,v 1.13 2003/01/03 17:25:43 thomasamoulton Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', 'Информация о кредитной карточке для теста:<br><br>Номер карточки: 4111111111111111<br>Действительна до: Любая дата');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Тип:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Владелец кредитной карточки:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Номер кредитной карточки:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Действительна до:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Имя владельца кредитной карточки должно содержать по крайней мере ' . CC_OWNER_MIN_LENGTH . ' символов.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Номер кредитной карточки должен быть по крайней мере ' . CC_NUMBER_MIN_LENGTH . ' символов.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Ошибка при обработке Вашей кредитной карточки, пожалуйста, попытайтесь снова.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Ваша кредитная карточка недействительна. Попробуйте воспользоваться другой кредитной карточкой.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Ошибка!');
?>
