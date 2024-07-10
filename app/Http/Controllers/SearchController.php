<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $searchTerm=$request->input("q");
        $result=Job::where("title","LIKE","%".$searchTerm."%")->with(["employer","tags"])->get();

        return view('search.index',[
            "jobs"=>$result,
        ]);
    }
}
