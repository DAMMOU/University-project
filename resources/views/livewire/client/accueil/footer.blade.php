<footer class="bd-footer bg-body-tertiary">
        <div class="container py-1 py-md-4 px-4 px-md-3 text-body-secondary">
            <div class="row">
                <div class="col-lg-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Bootstrap">
                        <img src="{{asset('img/logo.png')}}"width="70" height="50"/>
                        <span class="fs-5" style="color:#fff">Lafac.net</span>
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">
                            Education au Maroc est puls facile que jamais avec Lafac.net
                            <a href="#">Lafac.net</a>
                            <a href="#"></a>
                        </li>
                        <li class="mb-2">
                        Notre site regroupe toutes les universités marocaines et ses établissements, ne ratez pas cette occasion
                        <a href="#" target="_blank" rel="license noopener"></a>.
                        </li>
                        <li class="mb-2"></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1">
                    <h5>Liens</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('accueil')}}">Accueil</a></li>
                    <li class="mb-2"><a href="{{route('universites')}}">Universités</a></li>
                    <li class="mb-2"><a href="{{route('exemples')}}">Exemples</a></li>
                    <li class="mb-2"><a href="{{route('chercher-formations')}}">Formations</a></li>
                    <li class="mb-2"><a href="#">Ecoles</a></li>
                    <li class="mb-2"><a href="#">Concours</a></li>
                    <li class="mb-2"><a href="{{route('exemples')}}">Contactez-nous</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Recherche</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('chercher-formations')}}">Formations</a></li>
                    <li class="mb-2"><a href="#">Ecoles</a></li>
                    <li class="mb-2"><a href="#">Modules</a></li>
                    <li class="mb-2"><a href="#">Etablissements</a></li>
                    <li class="mb-2"><a href="#">Exemples</a></li>
                    </ul>
                </div>
                
                <div class="col-6 col-lg-2">
                    <h5>Communauté</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">Questions</a></li>
                    <li class="mb-2"><a href="#">Discussions</a></li>
                    <li class="mb-2"><a href="{{route('contact-us')}}">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>