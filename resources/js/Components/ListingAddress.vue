<script setup>
defineProps({
  listing: Object,
})
</script>

<template>
  <span>
    {{ listing.city }} {{ listing.area }} {{ listing.postcode }} {{ listing.street }} {{ listing.street_nr }}
  </span>
</template>
