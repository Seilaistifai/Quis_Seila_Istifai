<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Portal Kampus</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">

        <div class="brand">

            <img src="{{ asset('img/Logo Polinema.png') }}" alt="Logo Politeknik Negeri Malang">

            <div class="brand-text">
                <strong>POLITEKNIK NEGERI MALANG</strong>
            </div>

        </div>

        <div class="menu">

            <a href="/">Beranda</a>

            <a href="/tentang">Tentang Kampus</a>

        </div>

    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 Portal Informasi Kampus | Quis Seila Istifai</p>
    </footer>

</body>

</html>
