@props([
    'name',
    'label'=> null,
    'type',
    'required',
    'placeholder' => null,
    'value' => null
])

<div class="inputArea">
    <label for="{{$name}}">
        {{$label }}
    </label>
    <input
        type="{{empty($type) ? 'text' : $type}}"
        id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}"
        {{empty($required) ? '' : 'required'}}
        value="{{$value}}"
    />
</div>


{{--
 @props([
  'label'
])
<div class="inputArea">
   <label for="{{$attributes->get('id')}}">{{$label}}</label>
   <input {{$attributes->class(['form-control', 'is-invalid' => $errors->has($attributes->get('name'))])}} />
   @error($attributes->get('name'))
        <div class="alert alert-danger">
           {{$message}}
        </div>
   @enderror
</div> --}}
