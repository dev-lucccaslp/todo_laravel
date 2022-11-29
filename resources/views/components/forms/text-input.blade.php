<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
        type="{{empty($type) ? 'text' : $type}}"
        id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder ?? ''}}"
        {{empty($required) ? '' : 'required'}}
    />
</div>

{{-- <div class="inputArea">
    <label for="title">
        Titulo da Task
    </label>
    <input id="title" name="title" required placeholder="Digie o titulo da tarefa...">
</div> --}}
