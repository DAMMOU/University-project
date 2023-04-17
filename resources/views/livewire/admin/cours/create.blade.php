<div>
    <div class="row p-4 pt-6 ">
        <div class="col-12">
            <div class="card card-primary "style="margin: 0 auto;">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-plus fa-1x mr-2"></i> Formulaire d'ajouter un cours</h3>
                </div>

                <form role="form" wire:submit.prevent="addLine()">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Intitulé du cours</label>
                                    <input type="text" placeholder="Ex: Analyse"
                                    class="form-control @error('newLine.label') is-invalid @enderror" 
                                    wire:model="newLine.label">
                                    @error('newLine.label') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Chemin</label>
                                    <input type="text" placeholder="Ex: /umi/mon_fichier.pdf"
                                    class="form-control @error('newLine.path') is-invalid @enderror" 
                                    wire:model="newLine.path">
                                    @error('newLine.path') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Domaine</label>
                                    <input type="text" placeholder="Ex: Analyse matricielle"
                                    class="form-control @error('newLine.domain') is-invalid @enderror" 
                                    wire:model="newLine.domain">
                                    @error('newLine.domain') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formFile" class="form-label @error('file') is-invalid @enderror">Default file input example</label>
                                    <input class="form-control @error('file') is-invalid @enderror" type="file" id="formFile" wire:model="file">
                                    @error('file') <span class="text-danger">{{$message}}</span> @enderror
                                </div>    
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    @if ($file)
                                        fule pdf Aperçu:
                                        <img src="{{ $file->temporaryUrl() }}" width=400 height=300>
                                         
                                    @endif
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