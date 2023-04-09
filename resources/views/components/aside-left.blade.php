
<aside class="main-sidebar sidebar-dark-primary elevation-4" >

    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('img/logo.png')}}" alt="Youssad Loacation Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Lafac.Net</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->image}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name ." ". auth()->user()->firstName}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{addClass('home', 'active')}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Accuiel</p>
                    </a>
                </li>
                
               
                <li class="nav-item {{addClass('superadmin.dashboard','menu-open')}}">
                    <a href="#" class="nav-link {{addClass('superadmin.dashboard','active')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Tableau de bord <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('superadmin.dashboard.vue-globale')}}" class="nav-link {{active('superadmin.dashboard.vue-globale')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vue globale</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Locations</p>
                            </a>
                        </li>
                    </ul>
                </li>
              
                
                <li class="nav-item {{addClass('superadmin.habilitations','menu-open')}}">
                    <a href="#" class="nav-link {{addClass('superadmin.habilitations','active')}}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                        Habilitation 
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
               
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('superadmin.habilitations.users.index')}}" 
                            class="nav-link {{active('superadmin.habilitations.users.index')}}">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>Utilisateurs</p>
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.habilitations.roles.index')}}" 
                            class="nav-link {{active('superadmin.habilitations.roles.index')}}">
                                <i class="nav-icon fas fa-fingerprint"></i>
                                <p>Roles</p>   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.habilitations.permissions.index')}}" 
                            class="nav-link {{active('superadmin.habilitations.permissions.index')}}">
                                <i class="nav-icon fas fa-fingerprint"></i>
                                <p>Permissions</p>   
                            </a>
                        </li>
                    </ul>
                </li>  
                
                <li class="nav-item {{addClass('superadmin.gestions','menu-open')}}">
                    <a href="#" class="nav-link {{addClass('superadmin.gestions','active')}}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Gestions</p>   
                        <i class="right fas fa-angle-left"></i>
                    </a>
                       
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('superadmin.gestions.universites.index')}}" 
                            class="nav-link {{active('superadmin.gestions.universites.index')}}">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>Universites</p>   
                            </a>
                        </li>
                        <li class="nav-item {{addClass('superadmin.gestions.etablissements.','menu-open bg-info ')}}">
                            <a href="#" 
                            class="nav-link {{active('superadmin.gestions.etablissements.')}}">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>Etablissements
                                    <i class="fas fa-angle-left right"></i>
                                </p>   
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <li class="nav-item">
                                    <a href="{{route('superadmin.gestions.etablissements.index')}}" 
                                        class="nav-link {{active('superadmin.gestions.etablissements.index')}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Index</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <li class="nav-item">
                                    <a href="{{route('superadmin.gestions.etablissements.types.index')}}" 
                                        class="nav-link {{active('superadmin.gestions.etablissements.types.index')}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Types</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <li class="nav-item">
                                    <a href="{{route('superadmin.gestions.etablissements.categories.index')}}" 
                                        class="nav-link {{active('superadmin.gestions.etablissements.categories.index')}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Catégories</p>
                                    </a>
                                </li>

                                
                            </ul>
                        </li>
                      
                            
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.gestions.formations.index')}}" 
                            class="nav-link {{active('superadmin.gestions.formations.index')}}">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>Formations</p>   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.gestions.filieres.index')}}" 
                            class="nav-link {{active('superadmin.gestions.filieres.index')}}">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>Filieres</p>   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.gestions.modules.index')}}" 
                            class="nav-link {{active('superadmin.gestions.modules.index')}}">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>Modules</p>   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.gestions.villes.index')}}" 
                            class="nav-link {{active('superadmin.gestions.villes.index')}}">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>Villes</p>   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('superadmin.gestions.regions.index')}}" 
                            class="nav-link {{active('superadmin.gestions.regions.index')}}">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>Regions</p>   
                            </a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-header">CAISSE</li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>Gestion des paiements</p>   
                    </a>
                </li>   
            </ul>
        </nav>
    </div>
</aside>
   