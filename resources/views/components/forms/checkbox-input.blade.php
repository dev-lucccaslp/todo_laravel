@props([
    'name',
    'label'=> null,
    'required',
    'value' => null,
    'checked'
])

<div class="inputArea">
    <label for="{{$name}}">
        {{$label }}
    </label>
    <input
        type="checkbox"
        id="{{$name}}" name="{{$name}}"
        {{empty($required) ? '' : 'required'}}
        value="1"
        {{$checked ? 'checked' : ''}}
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
