<x-layout title="Todo List: Registro">
    <x-slot:btn>
        <x-button href="/login" name="Já possui conta? Faça Login"></x-button>
    </x-slot:btn>


    <section id="task_section">
        <h1>Tela de Registro</h1>

        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ( $errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        
        <form method="POST" action="{{route('user.register_action')}}" >
            @csrf
            <x-forms.text-input
                name="name"
                label="Seu nome"
                placeholder='Seu nome'
            />

            <x-forms.text-input
                type="email"
                name="email"
                label="Seu email"
                placeholder="Seu email"
            />

            <x-forms.text-input
                type="password"
                name="password"
                label="Sua senha"
                placeholder="Sua senha"
             />

             <x-forms.text-input
                type="password"
                name="password_confirmation"
                label="Confirme sua senha"
                placeholder="Confirme sua senha"
              />


             <div class="button_forms_create">
                    <x-forms.button-sr
                        type='reset'
                    >
                        Limpar
                    </x-forms.button-sr>

                    <x-forms.button-sr
                        type='submit'
                      >
                        Registrar-se
                </x-forms.button-sr>
            </div>
        </form>
    </section>
</x-layout>
