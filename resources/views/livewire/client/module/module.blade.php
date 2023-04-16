<div>
  @extends('layouts.accueil')
  @section('contenu')

    <div class="container-xxl ">
      <main class="order-1">
        <div class="row">
          <div class="col-md-2">
          </div>
  
          <div class="col-md-8">
            <div class="pt-2 ps-lg-2">
              <div class="">
                <h1 class="bd-title mb-1">
                  Module: {{$this->module->intitule}}
                </h1>

            
             </div> 
              <h3>
                {{$this->module->filiere->intitule}}
              </h3>
              <h5>
                {{$this->module->filiere->etablissement->nom .' - '.$this->module->filiere->etablissement->ville->nom}}
              </h5>
                <p class="mt-1 lh-lg mb-3 fw-semibold">
                 Sur cette page, vous trouverez des informations sur les différents cours du module 
                 <span class ="text-danger fs-5 ">{{$this->module->intitule}}</span>, ainsi que des ressources utiles 
                 pour vous aider à réussir vos travaux dirigés, pratiques, examens et tests de connaissance. N'hésitez pas à explorer 
                 cette page et à utiliser les ressources mises à votre disposition pour améliorer vos compétences.
                </p>

            </div>
            <div class="container">

              <div class="accordion accordion-flush" id="accordionFlushExample">
                
                <div class="accordion-item">
                  <h2 class="accordion-header " id="flush-heading">
                    <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1 " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseOne">
                      <i class="bi bi-filetype-pdf"></i>Cours
                    </button>
                  </h2>
                  <div id="flush-collapse" class="accordion-collapse collapse" aria-labelledby="flush-heading" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        @foreach ($module->cours as $cour)
                        <a href{{ $cour->path }} class="list-group-item list-group-item-action">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-filetype-pdf text-danger" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                        </svg>
                        {{ $cour->label }}
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header " id="flush-heading-td">
                      <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-td" aria-expanded="false" aria-controls="flush-collapseOne-td">
                        Travaux Dirigés (TD) 
                      </button>
                    </h2>
                    <div id="flush-collapse-td" class="accordion-collapse collapse" aria-labelledby="flush-heading-td" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="list-group">
                          @
                          <a href='#' class="list-group-item list-group-item-action">
                            ... 
                          </a>
                          
                        </div>
                      </div>
                    </div>
                  </div>


                <div class="accordion-item">
                  <h2 class="accordion-header " id="flush-heading-tp">
                    <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1 " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-tp" aria-expanded="false" aria-controls="flush-collapseOne-tp">
                      Travaux Pratiques (TP)
                    </button>
                  </h2>
                  <div id="flush-collapse-tp" class="accordion-collapse collapse" aria-labelledby="flush-heading-tp" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        
                        <a href='#' class="list-group-item list-group-item-action">
                          ....
                        </a>
                        
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header " id="flush-heading-examans">
                      <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-examans" aria-expanded="false" aria-controls="flush-collapseOne-examans">
                        Examens 
                      </button>
                    </h2>
                    <div id="flush-collapse-examans" class="accordion-collapse collapse" aria-labelledby="flush-heading-examans" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="list-group">
                          @
                          <a href='#' class="list-group-item list-group-item-action">
                            ... 
                          </a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header " id="flush-heading-testes">
                      <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-testes" aria-expanded="false" aria-controls="flush-collapseOne-testes">
                        Tests de Connaissance 
                      </button>
                    </h2>
                    <div id="flush-collapse-testes" class="accordion-collapse collapse" aria-labelledby="flush-heading-testes" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="list-group">
                          @
                          <a href='#' class="list-group-item list-group-item-action">
                            ... 
                          </a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
           
             
               
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
