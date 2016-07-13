<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '223311954:AAHhcJ2whHl37mLFvW8TZtADmJBMtUg46qg');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
