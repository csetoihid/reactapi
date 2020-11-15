<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicesTableModel;

class ServiceController extends Controller
{
    function onSelectAll(){
        $result = ServicesTableModel::all();
        return $result;
    }
}
