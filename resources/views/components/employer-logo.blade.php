@props(
    ['width'=>42,"job"]
)
@if($job->employer->logo[0]==="l")
<img  src="{{ asset("storage/".$job->employer->logo) }}" alt=""   {{$attributes(["class"=>"rounded-xl"])}}>
@else
    <img  src="http://picsum.photos/seed/{{random_int(1,10000000)}}/{{$width}}" alt=""  class="rounded-xl">
@endif

