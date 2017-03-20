@extends('layouts.app')

@section('content')
    {{ Form::open(['action' => 'RankingController@store']) }}
        {{ Form::label('title', 'ランキングのタイトル') }}
        {{ Form::text('title', null, ['placeholder' => 'ランキングのタイトル']) }}
        {{ Form::hidden('type', $type) }}
        {{ Form::submit() }}
    {{ Form::close() }}
@endsection
