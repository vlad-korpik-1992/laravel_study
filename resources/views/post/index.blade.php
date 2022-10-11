@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-3">
            @foreach ($posts as $post)
                <div class="col-12">
                    <a href="{{route('posts.show',$post->id)}}">{{ $post->id }} {{$post->title}}</a>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('posts.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
@endsection
