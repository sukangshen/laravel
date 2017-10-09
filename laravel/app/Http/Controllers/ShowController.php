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

}