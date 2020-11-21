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
    function onSelectLimit(){
        $result = CoursesTableModel::limit(4)->get();
        return $result;
    }   

    function onSelectDetails($courseId){
        $result = CoursesTableModel::where(['id' => $courseId])->get();
        return $result;
    }
}

