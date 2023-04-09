<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Gestions / Etablissements / Categories </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if ($currentPage == PAGELIST)
        @include('livewire.admin.categorie-etablissements.liste')
    @endif
    @if ($currentPage == PAGECREATE)
        @include('livewire.admin.categorie-etablissements.create')
    @endif
    @if ($currentPage == PAGEEDIT)
        @include('livewire.admin.categorie-etablissements.edit')
    @endif


</div>
