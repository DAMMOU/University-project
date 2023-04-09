<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'éditer la formation: {{$updateLine['intitule']}}</h3>
                </div>

                <form role="form" wire:submit.prevent="updateLine">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Université</label>
                                    <select class="form-control  @error('updateLine.universite_id') is-invalid @enderror"  
                                    wire:model="universite" wire:model="updateLine.universite_id">
                                        <option value="{{$updateLine['universite_id']}}">{{$this->universiteDeFormation}}</option>
                                            @foreach ($universites as $uni)
                                            <option   value="{{$uni->id}}">{{$uni->nom}}-{{$uni->ville->nom}}</option>
                                            @endforeach
                                    </select>    
                                     @error('updateLine.universite_id') <span class="text-danger">{{$message}}</span> @enderror                                                              
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Etablissement</label>
                                    <select 
                                        class="form-control @error('updateLine.etablissement_id') is-invalid @enderror" 
                                        wire:model="updateLine.etablissement_id"
                                         @if(empty($this->etablissements) || empty($this->universite)) disabled @endif >
                                        <option value="{{$updateLine['etablissement_id']}}">{{$this->etablissementDeFormation}}</option>
                                        @foreach ($etablissements as $etablissement)
                                            <option value="{{$etablissement->id}}">{{$etablissement->nom}}-{{$etablissement->ville->nom}}</option>
                                        @endforeach
                                    </select>
                                    @error('updateLine.etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Intitulé de formation</label>
                                    <input type="text" placeholder="Ex: Licence en Sciences et Techniques"
                                        class="form-control @error('updateLine.intitule') is-invalid @enderror" 
                                        wire:model="updateLine.intitule">
                                    @error('updateLine.intitule') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Ex: LST"
                                    class="form-control @error('updateLine.initiale') is-invalid @enderror" 
                                    wire:model="updateLine.initiale">
                                    @error('updateLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select 
                                        class="form-control @error('updateLine.type_formation_id') is-invalid @enderror" 
                                        wire:model="updateLine.type_formation_id">
                                        <option value="">---</option>

                                        @foreach ($typeFormations as $typeFormation)
                                            <option value="{{$typeFormation->id}}">{{$typeFormation->initiale}}</option>
                                        @endforeach
                                            
                                    </select>
                                    @error('updateLine.type_formation_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Catégorie</label>
                                    <select 
                                        class="form-control @error('updateLine.categorie_formation_id') is-invalid @enderror" 
                                        wire:model="updateLine.categorie_formation_id">
                                        <option value="">---</option>

                                        @foreach ($categorieFormations as $categorieFormation)
                                            <option value="{{$categorieFormation->id}}">{{$categorieFormation->initiale}}</option>
                                        @endforeach
                                            
                                    </select>
                                    @error('updateLine.categorie_formation_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Niveau</label>
                                    <select 
                                        class="form-control @error('updateLine.niveau') is-invalid @enderror" 
                                        wire:model="updateLine.niveau">
                                        <option value="1">Bac +1</option>      
                                        <option value="2">Bac +2</option>      
                                        <option value="3">Bac +3</option>      
                                        <option value="4">Bac +4</option>      
                                        <option value="5">Bac +5</option>        
                                    </select>
                                    @error('updateLine.niveau') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Etat</label>
                                    <select 
                                        class="form-control @error('updateLine.etat') is-invalid @enderror" 
                                        wire:model="updateLine.etat">
                                        <option value="1">Ouverte</option>      
                                        <option value="0">Férme</option>            
                                        <option value="2">Autre</option>            
                                    </select>
                                    @error('updateLine.etat') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Dureé de formations</label>
                                    <input type="number" placeholder="Ex: 2"
                                    class="form-control @error('updateLine.duree') is-invalid @enderror" 
                                    wire:model="updateLine.duree">
                                    @error('updateLine.duree') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea  rows="3" placeholder="Enter ..." style="height: 80px;"
                                        class="form-control  @error('updateLine.desc') is-invalid @enderror"
                                        wire:model="updateLine.desc"></textarea>
                                        @error('updateLine.desc') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div> 
                        </div> 
                        
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Appliquer</button>
                        <button type="button" wire:click="goTolist" class="btn btn-danger">Annuler</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('showsuccessMessage',event=>{
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: event.detail.message,
                showConfirmButton: false,
                timer: 1000
            })
        })
    </script>
</div>
