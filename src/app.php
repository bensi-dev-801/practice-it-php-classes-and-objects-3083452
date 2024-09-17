<?php

include '_includes.php';

$admin = new Member('acme_admin');

$member = new Member('acme_member');

$temp_member = new Member('john_doe');

$workspace = $admin->createWorkspace('acme');
$admin->addWorkspaceMember($member, $workspace);

echonl($workspace->getUrl());
echonl($workspace->members);

$chat = $member->createChat('general', $workspace);
$member->postMessageToChat('Hello!', $chat);

echonl($chat->messages);
echonl($workspace->hasMember($temp_member));