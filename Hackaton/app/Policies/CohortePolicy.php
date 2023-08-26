<?php

namespace App\Policies;

use App\Models\Cohorte;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CohortePolicy
{
    public function viewAny(User $user): Response
    {
        return Response::allow();
    }

    public function view(User $user, Cohorte $cohorte): Response
    {
        return Response::allow();
    }

    public function create(User $user): Response
    {
        return Response::allow();
    }

    public function update(User $user, Cohorte $cohorte): Response
    {
        return Response::allow();
    }

    public function delete(User $user, Cohorte $cohorte): Response
    {
        return Response::allow();
    }

    public function restore(User $user, Cohorte $cohorte): Response
    {
        return Response::allow();
    }

    public function forceDelete(User $user, Cohorte $cohorte): Response
    {
        return Response::allow();
    }
}
