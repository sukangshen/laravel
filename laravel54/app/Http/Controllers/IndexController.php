<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
	//查
	public function index()
	{
	$users = DB::select('select * from user');
	return view('index/show',['users'=>$users]);
	}
	//增加
	public function add()
	{
	return view('index/add');
	}

	//执行添加
	public function add_do()
	{
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$re= DB::table('user')->insert(['name'=>$name,'pass'=>$pass]);
	if ($re) {
		echo "成功";
		return redirect('index/index')->send();
	}else{
		echo "失败";
	}
	}
	//删除的方法
	public function add_del()
	{
	$id = $_GET['id'];
	$re= DB::table('user')  
            ->where('id',$id)  
            ->delete();  
     if ($re) {
     	return redirect('index/index')->send();
     }else{
     	echo "删除失败";
     }
	}
	//修改的方法
	public function add_update()
	{
		$id = $_GET['id'];
		$re = DB::table('user')->where('id',$id)->first();
		return view('index/add_update',['re'=>$re]);
	}

	//修改的执行的方法
	public function add_upd()
	{

		//接收要修改的名字，密码
		$name=$_POST['name'];  
        $pass=$_POST['pass'];  
        $id=$_POST['id'];  
        $arr=array('id'=>$id,'name'=>$name,'pass'=>$pass);  
        $re=DB::table('user')  
            ->where('id','=',$id )  
            ->update($arr);  
          if($re)  
        {  
            return redirect('index/index')->send();
        }     
    }  
}
?>