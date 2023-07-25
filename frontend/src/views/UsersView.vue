<script setup lang="ts">
import { computed } from 'vue'
import { useRoute } from 'vue-router'

import { useUserStore } from '@/stores/user'
import { usePoll } from '@/functions/poll-updates'

import UserList from '@/components/UserList.vue'

const userStore = useUserStore()
const route = useRoute()
const poll = usePoll()

const users = computed(() => userStore.users)
const meta = computed(() => userStore.meta)
const links = computed(() => userStore.links)
const loading = computed(() => userStore.loading)
const error = computed(() => userStore.error)
const syncData = computed(() => poll.updateAvailable.value)

userStore.fetchRecords(route.query.page, route.query)
poll.start()
console.log(error.value)
</script>

<template>
  <main>
    <template v-if="error">
      <h3>{{ error }}</h3>
    </template>
    <template v-else>
      <p v-if="syncData">
        You are currently viewing an outdated forecast report,
        please refresh your window to get the latest data.
      </p>

      <user-list
        v-if="!loading"
        :users="users"
        :meta="meta"
        :links="links"
        :loading="loading"
        :store="userStore"
      ></user-list>

      <p v-else class="placeholder">loading ...</p>
    </template>
  </main>
</template>