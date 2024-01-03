@extends('layouts.main')

@section('title', 'Cadastro de Ferramentas')

@section('content')

    <body>
        <div class="form-container">
            <h1 class="title1">Editar Produto</h1>
            <form action="/products/update/{{ $products->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="title1">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Produto"
                        value="{{ $products->name }}">
                </div>
                <div class="form-group">
                    <label for="qtd" class="title1">Quantidade:</label>
                    <input type="number" class="form-control" id="qtd" name="qtd"
                        placeholder="Quantidade do Produto" value="{{ $products->qtd }}">
                </div>

                <div class="form-group">
                    <label for="preco" class="title1">Preço:</label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do Produto"
                        pattern="[0-9]+([\.,][0-9]+)?"
                        title="Use apenas números e, opcionalmente, um ponto ou vírgula para decimais"
                        value="{{ $products->preco }}">
                </div>

                <div class="form-group">
                    <label for="description" class="title1">Descrição:</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Descrição do Produto" value="{{ $products->description }}">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </body>

@endsection
