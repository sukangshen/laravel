<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class NewController extends Controller
{
	//新闻展示的方法
public function show()
	{
		$users = DB::select('select * from live_new');
		$data = DB::select('select * from zhubo');
	    return view('player/index',['users'=>$users,'data'=>$data]);
	}

//添加主播的展示方法
public function add(){
	return view('player/add');
}


public function add_do(){
		$data=$_POST;
		$data['file']= $_FILES;
		
		$new_path='E:\phpStudy\WWW\ff\laravel54\public\uploads/'.$data['file']['file_name']['name'];
		// print_r($data);die;
		$odl_path=$data['file']['file_name']['tmp_name'];
		// print_r($odl_path);die;
		$path = './uploads/'.$data['file']['file_name']['name'];
		if(move_uploaded_file($odl_path,$new_path )){
			$data =	DB::table('zhubo')->insert([ 'file_name'=>$path,'name'=>$data['name'],'sex'=>$data['sex'],'age'=>$data['age']]);
			if($data){
				echo "<script>alert('申请成功,');location.href='show'</script>";
			}
		}else{
			echo "失败";die;
		}
		
	}



}