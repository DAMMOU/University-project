<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="index.html">
            <img src="{{URL::asset('lafac-store/images/lafac-store-logo.png')}}"  class="logo-image img-fluid" width="20" height="20" alt="logo lafac store">
        </a>
        <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
            <div class="input-group input-group-lg">
                <input name="search" type="search" class="form-control" id="search" placeholder="Search"
                    aria-label="Search">
                <button type="submit" class="form-control" id="submit">
                    <i class="bi-search"></i>
                </button>
            </div>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('lafac-store') }}">{{__('Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lafac-store.about-us') }}">{{__('About')}}</a>
                </li>
               {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Listing Page</a></li>
                        <li><a class="dropdown-item" href="#">Detail Page</a></li>
                    </ul>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lafac-store.contact-us') }}">{{__('Contact')}}</a>
                </li>
            </ul>
            <div class="ms-4">
                <button class="btn custom-btn custom-border-btn smoothscroll" type="button" 
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    {{__('Cart')}}
                </button>
            </div>
        </div>
    </div>
</nav>