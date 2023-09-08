<!doctype html>
<html lang="en">
    <head>
        <title>LafacStore</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('lafac-store/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        @livewireStyles
    </head>

    <body style="background-color:#232323">
        <header>
            @include('livewire.Lafacstore.header')
        </header>
        <main>
            @yield('main')
        </main>
        
        <footer>
            @include('livewire.Lafacstore.footer')
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
        @stack('js')
        @livewireScripts
    </body>
</html>