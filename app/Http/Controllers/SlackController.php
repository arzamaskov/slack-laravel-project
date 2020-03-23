<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $client = new \Maknz\Slack\Client('https://hooks.slack.com/services/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');
        $msg = $request->message;

        if (trim($msg) == '') {
            return view('error');
        }

        $client->send($msg);

        return view('send', ['msg' => $msg]);
    }
}
