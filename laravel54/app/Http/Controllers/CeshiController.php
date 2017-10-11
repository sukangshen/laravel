<?php
//测试所有插件的类
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class CeshiController extends Controller
{
	//测试表格插件
	public function index()
	{
		return view('player/tables');
	}

	//树状图的测试
	public function true()
	{
		return view('player/true');
	}
}