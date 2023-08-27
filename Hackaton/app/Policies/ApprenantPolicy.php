<?php

namespace App\Policies;

use App\Models\Apprenant;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ApprenantPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
        return Response::allow();
    }

    public function view(User $user, apprenant $apprenant): Response
    {
        return Response::allow();
    }

    public function create(User $user): Response
    {
        return Response::allow();
    }

    public function update(User $user, Apprenant $apprenant): Response
    {
        return Response::allow();
    }

    public function delete(User $user, Apprenant $apprenant): Response
    {
        return Response::allow();
    }

    public function restore(User $user, Apprenant $apprenant): Response
    {
        return Response::allow();
    }

    public function forceDelete(User $user, Apprenant $apprenant): Response
    {
        return Response::allow();
    }
}
