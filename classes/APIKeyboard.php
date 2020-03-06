<?php

namespace classes;

use classes\API;

class APIKeyboard extends API
{

    public function startKeyboard(){
        $result = json_encode([
            'keyboard' => [
                [
                    ['text' => 'Unired Uz'],
                    ['text' => 'Unired Ru'],
                ],
                [
                    ['text' => 'OPENSHOP.UZ'],
                    ['text' => 'Hello World'],
                    ['text' => 'Info'],
                ]
            ]
        ]);
        return $result;
    }

    public function mainKeyboard(){
        $result = json_encode([
            'keyboard' => [
                [
                    ['text' => 'Button 1'],
                    ['text' => 'Button 2'],
                ],
                [
                    ['text' => 'Button 1'],
                    ['text' => 'Button 2'],
                ]
            ]
        ]);
        return $result;
    }


}
