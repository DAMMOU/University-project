<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter une role</h3>
                </div>

                <form role="form" wire:submit.prevent="addLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Université</label>
                                    <select class="form-control  @error('updateLine.universite_id') is-invalid @enderror"  
                                    wire:model.lazy="universite"  wire:model="updateLine.universite_id">
                                        <option   value="" selected  >-----------</option>
                                            @foreach ($universites as $item)
                                            <option   value="{{$item->id}}">{{$item->nom}} - {{$item->ville->nom}}</option>
                                            @endforeach
                                    </select>  
                                     @error('updateLine.universite_id') <span class="text-danger">{{$message}}</span> @enderror                                
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Etablissement</label>
                                    <select class="form-control @error('updateLine.etablissement_id') is-invalid @enderror" 
                                       @if(empty($this->etablissements) || empty($this->universite))disabled @endif  
                                          wire:model.lazy="etablissementSelectionner"wire:model="updateLine.etablissement_id">
                                        <option  value="{{$this->updateLine['etablissement_id']}}" >{{$this->etablissementDeFiliere->intitule}}</option>
                                        @foreach ($etablissements as $etablissement)
                                            <option value="{{$etablissement->id}}">{{$etablissement->nom}}-{{$etablissement->ville->nom}}</option>
                                        @endforeach
                                    </select>
                                    @error('updateLine.etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Formation</label>
                                    <select 
                                        class="form-control @error('updateLine.formation_id') is-invalid @enderror" 
                                        wire:model="updateLine.formation_id">
                                        <option value="">---</option>
                                        @foreach ($formations as $formation)
                                            <option value="{{$formation->id}}">{{$formation->intitule}}</option>
                                        @endforeach
                                    </select>
                                    @error('updateLine.formation_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Intitulé de filiére</label>
                                    <input type="text" placeholder="Ex: Licence en Sciences et Techniques"
                                    class="form-control @error('updateLine.intitule') is-invalid @enderror" 
                                    wire:model="updateLine.intitule">
                                    @error('updateLine.intitule') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Ex: MIP"
                                    class="form-control @error('updateLine.initiale') is-invalid @enderror" 
                                    wire:model="updateLine.initiale">
                                    @error('updateLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                    <label>Option</label>
                                    <input type="text" placeholder="Ex: 2"
                                    class="form-control @error('updateLine.option') is-invalid @enderror" 
                                    wire:model="updateLine.option">
                                    @error('updateLine.option') <span class="text-danger">{{$message}}</span> @enderror
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