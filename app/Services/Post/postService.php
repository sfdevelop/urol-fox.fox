<?php

namespace App\Services\Post;

use App\Model\Post;

class postService
{
    public function indexPost(){

        $paginator = Post::withTranslation()
            ->with('media')
            ->translated('en')
            ->oldest('sort')
            ->latest('id')
            ->paginate(15);

        return $paginator;
    }

    public function item($slug)
    {
        $item=Post::withTranslation()
            ->where('slug', $slug)
            ->with('media')
            ->first();

        return $item;
    }

    public function latestNews()
    {
        $latest=Post::withTranslation()
            ->with('media')
            ->oldest('sort')
            ->take(4)
            ->get();

        return $latest;
    }

}
