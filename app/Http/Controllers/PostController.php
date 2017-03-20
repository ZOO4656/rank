<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($ranking_id)
    {
        return view('post.create')
            ->with([
                'ranking' => Ranking::find($ranking_id),
            ]);
    }
}
