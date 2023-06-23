<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  postcode: null,
  street_nr: null,
  price: 0,
})
function create  () {
  router.post('/listing', form)
}
</script>

<template>
  <form @submit.prevent="create">
    <div>
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
        <label>Post Code</label>
        <input v-model="form.postcode" type="text" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.code }}
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
        <label>Street Nr</label>
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
        <button type="submit" :disabled="form.processing">Create</button>
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
