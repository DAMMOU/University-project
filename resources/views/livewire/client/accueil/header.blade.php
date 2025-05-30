<header class="navbar navbar-expand-md navbar-dark bd-navbar sticky-top"style="background-color: #712cf9;background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
        background-size: cover;">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <a class="navbar-brand p-0 me-2" href="/" aria-label="Lafac.ma">
        <img src="{{asset('img/logo.png')}}"width="70" height="50"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
            aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="bdNavbar">
            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0  @if($isArabicLocale) losue @endif">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 {{active('accueil')}}" aria-current="page" href="{{route('accueil')}}">
                        {{__('Home')}}
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 {{addClass('universites','active')}}" href="{{route('universites')}}">
                        {{__('Universities')}}</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 {{addClass('chercher-formations','active')}}" href="{{route('chercher-formations')}}">
                        {{__('Programs')}}
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto {{addClass('exemples','active')}}">
                    <a class="nav-link p-2" href="{{route('exemples')}}">
                        {{__('Tools')}}
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="{{ route('contact-us')}} "  rel="noopener">
                        {{__('Contact')}} 
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="{{route('lafac-store')}}" rel="noopener">
                        {{__('Shopping')}}
                    
                    </a>
                </li>
                <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto mx-2">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white "></div>
                    <hr class="d-lg-none my-2 text-white-50">
                 </li> 
            </ul>
            
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-md-auto mt-1">
                    <a class="nav-link p-2" href="#"  rel="noopener">
                        <svg xmlns="#" width="36" height="36"
                            class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 416.32"
                            role="img">
                            <title>Twitter</title>
                            <path fill="currentColor"
                                d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92" />
                        </svg>
                        <small class="d-md-none ms-2">Twitter</small>
                    </a>
                </li> 
                <li class="nav-item col-6 col-md-auto mt-1">
                    <a class="nav-link p-2" href="#" 
                        rel="noopener">
                        <svg xmlns="#" width="36" height="36"
                            class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 512" role="img">
                            <title>Slack</title>
                            <path fill="currentColor"
                                d="M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z" />
                            <path fill="currentColor"
                                d="M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z" />
                        </svg>
                        <small class="d-md-none ms-2">Slack</small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto mt-1">
                    <a class="nav-link p-2" href="#" 
                        rel="noopener">
                        <svg xmlns="#" width="36" height="36"
                            class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 512" role="img">
                            <title>Slack</title>
                            <path fill="currentColor"
                                d="M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z" />
                            <path fill="currentColor"
                                d="M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z" />
                        </svg>
                        <small class="d-md-none ms-2">Slack</small>
                    </a>
                </li>
            </ul>
            <a class="btn btn-bd-inscription d-lg-inline-block my-2 my-md-0 ms-md-3"
                href="{{route('inscription')}}">
                {{__('Sign up')}}
            </a>
            <div class="dropdown" style="margin-left:10px;">    
                <a class="btn dropdown-toggle mr-3 btn-bd-inscription" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-translate"></i>
                  {{App::getLocale()}}
                </a>
                <ul class="dropdown-menu">
                    @foreach ( Config::get('locale') as $lang => $language )
                        @if($lang != App::getLocale())
                            <li><a class="dropdown-item" href="{{route('locale', $lang)}}">{{$language['display']}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--
<nav class="second-navBar py-2" aria-label="Navigation secondaire">
    <div class="container-xxl d-flex align-items-md-center">
        <form class="bd-search position-relative me-auto">
            <input type="search" class="form-control" id="search-input" placeholder="Rechercher..." aria-label="Search docs for..." autocomplete="off" data-bd-docs-version="5.0">
        </form>
    </div>
</nav> -->