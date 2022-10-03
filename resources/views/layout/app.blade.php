<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Laravel Comics</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('homePage')}}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('comics.index')}}">
                                Comics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('comics.create')}}">
                                Aggiungi un fumetto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>