<?php  
	include "Bot.php";
	$bot = new $Bot;
	$questions = [
		"What does backend developers do" => "They will work with core application logic, databases, data and application integration, API and other back end processes",
		"What is your name" => "My name is " . $bot->getName(),
		"What is your gender" =>  "I am a " . $bot->getGender()
	];

	if(isset($_GET['msg'])) {
		$msg = strtolower($_GET['msg']);
		$bot->hears($msg, function (Bot $botty) {
			global $msg;
			global $questions;
			if ($msg == 'hi' || "hello") {
				$botty->reply('Hello there!');
			} elseif ($botty->ask($msg, $questions) == "") {
				$botty->reply("Can't respond to that");
			} else {
				$botty->reply($botty->ask($msg, $questions));
			}
		});
	}
?>