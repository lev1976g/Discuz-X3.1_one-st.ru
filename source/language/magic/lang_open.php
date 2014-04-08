<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_open.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'open_name' => 'Рупор',
	'open_desc' => 'Разрешает ответы в закрытой теме',
	'open_forum' => 'Разрешено использовать в разделах',
	'open_info' => 'Введите ID темы',
	'open_info_nonexistence' => 'Укажите тему для открытия',
	'open_succeed' => 'Тема успешно открыта, Вы можете ответить в ней',
	'open_info_noperm' => 'В данном разделе запрещено использование этого реквизита',
	'open_info_user_noperm' => 'У Вас нет прав на использование магии',

	'open_notification' => 'В Вашей теме {subject} {actor} использовал реквизит {magicname}, <a href="forum.php?mod=viewthread&tid={tid}">Посмотреть!</a>',
);

?>