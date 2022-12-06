<x-layout title="Todo List: Login">
    <x-slot:btn>
        <x-button name="Registrar-se" href="register" > </x-button>
    </x-slot:btn>

    <section id="task_section">
        <h1>Tela de Login</h1>

        {{-- @if($errors->any())
            <ul class="alert alert-error">
                @foreach ( $errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul> --}}

        <form method="POST" action="{{route('user.login_action')}}" >
            @csrf


            <x-forms.text-input
                type="email"
                name="email"
                label="Email"
                placeholder="Digite seu email"
            />

            <x-forms.text-input
                type="password"
                name="password"
                label="Senha"
                placeholder="Digiete sua senha"
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
                        Logar
                </x-forms.button-sr>
            </div>
        </form>
    </section>
</x-layout>
