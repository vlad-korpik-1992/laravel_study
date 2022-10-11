@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <h2>Create a post</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Content</label>
                      <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="image">
                      </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
