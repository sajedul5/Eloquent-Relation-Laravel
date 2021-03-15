<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Staff'],
            ['name' => 'Accountant'],
            ['name' => 'HR'],   
        ];
        Role::insert($roles);
        return 'Role Added Successfully.';
    }


    public function addUser()
    {
        $user = new User();
        $user->name="Nahin";
        $user->email= 'nahin@gmail.com';
        $user->password = encrypt('password');
        $user->save();

        $roleArr = [1,2,4];
        $user->roles()->attach($roleArr);

        return 'User added and role assigned';
    }

    public function getRoleByUserID($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }


    public function getUserByRoleId($id)
    {
        $role = Role::find($id);
        $users = $role->users;
        return $users;

    }
}
