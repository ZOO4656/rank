@extends('layouts.app')

@section('content')
    {{ $ranking->title }}
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    {{ Html::link("/ranking/{$ranking->id}/post", '投稿') }}
@endsection
