<div class="task">

    <div class="title">
        <input type="checkbox" name="" id=""
            @if ($data && $data['done'])
                checked
            @endif
        />
        <div class="task_title"> {{$data['title'] ?? ''}} </div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div> {{$data['category' ?? '']}} </div>
    </div>
    <div class="actions">

        <a href="{{route('task.edit')}}">
            <img src="/assets/images/icon-edit.png" alt="" srcset="">
        </a>

        <a href="{{route('task.delete')}}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>

    </div>
</div>
