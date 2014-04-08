<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'login_title' => 'Вход в центр управления',
	'login_username' => 'Логин',
	'login_password' => 'Пароль',

	'submit' => 'Отправить',
	'forcesecques' => 'Обязательное заполнение',
	'security_question' => 'Вопрос',
	'security_answer' => 'Ответ',
	'security_question_0' => 'Без вопроса',
	'security_question_1' => 'Имя матери',
	'security_question_2' => 'Имя дедушки',
	'security_question_3' => 'Мой день рождения',
	'security_question_4' => 'Мой первый учитель',
	'security_question_5' => 'Модель моего ПК',
	'security_question_6' => 'Мой любимый клуб',
	'security_question_7' => 'Номер документа',

	'login_tips' => 'Discuz! Технологически новое, программное решение, выполненное на PHP и MySQL для создания высокопроизводительного и многофункционального ресурса с элементами социальной сети!',
	'login_nosecques' => 'Вы не можете использовать безопасный вход. Настройте в своем личном центре секретный вопрос для безопасности. У вас больше нет доступа к Центру управления. Для настройки секретного вопроса <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">нажмите здесь</a>',

	'login_cplock' => 'Вход в панель управления был заблокирован! <br> Зайдите повторно через <b>{ltime} </b> секунд.',
	'login_user_lock' => 'Вход в панель заблокирован из-за многократных попыток подбора пароля. Пожалуйста, повторите попытку через 15 минут',
	'login_cp_noaccess' => '<b>Внимание! Центр управления закрыт для вас</b><br /><br /><b>Советуем не пытаться незаконно войти в панель, так как все ваши действия и данные были подробно записаны в отчеты</b>',
	'noaccess' => 'У вас нет прав для входа в панель управления, пожалуйста, свяжитесь с администрацией сайта',


);

?>