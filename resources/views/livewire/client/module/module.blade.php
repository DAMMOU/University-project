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
                <p class="card-text mt-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
            <div class="container">

              <div class="accordion accordion-flush" id="accordionFlushExample">
                
                <div class="accordion-item">
                  <h2 class="accordion-header " id="flush-heading">
                    <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1 " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseOne">
                      Cours
                    </button>
                  </h2>
                  <div id="flush-collapse" class="accordion-collapse collapse" aria-labelledby="flush-heading" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                       
                        <a href='#' class="list-group-item list-group-item-action">
                          TD
                        </a>
                    
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header " id="flush-heading-td">
                      <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-td" aria-expanded="false" aria-controls="flush-collapseOne-td">
                        TD 
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
                      TP
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
                        Examans 
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
                        Testes 
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
