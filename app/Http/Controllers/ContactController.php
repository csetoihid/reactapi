<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContacttableModel;

class ContactController extends Controller
{
    function onContactSend(Request $req ){
        $contactArray = json_decode($req->getContent(),true);
        return $contactArray;
        $name = $contactArray['name'];
        $email = $contactArray['email'];
        $msg= $contactArray['msg'];
        
        $result = ContacttableModel::insert(['contact_name'=>$name, 'contact_email'=> $email, 'contact_message'=> $msg]);
        if($result == true){
            return 1;
        }else{
            return 0;
        }

    }
}
 