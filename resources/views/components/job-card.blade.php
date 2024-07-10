@props(['job'])
<x-panel class="flex-col text-center">
<div class="mb-2 self-start text-sm">
        {{$job->employer->name}}
    </div>

    <div class="space-y-3 py-8 font-bold">
        <a href="{{$job->url}}"  class="group-hover:text-blue-500 transition-colors duration-300">{{$job->title}}</a>
        <p>{{$job->schedule}} -  from {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto  ">
        <div class="">
            @foreach($job->tags as $tag )
                <x-tag :$tag :size="'small'"  ></x-tag>
            @endforeach
        </div>
        <div class>
            <x-employer-logo class="w-[60px]" :$job></x-employer-logo>
        </div>
    </div>
</x-panel>
