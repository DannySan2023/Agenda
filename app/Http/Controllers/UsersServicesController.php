<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;

class UsersServicesController extends Controller
{
    public function edit(User $user)
    {
        $services = Service::all();

        return view('users-services.edit')->with([
            'user' => $user,
            'services' => $services,
        ]);
    }

    public function update(User $user)
    {
        
        request()->validate([
            'services_ids.*' => 'exists:services,id',
        ]);

        $user->services()->sync(request('services_ids'));

        return redirect(route('users.index'));

    }
}
