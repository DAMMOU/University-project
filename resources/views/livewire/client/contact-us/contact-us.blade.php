@php
    $isArabicLocale = App::getLocale() == 'ar' ? true : false;
@endphp         
    <div class="container">
 
            <div class="alert alert-info alert-dismissible fade show text-center" role="alert" wire:offline>
                <strong>Désolé!</strong>, il semble que vous soyez actuellement <strong>hors ligne</strong>. 
                Veuillez vérifier votre connexion internet et réessayer plus tard. Nous nous excusons pour tout inconvénient causé.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row ">
                <div class=" col-md-4 py-5  text-center">
                    <div class=" text-center">
                        <img class="d-block mx-auto mb-1" src="{{asset('img/logo.png')}}" alt="" width="300" height="210">
                        <h2>Lafac.net</h2>
                        <p class="lead">
                            Email: udammou@gmail.com <br> 
                            Téléphone: +33 7 45 39 11 47
                            
                        </p>
                    </div>
                </div>

                <div class=" col-md-6">
                    
                    <h4 class="mb-3 pt-5 text-center">{{__('Contact With Us')}}</h4>
                    <form class="needs-validation" wire:submit.prevent='addLine()'>
                    
                            <div class="row g-3">
                            <div>
                                @if (session()->has('message'))
                                   <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">{{session('message')}}</h4>
                                        <p>Nous vous remercions de nous avoir contacté, nous allons vous répondre dans les meilleurs délais.</p>
                                        <hr>
                                        <p class="mb-0">Lafac.net</p>
                                    </div>
                                @endif
                            </div>
                            <label class="form-label mb-0 @if($isArabicLocale) losue @endif">{{__('Name')}}<span class="text-danger">*</span></label>
                            <input type="text"  wire:model="newLine.fullName"  class="form-control @error('newLine.fullName')is-invalid @enderror"@if($isArabicLocale) dir="rtl" @endif>
                            @error('newLine.fullName') <span class="text-danger">{{$message}}</span> @enderror 

                            <label  class="form-label mb-0 @if($isArabicLocale) losue @endif">{{__('Phone Number')}}<span class="text-danger">*</span></label>
                            <input type="text" wire:model="newLine.phone" class="form-control @error('newLine.phone')is-invalid @enderror"@if($isArabicLocale) dir="rtl" @endif>
                            @error('newLine.phone') <span class="text-danger">{{$message}}</span> @enderror 

                            <label class="form-label mb-0 @if($isArabicLocale) losue @endif">{{__('Subject')}}<span class="text-danger">*</span></label>
                            <input type="text"  wire:model="newLine.subject" class="form-control @error('newLine.subject')is-invalid @enderror"@if($isArabicLocale) dir="rtl" @endif>
                            @error('newLine.subject') <span class="text-danger">{{$message}}</span> @enderror 

                            <label  class="form-label mb-0 @if($isArabicLocale) losue @endif">{{__('Email')}}<span class="text-danger">*</span></label>
                            <input type="email" wire:model="newLine.email" class="form-control @error('newLine.email')is-invalid @enderror" @if($isArabicLocale) dir="rtl" @endif placeholder="you@example.com">
                            @error('newLine.email') <span class="text-danger">{{$message}}</span> @enderror
                            
                            <label  class="form-label mb-0 @if($isArabicLocale) losue @endif">{{__('Message')}}<span class="text-danger">*</span></label>
                            <textarea wire:model="newLine.message"class="form-control @error('newLine.message')is-invalid @enderror"  rows="3" @if($isArabicLocale) dir="rtl" @endif ></textarea>  
                            @error('newLine.message') <span class="text-danger">{{$message}}</span> @enderror                         
                            
                        </div>
                        <hr class="my-4">
                        <button id='contact-us-btn' type="submit" class="w-100 btn btn-primary btn-lg" wire:target='addLine' wire:loading.attr="disabled">
                            <div wire:target='addLine' wire:loading class='mr-2'> 
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>   
                                <span>{{__('Sending...')}}</span>  
                            </div>
                            <span wire:target='addLine' wire:loading.remove>{{__('Send')}}</span>
                        </button>
                    </form>
                </div>
                
            </div>
        

        
    </div>

           
