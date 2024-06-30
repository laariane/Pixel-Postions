@props(['job'])
<x-panel class="flex-col text-center">
<div class="mb-2 self-start text-sm">
        {{$job->employer->name}}
    </div>

    <div class="space-y-3 py-8 font-bold">
        <h3  class="group-hover:text-blue-500 transition-colors duration-300">{{$job->title}}</h3>
        <p>{{$job->schedule}} -  from {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto  ">
        <div class="">
            @foreach($job->tags as $tag )
                <x-tag :$tag :size="'small'"  ></x-tag>
            @endforeach
        </div>
        <div>
            <x-employer-logo :width=60></x-employer-logo>
        </div>
    </div>
</x-panel>
