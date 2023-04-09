 <div>
    <div class="row p-4 pt-5">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'editer une université</h3>
                </div>

                <form role="form" wire:submit.prevent="updateLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>Initiale</label>
                                    <input type="text" placeholder="Initiale"
                                    class="form-control @error('updateLine.initiale') is-invalid @enderror" 
                                    wire:model="updateLine.initiale">
                                    @error('updateLine.initiale') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" placeholder="nom"
                                        class="form-control @error('updateLine.nom') is-invalid @enderror" 
                                        wire:model="updateLine.nom">
                                        @error('updateLine.nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" placeholder="Adresse"
                                        class="form-control @error('updateLine.adresse') is-invalid @enderror" 
                                        wire:model="updateLine.adresse">
                                        @error('updateLine.adresse') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                
                                    <label>Ville</label>
                                    <select 
                                        class="form-control @error('updateLine.ville_id') is-invalid @enderror" 
                                        wire:model="updateLine.ville_id">

                                        <option value="">---</option>
                                        @foreach ($villes as $ville)
                                             <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                        @endforeach


                                    </select>
                                     @error('updateLine.ville_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="text" placeholder="Https://"
                                        class="form-control @error('updateLine.logo') is-invalid @enderror" 
                                        wire:model="updateLine.logo">
                                        @error('updateLine.logo') <span class="text-danger">{{$message}}</span> @enderror
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
<div>
<script>
    window.addEventListener('showUpdateSuccessMessage',event=>{
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: event.detail.message || 'Université mis à jour avec succès!',
        showConfirmButton: false,
        timer: 1000
    })
})
</script>
   