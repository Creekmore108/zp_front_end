<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(){

        request()->validate([
            'first_name' => 'required|gt:3',
            'last_name' => '',
            'email' => 'email|required',
            'organization' => '',
            'phone' => '',
            'comment' => 'required',
            'referral' => '',
        ]);
        // dd(request());
        Contact::create(request()->all());
        
        Alert::success('success','Thank you, we will be in contact with you');
        return redirect()->route('home');
    }


}


