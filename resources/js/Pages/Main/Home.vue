<template>
    <site-layout>
        <!-- head -->
        <section class="section section--head section--head-fixed">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <h1 class="section__title section__title--head">Pricing plans</h1>
                    </div>

                    <div class="col-12 col-xl-6">
                        <ul class="breadcrumb">
                            <li class="breadcrumb__item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb__item breadcrumb__item--active">P</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end head -->
    </site-layout>
</template>


<script>
    import SiteLayout from "@/Layouts/SiteLayout";
    export default {
        components : {
            SiteLayout
        },
        mounted() {
            document.title = 'Liste des utilisateurs | Lamozika'
        }
    }
</script>
