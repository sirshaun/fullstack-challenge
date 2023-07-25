<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <div class="wrapper">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <template v-if="$route.name === 'user'">
          >
          <RouterLink to="/users">Users</RouterLink>
        </template>
      </nav>
    </div>
  </header>
  <RouterView />
</template>

<style scoped>
</style>