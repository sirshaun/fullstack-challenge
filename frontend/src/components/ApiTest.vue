<script setup lang="ts">
import { ref } from 'vue'

const fetchData = async () => {
  try {
    const url = 'http://localhost/user?paginate=no'
    const response = await fetch(url)
    if (response.status === 502) {
      // bad gateway - show alert
      apiResponse.value = 'Weather API is currently unavailable.'
    } else if (response.status === 500) {
      // server error - show alert
      apiResponse.value = 'Weather API is currently unavailable.'
    } else if (response.ok) {
      apiResponse.value = await response.json()
    }
  } catch (error) {
    console.log(error)
  }
}
const apiResponse = ref()

fetchData()
</script>

<template>
  <div v-if="!apiResponse" class="placeholder">Pinging the api...</div>

  <div v-if="apiResponse" class="content">
    The api responded with: <br />
    <code>
      {{ apiResponse }}
    </code>

    <br />
    <br />
    <router-link :to="{ name: 'users' }">
      View Users
    </router-link>
  </div>
</template>