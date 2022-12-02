<x-layout title="Todo List: Create">

    <x-slot:btn>
        <x-button name="Voltar" href="/" > </x-button>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar Tarefa</h1>

        <form method="POST" action="{{route('task.create_action')}}" >
            @csrf
            <x-forms.text-input
                name="title"
                label="Titulo da tarefa"
                required="required"
                placeholder='Digite o titulo da tarefa'
            />

            <x-forms.text-input
                type="datetime-local"
                name="due_date"
                label="Data da realização"
            />

            <x-forms.select-input
                name="category_id"
                label="Categoria(s)"
            >
                @foreach($categories as $category)

                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-forms.select-input>

            <x-forms.text-area
                name="description"
                label="Descrição da tarefa"
                placeholder="Digite a descrição da tarefa"
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
                        Criar tarefa
                    </x-forms.button-sr>
            </div>
        </form>
    </section>
</x-layout>
