<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Facades\App\Repositories\UserRepository;

class UserController extends Controller
{
	public function show()
    {	
    	return view('users', [

            'users' => UserRepository::all()

        ]);
	}

}
