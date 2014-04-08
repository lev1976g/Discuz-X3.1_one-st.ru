<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_close.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'close_name' => 'Закрыть тему',
	'close_desc' => 'Закрытие темы',
	'close_expiration' => 'Период для закрытия',
	'close_expiration_comment' => 'Установка периода действия, по умолчанию 24 часа',
	'close_forum' => 'Разрешить использовать реквизит',
	'close_info' => 'Срок действия:  {expiration}, укажите ID',
	'close_info_nonexistence' => 'Укажите тему',
	'close_succeed' => 'Тема закрыта',
	'close_info_noperm' => 'Извините, не разрешается использовать форум где уже используется реквизит',
	'close_info_user_noperm' => 'Извините, вы не можете использовать реквизит для этого человека',

	'close_notification' => 'В вашей теме {subject} {actor} использовал {magicname}, <a href="forum.php?mod=viewthread&tid={tid}">Посмотреть!</a>',
);

?>