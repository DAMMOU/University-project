<div>
    <div class="row p-4 pt-6">
        <div class="col">
            <div class="card">
                <div class="card-header bg-gradient-primary ">
                    <h3 class="card-title d-flex align-items-center">
                    <i class="fas fa-users fa-2x mr-2"></i>
                       {{ $title}}
                    </h3>
                    <div class="card-tools d-flex align-items-center ">
                        <button class="btn btn-link text-white mr-4 d-block" wire:click ="goToAdd">
                            <i class="fas fa-user-plus"></i>
                            Ajouter 
                        </button>

                        <div class="input-group input-group-md" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">label</th>
                                <th class="text-center" >Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $categorie )
                                <tr>
                                    <td class="text-center">{{$categorie->id}} </td>
                                    <td class="text-center">{{$categorie->label}} </td>
                                    <td class="">{{$categorie->desc}}</td>
                                
                                    <td class="text-center">
                                        <button class="btn btn-link" wire:click="goToUpdate({{$categorie->id}})"><i class="far fa-edit"></i> </button>
                                        <button class="btn btn-link" wire:click="confirmDelete('{{$categorie->label}}',{{$categorie->id}})"><i class="far fa-trash-alt"></i> </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <div class="float-right">

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
                title: event.detail.message || 'Opération effectuée  avec succès!',
                showConfirmButton: false,
                timer: 1000
            })
        })
    })
</script>
</div>