<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectsTableModel;


class ProjectController extends Controller
{
    function onSelectAll(){
        $result = ProjectsTableModel::all();
        return $result;
    }
    function onSelectLimit( Request $req){
        $result = ProjectsTableModel::limit($req->input('limit'))->get();
        return $result;
    }   
    function onSelectDetails( Request $req){
        $id = $req->input('id');
        $result = ProjectsTableModel::where(['id' => $id])->get();
        return $result;
    }

}
