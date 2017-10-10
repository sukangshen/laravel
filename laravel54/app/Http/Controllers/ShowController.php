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
			$_SESSION['user']=$data[0];
            

			echo "<script>alert('登录成功,正在跳转个人中心');location.href='person'</script>";
}else{
			echo "<script>alert('登录失败');location.href='login'</script>";
		}
	}

	//注册的展示页面
	public function region()
	{
		return view('player/region');
	}




	//注册的方法
	public function region_do(){
		$username = isset($_GET['username'])?$_GET['username']:'';
        $password = isset($_GET['password'])?$_GET['password']:'';
        $email = isset($_GET['email'])?$_GET['email']:'';
        $tel = isset($_GET['tel'])?$_GET['tel']:'';
        
        //echo $username.$password;die;
        if(!$username || !$password){
            $arr = array('msg'=>1002,'data'=>'账号密码为空');
        }else{
        	$data = DB::select('select * FROM `user` where `username` = "'.$username.'"');          
            // print_r($data);die;
            if($data){
            	echo "<script>alert('账号存在,重新登录');location.href='region'</script>";
            }else{      	
            	$arr = array('username'=>$username,'password'=>$password,'email'=>$email,'tel'=>$tel);
            	$data =	DB::table('user')->insert($arr);
            	if($data){
            		$arr = array('msg'=>1000,'data'=>$data);
            	}else{
            		$arr = array('msg'=>1005,'data'=>'账号添加失败');
            	}
            }
        }
        // print_r($arr);die;
        echo "<script>alert('注册成功,去登录吧');location.href='login'</script>";
	}

		//个人中心的展示
		public function person()
	{	
		return view('person/index');
	}




}