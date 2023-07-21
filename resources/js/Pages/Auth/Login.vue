<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  email: null,
  password: null,
})

const login = () => router.post(route('login.store'), form)

</script>

<template>
  <form @submit.prevent="login">
    <div class="w-1/2 mx-auto">
      <div>
        <label for="email" class="label">Email</label>
        <input id="email" v-model="form.email" type="text" class="input" />
        <div v-if="$attrs.errors.email" class="input-error">{{ $attrs.errors.email }}</div>
      </div>
      <div class="mt-4">
        <label for="password" class="label">Password</label>
        <input id="password" v-model="form.password" type="password" class="input" />
        <div v-if="$attrs.errors.password" class="input-error">{{ $attrs.errors.password }}</div>
      </div>
      <div class="mt-4">
        <button class="btn-primary w-full" type="submit">Login</button>
      </div>
    </div>
  </form>
</template>

<style scoped>

</style>
