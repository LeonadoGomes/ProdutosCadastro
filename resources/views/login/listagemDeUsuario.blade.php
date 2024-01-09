@extends('layouts.main')

@section('title', 'Listagem de Usuarios')

@section('content')


    <div class="table-container">
        @if (session('success'))
            <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
            </script>
        @endif
        <h2 class="table-title"> Usuários</h2>
        @if (count($cadastro) > 0)
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobre Nome</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <!-- Adicione suas linhas de tabela aqui -->
                <tbody>
                    @foreach ($cadastro as $cadastro)
                        <tr>
                            <td>{{ $cadastro->id }}</td>
                            <td> {{ $cadastro->name }}</td>
                            <td>{{ $cadastro->surname }}</td>

                            <td class="icon-cell">
                                <form action="/cadastro/{{ $cadastro->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-bin-outline"></ion-icon>Deletar
                                    </button>

                                    <a href="/login/edit/{{ $cadastro->id }}" class="btn btn-info edit-btn"><ion-icon
                                            name="create-outline"></ion-icon>Editar</a>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        @endif
    </div>
@endsection
