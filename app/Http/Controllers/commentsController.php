<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class commentsController
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $comments = Comment::latest('sort')->paginate();

        return view('urol.Comments.comments', compact('comments'));
    }
}
