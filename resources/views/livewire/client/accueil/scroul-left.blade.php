@php
  use Illuminate\Support\Str;
  $isArabicLocale = App::getLocale() == 'ar' ? true : false;
@endphp
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header @if($isArabicLocale) losue @endif">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">{{__('Universities, Faculties, Schools')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
            <!-- <p> ....</p> -->
        <aside class="bd-sidebar">
          <ul class="list-unstyled mb-0 py-3 pt-md-1 ">
            @foreach ($universites as $universite)
              <li class="mb-1">
                @php
                   $univTranslationKey = $universite->initiale;
                   $etablissements = $universite->etablissements
                @endphp
                <a class="btn btn-univ d-inline-fle align-items-cente rounded @if($isArabicLocale) losue @endif" data-bs-toggle="collapse" data-bs-target="#{{$universite->id}}-collapse" aria-expanded="false" aria-current="true">
                   {{ __($univTranslationKey) }}
                </a>
            
                <div class="collapse" id="{{$universite->id}}-collapse">
                  <ul class="list-unstyled fw-normal pb-1 small">
                      @foreach ($etablissements as $etablissement)  
                       @php
                           $etablishmentTransKey  = generateAcronym($etablissement->nom);
                        @endphp
                               
                        <li>
                            <a href="{{url($universite->initiale.'/'.generateAcronym($etablissement->nom).'-'.urlencode(Str::slug($etablissement->ville->nom)).''.$etablissement->id.'/formations')}}"
                              class="d-inline-fle  align-items-center rounded @if($isArabicLocale) losue @endif">
                              {{ __($etablishmentTransKey) }} 
                            </a>
                        </li>
                      @endforeach
                      <li class="my-3 mx-4 border-top"></li>
                  </ul>
                </div>
           
            </li>
 @endforeach
            <li class="my-3 mx-4 border-top"></li>
            <li>
              <a href="#" class="align-items-center rounded @if($isArabicLocale) losue @endif">
                {{__('Migration')}}
              </a>
            </li>
          </ul>
        </nav>

      </aside>
    </div>
  </div>