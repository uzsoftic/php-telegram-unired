<?php

namespace classes;

class API
{

    public function __construct()
    {
        //return 'test';
    }

    public function bot($method, $datas=[]){
        $url = "https://api.telegram.org/bot".API_KEY."/".$method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        $res = curl_exec($ch);
        if (curl_error($ch)){
            var_dump(curl_error($ch));
        }else{
            return json_decode($res);
        }
    }

    public function sendMsg($chat_id, $message_id, $text){
        $this->bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
            'reply_to_message_id' => $message_id,
            //'parse_mode' => 'html',
        ]);
    }

    public function sendMsgInline($chat_id, $message_id, $text, $inline){
        $this->bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
            'reply_to_message_id' => $message_id,
            'reply_markup' => $inline,
        ]);
    }
    public function sendMsgKeyboard($chat_id, $message_id, $text, $keyboard){
        $this->bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
            'reply_to_message_id' => $message_id,
            //'inline_keyboard' => $keyboard,
            'reply_markup' => $keyboard,
            //'resize_keyboard' => true,
            'resize_keyboard' => false,
            'one_time_keyboard' => false,
        ]);
    }

    /*    public function sendMsgReply($chat_id, $message_id, $text){
            $this->bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => $text,
                'reply_to_message_id' => $message_id,
            ]);
        }*/

}
