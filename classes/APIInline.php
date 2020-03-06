<?php

namespace classes;

use classes\API;

class APIInline extends API
{

    public function testaa(){
        echo $this->mainInline();
    }

    public function mainInline(){
        $result = json_encode([
            'inline_keyboard' => [
                [
                    ['text' => 'hi', 'url' => 'https://t.me/openshop_uz'],
                    ['text' => 'ho', 'url' => 'https://t.me/openshop_uz']
                ]
            ]
        ]);
        return $result;
    }

    public function mainInline2(){
        return json_encode([ 'inline_keyboard' => [['text' => 'hi', 'url' => 'https://t.me/openshop_uz']] ]);
    }


}
