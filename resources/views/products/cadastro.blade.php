@extends('layouts.main')

@section('title', 'Cadastro de Ferramentas')

@section('content')

    <body>
        <div class="form-container">
            <h1 class="title1">Cadastre o Produto</h1>
            <form action="/products" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="title1">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="qtd" class="title1">Quantidade:</label>
                    <input type="number" class="form-control" id="qtd" name="qtd"
                        placeholder="Quantidade do Produto">
                </div>
                <div class="form-group">
                    <label for="qtd" class="title1">Preço:</label>
                    <input type="number" class="form-control" id="preco" name="preco" placeholder="Preço Do Produto">
                </div>
                <div class="form-group">
                    <label for="description" class="title1">Descrição:</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Descrição do Produto">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </body>

@endsection
