@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-6">
            <div class="col-12">
                <a href="{{route('posts.index')}}">Back</a>
            </div>
        </div>
        <div class="row mb-3">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="row mb-6">
            <div class="col-12">
                <p>{{$post->content}}</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('posts.delete', $post->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
