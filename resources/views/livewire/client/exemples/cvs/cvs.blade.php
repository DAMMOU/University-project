<div>
  @extends('layouts.accueil')
  @section('contenu')
  
      <div class="container-xxl ">
        <main class="order-1">
          <div class="row">
            <div class="col-md-2 pt-2 ps-lg-2">
             
            </div>

            <div class="col-md-8">
              <div class="pt-2 ps-lg-2">
                <div class="">
                  <h1 class="bd-title mb-1">
                    Exemple cv
                  </h1>
               </div> 
                <h3>
                 Cv
                </h3>
              </div>
              <p class="mt-1 lh-lg mb-3 fw-semibold">

               <span class ="text-danger fs-5 ">............</span> .
              </p>
              
              


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

