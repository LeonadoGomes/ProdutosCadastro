@extends('layouts.main')

@section('title', 'Editar de Usuários')

@section('content')

    <body>

        <div class="form-container">
            @if (session('success'))
                <script>
                    Swal.fire({
                        title: "Sucesso!",
                        text: "{{ session('success') }}",
                        icon: "success"
                    });
                </script>
            @endif
            <h1 class="title1">Editar Usuário</h1>
            <form action="/login/update/{{ $cadastro->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="title1">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Usuário"
                        required value="{{ $cadastro->name }}">
                </div>
                <div class="form-group">
                    <label for="surname" class="title1">Sobre Nome:</label>
                    <input type="text" class="form-control" id="surname" name="surname"
                        placeholder="Sobre Nome"required value="{{ $cadastro->surname }}">
                </div>
                <div class="form-group">
                    <label for="login" class="title1">Login:</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login"required
                        value="{{ $cadastro->login }}">
                </div>

                <div class="form-group">
                    <label for="password" class="title1">Senha:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Senha"required value="{{ $cadastro->password }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <ion-icon name="eye-off-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

        </div>
    </body>


@endsection
