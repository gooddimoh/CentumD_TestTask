<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class BackendController extends Controller
{
    public function index()
    {

    }

    public function return404()
    {

    }
    public function shortlink(Request $request)
    {
        var_dump($request->get(''));

    $this->return404;
        return view('404');

        die('shortlink');
        $executed = RateLimiter::attempt(
            'send-message:',
            $perMinute = 5,
            function() {
                info('ratelimiter');
            }
        );

        if (! $executed) {
            return 'Too many messages sent!';
        }

        redirect('404');//
        $token = openssl_random_pseudo_bytes(16);
        $token = bin2hex($token);

        var_dump($token);
        die();
    }
}
