<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_notification.php 33824 2013-08-19 08:26:11Z nemohou $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'type_wall' => 'Стена',
	'type_piccomment' => 'Ответы на изображения',
	'type_blogcomment' => 'Комментарии блога',
	'type_clickblog' => 'Создать блог',
	'type_clickarticle' => 'Создать статью',
	'type_clickpic' => 'Создать фото',
	'type_sharecomment' => 'Комментарии к закладкам',
	'type_doing' => 'Статус',
	'type_friend' => 'Друзья',
	'type_credit' => 'Баллы',
	'type_bbs' => 'Форум',
	'type_system' => 'Система',
	'type_thread' => 'Темы',
	'type_task' => 'Задачи',
	'type_group' => 'Группы',

	'mail_to_user' => 'Новое уведомление',
	'showcredit' => '{actor} отправил Вам {credit} балл(-ов) для поднятия рейтинга <a href="misc.php?mod=ranklist&type=member" target="_blank"> Список рейтинга</a> ',
	'share_space' => 'Пользователь {actor} получил дополнительный объем места на сайте!',
	'share_blog' => '{actor} отправил блог <a href="{url}" target="_blank">{subject}</a> в закладки',
	'share_album' => '{actor} отпправил альбом <a href="{url}" target="_blank">{albumname}</a> в закладки',
	'share_pic' => '{actor} отправил фотографию из альбома {albumname} в закладки. <a href="{url}" target="_blank"> Смотреть</a>',
	'share_thread' => '{actor} отправил тему <a href="{url}" target="_blank">{subject}</a> в закладки',
	'share_article' => '{actor} отправил статью <a href="{url}" target="_blank">{subject}</a> в закладки',
	'magic_present_note' => 'Вам подарен реквизит <a href="{url}" target="_blank">{name}</a>',
	'friend_add' => 'Поздравляем! Пользователь {actor} стал Вашим другом!',
	'friend_request' => '{actor} хочет стать Вашим другом. {note}&nbsp;&nbsp;<a onclick="showWindow(this.id, this.href, \'get\', 0);" class="xw1" id="afr_{uid}" href="{url}">Принять дружбу</a>',
	'doing_reply' => '{actor} ответил на Ваш статус. <a href="{url}" target="_blank">Посмотреть</a>',
	'wall_reply' => '{actor} ответил на Вашей стене. <a href="{url}" target="_blank">Посмотреть</a>',
	'pic_comment_reply' => '{actor} ответил на Ваш комментарий. <a href="{url}" target="_blank">Посмотреть</a>',
	'blog_comment_reply' => '{actor} ответил на Ваш комментарий в блоге. <a href="{url}" target="_blank">Посмотреть</a>',
	'share_comment_reply' => '{actor} ответил на Ваш комментарий в закладках. <a href="{url}" target="_blank">Посмотреть</a>',
	'wall' => '{actor} написал на Вашей стене. <a href="{url}" target="_blank">Посмотреть</a>',
	'pic_comment' => '{actor} прокомментировал Ваше фото. <a href="{url}" target="_blank">Посмотреть</a>',
	'blog_comment' => '{actor} прокомментировал Ваш блог. <a href="{url}" target="_blank">{subject}</a>',
	'share_comment' => '{actor} прокомментировал Ваши закладки. <a href="{url}" target="_blank">Посмотреть</a>',
	'click_blog' => '{actor} оставил клик в Вашем блоге. <a href="{url}" target="_blank">{subject}</a>',
	'click_pic' => '{actor} оставил клик на Вашей фотографии. <a href="{url}" target="_blank">Посмотреть</a>',
	'click_article' => '{actor} оставил клик в Вашей статье. <a href="{url}" target="_blank">{subject}</a>',
	'show_out' => '{actor} посетил Ваш сайт. За посещение Вам начислены бонусы',
	'puse_article' => 'Поздравляем, Ваша статья <a href="{url}" target="_blank">{subject}</a> добавлена! <a href="{newurl}" target="_blank">Открыть</a>',

	'myinvite_request' => 'Ожидают новые сообщения в приложениях <a href="home.php?mod=space&do=notice&view=userapp" target="_blank">Перейти</a>',


	'group_member_join' => '{actor} оставил запрос на вступление в группу <a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a>. Для просмотра перейдите по ссылке  <a href="{url}" target="_blank">Посмотреть</a>',
	'group_member_invite' => '{actor} пригласил Вас присоединиться к группе <a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a>. <a href="{url}" target="_blank">Присоединиться к группе</a>',
	'group_member_check' => 'Ваша заявка принята на рассмотрение <a href="{url}" target="_blank">{groupname}</a>. <a href="{url}" target="_blank">Посетить</a>',
	'group_member_check_failed' => 'Ваша заявка на вступление в группу <a href="{url}" target="_blank">{groupname}</a> отклонена',
	'group_mod_check' => 'Созданная вами группа <a href="{url}" target="_blank">{groupname}</a> была одобрена, пожалуйста <a href="{url}" target="_blank">нажмите здесь, чтобы посетить</a>',

	'reason_moderate' => 'Ваша тема <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была назначена новая {modaction}. Выполнил: {actor} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_merge' => 'Ваш вопрос <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> рассмотрел {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_post' => 'Ваше сообщение <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> было удалено {actor} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_comment' => 'Ваш комментарий <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> был удален {actor} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_ban_post' => 'Ваше сообщение <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> было забанено {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_warn_post' => '{modaction}! Имеются замечание к Вашему сообщению <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> <br />
При получении {warninglimit} предупреждений, в течении {warningexpiration} дней, вам будет запрещено отправлять сообщения на протяжении {warningexpiration} дней.<br />
Вы были предупреждены: {authorwarnings} раз(-а)! Выполнил: {actor}<div class="quote"><blockquote>{reason}</blockquote></div>',

    'reason_move' => 'Ваша тема <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была перемещена {actor} <a href="forum.php?mod=forumdisplay&fid={tofid}" target="_blank">{toname}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_copy' => 'Ваша тема <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была скопирована {actor} <a href="forum.php?mod=viewthread&tid={threadid}" target="_blank">{subject}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_remove_reward' => 'Ваша награда в теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была отозвана {actor}  <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_update' => 'Вашей теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> был добавлен штамп {stamp}. Штамп добавил {actor}  <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_delete' => 'С Вашей темы <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> был снят штамп. Штамп снял {actor} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_update' => 'Вашей теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была добавлена {actor} иконка {stamp} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_delete' => 'С Вашей темы <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была удалена {actor} иконка <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickreply' => 'В теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ответы были закреплены проверяющим  {actor} в топе <div class="quote"><blockquote>{reason}</blockquote></div>',

    'reason_stickdeletereply' => 'В теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> были сняты проверяющим {actor} с топа <div class="quote"><blockquote>{reason}</blockquote></div>',

    'reason_quickclear' => 'Ваш {cleartype} был удален {actor} <div class="quote"><blockquote>{reason}</blockquote></div>', 

	'reason_live_update' => 'Ваша тема <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была {actor} установлена на трансляцию наклейки <div class="quote"><blockquote>{reason}</blockquote></div>',
	'reason_live_cancle' => 'Ваша тема <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> была {actor} снята с трансляции <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modthreads_delete' => 'Ваша тема {threadsubject} не прошла модерацию и была удалена!',

	'modthreads_delete_reason' => 'Ваша тема {threadsubject} не прошла модерацию и была удалена! <div class="quote"><blockquote>{reason}</blockquote></div>',
	'modthreads_validate' => 'Ваша тема <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{threadsubject}</a> Была проверена и опубликована! &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modreplies_delete' => 'Ответ не прошел модерацию и был удален! <p class="summary">Ваш ответ: <span>{post}</span></p> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modreplies_validate' => 'Ваш ответ был проверен и опубликован! &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a> <p class="summary">Ваш ответ: <span>{post}</span></p> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'transfer' => 'Вы получили от {actor} {credit} баллов &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=log&suboperation=creditslog" target="_blank" class="lit">Открыть &rsaquo;</a>
<p class="summary">{actor} Он сообщил: <span>{transfermessage}</span></p>',

	'addfunds' => 'Запрос на пополнение баллов выполнен успешно! Баллы были зачислены на Ваш счет. &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">Открыть &rsaquo;</a>
<p class="summary">Номер заказа: <span>{orderid}</span></p><p class="summary">Комиссия: <span>{price} рублей</span></p><p class="summary">Чистый доход: <span>{value}</span></p>',

	'rate_reason' => 'За тему <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> пользователь {actor} добавил Вам рейтинг: {ratescore} и передал Вам сообщение: <div class="quote"><blockquote>{reason}</blockquote></div>.',

	'recommend_note_post' => 'Поздравляем! Ваше сообщение <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> было рекомендовано',

	'rate_removereason' => '{actor} снял рейтинговые очки за тему <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> Оценка в рейтинге: {ratescore} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'trade_seller_send' => '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> оплатил товар <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> и ожидает от Вас его доставки &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'trade_buyer_confirm' => 'Вы купили товар <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>, <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> ожидает от Вас подтверждения о получении &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'trade_fefund_success' => 'Товар <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> был возвращен &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Перейти &rsaquo;</a>',

	'trade_success' => 'Товар <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> успешно продан &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Оценить &rsaquo;</a>',

	'trade_order_update_sellerid' => 'Продавец <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> изменил товар <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>. Убедитесь, что все условия сделки Вас устраивают &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'trade_order_update_buyerid' => 'Покупатель <a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> заказал у Вас товар: <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>. Проверить заказ &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'eccredit' => 'Вашу сделку оценил {actor} &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Посмотреть &rsaquo;</a>',

	'activity_notice' => '{actor} присоединиться к Вашему событию <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'activity_apply' => 'Вы были утверждены для участия в мероприятии <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>. Утвердил {actor} &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_replenish' => '{actor} посоветовал вам заполнить в мероприятии <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> информацию в полном объеме  &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_delete' => '{actor} отказал вам в участии мероприятия <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">Открыть &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_cancel' => '{actor} отменил мероприятие <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">Открыть &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_notification' => '{actor} отправил уведомление на мероприятие <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a> <div class="quote"><blockquote>{msg}</blockquote></div>',

	'reward_question' => 'Вы получили награду от {actor} за лучший вопрос в теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'reward_bestanswer' => 'Вы получили награду от {actor} за лучший ответ в теме <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'reward_bestanswer_moderator' => 'Награда за тему <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>. Выбран лучший ответ в теме  &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'comment_add' => '{actor} прокомментировал Ваше сообщение  <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a>',

	'reppost_noticeauthor' => '{actor} ответил на Ваши сообщения <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">Открыть</a>',

	'task_reward_credit' => 'Поздравляем Вас с выполненной задачей: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>. Вы получили награду: {creditbonus} &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">Открыть мой баланс &rsaquo;</a></p>',

	'task_reward_magic' => 'Поздравляем Вас с выполненной задачей: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>. Вы получили реквизит: <a href="home.php?mod=magic&action=mybox" target="_blank">{rewardtext}</a> на {bonus} дн.',

	'task_reward_medal' => 'Поздравляем Вас с выполненной задачей: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>. Вы получили медаль: <a href="home.php?mod=medal" target="_blank">{rewardtext}</a><a href="home.php?mod=medal" target="_blank">{rewardtext}</a> на {bonus} дн.',

	'task_reward_medal_forever' => 'Поздравляем с завершением задачи:<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Награждение медалями <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> постоянно',

	'task_reward_invite' => 'Поздравляем Вас с выполненной задачей: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>. Вы получили код приглашения: <a href="home.php?mod=spacecp&ac=invite" target="_blank">Одно приглашение {rewardtext}</a> на {bonus} дн.',

	'task_reward_group' => 'Поздравляем Вас с выполненной задачей: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>. Получено награждение группы: {rewardtext} на {bonus} дн. &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">Посмотреть &rsaquo;</a>',

	'user_usergroup' => 'Уровень Вашей группы изменен на {usergroup} &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">Посмотреть &rsaquo;</a>',

	'grouplevel_update' => 'Поздравляем! Уровень Вашей группы {groupname} был повышен до: {newlevel}',

	'thread_invite' => '{actor} приглашает Вас {invitename} <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">Открыть &rsaquo;</a>',
	'blog_invite' => '{actor} приглашает Вас посмотреть блог <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a> &nbsp; <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank" class="lit">Посмотреть &rsaquo;</a>',
	'article_invite' => '{actor} приглашает Вас посмотреть публикацию <a href="{url}" target="_blank">{subject}</a> &nbsp; <a href="{url}" target="_blank" class="lit">Посмотреть &rsaquo;</a>',
	'invite_friend' => 'Поздравляем! {actor} стал Вашим другом',

	'poke_request' => '<a href="{fromurl}" class="xi2">{fromusername}</a>: <span class="xw0">{pokemsg}&nbsp;</span><a href="home.php?mod=spacecp&ac=poke&op=reply&uid={fromuid}&from=notice" id="a_p_r_{fromuid}" class="xw1" onclick="showWindow(this.id, this.href, \'get\', 0);">Отправить привет </a><span class="pipe">|</span><a href="home.php?mod=spacecp&ac=poke&op=ignore&uid={fromuid}&from=notice" id="a_p_i_{fromuid}" onclick="showWindow(\'pokeignore\', this.href, \'get\', 0);"> Отклонить</a>',

	'profile_verify_error' => 'Отправленные Вами данные "{verify}" не прошли проверку и были отклонены!<br />Проверьте правильность заполнения следующих полей:<br/>{profile}<br/>Причина отказа: {reason}',
	'profile_verify_pass' => 'Поздравляем! Вы прошли проверку "{verify}", Ваши данные утверждены!',
	'profile_verify_pass_refusal' => 'Извините, но Вы указанная Вами информация "{verify}" не прошла проверку!',
	'member_ban_speak' => 'Уважаемый, {user}! Вам установлен запрет на разговор (запрет публикаций и размещение материалов на сайте), на период: {day} дн. P.S. Если указано значении "0 дн.", значит пожизненный запрет (вечный кляп).<br />Причина: {reason}.',
	'member_ban_visit' => 'Вы были заблокированы {user} на период: {day} дн. (0 означает постоянный запрет), причина блокировки: {reason}',
	'member_ban_status' => 'Вы были заблокированы {user} причина блокировки:{reason}',
	'member_follow' => 'Есть {count} новые сообщения, от людей, которыми вы интересуетесь. <a href="home.php?mod=follow">Нажмите для просмотра</a>',
	'member_follow_add' => '{actor} подписался на вас <a href="home.php?mod=follow&do=follower">Нажмите для просмотра</a>',

	'member_moderate_invalidate' => 'Относительно проверки Вашей учетной записи: <a href="home.php?mod=spacecp&ac=profile">отправьте, пожалуйста еще раз Ваши данные</a>.<br />Сообщение администратора: <b>{remark}</b>',
	'member_moderate_validate' => 'Поздравляем! Ваша учетная запись была одобрена.<br />Сообщение администратора: <b>{remark}</b>',
	'member_moderate_invalidate_no_remark' => 'Относительно проверки Вашей учетной записи: <a href="home.php?mod=spacecp&ac=profile">заполните Ваши данные</a>',
	'member_moderate_validate_no_remark' => 'Поздравляем, Ваша учетная запись успешно прошла модерацию',
	'manage_verifythread' => 'Ожидают новые темы  <a href="admin.php?action=moderate&operation=threads&dateline=all">Перейти</a>',
	'manage_verifypost' => 'Ожидают новые сообщения <a href="admin.php?action=moderate&operation=replies&dateline=all">Перейти</a>',
	'manage_verifyuser' => 'Ожидают новые пользователи <a href="admin.php?action=moderate&operation=members">Перейти</a>',
	'manage_verifyblog' => 'Ожидают новые блоги<a href="admin.php?action=moderate&operation=blogs">Перейти</a>',
	'manage_verifydoing' => 'Ожидают новые статусы<a href="admin.php?action=moderate&operation=doings">Перейти</a>',
	'manage_verifypic' => 'Ожидают новые изображения <a href="admin.php?action=moderate&operation=pictures">Перейти</a>',
	'manage_verifyshare' => 'Ожидают новые закладки <a href="admin.php?action=moderate&operation=shares">Перейти</a>',
	'manage_verifycommontes' => 'Ожидают новые сообщения/комментарии <a href="admin.php?action=moderate&operation=comments">Перейти</a>',
	'manage_verifyrecycle' => 'В корзине новые темы <a href="admin.php?action=recyclebin">Перейти</a>',
	'manage_verifyrecyclepost' => 'В корзине новые сообщения <a href="admin.php?action=recyclebinpost">Перейти</a>',
	'manage_verifyarticle' => 'Ожидают новые статьи <a href="admin.php?action=moderate&operation=articles">Перейти</a>',
	'manage_verifymedal' => 'Ожидают новые медали <a href="admin.php?action=medals&operation=mod">Перейти</a>',
	'manage_verifyacommont' => 'Ожидают новые комментарии на статьи <a href="admin.php?action=moderate&operation=articlecomments">Перейти</a>',
	'manage_verifytopiccommont' => 'Ожидают новые комментарии тем <a href="admin.php?action=moderate&operation=topiccomments">Перейти</a>',
	'manage_verify_field' => 'На проверку отправлен запрос  "{verifyname}" <a href="admin.php?action=verify&operation=verify&do={doid}">Перейти</a>',
	'system_notice' => '{subject}<p class="summary">{message}</p>',
	'system_adv_expiration' => 'Заканчивается срок размещений объявлений! Осталось: {day} до окончания：<br />{advs}',
	'report_change_credits' => '{actor} пересмотрел Ваш отчет {creditchange}',
	'at_message' => '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> в теме <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> упоминается ваше имя <div class="quote"><blockquote>{message}</blockquote></div><a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">Смотреть</a>.',
	'new_report' => 'Есть новые жалобы, ожидающие обработки <a href="admin.php?action=report" target="_blank">посмотреть</a>?',
	'new_post_report' => 'Ожидают новые отчеты <a href="forum.php?mod=modcp&action=report&fid={fid}" target="_blank">Перейти в панель администрирования отчетов</a>',
	'magics_receive' => '{actor} подарил Вам реквизит {magicname}!
<p class="summary">{actor} ... и сообщил: <span>{msg}</span></p>
<p class="mbn"><a href="home.php?mod=magic" target="_blank">Все реквизиты</a><span class="pipe">|</span><a href="home.php?mod=magic&action=mybox" target="_blank">Мой реквизит</a></p>',
	'invite_collection' => '{actor} приглашает Вас присоединиться к коллекции <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>.<br /> <a href="forum.php?mod=collection&action=edit&op=acceptinvite&ctid={ctid}&dateline={dateline}">Принять приглашение</a>',
	'collection_removed' => 'Ваше участие в команде коллекции  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> было отменено {actor}.',
	'exit_collection' => 'Вы успешно вышли из команды коллекции <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>.',
	'collection_becommented' => 'Ваша коллекция  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> получила новый комментарий.',
	'collection_befollowed' => 'У вашей коллекции  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> новые подписчики',
	'collection_becollected' => 'Поздравляем ваша тема <a href="forum.php?mod=viewthread&tid={tid}">{threadname}</a> была добавлена в коллекцию  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>!',

	'pmreportcontent' => '{pmreportcontent}',

	'thread_hidden' => 'Ваши результаты <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Несколько пользователей были определены как спам, была скрыта &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit"> &rsaquo;</a>',

);

?>
