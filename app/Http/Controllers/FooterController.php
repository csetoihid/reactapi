<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\FooterTableModel;
class FooterController extends Controller
{
    function onSelectAll(){
        $result = FooterTableModel::all();
        return $result;
    }
}
