<x-layout>
  @if(count($category->announcements->where('is_accepted', true)))
    <div class="container-header-category">
      <div class="content-header watch transition">
        <h1 class="title-header">Esplora la categoria: <br> <strong>{{$category->name}}</strong></h1>
        <form action="{{route('announcements.search')}}" method="GET" class="form-searchbar mt-3">
          @csrf
          <div class="content-input-btn">
            <div>
              <button class="btn btn-searchbar" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div>
              <input name="searched" class="form-control" placeholder="Cerca nel sito..." aria-label="search" type="search">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="container py-5">
      <div class="row">
        @foreach ($category->announcements->where('is_accepted', true) as $announcement)
          <div class="col-12 col-md-6 col-xl-4 p-3">
            <x-card :announcement="$announcement"></x-card>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <div class="container-header-category">
      <div class="content-header watch transition">
        <h1 class="title-header">Esplora la categoria: <br> <strong>{{$category->name}}</strong></h1>
        <div class="content-addAds content-addAds-category">
          <div class="col-12 col-lg-6">
            <p class="description-category">Non ci sono annunci: <br><strong>Fatti notare, pubblicane uno!</strong></p>
          </div>
          <div class="col-12 col-lg-6 content-btn-header">
            <a href="{{route('announcement.create')}}" class="cta-header"><i class="fa-solid fa-hand-holding-dollar"></i>Crea nuovo annuncio</a>
          </div>
        </div>
        <form action="{{route('announcements.search')}}" method="GET" class="form-searchbar">
          @csrf
          <div class="content-input-btn">
            <div>
              <button class="btn btn-searchbar" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div>
              <input name="searched" class="form-control" placeholder="Cerca nel sito..." aria-label="search" type="search">
            </div>
          </div>
        </form>
      </div>
    </div>
  @endif
</x-layout>
