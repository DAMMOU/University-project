<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter une nouvelle établissement</h3>
                </div>

                <form role="form" wire:submit.prevent="addLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom de l'établissement</label>
                                    <input type="text" placeholder="Nom"
                                        class="form-control @error('newLine.nom') is-invalid @enderror" 
                                        wire:model="newLine.nom">
                                        @error('newLine.nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Université de l'établissement</label>
                                    <select 
                                        class="form-control @error('newLine.universite_id') is-invalid @enderror" 
                                        wire:model="newLine.universite_id">
                                        <option value="">---</option>
                                        @foreach ($universites as $universite)
                                            <option value="{{$universite->id}}">{{$universite->nom}}</option>
                                        @endforeach
                                    </select>
                                    @error('newLine.universite_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Ex: FSTE"
                                    class="form-control @error('newLine.initiale') is-invalid @enderror" 
                                    wire:model="newLine.initiale">
                                    @error('newLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control @error('newLine.type_etablissement_id') is-invalid @enderror" 
                                        wire:model="newLine.type_etablissement_id">  
                                        <option value="">---</option>
                                        @foreach ($types as $type)
                                            <option value="{{$type->id}}">{{$type->label}}</option>
                                        @endforeach   
                                    </select>
                                    @error('newLine.type_etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Categorie</label>
                                    <select class="form-control @error('newLine.categorie_etablissement_id') is-invalid @enderror" 
                                        wire:model="newLine.categorie_etablissement_id">  
                                        <option value="">---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->label}}</option>
                                        @endforeach   
                                    </select>
                                    @error('newLine.categorie_etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <select class="form-control @error('newLine.ville_id') is-invalid @enderror" 
                                        wire:model="newLine.ville_id">  
                                        <option value="">---</option>
                                        @foreach ($villes as $ville)
                                            <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                        @endforeach   
                                    </select>
                                    @error('newLine.ville_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="text" placeholder="Https://"
                                        class="form-control @error('newLine.logo') is-invalid @enderror" 
                                        wire:model="newLine.logo">
                                        @error('newLine.logo') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Site</label>
                                    <input type="text" placeholder="Https://"
                                        class="form-control @error('newLine.site') is-invalid @enderror" 
                                        wire:model="newLine.site">
                                        @error('newLine.site') <span class="text-danger">{{$message}}</span> @enderror
                                   
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" placeholder="Adresse"
                                        class="form-control @error('newLine.adresse') is-invalid @enderror" 
                                        wire:model="newLine.adresse">
                                        @error('newLine.adresse') <span class="text-danger">{{$message}}</span> @enderror
                                   
                                </div>
                            </div>
                            <div class="col-md-6">

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
                timer: 800
            })
        })
    </script>
</div>