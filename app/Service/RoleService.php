<?php


namespace App\Service;
use App\Models\Role;
use App\Models\User;


class RoleService {
    public function assignRole(User $user){
        $role = Role::where('name', 'admin')->first();
        $user->roles()->attach($role->id);
    }
}
