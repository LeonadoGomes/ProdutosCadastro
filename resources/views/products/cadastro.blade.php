@extends('layouts.main')

@section('title', 'Cadastro de Ferramentas')

@section('content')



    <body>
        <div class="form-container">
            <h1 class="title1">Cadastre o Produto</h1>
            <form action="/products" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image" class="title1">Imagem dos Produtos:</label>
                    <input type="file" class="form-control-file" id="image" name="image" onchange="previewImage()">
                    <img id="preview" class="preview-image" src="#" alt="Preview da Imagem">
                </div>

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
                    <label for="preco" class="title1">Preço:</label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do Produto"
                        pattern="[0-9]+([\.,][0-9]+)?"
                        title="Use apenas números e, opcionalmente, um ponto ou vírgula para decimais">
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
