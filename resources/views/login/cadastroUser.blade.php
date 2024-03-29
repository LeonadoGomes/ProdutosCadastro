@extends('layouts.main')

@section('title', 'Cadastro de Usuários')

@section('content')

    <body>
        @if (session('success'))
            <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
            </script>
        @endif
        <div class="form-container">
            <h1 class="title1">Cadastre o Usuário</h1>
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="title1">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Usuário"
                        required>
                </div>
                <div class="form-group">
                    <label for="surname" class="title1">Sobre Nome:</label>
                    <input type="text" class="form-control" id="surname" name="surname"
                        placeholder="Sobre Nome"required>
                </div>
                <div class="form-group">
                    <label for="login" class="title1">Login:</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login"required>
                </div>

                <div class="form-group">
                    <label for="password" class="title1">Senha:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Senha"required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <ion-icon name="eye-off-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>

        </div>
    </body>


@endsection
