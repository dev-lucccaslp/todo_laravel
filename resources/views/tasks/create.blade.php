<x-layout title="Todo List: Create">

    <x-slot:btn>
        <x-button name="Voltar" href="/" > </x-button>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>

        <form>

            {{-- <div class="inputArea">
                <label for="title">
                    Titulo da Task
                </label>
                <input id="title" name="title" required placeholder="Digie o titulo da tarefa...">
            </div>


                <div class="inputArea">
                    <label for="title" id="due_date">
                        Data de Realização
                    </label>
                    <input name="due_date" id="due_date" type="date" required placeholder="Digie o titulo da tarefa...">
                </div>

                <div class="inputArea">
                    <label for="title" id="category">
                        Categoria
                    </label>
                    <select id="category" name="category" required>
                        <option selected disabled value="">Selecione a categoria</option>
                    </select>
                </div>


                <div class="inputArea">
                    <label for="title" >
                        Descrição da tarefa
                    </label>
                    <textarea name="description" placeholder="Digete a descrição de sua tarefa..." name="" id="" cols="30" rows="10"></textarea>
                </div> --}}

                {{-- <x-forms.text-input type="text" name="name" id="name" label="Nome"  /> --}}


                    <x-forms.text-input
                        name="title"
                        label="Titulo da Task"
                        required="required"
                        placeholder='Digite o titulo da tarefa'
                    />

                    <x-forms.text-input
                        type="date"
                        name="due_date"
                        label="Data da realização"
                        placeholder="Escolha a data da tarefa"
                    />

                    <x-forms.select-input
                        name="category"
                        label="Categoria"
                        placeholder="Digite o titulo da sua tarefa"
                    >
                        <option value="">TESTE</option>
                    </x-forms.select-input>





                    <x-forms.text-area
                        name="description"
                        placeholder="digite a descrição"
                    />

                <div class="inputArea">
                    <button type="submit" class="btn btn-primary">Criar Tarefa</button>
                </div>
            </form>
        </section>

    </x-layout>
