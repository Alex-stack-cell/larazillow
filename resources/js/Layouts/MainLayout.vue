<script setup>
import {Link, usePage} from '@inertiajs/vue3'
import {ref, computed} from 'vue'

const timer = ref(0)
const page = usePage()
const flashSuccess = computed(() => {
  return page.props.flash.success
})
setInterval(() => timer.value++, 1000)
</script>

<template>
  <Link href="/listing">Listings</Link>&nbsp;
  <Link href="/listing/create">New listing</Link>
  <div>The page with time {{ timer }}</div>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Default Content if nothing provided</slot>
</template>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
