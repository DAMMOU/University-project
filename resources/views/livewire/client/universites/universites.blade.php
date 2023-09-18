<div>
@php
    use Illuminate\Support\Str;
@endphp

  @extends('layouts.accueil')
  @section('contenu')
    
    <div class="container-xxl ">
      <div class="alert alert-info alert-dismissible fade show text-center" role="alert" wire:offline>
          <strong>Désolé!</strong>, il semble que vous soyez actuellement <strong>hors ligne</strong>. 
          Veuillez vérifier votre connexion internet et réessayer plus tard. Nous nous excusons pour tout inconvénient causé.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <main class="order-1">
        <div class="row">

          <div class="col-md-2">
          </div>
  
          <div class="col-md-8 ">
            <div class="pt-2 ps-lg-2">
              <div class="">
                <h1 class="bd-title mb-1">Les univeristés</h1>
              </div> 

              <h3 class="mb-2 lh-lg">
                Bienvenue sur notre page dédié aux universités marocaines ! 
              </h3>
       
              <p class="mt-2 lh-lg mb-3 fw-semibold">
                Nous sommes heureux de vous offrir un accès facile et rapide à des informations détaillées 
                sur les différentes universités et établissements d'enseignement supérieur au Maroc.
              </p>
              <p class=" mt-1 lh-lg mb-3 fw-semibold">
                Notre plateforme est conçue pour vous aider à trouver les ressources dont vous avez besoin pour 
                réussir vos études et à vous accompagner dans votre parcours académique.
              </p>
              <div class="container">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach ($universites as $universite)
                  @php
                     $univTranslationKey = $universite->initiale;
                     $etablissements = $universite->etablissements
                  @endphp
                <div class="accordion-item"style="background-color: transparent;">
                  <h2 class="accordion-header " id="flush-heading{{$universite->id}}">
                    <button id="btn-accordion" class="accordion-button collapsed fs-5 fw-bolder mx-0  text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" type="button" data-bs-toggle="collapse" 
                      data-bs-target="#flush-collapse{{$universite->id}}" aria-expanded="false" aria-controls="flush-collapseOne"
                      style="background-color: #712cf9;background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);background-size: cover;">
                      {{ __($univTranslationKey) }}
                    </button>
                  </h2>
                  <div id="flush-collapse{{$universite->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$universite->id}}" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        @foreach ($universite->etablissements as $etablissement)
                        @php
                          $etablishmentTransKey  = generateAcronym($etablissement->nom);
                        @endphp
                          <a href="{{url($universite->initiale.'/'.generateAcronym($etablissement->nom).'-'.urlencode(Str::slug($etablissement->ville->nom)).'-'.$etablissement->id.'/formations')}}" 
                            class="list-group-item list-group-item-action">
                            {{ __($etablishmentTransKey) }}
                          </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="col-md-2">
          </div>

        </div> 
      </main>
    </div>
    
    
@endsection

 
</div>
