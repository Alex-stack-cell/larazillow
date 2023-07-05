<script setup>
defineProps({
  listing:Object,
})
</script>

<template>
  <div>
    <span class="font-bold">{{ listing.beds }} beds </span>
    <span class="text-gray-400">|</span>&nbsp;
    <span class="font-bold">{{ listing.baths }} baths </span>
    <span class="text-gray-400">|</span>&nbsp;
    <span class="font-bold">{{ listing.area }} m² </span>
  </div>
</template>

<style scoped>

</style>
