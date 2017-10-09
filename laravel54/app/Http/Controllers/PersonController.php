<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class PersonController extends Controller
{
	//直播的首页
	public function index()
	{	
		return view('person/index');
	}

	//直播的订阅历史
	public function subscribe()
	{	
		return view('person/subscribe');
	}

	//直播的认证
	public function profileauth()
	{	
		return view('person/profileauth');
	}

		//金币兑换
	public function cdkey()
	{	
		return view('person/cdkey');
	}

}