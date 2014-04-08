<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'threadlist_fids' => 'Форум',
	'threadlist_fids_comment' => 'Вы можете выбрать несколько значений, удерживая клавишу CTRL. Если ничего не выбрано - без ограничений',
	'threadlist_uids' => 'UID пользователя',
	'threadlist_uids_comment' => 'Для нескольких значений, используйте запятую с пробелом',
	'threadlist_startrow' => 'Первоначальное количество строк',
	'threadlist_startrow_comment' => 'Чтобы задать начальное количество строк, введите значения. Например: 0, чтобы начать с первой линии и так далее...',
	'threadlist_items' => 'Отображение количества записей в статьях',
	'threadlist_items_comment' => 'Отображение количества записей в статьях. Установите целое число, больше 0',
	'threadlist_titlelength' => 'Максимальное количество байт в названии',
	'threadlist_titlelength_comment' => 'Настройка длинны символов заголовка. Если заголовок больше указанного значения, длинна названия будет автоматически урезана до указанного значения. Если - 0, не урезать',
	'threadlist_fnamelength' => 'Название форума содержит максимальное количество байт',
	'threadlist_fnamelength_comment' => 'Укажите необходимые значения',
	'threadlist_summarylength' => 'Анонс (краткое содержание) темы',
	'threadlist_summarylength_comment' => 'Установить значение для текста, используйте значение по умолчанию от 0 до 255',
	'threadlist_tids' => 'Указание тем',
	'threadlist_tids_comment' => 'Укажите tid тем, если несколько tid укажите их через запятую. Оставьте пустым, чтобы использовать без фильтра',
	'threadlist_keyword' => 'Ключевое слово заглавия',
	'threadlist_keyword_comment' => 'Задать ключевые слова для заголовка. Оставьте пустым, чтобы использовать без фильтра. В ключевых слова можно использовать символ: *',
	'threadlist_tagkeyword' => 'Теги',
    'threadlist_tagkeyword_comment' => 'Ключевые слова (TAG теги). Примечание: Оставьте пустым если не хотите использовать фильтрации. В ключевых словах можно использовать символы *, соответствующие одному или нескольким ключевым словам. Также могут быть использованы | или OR, как для  Win32, так и для UNIX',
	'threadlist_typeids' => 'Категории тем',
	'threadlist_typeids_comment' => 'Установите категории для тем. Оставьте пустым, чтобы использовать без фильтра',
	'threadlist_typeids_all' => 'Все категории тем',
	'threadlist_sortids' => 'Информация о категории',
	'threadlist_sortids_comment' => 'Установить тему секретной информации. Оставьте пустым, чтобы использовать без фильтра',
	'threadlist_sortids_all' => 'Все',
	'threadlist_digest' => 'Дайджест тем',
	'threadlist_digest_comment' => 'Установите конкретную предметную область. Примечание: Оставьте пустым, чтобы использовать без фильтра',
	'threadlist_digest_0' => 'Общие темы',
	'threadlist_digest_1' => 'Дайджест I',
	'threadlist_digest_2' => 'Дайджест II',
	'threadlist_digest_3' => 'Дайджест III',
	'threadlist_stick' => 'Важная тема',
	'threadlist_stick_comment' => 'Установите конкретную предметную область. Примечание: Оставьте пустым, чтобы использовать без фильтра',
	'threadlist_stick_0' => 'Общие темы',
	'threadlist_stick_1' => 'Топ I',
	'threadlist_stick_2' => 'Топ II',
	'threadlist_stick_3' => 'Топ III',
	'threadlist_special' => 'Специальные темы',
	'threadlist_special_comment' => 'Установите конкретную предметную область. Примечание: Оставьте пустым, чтобы использовать без фильтра',
	'threadlist_special_1' => 'Темы опросов',
	'threadlist_special_2' => 'Темы товаров',
	'threadlist_special_3' => 'Темы платные',
	'threadlist_special_4' => 'Темы событий',
	'threadlist_special_5' => 'Темы поединков',
	'threadlist_special_0' => 'Все темы',
	'threadlist_special_reward' => 'Фильтр тем наград',
	'threadlist_special_reward_comment' => 'Установить для темы определенный тип награды',
	'threadlist_special_reward_0' => 'Все',
	'threadlist_special_reward_1' => 'Выданные',
	'threadlist_special_reward_2' => 'Не выданные',
	'threadlist_recommend' => 'Фильтр рекомендуемых тем',
	'threadlist_viewmod' => 'Режим просмотра статей',
	'threadlist_recommend_comment' => 'Укажите параметры рекомендуемых тем',
	'threadlist_picrequired' => 'Включение изображений',
	'threadlist_picrequired_comment' => 'Установить показ изображений',
	'threadlist_orderby' => 'Сортировка тем',
	'threadlist_orderby_comment' => 'Настройка фильтра сортировки',
	'threadlist_orderby_lastpost' => 'По дате создания',
	'threadlist_orderby_dateline' => 'По дате сроку действия',
	'threadlist_orderby_replies' => 'По числу ответов',
	'threadlist_orderby_views' => 'По просмотрам',
	'threadlist_orderby_heats' => 'По популярности',
	'threadlist_orderby_recommends' => 'По рекомендациям',
	'threadlist_orderby_hourviews' => 'По просмотрам в течении часа',
	'threadlist_orderby_todayviews' => 'По просмотрам в течении дня',
	'threadlist_orderby_weekviews' => 'По просмотрам в течении недели',
	'threadlist_orderby_monthviews' => 'По просмотрам в течении месяца',
	'threadlist_orderby_hours' => 'По заданному времени (по часам)',
	'threadlist_orderby_hours_comment' => 'Просмотр в течение указанного времени',
	'threadlist_orderby_todayhots' => 'Общее количество продаж за сегодня',
	'threadlist_orderby_weekhots' => 'Общее количество продаж за неделю',
	'threadlist_orderby_monthhots' => 'Общее количество продаж за месяц',
	'threadlist_lastpost' => 'Последнее обновление',
	'threadlist_postdateline' => 'Опубликованные темы',
    'threadlist_postdateline_nolimit' => 'Без лимита',
    'threadlist_postdateline_hour' => '1 час',
    'threadlist_postdateline_day' => 'Сутки',
    'threadlist_postdateline_week' => 'Неделя',
    'threadlist_postdateline_month' => '1 мес.',
	'threadlist_lastpost_nolimit' => 'Без ограничений',
	'threadlist_lastpost_hour' => 'За час',
	'threadlist_lastpost_day' => 'За сутки',
	'threadlist_lastpost_week' => 'За неделю',
	'threadlist_lastpost_month' => 'За месяц',
	'threadlist_price_add' => ' Дополнительно ',
	'threadlist_place' => 'Место события',
	'threadlist_class' => 'Тип события',
	'threadlist_gender' => 'Пол',
	'threadlist_gender_0' => 'Неизвестно',
	'threadlist_gender_1' => 'муж',
	'threadlist_gender_2' => 'жен',
	'threadlist_orderby_weekstart' => 'Начало события за неделю',
	'threadlist_orderby_monthstart' => 'Начало события за месяц',
	'threadlist_orderby_weekexp' => 'Окончание приема заявок за неделю',
	'threadlist_orderby_monthexp' => 'Окончание приема заявок за месяц',
    'threadlist_highlight' => 'Выделить значение',
);

?>