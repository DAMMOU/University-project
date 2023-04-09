<div>
  @extends('layouts.accueil')
  @section('contenu')
    <div class="container-xxl ">
      <main class="order-1">
        <div class="row ">
          <div class="col-md-2">
          </div>
  
          <div class="col-md-8 ">
            <div class="pt-2 ps-lg-2">
              <div class="">
                <h1 class="bd-title mb-1">
                  Les exemples
                </h1>
             </div> 
              <h3>
                
              </h3>
              <h5>
              
              </h5>
              <p class="card-text mt-4">
                Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
              <div class="container">

              <div class="accordion accordion-flush" id="accordionFlushExample">
                
                <div class="accordion-item">
                  <h2 class="accordion-header " id="flush-heading">
                    <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1 " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseOne">
                      Cv exemples
                    </button>
                  </h2>
                  <div id="flush-collapse" class="accordion-collapse collapse" aria-labelledby="flush-heading" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        @foreach ($cvs as $cv)
                        <a href='{{url("exemples/cv/$cv->id")}}' class="list-group-item list-group-item-action">
                          ...
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header " id="flush-heading-lettre">
                    <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1 " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-lettre" aria-expanded="false" aria-controls="flush-collapseOne-lettre">
                      Lettres de motivations exemples
                    </button>
                  </h2>
                  <div id="flush-collapse-lettre" class="accordion-collapse collapse" aria-labelledby="flush-heading-lettre" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        @foreach ($cvs as $cv)
                        <a href='#' class="list-group-item list-group-item-action">
                          ....
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                  <h2 class="accordion-header " id="flush-heading-transfer">
                    <button class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-transfer" aria-expanded="false" aria-controls="flush-collapseOne-transfer">
                      Demande de transfert 
                    </button>
                  </h2>
                  <div id="flush-collapse-transfer" class="accordion-collapse collapse" aria-labelledby="flush-heading-transfer" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        @foreach ($cvs as $cv)
                        <a href='#' class="list-group-item list-group-item-action">
                          ... 
                        </a>
                        @endforeach
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
