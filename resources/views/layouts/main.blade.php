<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <a href="" class="navbar-brand">
            <img src="/img/logo.png" alt="">
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/products/cadastro">Cadastro</a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li> --}}
        </ul>
    </nav>


    @yield('content')
    <footer>Registro de Produtos</footer>

</body>

</html>
