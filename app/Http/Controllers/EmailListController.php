<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\EmailList;

class EmailListController extends Controller
{
    public function store(){

        request()->validate([
            'email' => 'email|required',
        ]);

        EmailList::create(request()->all());
        
        Alert::success('success','Thanks for subscribing, you are on the list.');
        return redirect()->route('home');
    }
        
}