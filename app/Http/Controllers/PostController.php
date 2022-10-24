<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Post\BaseController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends BaseController
{
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
