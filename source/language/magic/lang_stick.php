<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_stick.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'stick_name' => 'Скрепка',
	'stick_desc' => 'Прикрепление темы в верхней части списка тем',
	'stick_expiration' => 'Период действия',
	'stick_expiration_comment' => 'Укажите период времени, в течение которого тема должна быть прикреплена, по умолчанию 24 часа',
	'stick_forum' => 'Разрешено использование в разделах',
	'stick_info' => 'Для прикрепления темы на {expiration}, укажите ID темы',
	'stick_info_nonexistence' => 'Укажите ID темы',
	'stick_succeed' => 'Тема успешно прикреплена!',
	'stick_info_noperm' => 'В данном разделее использование этого реквизита запрещено',

	'stick_notification' => '{actor} использовал реквизит &quot;{magicname}&quot; для прикрепления темы &quot;<a href="forum.php?mod=viewthread&tid={tid}">{subject}</a>&quot;',
);

?>