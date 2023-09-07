
@push('css')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');
  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:'Poppins', sans-serif;
    color: white;
  }
  body{
    background-color: #232323;
    overflow-x: hidden;
  }
  .navbar{
    padding: 15px 18px !important;
    width: 100%;
  }
  .logo{
    font-weight: 600;
    color: rgba(255, 255, 255, 0.848) !important;
  }
  .nav-item{
    margin: 0px 10px;
  }
  .nav-item .nav-link{
    color: rgba(255, 255, 255, 0.92);
    font-size: 14px;
    font-weight: 500; 
  }
  .btn-cart{
    display: inline-block;
    color: white;
    font-size: 14px;
    font-weight: 600; 
  }
  .content-home2{
    height:90vh;
    width:100%;
    display:flex;
    justify-content: space-between;
    align-items: center;
  }
 </style>
@endpush
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
          <a class="nav-link" aria-current="page" href="#">{{__("Home")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("Products")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{__("About Us")}}</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__("Categories")}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">{{__("Categories")}}</a></li>
            <li><a class="dropdown-item" href="#">{{__("Categories")}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">{{__("Categories")}}</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
     <button class="btn btn-danger m-2 btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill  mb-1" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
      {{__('Cart')}} <span class="m-1"> {{__('.0')}}</span>
    </button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>



    
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">{{__('Cart')}}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>


<div class="container">
  <div class="content-home">
    <div class="row content-home2">
      <div class="col-lg-7 col-md-5">
        <div class="box-container">
          <img src="{{asset("images/category-1.jpg")}}" class="img-home" alt="banner img">
        </div>
      </div>

      <div class="col-lg-5 col-md-7">
        <div class="box-container2">
          <h1 class="home-heading"> Designed for your <span class="home-span">Quality Music</span>
            <p class="para-home">
              fkh iqjfio iohfaoi iojafio iojaf iajfgip
            </p>
            <div class="btn-home">
              <a herf="#" class="home-links">Buy Now</a>
              <a herf="#" class="home-links btn-2">Explore</a>
            </div>
          </h1>
      </div>
      </div>
    </div>
  </div>

</div>
