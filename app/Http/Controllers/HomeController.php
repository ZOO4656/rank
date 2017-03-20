<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;

class HomeController extends Controller
{
    public function index()
    {
        $rankings = Ranking::orderby('created_at', 'desc')->get();
        return view('home/index')
            ->with([
                'rankings' => $rankings,
            ]);
    }
}
