@props(['job'])

<x-panel class="justify-between">
    <div class="flex  space-x-5">
    <x-employer-logo :width="100"  class="w-[100px]" :$job ></x-employer-logo>
        <div class="flex flex-col space-y-5">
            <div>
        <a href="#" class="text-xs text-white/50">{{$job->employer->name}}</a>
        <h3 class="text-xl group-hover:text-blue-500 transition-colors duration-300">{{$job->title}}</h3>
            </div>
        <p class="text-xs text-white/50">{{$job->schedule}} - {{$job->salary}}</p>
        </div>
    </div>
    <div class="flex flex-col justify-between items-end ">
        <div>
            <x-tag class="bg-white/0 border border-white/10">{{$job->location}}</x-tag>
            @php
                $created_at = \Carbon\Carbon::parse($job->created_at);
                  $now = \Carbon\Carbon::now();
                  $diffInMinutes = $created_at->diffInMinutes($now, true); // Absolute difference in minutes
                  $diffInHours = floor($diffInMinutes / 60); // Convert minutes to hours and floor it to get whole hours
            @endphp
            <x-tag class="bg-white/0 border border-white/10">{{$diffInHours}}h</x-tag>
        </div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag> </x-tag>
            @endforeach
        </div>
    </div>
</x-panel>
