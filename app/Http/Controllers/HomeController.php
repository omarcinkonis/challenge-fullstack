<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::latest()->take(4)->get();
//        dd($comments);
        return view('home')->with('comments', $comments);;
    }
}
