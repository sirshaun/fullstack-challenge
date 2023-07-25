<script setup lang="ts">
import PageLinks from './SimplePagination.vue'

defineProps({
  users: { type: Array, required: true },
  meta: { type: Object, required: true },
  links: { type: Object, required: true },
  loading: { type: Boolean, default: false },
  store: { type: Object, required: true },
})
</script>

<template>
  <section>
    <h3>Users</h3>

    <table class="table-auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Location</th>
          <th>Weather</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user['id']">
          <td>{{ user['name'] }}</td>
          <td>{{ user['email'] }}</td>
          <td>
            {{ user['weather']['timezone'] }}
            <div>
              ({{ user['latitude'] }}, {{ user['longitude'] }})
            </div>
          </td>
          <td>
            {{ user['weather']['description'] }}
            <div>
              humidity: {{ user['weather']['humidity'] }} | temp: {{ user['weather']['temperature'] }}
            </div>
          </td>
          <td>
            <router-link
              :to="{ name: 'user', params: {id: user['id'] }}"
              :disabled="loading"
            >
              View
            </router-link>
          </td>
        </tr>
      </tbody>
    </table>

    <PageLinks
      v-if="meta && meta.last_page > 1"
      :meta="meta"
      :links="links"
      :loading="loading"
      :store="store"
      path="/users"
    />
  </section>
</template>