
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
  <section>
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
  </section>

  <section class="bloc_secetion2">
    <div class="text-center ">
        <div class="card-body title_section3">
          <h2 class="card-title mt-5 ">{{('Vos besoins en matériels informatiques, nos solutions')}}</h2>
          <p class="card-text mt-3">
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Some quick example text to build on the card title and make up the.
          </p>
        </div>
      </div>
      <div class="container text-center">
        <div class="row mt-5 mb-5">
          <div class="col-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
            </svg>
            <div class="blue-bar mt-5"></div>
            <h3 class="">Gestion simple des factures</h3>
            <div class="">
              <p>
                Téléchargez en un clic toutes vos factures HT pour regrouper vos achats rapidement. 
                Choisissez de payer par virement à 30 jours ou immédiatement par carte bancaire.<br>
              </p>
              <p>
                <br><br>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
              <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            <div class="blue-bar mt-5"></div>
            <h3 class="">Gestion simple des factures</h3>
            <div class="">
              <p>
                Téléchargez en un clic toutes vos factures HT pour regrouper vos achats rapidement. 
                Choisissez de payer par virement à 30 jours ou immédiatement par carte bancaire.<br>
              </p>
              <p>
                <br><br>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
            </svg>
            <div class="blue-bar mt-5"></div>
            <h3 class="">Gestion simple des factures</h3>
            <div class="">
              <p>
                Téléchargez en un clic toutes vos factures HT pour regrouper vos achats rapidement. 
                Choisissez de payer par virement à 30 jours ou immédiatement par carte bancaire.<br>
              </p>
              <p>
                <br><br>
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>



   <section>
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
  </section>
  



