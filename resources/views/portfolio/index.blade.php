<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title" content="Titre de votre portfolio">
        <meta name="description" content="Description de votre portfolio">
        <meta name="keywords" content="Youssef DAMMOU, Portfolio, EILCO">
        <meta name="author" content="Youssef DAMMOU">
        <meta name="copyright" content="2023 Portfolio de Youssef DAMMOU. Tous les droits sont réservés.">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
        <style>
            .jumbotron{
            background-image: url('port-folio/img/jumbotron-bg.jpg');
            }
        </style>
        <link rel="stylesheet" href="{{ asset('port-folio/css/style.css') }}">
        <title> Portfolio - Youssef DAMMOU</title>
    </head>
    
    <body>
        @include('portfolio.navbar')
        <div class="container">
            @include('portfolio.networks')       
            @include('portfolio.presentation')
            @include('portfolio.project') 
            @include('portfolio.formations')
            @include('portfolio.footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
