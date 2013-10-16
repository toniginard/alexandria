<?PHP // $Id$ 
      // forum.php - created with Moodle 1.9.5 (Build: 20090520) (2007101550)


$string['addanewdiscussion'] = '添加一个新讨论话题';
$string['addanewquestion'] = '添加一个新问题';
$string['addanewtopic'] = '添加一个新话题';
$string['advancedsearch'] = '高级搜索';
$string['aggregateavg'] = '平均分';
$string['aggregatecount'] = '总数';
$string['aggregatecountformat'] = '{$a->count} (成绩：{$a->grade})';
$string['aggregatemax'] = '最高分';
$string['aggregatemin'] = '最低分';
$string['aggregatenone'] = '不计成绩';
$string['aggregatesum'] = '总分';
$string['aggregatetype'] = '成绩汇总类型';
$string['ajaxrating'] = '开启 AJAX 评价';
$string['allforums'] = '全部讨论区';
$string['allowchoice'] = '允许每个人选择';
$string['allowdiscussions'] = '允许 {$a} 在此讨论区发帖吗?';
$string['allowratings'] = '允许对帖子评分吗?';
$string['allowsallsubscribe'] = '该讨论区允许每个人选择是否订阅帖子。';
$string['allowsdiscussions'] = '该讨论区允许每个人发起新话题。';
$string['allsubscribe'] = '订阅所有的论坛';
$string['allunsubscribe'] = '退订所有的论坛';
$string['anyfile'] = '任何文件';
$string['attachment'] = '附件';
$string['blockafter'] = '被阻塞前帖数极限';
$string['blockperiod'] = '阻塞统计周期';
$string['blockperioddisabled'] = '不阻塞';
$string['bynameondate'] = '由 {$a->name} 发表于 {$a->date}';
$string['cannotadddiscussion'] = '在讨论区中添加讨论需要是组内成员';
$string['cannotadddiscussionall'] = '您没有增加讨论主题的权限';
$string['cannotviewpostyet'] = '在这个讨论中您不能阅读别的同学的问题因为您没有权限';
$string['cleanreadtime'] = '在旧帖中标记阅读时间';
$string['configajaxrating'] = 'AJAX 评价可以增强论坛评价系统的可用性。若开启，则用户在评价时无需到页面底部点击的评价按钮。在站点和用户的 AJAX 选项均开启时此功能才能生效。';
$string['configcleanreadtime'] = '一天中从“已读”表格中清除旧帖子的时间';
$string['configdisplaymode'] = '讨论的缺省显示模式';
$string['configenablerssfeeds'] = '这个选项允许所有的论坛支持 RSS 种子。您仍需手工激活每一个论坛配置中的 RSS 种子选项。';
$string['configenabletimedposts'] = '如果您想在讨论区中发表帖子时显示周期，将次设置为“yes”';
$string['configlogblocked'] = '讨论区 cron 可能记录下拦截到的无效的用户 E-mail 信息。';
$string['configlongpost'] = '超过该长度(字符个数，不含 HTML)的帖子被认为是长的。在站点首页、社区格式的课程页或用户资料显示的帖子会被精简到一个自然的中断位置，其长度在 forum_shortpost 和 forum_longpost 之间。';
$string['configmanydiscussions'] = '每页显示的讨论主题数';
$string['configmaxbytes'] = '缺省的所有论坛最大附件尺寸(受课程设置和本地配置的限制)';
$string['configoldpostdays'] = '帖子在多少天后应当被视为已读。';
$string['configreplytouser'] = '当通过电子邮件发送论坛中的帖子时，是否将用户的电子邮件地址加入其中，以便收信人直接而不是通过论坛回复发帖人？即使设置为“是”，用户仍可以在他们的个人资料里设置email地址为秘密。';
$string['configshortpost'] = '少于该长度(字符个数，不含 HTML)的帖子被认为是短的（见下一项）。';
$string['configtrackreadposts'] = '如果希望跟踪每一个用户的已读/未读信息则设定为“是”。';
$string['configusermarksread'] = '若设定为“是”则用户必须手动将帖子标记为已读。如果设定为“否”，则帖子被浏览时自动标记为已读。';
$string['couldnotadd'] = '由于一个未知的错误，您的帖子无法发表';
$string['couldnotdeleteratings'] = '很抱歉，已经被评分的帖子不能删除';
$string['couldnotdeletereplies'] = '很抱歉，已经有跟帖的帖子不能删除';
$string['couldnotupdate'] = '由于一个未知的错误，您的帖子无法更新';
$string['delete'] = '删除';
$string['deleteddiscussion'] = '讨论话题已被删除';
$string['deletedpost'] = '帖子已删除';
$string['deletedposts'] = '那些帖子已删除';
$string['deletesure'] = '您确定要删除该帖吗?';
$string['deletesureplural'] = '您确定要删除这个帖子及其回复吗？({$a} 个帖子)';
$string['digestmailheader'] = '这是 {$a->sitename} 论坛的每日新帖摘要。要修改您的关于论坛的偏好，请访问 {$a->userprefs}。';
$string['digestmailprefs'] = '您的用户信息';
$string['digestmailsubject'] = '{$a}: 论坛摘要';
$string['digestsentusers'] = '已经成功地给 {$a} 位用户发送了 E-mail 摘要。';
$string['disallowsubscribe'] = '不允许订阅';
$string['disallowsubscribeteacher'] = '不允许订阅(教师除外)';
$string['discussion'] = '话题';
$string['discussionmoved'] = '该讨论已被移到“{$a}”。';
$string['discussionmovedpost'] = '此话题已经移到</a>讨论区<a href=\"{$a->forumhref}\">{$a->forumname}</a>中的<a href=\"{$a->discusshref}\">这里了</a>';
$string['discussionname'] = '话题名称';
$string['discussions'] = '话题';
$string['discussionsstartedby'] = '由 {$a} 发起的话题';
$string['discussionsstartedbyrecent'] = '最近由 {$a} 发起的话题';
$string['discussthistopic'] = '讨论这个话题';
$string['displayend'] = '结束时间';
$string['displaymode'] = '显示模式';
$string['displayperiod'] = '可视时段';
$string['displaystart'] = '开始时间';
$string['eachuserforum'] = '每个人发表一个话题';
$string['edit'] = '编辑';
$string['editedby'] = '由 {$a->name} 修改 - 原提交时间 {$a->date}';
$string['editing'] = '正在编辑';
$string['emptymessage'] = '您的帖子有点错误。大概是您没有填写内容，或附件太大。您的更改<b>没有</b>保存。';
$string['everyonecanchoose'] = '每个人均可选择订阅';
$string['everyonecannowchoose'] = '每个人均可选择现在就订阅';
$string['everyoneisnowsubscribed'] = '每个人均可现在订阅该讨论区';
$string['everyoneissubscribed'] = '每个人都订阅该讨论区';
$string['existingsubscribers'] = '个已订阅的用户';
$string['forcessubscribe'] = '该讨论区强制每个人都订阅。';
$string['forcesubscribe'] = '强制每个人都订阅';
$string['forcesubscribeq'] = '是否强制订阅讨论区';
$string['forum'] = '讨论区';
$string['forum:addnews'] = '发布新闻';
$string['forum:createattachment'] = '上传附件';
$string['forum:deleteanypost'] = '删除任何帖子（任何时间）';
$string['forum:deleteownpost'] = '删除自己的帖子（在截止时间之内）';
$string['forum:editanypost'] = '编辑任何帖子';
$string['forum:initialsubscriptions'] = '初始订阅';
$string['forum:managesubscriptions'] = '管理订阅';
$string['forum:movediscussions'] = '移动话题';
$string['forum:rate'] = '评价帖子';
$string['forum:replynews'] = '回复新闻';
$string['forum:replypost'] = '回复帖子';
$string['forum:splitdiscussions'] = '分割话题';
$string['forum:startdiscussion'] = '开启新的话题';
$string['forum:throttlingapplies'] = '调节申请';
$string['forum:viewanyrating'] = '查看任何评价';
$string['forum:viewdiscussion'] = '阅读话题';
$string['forum:viewhiddentimedposts'] = '阅读隐藏的定时帖子';
$string['forum:viewqandawithoutposting'] = '始终可看提问帖和回答帖';
$string['forum:viewrating'] = '查看评价';
$string['forum:viewsubscribers'] = '查看订阅者';
$string['forumauthorhidden'] = '作者(隐藏)';
$string['forumblockingalmosttoomanyposts'] = '您已经达到发帖的极限。在过去的 {$a->blockperiod} 里，您已经发表了 {$a->numposts} 个帖子。这个极限是 {$a->blockafter} 个帖子。';
$string['forumbodyhidden'] = '您不能看这个帖子，可能因为您还没有参与到这个话题中。';
$string['forumintro'] = '讨论区简介';
$string['forumname'] = '讨论区名称';
$string['forumposts'] = '讨论区帖子';
$string['forums'] = '讨论区';
$string['forumsubjecthidden'] = '主题(隐藏)';
$string['forumtracked'] = '跟踪未读帖子';
$string['forumtrackednot'] = '不跟踪未读帖子';
$string['forumtype'] = '讨论区类型';
$string['generalforum'] = '一般用途的标准讨论区';
$string['generalforums'] = '普通讨论区';
$string['inforum'] = '在 {$a} 里';
$string['intronews'] = '普通新闻与通告';
$string['introsocial'] = '开放的讨论区，可以随便聊聊';
$string['introteacher'] = '教师专用讨论区';
$string['invalidrate'] = '无效的评价 ({$a})';
$string['lastpost'] = '最后的帖子';
$string['learningforums'] = '学习讨论区';
$string['logblocked'] = '在日志中记录拦截的 E-mail';
$string['longpost'] = '长帖';
$string['mailnow'] = '立刻发送邮件';
$string['manydiscussions'] = '每页讨论的话题数';
$string['markalldread'] = '将此话题中的所有帖子标记为已读';
$string['markallread'] = '将此讨论区中的所有帖子标记为已读';
$string['markread'] = '标记为已读';
$string['markreadbutton'] = '标记<br />已读';
$string['markunread'] = '标记为未读';
$string['markunreadbutton'] = '标记<br />未读';
$string['maxattachmentsize'] = '允许上传的附件大小';
$string['maxtimehaspassed'] = '很抱歉，编辑该帖的时间限制({$a})已过！';
$string['message'] = '正文';
$string['missingsearchterms'] = '下列搜索词只出现在正文的 HTML 标记中：';
$string['modeflatnewestfirst'] = '列表显示回帖内容，新帖在前';
$string['modeflatoldestfirst'] = '列表显示回帖内容，旧帖在前';
$string['modenested'] = '嵌套显示回帖内容';
$string['modethreaded'] = '树状显示回帖标题';
$string['modulename'] = '讨论区';
$string['modulenameplural'] = '讨论区';
$string['more'] = '更多';
$string['movedmarker'] = '（移动）';
$string['movethisdiscussionto'] = '将此论题移至...';
$string['namenews'] = '新闻讨论区';
$string['namesocial'] = '公众讨论区';
$string['nameteacher'] = '教师讨论区';
$string['newforumposts'] = '新帖子';
$string['nodiscussions'] = '该讨论区尚无讨论话题';
$string['nodiscussionsstartedby'] = '没有此用户发起的话题';
$string['noguestpost'] = '很抱歉，访客不允许发帖';
$string['noguestsubscribe'] = '很抱歉，系统不允许访客用 E-mail 订阅讨论区的帖子。';
$string['noguesttracking'] = '很抱歉，访客不能设定跟踪选项。';
$string['nomorepostscontaining'] = '未找到关键词是“{$a}”的帖子';
$string['nonews'] = '尚无消息发布';
$string['nopostforum'] = '很抱歉，您不能在此论坛发帖子';
$string['noposts'] = '没有帖子';
$string['nopostscontaining'] = '找不到包含“{$a}”的帖子';
$string['noquestions'] = '此讨论区尚无人提问';
$string['noratinggiven'] = '未给出评价';
$string['nosubscribers'] = '尚无人订阅此讨论区';
$string['nothingnew'] = '{$a} 中没有什么新东西';
$string['notingroup'] = '很抱歉, 您需要是一个组的成员才能浏览这个论坛。';
$string['notrackforum'] = '不跟踪未读消息';
$string['noviewdiscussionspermission'] = '您无权查看这个讨论区的话题';
$string['nowallsubscribed'] = '已订阅 {$a} 中的所有讨论区';
$string['nowallunsubscribed'] = '已退订 {$a} 中的所有讨论区';
$string['nownotsubscribed'] = '{$a->name} 将<b>不</b>再收到含有“{$a->forum}”帖子复件的电子邮件。';
$string['nownottracking'] = '{$a->name} 不再跟踪“{$a->forum}”了。';
$string['nowsubscribed'] = '{$a->name} 将收到含有“{$a->forum}”帖子复件的电子邮件。';
$string['nowtracking'] = '{$a->name} 现在跟踪“{$a->forum}”。';
$string['numposts'] = '{$a} 个帖子';
$string['olderdiscussions'] = '旧的讨论话题';
$string['oldertopics'] = '旧些的话题';
$string['oldpostdays'] = '多少天后可以阅读';
$string['openmode0'] = '不能发起新话题，也不能回帖';
$string['openmode1'] = '不能发起新话题，但允许回复';
$string['openmode2'] = '发起新话题和回帖均允许';
$string['overviewnumpostssince'] = '个新帖子，自从上次登录以来';
$string['overviewnumunread'] = '个未阅读';
$string['parent'] = '显示父帖子';
$string['parentofthispost'] = '该帖的父帖';
$string['postadded'] = '<p>您的帖子已经成功发表。</p>
<p>如果需要，可以在 {$a} 内修改它。</p>';
$string['postaddedsuccess'] = '您的帖子已成功发布';
$string['postaddedtimeleft'] = '{$a}内您可以对其进行修改';
$string['postincontext'] = '在上下文中看此帖';
$string['postmailinfo'] = '这是一份来自网站 {$a} 的帖子。
点击下面的链接便可在网站上回帖:';
$string['postmailnow'] = '<p>这个帖子将会被立即发到所有的讨论订阅者那里去</p>';
$string['postrating1'] = '极端独立型';
$string['postrating2'] = '独立型与情景型兼备';
$string['postrating3'] = '极端情况型';
$string['posts'] = '帖子';
$string['posttoforum'] = '发到论坛上';
$string['postupdated'] = '您的帖子已经更新';
$string['potentialsubscribers'] = '潜在订阅者';
$string['processingdigest'] = '正在为用户 {$a} 处理邮件摘要';
$string['processingpost'] = '正在处理帖子 {$a}';
$string['prune'] = '分割';
$string['prunedpost'] = '从该帖子创建了新的论题';
$string['pruneheading'] = '分割论题并将此帖子移到一个新的论题中';
$string['qandaforum'] = '问题及解答讨论区';
$string['qandanotify'] = '这是一个提问和回答的讨论。为了能看到其他人的回应，首先您需要帖出您的答案';
$string['rate'] = '评价';
$string['rating'] = '等级';
$string['ratingeveryone'] = '所有人可以评价';
$string['ratingno'] = '无评价';
$string['ratingonlyteachers'] = '只有 {$a} 可以发表评价';
$string['ratingpublic'] = '{$a} 能看见每个人的等级';
$string['ratingpublicnot'] = '{$a} 只能看见他们自己的等级';
$string['ratings'] = '评价';
$string['ratingssaved'] = '评价已保存';
$string['ratingsuse'] = '用户等级';
$string['ratingtime'] = '仅该时间段内可以评分';
$string['re'] = '回复:';
$string['readtherest'] = '阅读该话题的其它帖子';
$string['replies'] = '回帖';
$string['repliesmany'] = '迄今有 {$a} 个回帖';
$string['repliesone'] = '迄今有 {$a} 个回帖';
$string['reply'] = '回复';
$string['replyforum'] = '回复到论坛';
$string['replytouser'] = '使用 E-mail 地址回复';
$string['resetforums'] = '删除哪类讨论区类型中帖子';
$string['resetforumsall'] = '删除所有的帖子';
$string['resetsubscriptions'] = '删除对讨论区的订阅';
$string['resettrackprefs'] = '删除讨论区中的所有跟踪参数';
$string['rsssubscriberssdiscussions'] = '显示话题“{$a}”的 RSS 种子';
$string['rsssubscriberssposts'] = '显示帖子“{$a}”的 RSS 种子';
$string['search'] = '搜索';
$string['searchdatefrom'] = '帖子必须在此时间之后发布';
$string['searchdateto'] = '帖子必须在此时间之前发布';
$string['searchforumintro'] = '请在下面的一个或多个项目中输入搜索词条：';
$string['searchforums'] = '搜索讨论区';
$string['searchfullwords'] = '这些词应当作为完整的词出现';
$string['searchnotwords'] = '这些词应当不包含在其中';
$string['searcholderposts'] = '搜索旧帖子...';
$string['searchphrase'] = '这个词组必须出现在帖子中';
$string['searchresults'] = '搜索结果';
$string['searchsubject'] = '这些文字应当出现在标题中';
$string['searchuser'] = '此名字要和作者匹配';
$string['searchuserid'] = '作者的Moodle ID';
$string['searchwhichforums'] = '选择要搜索哪个讨论区';
$string['searchwords'] = '这些文字可以在帖子的任何位置出现';
$string['seeallposts'] = '查看此用户发表的全部帖子';
$string['sendinratings'] = '呈送我的最新评分';
$string['shortpost'] = '短帖';
$string['showsubscribers'] = '显示/修改订阅者';
$string['singleforum'] = '单个简单话题';
$string['startedby'] = '发起人';
$string['subject'] = '主题';
$string['subscribe'] = '订阅此讨论区';
$string['subscribeall'] = '让所有人订阅此讨论区';
$string['subscribed'] = '订阅';
$string['subscribenone'] = '让所有人退订此讨论区';
$string['subscribers'] = '订阅者';
$string['subscribersto'] = '订阅“{$a}”者';
$string['subscribestart'] = '此论坛有新帖就发电子邮件给我';
$string['subscribestop'] = '此论坛有新帖不要发电子邮件给我';
$string['subscription'] = '订阅';
$string['subscriptions'] = '订阅';
$string['thisforumisthrottled'] = '这个讨论区有规定周期内发帖数的限制，它被设置为 {$a->blockperiod} 内最多发 {$a->blockafter} 个帖子。';
$string['timedposts'] = '定时帖子';
$string['timestartenderror'] = '可视时段的结束时间不能早于开始时间。';
$string['trackforum'] = '跟踪未读信息';
$string['tracking'] = '跟踪';
$string['trackingoff'] = '关闭';
$string['trackingon'] = '开启';
$string['trackingoptional'] = '可选';
$string['trackingtype'] = '是否跟踪此讨论区的阅读情况';
$string['unread'] = '未读';
$string['unreadposts'] = '未读帖子';
$string['unreadpostsnumber'] = '{$a} 条未读帖子';
$string['unreadpostsone'] = '1 条未读帖子';
$string['unsubscribe'] = '不再订阅该讨论区';
$string['unsubscribeall'] = '取消所有的论坛订阅';
$string['unsubscribeallconfirm'] = '您订阅了 {$a} 论坛的消息，您确认要取消所有论坛订阅和论坛自动订阅吗？';
$string['unsubscribealldone'] = '您所有的订阅已被取消，但仍能收到强制订阅的资料。如果您不想收到本站点的任何资料，请更改您个人资料部分。';
$string['unsubscribeallempty'] = '抱歉，您没有订阅任何论坛如果您不想收到本站点的任何资料，请更改您个人资料部分。';
$string['unsubscribed'] = '未订阅';
$string['unsubscribeshort'] = '退订';
$string['usermarksread'] = '手动标记阅读消息';
$string['warnafter'] = '发多少帖后警告';
$string['yesforever'] = '是的，永远这样';
$string['yesinitially'] = '是的，初始设为这样';
$string['youratedthis'] = '您对此评分';
$string['yournewquestion'] = '您的新问题';
$string['yournewtopic'] = '您的新讨论话题';
$string['yourreply'] = '您的回复';

?>
