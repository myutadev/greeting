<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{

    public function greetByTime($param)
    {
        $time = "";
        $greet = "";
        switch ($param) {
            case 'morning';
                $time = '朝';
                $greet = 'おはようございます';
                break;
            case 'afternoon';
                $time = '昼';
                $greet = 'こんにちは';
                break;
            case 'evening';
                $time = '夕方';
                $greet = 'こんばんは';
                break;
            case 'night';
                $time = '夜';
                $greet = 'おやすみ';
                break;

            default;
                $time = 'error';
                $greet = 'morning,afternuun,evening,nightのいずれかを入力してください';
                break;
        };

        return view(
            'main.comments',
            [
                'time' => $time,
                'greet' => $greet
            ]
        );
    }

    public function freeMessage($message)
    {
        $message = $message;
        return view(
            'main.free-comments',
            [
                'message' => $message
            ]
        );
    }

    public function randomMessage()
    {
        $messages = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $messageIndex = array_rand($messages);
        $message = $messages[$messageIndex];

        return view(
            'main.random',
            [
                'message' => $message
            ]
        );
    }
}
