<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion {{$table}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Gestion  / {{$table}}   {{$tabelIn}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    @if ($currentPage == PAGELIST)
        @include('livewire.admin.permissions.liste')
    @endif
    @if ($currentPage == PAGECREATE)
        @include('livewire.admin.permissions.create')
    @endif
    @if ($currentPage == PAGEEDIT)
        @include('livewire.admin.permissions.edit')
    @endif
</div>
