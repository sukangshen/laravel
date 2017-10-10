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

	public function add_do(){
		$username = $_POST['username'];
	    $card = $_POST['card'];
		$re= DB::table('user')->insert(['username'=>$username,'card'=>$card]);
		if ($re) {
			echo "成功";
			return redirect('person/index')->send();
		}else{
			echo "失败";
		}
	}



}