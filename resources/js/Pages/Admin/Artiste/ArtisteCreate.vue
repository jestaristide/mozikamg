<template>
    <admin-layout>
        <div class="col-12">
            <div class="main__title">
                <h2>Artistes</h2>
            </div>
            <div class="col-12">
                <form @submit="save" action="#" class="form">
                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Upload Profil (190 x 270)</label>
                                        <input @change="presaveProfil" id="form__img-upload" name="form__img-upload" type="file" v-model="profil" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" v-model="newArtiste.artist_name" class="form__input" placeholder="Nom de scene" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Nom" v-model="newArtiste.first_name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Prénoms" v-model="newArtiste.last_name">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="date" class="form__input" placeholder="Date de naissance" v-model="newArtiste.birthdate">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Lieu de naissance" v-model="newArtiste.birthplace">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea type="text" class="form__textarea" placeholder="Description" v-model="newArtiste.description"></textarea>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Adresse" v-model="newArtiste.address">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Email" v-model="newArtiste.email">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="tel" class="form__input" placeholder="Téléphone" v-model="newArtiste.tel">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Tags" v-model="newArtiste.tag">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__gallery">
                                        <label id="gallery1" for="form__gallery-upload">Upload photos</label>
                                        <input v-model="cover" @change="presaveCover" data-name="#gallery1" id="form__gallery-upload" name="gallery" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple="">
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
        props: ['artistes'],
        data() {
            return {
                newArtiste: {},
                profil: {},
                cover: {}
            }
        },
        methods : {
            save (e) {
                e.preventDefault()
                this.newArtiste.slug = this.sanitizeTitle(this.newArtiste.artist_name)
                console.log(this.newArtiste,this.profil, this.cover)
                this.$inertia.post('/artiste', this.newArtiste)
            },

            sanitizeTitle: function(title) {
                var slug = "";
                // Change to lower case
                var titleLower = title.toLowerCase();
                // Letter "e"
                slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
                // Letter "a"
                slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
                // Letter "o"
                slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
                // Letter "u"
                slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
                // Letter "d"
                slug = slug.replace(/đ/gi, 'd');
                // Trim the last whitespace
                slug = slug.replace(/\s*$/g, '');
                // Change whitespace to "-"
                slug = slug.replace(/\s+/g, '-');

                return slug;
            },
            presaveCover(e) {
                this.newArtiste.cover = e.target.files[0]
                console.log(e.target.files[0])
            },

            presaveProfil(e){
                this.newArtiste.profil = e.target.files[0]
                console.log(e.target.files[0])
            }
        }
    }
</script>
