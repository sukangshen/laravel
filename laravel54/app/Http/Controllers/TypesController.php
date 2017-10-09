<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class TypesController extends Controller
{
	//直播的首页
	public function index()
	{
		$sql=DB::select('select * from live_class');
        // print_r($sql);die;
        return view("types/index",['data'=>$sql]);
	}


	  public function del(){
        $id=$_GET['clas_id'];
        $re=DB::table('live_class')->where('clas_id',$id)->delete();
        if($re){
            return redirect('types/index');
        }else{
            echo "删除失败";
        }
    }


    public function sets()
	{
		// echo "213";die;
		$id = $_GET['clas_id'];
		$re = DB::table('live_class')->where('clas_id',$id)->first();

		// print_r($re);die;
		return view('types/add_update',['re'=>$re]);
	}

	//修改的执行的方法
	public function add_upd()
	{

		//接收要修改的名字，密码
		$class_name=$_POST['class_name'];  
        $class_addtime=$_POST['class_addtime'];  
        $clas_id=$_POST['clas_id'];  
        $arr=array('clas_id'=>$clas_id,'class_name'=>$class_name,'class_addtime'=>$class_addtime);  
        $re=DB::table('live_class')  
            ->where('clas_id','=',$clas_id )  
            ->update($arr);  
          if($re)  
        {  
            return redirect('types/index')->send();
        }     
    }  




}