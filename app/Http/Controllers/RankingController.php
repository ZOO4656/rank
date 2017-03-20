<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RankingStoreRequest;
use App\Models\Ranking;

class RankingController extends Controller
{
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
