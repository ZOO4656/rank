@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    {{ Html::link('/ranking/create', 'ランキングを作る') }}
    <h2>Ranking</h2>
    <ul>
    @foreach ($rankings as $row)
        <li>{{ Html::linkAction('RankingController@show', $row->title, $row->id) }}</li>
    @endforeach
    </ul>
@endsection
