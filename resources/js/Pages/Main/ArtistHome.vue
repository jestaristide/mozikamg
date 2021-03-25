<template>
    <site-layout>

        <!-- head -->
        <section class="section section--head section--head-fixed">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <h1 class="section__title section__title--head">Artistes</h1>
                    </div>

                    <div class="col-12 col-xl-6">
                        <ul class="breadcrumb">
                            <li class="breadcrumb__item"><a :href="route('site.index')">Home</a></li>
                            <li class="breadcrumb__item breadcrumb__item--active">Artistes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end head -->

        <!-- categories -->
        <section class="section section--pb0">
            <div class="container">
                <div class="row row--grid">
                    <div v-for="artiste in artistes" class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <a :href="route('site.artiste.show', {'slug':artiste.slug})" class="category">
                            <div class="category__cover">
                                <img :src="artiste.profil_link" alt="">
                            </div>
                            <h3 class="category__title">{{ artiste.artist_name}}</h3>
                            <span class="category__value">322</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{ artistes}}
    </site-layout>
</template>

<script>
    import SiteLayout from "@/Layouts/SiteLayout";
    export default {
        components : {
            SiteLayout,
        },
        props: ['artistes']
    }
</script>
