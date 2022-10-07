<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('image', 'image_2.jpg')->get();
        foreach($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }
    public function create() {
        $postArr = [
            [
                'title' => 'title of post from visualstudio',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => 37,
                'is_published' => 0,
            ],
            [
                'title' => 'another title of post from visualstudio',
                'content' => 'another some interesting content',
                'image' => 'anotherimageblabla.jpg',
                'likes' => 113,
                'is_published' => 1,
            ],
        ];

        foreach ($postArr as $item) {
            Post::create($item);
        }

        dd('created');
    }
    public function update() {
        $post = Post::find(1);
        $post->update([
            'title' => 'update title',
            'content' => 'update content',
            'is_published' => 0
        ]);
        dd('updated');
    }
    public function delete() {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
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
