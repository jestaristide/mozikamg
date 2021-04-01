<template>
    <admin-layout>
        <div class="col-12">
            <div class="main__title">
                <h2>Artistes</h2>
            </div>
            <div class="col-12">
                <form @submit="update" action="#" class="form">
                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Upload Profil (190 x 270)</label>
                                        <input id="form__img-upload" name="form__img-upload" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" v-model="toUpdateArtiste.artist_name" class="form__input" placeholder="Nom de scene" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Nom" v-model="toUpdateArtiste.first_name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Prénoms" v-model="toUpdateArtiste.last_name">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="date" class="form__input" placeholder="Date de naissance" v-model="toUpdateArtiste.birthdate">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Lieu de naissance" v-model="toUpdateArtiste.birthplace">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea type="text" class="form__textarea" placeholder="Description" v-model="toUpdateArtiste.description"></textarea>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Adresse" v-model="toUpdateArtiste.address">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Email" v-model="toUpdateArtiste.email">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="tel" class="form__input" placeholder="Téléphone" v-model="toUpdateArtiste.tel">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Tags" v-model="toUpdateArtiste.tag">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__gallery">
                                        <label id="gallery1" for="form__gallery-upload">Upload photos</label>
                                        <input data-name="#gallery1" id="form__gallery-upload" name="gallery" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="form__btn">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </admin-layout>
</template>


<script>
    import AdminLayout from "@/Layouts/AdminLayout";
    import Input from "@/Jetstream/Input";
    export default {
        components: {
            Input,
            AdminLayout
        },
        props: ['toUpdateArtiste'],
        data() {
            return {
                //toUpdateArtiste: {}
            }
        },
        methods : {
            update (e) {
                e.preventDefault()
                console.log(this.toUpdateArtiste)
                this.$inertia.put('/artiste/'+ this.toUpdateArtiste.slug, this.toUpdateArtiste)
            },
        },
        created () {
            //this.toUpdateArtiste = this.artiste
        }
    }
</script>
