<script setup>
import {reactive} from 'vue'
import {Inertia} from '@inertiajs/vue3/types/app.js'

const form = reactive({
  beds:0,
  baths:0,
  area:0,
  city:null,
  street:null,
  postcode:null,
  street_nr:null,
  price:null,
})

const create = () => Inertia.post('/listing', form)

</script>

<template>
  <form>
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
      </div>

      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="text" />
      </div>

      <div>
        <label>Area</label>
        <input v-model.number="form.area" type="text" />
      </div>

      <div>
        <label>City</label>
        <input v-model="form.city" type="text" />
      </div>

      <div>
        <label>Post code</label>
        <input v-model.number="form.postcode" type="text" />
      </div>

      <div>
        <label>Street</label>
        <input v-model="form.street" type="text" />
      </div>

      <div>
        <label>Street Number</label>
        <input v-model.number="form.street_nr" type="text" />
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
      </div>

      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px;
}
</style>
