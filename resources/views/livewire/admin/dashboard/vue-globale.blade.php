<div>
    <section class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tableau de bord</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Tableau de bord</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                            <i class="fas fa-university"></i>
                            {{$data['universitesCount']}} </h3>
                            <p>Universites</p>
                        </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                        <a href="{{route('superadmin.gestions.universites.index')}}" 
                            class="small-box-footer">
                            Plus  d'infos 
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>
                            <i class="fas fa-user"></i>
                            {{$data['usersCount']}}
                            <sup style="font-size: 20px">Utilisateurs</sup>
                        </h3>
                        <p> Utilisateurs</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('superadmin.habilitations.users.index')}}" 
                            class="small-box-footer">
                            Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-building"></i>
                                {{$data['etablissementsCount']}}
                                <sup style="font-size: 20px">Etablissements</sup>
                            </h3>
                            <p>Etablissements</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.etablissements.index')}}" 
                            class="small-box-footer">
                            Plus d'infos 
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-city"></i>
                                {{$data['villesCount']}}
                                <sup style="font-size: 20px">Villes</sup>
                            </h3>
                            <p>Villes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.villes.index')}}" 
                            class="small-box-footer">
                            Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-graduation-cap"></i>
                                {{$data['formationsCount']}}</h3>
                            <p>Formations</p>
                        </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                        <a href="{{route('superadmin.gestions.formations.index')}}" 
                            class="small-box-footer">
                            Plus  d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>
                            <i class="fas fa-chalkboard-teacher"></i>
                            {{$data['filieresCount']}}
                            <sup style="font-size: 20px">Filières</sup>
                        </h3>
                        <p>Filières</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.filieres.index')}}" 
                            class="small-box-footer">
                            Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-users-cog"></i>
                                {{$data['rolesCount']}}
                                <sup style="font-size: 20px">Roles</sup>
                            </h3>
                            <p>Roles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('superadmin.habilitations.roles.index')}}" 
                            class="small-box-footer">
                            Plus d'infos 
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-map-marker-alt"></i>
                                {{$data['regionsCount']}}
                                <sup style="font-size: 20px">Regions</sup>
                            </h3>
                            <p>Regions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.regions.index')}}" 
                            class="small-box-footer">
                            Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-chalkboard-teacher"></i>
                                <sup style="font-size: 20px">Modules</sup>
                                {{$data['modulesCount']}}
                            </h3>
                            <p>Modules</p>
                        </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                        <a href="{{route('superadmin.gestions.modules.index')}}" 
                            class="small-box-footer">
                            Plus  d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>
                            <i class="far fa-file-alt"></i>
                            {{$data['coursCount']}}
                            <sup style="font-size: 20px">Cours</sup>
                        </h3>
                        <p>Cours</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.cours.index')}}" 
                            class="small-box-footer">
                            Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <i class="fas fa-laptop-code"></i>
                                {{$data['exemplesCount']}}
                                <sup style="font-size: 20px">Exemples</sup>
                            </h3>
                            <p>Exemples</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.exemples.index')}}" 
                            class="small-box-footer">
                            Plus d'infos 
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>
                                <i class="far fa-file-pdf"></i>
                                {{$data['cvsCount']}}
                                <sup style="font-size: 20px">Cvs</sup>
                            </h3>
                            <p>Cvs</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('superadmin.gestions.exemples.index')}}" 
                            class="small-box-footer">
                            Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>








