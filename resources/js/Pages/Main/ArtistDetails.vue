<template>
    <site-layout>
        {{ artiste }}
    </site-layout>
</template>

<script>
    import SiteLayout from "@/Layouts/SiteLayout";
    export default {
        components : {
            SiteLayout,
        },
        props : ['artiste']
    }
</script>
