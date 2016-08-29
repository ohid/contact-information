<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Contact;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $userCount = User::count(); 
        
        if( Auth::check() ) {
            $user = Auth::user();
            return view('home', compact('user'));            
        } else {
            return view('welcome', compact('userCount'));
        }
    }


    /**
     *
     * Get all friends
     *
     */
    public function allFriends(Contact $contacts)
    {
        $user = \Auth::user()->id;
        $contacts = $contacts->where('user_id', '!=', $user)->paginate(20);
        return view('all', compact('contacts'));
    }


    /**
     *
     * Get single friend profile
     *
     */
    public function singleFriends(User $user, $id)
    {
        $user = $user->find($id);
        if( $user ) {
            $next = User::where('id', '>', $user->id)->min('id');

            if( $next == null) {
                $next = User::first();
            }

            return view('single', compact('user', 'next'));            
        } else {
            return redirect('/');
        }
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

        $user = new Role;
        $user->name = 'user';
        $user->display_name = 'user';
        $user->save();



        /**
         *
         * Create Admin
         *
         */
        $adminRole = Role::where('name', 'admin')->first();

        $adminUser = new User;
        $adminUser->name = 'Ohidul Islam';
        $adminUser->email = 'ohidul.islam951@gmail.com';
        $adminUser->password = bcrypt('111111');
        $adminUser->save();

        $adminUser->attachRole($adminRole);

       return 'Admin created';
    }
}
