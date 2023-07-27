<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/27/1200/200" alt="foto">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/28/1200/200" alt="foto">
                        </div> 
                        <div class="carousel-item">
                            <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/29/1200/200" alt="foto">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">next</span>
                    </button>
                </div>
                <h5 class="card-title">{{$announcement_to_check->title}}</h5>
                <p class="card-text">{{$announcement_to_check->description}}</p>
                <p class="card-text">{{$announcement_to_check->price}}</p>
                <p class="card-footer">Pubblicato il : {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>