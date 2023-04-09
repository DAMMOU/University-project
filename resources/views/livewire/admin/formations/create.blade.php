<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter une formation</h3>
                </div>
                <form role="form" wire:submit.prevent="addLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Université</label>
                                    <select class="form-control  @error('newLine.universite_id') is-invalid @enderror"  
                                    wire:model.lazy="universite"  wire:model="newLine.universite_id">
                                        <option   value="" selected  >-----------</option>
                                            @foreach ($universites as $item)
                                            <option   value="{{$item->id}}">{{$item->nom}}-{{$item->ville->nom}}</option>
                                            @endforeach
                                    </select>  
                                     @error('newLine.universite_id') <span class="text-danger">{{$message}}</span> @enderror                                
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Etablissement</label>
                                    <select class="form-control @error('newLine.etablissement_id') is-invalid @enderror" 
                                       @if(empty($this->etablissements) || empty($this->universite)) {{$this->newLine['etablissement_id'] =""}} disabled @endif  
                                         wire:model="newLine.etablissement_id">
                                        <option  value=""selected >-----------</option>
                                        @foreach ($etablissements as $etablissement)
                                            <option value="{{$etablissement->id}}">{{$etablissement->nom}}-{{$etablissement->ville->nom}}</option>
                                        @endforeach
                                    </select>
                                    @error('newLine.etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Intitulé de formation</label>
                                    <input type="text" placeholder="Ex: Licence en Sciences et Techniques"
                                    class="form-control @error('newLine.intitule') is-invalid @enderror"
                                      wire:model="newLine.intitule"
                                     @if(empty($this->newLine['etablissement_id'])) disabled @endif>
                                    @error('newLine.intitule') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Ex: LST"
                                    class="form-control @error('newLine.initiale') is-invalid @enderror" 
                                    wire:model="newLine.initiale">
                                    @error('newLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select 
                                        class="form-control @error('newLine.type_formation_id') is-invalid @enderror" 
                                        wire:model="newLine.type_formation_id">
                                        <option value="">---</option>

                                        @foreach ($typeFormations as $typeFormation)
                                            <option value="{{$typeFormation->id}}">{{$typeFormation->initiale}}</option>
                                        @endforeach
                                            
                                    </select>
                                    @error('newLine.type_formation_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Catégorie</label>
                                    <select 
                                        class="form-control @error('newLine.categorie_formation_id') is-invalid @enderror" 
                                        wire:model="newLine.categorie_formation_id">
                                        <option value="">---</option>

                                        @foreach ($categorieFormations as $categorieFormation)
                                            <option value="{{$categorieFormation->id}}">{{$categorieFormation->initiale}}</option>
                                        @endforeach
                                            
                                    </select>
                                    @error('newLine.categorie_formation_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Niveau</label>
                                    <select 
                                        class="form-control @error('newLine.niveau') is-invalid @enderror" 
                                        wire:model="newLine.niveau">
                                        <option value="1">Bac +1</option>      
                                        <option value="2">Bac +2</option>      
                                        <option value="3">Bac +3</option>      
                                        <option value="4">Bac +4</option>      
                                        <option value="5">Bac +5</option>        
                                    </select>
                                    @error('newLine.niveau') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Etat</label>
                                    <select 
                                        class="form-control @error('newLine.etat') is-invalid @enderror" 
                                        wire:model="newLine.etat">
                                        <option value="1">Ouverte</option>      
                                        <option value="0">Férme</option>            
                                        <option value="2">Autre</option>            
                                    </select>
                                    @error('newLine.etat') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Dureé de formations</label>
                                    <input type="number" placeholder="Ex: 2"
                                    class="form-control @error('newLine.duree') is-invalid @enderror" 
                                    wire:model="newLine.duree">
                                    @error('newLine.duree') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea  rows="3" placeholder="Enter ..." style="height: 80px;"
                                        class="form-control  @error('newLine.desc') is-invalid @enderror"
                                        wire:model="newLine.desc"></textarea>
                                         @error('newLine.desc') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div> 
                        </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
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