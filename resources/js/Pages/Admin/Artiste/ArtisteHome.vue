<template>
    <admin-layout>
        <div class="col-12">
            <div class="main__title">
                <h2>Artistes</h2>

                <span class="main__title-stat">14 452 total</span>

                <div class="main__title-wrap">
                    <!-- filter sort -->
                    <div class="filter" id="filter__sort">
                        <span class="filter__item-label">Trier par :</span>

                        <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="Date de création">
                            <span></span>
                        </div>

                        <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
                            <li>Date de creation</li>
                            <li>Titre</li>
                            <li>Artiste</li>
                            <li>Nombre de vues</li>
                        </ul>
                    </div>
                    <!-- end filter sort -->

                    <!-- search -->
                    <form action="#" class="main__title-form">
                        <input type="text" placeholder="Find movie / tv series..">
                        <button type="button">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8.25998" cy="8.25995" r="7.48191" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle><path d="M13.4637 13.8523L16.3971 16.778" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                    </form>
                    <!-- end search -->
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="main__table-wrap">
                <table class="main__table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOM ET PRENOM</th>
                        <th>NOM D'ARTISTE</th>
                        <th>DATE DE NAISSANCE</th>
                        <th>LIEU DE NAISSANCE</th>
                        <th>EMAIL</th>
                        <th>TEL</th>
                        <th>CREATED DATE</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-for="artiste in artistes">
                        <td>
                            <div class="main__table-text">{{ artiste.id }}</div>
                        </td>
                        <td>
                            <div class="main__table-text"><a href="#">{{ artiste.first_name + ' ' + artiste.last_name}}</a></div>
                        </td>
                        <td>
                            <div class="main__table-text main__table-text--rate">{{ artiste.artist_name }}</div>
                        </td>
                        <td>
                            <div class="main__table-text">{{ artiste.birthdate }}</div>
                        </td>
                        <td>
                            <div class="main__table-text">{{ artiste.birthplace }}</div>
                        </td>
                        <td>
                            <div class="main__table-text main__table-text--green">Visible</div>
                        </td>
                        <td>
                            <div class="main__table-text">24 Oct 2021</div>
                        </td>
                        <td>
                            <div class="main__table-btns">
                                <a target="_blank" :href="route('site.artiste.show', artiste.slug)" class="main__table-btn main__table-btn--view">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                    </svg>
                                </a>
                                <inertia-link :href="route('admin.artiste.edit', artiste.slug)" class="main__table-btn main__table-btn--edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"/></svg>
                                </inertia-link>
                                <a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end users -->

        <!-- paginator -->
        <div class="col-12">
            <div class="paginator">
                <span class="paginator__pages">10 from 14 452</span>

                <ul class="paginator__paginator">
                    <li>
                        <a href="#">
                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                        <a href="#">
                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end paginator -->

    </admin-layout>
</template>


<script>
import AdminLayout from "@/Layouts/AdminLayout";

export default {
    components : {
        AdminLayout
    },
    props : ['artistes']
}
</script>
