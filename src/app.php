<?php

include '_includes.php';

$admin = new Member('acme_admin');

$memberA = new Member('acme_memberA');
$memberB = new Member('acme_memberB');

$workspace = $admin->createWorkspace('acme');
$admin->addWorkspaceMember($memberA, $workspace);
$admin->addWorkspaceMember($memberB, $workspace);

// creating a chat using the Chat class
// $chat = $memberA->createChat('general', $workspace);

$channel = $admin->createChannel('example', $workspace);
$admin ->postMessageToChat('Hello', $channel);

$dm = $memberA->createDirectMessage([$memberB], $workspace);
$memberB->postMessageToChat('Hello in DM', $dm);

echonl($channel->getMessages(), true);
echonl($dm->getMessages($memberA), true);