<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_jack.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'jack_name' => 'Топинатор',
	'jack_desc' => 'Поднятие темы в топ на указанное время. реквизит может использоваться повторно.',
	'jack_expiration' => 'Период в топе',
	'jack_expiration_comment' => 'Укажите период времени для размещения темы в топе, по умолчанию 1 час',
	'jack_forum' => 'Разрешено использовать в форумах',
	'jack_info' => '<p class="mtn xw0 mbn">Поднятие указанной темы в топ на <span class="xi1 xw1 xs2">{expiration}</span> час.</p><p class="mtn xw0 mbn">реквизит можно использовать <span class="xi1 xw1 xs2">{magicnum}</span> раз.</p>',
	'jack_num' => 'Использование, раз:',
	'jack_num_not_enough' => 'Недостаточное количество или не заполнено количество для использования!',
	'jack_info_nonexistence' => 'Укажите тему для поднятия в топ',
	'jack_succeed' => 'Тема успешно поднята в топ!',
	'jack_info_noperm' => 'В данном разделе запрещено использование этого реквизита!',

	'jack_notification' => '{actor} использовал реквизит &quot;{magicname}&quot; для поднятия в топ темы &quot;<a href="forum.php?mod=viewthread&tid={tid}">{subject}</a>&quot;',
);

?>