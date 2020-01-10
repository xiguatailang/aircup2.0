<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //登陆页面不做cookie校验
        if(preg_match("(/admin/login)" ,$request->getRequestUri()) ) {
            return $next($request);
        }

        if(isset($_COOKIE['token'])) {

            $cookie = $_COOKIE['token'];

            $token = explode('_', $cookie);

            if (isset($token[0]) && isset($token[1])) {
                $saveToken = $token[1];
                $timeKey = $token[0];
                $loginToken = session()->get('login_' . $timeKey);
//                var_dump($saveToken ,$loginToken);die;
                if ($loginToken == $saveToken) {
                    return $next($request);
                }
            }
        }

        return Redirect::to('/admin/login');
    }
}
