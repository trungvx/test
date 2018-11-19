<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function view(User $user, Blog $blog)
    {
        //todo
    }

    /**
     * Determine whether the user can create blogs.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id != null;
    }

    /**
     * Determine whether the user can edit the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function edit(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }

    /**
     * Determine whether the user can update the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function update(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id;
    }

    /**
     * Determine whether the user can delete the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function delete(User $user, Blog $blog)
    {
        //todo
    }

    /**
     * Determine whether the user can restore the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function restore(User $user, Blog $blog)
    {
        //todo
    }

    /**
     * Determine whether the user can permanently delete the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function forceDelete(User $user, Blog $blog)
    {
        //todo
    }
}
