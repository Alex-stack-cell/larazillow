<script setup>

import {Link} from '@inertiajs/vue3'
import ListingAddress from '@/Components/ListingAddress.vue'
import Box from '@/Components/UI/Box.vue'
import Price from '@/Components/UI/Price.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import {useMonthlyPaymentJs} from '@/Composables/useMonthlyPayment.js.js'

const props = defineProps({
  listing: Object,
})
const {monthlyPayment} = useMonthlyPaymentJs(props.listing.price, 2.5, 25)
</script>

<template>
  <Box>
    <div>
      <Link :href="route('listing.show',{listing: listing.id})">
        <div class="flex items-center gap-1">
          <Price :price="listing.price" class="text-2xl font-bold" />
          <div class="text-xs text-gray-500">
            <Price :price="monthlyPayment" /> (monthly payment)
          </div>
        </div>
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-500" />
      </Link>
    </div>
    <div>
      <Link :href="route('listing.edit', {listing: listing.id})">Edit</Link>
    </div>
    <div>
      <Link :href="route('listing.destroy', {listing: listing.id})" method="delete" as="button">Delete</Link>
    </div>
  </Box>
</template>

<style scoped>

</style>
