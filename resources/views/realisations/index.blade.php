<x-layout titre="Réalisations" css="{{ asset('css/realisations.css') }}">
    {{-- <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div> --}}
    <x-scroll />
    <x-nav.nav />
    <header>
        <div class="image-principale">
            <img src="/img/pexels-max-rahubovskiy-7045917.jpg" alt="maison" width="500">
            <div class="overlay"></div>
            <div class="entete">
                <h1>Nos Réalisations</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="conteneur-total">
            <div class="grey-line"></div>
            <h2 class="h2 wow fadeInUp " data-wow-delay="0.3s">Nous Sommes Fiere</h2>
            <h4 class="gray wow fadeInUp ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia vol
            </h4>
            <div class="conteneur-image2 wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($realisations as $realisation)
                    <div class="contain">
                        <img src="/img/{{ $realisation->image_url }}.jpg" width="250px" height="200px"
                            alt="Realisation">
                        <a class="icon" href="{{ route('realisations.show', ['id' => $realisation->id]) }}"><span
                                class="material-symbols-outlined">
                                photo_library
                            </span></a>
                    </div>
                @endforeach
            </div>
        </div>


    </main>



    <x-footer />
</x-layout>
