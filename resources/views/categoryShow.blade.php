<x-layout>
    <div class="container mt-5 pt-5">
       <div class="row">
           <div class="col-12 text-center">
               <h1>Esplora la categoria : {{$category->name}}</h1>
           </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
            @forelse ($category->announcements as $announcement)
                <div class="col-4">
                    <div class="card shadow">
                        <img src="https://picsum.photos/250" class="card-img-top" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->description}}</p>
                            <a href="#" class="btn btn-primary shadow">Visualizza</a>
                            <p class="card-footer">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? ''}}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria</p>
                    <p class="h2">Pubblicane uno: <a class="btn btn-success shadow" href="{{route('announcement.create')}}">Nuovo Annuncio</a></p>
                </div>
            @endforelse
       </div>
    </div>
</x-layout>