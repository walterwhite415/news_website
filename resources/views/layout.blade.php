<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>News</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Navbar</a>
                <div class="navbar-nav d-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="/signup">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/login">Sign in</a>
                    </li>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/article">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/article/create">Create article</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">Гобозашвили Нина Геловна 251-321</p>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="about" class="nav-link px-2 text-body-secondary">About us</a></li>
            <li class="nav-item"><a href="contact" class="nav-link px-2 text-body-secondary">Contacts</a></li>

        </ul>
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>