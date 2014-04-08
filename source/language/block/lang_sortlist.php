<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_sortlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'sortlist_fids' => 'Форум',
	'sortlist_fids_comment' => 'Вы можете выбрать несколько значений, удерживая клавишу CTRL. Если ничего не выбрано - без ограничений',
	'sortlist_startrow' => 'Первоначальное количество строк',
	'sortlist_startrow_comment' => 'Чтобы задать начальное количество строк, введите значения. Например: 0, чтобы начать с первой линии и так далее...',
	'sortlist_showitems' => 'Показ количества статей',
	'sortlist_showitems_comment' => 'Показ количества статей. Укажите число больше 0',
	'sortlist_titlelength' => 'Максимальное количество байт в названии',
	'sortlist_titlelength_comment' => 'Настройка длинны символов заголовка. Если заголовок больше указанного значения, длинна названия будет автоматически урезана до указанного значения. Если - 0, не урезать',
	'sortlist_fnamelength' => 'Название форума содержит максимальное количество байт',
	'sortlist_fnamelength_comment' => 'Укажите необходимые значения',
	'sortlist_summarylength' => 'Анонс (краткое содержание) темы',
	'sortlist_summarylength_comment' => 'Установить значение для текста, используйте значение по умолчанию от 0 до 255',
	'sortlist_tids' => 'Указание тем',
	'sortlist_tids_comment' => 'Укажите tid тем, если несколько tid укажите их через запятую. Оставьте пустым, чтобы использовать без фильтра',
	'sortlist_keyword' => 'Ключевое слово заглавия',
	'sortlist_keyword_comment' => 'Задать ключевые слова для заголовка. Оставьте пустым, чтобы использовать без фильтра. В ключевых слова можно использовать символ: *',
	'sortlist_typeids' => 'Категории тем',
	'sortlist_typeids_comment' => 'Установите категории для тем. Оставьте пустым, чтобы использовать без фильтра',
	'sortlist_typeids_all' => 'Все категории тем',
	'sortlist_sortids' => 'Информация о категории',
	'sortlist_sortids_comment' => 'Установить тему секретной информации. Оставьте пустым, чтобы использовать без фильтра',
	'sortlist_sortids_all' => 'Все',
	'sortlist_digest' => 'Дайджест тем',
	'sortlist_digest_comment' => 'Установите конкретную предметную область. Примечание: Оставьте пустым, чтобы использовать без фильтра',
	'sortlist_digest_0' => 'Общие темы',
	'sortlist_digest_1' => 'Дайджест I',
	'sortlist_digest_2' => 'Дайджест II',
	'sortlist_digest_3' => 'Дайджест III',
	'sortlist_stick' => 'Важная тема',
	'sortlist_stick_comment' => 'Установите конкретную предметную область. Примечание: Оставьте пустым, чтобы использовать без фильтра',
	'sortlist_stick_0' => 'Общие темы',
	'sortlist_stick_1' => 'Топ I',
	'sortlist_stick_2' => 'Топ II',
	'sortlist_stick_3' => 'Топ III',
	'sortlist_special' => 'Специальные темы',
	'sortlist_special_comment' => 'Установите конкретную предметную область. Примечание: Оставьте пустым, чтобы использовать без фильтра',
	'sortlist_special_1' => 'Темы опросов',
	'sortlist_special_2' => 'Темы товаров',
	'sortlist_special_3' => 'Темы платные',
	'sortlist_special_4' => 'Темы событий',
	'sortlist_special_5' => 'Темы поединков',
	'sortlist_special_0' => 'Все темы',
	'sortlist_special_reward' => 'Фильтр тем наград',
	'sortlist_special_reward_comment' => 'Установить для темы определенный тип награды',
	'sortlist_special_reward_0' => 'Все',
	'sortlist_special_reward_1' => 'Выданные',
	'sortlist_special_reward_2' => 'Не выданные',
	'sortlist_recommend' => 'Фильтр рекомендуемых тем',
	'sortlist_recommend_comment' => 'Укажите параметры рекомендуемых тем',
	'sortlist_orderby' => 'Сортировка тем',
	'sortlist_orderby_comment' => 'Настройка фильтра сортировки',
	'sortlist_orderby_lastpost' => 'По дате создания',
	'sortlist_orderby_dateline' => 'По дате сроку действия',
	'sortlist_orderby_replies' => 'По числу ответов',
	'sortlist_orderby_views' => 'По просмотрам',
	'sortlist_orderby_heats' => 'По популярности',
	'sortlist_orderby_recommends' => 'По рекомендациям',
	'sortlist_lastpost' => 'Опубликовано тем',
	'sortlist_lastpost_nolimit' => 'Без ограничений',
	'sortlist_lastpost_hour' => 'В течении часа',
	'sortlist_lastpost_day' => 'В течении суток',
	'sortlist_lastpost_week' => 'За неделю',
	'sortlist_lastpost_month' => 'За месяц',
	'sortlist_orderby_hours_comment' => 'Просмотров в течение указанного времени',
);

?>