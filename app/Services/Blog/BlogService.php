<?php

namespace App\Services\Blog;

use App\Repositories\Contracts\BlogRepositoryInterface;
use App\Repositories\Eloquent\BlogRepository;
use Auth;
use App\Services\BlogServiceInterface;

class BlogService implements BlogServiceInterface
{
    /**
     * @var BlogRepository
     */
    private $blog;

    /**
     * @param $id
     * @return mixed|void
     */
    public function viewBlog($id)
    {
        return $this->blog->find($id);
    }

    /**
     * BlogService constructor.
     *
     * @param \App\Repositories\Contracts\BlogRepositoryInterface $blog
     */
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->blog = $blog;
    }

    /**
     * @param $title
     * @param $content
     * @return mixed
     */
    public function createBlog($title, $content)
    {
        return $this->blog->create([
                'user_id' => Auth::id(),
                'title' => $title,
                'content' => $content,
        ]);
    }

    /**
     * @return mixed
     */
    public function renderHome()
    {
        return $this->blog->paginate();
    }

    /**
     * @param $blog
     * @return mixed
     */
    public function renderEdit($id)
    {
        return $this->blog->find($id);
    }

    /**
     * @param $data
     * @param $id
     * @return mixeds
     */
    public function updateBlog($data, $id)
    {
        return $this->blog->update($data, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteBlog($id)
    {
        return $this->blog->delete($id);
    }
}
