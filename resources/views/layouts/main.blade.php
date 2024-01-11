<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
    <script src="/js/cadastro.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <a href="" class="navbar-brand">
            <img src="/img/logo.png" alt="">
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio <ion-icon name="home-outline"></ion-icon></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/products/cadastro">Cadastro Produtos <ion-icon
                        name="duplicate-outline"></ion-icon></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login/cadastroUser">Cadastra-se <ion-icon
                        name="person-add-outline"></ion-icon></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login/listagemDeUsuario">Usuário Cadastrado <ion-icon
                        name="receipt-outline"></ion-icon></a>
            </li>


        </ul>
    </nav>


    @yield('content')
    {{-- <footer>Registro de Produtos</footer> --}}

</body>

</html>
