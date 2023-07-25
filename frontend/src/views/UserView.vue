<script setup lang="ts">
import { computed } from 'vue'
import { useRoute } from 'vue-router'

import { useUserStore } from '@/stores/user'
import { usePoll } from '@/functions/poll-updates'

const userStore = useUserStore()
const route = useRoute()
const poll = usePoll()

const user = computed(() => userStore.user)
const meta = computed(() => userStore.meta)
const loading = computed(() => userStore.loading)
const syncData = computed(() => poll.updateAvailable.value)

userStore.fetchRecord(route.params.id)
poll.start()
</script>

<template>
  <main>
    <p v-if="syncData">
      You are currently viewing an outdated forecase report,
      please refresh your window to get the lastest data.
    </p>

    <section v-if="!loading">
      <h3>Weather at {{ user['coordinates'] }} for {{ user['name'] }}</h3>

      <p>Description: {{ user['weather']['description'] }}</p>
      <p>Temperature: {{ user['weather']['temperature'] }}F</p>
      <p>Humidity: {{ user['weather']['humidity'] }}%</p>
      <p>Wind speed: {{ user['weather']['wind_speed'] }}m/s</p>
      <p>Wind temp.: {{ user['weather']['wind_degrees'] }}F</p>
      <p>Feels like.: {{ user['weather']['actual_temperature'] }}F</p>
      <p>Clouds: {{ user['weather']['clouds'] }}%</p>
      <p>Pressure: {{ user['weather']['pressure'] }}hPa</p>
      <p>Sunrise: {{ user['weather']['sunrise'] }}</p>
      <p>Sunset: {{ user['weather']['sunset'] }}</p>
    </section>

    <p v-else>loading ...</p>
  </main>
</template>