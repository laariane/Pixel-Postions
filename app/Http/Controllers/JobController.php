<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('jobs.index', [
            'jobs' =>Job::with('employer','tags')->orderBy('created_at', 'desc')->paginate(10),
            "featuredJobs"=>Job::with("employer","tags")->orderBy('created_at', 'desc')->groupBy("featured")->paginate(3),
            'tags'=>Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $jobData=$request->validate([
           "title"=>"required",
           "salary"=>"required",
           "location"=>"required",
           "schedule"=>["required",Rule::in(["Part Time","Full Time","Freelance"])],
            "url"=>"required|active_url",
        ]);
        $jobData["featured"]= $request->input("featured");
        $job=Auth::user()->employer->jobs()->create($jobData);
        $tags=$request->input("tags");
        if(!empty($tags)){
            $tags=explode(",",$tags);
            foreach($tags as $tag){
                $job->tag($tag);
            }
        }
   return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
