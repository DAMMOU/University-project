<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter un nouvel utilisateur</h3>
                </div>

                <form role="form" wire:submit.prevent="addUser()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" placeholder="Nom"
                                    class="form-control @error('newUser.name') is-invalid @enderror" 
                                    wire:model="newUser.name">
                                    @error('newUser.name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input type="text" placeholder="Prenom"
                                        class="form-control @error('newUser.firstName') is-invalid @enderror" 
                                        wire:model="newUser.firstName">
                                        @error('newUser.firstName') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sexe</label>
                                    <select 
                                        class="form-control @error('newUser.sex') is-invalid @enderror" 
                                        wire:model="newUser.sex">
                                        @error('newUser.sex') <span class="text-danger">{{$message}}</span> @enderror
                                        <option value="">---</option>
                                        <option value="M">Homme</option>
                                        <option value="F">Femme</option>
                                    </select>
                                     @error('newUser.sex') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>    

                        

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="text" placeholder="Téléphone"
                                        class="form-control @error('newUser.phone') is-invalid @enderror" 
                                        wire:model="newUser.phone">
                                        @error('newUser.phone') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse e-mail</label>
                                    <input type="email" placeholder="Entrez email"
                                        class="form-control @error('newUser.email') is-invalid @enderror" 
                                        wire:model="newUser.email">
                                        @error('newUser.email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" placeholder="Password"
                                        class="form-control @error('newUser.password') is-invalid @enderror" 
                                        wire:model="newUser.password">
                                        @error('newUser.password') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label @error('photo') is-invalid @enderror">Default file input example</label>
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="formFile" wire:model="photo">
                                    @error('photo') <span class="text-danger">{{$message}}</span> @enderror
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @if ($photo)
                                        Photo Aperçu:
                                        <img src="{{ $photo->temporaryUrl() }}">
                                    @endif
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
    window.addEventListener('showAddUserSuccessMessage',event=>{
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