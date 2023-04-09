<div>
    <div class="row p-4 pt-6">
        <div class="col">
            <div class="card">
                <div class="card-header bg-gradient-primary ">
                    <h3 class="card-title d-flex align-items-center">
                    <i class="fas fa-users fa-2x mr-2"></i>
                        Liste des utilisateurs
                    </h3>
                    <div class="card-tools d-flex align-items-center ">
                        <button class="btn btn-link text-white mr-4 d-block" wire:click ="goToAdd">
                            <i class="fas fa-user-plus"></i>
                            Nouvelle utilisateurs
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
                                <th class="text-center" style="width:5%;">Sexe</th>
                                <th class="text-center" style="width:15%;">Utilisateurs</th>
                                <th class="text-center" style="width:15%;">Téléphone</th>
                                <th class="text-center" style="width:15%;">Roles</th>
                                <th class="text-center" style="width:15%;">E-mail</th>
                                <th class="text-center" style="width:15%;">Ajouté</th>
                                <th class="text-center" style="width:20%;">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user )
                                <tr>
                                    <td class="text-center">
                                        @if ($user->sex == 'F') 
                                            <img src="{{asset('img/woman.png')}}" width="24" />
                                        @elseif ($user->sex == 'M') 
                                            <img src="{{asset('img/man.png')}}" width="24"/>
                                        @endif
                                    </td>
                                    <td class="text-center">{{$user->name}} {{$user->firstName}}</td>
                                    <td class="text-center">{{$user->phone}}</td>
                                    <td class="text-center">{{$user->roles->implode('name',' | ')}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">
                                        <span class="tag tag-warning">{{$user->created_at}}</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-link" wire:click="goToEdit({{$user->id}})"><i class="far fa-edit"></i> </button>
                                        <button class="btn btn-link" wire:click="confirmDelete('{{$user->name}} {{$user->firstName}}',{{$user->id}})"><i class="far fa-trash-alt"></i> </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <div class="float-right">
                    {{$users->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('showConfirmDeleteMessage',event=>{
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
                @this.deleteUser(event.detail.message.data.user_id)   
            }
        })
        window.addEventListener('showDeteleUserSuccessMessage',event=>{
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: event.detail.message || 'tilisateur suprimer avec succès!',
                showConfirmButton: false,
                timer: 3000
            })
        })
    })
</script>