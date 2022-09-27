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
        $commentModel = new Comment();

        $displayedCommentCount = 4;
        $comments = $commentModel->getLatest($displayedCommentCount);
        $earlierComments = $commentModel->earlierCommentCount($displayedCommentCount);

        $data = [
            'comments' => $comments,
            'earlierComments' => $earlierComments
        ];

        return view('home')->with('data', $data);
    }
}
