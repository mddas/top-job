<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Navigation;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function AddJob($category){
       $request_segment = \Request::segment(4);
        if(intval($request_segment) == 0){
            $request_segment = \Request::segment(3);
            $current_max_position = Navigation::where('nav_category',$request_segment)->max('position');
        }else{
            $current_max_position = Navigation::where('parent_page_id',$request_segment)->max('position');
            $category .= '/'.$request_segment;
        }

        $next_position = $current_max_position + 1;
        $categories = Navigation::where('page_type','group')->where('nav_category', $category)->get();
        return view('admin.job.job_create',compact('category','next_position','categories'));
    }
}
