
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
          <form class="fr-search" wire:submit.prevent='search'>
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
              <span class ="fst-italic" style="color:rgb(210, 210, 210);">ex.: master chimie Rabat</span> 
              <input type="text"  wire:model="query"  class="form-control mt-0   @if (session()->has('message')) border-2 is-invalid @endif">
              @error('query') <span class="text-danger"></span> @enderror
              <hr class="my-2"> 
              <div class="form-check form-switch">
                <input class="form-check-input" wire:model="plusMoinsOptions" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label"  for="flexSwitchCheckDefault">Plus d'options/Moins d'options</label>
              </div>
              @if($this->plusMoinsOptions)
              
                <div class="row mt-2">
                  <div class="col-sm">
                    <label  class="form-label ">Université<span class="text-danger">*</span></label>
                      <select class="form-select @error('newLine.universite') is-invalid @enderror" aria-label="Default select example" 
                          wire:model="newLine.universite">
                          <option selected>Toutes les universites</option>
                          @foreach ($universites as $universite)
                            <option value="{{$universite->id}}">{{$universite->nom." - ".$universite->ville->nom}}</option>
                          @endforeach 
                      </select>
                      @error('newLine.universite') <span class="text-danger">{{$message}}</span> @enderror 
                  </div>
                  <div class="col-sm">
                    <label  class="form-label ">Dans une<span class="text-danger">*</span></label>
                      <select class="form-select @error('newLine.typeEtab') is-invalid @enderror" aria-label="Default select example" 
                          wire:model="newLine.typeEtab">
                          <option selected>--</option>
                          @foreach ($typeEtablissemests as $typeEtablissemest)
                            <option value="{{$typeEtablissemest->id}}">{{$typeEtablissemest->label}}</option>
                          @endforeach 
                      </select>
                      @error('newLine.typeEtab') <span class="text-danger">{{$message}}</span> @enderror 
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm">
                    <label  class="form-label ">Niveau<span class="text-danger">*</span></label>
                      <select class="form-select @error('newLine.niveau') is-invalid @enderror" aria-label="Default select example" 
                          wire:model="newLine.niveau">
                          <option selected>--</option>
                          @foreach ($niveaux as $index => $niveau)
                            <option value="{{$index +1}}">{{$niveau}}</option>
                          @endforeach
                      </select>
                      @error('newLine.niveau') <span class="text-danger">{{$message}}</span> @enderror 
                  </div>
                  <div class="col-sm">
                    <label  class="form-label ">Domaine<span class="text-danger">*</span></label>
                      <select class="form-select @error('newLine.domaine') is-invalid @enderror" aria-label="Default select example" 
                          wire:model="newLine.domaine">
                          <option selected>--</option>
                          @foreach ($domaines as $domaine)
                            <option value="{{$domaine->id}}">{{$domaine->intitule}}</option>
                          @endforeach 
                      </select>
                      @error('newLine.domaine') <span class="text-danger">{{$message}}</span> @enderror 
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-3">
                      
                  </div>
                  <div class="col-6">
                    <label  class="form-label ">Ville<span class="text-danger">*</span></label>
                      <select class="form-select @error('newLine.ville') is-invalid @enderror" aria-label="Default select example" 
                          wire:model="newLine.ville">
                          <option selected>--</option>
                           @foreach ($villes as $ville)
                            <option value="{{$ville->id}}">{{$ville->nom}}</option>
                          @endforeach
                      </select>
                      @error('newLine.ville') <span class="text-danger">{{$message}}</span> @enderror 
                  </div>
                  <div class="col-3">
               
                 </div>
                 
                </div>
                
              
              @endif
            </div>
            
            @if (!$plusMoinsOptions)
              <div class=" row mx-auto p-2 w-25" >
                <button class="btn btn-primary btn-lg " id='contact-us-btn' type="submit" 
                  wire:target='search' wire:loading.attr="disabled">
                  <div wire:target='search' wire:loading class='mr-2'> 
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>   
                      <span>Rechercher...</span>  
                  </div>
                  <span wire:target='search' wire:loading.remove>Rechercher</span>
                </button>
              </div>
            @endif
            
            
          </form>
          <p>Résultats: {{count($this->resultats)}} formations trouvée</p>
          
          <div class="container">
            <div class="row row-cols-3">
              @foreach($this->resultats as $resultat)
                <div class="col"><a href="#">{{ $resultat->intitule." - ".$resultat->categorie->initiale 
                ." - ".$resultat->ville->nom}}</a></div>
              @endforeach
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-2">
      </div>
    </div> 
  </main>
</div>

