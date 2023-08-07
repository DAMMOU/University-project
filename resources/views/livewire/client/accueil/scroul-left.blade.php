

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Universités, Faculté, Ecoles</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- <p> ....</p> -->
            <aside class="bd-sidebar">
        <ul class="list-unstyled mb-0 py-3 pt-md-1">
           @foreach ($universites as $universite)
           <li class="mb-1">
         
                <button class="btn btn-univ  d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#{{$universite->id}}-collapse" aria-expanded="false" aria-current="true">
                {{$universite->nom." - ".$universite->ville->nom}}
                </button>
            
                <div class="collapse" id="{{$universite->id}}-collapse">
                <ul class="list-unstyled fw-normal pb-1 small">
                    @foreach ($etablissements as $etablissement)
                        @if ($etablissement->universite_id == $universite->id)                   
                        <li>
                            <a href="{{url($universite->initiale.'/'.generateAcronym($etablissement->nom).'-'.urlencode(Str::slug($etablissement->ville->nom)).''.$etablissement->id.'/formations')}}"
                              class="d-inline-flex align-items-center rounded">
                              {{$etablissement->nom."-".$etablissement->ville->nom}}
                            </a>
                        </li>
                        @endif
                    @endforeach
                    <li class="my-3 mx-4 border-top"></li>
                </ul>
                </div>
            @endforeach
            </li>
          <li class="mb-1">
            <button class="btn btn-univ d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
              Customize
            </button>

            <div class="collapse" id="customize-collapse">
              <ul class="list-unstyled  pb-1 small">
                <li><a href="#" class="d-inline-flex align-items-center rounded">Overview</a></li>
                <li><a href="#" class="d-inline-flex align-items-center rounded">Sass</a></li>
                <li><a href="#" class="d-inline-flex align-items-center rounded">Optimize</a></li>
                <li class="my-3 mx-4 border-top"></li>
              </ul>
            </div>
          </li>
        
         
       
         
          
          
          
          <li class="mb-1">
            <button class="btn btn-univ d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="true">
              About
            </button>

            <div class="collapse" id="about-collapse">
              <ul class="list-unstyled fw-normal pb-1 small">
                <li><a href="/docs/5.0/about/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                <li><a href="/docs/5.0/about/team/" class="d-inline-flex align-items-center rounded">Team</a></li>
         

              </ul>
            </div>
          </li>
          <li class="my-3 mx-4 border-top"></li>
          <li>
            <a href="/docs/5.0/migration/" class="d-inline-flex align-items-center rounded">
              Migration
            </a>
          </li>
        </ul>
        </nav>

      </aside>
        </div>
    </div>