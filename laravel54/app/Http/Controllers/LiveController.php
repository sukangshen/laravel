<?php
namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use App\Http\Controllers\Controller;
/**
* 
*/
class LiveController extends Controller
{
	
	public function index()
	{
		 return view('live/live_list');
	}

	 //成为主播
    public function live_add()
    {
        return view('live/live_add');
    }

    //主播注册申请页
    public function live_sign()
    {
        $live_class = DB::select('select clas_id,class_name from live_class where class_parent > :id',['id'=>0]);
        return view('live/live_sign',['live_class'=>$live_class]);
    }
    //主播注册信息获取
    public function ProfileAuth(Request $request)
    {
        $user_id = 1;
        $data = $request->input();
        $reg = DB::table('live_channel')
            ->insert([
                'channel_name'=>$data['channel_username'],
                'class_id'=>$data['class_id'],
                'user_id'=>$user_id,
                ]);
        if($reg)
        {
            echo "<script>alert('等待审核');location.href='/index.php?r=live/live_sign_d'</script>";
        }else
        {
            echo "<script>alert('提交失败');window.history(-1)</script>";
        }
    }

    //主播注册页完毕跳转页
    public function live_sign_d()
    {
        return view('live/live_sign_d');
    }
}









?>