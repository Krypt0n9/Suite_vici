<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_SEND_DATE_TIME' => 'Дата отправки',
    'LBL_IN_QUEUE' => 'Выполняется..',
    'LBL_IN_QUEUE_DATE' => 'Дата постановки в очередь',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Используйте только целое значение для указания числа писем при пакетной рассылке',

    'LBL_ATTACHMENT_AUDIT' => ' было отправлено. Оно не было продублировано локально для экономии дискового пространства.',
    'LBL_CONFIGURE_SETTINGS' => 'Настройка параметров E-mail',
    'LBL_CUSTOM_LOCATION' => 'Задаётся вручную',
    'LBL_DEFAULT_LOCATION' => 'По умолчанию',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Удалять связанные с удалёнными письмами примечания и вложения',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Настройки подтверждений через эл. почту',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Автоматически отправлять подтверждающее письмо',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Шаблон письма подтверждения выбора',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Параметры сервера исходящей почты',
    'LBL_EMAILS_PER_RUN' => 'Количество писем, отправляемых одномоментно при пакетной рассылке',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Рассылка',
    'LBL_LIST_FORM_TITLE' => 'Список',
    'LBL_LIST_FROM_NAME' => 'Имя отправителя',
    'LBL_LIST_IN_QUEUE' => 'В процессе',
    'LBL_LIST_MESSAGE_NAME' => 'Сообщение рассылки',
    'LBL_LIST_RECIPIENT_EMAIL' => 'E-mail получателя',
    'LBL_LIST_RECIPIENT_NAME' => 'Имя получателя',
    'LBL_LIST_SEND_ATTEMPTS' => 'Попытки отправки',
    'LBL_LIST_SEND_DATE_TIME' => 'Отправить',
    'LBL_LIST_USER_NAME' => 'Логин',
    'LBL_LOCATION_ONLY' => 'Место',
    'LBL_LOCATION_TRACK' => 'Расположение файла трекера маркетинговых кампаний',
    'LBL_CAMP_MESSAGE_COPY' => 'Сохранять копии сообщений рассылки:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Вы желаете сохранять полные копии <bold>КАЖДОГО</bold> отправленного сообщения Email-рассылки?  <bold>Мы НЕ рекомендуем этого делать.</bold>  Если вы выберите <b>НЕТ</b>, то будут сохраняться лишь шаблоны отправленных сообщений и вы можете воспользоваться системными переменными для воссоздания необходимых сообщений.',
    'LBL_MAIL_SENDTYPE' => 'Отправка почты с помощью:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-аутентификацию:',
    'LBL_MAIL_SMTPPASS' => 'SMTP-пароль:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-порт:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-сервер:',
    'LBL_MAIL_SMTPUSER' => 'SMTP-пользователь:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - учётная запись почты:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - адрес:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логин:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт сервера:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange  - сервер:',
    'LBL_EMAIL_LINK_TYPE' => 'Почтовый клиент',
    'LBL_MARKETING_ID' => 'Маркетинг (ID)',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Настройка E-mail',
    'LBL_MODULE_TITLE' => 'Управление очередью рассылок E-mail',
    'LBL_NOTIFICATION_ON_DESC' => 'Отправлять уведомление при назначении ответственного',
    'LBL_NOTIFY_FROMADDRESS' => 'E-mail отправителя:',
    'LBL_NOTIFY_FROMNAME' => 'Имя отправителя:',
    'LBL_NOTIFY_ON' => 'Отправление уведомлений',
    'LBL_NOTIFY_TITLE' => 'Параметры E-mail',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Параметры исходящей почты',
    'LBL_RELATED_ID' => 'Родительский ID',
    'LBL_RELATED_TYPE' => 'Родительский тип',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск очереди',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Значение параметра site_url в файле сonfig.php',
    'TXT_REMOVE_ME_ALT' => 'Для удаления себя из списка рассылки перейдите к',
    'TXT_REMOVE_ME_CLICK' => 'нажмите здесь',
    'TXT_REMOVE_ME' => 'Если вы настаиваете на удалении вашего адреса из списка рассылки нашей компании -  ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Параметры безопасности E-mail',
    'LBL_SECURITY_DESC' => 'Отметьте теги, которые НЕ будут разрешены во входящей почте и не будут отображаться в модуле "E-mail".',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Base tag',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'Тег iFrame',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Выбрать минимальный уровень безопасности, установленный в Outlook по умолчанию (возможно некорректное отображение форматирования).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Отметить все теги',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'Да',
    'LBL_NO' => 'Нет',
    'LBL_PREPEND_TEST' => '[Тест]: ',
    'LBL_SEND_ATTEMPTS' => 'Кол-во попыток отправки',
    'LBL_OUTGOING_SECTION_HELP' => 'Настройка параметров стандартного сервера исходящей почты.',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Разрешить пользователям использовать данную учётную запись для отправки исходящей почты',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'При выборе данной опции все пользователи смогут отправлять электронную почту (включая автоматические уведомления о назначении записей)<br>с использованием указанного здесь стандартного сервера исходящей почты.<br>В противном случае каждому пользователю при настройке учётной записи электронной почты необходимо вручную ввести настройки сервера исходящей почты.',
    'LBL_FROM_ADDRESS_HELP' => 'В поле <<b>От</b>> создаваемого письма будут указываться имя и электронный адрес назначающего пользователя. Данная функция может не работать, если SMTP-сервер не позволяет отправлять письма, в которых адрес отправителя отличается от адреса сервера.',
    'LBL_HELP' => 'Справка' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Перечень учётных записей исходящей почты',
);
