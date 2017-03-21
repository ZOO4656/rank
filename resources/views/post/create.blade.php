@extends('layouts.app')

@section('content')
    {{ Form::open(['action' => 'PostController@store']) }}
        {{ Form::url('url', null, ['placeholder' => 'Youtubeの動画URL']) }}
        {{ Form::hidden('ranking_id', $ranking->id) }}
        {{ Form::hidden('user_id', $user->id) }}
        {{ Form::hidden('type', $type) }}
        {{ Form::submit() }}
    {{ Form::close() }}
@endsection
