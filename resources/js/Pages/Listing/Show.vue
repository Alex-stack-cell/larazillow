<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'
import Price from '@/Components/UI/Price.vue'
import ListingSpace from '@/Components/ListingSpace.vue'

defineProps({
  listing: Object,
})
</script>

<template>
  <div>
    <Price :price="listing.price" class="text-2xl font-bold" />
    <ListingSpace :listing="listing" class="text-lg" />
    <ListingAddress :listing="listing" /> ${{ listing.price }}
  </div>
</template>
