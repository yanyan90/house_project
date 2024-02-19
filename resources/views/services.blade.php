<x-layout titre="Services" css="{{ asset('css/Services.css') }}">
    {{-- <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div> --}}
    <x-scroll />
    <x-nav.nav />
    <header>
        <div class="image-principale">
            <img src="/img/pexels-anamul-rezwan-1216544.jpg" alt="maison" width="500">
            <div class="overlay"></div>
            <div class="entete">
                <h1>Services</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="contenue-offre">
            <div class="offre">
                <div class="grey-line"></div>
                <h2>Ce que nous offrons</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed ac
                    blandit mauris.
                    Ut sit amet lectus sit amet justo ullamcorper auctor. Nulla facilisi. Sed eget odio
                    a augue condimentum luctus. Quisque id mauris in justo tincidunt tristique.
                    Proin nec justo a arcu vulputate accumsan. Nunc consequat, nulla vel volutpat
                    cursus, eros odio convallis dolor.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed ac
                    blandit mauris.
                    Ut sit amet lectus sit amet justo ullamcorper auctor. Nulla facilisi. Sed eget odio
                    a augue condimentum luctus. Quisque id mauris in justo tincidunt tristique.
                    Proin nec justo a arcu vulputate accumsan. Nunc consequat, nulla vel volutpat
                    cursus, eros odio convallis dolor.</p>

            </div>
            <div>
                <img src="/img/pexels-pixabay-53176.jpg" alt="contracteur" width="100">
            </div>
        </div>
        <div class="conteneur-total">
            <h2 class="h2 wow fadeInUp " data-wow-delay="0.3s">Finition intérieure</h2>
            <div class="conteneur-image2 wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($prduitsInterieurs as $produit)
                    <div class="contain">
                        <img src="/img/{{ $produit->image_url }}" alt="house" width="250px" height="200px">
                        <h5>{{ $produit->nom }}</h5>
                    </div>
                @endforeach
            </div>
            <h2 class="h2  wow fadeInUp">Finition extérieure</h2>
            <div class="conteneur-image2 wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($prduitsExterieurs as $produit)
                    <div class="contain">
                        <img src="/img/{{ $produit->image_url }}" alt="house" width="250px" height="200px">
                        <h5>{{ $produit->nom }}</h5>
                    </div>
                @endforeach
            </div>
        </div>


    </main>



    <x-footer />
</x-layout>
