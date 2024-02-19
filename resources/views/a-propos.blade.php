<x-layout titre="À-propos" css="{{ asset('css/a-propos.css') }}">
    <x-scroll />
    <x-nav.nav />

    <header>
        <div class="image-principale">
            <img src="/img/pexels-rdne-stock-project-8068694.jpg" alt="maison" width="500">
            <div class="overlay"></div>
            <div class="entete">
                <h1>Maison Prestige</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="contenue-offre">
            <div class="offre">
                <div class="grey-line"></div>
                <h2>Qui sommes-nous?</h2>
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

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed ac
                    blandit mauris.
                    Ut sit amet lectus sit amet justo ullamcorper auctor. Nulla facilisi. Sed eget odio
                    a augue condimentum luctus. Quisque id mauris in justo tincidunt tristique.
                    Proin nec justo a arcu vulputate accumsan. Nunc consequat, nulla vel volutpat
                    cursus, eros odio convallis dolor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed ac
                    blandit mauris.
                    Ut sit amet lectus sit amet justo ullamcorper auctor. Nulla facilisi. Sed eget odio
                    a augue condimentum luctus. Quisque id mauris in justo tincidunt tristique.
                    Proin nec justo a arcu vulputate accumsan. Nunc consequat, nulla vel volutpat
                    cursus, eros odio convallis dolor.</p>

            </div>
            <div>
                <img src="/img/pexels-thirdman-7652039.jpg" alt="contracteur" width="100">
            </div>
            <a href="{{ route('contact') }}" class="fixed">
                <div class="button-fixed ">
                    <p>Contacté nous!</p>
                </div>
            </a>
        </div>
    </main>
    <x-footer />
</x-layout>
