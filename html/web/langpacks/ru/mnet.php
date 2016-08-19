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
 * Strings for component 'mnet', language 'ru', branch 'MOODLE_31_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'О Вашем сайте';
$string['accesslevel'] = 'Доступ';
$string['addhost'] = 'Добавить сайт';
$string['addnewhost'] = 'Добавить новый сайт';
$string['addtoacl'] = 'Добавить в список контроля доступа';
$string['allhosts'] = 'Все сайты';
$string['allhosts_no_options'] = 'При просмотре варианта «Все сайты» эта страница недоступна';
$string['allow'] = 'Разрешить';
$string['applicationtype'] = 'Тип приложения';
$string['authfail_nosessionexists'] = 'Авторизация не удалась: сеанс MNet не существует';
$string['authfail_sessiontimedout'] = 'Авторизация не удалась: время сеанса MNet истекло';
$string['authfail_usermismatch'] = 'Авторизация не удалась: пользователь не совпадает';
$string['authmnetdisabled'] = 'Плагин «Аутентификация для пользователей сети MNet» <strong>отключен</strong>.';
$string['badcert'] = 'Это сертификат некорректен';
$string['certdetails'] = 'Информация из сертификата';
$string['configmnet'] = 'Технология MNet позволяет этому серверу взаимодействовать с другими серверами и службами';
$string['couldnotgetcert'] = 'Не найден сертификат по адресу <br />{$a}. <br />Возможно, сайт сейчас недоступен или неверно сконфигурирован.';
$string['couldnotmatchcert'] = 'Это не соответствует текущему сертификату, опубликованному веб-сервером';
$string['courses'] = 'курсы';
$string['courseson'] = 'курсы';
$string['currentkey'] = 'Текущий открытый ключ';
$string['current_transport'] = 'Текущий транспорт';
$string['databaseerror'] = 'Не удается записать подробности в базу данных';
$string['deleteaserver'] = 'Удаление сервера';
$string['deletedhostinfo'] = 'Этот сайт был удален. Если Вы хотите вернуть его, то переключите состояние «Удалено» обратно на «Нет».';
$string['deletedhosts'] = 'Удаленные сайты: {$a}';
$string['deletehost'] = 'Удалить сайт';
$string['deletekeycheck'] = 'Вы абсолютно уверены, что хотите удалить этот ключ?';
$string['deleteoutoftime'] = 'Вы не успели подтвердить удаление этого ключа в течение 60 секунд. Пожалуйста, попробуйте снова.';
$string['deleteuserrecord'] = 'Контроль доступа SSO: удалить запись пользователя «{$a->user}» с сайта «{$a->host}».';
$string['deletewrongkeyvalue'] = 'Возникла ошибка. Если Вы не пытались удалить свой SSL-ключ с сервера, то, возможно, Вы стали жертвой вредоносной атака. Никаких действий предпринято не было.';
$string['deny'] = 'Запретить';
$string['description'] = 'Описание';
$string['duplicate_usernames'] = 'Не удалось создать индекс для столбцов «mnethostid» и «username» в таблице пользователей.<br />Это могло произойти, если в таблице есть <a href="{$a}" target="_blank"> одинаковые имена пользователей</a>.<br />Обновление всё равно должно завершиться успешно. Нажмите на ссылку вверху и в новом окне прочитайте инструкцию, как избавиться от этой проблемы. Вы можете заняться этим уже после завершения обновления.<br />';
$string['enabled_for_all'] = '(Эта служба была включена для всех сайтов).';
$string['enterausername'] = 'Пожалуйста, введите имя пользователя или список имен пользователей, разделенный запятыми.';
$string['error7020'] = 'Эта ошибка обычно происходит, если на удаленном сайте для Вас создана запись с ошибочным wwwroot, например, http://yoursite.com вместо http://www.yoursite.com. Вам нужно связаться с администратором этого сайта и попросить обновить запись для Вашего сайта так, чтобы она соответствовали параметру wwwroot в файле config.php.';
$string['error7022'] = 'Сообщение, которое Вы отправили удаленному сайту было зашифровано верно, но не подписано. Это очень неожиданное поведение. Вы, вероятно, должны сообщить о происшедшей ошибке (при этом в запросе дать как можно больше информации о версии приложения и т.д.)';
$string['error7023'] = 'Удаленный сайт пытался расшифровать Ваше сообщение всеми возможными ключами, записанными для Вашего сайта. Все эти попытки завершились неудачно. Вам нужно вручную исправить эту ошибку путем повторного обмена ключами с этим сайтом. Такая ситуация могла возникнуть, если Вы не связывались с удаленным сайтом в течение нескольких месяцев.';
$string['error7024'] = 'Вы послали незашифрованное сообщение на удаленный сайт, но удаленный сайт не принимает незашифрованную информацию с Вашего сайта. Это очень неожиданное поведение. Вы, вероятно, должны сообщить о происшедшей ошибке (при этом в запросе дать как можно больше информации о версии приложения и т.д.)';
$string['error7026'] = 'Ключ, которым было подписано Ваше сообщение, отличается от ключа, который записан на удаленном сайте для вашего сайта. Удаленный сайт попытался загрузить Ваш текущий ключ, но это не удалось. Вам нужно вручную исправить эту ошибку путем повторного обмена ключами с этим сайтом.';
$string['error709'] = 'Удаленный сайт не смог получить Ваш SSL ключ.';
$string['eventaccesscontrolcreated'] = 'Элемент списка контроля доступа создан';
$string['eventaccesscontrolupdated'] = 'Элемент списка контроля доступа обновлен';
$string['expired'] = 'Срок действия этого ключа истек';
$string['expires'] = 'Действителен по';
$string['expireyourkey'] = 'Удалить этот ключ';
$string['expireyourkeyexplain'] = 'Moodle автоматически изменяет Ваши ключи каждые 28 дней (по умолчанию), но Вы можете в любой момент <em>вручную</em> отметить этот ключа как просроченный. Это необходимо только в том случае, если Вы считаете, что ключ был скомпрометирован. Новый ключ будет создан автоматически сразу же после этого действия. <br />Удаление этого ключа сделает невозможным другим взаимодействие других приложений с Вашим сайтом до тех пор, пока Вы не свяжетесь с каждым из администраторов остальных сайтов сети MNet и не передадите им новый ключ.';
$string['exportfields'] = 'Поля для экспорта';
$string['failedaclwrite'] = 'Ошибка записи элемента списка контроля доступа MNet для пользователя «{$a}».';
$string['findlogin'] = 'Найти логин';
$string['forbidden-function'] = 'Эта функция не была активирована для RPC.';
$string['forbidden-transport'] = 'Метод передачи, который Вы пытаетесь использовать, не разрешен';
$string['forcesavechanges'] = 'Принудительно сохранять изменения';
$string['helpnetworksettings'] = 'Настроить взаимодействие MNet';
$string['hidelocal'] = 'Скрыть локальных пользователей';
$string['hideremote'] = 'Скрыть пользователей внешних сайтов';
$string['host'] = 'сайт';
$string['hostcoursenotfound'] = 'Сайт или курс не найден';
$string['hostdeleted'] = 'Сайт удален';
$string['hostexists'] = 'Уже существует запись для сайта с этим именем (она может быть удалена).<a href="{$a}">нажмите здесь</a> для редактирования записи.';
$string['hostlist'] = 'Список сайтов сети MNet';
$string['hostname'] = 'Имя сайта';
$string['hostnamehelp'] = 'Полное доменное имя сайта, например, www.example.com';
$string['hostnotconfiguredforsso'] = 'Этот сервер не настроен для удаленного подключения';
$string['hostsettings'] = 'Настройки сайта';
$string['http_self_signed_help'] = 'Разрешить соединения при использовании на внешнем сайте самоподписанного SSL-сертификата.';
$string['https_self_signed_help'] = 'Разрешить соединения по HTTP при использовании на внешнем сайте самоподписанного SSL-сертификата.';
$string['https_verified_help'] = 'Разрешить соединения при использовании на внешнем сайте подписанного центром сертификации SSL-сертификата.';
$string['http_verified_help'] = 'Разрешить соединения по HTTP (а не по HTTPS) при использовании на внешнем сайте подписанного центром сертификации SSL-сертификата.';
$string['id'] = 'ID';
$string['idhelp'] = 'Это значение устанавливается автоматически и не может быть изменено';
$string['importfields'] = 'Поля для импорта';
$string['inspect'] = 'Проверить';
$string['installnosuchfunction'] = 'Ошибка кодирования. Осуществлена попытке установить функцию mnet xmlrpc ({$a->method}) из файла ({$a->file}), но его не удается найти!';
$string['installnosuchmethod'] = 'Ошибка кодирования. Осуществлена попытке установить метод net mnet xmlrpc ({$a->method}) для класса ({$a->class}), но его не удается найти!';
$string['installreflectionclasserror'] = 'Ошибка кодирования. Не удалась самопроверка MNet для метода «{$a->method}» в классе «{$a->class}». Сообщение об ошибке, которое может помочь: «{$a->error}»';
$string['installreflectionfunctionerror'] = 'Ошибка кодирования. Не удалась самопроверка MNet для функции «{$a->method}» в файле «{$a->file}». Сообщение об ошибке, которое может помочь: «{$a->error}»';
$string['invalidaccessparam'] = 'Неверное значение параметра «Доступ».';
$string['invalidactionparam'] = 'Неверный параметр действия.';
$string['invalidhost'] = 'Вы обязаны предоставить верный идентификатор сайта';
$string['invalidpubkey'] = 'Ключ не является правильным SSL-ключом. ({$a})';
$string['invalidurl'] = 'Ошибочный параметр «Адрес сайта»';
$string['ipaddress'] = 'IP-адрес';
$string['is_in_range'] = 'IP-адрес <code>{$a}</code> входит в список доверенных адресов.';
$string['ispublished'] = 'Сайт «{$a}» открыл доступ к этой службе для Вас.';
$string['issubscribed'] = 'Сайт "{$a}" подписался на эту службу на Вашем сайте.';
$string['keydeleted'] = 'Ваш ключ был успешно удален и заменен.';
$string['keymismatch'] = 'Открытый ключ, сохраненный у Вас для этого сайта, отличается от открытого ключа, который сейчас опубликован. Текущий открытый ключ:';
$string['last_connect_time'] = 'Время последнего подключения';
$string['last_connect_time_help'] = 'Время, когда Вы в последний раз подключались к данному сайту.';
$string['last_transport_help'] = 'Способ соединения, который Вы использовали при последнем соединении с этим сайтом.';
$string['leavedefault'] = 'Использование настроек по умолчанию';
$string['listservices'] = 'Получить список служб';
$string['loginlinkmnetuser'] = 'Если Вы являетесь удаленным пользователем MNet и можете здесь <a href="{$a}">подтвердить свой адрес email</a>, то Вы можете быть перенаправлены на вашу страницу входа.<br />';
$string['logs'] = 'логи';
$string['managemnetpeers'] = 'Управление сайтами сети MNet';
$string['method'] = 'Метод';
$string['methodhelp'] = 'Помощь для метода «{$a}»';
$string['methodsavailableonhost'] = 'Методы, доступные для сайта «{$a}»';
$string['methodsavailableonhostinservice'] = 'Методы, доступны для службы «{$a->service}» на сайте «{$a->host}»';
$string['methodsignature'] = 'Описание метода "{$a}"';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Объединение (до) 3 строк и возвращение результата.';
$string['mnetdisabled'] = 'Система MNet <strong>отключена</strong>.';
$string['mnetidprovider'] = 'Поставщик идентификатора MNet';
$string['mnetidproviderdesc'] = 'Вы можете использовать это средство для получения ссылки, через которую Вы сможете авторизоваться, если укажете правильный адрес электронной почты, соответствующий имени пользователя, пытавшегося авторизоваться ранее.';
$string['mnetidprovidermsg'] = 'Вы должны авторизоваться через своего поставщика {$a}.';
$string['mnetidprovidernotfound'] = 'К сожалению, более подробной информации не найдено.';
$string['mnetpeers'] = 'Сайты сети MNet';
$string['mnetservices'] = 'Службы MNet';
$string['mnet_session_prohibited'] = 'Пользователи Вашего сервера не имеют доступа к {$a}.';
$string['mnetsettings'] = 'Настройки MNet';
$string['moodle_home_help'] = 'Путь к домашней странице приложения MNet на удаленном сайте, например: /moodle/.';
$string['name'] = 'Имя';
$string['net'] = 'Сетевое взаимодействие MNet';
$string['networksettings'] = 'Сетевые настройки';
$string['never'] = 'Никогда';
$string['noaclentries'] = 'Нет записей в списке контроля доступа SSO';
$string['noaddressforhost'] = 'К сожалению, не удается получить IP-адрес для этого имени сайта ({$a})!';
$string['nocurl'] = 'Библиотека PHP cURL не установлена';
$string['nolocaluser'] = 'Не создано локальных записей для этого пользователя внешнего сайта, и они не могут быть созданы, так как на этом сайте не разрешено автоматическое создание пользователей. Пожалуйста, свяжитесь с администратором!';
$string['nomodifyacl'] = 'Вам не разрешено изменение списка контроля доступа MNet.';
$string['nonmatchingcert'] = 'Имя, указанное в сертификате:<br /><em>{$a->subject}</em><br />не соответствует сайту, с которого он получен:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Возникла проблема получения открытого ключа.<br />Возможно, на сайте не включено взаимодействие MNet или используется некорректный ключ.';
$string['nosite'] = 'Не удается найти курс уровня сайта';
$string['nosuchfile'] = 'Файл/функция «{$a}» не существует';
$string['nosuchfunction'] = 'Не удается найти функцию, или функция запрещена для RPC';
$string['nosuchmodule'] = 'Указан некорректный адрес функция и она не может быть найдена. Пожалуйста, используйте формат mod/modulename/lib/functionname';
$string['nosuchpublickey'] = 'Не удается получить открытый ключ для проверки подписи';
$string['nosuchservice'] = 'Сервис RPC не запущен на этом сайте';
$string['nosuchtransport'] = 'Не существует способа соединения с этим идентификатором.';
$string['notBASE64'] = 'Эта строка не является строкой в формате base64. Она не может быть правильным ключем';
$string['notenoughidpinfo'] = 'Ваш сайт не предоставил нам достаточно информации, чтобы создать или обновить Ваш аккаунт на этом сайте. Извините!';
$string['not_in_range'] = 'IP-адрес <code>{$a}</code> не входит в список доверенных адресов.';
$string['notinxmlrpcserver'] = 'Вы пытаетесь получить доступ к клиенту MNet в обход сервера XML-RPC.';
$string['notmoodleapplication'] = 'ПРЕДУПРЕЖДЕНИЕ: Это не приложение Moodle, некоторые из методов проверки могут работать неверно';
$string['notPEM'] = 'Этот ключ не в формате PEM. Он не будет работать.';
$string['notpermittedtojump'] = 'У Вас нет прав для начала удаленного сеанса с этого сервера Moodle.';
$string['notpermittedtojumpas'] = 'Вы не можете начать удаленный сеанс, пока Вы авторизованы как другой пользователь.';
$string['notpermittedtoland'] = 'У Вас нет разрешения, чтобы начать удаленный сеанс.';
$string['off'] = 'Выкл.';
$string['on'] = 'Вкл.';
$string['options'] = 'Параметры';
$string['peerprofilefielddesc'] = 'Здесь Вы можете переопределить глобальные настройки того, какие поля профилей пользователей экспортируются и импортируются при создании новых пользователей.';
$string['permittedtransports'] = 'Разрешенные способы соединения';
$string['phperror'] = 'Внутренняя ошибка PHP предотвратила выполнение Вашего запроса.';
$string['position'] = 'Положение';
$string['postrequired'] = 'Функции на удаление необходим POST-запрос';
$string['profileexportfields'] = 'Поля для отправки';
$string['profilefielddesc'] = 'Здесь вы можете настроить список полей профиля, которые посылаются и получаются через MNet при создании или обновлении учетных записей пользователей. Вы можете также переопределить их для каждого сайта сети MNet индивидуально. Обратите внимание, что следующие поля всегда должны быть отправлены и не могут быть пропущены: {$a}';
$string['profilefields'] = 'Поля профиля';
$string['profileimportfields'] = 'Поля для импорта';
$string['promiscuous'] = 'Открытый режим';
$string['publickey'] = 'Открытый ключ';
$string['publickey_help'] = 'Открытый ключ получен автоматически с удаленного сервера.';
$string['publickeyrequired'] = 'Вы должны предоставить открытый ключ.';
$string['publish'] = 'Опубликовать';
$string['reallydeleteserver'] = 'Вы действительно хотите удалить сервер';
$string['receivedwarnings'] = 'Были получены следующие предупреждения';
$string['recordnoexists'] = 'Запись не существует.';
$string['reenableserver'] = 'Нет - выберите эту опцию, чтобы повторно включить этот сайт';
$string['registerallhosts'] = 'Регистрировать все сайты (открытый режим)';
$string['registerallhostsexplain'] = 'Вы можете разрешить автоматическую регистрацию всех сайтов, которые попытаются подключиться к Вашему сайту. Это означает, что в списке сайтов появится запись «Все сайты», соответствующая любому сайту, который подключился к Вашему сайту и запросил открытый ключ.<br />Ниже Вы можете настроить службы для варианта «Все сайты». Все службы, которые Вы включите для варианта «Все сайты» станут доступны любому сайту.';
$string['registerhostsoff'] = 'Автоматическая регистрация всех сайтов в данный момент <b>выключена</b>';
$string['registerhostson'] = 'Автоматическая регистрация всех сайтов в данный момент <b>включена</b>';
$string['remotecourses'] = 'Внешние курсы';
$string['remotehost'] = 'Внешний сайт';
$string['remotehosts'] = 'Внешние сайты';
$string['remoteuser'] = 'Внешний пользователь {$a->remotetype}';
$string['remoteuserinfo'] = 'Профиль получен с <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Для сетевого взаимодействия требуется расширение OpenSSL языка PHP';
$string['restore'] = 'Восстановление';
$string['returnvalue'] = 'Возвращенное значение';
$string['reviewhostdetails'] = 'Просмотр деталей сайта';
$string['reviewhostservices'] = 'Просмотр служб сайта';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP (без шифрования)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (самоподписанный сертификат)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (самоподписанный сертификат)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (подписанный сертификат)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (подписанный сертификат)';
$string['selectaccesslevel'] = 'Пожалуйста, выберите режим доступа из списка';
$string['selectahost'] = 'Пожалуйста, выберите сайт.';
$string['service'] = 'Имя службы';
$string['serviceid'] = 'ID службы';
$string['servicesavailableonhost'] = 'Службы, доступные на сайте «{$a}»';
$string['serviceswepublish'] = 'Службы, которые мы опубликовали для сайта «{$a}».';
$string['serviceswesubscribeto'] = 'Службы сайта «{$a}», на которые мы подписаны.';
$string['settings'] = 'Настройки';
$string['showlocal'] = 'Показать локальных пользователей';
$string['showremote'] = 'Показать внешних пользователей';
$string['ssl_acl_allow'] = 'Контроль доступа SSO: Разрешить вход пользователя «{$a->user}» с сайта «{$a->host}»';
$string['ssl_acl_deny'] = 'Контроль доступа SSO: Запретить вход пользователя «{$a->user}» с сайта «{$a->host}»';
$string['sslverification'] = 'Верификация SSL';
$string['sslverification_help'] = 'Этот параметр позволяет настроить уровень безопасности при соединении с использованием HTTPS.

* Нет: безопасность отсутствует
* Проверять только хост: проверяет домен SSL-сертификата
* Проверять хост и выдавшего (рекомендуется): проверяет домен и выдавшего SSL-сертификат';
$string['ssoaccesscontrol'] = 'Контроль доступа SSO';
$string['ssoacldescr'] = 'Используйте эту страницу для предоставления или запрета доступа к Вашему сайту конкретным пользователям с сайтов сети MNet. Это целесообразно, когда Вы предоставляете возможность входа в систему без повторного ввода логина и пароля (SSO) пользователям других сайтов. Для того, чтобы дать возможность пользователям <em>Вашего сайта</em> переходить на другие сайты сети MNet, используйте систему ролей, чтобы дать пользователям право <em>moodle/site:mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Чтобы этот функционал заработал, Вы должны включить параметр «Сетевое взаимодействие MNet» и активировать плагин аутентификации MNet.';
$string['strict'] = 'Строгий';
$string['subscribe'] = 'Подписаться';
$string['system'] = 'Система';
$string['testclient'] = 'Тестовый клиент MNet';
$string['testtrustedhosts'] = 'Проверка адреса';
$string['testtrustedhostsexplain'] = 'Введите IP-адрес, чтобы убедиться, что он входит в число доверенных адресов.';
$string['theypublish'] = 'Они опубликовали';
$string['theysubscribe'] = 'Они подписались на';
$string['transport_help'] = 'Эти опции - обоюдные, то есть Вы можете вынудить другой сайт использовать подписанный сертификат SSL, только если у Вас тоже есть подписанный сертификат SSL.';
$string['trustedhosts'] = 'Доверенные адреса XML-RPC';
$string['trustedhostsexplain'] = '<p>Механизм доверенных адресов разрешает определенным машинам выполнять вызовы по протоколу XML-RPC к любой части Moodle API. Это позволит управлять поведением Moodle извне, поэтому установка этого параметра - очень опасное действие. Если Вы не знаете, что делать, лучше оставьте это поле пустым. </p>
<p><strong>Включение этого параметра не требуется ни длля каких из стандартных возможностей MNet!</strong> Настраивайте этот параметр, только если Вы точно знаете, что делаете.</p>
<p>Чтобы включить доверенные адреса, введите список их IP-адресов или сетей, по одному в каждой строке. Примеры:</p>Локальный компьютер:<br />127.0.0.1<br />Ваш локальный компьютер (c указанием подсети):<br />127.0.0.1/32<br />Только компьютер с IP-адресом 192.168.0.7:<br />192.168.0.7/32<br />Любые компьютеры с IP-адресом между 192.168.0.1 и 192.168.0.255:<br />192.168.0.0/24<br />Любые компьютеры:<br />192.168.0.0/0<br />Очевидно, использование последнего варианта <strong>НЕ</strong> рекомендуется.';
$string['turnitoff'] = 'Выключить';
$string['turniton'] = 'Включить';
$string['type'] = 'Тип';
$string['unknown'] = 'Неизвестно';
$string['unknownerror'] = 'Неизвестная ошибка произошла во время согласования.';
$string['usercannotchangepassword'] = 'Вы не можете изменить здесь свой пароль, поскольку Вы пользователь другого сайта.';
$string['userchangepasswordlink'] = '<br />Вы можете изменить свой пароль на сайте <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usernotfullysetup'] = 'Не все поля Вашего профиля пользователя заполнены. Вам нужно перейти <a href="{$a}">на свой сайт</a> и убедиться, что все поля Вашего профиля заполнены. Возможно, Вам придется выйти из системы и войти снова, чтобы изменения вступили в силу.';
$string['usersareonline'] = 'Предупреждение: пользователи с этого сайта ({$a}) в данный момент авторизованы на Вашем сайте.';
$string['validated_by'] = 'Это адрес проверен правилом: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Проверять хост и выдавшего';
$string['verifyhostonly'] = 'Проверять только хост';
$string['verifysignature-error'] = 'Ошибка проверки подписи.';
$string['verifysignature-invalid'] = 'Ошибка проверки подписи. Похоже, что запрос был подписан не Вами.';
$string['version'] = 'Версия';
$string['warning'] = 'Предупреждение';
$string['wrong-ip'] = 'Ваш IP-адрес не соответствует адресу, который хранится у нас';
$string['xmlrpc-missing'] = 'У Вас должно быть установлено расширение XML-RPC языка PHP, чтобы использовать эту возможность.';
$string['yourhost'] = 'Ваш сайт';
$string['yourpeers'] = 'Ваши сайты';
