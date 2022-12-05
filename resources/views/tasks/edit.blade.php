<x-layout title="Todo List: Edit">
    <x-slot:btn>
        <x-button name="Voltar" href="/" > </x-button>
    </x-slot:btn>

    <section id="task_section">
        <h1>Editar Tarefa</h1>

        <form method="POST" action="{{route('task.edit_action')}}" >
            @csrf

            <input type="hidden" name="id" value="{{$task->id}}">

            <x-forms.checkbox-input
                name="is_done"
                label="Tarefa Realizada?"
                checked="{{$task->is_done}}"

            />

            <x-forms.text-input
                name="title"
                label="Titulo da tarefa"
                required="required"
                placeholder='Digite o titulo da tarefa'
                value="{{$task->title}}"
            />

            <x-forms.text-input
                type="datetime-local"
                name="due_date"
                label="Data da realização"
                value="{{$task->due_date}}"
            />

            <x-forms.select-input
                name="category_id"
                label="Categoria(s)"
            >
                @foreach($categories as $category)

                    <option value="{{$category->id}}"
                        @if ($category->id == $task->category_id)
                         selected
                        @endif
                        >{{$category->title}}

                    </option>
                @endforeach
            </x-forms.select-input>

            <x-forms.text-area
                name="description"
                label="Descrição da tarefa"
                placeholder="Digite a descrição da tarefa"
                value="{{$task->description}}"
            />
                <div class="button_forms_create">

                    <x-forms.button-sr
                        type='reset'
                    >
                        Resetar
                    </x-forms.button-sr>

                    <x-forms.button-sr
                        type='submit'
                      >
                        Atualizar tarefa
                    </x-forms.button-sr>
            </div>
        </form>
    </section>
</x-layout>
