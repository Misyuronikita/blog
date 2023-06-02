<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $post = $storeRequest->validated();
        $post['preview_image'] = Storage::put('/images', $post['preview_image']);
        $post['main_image'] = Storage::put('/images', $post['main_image']);
        Post::firstOrCreate($post);
        return redirect()->route('admin.posts.index');
    }
}
