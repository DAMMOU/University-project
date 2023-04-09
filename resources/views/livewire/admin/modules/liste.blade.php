<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="card-title">Liste des filiéres</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="card-tools d-flex align-items-center ">
                                
                                <div class="input-group input-group-sm" style="width: 50%;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-link text-black mr-4 d-block" wire:click ="goToAdd">
                                    <i class="fas fa-user-plus"></i>  
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Initiale</th>
                                <th class="text-cente">Intituté du module</th>
                                <th class="" >Filiere</th>
                                
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $module )
                                <tr>
                                    <td class="text-center">{{$module->id}} </td>
                                    <td class="text-center">{{$module->code}}</td>
                                    <td class="text-cente">{{$module->intitule}}</td>
                                    <td class="">{{$module->filiere->intitule}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-link"
                                            wire:click="goToUpdate({{$module->id}})">
                                            <i class="far fa-edit"></i> 
                                        </button>
                                        <button class="btn btn-link" 
                                            wire:click="confirmDelete('{{$module->intitule}}',{{$module->id}})">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        {{$modules->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<script>
    window.addEventListener('showDeleteMessageCONFIRM',event=>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, je continue!',
            cancelButtonText: 'Non, annuler!',
            }).then((result) => {
            if (result.isConfirmed) {
                @this.deleteLine(event.detail.message.data.id)   
            }
        })
        window.addEventListener('showsuccessMessageDELETE',event=>{
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: event.detail.message || 'Modules suprimé avec succès!',
                showConfirmButton: false,
                timer: 1000
            })
        })
    })
</script>