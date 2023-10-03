<div class="row workingspace" id="about">
    <div class="col-lg-6 profil">
        <img src="{{asset('port-folio/img/youssad.jpg')}}" alt="workingspace" class="img-fluid rounded-circle">
    </div>
    <div class="col-lg-5">
        <h3>Présentation</h3>
        <p>
            {{__(
            "Je suis Youssef DAMMOU, un développeur fullstack passionné. 
            J'ai une solide expérience dans la création d'applications web, allant du front-end au back-end."
            )}}
            Mon bagage en mathématiques et en informatique me permet d'aborder le développement avec une approche analytique, une pensée critique et une capacité à concevoir des solutions efficaces. J'apporte une expertise technique et une compréhension approfondie des principes mathématiques à chaque projet que j'entreprends.

        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombol" data-toggle="modal" data-target="#exampleModal">
            {{__('Detail')}}
        </button>
    </div>
</div>
       


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Présentation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Je suis Youssef DAMMOU, un développeur fullstack passionné qui allie une formation en 
                    mathématiques et en informatique. Cette combinaison unique m'a permis de développer des 
                    compétences solides en résolution de problèmes, en programmation et en conception 
                    d'applications web innovantes.<br>
                    Mon bagage en mathématiques et en informatique me permet d'aborder le développement avec une 
                    approche analytique, une pensée critique et une capacité à concevoir des solutions efficaces. 
                    J'apporte une expertise technique et une compréhension approfondie des principes mathématiques 
                    à chaque projet que j'entreprends.<br>
                    Si vous recherchez un développeur fullstack polyvalent, capable de combiner des compétences en 
                    mathématiques et en informatique pour créer des solutions technologiques de qualité, je suis prêt 
                    à contribuer à votre projet ou à votre entreprise.
                <br>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>