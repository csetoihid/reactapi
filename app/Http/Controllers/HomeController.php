<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeETCModel;
class HomeController extends Controller
{
    function onSelectVideoVideo(){
        $result = HomeEtcModel::select('video_des', 'video_url')->get();
        return $result;
    }
    function onSelectProjectClients(){
        $result = HomeEtcModel::select('total_projects', 'total_clients')->get();
        return $result;
    }
    function onSelectTechDes(){
        $result = HomeEtcModel::select('tech_des')->get();
        return $result;
    }
    function onSelectHomeTopTitle(){
        $result = HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }

}
