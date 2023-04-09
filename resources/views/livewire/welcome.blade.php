<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lafac.net | Accueil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('styleBootsrrap.css')}}">
    <link rel="stylesheet" href="{{asset('styles_econd_bar.css')}}">
    <link rel="stylesheet" href="{{asset('styles_header.css')}}">
    <link rel="stylesheet" href="{{asset('footer.css')}}">
    <style>
      body {
    
}
        .hist {
          font-family: Lato, Helvetica, Arial, sans-serif;
    font-size: 18px;
    line-height: 1.72222;
    color: #34495e;
    background-color: #fff;
        background-image: url(http://www.monlyceenumerique.fr/css/parch.jpg);
        padding: 10px 50px 20px 10px;
        border: 2px solid rgb(230, 188, 52);
        margin-bottom: 1em;
        margin-top:10px;
        }
        .hist:before {
    content: "Un peu d'histoire... ";
    display: block;
    width: 400px;
    height: 40px;
    text-decoration: underline;
}
      </style>
  </head>
  <body>
    @include('accueil.header')
      <div>
        <div class="bd-masthead " id="content">
            <div class="container-xxl bd-gutter">
                <div class="col-md-8 mx-auto text-center">
                    <a class="d-flex flex-column flex-lg-row justify-content-center align-items-center mb-4 text-dark lh-sm text-decoration-none" 
                    href="#">
                        <strong class="d-sm-inline-block p-2 me-2 mb-2 mb-lg-0 rounded-3 masthead-notice"style=" background-color: rgb(255, 228, 132);">
                            Partager avec tous le monde
                        </strong>
                        <span class="text-muted">
                            1M d'étudiants sauvés, et ça continue grâce à vous
                        </span>
                    </a>
                    <img src="{{asset('img/logo.png')}}" width="200" height="165" alt="logo lafac.net" class="d-block mx-auto mb-3">
                    <h1 class="mb-3 fw-semibold lh-1">
                        
                       Education au Maroc est puls facile que jamais avec Lafac.net
                            
                    </h1>
                    <p class="lead ">                   
                        Notre plateforme est le lieu idéal pour explorer les options d'études universitaires au Maroc.
                        Trouve les meilleures ressources pédagogiques pour réussir vous études 
                        1K nouvelles cours, exercices, PFE.. d'étude ajoutées chaque mois, provenant de l'une des communautés d'étudiants les plus actives.       
                    </p>
                    <div class="container">
                      <div class="row   row-cols-2 row-cols-sm-2 row-cols-md-4 g-2">
                        <div class="col">
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                             data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                             style="background-image: linear-gradient(180deg,#4e73df 10%,#224abe 100%);
                              background-size: cover;">
                                Univesites
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                                      data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#4e73df 10%,#224abe 100%);
                              background-size: cover;">
                              Univesites
                            </button>
                        </div>
                        <div class="col">
                              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#4e73df 10%,#224abe 100%);
                                background-size: cover;">
                                  Univesites
                                </button>
                        </div>
                        <div class="col">
                              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#4e73df 10%,#224abe 100%);
                                background-size: cover;">
                                Univesites
                              </button>
                        </div>
                      </div>
                    </div>
                       
              </div> 
            </div>
          </div>
        @include('accueil.scroul-left')
    </div>
    @include('accueil.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



    
    

