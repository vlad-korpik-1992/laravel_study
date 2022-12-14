@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <a href="{{route('posts.show',$post->id)}}">Back</a>
            </div>
        </div>
        <div class="row mb-3">
            <h2>Edit a post</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Content</label>
                      <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id" id="category">
                            @foreach ($categories as $category)
                                <option
                                    {{$category->id == $post->category->id ? ' selected' : ''}}
                                    value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tags" class="form-label">Tag</label>
                        <select multiple class="form-control" name="tags[]" id="tags">
                            @foreach ($tags as $tag)
                                <option
                                @foreach ($post->tags as $postTag)
                                    {{$tag->id == $postTag->id ? ' selected' : ''}}
                                @endforeach
                                value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
