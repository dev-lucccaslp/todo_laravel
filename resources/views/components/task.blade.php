<div class="task">

    <div class="title">

        {{-- //checked marcado = true / desmarcado = false // esta função abaixo esta na home --}}
        <input type="checkbox" onchange="taskUpdate(this)" data-id="{{$data['id']}}"
            @if ($data && $data['is_done'])
                checked
            @endif
        />
        <div class="task_title"> {{$data['title'] ?? ''}} </div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div> {{$data['category']->title ?? '' }} </div>
    </div>
    <div class="actions">

        <a href="{{route('task.edit',['id'=> $data['id']])}}">
            <img src="/assets/images/icon-edit.png" alt="" srcset="">
        </a>

        <a href="{{route('task.delete', ['id'=> $data['id']])}}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>

    </div>
</div>
