<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContacttableModel;

class ContactController extends Controller
{
    function onContactSend(Request $req ){
        return 'From api';
        $name = $req->input('name');
        $email = $req->input('email');
        $msg= $req->input('msg');
        
        $result = ContacttableModel::insert(['contact_name'=>$name, 'contact_email'=> $email, 'contact_message'=> $msg]);
        if($result == true){
            return 1;
        }else{
            return 0;
        }

    }
}
