<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class SearchTagController extends Controller
{
    public function __invoke(Tag $tag, Request $request)
    {
        $jobs = $tag->jobs->load("employer","tags");
        return view('search.index',[
            "jobs"=>$jobs,
        ]);
    }
}
