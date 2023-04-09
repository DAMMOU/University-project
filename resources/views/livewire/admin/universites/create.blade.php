<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter un nouvel utilisateur</h3>
                </div>

                <form role="form" wire:submit.prevent="addLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Initiale"
                                    class="form-control @error('newLine.initiale') is-invalid @enderror" 
                                    wire:model="newLine.initiale">
                                    @error('newLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" placeholder="nom"
                                        class="form-control @error('newLine.nom') is-invalid @enderror" 
                                        wire:model="newLine.nom">
                                        @error('newLine.nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" placeholder="Adresse"
                                        class="form-control @error('newLine.adresse') is-invalid @enderror" 
                                        wire:model="newLine.adresse">
                                        @error('newLine.adresse') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                
                                    <label>Ville</label>
                                    <select 
                                        class="form-control @error('newLine.ville_id') is-invalid @enderror" 
                                        wire:model="newLine.ville_id">

                                        <option value="">---</option>
                                        @foreach ($villes as $ville)
                                             <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                        @endforeach


                                    </select>
                                     @error('newLine.ville_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="text" placeholder="Https://"
                                        class="form-control @error('newLine.logo') is-invalid @enderror" 
                                        wire:model="newLine.logo">
                                        @error('newLine.logo') <span class="text-danger">{{$message}}</span> @enderror
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
    window.addEventListener('showAddSuccessMessage',event=>{
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: event.detail.message,
            showConfirmButton: false,
            timer: 3000
        })
    })
</script>
</div>