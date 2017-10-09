<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ShowController extends Controller
{
	//直播的首页
	public function index()
	{
	return view('player/index');
	}

	//登录的展示
	public function login()
	{
	return view('player/login');
	}


	//登录的方法
	public function login_do()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$users = DB::select("select * from `user` where username='$username' and password='$password'");
		if ($users) {
			echo "成功登录";
		}else{
			echo "失败";
		}
	}

	//注册的展示页面
	public function region()
	{
		return view('player/region');
	}




	//注册的方法
	public function region_do()
	{
		$users = DB::select("select * from `user` where username");

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$re= DB::table('user')->insert(['username'=>$username,'password'=>$password,'email'=>$email,'tel'=>$tel]);

		if ($re) {
		echo "<script>alert('恭喜你注册成功，可以去登录了');location.href='login'</script>";
		// return redirect('show/login')->send();
	}else{
		echo "失败";
	}
	}
}