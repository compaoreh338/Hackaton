<?php

namespace App\Policies;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EntreprisePolicy
{
    public function viewAny(User $user): Response
    {
        return Response::allow();
    }

    public function view(User $user, Entreprise $entreprise): Response
    {
        return Response::allow();
    }

    public function create(User $user): Response
    {
        return Response::allow();
    }

    public function update(User $user, Entreprise $entreprise): Response
    {
        return Response::allow();
    }

    public function delete(User $user, Entreprise $entreprise): Response
    {
        return Response::allow();
    }

    public function restore(User $user, Entreprise $entreprise): Response
    {
        return Response::allow();
    }

    public function forceDelete(User $user, Entreprise $entreprise): Response
    {
        return Response::allow();
    }
}
