<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class client_page extends Controller
{
   public function index() {
      $users = DB::select('select * from client_page');
      return view('Bclient_page',['users'=>$users]);
   }
}
