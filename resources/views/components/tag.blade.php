
@props(['tag','size'=>"normal"])
@if($size==="small" && isset($tag))
<a href="" {{$attributes->merge(["class"=>"bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl transition-colors duration-300 font-bold text-xxs"])}}>{{$tag->name}}</a>
@elseif(isset($tag))
<a href="" {{$attributes->merge(["class"=>"bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl transition-colors duration-300 font-bold text-xs"])}}>{{$tag->name}}</a>
@else
    <a href="" {{$attributes->merge(["class"=>"bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl transition-colors duration-300 font-bold text-xs"])}}>{{$slot}}</a>

@endif





