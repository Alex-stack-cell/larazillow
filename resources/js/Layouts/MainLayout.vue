<script setup>
    import {Link} from '@inertiajs/vue3'
</script>

<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>
    <slot>Default Content if nothing provided</slot>
</template>
