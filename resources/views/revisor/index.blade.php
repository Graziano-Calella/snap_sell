<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="container-header-secondary bg-revisor">
                    <div class="content-header watch transition">
                        @if ($announcement_to_check)
                            <h1 class="title-header">Ecco l'annuncio da revisionare:<br> <strong>{{$announcement_to_check->title}}</strong></h1>
                        @else
                            <h1 class="title-header">Ecco l'annuncio da revisionare:<br> <strong>Non ci sono annunci</strong></h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
        <x-cardShow :announcement="$announcement_to_check"></x-cardShow>
    @endif

    
    <div class="toast-container" data-bs-delay="10000">
        <div id="liveToast" class="toast-custom" role="alert" aria-live="assertive" aria-atomic="true">
            <div>
                @if ($ultimo)
                    <form action="{{route('revisor.null_announcement', ['announcement' => $ultimo])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-share fa-rotate-180"></i></button>
                    </form>
                @endif
            </div>
            <div>
                <h6>Annulla</h6>
                <p>Vuoi annullare l'ultima azione?</p>
            </div>
            <div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
</x-layout>
