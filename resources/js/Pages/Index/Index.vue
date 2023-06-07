<script setup>
    import MainLayout from "../../Layouts/MainLayout.vue";
    import {Link} from '@inertiajs/vue3'
    defineProps({
        'message': String
    });
</script>

<template>
    <MainLayout>
        <div>Index</div>
        <p>{{message}}</p>
    </MainLayout>
</template>

<style scoped>

</style>
