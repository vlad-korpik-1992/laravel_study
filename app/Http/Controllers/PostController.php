<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    public function create() {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories','tags'));
    }
    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('posts.index');
    }
    public function show(Post $post) {
        return view('post.show', compact('post'));
    }
    public function edit(Post $post) {
        $categories = Category::all();
        return view('post.edit', compact('post','categories'));
    }
    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
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
