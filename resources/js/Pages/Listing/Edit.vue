<script setup>
import {reactive} from 'vue'
import {router} from '@inertiajs/vue3'

const props = defineProps({
  listing: Object,
})

const form = reactive({
  beds:props.listing.beds,
  baths:props.listing.baths,
  area:props.listing.area,
  city:props.listing.city,
  street:props.listing.street,
  postcode:props.listing.postcode,
  street_nr:props.listing.street_nr,
  price:props.listing.price,
})

function update () {
  router.put(route('listing.update', {listing: props.listing.id}),form)
}
</script>

<template>
  <form @submit.prevent="update">
    <div>
      <label>Beds</label>
      <input v-model.number="form.beds" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.beds }}
      </div>
    </div>
    <div>
      <label>Baths</label>
      <input v-model.number="form.baths" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.baths }}
      </div>
    </div>
    <div>
      <label>Area</label>
      <input v-model.number="form.area" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.area }}
      </div>
    </div>
    <div>
      <label>City</label>
      <input v-model="form.city" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.city }}
      </div>
    </div>
    <div>
      <label>Street</label>
      <input v-model="form.street" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.street }}
      </div>
    </div>
    <div>
      <label>Post Code</label>
      <input v-model.number="form.postcode" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.postcode }}
      </div>
    </div>
    <div>
      <label>Street number</label>
      <input v-model.number="form.street_nr" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.street_nr }}
      </div>
    </div>
    <div>
      <label>Price</label>
      <input v-model.number="form.price" type="text" />
      <div v-if="$attrs.errors">
        {{ $attrs.errors.price }}
      </div>
    </div>
    <div>
      <button type="submit">Edit</button>
    </div>
  </form>
</template>

<style scoped>
label {
    margin-right: 2em;
}
div {
    padding: 2px
}
</style>
