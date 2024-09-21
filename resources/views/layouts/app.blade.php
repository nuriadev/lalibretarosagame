<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La libreta rosa tour game</title>
    
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        footer {
            padding: 1rem;
            text-align: center;
        }
    </style>

</head>
<body>
    <header>
            <img src="https://chiaraoliveroficial.com/cdn/shop/files/banner-llr-home-mobile.png?v=1718358135&width=550" 
                 alt="La Libreta Rosa" 
                 style="max-width: 100%; height: auto;">
                 <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/ranking">Ranking</a></li>
                <!-- Añade más enlaces según sea necesario -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- jQuery -->
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <footer>
        <p>&copy; 2024 La libreta rosa tour game</p>
    </footer>
</body>
</html>
