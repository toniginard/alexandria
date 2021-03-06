<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'forum', language 'ru', branch 'MOODLE_31_STABLE'
 *
 * @package   forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Имеются новые сообщения на форуме';
$string['addanewdiscussion'] = 'Добавить тему для обсуждения';
$string['addanewquestion'] = 'Добавить новый вопрос';
$string['addanewtopic'] = 'Добавить новую тему';
$string['advancedsearch'] = 'Расширенный поиск';
$string['allforums'] = 'Все форумы';
$string['allowdiscussions'] = 'Может ли {$a} участвовать в этом форуме?';
$string['allowsallsubscribe'] = 'В этом форуме каждый участник может выбрать, подписываться на него или нет';
$string['allowsdiscussions'] = 'В этом форуме каждый может создать одну тему для обсуждения.';
$string['allsubscribe'] = 'Подписаться на все форумы';
$string['allunsubscribe'] = 'Аннулировать подписку во всех форумах';
$string['alreadyfirstpost'] = 'Это первое сообщение в обсуждении';
$string['anyfile'] = 'Любой файл';
$string['areaattachment'] = 'Вложения';
$string['areapost'] = 'Сообщения';
$string['attachment'] = 'Вложение';
$string['attachment_help'] = 'Вы можете прикрепить один или более файлов к сообщению форума. Если вы прикрепите изображение, оно будет показано после текста сообщения.';
$string['attachmentnopost'] = 'Вы не можете экспортировать вложения при отсутствии ID сообщения';
$string['attachments'] = 'Вложения';
$string['attachmentswordcount'] = 'Подсчет вложений и слов';
$string['blockafter'] = 'Количество сообщений для блокирования';
$string['blockafter_help'] = 'Этот параметр определяет максимальное количество сообщений, которые пользователь может опубликовать за заданный период времени. Пользователи, которым дано право «mod/forum:postwithoutthrottling», не ограничены в количестве сообщений.';
$string['blockperiod'] = 'Временной период для блокирования';
$string['blockperioddisabled'] = 'Не блокировать';
$string['blockperiod_help'] = 'Можно запретить студентам размещать более заданного количества сообщений в форуме за заданный период времени. Пользователи, которым дано право «mod/forum:postwithoutthrottling», не ограничены в количестве сообщений.';
$string['blogforum'] = 'Стандартный форум отображается в формате, подобном блогу';
$string['bynameondate'] = 'от {$a->name} - {$a->date}';
$string['cannotadd'] = 'Невозможно добавить обсуждения на этом форуме';
$string['cannotadddiscussion'] = 'Нужно быть участником группы, чтобы добавлять обсуждения на этот форум.';
$string['cannotadddiscussionall'] = 'У вас нет привилегий для добавления новой темы обсуждения для всех участников.';
$string['cannotaddsubscriber'] = 'Невозможно добавить подписчика с ID {$a} на этот форум!';
$string['cannotaddteacherforumto'] = 'Не удалось добавить преобразованный экземпляр форума преподавателей в нулевой раздел курса';
$string['cannotcreatediscussion'] = 'Невозможно создать новое обсуждение';
$string['cannotcreateinstanceforteacher'] = 'Не удалось создать новый экземпляр форума преподавателей курса';
$string['cannotdeletepost'] = 'Вы не можете удалить это сообщение!';
$string['cannoteditposts'] = 'Вы не можете редактировать сообщения других людей!';
$string['cannotfinddiscussion'] = 'Не удалось найти обсуждения на этом форуме';
$string['cannotfindfirstpost'] = 'Не удалось найти первое сообщение в этом форуме';
$string['cannotfindorcreateforum'] = 'Не удается найти или создать основной новостной форум для сайта';
$string['cannotfindparentpost'] = 'Не удается найти родительское сообщение для {$a}';
$string['cannotmovefromsingleforum'] = 'Невозможно переместить обсуждение из форума «Простое одиночное обсуждение»';
$string['cannotmovenotvisible'] = 'Форум не видим';
$string['cannotmovetonotexist'] = 'Вы не можете перейти в тот форум - его не существует!';
$string['cannotmovetonotfound'] = 'Требуемый форум не найден в этом курсе.';
$string['cannotmovetosingleforum'] = 'Невозможно переместить обсуждение в форум «Простое одиночное обсуждение»';
$string['cannotpurgecachedrss'] = 'Не удалось очистить кэшированные RSS-ленты для форума(ов)-источника (и/или назначения) - проверьте права на файлы';
$string['cannotremovesubscriber'] = 'Не удается удалить подписчика с ID {$a} из этого форума!';
$string['cannotreply'] = 'Вы не можете отвечать на это сообщение';
$string['cannotsplit'] = 'Обсуждения в этом форуме не могут быть разделены';
$string['cannotsubscribe'] = 'Извините, но Вы должны быть участником группы, чтобы подписаться.';
$string['cannottrack'] = 'Невозможно прекратить отслеживание этого форума';
$string['cannotunsubscribe'] = 'Вы не можете отписаться от этого форума.';
$string['cannotupdatepost'] = 'Вы не можете обновлять это сообщение';
$string['cannotviewpostyet'] = 'Вы не можете смотреть вопросы других участников этого обсуждения, т.к. еще не разместили свой';
$string['cannotviewusersposts'] = 'Нет сообщений этого пользователя, которые Вы можете просмотреть.';
$string['cleanreadtime'] = 'Время отметки старых сообщений как прочитанных, час';
$string['clicktosubscribe'] = 'Вы не подписаны на это обсуждение. Нажмите, чтобы подписаться.';
$string['clicktounsubscribe'] = 'Вы подписаны на это обсуждение. Нажмите, чтобы отказаться от подписки.';
$string['completiondiscussions'] = 'Студент должен создать обсуждения:';
$string['completiondiscussionsgroup'] = 'Требуются обсуждения';
$string['completiondiscussionshelp'] = 'для завершения требуются обсуждений';
$string['completionposts'] = 'Студент должен внести обсуждений или ответов:';
$string['completionpostsgroup'] = 'Требуются сообщения';
$string['completionpostshelp'] = 'для завершения требуются  обсуждения или ответы';
$string['completionreplies'] = 'Студент должен внести ответов:';
$string['completionrepliesgroup'] = 'Требуются ответы';
$string['completionreplieshelp'] = 'для завершения требуются ответы';
$string['configcleanreadtime'] = 'Час удаления старых сообщений.';
$string['configdigestmailtime'] = 'Пользователи, которые выбрали рассылку почты в виде дайджеста, будут получать его ежедневно. Этот параметр устанавливает время рассылки (первый запущенный после указанного времени cron отошлет почту).';
$string['configdisplaymode'] = 'Используемый по умолчанию режим обсуждения.';
$string['configenablerssfeeds'] = 'Эта настройка позволить делать изменения в формате RSS для всех форумов. Вы должны будете вручную настроить это для каждого форума.';
$string['configenabletimedposts'] = 'Установите значение «да», если Вы хотите разрешить настройку периода отображения при создании нового обсуждения на форуме.';
$string['configlongpost'] = 'Сообщение превышающее этот размер (не включая теги HTML) считать длинным.';
$string['configmanydiscussions'] = 'Максимальное количество обсуждений, показываемое на одной странице';
$string['configmaxattachments'] = 'Максимальное разрешенное  количество вложений к сообщению по умолчанию.';
$string['configmaxbytes'] = 'Максимальный размер по умолчанию для всех вложений во всех форумах на этом сайте (соотносится с установленным в курсе ограничением и с другими локальными установками).';
$string['configoldpostdays'] = 'Количество дней, после которых любое сообщение отмечается как прочитанное.';
$string['configreplytouser'] = 'Должны ли сообщения форума содержать адреса отправителей, чтобы получатели могли ответить на них минуя форум?';
$string['configrssarticlesdefault'] = 'Если ленты RSS включены - задает количество статей (обсуждений или сообщений) по умолчанию.';
$string['configrsstypedefault'] = 'Если ленты RSS включены - задает тип элемента по умолчанию.';
$string['configshortpost'] = 'Сообщение меньше этого размера (не включая теги HTML) считать коротким.';
$string['configtrackingtype'] = 'Значение по умолчанию для отслеживания непрочитанных сообщений';
$string['configtrackreadposts'] = 'Выберите «да», если Вы хотите, чтобы каждый пользователь знал, какие сообщения им прочитаны, а какие - нет.';
$string['configusermarksread'] = 'Если «Да», то пользователь должен вручную указать, что сообщение прочитано.
Если «Нет», то сообщение считается прочитанным при просмотре.';
$string['confirmsubscribe'] = 'Вы действительно хотите подписаться на форум «{$a}»?';
$string['confirmsubscribediscussion'] = 'Вы действительно хотите подписаться на дискуссию {$a->discussion}" на форуме "{$a->forum}?';
$string['confirmunsubscribe'] = 'Вы действительно хотите отписаться от форума «{$a}»?';
$string['confirmunsubscribediscussion'] = 'Вы действительно хотите отписаться от обсуждения «{$a->discussion}» в форуме «{$a->forum}»?';
$string['couldnotadd'] = 'Сообщение не добавлено из-за неизвестной ошибки';
$string['couldnotdeletereplies'] = 'Удаление невозможно: на данное сообщение уже были ответы';
$string['couldnotupdate'] = 'Сообщение не обновлено из-за неизвестной ошибки';
$string['crontask'] = 'Рассылка сообщений форума и работы по обслуживанию';
$string['delete'] = 'Удалить';
$string['deleteddiscussion'] = 'Тема для обсуждения была удалена';
$string['deletedpost'] = 'Сообщение было удалено';
$string['deletedposts'] = 'Эти сообщения удалены';
$string['deletesure'] = 'Вы уверены, что хотите удалить это сообщение?';
$string['deletesureplural'] = 'Вы уверены, что хотите удалить это сообщение и все ответы на него? ({$a} сообщений)';
$string['digestmailheader'] = 'Это ежедневный обзор новых сообщений из форумов сайта «{$a->sitename}». Чтобы изменить настройки рассылки по умолчанию, пройдите по ссылке {$a->userprefs}.';
$string['digestmailpost'] = 'Изменить свои настройки дайджеста форума';
$string['digestmailpostlink'] = 'Изменить Ваши настройки дайджеста форума: {$a}';
$string['digestmailprefs'] = 'Ваша личная страница';
$string['digestmailsubject'] = '{$a}: дайджест форума';
$string['digestmailtime'] = 'Время рассылки дайджеста по почте';
$string['digestsentusers'] = 'Дайджесты успешно разосланы {$a} пользователям.';
$string['disallowsubscribe'] = 'Подписка запрещена';
$string['disallowsubscribeteacher'] = 'Подписка запрещена (исключая преподавателей)';
$string['disallowsubscription'] = 'Подписка';
$string['disallowsubscription_help'] = 'Этот форум настроен так, что Вы не можете подписаться на обсуждения.';
$string['discussion'] = 'Обсуждение';
$string['discussionmoved'] = 'Обсуждение перемещено в «{$a}»';
$string['discussionmovedpost'] = 'Это обсуждение перенесено <a href="{$a->discusshref}">сюда</a> в форум <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'Название обсуждения';
$string['discussionnownotsubscribed'] = '{$a->name} НЕ будет получать уведомления о новых сообщениях в обсуждении «{$a->discussion}» из форума «{$a->forum}»';
$string['discussionnowsubscribed'] = '{$a->name} будет получать уведомления о новых сообщениях в обсуждении «{$a->discussion}» из форума «{$a->forum}»';
$string['discussionpin'] = 'Закрепить';
$string['discussionpinned'] = 'Закреплено';
$string['discussionpinned_help'] = 'Закрепленные обсуждения будут показываться в верхней части форума.';
$string['discussions'] = 'Обсуждения';
$string['discussionsstartedby'] = 'Обсуждения, начатые  {$a}';
$string['discussionsstartedbyrecent'] = 'Последние обсуждения, начатые пользователем {$a}';
$string['discussionsstartedbyuserincourse'] = 'Обсуждения, созданные пользователем {$a->fullname} в {$a->coursename}';
$string['discussionsubscribestart'] = 'Отправлять мне по электронной почте уведомления о новых сообщениях этого обсуждения';
$string['discussionsubscribestop'] = 'Я не хочу получать по электронной почте уведомления о новых сообщениях этого обсуждения';
$string['discussionsubscription'] = 'Подписаться на эту тему.';
$string['discussionsubscription_help'] = 'Подписка на тему означает, что Вы будете получать уведомления о новых сообщениях в этом обсуждении.';
$string['discussionunpin'] = 'Открепить';
$string['discussthistopic'] = 'Обсудить эту тему';
$string['displayend'] = 'Конец отображения';
$string['displayend_help'] = '<h2>Период отображения форума</h2>

<p>Вы можете выбрать, можно ли отправлять сообщения на форум только с определенной даты, и отображать их в определенный период времени.</p>

<p>Отключите опцию «Отключить» для активирования отображения с учетом дат.</p>

<p>Заметьте, что пользователи с правами администратора могут видеть сообщения до их появления на форуме и после завершения срока показа.</p>';
$string['displaymode'] = 'Режим отображения';
$string['displayperiod'] = 'Отображаемый период';
$string['displaystart'] = 'Начало отображения';
$string['displaystart_help'] = '<h2>Период отображения форума</h2>

<p>Вы можете выбрать, можно ли отправлять сообщения на форум только с определенной даты, и отображать их в определенный период времени.</p>

<p>Отключите опцию «Отключить» для активирования отображения с учетом дат.</p>

<p>Заметьте, что пользователи с правами администратора могут видеть сообщения до их появления на форуме и после завершения срока показа.</p>';
$string['displaywordcount'] = 'Показать количество слов';
$string['displaywordcount_help'] = 'Этот параметр определяет, нужно ли отображать количество слов в каждом сообщении.';
$string['eachuserforum'] = 'Каждый открывает одну тему';
$string['edit'] = 'Редактировать';
$string['editedby'] = 'Редактировал(а) {$a->name} -  {$a->date}';
$string['editedpostupdated'] = 'Сообщение {$a} было обновлено';
$string['editing'] = 'Редактирование';
$string['emaildigest_0'] = 'Вы будете получать отдельное письмо на каждое сообщение в форуме.';
$string['emaildigest_1'] = 'Вы будете ежедневно получать по почте  дайджест, включающий полное содержимое всех сообщений форума за день.';
$string['emaildigest_2'] = 'Вы будете ежедневно получать по почте  дайджест, содержащий названия всех тем форума за день.';
$string['emaildigestcompleteshort'] = 'Полные сообщения';
$string['emaildigestdefault'] = 'По умолчанию ({$a})';
$string['emaildigestoffshort'] = 'Без дайджеста';
$string['emaildigestsubjectsshort'] = 'Только темы';
$string['emaildigesttype'] = 'Тип почтового дайджеста';
$string['emaildigesttype_help'] = 'Тип уведомления, который Вы получите для каждого форума.

* По умолчанию - соответствует настройке дайджеста, заданной в профиле пользователя. Если Вы обновите свой профиль, то изменение будет отражено и здесь;
* Без дайджеста - Вы получите одно электронное письмо на каждое сообщение форума;
* Дайджест - полные сообщения - Вы будете ежедневно получать по почте  дайджест, включающий полное содержимое всех сообщений форума за день;
* Дайджест - только темы - Вы будете ежедневно получать по почте  дайджест, содержащий названия всех тем форума за день.';
$string['emaildigestupdated'] = 'Настройки дайджеста в форуме «{$a->forum}» были изменены на «{$a->maildigesttitle}». {$a->maildigestdescription}';
$string['emaildigestupdated_default'] = 'В форуме «{$a->forum}» используется настройка дайджеста «{$a->maildigesttitle}», установленная по умолчанию в Вашем профиле. {$a->maildigestdescription}';
$string['emptymessage'] = 'Произошла ошибка при обработке Вашего сообщения. Вероятнее всего, Вы оставили его пустым или превысили допустимый размер вложения. <br>Сообщение не было сохранено.';
$string['erroremptymessage'] = 'Сообщение не может быть пустым';
$string['erroremptysubject'] = 'Тема сообщения не может быть пустой';
$string['errorenrolmentrequired'] = 'Вы должны быть записаны на этот курс для доступа к содержимому';
$string['errorwhiledelete'] = 'Ошибка при удалении записи.';
$string['eventassessableuploaded'] = 'Опубликована некоторая информация.';
$string['eventcoursesearched'] = 'Осуществлен поиск курса';
$string['eventdiscussioncreated'] = 'Тема создана';
$string['eventdiscussiondeleted'] = 'Тема удалена';
$string['eventdiscussionmoved'] = 'Тема перемещена';
$string['eventdiscussionpinned'] = 'Обсуждение закреплено';
$string['eventdiscussionsubscriptioncreated'] = 'Подписка на тему создана';
$string['eventdiscussionsubscriptiondeleted'] = 'Подписка на тему удалена';
$string['eventdiscussionunpinned'] = 'Обсуждение откреплено';
$string['eventdiscussionupdated'] = 'Тема обновлена';
$string['eventdiscussionviewed'] = 'Тема просмотрена';
$string['eventpostcreated'] = 'Сообщение создано';
$string['eventpostdeleted'] = 'Сообщение удалено';
$string['eventpostupdated'] = 'Сообщение обновлено';
$string['eventreadtrackingdisabled'] = 'Отслеживание непрочитанных сообщений отключено';
$string['eventreadtrackingenabled'] = 'Отслеживание непрочитанных сообщений включено';
$string['eventsubscribersviewed'] = 'Список подписчиков просмотрен';
$string['eventsubscriptioncreated'] = 'Подписка создана';
$string['eventsubscriptiondeleted'] = 'Подписка удалена';
$string['eventuserreportviewed'] = 'Отчет по пользователю просмотрен';
$string['everyonecanchoose'] = 'Каждый может подписаться на этот форум';
$string['everyonecannowchoose'] = 'Каждый участник может выбрать, подписываться на этот форум или нет';
$string['everyoneisnowsubscribed'] = 'На этот форум подписаны все';
$string['everyoneissubscribed'] = 'На этот форум подписаны все';
$string['existingsubscribers'] = 'Текущие подписчики';
$string['exportdiscussion'] = 'Экспортировать в портфолио всё обсуждение целиком';
$string['forcedreadtracking'] = 'Разрешить принудительное отслеживание непрочитанных сообщений';
$string['forcedreadtracking_desc'] = 'Позволяет установить принудительное отслеживание непрочитанных сообщений форумов.
Это может привести к снижению производительности для некоторых пользователей, в частности на курсах с многочисленными форумами и сообщениями.
При выключенном параметре ранее установленное в любых форумах принудительное отслеживание будет рассматриваться как необязательное.';
$string['forcesubscribed'] = 'Это форум с обязательной подпиской';
$string['forcesubscribed_help'] = 'Этот форум настроен так, что Вы не можете отказаться от подписок на обсуждения.';
$string['forum'] = 'Форум';
$string['forum:addinstance'] = 'Добавлять новый форум';
$string['forum:addnews'] = 'Добавлять новости';
$string['forum:addquestion'] = 'Добавлять вопрос';
$string['forum:allowforcesubscribe'] = 'Разрешать принудительную подписку';
$string['forumauthorhidden'] = 'Автор (скрыт)';
$string['forumblockingalmosttoomanyposts'] = 'Вы достигли разрешенного порога сообщений. Вы отвечали {$a->numposts} раз за последние {$a->blockperiod}, лимит же составляет {$a->blockafter} сообщений.';
$string['forumbodyhidden'] = 'Вы не можете посмотреть это сообщение.

Вероятно, Вы еще не отвечали в этой теме или не закончилось время для редактирования ответа; обсуждения могло еще не начаться или закончилось.';
$string['forum:canposttomygroups'] = 'Можно публиковать во все группы, к которым у Вас есть доступ';
$string['forum:createattachment'] = 'Создавать вложения';
$string['forum:deleteanypost'] = 'Удалять любые сообщения (всегда)';
$string['forum:deleteownpost'] = 'Удалять свои сообщения (в течение периода редактирования)';
$string['forum:editanypost'] = 'Редактировать любые сообщения';
$string['forum:exportdiscussion'] = 'Экспортировать обсуждение целиком';
$string['forum:exportownpost'] = 'Экспортировать свои сообщения';
$string['forum:exportpost'] = 'Экспортировать сообщения';
$string['forumintro'] = 'Описание';
$string['forum:managesubscriptions'] = 'Редактировать список подписчиков';
$string['forum:movediscussions'] = 'Перемещать обсуждения';
$string['forumname'] = 'Название форума';
$string['forum:pindiscussions'] = 'Закреплять обсуждения';
$string['forumposts'] = 'Сообщения форумов';
$string['forum:postwithoutthrottling'] = 'Игнорировать ограничение на количество сообщений';
$string['forum:rate'] = 'Оценивать сообщения';
$string['forum:replynews'] = 'Отвечать на новости';
$string['forum:replypost'] = 'Отвечать на сообщения';
$string['forums'] = 'Форумы';
$string['forum:splitdiscussions'] = 'Разделять обсуждения';
$string['forum:startdiscussion'] = 'Начинать новые обсуждения';
$string['forumsubjecthidden'] = 'Тема (скрыта)';
$string['forumtracked'] = 'Непрочтенные сообщения отслеживаются';
$string['forumtrackednot'] = 'Непрочтенные сообщения НЕ отслеживаются';
$string['forumtype'] = 'Тип форума';
$string['forumtype_help'] = 'Существует 5 типов форумов:

* Одна тема - одиночная обсуждаемая тема, ответить на которую может каждый.
* Каждый открывает одну тему - каждый студент может открыть только одну новую тему обсуждения, ответить на которую может каждый.
* Форум вопросов и ответов - студенты должны сначала дать свой ответ перед просмотром ответов других студентов.
* Стандартный в формате блога - открытый форум, где каждый может открыть новую тему в любое время, и в котором темы обсуждения отображаются на одной странице со ссылкой «Обсудить эту тему».
* Стандартный общий форум - открытый форум, где каждый может открыть новую тему в любое время.';
$string['forum:viewallratings'] = 'Видеть все промежуточные оценки';
$string['forum:viewanyrating'] = 'Просматривать все оценки';
$string['forum:viewdiscussion'] = 'Просматривать обсуждения';
$string['forum:viewhiddentimedposts'] = 'Просматривать скрытые ограниченные по времени сообщения';
$string['forum:viewqandawithoutposting'] = 'Всегда видеть сообщения вопрос-ответ';
$string['forum:viewrating'] = 'Просматривать свои оценки';
$string['forum:viewsubscribers'] = 'Просматривать список подписчиков';
$string['generalforum'] = 'Стандартный  форум для общих обсуждений';
$string['generalforums'] = 'Общие форумы';
$string['hiddenforumpost'] = 'Скрытые сообщения форума';
$string['inforum'] = 'в {$a}';
$string['introblog'] = 'Сообщения в этом форуме были автоматически скопированы из блогов пользователей этого курса, потому что эти записи блогов уже недоступны';
$string['intronews'] = 'Главные новости и объявления';
$string['introsocial'] = 'Форум для любых обсуждений';
$string['introteacher'] = 'Учительский форум';
$string['invalidaccess'] = 'Эта страница не доступна';
$string['invaliddigestsetting'] = 'Была представлена неверная настройка почтового дайджеста';
$string['invaliddiscussionid'] = 'ID обсуждения некорректен или оно уже не существует';
$string['invalidforcesubscribe'] = 'Некорректный режим обязательной подписки';
$string['invalidforumid'] = 'ID форума некорректен';
$string['invalidparentpostid'] = 'ID родительского обсуждения некорректен';
$string['invalidpostid'] = 'Неверный ID сообщения - {$a}';
$string['lastpost'] = 'Последнее сообщение';
$string['learningforums'] = 'Учебные форумы';
$string['longpost'] = 'Длинное сообщение';
$string['mailnow'] = 'Отправить уведомления о сообщении на форуме немедленно, не дожидаясь окончания периода, в течение которого разрешено редактирование сообщения';
$string['manydiscussions'] = 'Обсуждений на странице';
$string['markalldread'] = 'Считать все сообщения в этом обсуждении прочитанными.';
$string['markallread'] = 'Считать все сообщения в этом форуме прочитанными.';
$string['markread'] = 'Считать прочитанным';
$string['markreadbutton'] = 'Считать<br />прочитанным';
$string['markunread'] = 'Считать не прочитанным';
$string['markunreadbutton'] = 'Считать<br />не прочитанным';
$string['maxattachments'] = 'Максимальное количество прикрепляемых файлов';
$string['maxattachments_help'] = 'Эта опция устанавливает максимальное количество файлов, которое можно прикрепить к сообщению форума.';
$string['maxattachmentsize'] = 'Максимальный размер вложений';
$string['maxattachmentsize_help'] = 'Этот параметр определяет максимальный размер файла, который можно прикрепить к сообщению форума.';
$string['maxtimehaspassed'] = 'Извините, время редактирования этого сообщения ({$a}) истекло!';
$string['message'] = 'Сообщение';
$string['messageinboundattachmentdisallowed'] = 'Невозможно разместить Ваш ответ, так как он содержит вложение, а в этом форуме не разрешено прикреплять файлы.';
$string['messageinboundfilecountexceeded'] = 'Невозможно разместить Ваш ответ, так как он включает в себя большее количество вложений, чем максимально разрешенное для этого форума ({$a->forum-> maxattachments}).';
$string['messageinboundfilesizeexceeded'] = 'Невозможно разместить Ваш ответ, так как общий размер вложений ({$a->filesize}) больше максимального размера, разрешенного для этого форума ({$a->maxbytes}).';
$string['messageinboundforumhidden'] = 'Невозможно разместить Ваш ответ, так как форум в настоящее время недоступен.';
$string['messageinboundnopostforum'] = 'Невозможно разместить Ваш ответ, так как у Вас нет разрешения на размещение сообщений в форуме {$a->forum->name}.';
$string['messageinboundthresholdhit'] = 'Невозможно разместить Ваш ответ. Вы превысили лимит сообщений,  установленный для этого форума';
$string['messageprovider:digests'] = 'Подписка на дайджесты форумов';
$string['messageprovider:posts'] = 'Подписка на сообщения форумов';
$string['missingsearchterms'] = 'Следующие условия поиска в этом сообщении доступны только в разметке HTML:';
$string['modeflatnewestfirst'] = 'Плоско, впереди новые';
$string['modeflatoldestfirst'] = 'Плоско, впереди старые';
$string['modenested'] = 'Древовидно';
$string['modethreaded'] = 'Древовидно, свернуто';
$string['modulename'] = 'Форум';
$string['modulename_help'] = 'Модуль «Форум» позволяет участникам общаться в асинхронном режиме т.е. в течение длительного времени.

Есть несколько типов форумов на выбор, такие как стандартный форум, на котором каждый может начать новое обсуждение в любое время; форум, где каждый студент может начать одно обсуждение, или форум «Вопрос-ответ», где студенты должны сначала ответить на сообщение, прежде чем они смогут увидеть ответы других студентов. Преподаватель может разрешить прикреплять файлы к сообщения на форуме. Прикрепленные изображения отображаются в сообщении форума.

Участники могут подписаться на форум, чтобы получать уведомления о новых сообщениях форума. Преподаватель может установить следующие режимы подписки: добровольный, принудительный, автоматический или полностью запретить подписки. При необходимости студентам может быть запрещено размещать более заданного количества сообщений на форуме за определенный период времени.

Сообщения форума могут оцениваться преподавателями или студентами (равноправное оценивание). Баллы могут быть объединены, чтобы сформировать окончательную оценку, которая записывается в журнал оценок.

Форумы имеют множество применений, таких как:

* пространство для общения студентов, чтобы они узнали друг друга.
* объявления курса (новостной форум с принудительной подпиской).
* обсуждения содержания курса или материалов для чтения.
* продолжения обсуждения, начатого ранее при личной встрече.
* пространство для общения преподавателей (с помощью скрытого форума).
* центр помощи, где преподаватели и студенты могут дать совет.
* индивидуальная поддержка учащегося (с помощью форума с отдельными группами и с одним студентом в группе)
* для дополнительной деятельности, например, «головоломки» для студентов или «мозговой штурм» для обдумывания и предложения решений.';
$string['modulenameplural'] = 'Форумы';
$string['more'] = 'еще';
$string['movedmarker'] = '(Перемещено)';
$string['movethisdiscussionto'] = 'Переместить обсуждение в ...';
$string['mustprovidediscussionorpost'] = 'Для экспорта Вы должны предоставить ID обсуждения или ID сообщения';
$string['myprofileotherdis'] = 'Темы форумов';
$string['myprofileowndis'] = 'Мои темы на форумах';
$string['myprofileownpost'] = 'Мои сообщения форума';
$string['namenews'] = 'Объявления';
$string['namenews_help'] = 'Объявления - это специальный форум для объявлений, который автоматически создается в каждом новом курсе. В каждом курсе может быть только один форум для объявлений. Публиковать объявления могут только учителя и администраторы. Последние темы этого форума будут отображаться в блоке «Последние объявления».';
$string['namesocial'] = 'Общий форум';
$string['nameteacher'] = 'Форум преподавателей';
$string['newforumposts'] = 'Новые сообщения форума';
$string['nextdiscussiona'] = 'Следующее обсуждение: {$a}';
$string['noattachments'] = 'В этом сообщении нет вложений';
$string['nodiscussions'] = 'Нет тем для обсуждения';
$string['nodiscussionsstartedby'] = 'Пользователем  {$a} не начато ни одно обсуждение';
$string['nodiscussionsstartedbyyou'] = 'Вы еще не начали никаких обсуждений';
$string['noguestpost'] = 'Извините, гостю не разрешается писать в форум';
$string['noguestsubscribe'] = 'Извините, гости не могут подписываться.';
$string['noguesttracking'] = 'Извините, гости не могут менять настройки форума.';
$string['nomorepostscontaining'] = 'Сообщений, содержащих \'{$a}\', больше не найдено';
$string['nonews'] = 'Пока новостей нет';
$string['noonecansubscribenow'] = 'Теперь подписка запрещена';
$string['nopermissiontosubscribe'] = 'У Вас нет прав для просмотра подписчиков форума';
$string['nopermissiontoview'] = 'У вас нет прав для просмотра этого сообщения';
$string['nopostforum'] = 'Извините, у Вас нет прав писать в этот форум';
$string['noposts'] = 'Нет сообщений';
$string['nopostsmadebyuser'] = '{$a} не делал(а) сообщений';
$string['nopostsmadebyyou'] = 'Вы не сделали ни одного сообщения';
$string['noquestions'] = 'В форуме пока нет ниодного вопроса';
$string['nosubscribers'] = 'У этого форума нет подписчиков';
$string['notexists'] = 'Обсуждение больше не существует';
$string['nothingnew'] = 'Ничего нового для {$a}';
$string['notingroup'] = 'Извините, но Вы должны быть членом группы, чтобы видеть этот форум.';
$string['notinstalled'] = 'Модуль форума не установлен';
$string['notpartofdiscussion'] = 'Это сообщение не является частью обсуждения!';
$string['notrackforum'] = 'Нажмите, чтобы не следить за новыми сообщениями';
$string['notsubscribed'] = 'Подписаться';
$string['noviewdiscussionspermission'] = 'У вас нет права на просмотр обсуждений в этом форуме.';
$string['nowallsubscribed'] = 'Вы подписаны на все форумы в {$a}.';
$string['nowallunsubscribed'] = 'Вы не подписаны на все форумы в {$a}.';
$string['nownotsubscribed'] = 'Пользователь «{$a->name}» больше НЕ будет получать уведомления о новых сообщениях форума «{$a->forum}».';
$string['nownottracking'] = 'Слежение за новыми сообщениями в \'{$a->forum}\' отключено для {$a->name}.';
$string['nowsubscribed'] = 'Пользователь «{$a->name}» будет получать уведомления о новых сообщениях форума «{$a->forum}».';
$string['nowtracking'] = 'Слежение за новыми сообщениями в \'{$a->forum}\' включено для {$a->name}.';
$string['numposts'] = 'сообщений - {$a}';
$string['olderdiscussions'] = 'Старые обсуждения';
$string['oldertopics'] = 'Старые темы';
$string['oldpostdays'] = 'Считать прочитанным после ... дней';
$string['overviewnumpostssince'] = 'Сообщений с последнего входа: {$a}';
$string['overviewnumunread'] = 'Общее количество непрочитанных сообщений: {$a}';
$string['page-mod-forum-discuss'] = 'Страница обсуждения темы форума';
$string['page-mod-forum-view'] = 'Главная страница форума';
$string['page-mod-forum-x'] = 'Любая страница форума';
$string['parent'] = 'Показать сообщение-родителя';
$string['parentofthispost'] = 'Родитель этого сообщения';
$string['permalink'] = 'Постоянная ссылка';
$string['pluginadministration'] = 'Управление форумом';
$string['pluginname'] = 'Форум';
$string['postadded'] = '<p>Ваше сообщение добавлено.</p><p>У Вас есть {$a} для внесения изменений.</p>';
$string['postaddedsuccess'] = 'Ваше сообщение успешно добавлено';
$string['postaddedtimeleft'] = 'Если Вы решите внести какие-то изменения, Вы сможете сделать это только в течение {$a}';
$string['postbymailsuccess'] = 'Ваше сообщение форума с темой «{$a->subject}» было успешно добавлено. Вы можете просмотреть его на {$a->discussionurl}.';
$string['postbymailsuccess_html'] = 'Ваше <a href="{$a->discussionurl}">сообщение на форуме</a> с темой «{$a->subject}» был успешно отправлено.';
$string['postbyuser'] = '{$a->post} от {$a->user}';
$string['postincontext'] = 'Показать в контексте';
$string['postmailinfo'] = 'Это копия сообщения с сайта {$a}. Чтобы ответить на него на сайте, проследуйте по этой ссылке:';
$string['postmailinfolink'] = 'Это копия сообщения, опубликованного в курсе  «{$a->coursename}».

Чтобы ответить на него, щелкните по этой ссылке: {$a->replylink}';
$string['postmailnow'] = '<p>Это сообщение будет отправленно немедленно всем подписавшимся на этот форум.</p>';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postrating1'] = 'Наиболее отделенные сообщения';
$string['postrating2'] = 'Отделенные и связанные сообщения';
$string['postrating3'] = 'Наиболее связанные сообщения';
$string['posts'] = 'Сообщения';
$string['postsmadebyuser'] = 'Опубликовано {$a}';
$string['postsmadebyuserincourse'] = 'Опубликовано {$a->fullname} в {$a->coursename}';
$string['posttoforum'] = 'Отправить в форум';
$string['posttomygroups'] = 'Опубликовать копию для всех групп';
$string['posttomygroups_help'] = 'Опубликовать копию этого сообщения во всех группах, к которым Вы имеете доступ. Члены групп, к которым у Вас нет доступа, не увидят это сообщение.';
$string['postupdated'] = 'Ваше сообщение было изменено';
$string['potentialsubscribers'] = 'Потенциальные подписчики';
$string['prevdiscussiona'] = 'Предыдущее обсуждение: {$a}';
$string['processingdigest'] = 'Создание дайджеста для {$a}';
$string['processingpost'] = 'Обрабатывается сообщение {$a}...';
$string['prune'] = 'Отделить';
$string['prunedpost'] = 'Из сообщения было создано новое обсуждение';
$string['pruneheading'] = 'Выделить сообщение с ответами в самостоятельную тему';
$string['qandaforum'] = 'Форум «Вопрос-Ответ»';
$string['qandanotify'] = 'Это форум «Вопрос-Ответ». Для того, чтобы увидеть ответы других участников на поставленный вопрос, Вам необходимо разместить свой ответ';
$string['re'] = 'Re:';
$string['readtherest'] = 'Читать сообщение полностью';
$string['replies'] = 'Ответы';
$string['repliesmany'] = 'Пока {$a} ответов';
$string['repliesone'] = 'Пока {$a} ответ';
$string['reply'] = 'Ответить';
$string['replyforum'] = 'Ответить в форум';
$string['reply_handler'] = 'Ответ на сообщение форума по электронной почте';
$string['reply_handler_name'] = 'Позволяет отвечать на сообщения в форуме по электронной почте';
$string['replytopostbyemail'] = 'Вы можете дать ответ по электронной почте';
$string['replytouser'] = 'Использовать адреса электронной почты в ответе';
$string['resetdigests'] = 'Удалить предпочтения дайджеста сообщений форума для всех пользователей';
$string['resetforums'] = 'Удалить все сообщения из этих типов форумов';
$string['resetforumsall'] = 'Удалить все сообщения';
$string['resetsubscriptions'] = 'Удалить все подписки на форум';
$string['resettrackprefs'] = 'Удалить все настройки слежения за форумом';
$string['rssarticles'] = 'Количество RSS-записей';
$string['rssarticles_help'] = 'Эта настройка определяет, сколько RSS-записей (обсуждений или сообщений) будут включены в RSS-ленту. Обычно подходит значение от 5 до 20.';
$string['rsssubscriberssdiscussions'] = 'RSS-лента обсуждений';
$string['rsssubscriberssposts'] = 'RSS-лента сообщений';
$string['rsstype'] = 'RSS-лента для этого элемента курса';
$string['rsstypedefault'] = 'Тип ленты RSS';
$string['rsstype_help'] = 'Чтобы включить RSS-ленту для этого элемента курса, выберите, нужно ли включать в ленту обсуждения или отдельные сообщения';
$string['search'] = 'Поиск по форумам';
$string['search:activity'] = 'Форум — информация об элементе курса';
$string['searchdatefrom'] = 'Искать в сообщениях, созданных после';
$string['searchdateto'] = 'Искать в сообщениях, созданных до';
$string['searchforumintro'] = 'Укажите, что хотите найти с использованием одного или нескольких полей, находящихся ниже:';
$string['searchforums'] = 'Искать';
$string['searchfullwords'] = 'Эти слова должны быть целиком';
$string['searchnotwords'] = 'Этих слов НЕ ДОЛЖНО БЫТЬ в сообщениях';
$string['searcholderposts'] = 'Поиск старых сообщений...';
$string['searchphrase'] = 'Должна присутствовать фраза целиком';
$string['search:post'] = 'Форум — записи';
$string['searchresults'] = 'Результаты поиска';
$string['searchsubject'] = 'Искать слова в заголовках';
$string['searchuser'] = 'Искать по автору';
$string['searchuserid'] = 'Идентификационный номер автора';
$string['searchwhichforums'] = 'Выберите форумы, в которых нужно искать';
$string['searchwords'] = 'Эти слова могут быть в любом месте сообщения';
$string['seeallposts'] = 'Посмотреть все сообщения этого пользователя';
$string['shortpost'] = 'Короткое сообщение';
$string['showsubscribers'] = 'Показать/отредактировать состав подписчиков';
$string['singleforum'] = 'Простое обсуждение';
$string['smallmessage'] = '{$a->user} отвечал в {$a->forumname}';
$string['smallmessagedigest'] = 'Дайджест форума содержит {$a} сообщений';
$string['startedby'] = 'Начато';
$string['subject'] = 'Тема';
$string['subscribe'] = 'Подписаться на форум';
$string['subscribeall'] = 'Подписать всех на этот форум';
$string['subscribed'] = 'Вы подписаны';
$string['subscribediscussion'] = 'Подписаться на эту дискуссию';
$string['subscribeenrolledonly'] = 'Извините, только участникам курса разрешено подписаться на получение сообщений форума по электронной почте.';
$string['subscribenone'] = 'Отписать всех от этого форума';
$string['subscribers'] = 'Подписчики';
$string['subscribersto'] = 'Подписчики на «{$a->name}»';
$string['subscriberstowithcount'] = 'Подписчики на «{$a->name}» ({$a->count})';
$string['subscribestart'] = 'Отправлять мне по электронной почте уведомления о новых сообщениях этого форума';
$string['subscribestop'] = 'Не хочу получать по электронной почте уведомления о новых сообщениях этого форума';
$string['subscription'] = 'Подписка';
$string['subscriptionandtracking'] = 'Подписка и отслеживание';
$string['subscriptionauto'] = 'Автоматическая подписка';
$string['subscriptiondisabled'] = 'Подписка отключена';
$string['subscriptionforced'] = 'Принудительная подписка';
$string['subscription_help'] = 'Подписка на форум означает, что Вы будете получать по электронной почте уведомления о новых сообщениях этого форума. Обычно Вы можете выбрать, подписываться или нет, хотя иногда подписка является обязательной и тогда все получают сообщения этого форума по электронной почте.';
$string['subscriptionmode'] = 'Режим подписки';
$string['subscriptionmode_help'] = 'Если участник подписан на форум, то он по электронной почте получает копии сообщений форума.

Есть 4 варианта режима подписки:

* Добровольная подписка - участники могут выбирать, будут ли они подписаны или нет
* Принудительная подписка - все подписаны и не могут отказаться
* Автоматическая подписка - все подписаны изначально, но могут  отказаться в любое время
* Подписка отключена - подписки не разрешены.

Любые изменения режима подписки будут влиять только на пользователей, которые запишутся на курс в будущем, а не на имеющихся пользователей.';
$string['subscriptionoptional'] = 'Добровольная подписка';
$string['subscriptions'] = 'Подписки';
$string['thisforumisthrottled'] = 'На этом форуме установлен лимит сообщений, которые Вы можете создать за заданный период времени - в настоящий момент это {$a->blockafter} сообщений за {$a->blockperiod}';
$string['timedhidden'] = 'Временной статус: Скрыто от студентов';
$string['timedposts'] = 'Сообщения по расписанию';
$string['timedvisible'] = 'Временной статус: Видимо всем пользователям';
$string['timestartenderror'] = 'Дата окончания периода отображения не может быть меньше даты его начала';
$string['trackforum'] = 'Нажмите, чтобы следить за новыми сообщениями';
$string['tracking'] = 'Следить';
$string['trackingoff'] = 'Выключить';
$string['trackingon'] = 'Принудительно';
$string['trackingoptional'] = 'Необязательно';
$string['trackingtype'] = 'Отслеживать непрочитанные сообщения';
$string['trackingtype_help'] = 'При включенном параметре участники могут отслеживать прочитанные и непрочитанные сообщения в форуме и в темах.

Есть три варианта:

* Не обязательно  - участники могут сами выбрать, включить отслеживание или нет, с помощью ссылки в блоке администрирования. Отслеживание форума также должно быть включено в профиле пользователя.
* Принудительно - отслеживание всегда включено, независимо от настроек пользователя. Доступность этого режима зависит от настроек, сделанных администратором.
* Нет - отслеживание всегда выключено.';
$string['unread'] = 'Непрочтенные';
$string['unreadposts'] = 'Непрочтенные сообщения';
$string['unreadpostsnumber'] = 'Непрочитанных сообщений - {$a}';
$string['unreadpostsone'] = '1 непрочитанное сообщение';
$string['unsubscribe'] = 'Аннулировать подписку';
$string['unsubscribeall'] = 'Отписаться от всех форумов';
$string['unsubscribeallconfirm'] = 'В настоящее время Вы подписаны на {$a->forums} форумов и {$a->discussions} дискуссий. Вы действительно хотите отписаться от всех форумов и дискуссий и отключить автоподписку на дискуссии?';
$string['unsubscribeallconfirmdiscussions'] = 'В настоящее время Вы подписаны на {$a->discussions} дискуссий. Вы действительно хотите отписаться от всех  дискуссий и отключить автоподписку на дискуссии?';
$string['unsubscribeallconfirmforums'] = 'В настоящее время Вы подписаны на {$a->forums} форумов. Вы действительно хотите отписаться от всех форумов и отключить автоподписку на форумы?';
$string['unsubscribealldone'] = 'Все Ваши подписки на форумы были удалены. Но Вы по-прежнему будете получать уведомления с форумов, на которые установлена принудительная подписка. Для управления уведомлениями форумов выберите Сообщения в настройках своего профиля.';
$string['unsubscribeallempty'] = 'Вы не подписаны ни на один форум. Чтобы отключить все уведомления с этого сервера выберите Сообщения в настройках своего профиля.';
$string['unsubscribed'] = 'Не подписаны';
$string['unsubscribediscussion'] = 'Отписаться от этого обсуждения';
$string['unsubscribediscussionlink'] = 'Отписаться от этого обсуждения: {$a}';
$string['unsubscribelink'] = 'Отписаться от этого форума: {$a}';
$string['unsubscribeshort'] = 'Отписать';
$string['usermarksread'] = 'Вручную отмечать прочитанные сообщения';
$string['viewalldiscussions'] = 'Просмотреть все темы';
$string['warnafter'] = 'Количество сообщений для предупреждения';
$string['warnafter_help'] = 'Студенты могут быть предупреждены о приближении к максимальному количеству сообщений, допустимому в заданный период. Этот параметр определяет, при каком количестве сообщений они будут предупреждены. Пользователи с правом «mod/forum:postwithoutthrottling» не ограничены в количестве сообщений.';
$string['warnformorepost'] = 'Внимание! На этом форуме более одного обсуждения  - используется самое последнее';
$string['yournewquestion'] = 'Ваш новый вопрос';
$string['yournewtopic'] = 'Тема для обсуждений';
$string['yourreply'] = 'Ваш ответ';
