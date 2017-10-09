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



}