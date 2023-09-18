
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
<header class="">
  <nav class="navbar bloc-header pb-4 pt-4 ">
    <div class="container">
      <a class="navbar-brandpx-2" href="#">
        <img src="{{asset('img/logo.png')}}" alt="Bootstrap" width="30" height="24">
      </a>
      <div class="dropdown-center">
        <button class="btn-secondary dropdown-toggle btn_locale" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          fr 
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">fr</a></li>
          <li><a class="dropdown-item" href="#">en two</a></li>
          <li><a class="dropdown-item" href="#">ar</a></li>
        </ul>
      </div>
      <a type="button" class="btt rounded-0 btn_create_acount" href="#">
        {{__('Create a free account')}}
      </a>
    </div>
  </nav>
</header>




  <div class="row section1">
    <div class="col-md-6 order-md-2">
      <img src="{{ asset('lafac-store/img_section1.png') }}" class="card-img-top" />
    </div>
    <div class="col-md-6 order-md-1">
        <h1 class="mt-4 ms-3 mb-4 text-light">
            <p>Découvrez notre large sélection de matériels informatiques</p>
        </h1>
       
    </div>
  </div>
  <div class="card text-center ">
    <div class="card-body">
      <h5 class="card-title mt-4">{{('Vos besoins en matériels informatiques, nos solutions')}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
        Some quick example text to build on the card title and make up the bulk of the card's content.
      </p>
    </div>
  </div>

  <div class="bloc_section_final">
      <div class="container w-100 text-center">
        <div class="p_block_secetion_final">
          <p>{{__('Profitez des avantages Lafac store')}}</p>
        </div>
        <div class="mt-0">
          <a class="rounded-0 btn_block_secetion_final " data-action-block-btn="Créer un compte gratuit" aria-label="Créer un compte gratuit " href="#" style="height: 48px;">
            {{__('Créer un compte gratuit')}}
          </a>
        </div>
      </div>
  </div>



 



