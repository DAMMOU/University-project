<div>
    @extends('layouts.accueil')
@section('contenu')
    
      <div >
        <div class="bd-masthead " id="content">
            <div class="container-xxl bd-gutter">
                <div class="col-md-8 mx-auto text-center">
                    <a class="d-flex flex-column flex-lg-row justify-content-center align-items-center mb-4 text-dark lh-sm text-decoration-none" 
                    href="#">
                        <strong class="d-sm-inline-block p-2 me-2 mb-2 mb-lg-0 rounded-3 masthead-notice"style=" background-color: rgb(255, 228, 132);">
                            Partager avec tous le monde
                        </strong>
                        <span class="text-body-secondary">
                            1k d'étudiants sauvés, et ça continue grâce à vous
                        </span>
                    </a>
                    <img src="{{asset('img/logo.png')}}" width="200" height="165" alt="logo lafac.net" class="d-block mx-auto mb-3">
                    <h1 class="mb-3 fw-semibold lh-1">
                        
                      Education au Maroc est plus facile que jamais
                            
                    </h1>
                    <p class="lead ">                   
                        Notre plateforme est le lieu idéal pour explorer les options d'études universitaires au Maroc.
                        Trouve les meilleures ressources pédagogiques pour réussir vous études.
                        
                    </p>
                    <div class="container">
                      <div class="row   row-cols-2 row-cols-sm-2 row-cols-md-4 g-2">
                        <div class="col">
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                             data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                             style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                              background-size: cover;">
                                Univesites
                            </button>
                        </div>
                        <div class="col">
                          <a href="{{route('exemples')}}">
                            <button class="btn btn-primary" type="button" style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                              background-size: cover;">
                              Exemples
                            </button>
                          </a>
                        </div>
                        <div class="col">
                              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                                background-size: cover;">
                                  Univesites
                                </button>
                        </div>
                        <div class="col">
                              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                                background-size: cover;">
                                Univesites
                              </button>
                        </div>
                      </div>
                    </div>
                       
              </div> 
            </div>
          </div>
            @include('livewire.client.accueil.scroul-left')
      </div>
  
    
@endsection

 
</div>
