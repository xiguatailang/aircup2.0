<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AirCupWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $is_mobile = 1;
    private $is_web = 0;
    const ENGLISH = 'en';
    const CHINESE = 'cn';

    private $about_blade = 'about';
    public static $VALID_PATH = [           //key=>path,  value=>balde_name
        'creation'=>'creation',
        'about'=>'about',
        'buy'=>'buy',
        'story2017'=>'story2017',
        'story2018'=>'story2018',
        'feedback'=>'feedback',
        'buysuccess'=>'buysuccess',
        'privacy'=>'privacy',
        'service'=>'service',
    ];

    /**
     * @param $client
     * @param $bladeName
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function useBlade($client ,$bladeName){

        if($client == $this->is_mobile){
            return view('mobile_'.$bladeName);
        }

        return view('web_'.$bladeName);
    }

    /**
     * @param $client
     * @param $bladeName
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function useEnBlade($client ,$bladeName){

        if($client == $this->is_mobile){
            return view('EN/mobile_'.$bladeName);
        }

        return view('EN/web_'.$bladeName);
    }

    public function showIndex(){

        $client = $this->getClient();
        if(isset($_COOKIE['language']) && $_COOKIE['language']==self::ENGLISH){
            return $this->useEnBlade($client ,'index');
        }

        return $this->useBlade($client ,'index');
    }

    /**
     * @param $path
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
     public function adapater($path){

         if(key_exists($path ,self::$VALID_PATH)){
             $client = $this->getClient();

             if(isset($_COOKIE['language']) && $_COOKIE['language']==self::ENGLISH){
                 return $this->useEnBlade($client ,self::$VALID_PATH[$path]);
             }

             return $this->useBlade($client ,self::$VALID_PATH[$path]);
         }

         return view('miss');
    }


    /**
     * @return bool  mobile=true, web=false
     */
    private function getClient()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        {
            return true;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
        {
            // 找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }
        // 脑残法，判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT']))
        {
            $clientkeywords = array ('nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap',
                'mobile'
            );

            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            {
                return true;
            }
        }
        // 协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT']))
        {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
            {
                return true;
            }
        }

        return false;
    }


}
