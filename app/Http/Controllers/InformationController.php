<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationEtcModel;

class InformationController extends Controller
{
    function onSelectAll(){
        $result = InformationEtcModel::all();
        return $result;
    }
}
