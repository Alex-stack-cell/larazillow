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
  router.post(route('listing.store'), form)
}
</script>

<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Beds</label>
        <input v-model.number="form.beds" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.beds }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Baths</label>
        <input v-model.number="form.baths" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.baths }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Area</label>
        <input v-model.number="form.area" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.area }}
        </div>
      </div>

      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">City</label>
        <input v-model="form.city" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.city }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Post Code</label>
        <input v-model="form.postcode" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.code }}
        </div>
      </div>

      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Street</label>
        <input v-model="form.street" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.street }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Street Nr</label>
        <input v-model.number="form.street_nr" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.street_nr }}
        </div>
      </div>

      <div class="col-span-6">
        <label class="block mb-1 text-gray-500 dark:tet-gray-300 font-medium">Price</label>
        <input v-model.number="form.price" type="text" class="block w-full p-2 rounded-md shadow-sm border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="$attrs.errors">
          {{ $attrs.errors.price }}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" :disabled="form.processing" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">Create</button>
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
