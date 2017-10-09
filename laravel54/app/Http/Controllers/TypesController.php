<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class TypesController extends Controller
{
	//直播的首页
	public function index()
	{
	return view('types/index');
	}



}