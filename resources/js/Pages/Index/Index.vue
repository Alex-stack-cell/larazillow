<script setup>
    import {Link} from '@inertiajs/vue3'
    defineProps({
        'message': String
    });
</script>

<template>
    <div>Index</div>
    <Link href="/show">Show Page</Link>
    <p>{{message}}</p>
</template>

<style scoped>

</style>
