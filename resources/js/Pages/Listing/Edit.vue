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
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Beds</label>
        <input v-model.number="form.beds" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.beds }}
        </div>
      </div>
      <div class="col-span-2">
        <label class="label">Baths</label>
        <input v-model.number="form.baths" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.baths }}
        </div>
      </div>
      <div class="col-span-2">
        <label class="label">Area</label>
        <input v-model.number="form.area" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.area }}
        </div>
      </div>
      <div class="col-span-4">
        <label class="label">City</label>
        <input v-model="form.city" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.city }}
        </div>
      </div>
      <div class="col-span-2">
        <label class="label">Post Code</label>
        <input v-model.number="form.postcode" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.postcode }}
        </div>
      </div>
      <div class="col-span-4">
        <label class="label">Street</label>
        <input v-model="form.street" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.street }}
        </div>
      </div>
      <div class="col-span-2">
        <label class="label">Street number</label>
        <input v-model.number="form.street_nr" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.street_nr }}
        </div>
      </div>
      <div class="col-span-6">
        <label class="label">Price</label>
        <input v-model.number="form.price" type="text" class="input" />
        <div v-if="$attrs.errors" class="input-error">
          {{ $attrs.errors.price }}
        </div>
      </div>
      <div class="col-span-6">
        <button type="submit" class="btn-primary">Edit</button>
      </div>
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
