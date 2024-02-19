<x-layout titre="Réalisations" css="{{ asset('css/realisations.css') }}">
    {{-- <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div> --}}
    <x-scroll />
    <x-nav.nav />
    <header>
        <div class="image-principale">
            <img src="/img/{{ $realisation->image_url }}.jpg" alt="maison" width="500">
            <div class="overlay"></div>
            <div class="entete">
                <h1>{{ $realisation->noms }}</h1>
                <h5>{{ $realisation->descriptions }}</h5>
            </div>
        </div>
    </header>

    {{-- <main>
        <div class="conteneur-total">
            <div class="conteneur-image3 wow fadeInUp" data-wow-delay="0.3s">
                @if (isset($jsonArray['images']))
                    @foreach ($jsonArray['images'] as $imageSet)
                        @foreach ($imageSet as $filename)
                            <div class="contain">
                                <img src="/img/{{ $filename }}" alt="{{ $filename }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                @endif
            </div>
        </div>
    </main> --}}

    <main>
        <div class="conteneur-total">
            <div class="conteneur-image3 wow fadeInUp" data-wow-delay="0.3s">
                {{-- fretdesbois --}}
                @if (isset($jsonArray['fretdesbois']) && $realisation->id == 1)
                    @foreach ($jsonArray['fretdesbois'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- Labusedeluxe --}}
                @elseif(isset($jsonArray['Labusedeluxe']) && $realisation->id == 2)
                    @foreach ($jsonArray['Labusedeluxe'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- Modern House --}}
                @elseif(isset($jsonArray['ModernHouse']) && $realisation->id == 3)
                    @foreach ($jsonArray['ModernHouse'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- Facia --}}
                @elseif(isset($jsonArray['Facia']) && $realisation->id == 4)
                    @foreach ($jsonArray['Facia'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- building --}}
                @elseif(isset($jsonArray['building']) && $realisation->id == 5)
                    @foreach ($jsonArray['building'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- chambre --}}
                @elseif(isset($jsonArray['chambre']) && $realisation->id == 6)
                    @foreach ($jsonArray['chambre'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- maison --}}
                @elseif(isset($jsonArray['maison']) && $realisation->id == 7)
                    @foreach ($jsonArray['maison'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- cuisine --}}
                @elseif(isset($jsonArray['cuisine']) && $realisation->id == 8)
                    @foreach ($jsonArray['cuisine'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- gym --}}
                @elseif(isset($jsonArray['gym']) && $realisation->id == 9)
                    @foreach ($jsonArray['gym'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- comptoir --}}
                @elseif(isset($jsonArray['comptoir']) && $realisation->id == 10)
                    @foreach ($jsonArray['comptoir'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- Lavabeau --}}
                @elseif(isset($jsonArray['lavabeau']) && $realisation->id == 11)
                    @foreach ($jsonArray['lavabeau'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                    {{-- bain --}}
                @elseif(isset($jsonArray['bain']) && $realisation->id == 12)
                    @foreach ($jsonArray['bain'] as $imageSet)
                        @foreach ($imageSet as $url)
                            <div class="contain">
                                <img src="/img/{{ $url }}" alt="{{ $url }}" width="200px">
                            </div>
                        @endforeach
                    @endforeach
                @endif
            </div>
        </div>
    </main>



    <x-footer />
</x-layout>
