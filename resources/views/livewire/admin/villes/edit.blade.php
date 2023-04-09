<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'éditer la ville {{$updateLine['nom']}}</h3>
                </div>

                <form role="form" wire:submit.prevent="updateLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" placeholder="Nom ville"
                                    class="form-control @error('updateLine.nom') is-invalid @enderror" 
                                    wire:model="updateLine.nom">
                                    @error('updateLine.nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Code Postal</label>
                                    <input type="text" placeholder="Nom ville"
                                    class="form-control @error('updateLine.cp') is-invalid @enderror" 
                                    wire:model="updateLine.cp">
                                    @error('updateLine.cp') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Region</label>
                                    <select class="form-control @error('updateLine.region_id') is-invalid @enderror" 
                                        wire:model="updateLine.region_id">  
                                        <option value="">---</option>
                                        @foreach ($regions as $region)
                                            <option value="{{$region->id}}">{{$region->nom}}</option>
                                        @endforeach   
                                    </select>
                                    @error('updateLine.region_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea  rows="3" placeholder="Description ..." style="height: 80px;"
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