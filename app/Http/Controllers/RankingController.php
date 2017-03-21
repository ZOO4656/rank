<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RankingStoreRequest;
use App\Models\Ranking;
use App\Models\Post;

class RankingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        return view('ranking.show')
            ->with([
                'ranking' => Ranking::find($id),
                'posts' => Post::where('ranking_id', $id)->get(),
            ]);
    }

    public function create()
    {
        return view('ranking.create')
            ->with([
                'type' => Ranking::MOVIE,
            ]);
    }

    public function store(RankingStoreRequest $request)
    {
        $input = $request->only(['type', 'title']);
        Ranking::create($input);
        return redirect('/');
    }
}
