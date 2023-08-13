<!doctype htm >
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lafac.net | Accueil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('styleBootsrrap.css')}}">
    <link rel="stylesheet" href="{{asset('styles_header.css')}}">
    <link rel="stylesheet" href="{{asset('styles_econd_bar.css')}}">
    <link rel="stylesheet" href="{{asset('footer.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("img/logo.png")}}">
    <meta name="description" content="Notre site web est la source ultime pour les étudiants marocains en quête de ressources. Découvrez des guides pratiques, des conseils d'experts et des outils pour réussir vos études. Cliquez ici pour en savoir plus.">

      <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-291BW7608R"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-291BW7608R');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-255498841-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-255498841-1');
    </script>
    
    @livewireStyles
  </head>
  
  <body style="background-image: linear-gradient(180deg, rgba(33, 37, 41, 0.01), rgba(33, 37, 41, 1) 85%),
                        radial-gradient(ellipse at top left, rgba(13, 110, 253, 0.5), transparent 50%),
                        radial-gradient(ellipse at top right, rgba(255, 228, 132, 0.5), transparent 50%),
                        radial-gradient(ellipse at center right, rgba(112, 44, 249, 0.5), transparent 50%),
                        radial-gradient(ellipse at center left, rgba(214, 51, 132, 0.5), transparent 50%);">
    @include('livewire.client.accueil.header')
    @yield('contenu')  
    @include('livewire.client.accueil.footer')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>

    
    



 

