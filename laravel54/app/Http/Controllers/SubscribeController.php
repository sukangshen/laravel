<?php
/**
 * Created by PhpStorm.
 * User: 国威
 * Date: 2017/10/10
 * Time: 11:06
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class SubscribeController extends Controller
{
    public  function  sub(){
        $data = DB::select('select * from subscribe  limit 3');
        return view('person/subscribe',['data'=>$data]);
    }
   /* public  function  sublist(){
        $data = DB::select('select * from subscribe');
//        var_dump($data);die;
        return view('person/subscribe',['data'=>$data]);
    }*/
}