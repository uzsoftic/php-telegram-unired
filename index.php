<?php require_once ('autoload.php');

$update = json_decode(file_get_contents('php://input'));

if(isset($update)){
    $message = $update->message;
    $text = $message->text;
    $chat_id = $message->chat->id;
    $message_id = $message->message_id;
    $reply = $message->reply_to_message;
    $from_reply = $message->reply_to_message->from->username;

    $user_id = $message->from->id;
    $user_name = $message->from->name;
    $user_username = $message->from->username;
    $name = $from->name;
    $lastname = $from->last_name;
}

if (isset($message)) {
    // SEND WITH SLESH MESSAGE
    if ($text == '/test') { $API->sendMsg($chat_id, $message_id, $APICommands->start()); }
    if ($text == '/start') { $API->sendMsgKeyboard($chat_id, $message_id, $APICommands->start(), $APIKeyboard->startKeyboard()); }

    // SEND MESSAGE
    if ($text == 'Unired Uz') { $API->sendMsg($chat_id, $message_id, $APICommands->unired_uz()); }
    if ($text == 'Unired Ru') { $API->sendMsgInline($chat_id, $message_id, $APICommands->unired_ru(), $APIInline->mainInline()); }
    if ($text == 'keyboard') { $API->sendMsgKeyboard($chat_id, $message_id, $APICommands->unired(), $APIKeyboard->mainKeyboard()); }


    // SEND WITH REPLY
    if ($text == 'test' and $reply) { $API->sendMsg($chat_id, $message_id, "Test Message"); }


    if ($text == 'am i moder?' and isadmin($user_id)) { $API->sendMsg($chat_id, $message_id, "You are ADMIN"); }
}else{
    redirect('/page/index.php');
}

//echo($APIInline->testaa());
?>
