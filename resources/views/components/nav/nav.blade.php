<nav>
    <div class="logo">
        <a href="{{ route('accueil') }}"><img src="/img/Group70.png" alt="Logo" width="250"></a>
    </div>

    <div class="nav">
        <a href="{{ route('accueil') }}" class="{{ Route::currentRouteName() === 'accueil' ? 'active' : '' }}">Accueil</a>

        <a href="{{ route('services') }}"
            class="{{ Route::currentRouteName() === 'services' ? 'active' : '' }}">Services</a>

        <a href="{{ route('realisations.index') }}"
            class="{{ Route::currentRouteName() === 'realisations.index' ? 'active' : '' }}">Réalisations</a>

        <a href="{{ route('a-propos') }}"
            class="{{ Route::currentRouteName() === 'a-propos' ? 'active' : '' }}">À-propos</a>

        <a href="{{ route('contact') }}"
            class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">Contact</a>
    </div>

    <div class="social-media">
        <div class="images">
            <a href="https://www.facebook.com/"><img src="/img/facebook.png" alt="facebook" width="25"></a>
            <a href="https://www.instagram.com/"><img src="/img/instagram.png" alt="facebook" width="25"></a>
        </div>
        <div class="bottom-line"></div>
    </div>


</nav>
