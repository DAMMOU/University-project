<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LafacStore</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Faites des économies de temps et d'argent sur les achats de vos équipements informatiques, (ordinateurs, casques, chargeurs, imprimantes) disponibles dans toutes les tailles et quantités. Avec des prix compétitifs, une livraison fiable et un large choix de produits disponibles, Amazon Business simplifie vos achats professionnels.">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="{{asset('lafac-store/css/style.css')}}" rel="stylesheet">

        @stack('css')

        @livewireStyles
    </head>

    <body>
        <main>
            @yield('main')
        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
        @stack('js')
        @livewireScripts
    </body>
</html>