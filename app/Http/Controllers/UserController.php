<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){
        $users=User::whareNot('role',1)->get();
        // $users=User::all();
        return view ('admin-panel.users.list',compact('users'));
    }
}
