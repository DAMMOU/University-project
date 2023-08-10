
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
              <h1 class="bd-titl mb-1">
                Je cherche une formation particulière
              </h1>
           </div> 
            <h3>
            </h3>
          </div>
          <p class="mt-1 lh-lg mb-1 fw-semibold">
            Trouver la formation parfaite n'a jamais été aussi simple.
            Commencez dès maintenant en saisissant vos intérêts, votre 
            domaine d'études ou d'autres critères dans la boîte de recherche ci-dessous.
            <span class ="text-danger fs-5 "></span> 
          </p>
          <form class="fr-search" wire:submit.prevent='searchFormations'>
            @csrf      
            <div class="row g-3 px-lg-5">
              <div>
                  @if (session()->has('message'))
                     <div class="alert alert-danger pb-0 pt-0" role="alert" style="background-color: transparent;">
                          <h4 class="alert-heading">{{session('message')}}</h4>
                          <p>Assurez-vous de remplir le champ correctement en utilisant le format 
                            "formation domaine ville", par exemple : "LST mathématiques Errachidia".
                          </p>
                      </div>
                  @endif
              </div>
              <label class="form-label text-center">Cherche une formation particulière<span class="text-danger">*</span></label>
              <span class ="fst-italic" style="color:rgb(210, 210, 210);">ex.: master chimie Rabat </span> 
              <input type="text"  wire:model="query"  class="form-control mt-0   @if (session()->has('message')) border-2 is-invalid @endif">
              @error('query') <span class="text-danger"></span> @enderror
              <hr class="my-2">           
            </div>
            
            <div class=" row mx-auto p-2 w-25" >
              <button class="btn btn-primary btn-lg" id='contact-us-btn' type="submit" 
                wire:target='searchFormations' wire:loading.attr="disabled">
                <div wire:target='searchFormations' wire:loading class='mr-2'> 
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>   
                    <span>Rechercher...</span>  
                </div>
                <span wire:target='searchFormations' wire:loading.remove>Rechercher</span>
              </button>
            </div>
          </form>
          <p>Search Results: {{count($this->resultats)}} résultats trouvée</p>
          <ul>
              @foreach($this->resultats as $resultat)
                  <li><a href="#">{{ $resultat->intitule }}</a></li>
              @endforeach
          </ul>
        </div>
      </div>
      <div class="col-md-2">
      </div>
    </div> 
  </main>
</div>

