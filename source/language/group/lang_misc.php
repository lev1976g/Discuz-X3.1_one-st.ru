<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'group_normal_member'		=> 'Перевести в обычных членов',
	'group_goaway'			=> 'Исключить из сообщества',
	'group_demise_message_title' => "Пользователь {$_G[setting][navs][3][navname]}{forum} успешно перешел к вам",
	'group_demise_message_body' => "Мои {$_G[setting][navs][3][navname]}{forum} успешно переходят к Вам, [url={siteurl}forum.php?mod=group&fid={fid}]нажмите здесь, чтобы посмотреть {$_G[setting][navs][3][navname]}[/url]",
	'group_join' => ' Вступить в группу {groupname}',
);

?>