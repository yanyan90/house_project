<x-layout titre="Accueil" css="{{ asset('css/accueil.css') }}">
    <x-scroll />
    <x-nav.nav />
    <header>
        <div class="image-principale">
            <img src="/img/logo_make_11_06_2023_2.jpg" alt="maison" width="500">
            <div class="overlay"></div>
            <div class="entete">
                <h1>faite de votre rêve une <br> réalité!</h1>
                <a href="{{ route('services') }}"><button>découvrez nos services</button></a>
            </div>
            <div>
                <img src="#" alt="icon">
            </div>
        </div>
    </header>
    <main>
        <div class="contenue-pn">
            <div class="pq-nous wow fadeInLeftBig">
                <div class="grey-line"></div>
                <h2>Pourquoi nous?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed ac
                    blandit mauris.
                    Ut sit amet lectus sit amet justo ullamcorper auctor. Nulla facilisi. Sed eget odio
                    a augue condimentum luctus. Quisque id mauris in justo tincidunt tristique.
                    Proin nec justo a arcu vulputate accumsan. Nunc consequat, nulla vel volutpat
                    cursus, eros odio convallis dolor.
                </p>
                <a href="#"><button>Apprenez en plus sur notre entreprise <span class="material-symbols-outlined">
                            arrow_forward_ios
                        </span></button></a>
            </div>
            <div>
                <img class="wow fadeInRightBig" src="/img/pexels-andrea-piacquadio-3761508.jpg" alt="contracteur"
                    width="100">
            </div>
        </div>
        <div class="contenue-realisations">
            <div class="realisations wow fadeInLeftBig">
                <div class="grey-line"></div>
                <h2>Nos réalisations</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac blandit mauris.
                    Ut sit amet lectus sit amet justo ullamcorper auctor. Nulla facilisi. Sed eget odio
                    a augue condimentum luctus. Quisque id mauris in justo tincidunt tristique.
                    Proin nec justo a arcu vulputate accumsan. Nunc consequat, nulla vel volutpat
                    cursus, eros odio convallis dolor.
                </p>
                <a href="{{ route('realisations.index') }}"><button>Nos réalisations <span
                            class="material-symbols-outlined">
                            arrow_forward_ios
                        </span> </button></a>
            </div>

            <div>
                <img class="wow fadeInRightBig" src="/img/Group_701.jpg" alt="Réalisations" width="100">
            </div>
        </div>
    </main>
    <x-footer />
</x-layout>
