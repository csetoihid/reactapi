<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactTableModel;

class ContactController extends Controller
{
    function onContactSend(Request $req ){
        $contactArray = json_decode($req->getContent(),true);
        $name = $contactArray['name'];
        $email = $contactArray['email'];
        $msg = $contactArray['msg'];
        $result = ContactTableModel::insert(['contact_name'=>$name, 'contact_email'=> $email, 'contact_message'=> $msg]);
        if($result == true){
            return 1;
        }else{
            return 0;
        }

    }
}
 