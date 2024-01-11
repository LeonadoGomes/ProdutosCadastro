@extends('layouts.main')

@section('title', 'Produtos Cadastrado')

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
        <h2 class="table-title">Listagem de Produtos</h2>
        @if (count($products) > 0)
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <!-- Adicione suas linhas de tabela aqui -->
                <tbody>
                    @foreach ($products as $products)
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td> {{ $products->name }}</td>
                            <td>
                                <img src="/img/produtos/{{ $products->image }}" alt=""
                                    style="max-width: 100px; max-height: 100px;">
                            </td>

                            <td>{{ $products->qtd }}</td>
                            <td>R$ {{ number_format($products->preco, 2, ',', ',') }}</td>
                            <td>{{ $products->description }}</td>
                            <td class="icon-cell">
                                <form action="/products/{{ $products->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-bin-outline"></ion-icon>Deletar
                                    </button>

                                    <a href="/products/edit/{{ $products->id }}" class="btn btn-info edit-btn"><ion-icon
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
