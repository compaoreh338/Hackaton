<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
        return Response::allow();
    }

    public function view(User $user, Category $category): Response
    {
        return Response::allow();
    }

    public function create(User $user): Response
    {
        return Response::allow();
    }

    public function update(User $user, Category $category): Response
    {
        return Response::allow();
    }

    public function delete(User $user, Category $category): Response
    {
        return Response::allow();
    }

    public function restore(User $user, Category $category): Response
    {
        return Response::allow();
    }

    public function forceDelete(User $user, Category $category): Response
    {
        return Response::allow();
    }
}
