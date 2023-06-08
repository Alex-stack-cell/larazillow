<script>
import MainLayout from "../../Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
}
</script>

<script setup>
defineProps({
    'message': String
});
</script>

<template>
    <div>Index</div>
    <p>{{message}}</p>
</template>

<style scoped>

</style>
