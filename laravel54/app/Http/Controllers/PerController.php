<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class PerController extends Controller
{


	//直播的认证
	public function profileauth()
	{	
		return view('per/profileauth');
	}
	public function index()
	{	
		return view('per/index');
	}


	public function add_do(){
		// print_r($_GET);die;
		$username = $_GET['username'];
	    $card = $_GET['card'];
		$re= DB::table('user')->insert(['username'=>$username,'card'=>$card]);
		if ($re) {
			echo "成功";
			return redirect('per/index')->send();
		}else{
			echo "失败";
		}
	}



}