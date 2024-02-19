<x-layout titre="contact" css="{{ asset('css/contact.css') }}">
    <x-nav.nav />
    <header>
        <div class="contenue-offre">
            <div class="offre">
                <div class="grey-line"></div>
                <h2>Contactez-nous</h2>
                <p>Téléphonez ou écrivez-nous dès aujourd'hui pour une soumission.</p>
                <p class="telephone">1 800 222-2356</p>
                <p class="courriel">JohnDucker@exemple.com</p>
            </div>
            <div>
                <img src="/img/workers.png" alt="contracteur" width="100">
            </div>
        </div>
    </header>
    <main>

        <div class="formulaire">
            <form action="{{ route('soumission.store') }}" method="post">
                @csrf
                <div class="boite nom">
                    <label for="nom">Nom</label><br>
                    <input class="large" type="text" id="nom" name="nom">
                </div>

                <div class="boite email">
                    <label for="email">Courriel</label><br>
                    <input class="large" type="email" name="email">
                </div>

                <div class="texte">
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>

                <div class="button"><input class="submit" type="submit" value="Soumettre"></div>
            </form>
        </div>
    </main>

</x-layout>
