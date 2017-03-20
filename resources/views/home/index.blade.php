@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    {{ Html::link('/ranking/create', 'ランキングを作る') }}
@endsection
