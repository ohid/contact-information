<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createRoleUser()
    {


        /**
         *
         * Create permissions
         *
         */
        $SuperAdmin = new Role;
        $SuperAdmin->name = 'admin';
        $SuperAdmin->display_name = 'Admin';
        $SuperAdmin->save();

        $staff = new Role;
        $staff->name = 'staff';
        $staff->display_name = 'Staff';
        $staff->save();

        $member = new Role;
        $member->name = 'client';
        $member->display_name = 'client';
        $member->save();


        /**
         *
         * Create Admin
         *
         */
        $adminRole = Role::where('name', 'admin')->first();

        $adminUser = new User;
        $adminUser->first_name = 'Ohidul';
        $adminUser->last_name = 'Islam';
        $adminUser->email = 'ohidul.islam951@gmail.com';
        $adminUser->password = bcrypt('111111');
        $adminUser->save();

        $adminUser->attachRole($adminRole);

       return 'Admin created';
    }
}
