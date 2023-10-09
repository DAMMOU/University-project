<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="text-center mb-5 pb-2" style="margin-top: -50px;">
                    <h1 class=" w-100 text-white p-md-5">Discover Student Essentials</h1>
                    <p class="text-white">Lafac Store your one-stop shop for all your student needs in Morocco.</p>
                    <a href="#section_2" class="btn custom-btn smoothscroll mt-3">{{__('Cart')}}</a>
                </div>

                <div class="owl-carousel owl-theme">

                    @foreach ($categories as $categorie)
                        <div class="owl-carousel-info-wrap item">
                            <img src="{{($categorie->image)}}"
                                class="owl-carousel-image img-fluid" alt="">
                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    {{($categorie->name)}}
                                    <img src="{{URL::asset('lafac-store/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                       width="" alt="">
                                </h4>
                                <span class="badge"></span>
                                <span class="badge">Browse</span>
                            </div>
                            {{-- <div class="social-share">
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    @endforeach
                    

                    {{-- <div class="owl-carousel-info-wrap item">
                        <img src="{{URL::asset('lafac-store/images/profile/handsome-asian-man-listening-music-through-headphones.jpg')}}"
                            class="owl-carousel-image img-fluid" alt="">
                        <div class="owl-carousel-info">
                            <h4 class="mb-2">
                                Backpacks
                                <img src="{{URL::asset('lafac-store/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                    alt="">
                            </h4>
                            <span class="badge">Creative</span>
                            <span class="badge">Design</span>
                        </div>
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="owl-carousel-info-wrap item">
                        <img src="{{URL::asset('lafac-store/images/profile/cute-smiling-woman-outdoor-portrait.jpg')}}"
                            class="owl-carousel-image img-fluid" alt="">
                        <div class="owl-carousel-info">
                            <h4 class="mb-2">Stationery</h4>
                            <span class="badge">Browse</span>
                            <span class="badge"></span>
                        </div>
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{URL::asset('lafac-store/images/profile/woman-posing-black-dress-medium-shot.jpg')}}"
                            class="owl-carousel-image img-fluid" alt="">
                        <div class="owl-carousel-info">
                            <h4 class="mb-2">
                                Personal Care Items
                                <img src="{{URL::asset('lafac-store/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                    alt="">
                            </h4>
                            <span class="badge">Browse</span>
                        </div>
                        {{-- <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="topics-section section-padding pb-0" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Topics</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay">
                    <a href="detail-page.html" class="custom-block-image-wrap">
                        <img src="{{URL::asset('lafac-store/images/topics/physician-consulting-his-patient-clinic.jpg')}}"
                            class="custom-block-image img-fluid" alt="">
                    </a>
                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <a href="listing-page.html">
                                Productivity
                            </a>
                        </h5>
                        <p class="badge mb-0">50 Episodes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay">
                    <a href="detail-page.html" class="custom-block-image-wrap">
                        <img src="{{URL::asset('lafac-store/images/topics/repairman-doing-air-conditioner-service.jpg')}}"
                            class="custom-block-image img-fluid" alt="">
                    </a>
                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <a href="listing-page.html">
                                Technician
                            </a>
                        </h5>
                        <p class="badge mb-0">12 Episodes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay">
                    <a href="detail-page.html" class="custom-block-image-wrap">
                        <img src="{{URL::asset('lafac-store/images/topics/woman-practicing-yoga-mat-home.jpg')}}"
                            class="custom-block-image img-fluid" alt="">
                    </a>
                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <a href="listing-page.html">
                                Mindfullness
                            </a>
                        </h5>
                        <p class="badge mb-0">35 Episodes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay">
                    <a href="detail-page.html" class="custom-block-image-wrap">
                        <img src="{{URL::asset('lafac-store/images/topics/delicious-meal-with-sambal-arrangement.jpg')}}"
                            class="custom-block-image img-fluid" alt="">
                    </a>
                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <a href="listing-page.html">
                                Cooking
                            </a>
                        </h5>
                        <p class="badge mb-0">12 Episodes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="trending-podcast-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Trending episodes</h4>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-full">
                    <div class="custom-block-image-wrap">
                        <a href="detail-page.html">
                            <img src="{{URL::asset('lafac-store/images/podcast/27376480_7326766.jpg')}}" class="custom-block-image img-fluid"
                                alt="">
                        </a>
                    </div>
                    <div class="custom-block-info">
                        <h5 class="mb-2">
                            <a href="detail-page.html">
                                Vintage Show
                            </a>
                        </h5>
                        <div class="profile-block d-flex">
                            <img src="{{URL::asset('lafac-store/images/profile/woman-posing-black-dress-medium-shot.jpg')}}"
                                class="profile-block-image img-fluid" alt="">
                            <p>Elsa
                                <strong>Influencer</strong>
                            </p>
                        </div>
                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                            <a href="#" class="bi-headphones me-1">
                                <span>100k</span>
                            </a>
                            <a href="#" class="bi-heart me-1">
                                <span>2.5k</span>
                            </a>
                            <a href="#" class="bi-chat me-1">
                                <span>924k</span>
                            </a>
                        </div>
                    </div>
                    <div class="social-share d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>
                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-full">
                    <div class="custom-block-image-wrap">
                        <a href="detail-page.html">
                            <img src="{{URL::asset('lafac-store/images/podcast/27670664_7369753.jpg')}}" class="custom-block-image img-fluid"
                                alt="">
                        </a>
                    </div>
                    <div class="custom-block-info">
                        <h5 class="mb-2">
                            <a href="detail-page.html">
                                Vintage Show
                            </a>
                        </h5>
                        <div class="profile-block d-flex">
                            <img src="{{URL::asset('lafac-store/images/profile/cute-smiling-woman-outdoor-portrait.jpg')}}"
                                class="profile-block-image img-fluid" alt="">
                            <p>
                                Taylor
                                <img src="{{URL::asset('lafac-store/images/verified.png')}}" class="verified-image img-fluid" alt="">
                                <strong>Creator</strong>
                            </p>
                        </div>
                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                            <a href="#" class="bi-headphones me-1">
                                <span>100k</span>
                            </a>
                            <a href="#" class="bi-heart me-1">
                                <span>2.5k</span>
                            </a>
                            <a href="#" class="bi-chat me-1">
                                <span>924k</span>
                            </a>
                        </div>
                    </div>
                    <div class="social-share d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>
                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="custom-block custom-block-full">
                    <div class="custom-block-image-wrap">
                        <a href="detail-page.html">
                            <img src="{{URL::asset('lafac-store/images/podcast/12577967_02.jpg')}}" class="custom-block-image img-fluid"
                                alt="">
                        </a>
                    </div>
                    <div class="custom-block-info">
                        <h5 class="mb-2">
                            <a href="detail-page.html">
                                Daily Talk
                            </a>
                        </h5>
                        <div class="profile-block d-flex">
                            <img src="{{URL::asset('lafac-store/images/profile/handsome-asian-man-listening-music-through-headphones.jpg')}}"
                                class="profile-block-image img-fluid" alt="">
                            <p>
                                William
                                <img src="{{URL::asset('lafac-store/images/verified.png')}}" class="verified-image img-fluid" alt="">
                                <strong>Vlogger</strong>
                            </p>
                        </div>
                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                            <a href="#" class="bi-headphones me-1">
                                <span>100k</span>
                            </a>
                            <a href="#" class="bi-heart me-1">
                                <span>2.5k</span>
                            </a>
                            <a href="#" class="bi-chat me-1">
                                <span>924k</span>
                            </a>
                        </div>
                    </div>
                    <div class="social-share d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>
                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}