<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $posts = DB::select('select * from posts', [1]);

        return view('post.index', ['posts' => $posts]);
    }
}
