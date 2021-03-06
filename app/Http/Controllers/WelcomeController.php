<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        $post = DB::table('posts')->get();

        return view('welcome',['posts'=> $post]);
    }
}
