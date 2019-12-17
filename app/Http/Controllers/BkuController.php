<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisPengeluaran;
class BkuController extends Controller
{
    	public function index(){
		$jb = JenisPengeluaran::orderBy('id','DESC')->get();		
		return response()->json(['data' => $jb]);
	
	}
}
