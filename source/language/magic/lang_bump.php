<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_bump.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'bump_name'		=> 'Домкрат',
	'bump_forum'		=> 'Разрешенные форумы',
	'bump_desc'		=> 'Поднимает указанную тему',
	'bump_info'		=> 'Для поднятия темы введите её ID',
	'bump_info_nonexistence'	=> 'Пожалуйста, введите ID темы',
	'bump_succeed'		=> 'Тема была успешно поднята',
	'bump_info_noperm'	=> 'В данном разделе запрещено использование этого реквизита',

	'bump_notification'	=> '{actor} использовал реквизит &quot;{magicname}&quot; для поднятия темы &quot;<a href="forum.php?mod=viewthread&tid={tid}">{subject}</a>&quot;',
);

?>