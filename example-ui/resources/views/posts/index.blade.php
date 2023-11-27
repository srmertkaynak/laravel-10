@extends('layouts.app')
@section('content')
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach
@endsection
