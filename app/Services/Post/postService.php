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
}
