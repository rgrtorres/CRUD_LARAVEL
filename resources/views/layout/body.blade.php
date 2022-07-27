<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Containers</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>

    <div class="container">
        <header>
            <h1>Containers</h1>
        </header>
    </div>

    <div class="container d-flex mt-5">
        <nav class="col-sm-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('container') }}">Containers</a>
                </li>
            </ul>
        </nav>

        <section class="col-lg">
            @yield('content')
        </section>
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/ddtf.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script>
        $('table').ddTableFilter();

        function deletar(id) {
            aviso = confirm("Você deseja mesma deletar este container?")
            if (aviso == true) {
                location.href="/containers/apagar/"+ id;
            }
        }
    </script>
</body>

</html>
