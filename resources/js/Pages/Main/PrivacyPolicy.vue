<template>
    <site-layout>
        <!-- head -->
        <section class="section section--head section--head-fixed">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <h1 class="section__title section__title--head">Politique d'utilisation</h1>
                    </div>

                    <div class="col-12 col-xl-6">
                        <ul class="breadcrumb">
                            <li class="breadcrumb__item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb__item breadcrumb__item--active">Politique d'utilisation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end head -->

        <section class="section section--head section--head-fixed article__content">
            <div class="container">
                <div class="row">
                    <div class="col-12 policy">
                        <h2 class="">ARTICLE 1 : PRÉAMBULE</h2>
                        <p class="section__text">Cette politique de confidentialité s'applique au site : <inertia-link :href="route('site.index')">https://lamozika.mg</inertia-link></p>
                        <p class="section__text">
                            La présente politique de confidentialité a pour but d'exposer aux utilisateurs du site :
                        </p>
                        <div class="section__list">
                            <ol>
                                <li>La manière dont sont collectées et traitées leurs données à caractère personnel. Doivent
                                    être considérées comme données personnelles toutes les données étant susceptibles
                                    d'identifier un utilisateur. Il s'agit notamment du prénom et du nom, de l'âge, de
                                    l'adresse postale, l'adresse mail, la localisation de l'utilisateur ou encore son
                                    adresse IP ;
                                </li>
                                <li>Quels sont les droits des utilisateurs concernant ces données ;</li>
                                <li>Qui est responsable du traitement des données à caractère personnel collectées et
                                    traitées ;
                                </li>
                                <li>A qui ces données sont transmises ;</li>
                                <li>Eventuellement, la politique du site en matière de fichiers "cookies".</li>
                            </ol>
                        </div>

                        <p class="section__text">
                            Cette politique de confidentialité complète les mentions légales et les Conditions Générales d'Utilisation que les utilisateurs peuvent consulter à l'adresse ci-après : <inertia-link :href="route('site.index')">https://lamozika.mg</inertia-link>
                        </p>

                        <h2>ARTICLE 2 : PRINCIPES GÉNÉRAUX EN MATIÈRE DE COLLECTE ET DE TRAITEMENT DE DONNÉES</h2>
                        <p class="section__text">
                            Conformément aux dispositions de l'article 5 du Règlement européen 2016/679, la collecte et le traitement des données des utilisateurs du site respectent les principes suivants :
                        </p>

                        <div class="section__list">

                            <ul>
                                <li>Licéité, loyauté et transparence : les données ne peuvent être collectées et
                                    traitées qu'avec le consentement de l'utilisateur propriétaire des données. A chaque
                                    fois que des données à caractère personnel seront collectées, il sera indiqué à
                                    l'utilisateur que ses données sont collectées, et pour quelles raisons ses données
                                    sont collectées ;
                                </li>
                                <li>Finalités limitées : la collecte et le traitement des données sont exécutés pour
                                    répondre à un ou plusieurs objectifs déterminés dans les présentes conditions
                                    générales d'utilisation ;
                                </li>
                                <li>Minimisation de la collecte et du traitement des données : seules les données
                                    nécessaires à la bonne exécution des objectifs poursuivis par le site sont
                                    collectées ;
                                </li>
                                <li>Conservation des données réduites dans le temps : les données sont conservées pour
                                    une durée limitée, dont l'utilisateur est informé. Lorsque cette information ne peut
                                    pas être communiquée, l'utilisateur est informé des critères utilisés pour
                                    déterminer la durée de conservation ;
                                </li>
                                <li>Intégrité et confidentialité des données collectées et traitées : le responsable du traitement des données s'engage à garantir l'intégrité et la confidentialité des données collectées.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </site-layout>
</template>

<script>
    import SiteLayout from "@/Layouts/SiteLayout";
    export default {
        components : {
            SiteLayout,
        }
    }
</script>

<style>
    .policy {
        color: white;
    }

    p, h2{
        margin-top: 20px;
    }
</style>
