<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;

class RankingController extends Controller
{
    public function create()
    {
        return view('ranking.create')
            ->with([
                'type' => Ranking::MOVIE,
                'row' => new Ranking,
            ]);
    }
}
