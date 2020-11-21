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
    function onSelectLimit(){
        $result = ProjectsTableModel::limit(3)->get();
        return $result;
    }   
    function onSelectDetails( $projectId){
        $id = $projectId;
        $result = ProjectsTableModel::where(['id' => $id])->get();
        return $result;
    }

}
