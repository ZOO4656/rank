@extends('layouts.app')

@section('content')
    {{ $ranking->title }}
    {{ Html::link("/ranking/{$ranking->id}/post", '投稿') }}
@endsection
