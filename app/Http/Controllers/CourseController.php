<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoursesTableModel;
class CourseController extends Controller
{
    function onSelectAll(){
        $result = CoursesTableModel::all();
        return $result;
    }
    function onSelectLimit( Request $req){
        $result = CoursesTableModel::limit($req->input('limit'))->get();
        return $result;
    }   

    function onSelectDetails( Request $req){
        $id = $req->input('id');
        $result = CoursesTableModel::where(['id' => $id])->get();
        return $result;
    }
}

