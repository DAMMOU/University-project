<?php

namespace App\Http\Livewire\Admin;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class User extends Component
{
    use WithPagination; use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $newUser = [];
    public $editUser = [];
    public $rolesPermissions = [];
    public $photo;
    
    
    protected $rules = [
        'newUser.name' => 'required|max:10',
        'newUser.firstName' => 'required|max:10',
        'newUser.sex' => 'required|max:1',
        'newUser.phone' => 'required|unique:users,phone',
        'newUser.email' => 'required|email|unique:users,email',
        'newUser.password' => 'required|min:6',
        
        
    ];
    
    

    public function render()
    {    
       
        return view('livewire.admin.users.index',[
            'users' => ModelsUser::latest()->paginate(9),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'editUser.name' => 'required|max:10',
                'editUser.firstName' => 'required|max:10',
                'editUser.sex' => 'required|max:1',
                'editUser.phone' => ['required', 'numeric', Rule::unique('users', 'phone')->ignore($this->editUser['id'])],
                'editUser.email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->editUser['id'])],
                'editUser.password' => 'required|min:6',

        
            ];
        }
        return [
            'newUser.name' => 'required|max:10',
            'newUser.firstName' => 'required|max:10',
            'newUser.sex' => 'required|max:1',
            'newUser.phone' => 'required|unique:users,phone',
            'newUser.email' => 'required|email|unique:users,email',
            'newUser.password' => 'required|min:6',
            'photo' => 'image|required|max:1024',
        ];
    }
    public function goToAdd()
    {   
        $this->currentPage = PAGECREATE;  
    }
    public function goTolist()
    {   
        $this->currentPage = PAGELIST;  
    }

//////////////////////////////////// Update //////////////////////////////////////////////////////
    public function goToEdit($id)
    {   
        $this-> editUser = ModelsUser::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT; 

        $this->populateRolesPermissions();

    }
    
    public function populateRolesPermissions(){
        $this->rolesPermissions['roles'] = [];
        $this->rolesPermissions['permissions'] = [];
        $callback = function($value){
            return $value['id'];
        };

        $roles = array_map($callback, ModelsUser::find($this->editUser['id'])->roles->toArray());
        foreach(Role::all() as $role){
            if(in_array($role->id, $roles)){
                array_push($this->rolesPermissions['roles'],['role_id'=>$role->id, 'role_name'=>$role->name,'active'=>true]);
            }else{
                array_push($this->rolesPermissions['roles'],['role_id'=>$role->id, 'role_name'=>$role->name,'active'=>false]);
            }   
        }
        $permissions = array_map($callback, ModelsUser::find($this->editUser['id'])->permissions->toArray());
        foreach(Permission::all() as $permission){
            if(in_array($permission->id, $permissions)){
                array_push($this->rolesPermissions['permissions'],['permission_id'=>$permission->id, 'permission_label'=>$permission->label,'active'=>true]);
            }else{
                array_push($this->rolesPermissions['permissions'],['permission_id'=>$permission->id, 'permission_label'=>$permission->label,'active'=>false]);
            }   
        }

        //dump($this->rolesPermissions['roles']);
    }
    public function updateRolesAndPermissions(){
        DB::table('user_roles')->where('user_id',$this->editUser['id'])->delete();
        foreach($this->rolesPermissions['roles'] as $role){
            if($role['active']){
                ModelsUser::find($this->editUser['id'])->roles()->attach($role['role_id']);  
            }
        }
        DB::table('user_permissions')->where('user_id',$this->editUser['id'])->delete();
        foreach($this->rolesPermissions['permissions'] as $permission){
            if($permission['active']){
                ModelsUser::find($this->editUser['id'])->permissions()->attach($permission['permission_id']);     
            }
        }
        $this->dispatchBrowserEvent('showSuccessMessage', 
            ['message'=>"Roles et permissions mis à jour avec succès!"]); 
    }

    public function updateUser(){
        $validationAttributes = $this->validate();
        $validationAttributes['editUser']['password'] = Hash::make($validationAttributes['editUser']['password']);
        ModelsUser::find($this->editUser['id'])->update($validationAttributes['editUser']);
        $this->dispatchBrowserEvent('showSuccessMessage', 
            ['message'=>'Utilisateur mis à jour avec succès!']);
    }
//////////////////////////////////// Fin Update //////////////////////////////////////////////////////




//////////////////////////////////// Add //////////////////////////////////////////////////////
    public function addUser()
    {
        $validationAttributes = $this->validate();
        
        $validationAttributes['newUser']['password'] = Hash::make($validationAttributes['newUser']['password']);
        $imagePath = $this->photo->store('photos','public');
        ModelsUser::create([
            'name' => $validationAttributes['newUser']['name'],
            'firstName' => $validationAttributes['newUser']['firstName'],
            'sex' => $validationAttributes['newUser']['sex'],
            'phone' => $validationAttributes['newUser']['phone'],
            'email' => $validationAttributes['newUser']['email'],
            'password' => $validationAttributes['newUser']['password'],
            'image' => $imagePath
        ]);
       
        $this->dispatchBrowserEvent('showAddUserSuccessMessage', 
            ['message'=>"Utilisateur ajouté à  avec succès!"]);
        $this->newUser = [];
    }
//////////////////////////////////// Fin Add //////////////////////////////////////////////////////   



//////////////////////////////////// Delete //////////////////////////////////////////////////////   
    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent('showConfirmDeleteMessage',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $name sur la liste des utilisateurs. voulez-vous continuer?",
                'data'=>['user_id'=>$id]
            ]
        ]);
    }

    public function deleteUser($id){
        ModelsUser::destroy($id);
        $this->dispatchBrowserEvent('showDeteleUserSuccessMessage', 
            ['message'=>'Utilisateur suprimer avec succès!']);
    }
//////////////////////////////////// Fin Delete //////////////////////////////////////////////////////   
   
}
