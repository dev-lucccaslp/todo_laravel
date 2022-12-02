@props([
    'name',
    'label'=> null,
    'required',
    'value' => null
])

<div class="inputArea">
    <label for="{{$name}}">
        {{$label}}
    </label>
    <select id="{{$name}}" name="{{$name}}" {{empty($required) ? '' : 'required'}}>
        <option selected disabled value="">{{$value}}</option>
        {{$slot}}
    </select>
</div>
