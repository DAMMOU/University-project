<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'éditer le module: {{$updateLine['intitule']}}</h3>
                </div>

                <form role="form" wire:submit.prevent="updateLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Intitulé du module</label>
                                    <input type="text" placeholder="Ex: Licence en Sciences et Techniques"
                                    class="form-control @error('updateLine.intitule') is-invalid @enderror" 
                                    wire:model="updateLine.intitule">
                                    @error('updateLine.intitule') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" placeholder="M111"
                                    class="form-control @error('updateLine.code') is-invalid @enderror" 
                                    wire:model="updateLine.code">
                                    @error('updateLine.code') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Filieres</label>
                                    <select 
                                        class="form-control @error('updateLine.filiere_id') is-invalid @enderror" 
                                        wire:model="updateLine.filiere_id">
                                        <option value="">---</option>
                                        @foreach ($filieres as $filiere)
                                            <option value="{{$filiere->id}}">{{$filiere->intitule}}</option>
                                        @endforeach
                                    </select>
                                    @error('updateLine.filiere_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                               
                            </div>
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
