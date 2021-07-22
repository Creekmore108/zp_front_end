<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\EmailList;

class EmailListController extends Controller
{

    public function show(){
        // dd('inside show');
        $emails = EmailList::all();

        return view('contacts', compact('emails') );
    }


    public function store(){

        request()->validate([
            'email' => 'email|required',
        ]);

        EmailList::create(request()->all());
        
        Alert::success('success','Thanks for subscribing, you are on the list.');
        return redirect()->route('home');
    }
        
}