{{-- @props([
    'type',
    'href',
])

<div class="inputArea">
    <a href="{{$href}}"><button type="{{$type}}" class="btnr btn-primary">{{$slot}}</button></a>
</div> --}}

@props([
    'type',
])

<div class="inputArea">
    <button type="{{$type}}" class="btnr {{$type == 'submit' ? 'btn-primary' : ''}}">{{$slot}}</button>
</div>
