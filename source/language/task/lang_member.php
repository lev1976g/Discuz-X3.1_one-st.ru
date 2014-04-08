<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_member.php 29183 2012-03-28 06:39:26Z zhengqingpeng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'member_name' => 'Тип задачи для участника',
	'member_desc' => 'Любимые темы, использование реквизита. Данные задачи поощряют и завлекают участников для активного использования форума',
	'member_complete_var_act' => 'Действие',
	'member_complete_var_act_favorite' => 'Добавить тему',
	'member_complete_var_act_magic' => 'Использование реквизита',
	'member_complete_var_act_userapp' => 'Добавить роуминг',
	'member_complete_var_num' => 'Ограничения действий',
	'member_complete_var_num_comment' => 'Ограничить число исполняемых действий',
	'member_complete_var_time' => 'Лимит времени (часы)',
	'member_complete_var_time_comment' => 'Указание периода для выполнения этой задачи с применением временных ограничений. Если участник не выполнил задачу, он не имеет прав на получение наград. 0 или пустой - без ограничений',

	'task_complete_time_start' => 'Время запуска задачи приложения, ',
	'task_complete_time_limit' => 'Часы {value}, ',
	'task_complete_act_favorite' => 'Избранные темы {value}',
	'task_complete_act_magic' => 'Можно использовать реквизит {value} раз<br />Вы можете использовать реквизит в сообщения, в блог, в фотографии',
	'task_complete_act_userapp' => 'Добавить {value} роуминг',
);

?>