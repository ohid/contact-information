<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use abeautifulsite\SimpleImage;
use App\Http\Requests;

class SettingsController extends Controller
{
    public function settings()
    {	
    	$user = Auth::user();
        return view('settings', compact('user'));
    }


    public function saveSettings(Requests\SaveSettingsRequest $request)
    {

    	// Save the user 
        Auth::user()->fill([
        	'name'	=> $request->name,
        	'nickname'	=> $request->nickname,
        	'email'	=> $request->email,
        ])->save();

        //  If user sets any password, update this.
        if( !empty($request->password) ) {
        	Auth::user()->fill([
        		'password'	=> $request->password
        	])->save();
        }

        if( $request->file('file') ) {
            $this->processProfileImg( $request );
        }

        return redirect()->back()->with('message', 'Your profile has been updated.');
    }



    /**
     *
     * Proccess the profile image
     *
     */
    public function processProfileImg( $request )
    {
        $file = $request->file('file');

        if( !file_exists('uploads/profile_images') ) {
            mkdir('uploads/profile_images');
        }

        $name = time() . str_random(10) . '.' . $file->guessClientExtension();

        try {
            $simpleImage = new SimpleImage();
            $simpleImage->load($file)->best_fit(500, 600)->save('uploads/profile_images/' . $name);

            // Check if the user already has a profile picture
            // Then Delete it first
            $existingImage = Auth::user()->image;
            if($existingImage){
                if( file_exists( public_path('uploads/profile_images/' . $existingImage) ) ) {
                    unlink( public_path('uploads/profile_images/' . $existingImage) );
                }
            }

            Auth::user()->fill([
                'image' => $name
            ])->save();


        } catch (Exception $e) {
            return redirect()->back()->with('message', 'Failed to update image.');
        }

    }
}
