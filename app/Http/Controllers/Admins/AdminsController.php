<?php

namespace App\Http\Controllers\Admins;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admins.index',[
            'users' => User::orderBy('id','desc')->paginate(12),
        ]);
    }


}
