<div>
    <div class="row p-4 pt-5">
        <div class="col-md-8">
            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter un nouvel utilisateur</h3>
                </div>

                <form role="form" wire:submit.prevent='updateUser()'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control @error('editUser.name')is-invalid @enderror"  
                                    placeholder="Nom" wire:model='editUser.name'>
                                    @error('editUser.name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input type="text" class="form-control @error('editUser.prenom')is-invalid @enderror"  
                                    placeholder="Prenom" wire:model='editUser.firstName'>
                                    @error('editUser.prenom')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Sexe</label>
                            <select class="form-control @error('editUser.sex')is-invalid @enderror" 
                            wire:model='editUser.sex'>
                                <option value="">---</option>
                                <option value="M">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                            @error('editUser.sex')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Adresse e-mail</label>
                            <input type="email" class="form-control @error('editUser.email')is-invalid @enderror"  
                            placeholder="Enter email " 
                            wire:model='editUser.email'>
                            @error('editUser.email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Téléphone 1 </label>
                                    <input type="text" class="form-control @error('editUser.phone') is-invalid @enderror"  
                                    placeholder="Téléphone " wire:model='editUser.phone'>
                                    @error('editUser.phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Téléphone 2 </label>
                                    <input type="text" class="form-control"  
                                    placeholder="Téléphone 2"> 
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" placeholder="Password"
                                class="form-control @error('editUder.password') is-invalid @enderror"
                                wire:model="editUser.password">
                                @error("editUser.password")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Appliquer les modifications</button>
                        <button type="button" wire:click="goTolist" class="btn btn-danger float-right" >Retourner à la liste</button>
                    </div> 
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title flex-grow-1"><i class="fas fa-fingerprint fa-2x"></i> Roles & permissions</h3>
                    <button class="btn bg-gradient-success" wire:click="updateRolesAndPermissions"><i class="fas fa-check"></i> Appliquer les modifications</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="accordion"> 
                        @foreach ($this->rolesPermissions['roles'] as $role )
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title flex-grow-1">
                                <a  data-parent="#accordion" href="#"  aria-expanded="true">
                                    {{$role['role_name']}}
                                </a>
                                </h4>
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch{{$role['role_id']}}"
                                        wire:model.lazy="rolesPermissions.roles.{{$loop->index}}.active"
                                        @if($role["active"]) checked @endif>
                                    <label class="custom-control-label" for="customSwitch{{$role['role_id']}}">
                                        {{ $role["active"]? "Activé" : "Desactivé" }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endforeach  
                    </div>
                    
                </div>
                 
                <div class="p-3">
                    <table class="table table-bordered">
                        <thead>
                            <th>Permissions</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($rolesPermissions["permissions"] as $permission)
                            <tr>
                                <td>{{ $permission["permission_label"] }}</td>
                                <td>
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input"
                                            @if($permission["active"]) checked @endif
                                            wire:model.lazy="rolesPermissions.permissions.{{$loop->index}}.active"
                                            id="customSwitchPermission{{$permission['permission_id']}}">
                                        <label class="custom-control-label" for="customSwitchPermission{{$permission['permission_id']}}">
                                            {{ $permission["active"]? "Activé" : "Desactivé" }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <div>
<div>
<script>
    window.addEventListener('showSuccessMessage',event=>{
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: event.detail.message || 'Opération effectuée avec succes!',
        showConfirmButton: false,
        timer: 1000
    })
})
</script>

    {{--<script>
        window.addEventListener('showConfirmMessage', event=>{
            Swal.fire({
                title: event.detail.message.title,
                text: event.detail.message.text,
                icon: event.detail.message.icon,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, continuer',
                cancelButtonText: 'Annuler'
                })
            .then((result) => {
                if (result.isConfirmed) {
                    @this.resetPassword()
                    }
            })
            
            window.addEventListener('showSuccessMessage',event=>{
            Swal.fire({
                postion: 'top-end',
                icon: 'success',
                toast: true,
                title: event.detail.message || 'Opération effectuée avec succè!',
                showConfirmButton: false,
                timer: 3000
            })
        })
        })
    </script>--}}