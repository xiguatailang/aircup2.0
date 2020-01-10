<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;


class AirCupApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static $VALID_PATH = [           //key=>path,  value=>functionName
        'adminlogin'=>'adminLogin',
        'makeorder'=>'makeOrder',
        'makefeedBack'=>'makeFeedBack',
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


    public function adminLogin(){
         $email = $_POST['email'];
         $pd = md5($_POST['pd']);

         if($email && $pd){

             $ret = DB::table('admin_user')
                 ->where('email' ,$email)
                 ->where('password' ,$pd)
                 ->exists();


             if($ret){
                 $token = $email.'_login_success';
                 $timeKey = time();

                 session(['login_'.$timeKey =>md5($token)]);

                 return response(array('status'=>200 ,'url'=>url('/admin/dashboard')))->cookie('token', $timeKey.'_'.md5($token), 6000);
             }
         }

         return array('status'=>500 ,'url'=>'');
    }


//    public function makeOrder(Request $request){
    public function makeOrder(){

         $insertData = array(
             'name'=>0,
             'sex'=>0,
             'age'=>0,
             'email'=>0,
         );

        foreach ($_POST as $key=>$val){
            if(isset($insertData[$key]) && !$val){
                return array('status'=>500 ,'msg'=>'输入不可为空');
            }
            if($key=='email' && !filter_var($val ,FILTER_VALIDATE_EMAIL)){
                return array('status'=>500 ,'msg'=>'邮箱格式不正确');
            }
            if($key=='age' && !is_numeric($val)){
                return array('status'=>500 ,'msg'=>'年龄需为数字');
            }

            $insertData[$key] = $val;
        }

        $insertData['wx_id'] = isset($insertData['wx_id']) ? $insertData['wx_id'] : 0;
        $insertData['address'] = isset($insertData['address']) ? $insertData['address'] : 0;
        $insertData['feedback'] = isset($insertData['feedback']) ? $insertData['feedback'] : 0;
        $insertData['age'] = (int)$insertData['age'];
        $insertData['status'] = 0;
        $insertData['created_at'] = time();

        $ret = DB::table('pre_order')->insert($insertData);

        if($ret){
            return array('status'=>200 ,'msg'=>'success');
        }

         return array('status'=>500 ,'msg'=>'提交失败，请重新填写');
    }

    public function makeFeedBack(){

         if(!$_POST['email'] || !$_POST['content']){
             return array('status'=>500 ,'msg'=>'输入不可为空');
         }

        if(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)){
            return array('status'=>500 ,'msg'=>'邮箱格式不正确');
        }
        $insertData = array(
            'created_at'=>time(),
            'is_read'=>0,
            'content'=>$_POST['content'],
            'email'=>$_POST['email'],
        );

        $ret = DB::table('feedback')->insert($insertData);

        if($ret){
            return array('status'=>200 ,'msg'=>'success');
        }

        return array('status'=>500 ,'msg'=>'提交失败，请重新填写');

    }



}
