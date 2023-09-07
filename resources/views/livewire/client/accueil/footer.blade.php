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
                            {{__("Education in Morocco is easier than ever")}}
                        </li>
                        <li class="mb-2">
                            {{__("Our website gathers all Moroccan universities and their institutions, don't miss this opportunity")}}
                        
                        <a href="#" target="_blank" rel="license noopener"></a>.
                        </li>
                        <li class="mb-2"></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1">
                    <h5>{{__('Links')}}</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('accueil')}}">{{__('Home')}}</a></li>
                    <li class="mb-2"><a href="{{route('universites')}}">{{__('Universities')}}</a></li>
                    <li class="mb-2"><a href="{{route('exemples')}}">{{__('Examples')}}</a></li>
                    <li class="mb-2"><a href="{{route('chercher-formations')}}">{{__('Programs')}}</a></li>
                    
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>{{__('Links')}}</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">{{__('Contact')}}</a></li>
                    <li class="mb-2"><a href="#">{{__('Schools')}}</a></li>
                    <li class="mb-2"><a href="#">{{__('Shopping')}}</a></li>
                    </ul>
                </div>
                
                <div class="col-6 col-lg-2">
                    <h5>{{__('Community')}}</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('contact-us')}}">{{__('Contact')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>