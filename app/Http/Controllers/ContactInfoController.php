<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Models\Contact;

class ContactInfoController extends AppBaseController
{

    function __construct(Contact $contacts)
    {
        $this->contacts = $contacts;
    }
    
    public function getAdd( Contact $contact )
    {
        if( Auth::user()->contact()->count() < 1 ) {
            return view('contact.add', compact('contact'));
        } else {
            return redirect('/');            
        }

    }

    public function postAdd(Requests\ContactInfoRequest $request)
    {
        if( Auth::user()->contact()->count() < 1 ) {
            Auth::user()->contact()->create( $request->all() );
            return redirect()->route('edit.contact.info')->with('message', 'Your information Has been added.');
        } else {
            return redirect('/');            
        }

    }

    public function postEdit(Requests\ContactInfoRequest $request, $id)
    {
        if( Auth::user()->contact()->count() > 0 ) {
            $contact = $this->contacts->find($id);

            if( $contact ) {
                $contact->fill( $request->all() )->save();
                return redirect()->route('edit.contact.info')->with('message', 'Your information Has been updated.');
            }
        } else {
            return redirect('/');            
        }

    }
    
    public function getEdit()
    {
        if( Auth::user()->contact()->count() < 1 ) {
            return redirect('/');            
        } else {
            $contact = Auth::user()->contact()->first();
            return view('contact.edit', compact('contact'));
        }
    }
}
