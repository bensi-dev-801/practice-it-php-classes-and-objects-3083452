<?php

include '_includes.php';

$admin = new Member();
$admin->username = 'acme_administrator';

$member = new Member();
$member->username = 'acme_member';

$myWorkspace = $admin->createWorkspace('acme');
$admin->addWorkspaceMember($member, $myWorkspace);

echonl($myWorkspace->getUrl());
echonl($myWorkspace->members);

$myChat = $member->createChat('Learning PHP', $myWorkspace);
$message01 = $member->postMessageToChat('I really like learning PHP', $myChat);

echonl($myChat);
echonl($myWorkspace);


/*
$moderator = new Member();
$moderator->username = 'moderator';
$moderator->role = 'admin';

$tester01 = new Member();
$tester01->username = 'tester01';
$tester01->role = 'member';

$tester02 = new Member();
$tester02->username = 'tester02';
$tester02->role = 'member';


$phpError = new Message();
$phpError->content = 'I need help';
$phpError->author = $tester01->username;
$phpError->date = 'Sept. 11, 2024';

$modIntro = new Message();
$modIntro->content = 'Let me introduce myself';
$modIntro->author = $moderator->username;
$modIntro->date = 'Sept. 08, 2024';

$chatIntro = new Chat();
$chatIntro->title = 'Intro';
$chatIntro->messages = [$modIntro];

$chatHelp = new Chat();
$chatHelp->title = 'Help';
$chatHelp->messages = [$phpError];

$myWorkspace = new Workspace();
$myWorkspace->url = 'ebensi';
$myWorkspace->chats = [$chatIntro->title, $chatHelp->title];
$myWorkspace->members = [$moderator, $tester01, $tester02];
*/