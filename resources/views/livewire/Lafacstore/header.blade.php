
@push('js')
  <script>
    $(document).ready(function () {
      const navbarToggler = $(".navbar-toggler");
      navbarToggler.on("click", function () {
        const isOpen = navbarToggler.hasClass("collapsed");
        if (isOpen) {
          navbarToggler.find(".navbar-toggler-icon").removeClass("btn-close");
        } else {
          navbarToggler.find(".navbar-toggler-icon").addClass("btn-close");
        }
      });
    });
  </script>
@endpush
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand logo text-uppercase" href="#">LafacStotre</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('lafac-store')}}">{{__("Home")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("Products")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("Categories")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("Promotions")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("Blog")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("FAQ")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("Contact")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("About Us")}}</a>
        </li>
      </ul>     
    </div>
     <button class="btn btn-danger m-2 btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
      {{__('Cart')}} <span class="m-1"> {{__('.0')}}</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill  mb-1" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
      
    </button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container text-center">
  <div class="row row-cols-sm-2 row-cols-md-2">
    <div class="col">
      <img src="{{asset('lafac-store/img/students.png')}}" class="img-fluid" alt="header img">
    </div>
    <div class="col">
        <h1 class="home-heading mt-4"> 
          {{__('Give your studies a')}} 
          <span class="home-span">{{__(' fresh style!')}}</span>
        </h1>
        <p class="para-home">
          {{__('Discover a wide array of exclusive offers tailored specifically for students to explore!')}}
          {{__('Discover a wide array of exclusive offers tailored specifically for students to explore!')}}
        </p>
        <div class="btn-home">
          <a herf="#" class="home-links">{{__('Buy Now')}}</a>
          <a herf="#" class="home-links btn-2">{{__('Explore')}}</a>
        </div>
    </div>
  </div>



  <div class="row mt-0">
      <div class="col-md-2">
      </div>
      <div class="col-md-8 mt-0">
          <div class="input-group m-auto mt-0">
            <select class="form-select bg-dark text-white" id="inputGroupSelect04" aria-label="Categories select with button addon">
              <option selected value="">{{__('Choose categories')}}</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <button class="btn btn-outline-secondary" type="button">Button</button>
          </div>
      </div>
      <div class="col-md-2">
      </div>
  </div>
</div>

