<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function index(){
       $data=Http::get("https://reqres.in/api/users?page=1");
       return view('user',['collection'=>$data['data']]);
      
    }
    public function dbConnect(){
        return 'DB connection will be here ';
    }
}
