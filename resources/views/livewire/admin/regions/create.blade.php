<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Fourmulaire pour ajouter une Region</h3>
                </div>

                <form role="form" wire:submit.prevent="addLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" placeholder="Nom de region"
                                        class="form-control @error('newLine.nom') is-invalid @enderror" 
                                        wire:model="newLine.nom">
                                        @error('newLine.nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea  rows="3" placeholder="Description ..." style="height: 80px;"
                                        class="form-control  @error('newLine.desc') is-invalid @enderror"
                                        wire:model="newLine.desc"></textarea>
                                         @error('newLine.desc') <span class="text-danger">{{$message}}</span> @enderror
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
                timer: 800
            })
        })
    </script>
</div>