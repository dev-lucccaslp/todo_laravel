@props([
    'name',
    'label' => null,
    'placeholder' => null,
    'required',
    'value' => null
])

<div class="inputArea">
    <label for="{{$name}}" >
       {{$label}}
    </label>
    <textarea
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        {{empty($required) ? '' : 'required'}}>{{$value}}</textarea>
</div>
