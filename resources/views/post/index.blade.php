@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('posts.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($posts as $post)
                <div class="col-12">
                    <a href="{{route('posts.show',$post->id)}}">{{ $post->id }} {{$post->title}}</a>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
