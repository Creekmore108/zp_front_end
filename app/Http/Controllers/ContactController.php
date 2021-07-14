<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{

    public function store(Request $request){
        

        $data = Validator::make($request->all(),  [
            'first_name' => 'required',
            'last_name' => '',
            'email' => 'email|required', 
            'organization' => '',
            'phone' => '',
            'comment' => 'required',
            'referral' => '',
        ]);
        
        if ($data->fails()) {
            return Redirect::to(URL::previous() . "#contact")->withErrors($data)->withInput();
        }

        Contact::create($request->all());
        
        Alert::success('success','Thank you, we will be in contact with you');
        
        return Redirect::to(URL::previous() . "#contact");
    }


}


