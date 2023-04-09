<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter une nouvelle établissement</h3>
                </div>

                <form role="form" wire:submit.prevent="updateLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom de l'établissement</label>
                                    <input type="text" placeholder="Nom"
                                        class="form-control @error('updateLine.nom') is-invalid @enderror" 
                                        wire:model="updateLine.nom">
                                        @error('updateLine.nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Université de l'établissement</label>
                                    <select 
                                        class="form-control @error('updateLine.universite_id') is-invalid @enderror" 
                                        wire:model="updateLine.universite_id">
                                        <option value="">---</option>
                                        @foreach ($universites as $universite)
                                            <option value="{{$universite->id}}">{{$universite->nom}}</option>
                                        @endforeach
                                    </select>
                                    @error('updateLine.universite_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Ex: FSTE"
                                    class="form-control @error('updateLine.initiale') is-invalid @enderror" 
                                    wire:model="updateLine.initiale">
                                    @error('updateLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control @error('updateLine.type_etablissement_id') is-invalid @enderror" 
                                        wire:model="updateLine.type_etablissement_id">  
                                        <option value="">---</option>
                                        @foreach ($types as $type)
                                            <option value="{{$type->id}}">{{$type->label}}</option>
                                        @endforeach   
                                    </select>
                                    @error('updateLine.type_etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Categorie</label>
                                    <select class="form-control @error('updateLine.categorie_etablissement_id') is-invalid @enderror" 
                                        wire:model="updateLine.categorie_etablissement_id">  
                                        <option value="">---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->label}}</option>
                                        @endforeach   
                                    </select>
                                    @error('updateLine.categorie_etablissement_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <select class="form-control @error('updateLine.ville_id') is-invalid @enderror" 
                                        wire:model="updateLine.ville_id">  
                                        <option value="">---</option>
                                        @foreach ($villes as $ville)
                                            <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                        @endforeach   
                                    </select>
                                    @error('updateLine.ville_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="text" placeholder="Https://"
                                        class="form-control @error('updateLine.logo') is-invalid @enderror" 
                                        wire:model="updateLine.logo">
                                        @error('updateLine.logo') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Site</label>
                                    <input type="text" placeholder="Https://"
                                        class="form-control @error('updateLine.site') is-invalid @enderror" 
                                        wire:model="updateLine.site">
                                        @error('updateLine.site') <span class="text-danger">{{$message}}</span> @enderror
                                   
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" placeholder="Adresse"
                                        class="form-control @error('updateLine.adresse') is-invalid @enderror" 
                                        wire:model="updateLine.adresse">
                                        @error('updateLine.adresse') <span class="text-danger">{{$message}}</span> @enderror
                                   
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea  rows="3" placeholder="Enter ..." style="height: 80px;"
                                        class="form-control  @error('updateLine.desc') is-invalid @enderror"
                                        wire:model="updateLine.desc"></textarea>
                                         @error('updateLine.desc') <span class="text-danger">{{$message}}</span> @enderror
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
    window.addEventListener('showSuccessMessage',event=>{
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