<script setup>
import { reactive } from 'vue'
import {Link, router} from '@inertiajs/vue3'

const form = reactive({
  name:null,
  email: null,
  password: null,
  password_confirmation: null,
})

const register = () => router.post(route('user-account.store'), form)

</script>

<template>
  <form @submit.prevent="register">
    <div class="w-1/2 mx-auto">
      <div>
        <label for="name" class="label">Name</label>
        <input id="name" v-model="form.name" type="text" class="input" />
        <div v-if="$attrs.errors.name" class="input-error">{{ $attrs.errors.name }}</div>
      </div>
      <div class="mt-4">
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
        <label for="password_confirmation" class="label">Confirm Password</label>
        <input id="password_confirmation" v-model="form.password_confirmation" type="password" class="input" />
      </div>
      <div class="mt-4">
        <button class="btn-primary w-full" type="submit">Create Account</button>
        <div class="mt-4 text-center">
          <Link :href="route('login')" class="text-sm text-gray-500">
            Already have an account ? Click here
          </Link>
        </div>
      </div>
    </div>
  </form>
</template>

<style scoped>

</style>
