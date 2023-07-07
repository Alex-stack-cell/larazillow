<script setup>
import {computed} from 'vue'

const props = defineProps({
  price: [Number, String],
})

// Assumptions website only available in fr and en countries
const websiteLanguages = ['fr-FR', 'en-US', 'en-UK']
const navigatorLanguages = navigator.languages

function findLocales(websiteLanguages, navigatorLanguages) {
  for (let i = 0; i < websiteLanguages.length; i++) {
    if (navigatorLanguages.includes(websiteLanguages[i])) {
      return websiteLanguages[i]
    }
  }
  return null
}
const userLocales = findLocales(websiteLanguages, navigatorLanguages)
const defaultLocales = 'en-US'
const defaultCurrency = 'USD'

const formattedPrice = computed(
  () => Number(props.price).toLocaleString(userLocales ? userLocales : defaultLocales, {
    style: 'currency',
    currency: userLocales ? 'EUR' : defaultCurrency,
    maximumFractionDigits: 2,
  }),
)

</script>

<template>
  <span>{{ formattedPrice }}</span>
</template>

<style scoped>

</style>
