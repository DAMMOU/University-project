<div>
  @extends('layouts.accueil')
  @section('contenu')
  
      <div class="container-xxl ">
      <div wire:loading>
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
        <main class="order-1">
          <div class="row">
            <div class="col-md-2 pt-2 ps-lg-2">
             
            </div>

            <div class="col-md-8">
              <div class="pt-2 ps-lg-2">
                <div class="">
                  <h1 class="bd-title mb-1">
                    {{$this->etablissement->nom.' - '.$this->etablissement->ville->nom}}
                  </h1>
               </div> 
                <h3>
                  {{$this->etablissement->universite->nom}}
                </h3>
              </div>
              <p class="mt-1 lh-lg mb-3 fw-semibold">

               <span class ="text-danger fs-5 ">{{$this->etablissement->nom.', '.$this->etablissement->ville->nom}}</span> propose une variété 
                de programmes académiques, allant des formations, aux filières et 
                aux matières disponibles. Lafac.net vous offre une vue d'ensemble complète 
                de toutes les possibilités académiques pour vous permettre de choisir celle 
                qui convient le mieux à vos aspirations et à vos intérêts.
              </p>
              
              <div class="accordion accordion-flush " id="accordionFlushExample">
                @foreach ($this->formations as $formation )
                <div class="accordion-item "style="background-color: transparent;">
                  <h2 class="accordion-header" id="flush-headingformation{{$formation->id}}">
                    <button id="btn-accordion"class="accordion-button collapsed fs-5 fw-bolder mx-0 text-drak-emphasis bg-primary-subtle border border-primary-subtle rounded-3 m-1" 
                       style="background-color: #712cf9;background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);background-size: cover;"
                      type="button" data-bs-toggle="collapse" 
                      data-bs-target="#flush-collapse{{$formation->id}}" aria-expanded="false"
                       aria-controls="flush-collapseformation{{$formation->id}}">
                      {{$formation->intitule}}
                    </button>
                  </h2>
                  <div id="flush-collapse{{$formation->id}}" class="accordion-collapse collapse mx-0" aria-labelledby="flush-headingformation{{$formation->id}}" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body ">
                      <p class="fs-5 text-center text-decoration-underline ">Les filieres de la formation</p>
                      @foreach ( $formation->filieres as $filiere )
                          
                          <div class="accordion accordion-flush" id="filiere{{$filiere->id}}">
                            <div class="accordion-item"style="background-color: transparent;">
                              <h2 class="accordion-header " id="flush-headingfiliere{{$filiere->id}}">
                                <button id="btn-accordion" class="accordion-button collapsed  fs-5 p-3 text-drak bg-primary-subtle border border-primary-subtle rounded-3 " type="button" data-bs-toggle="collapse" 
                                  data-bs-target="#flush-collapsefiliere{{$filiere->id}}" aria-expanded="false" aria-controls="flush-collapseThree"
                                  style="background-color: #712cf9;background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);background-size: cover;">
                                  {{$filiere->intitule}}
                                </button>
                              </h2>
                              <div id="flush-collapsefiliere{{$filiere->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#filiere{{$filiere->id}}">
                                <div>
                                <div class="accordion-body">
                                @if($formation->categorie->initiale == "DEUST")
                                <div class="row">
                                  <div class="col-sm-6">
                                    <table class="table table-info table-bordered border-primary ">
                                      <thead>
                                        <tr>
                                          <th scope="col"class="text-center">Semestre 1</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S1')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-sm-6">
                                     <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col"class="text-center">Semestre 2</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S2')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col"class="text-center">Semestre 3</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S3')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-sm-6">
                                     <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col" class="text-center">Semestre 4</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S4')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                @endif
                                @if($formation->categorie->initiale == "LST")
                                <div class="row">
                                  <div class="col-sm-6">
                                    <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col"class="text-center">Semestre 5</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S5')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-sm-6">
                                     <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col" class="text-center">Semestre 6</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S6')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                @endif
                                @if($formation->categorie->initiale == "Master")
                                <div class="row">
                                  <div class="col-sm-6">
                                    <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col"class="text-center">Semestre 7</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S7')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-sm-6">
                                     <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col" class="text-center">Semestre 8</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S8')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col"class="text-center">Semestre 9</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S9')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-sm-6">
                                     <table class="table table-info table-bordered border-primary">
                                      <thead>
                                        <tr>
                                          <th scope="col" class="text-center">Semestre 10</th>                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($filiere->modules as $module)
                                          @if($module->section->intitule == 'S10')
                                            <tr>
                                              <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                            </tr>
                                          @endif
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                @endif
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>
                @endforeach
              </div>


            </div>



            <div class="col-md-2 pt-2 ps-lg-2">
           
            </div>
          </div> 
        </main>
      </div>
    

  
    
  @endsection

 
</div>
{{--
@if($formation->categorie_formation_id == 1)
                                  
                                  <table class="table table-striped table-hove">
                                    <tbody>
                                      <tr>
                                        <th style="text-align: center;" colspan="2"><span style="color: #0000ff;">{{$filiere->intitule}}</span></th>
                                      </tr>
                                      <tr>
                                        <td>SEMESTRE 1</td>
                                        <td>SEMESTRE 2</td>
                                      </tr>
                                      <tr>
                                     
                                        <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S1')
                                                  <tr>
                                                    <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                        </td>
                                      
                                        <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S2')
                                                  <tr>
                                                    <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>SEMESTRE 3</td>
                                        <td>SEMESTRE 4</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S3')
                                                  <tr>
                                                    <td><a href="{{url("module/$module->id")}}">{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                        </td>
                                        <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S4')
                                                  <tr>
                                                    <td><a href="{{url("module/$module->id")}}">{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                                  @elseif($formation->categorie_formation_id  == 2)
                                    <table class ="table table-striped table-hove">
                                      <tbody>
                                        <tr>
                                          <th style="text-align: center;" colspan="2"><span style="color: #0000ff;">{{$filiere->intitule}}</span></th>
                                        </tr>
                                        <tr>
                                          <td>SEMESTRE 5</td>
                                          <td>SEMESTRE 6</td>
                                        </tr>
                                        <tr>                                    
                                          <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S5')
                                                  <tr>
                                                    <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                          </td>

                                          <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S6')
                                                  <tr>
                                                    <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                            </table>
                                          </td>
                                        </tr>

                                      </tbody>
                                    </table>
                                  
                                  @elseif($formation->categorie->initiale == "Master")
                                    <table>
                                      <tbody>
                                        <tr>
                                          <th style="text-align: center;" colspan="2"><span style="color: #0000ff;">{{$filiere->intitule}}</span></th>
                                        </tr>
                                        <tr>
                                          <td>Master 1</td>
                                          <td>Master 2</td>
                                        </tr>
                                        <tr>                                    
                                          <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S5')
                                                  <tr>
                                                    <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                          </td>

                                          <td>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>Modules</th>
                                              </tr>
                                              @foreach ($filiere->modules as $module)
                                                @if($module->section->intitule == 'S6')
                                                  <tr>
                                                    <td><a href='{{url("module/$module->id")}}'>{{$module->intitule}}</a></td>                                             
                                                  </tr>
                                                @endif
                                              @endforeach
                                            </tbody>
                                            </table>
                                          </td>
                                        </tr>

                                      </tbody>
                                    </table>
                                  @endif
--}}

