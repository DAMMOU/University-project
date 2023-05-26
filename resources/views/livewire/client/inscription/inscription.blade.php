         
    <div class="container">
 
            <div class="alert alert-info alert-dismissible fade show text-center" role="alert" wire:offline>
                <strong>Désolé!</strong>, il semble que vous soyez actuellement <strong>hors ligne</strong>. 
                Veuillez vérifier votre connexion internet et réessayer plus tard. Nous nous excusons pour tout inconvénient causé.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="py-1 text-center">
                        <img class="d-block mx-auto mb-0" src="{{asset('img/logo.png')}}" alt="" width="92" height="77">
                        <h2>Inscription</h2>
                        <p class="lead">
                            Étudiants marocains, inscrivez-vous sur LaFac.net et rejoignez une communauté dynamique qui vous soutient dans votre parcours académique.
                        </p>
                    </div>
            <div class="row">
                <div class="col-md-2 py-3 text-center">
                    
                </div>

                <div class="col-md-8 g-2">
                    <form class="needs-validation mt-0" wire:submit.prevent='addLine()'>
                    
                        <div class="row g-2">
                            <div>
                                @if (session()->has('message'))
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">{{session('message')}}</h4>
                                        <p>
                                            Nous vous souhaitons la bienvenue sur LaFac.net. Préparez-vous à découvrir une expérience passionnante !.
                                        </p>
                                        <hr>
                                        <p class="mb-0">Lafac.net</p>
                                    </div>
                                @endif
                            </div>

                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="form-label">Nom<span class="text-danger">*</span></label>
                                    <input type="text"  wire:model="newLine.nom"  class="form-control @error('newLine.nom')is-invalid @enderror">
                                    @error('newLine.nom') <span class="text-danger">{{$message}}</span> @enderror 
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Prénom<span class="text-danger">*</span></label>
                                    <input type="text"  wire:model="newLine.prenom"  class="form-control @error('newLine.prenom')is-invalid @enderror">
                                    @error('newLine.prenom') <span class="text-danger">{{$message}}</span> @enderror 
                                </div>
                            </div> 

                            <div class="row mb-2">
                                <div class="col-6">
                                    <label  class="form-label @error('newLine.email') is-invalid @enderror">Email<span class="text-danger">*</span></label>
                                    <input type="email" wire:model="newLine.email" class="form-control @error('newLine.email')is-invalid @enderror" placeholder="you@example.com">
                                    @error('newLine.email') <span class="text-danger">{{$message}}</span> @enderror                      
                                </div>
                                <div class="col-6">
                                    <label  class="form-label ">Genre<span class="text-danger">*</span></label>
                                    <select class="form-select @error('newLine.sexe') is-invalid @enderror" aria-label="Default select example" 
                                        wire:model="newLine.sexe">
                                        <option selected>--</option>
                                        <option value="F">Femme</option>
                                        <option value="M">Homme</option>
                                    </select>
                                    @error('newLine.sexe') <span class="text-danger">{{$message}}</span> @enderror 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                   <label  class="form-label ">Je suis<span class="text-danger">*</span></label>
                                    <select class="form-select  @error('newLine.je_suis') is-invalid @enderror" aria-label="Default select example"
                                        wire:model="newLine.je_suis">
                                        <option selected>--</option>
                                        <option value="F">Etudiant</option>
                                        <option value="M">Autre</option>
                                    </select>
                                    @error('newLine.je_suis') <span class="text-danger">{{$message}}</span> @enderror 
                                </div>
                                <div class="col-6">
                                   <label  class="form-label">Ville<span class="text-danger">*</span></label>
                                    <select class="form-select  @error('newLine.ville') is-invalid @enderror" aria-label="Default select example" 
                                        wire:model="newLine.ville">
                                        <option selected>--</option>
                                        <option value="F">Zagora</option>
                                        <option value="M">--</option>
                                    </select>
                                    @error('newLine.ville') <span class="text-danger">{{$message}}</span> @enderror 
                                </div>
                            </div>
                            
                        </div>
                        <hr class="my-4">
                        <button type="submit" class="w-100 btn btn-primary btn-lg" wire:target='addLine' wire:loading.attr="disabled">
                            <div wire:target='addLine' wire:loading class='mr-2'> 
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>   
                                <span>Envoi...</span>  
                            </div>
                            <span wire:target='addLine' wire:loading.remove>Inscription</span>
                        </button>
                    </form>
                </div>
                <div class="col-md-2 py-3 text-center">
                    
                </div>
                
            </div>
        

        
    </div>

           
