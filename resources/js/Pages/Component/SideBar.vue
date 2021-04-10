<template>
    <div class="col-xl-4 col-12">
        <form action="#" class="subscribe">
            <div class="subscribe__img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.64,9.74l-.29,1.73A1.55,1.55,0,0,0,14,13a1.46,1.46,0,0,0,1.58.09L17,12.28l1.44.79A1.46,1.46,0,0,0,20,13a1.55,1.55,0,0,0,.63-1.51l-.29-1.73,1.2-1.22a1.54,1.54,0,0,0-.85-2.6l-1.62-.24-.73-1.55a1.5,1.5,0,0,0-2.72,0l-.73,1.55-1.62.24a1.54,1.54,0,0,0-.85,2.6Zm1.83-2.13a1.51,1.51,0,0,0,1.14-.85L17,5.93l.39.83a1.55,1.55,0,0,0,1.14.86l1,.14-.73.74a1.57,1.57,0,0,0-.42,1.34l.16,1-.79-.43a1.48,1.48,0,0,0-1.44,0l-.79.43.16-1a1.54,1.54,0,0,0-.42-1.33l-.73-.75ZM21,15.26a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.88a2.94,2.94,0,0,0,2.1.88l.27,0a1,1,0,0,0,.91-1.08,1,1,0,0,0-1.09-.91.94.94,0,0,1-.77-.28L5.41,8.26H9a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Z"></path></svg>
            </div>
            <h4 class="subscribe__title">Newsletter</h4>
            <p class="subscribe__text">Souscrivez-vous pour recevoir tous nos nouveautés et actualités</p>
            <div class="sign__group">
                <input type="text" class="sign__input" placeholder="Email">
            </div>
            <button type="button" class="sign__btn">Envoyer</button>
        </form>



        <div class="row row--grid">
            <div class="col-12">
                <h5 class="sidebar__title">Musiques ajoutés recemments</h5>
            </div>

            <div class="col-12 card">
                <div class="row list_widget">
                    <div class="col-4">
                        <a href="details.html" class="card__cover">
                            <img src="https://picsum.photos/640/640" alt="">
                        </a>
                    </div>
                    <div class="col-8">
                        <h5 class=""><a href="details.html">Selfie</a></h5>
                        <p>Wendy Cathalina & Rebecca <br>26/03/2021</p>
                    </div>
                </div>
            </div>
            <div class="col-12 card">
                <div class="row list_widget">
                    <div class="col-4">
                        <a href="details.html" class="card__cover">
                            <img src="https://picsum.photos/640/640" alt="">
                        </a>
                    </div>
                    <div class="col-8">
                        <h5 class=""><a href="details.html">Selfie</a></h5>
                        <p>Wendy Cathalina & Rebecca <br>26/03/2021</p>
                    </div>
                </div>
            </div>
            <div class="col-12 card">
                <div class="row list_widget">
                    <div class="col-4">
                        <a href="details.html" class="card__cover">
                            <img src="https://picsum.photos/640/640" alt="">
                        </a>
                    </div>
                    <div class="col-8">
                        <h5 class=""><a href="details.html">Selfie</a></h5>
                        <p>Wendy Cathalina & Rebecca <br>26/03/2021</p>
                    </div>
                </div>
            </div>
            <div class="col-12 card">
                <div class="row list_widget">
                    <div class="col-4">
                        <a href="details.html" class="card__cover">
                            <img src="https://picsum.photos/640/640" alt="">
                        </a>
                    </div>
                    <div class="col-8">
                        <h5 class=""><a href="details.html">Selfie</a></h5>
                        <p>Wendy Cathalina & Rebecca <br>26/03/2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>
.list_widget, .list_widget h5, .list_widget a {
    color: #fefefe;
}
</style>
