<?php
/*
  $Id: ipayment.php,v 1.4 2002/11/01 05:35:33 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_IPAYMENT_TEXT_TITLE', 'iPayment');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_DESCRIPTION', 'Информация о кредитной карточке для теста:<br><br>Номер карточки: 4111111111111111<br>Действительна до: Любая дата');
  define('IPAYMENT_ERROR_HEADING', 'Ошибка при обработке Вашей кредитной карточки');
  define('IPAYMENT_ERROR_MESSAGE', 'Проверьте, пожалуйста, данные Вашей кредитной карточки!');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_CREDIT_CARD_OWNER', 'Владелец кредитной карточки:');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_CREDIT_CARD_NUMBER', 'Номер кредитной карточки:');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_CREDIT_CARD_EXPIRES', 'Действительна до:');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_CREDIT_CARD_CHECKNUMBER', 'Контрольный номер кредитной карточки:');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(на обратной стороне кредитной карточки рядом с подписью)');

  define('MODULE_PAYMENT_IPAYMENT_TEXT_JS_CC_OWNER', '* Имя владельца кредитной карточки должно содержать по крайней мере ' . CC_OWNER_MIN_LENGTH . ' символов.\n');
  define('MODULE_PAYMENT_IPAYMENT_TEXT_JS_CC_NUMBER', '* Номер кредитной карточки должен быть по крайней мере ' . CC_NUMBER_MIN_LENGTH . ' символов.\n');
?>