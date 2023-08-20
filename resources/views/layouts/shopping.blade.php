<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lafac Store - Ecommerce Étudiant au Maroc | Demande en Ligne Pratiques</title>
    <link rel="stylesheet" href="{{asset('shoppingStyle.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

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
  
  <body>
  
    @yield('contenu')  

    @include('livewire.client.shopping.footer')
    
    <!--------------js for toggle menu-------------->
    <script>
        var menu = document.getElementById("MenuItems");
        menu.style.maxHeight = "0px";
        function menutoggle(){
            if(menu.style.maxHeight == "0px"){
                menu.style.maxHeight = "200px"
            }else{
                menu.style.maxHeight = "0px"
            }
        }
    </script>

    @livewireScripts
  </body>
  
</html>

  {{-- style="background-image: linear-gradient(180deg, rgba(33, 37, 41, 0.01), rgba(33, 37, 41, 1) 85%),
                        radial-gradient(ellipse at top left, rgba(13, 110, 253, 0.5), transparent 50%),
                        radial-gradient(ellipse at top right, rgba(255, 228, 132, 0.5), transparent 50%),
                        radial-gradient(ellipse at center right, rgba(112, 44, 249, 0.5), transparent 50%),
                        radial-gradient(ellipse at center left, rgba(214, 51, 132, 0.5), transparent 50%);"--}} 
    



 

