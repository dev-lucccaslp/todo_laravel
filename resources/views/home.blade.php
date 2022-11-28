<x-layout title="Todo List: Home">

    <x-slot:btn>
        <x-button  name='Criar Tarefa' href="/task/new"> </x-button>
        {{-- <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a> --}}
    </x-slot:btn>


    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="" srcset="">
                13 dez
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

            @php
                $tasks = [
                    ['done' => false, 'title'=> 'minha priemira task', 'category' => 'categoria 1'],
                    ['done' => true, 'title'=> 'minha segunda task', 'category' => 'categoria 1'],
                    ['done' => false, 'title'=> 'minha terceira task', 'category' => 'categoria 2']
                ]
            @endphp
            <x-task :data=$tasks[0]/>
            <x-task :data=$tasks[1]/>
            <x-task :data=$tasks[2]/>
        </div>
    </section>
</x-layout>