<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases commonly used throughout Q2A


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php

	translate by Hongbo Yin<root@yinhongbo.com>
*/

return array(
    'a_commented_body' => "^c_handle评论了你在^site_title的回答：\n\n^open^c_content^close\n\n你的回答是：^open^c_context^close\n\n添加回复请点击下面链接：\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n\n^site_title",
    'a_commented_subject' => "你在 ^site_title 的回复有了新评论！",
    'a_followed_body' => "^q_handle 追问了你在 ^site_title 上的回答：\n\n^open^q_title^close\n\n你的回答是：\n\n^open^a_content^close\n\n点击下面的链接来回答该问题：\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n\n^site_title",
    'a_followed_subject' => "你在^site_title的回答有了新追问。",
    'a_selected_body' => "恭喜！你在^site_title上的回答已被 ^s_handle 采纳：\n\n^open^a_content^close\n\n问题内容是：\n^open^q_title^close\n\n点击下面的链接来查看你的回答：\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'a_selected_subject' => "你在 ^site_title 上的回答已被采纳！",
    'c_commented_body' => "^c_handle在 ^site_title 的评论后添加了新的评论：\n\n^open^c_content^close\n\n关注的讨论：\n^open^c_context^close\n\n回复另一个评论：\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n\n^site_title",
    'c_commented_subject' => "你的 ^site_title 已经增加到",
    'confirm_body' => "请点击下面的链接来完成你在 ^site_title 的邮箱验证：\n\n^url\n\n确认码 ^code \n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'confirm_subject' => "^site_title - 邮箱验证",
    'feedback_body' => "评论：\n^message\n\n昵称：\n^name\n\n邮箱：\n^email\n\n上一页：\n^previous\n\n用户：\n^url\n\nIP地址：\n^ip\n\n浏览器：\n^browser",
    'feedback_subject' => "^ 反馈",
    'flagged_body' => "^p_handle 的帖子被举报为 ^flags：\n\n^open^p_context^close\n\n点击下面链接来查看贴子：\n\n^url\n\n点击下面的链接来查看所有已举报的帖子：\n\n^a_url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'flagged_subject' => "^site_title 有一个帖子被举报了",
    'moderate_body' => "^p_handle 的帖子需要你的审核：\n\n^open^p_context^close\n\n点击下面的链接批准或者拒绝：\n\n^url\n\n点击下面的链接来查看队列中所有的帖子：\n\n^a_url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n\n^site_title",
    'moderate_subject' => "^site_title 适度",
    'new_password_body' => "你在 ^site_title 上的新密码如下：\n\n密码：^password\n\n建议登录后立刻更改密码。\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title\n^url",
    'new_password_subject' => "^site_title - 你的新密码",
    'private_message_body' => "你在^site_title 上收到^f_handle的私信:\n\n^open^message^close\n\n^more 谢谢,\n\n^site_title\n\n\n可以在账户设置页面关闭私信功能:\n^a_url",
    'private_message_info' => "更多关于 ^f_handle 的信息：\n\n^url\n\n",
    'private_message_reply' => "点击下面链接回复 ^f_handle 发给你的私信：\n\n^url\n\n",
    'private_message_subject' => "^site_title 上 ^f_handle 给发来了一条消息",
    'q_answered_body' => "^a_handle 回答了你在^site_title提出的问题：\n\n^open^a_content^close\n\n你的问题是：\n\n^open^q_title^close\n\n如果你认为这就是你想要的答案，你可以选择为最佳答案：\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'q_answered_subject' => "你在 ^site_title 提出的问题有了新回复",
    'q_commented_body' => "^c_handle 评论了你在 ^site_title 上的问题：\n\n^open^c_content^close\n\n你的问题是：^open^c_context^close\n\n回复该评论：\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n\n^site_title",
    'q_commented_subject' => "你在 ^site_title 的提问有了新评论",
    'q_posted_body' => "^q_handle 问了一个新的问题：\n\n^open^q_title\n\n^q_content^close\n\n点击下面的链接来查看问题：\n\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'q_posted_subject' => "^site_title 有了新的提问",
    'remoderate_body' => "需要你审核 ^p_handle 重编辑过的帖子：\n\n^open^p_context^close\n\n点击下面的链接来批准或者隐藏编辑：\n\n^url\n\n点击下面的链接预览所有队列中的帖子：\n\n^a_url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n\n^site_title",
    'remoderate_subject' => "^site_title 适度",
    'reset_body' => "请点击下面的链接，重置你在 ^site_title 的密码：\n\n^url\n\n或者，在规定的字段中输入下面的代码：\n代码：^code\n\n如果你没有要求重置密码，请忽略此消息。\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'reset_subject' => "^site_title - 密码重置",
    'to_handle_prefix' => "^, \n\n",
    'u_registered_body' => "一个新用户已经注册为 ^u_handle。\n\n点击下面的链接来查看用户资料：\n\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'u_registered_subject' => "^site_title 有新用户注册",
    'u_to_approve_body' => "一个新用户已经注册为 ^u_handle。\n\n点击下面的链接来审核用户：\n\n^url\n\n 点击下面的链接来查看所有待审核用户\n\n^a_url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'u_approved_body' => "你可以查看你新的用户资料：\n\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'u_approved_subject' => "你在 ^site_title 的账户已通过审核。",
    'wall_post_body' => "^f_handle 在你 ^site_title 的墙上发表了一个帖子：\n\n^open^post^close\n\n回复点这里：\n\n^url\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title",
    'wall_post_subject' => "发帖到你 ^site_title 的墙上。",
    'welcome_body' => "感谢注册 ^site_title。\n\n^custom^confirmYour 登录详情：\n邮箱：^handle^email\n\n请保留该信息，以备日后参考。\n\n该邮件为系统所发，请勿直接回复本邮件！谢谢！\n^site_title\n^url",
    'welcome_confirm' => "请点击下面的链接来验证你的邮箱地址：\n\n^url",
    'welcome_subject' => "欢迎来到 ^site_title!",
);
