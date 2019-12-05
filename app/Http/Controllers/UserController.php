<?php 
namespace App\Http\Controllers;

class UserController extends Controller{
    public function profiles($nama){
       return view ('content', ['nama' => $nama]);
    }
}