<x-layout title="Todo List: Home">

    <x-slot:btn>
        <x-button  name='Criar Tarefa' href="/task/new"> </x-button>
        <x-button  name='Sair' href="/logout"> </x-button>

        {{-- <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a> --}}
    </x-slot:btn>

    {{-- - {{$AuthUser->name}} --}}
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="" srcset="">
                    08 de Dez{{-- {{$date_as_string}} --}}
                <img src="/assets/images/icon-next.png" alt="" srcset="">
            </div>
        </div>
        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph-placeholder">

        </div>

        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
        </div>

    </section>

    <section class="list">
        <div class="list_header">

            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>

        </div>

        <div class="task_list">

            @foreach ($data as $task)
                <x-task :data=$task/>
            @endforeach

        </div>
    </section>
<script>
   async function taskUpdate(element) {
        let status = element.checked; //checked marcado = true / desmarcado = false
        let taskID = element.dataset.id;
        let url = '{{route('task.update')}}';
        let rawResult = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json',
                'accept': 'application/json'
            },
            body: JSON.stringify({status, taskID, _token:'{{ csrf_token() }}'})
        });
        result = await rawResult.json();
        if(result.success) {
            alert('Tarefa Atualizada com Sucesso!')
        } else {
            element.checked = !status;
        }

    }
</script>
</x-layout>


