
  @extends('layouts.accueil')
  @section('metadata')
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{$metadata['author']}}">
    <meta name="keywords" content="{{$metadata['keywords']}}">
    <meta name="desciption" content="{{$metadata['description']}}">
    <!-- Title -->
    <title>{{ $metadata['title'] }}</title>
  @endsection

  @section('contenu')
        <div class="bd-masthead" id="content">
            <div class="container-xxl bd-gutter">
                <div class="col-md-8 mx-auto text-center">
                    <a class="d-flex flex-column flex-lg-row justify-content-center align-items-center mb-4 text-dark lh-sm text-decoration-none" 
                        href="#">
                        <strong class="d-sm-inline-block p-2 me-2 mb-2 mb-lg-0 rounded-3 masthead-notice" style="background-color: rgb(255, 228, 132);">
                          {{ __('Share with everyone') }}
                        </strong>
                        <span class="text-body-secondary">
                            {{ __('1k students saved, and it continues thanks to you.') }}
                        </span>
                    </a>
                    <img src="{{asset('img/logo.png')}}" width="200" height="165" alt="logo lafac.net" class="d-block mx-auto mb-3">
                    <h1 class="mb-3 fw-semibold lh-1">
                      {{ __('Education in Morocco is easier than ever') }}
                    </h1>
                    <p class="lead">
                        {{ __('Our platform is the ideal place to explore university study options in Morocco. Find the best educational resources to succeed in your studies.') }}
                    </p>

                    <div class="container">
                      <div class="row   row-cols-2 row-cols-sm-2 row-cols-md-4 g-2">
                        <div class="col">
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                             data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                             style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                              background-size: cover;">
                                {{ __('Universities') }}
                          </button>
                        </div>
                        <div class="col">
                          <a href="{{route('exemples')}}">
                            <button class="btn btn-primary" type="button" style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                              background-size: cover;">
                              {{ __('Examples') }}
                            </button>
                          </a>
                        </div>
                        <div class="col">
                              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                                background-size: cover;">
                                  {{ __('Programs') }}
                                </button>
                        </div>
                        <div class="col">
                              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"style="background-image: linear-gradient(180deg,#712cf9 10%,#224abe 100%);
                                background-size: cover;">
                                {{ __('Shopping') }}
                              </button>
                        </div>
                      </div>
                    </div>
                       
                </div> 
            </div>
        </div>
        @include('livewire.client.accueil.scroul-left')
  @endsection

 

