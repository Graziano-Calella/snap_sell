<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Annuncio {{$announcement->title}} </h1>
            </div>
        </div>
    </div>
    <x-cardShow :announcement="$announcement"></x-cardShow>
</x-layout>