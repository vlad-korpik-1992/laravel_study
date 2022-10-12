<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $category = Category::find(1);
        $post = Post::find(3);
        $tag = Tag::find(1);

        dd($tag->posts);
        /*$posts = Post::all();
        return view('post.index', compact('posts'));*/
    }
    public function create() {
        return view('post.create');
    }
    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }
    public function show(Post $post) {
        return view('post.show', compact('post'));
    }
    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }
    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('posts.show', $post->id);
    }
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function firstOrCreate() {
        $post = Post::firstOrCreate(
            [
                'title' => 'new post title',
            ],[
                'title' => 'new post title',
                'content' => 'new post content',
                'image' => 'newimage.jpg',
                'likes' => 150,
                'is_published' => 1,
            ],);
        dump($post->content);
        dd('finished');
    }
    public function updateOrCreate() {
        $post = Post::updateOrCreate(
            [
                'title' => 'updateOrCreate post title',
            ],[
                'title' => 'update post',
                'content' => 'update content',
                'image' => 'updateimage.jpg',
                'likes' => 1000,
                'is_published' => 0,
            ],);
        dump($post->content);
        dd('finished');
    }
}
