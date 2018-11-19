<?php

namespace App\Repositories\Eloquent;

use App\Models\Blog;
use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\BlogRepositoryInterface;

class BlogRepository extends Repository implements BlogRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Blog::class;
    }
}
