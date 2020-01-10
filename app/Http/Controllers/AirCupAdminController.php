<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;


class AirCupAdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static $VALID_PATH = [           //key=>path,  value=>functionName
        'dashboard'=>'showDashboard',
        'analysis'=>'showAnalysis',
        'login'=>'showLogin',
    ];


    /**
     * @param $path
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
     public function adapater($path){

         if(key_exists($path ,self::$VALID_PATH)){
             $method = self::$VALID_PATH[$path];

             return call_user_func( array($this ,$method) );
         }

         return view('miss');
    }

    public function showLogin(){

        return view('admin.login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showDashboard(){
         //今日新增订单，新增留言，总订单量，总留言量

        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;


        $allOrders = DB::table('pre_order')->count();
        $todayOrders = DB::table('pre_order')
            ->where('created_at', '>', $beginToday)
            ->where('created_at', '<', $endToday)
            ->count();

        $allFeeds = DB::table('feedback')->count();
        $todayFeeds = DB::table('feedback')
            ->where('created_at', '>', $beginToday)
            ->where('created_at', '<', $endToday)
            ->count();

        return view('admin.index' ,['allOrders'=>$allOrders ,'todayOrders'=>$todayOrders ,'allFeeds'=>$allFeeds, 'todayFeeds'=>$todayFeeds]);
    }

    public function showAnalysis(){

        $result = array();
        $orderList = DB::table('pre_order')
            ->latest('created_at')
            ->limit(200)
            ->get();

        $feedbackList = DB::table('feedback')
            ->latest('created_at')
            ->limit(200)
            ->get();

        return view('admin.analysis' ,['orderList'=>$orderList ,'feedbackList'=>$feedbackList]);
    }



}
