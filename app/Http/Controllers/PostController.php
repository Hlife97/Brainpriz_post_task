<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostResource::collection(Post::all());

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = CategoryResource::collection(Category::all());

        return view('posts.create', compact('categories'));
    }

    public function store(PostRequest $request)
    {
        $post = new Post($request->validated());

        if ($request->hasFile('image')) $post->image = Storage::putFile('public/posts', $request->file('image'));

        $post->save();

        // Save categoryId and PostId in pivot table
        foreach ($request->categories as $value) {
            $data = new PostCategory();
            $data->category_id = $value;
            $data->post_id = $post->id;
            $data->save();
        }

        return redirect()->route('post')->with('status', [
            0 => 'success',
            1 => __('Successfully Saved!')
        ]);
    }
}
