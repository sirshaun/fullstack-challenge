<script setup lang="ts">
import { computed } from 'vue'
import { useRoute, onBeforeRouteLeave } from 'vue-router'

import { useUserStore } from '@/stores/user'
import { usePoll } from '@/functions/poll-updates'

import UserList from '@/components/UserList.vue'
import SyncNotice from '@/components/OutdatedData.vue'

const userStore = useUserStore()
const route = useRoute()
const poll = usePoll()

onBeforeRouteLeave((from, to) => {
  if (to.name !== 'user') poll.stop()
})

const users = computed(() => userStore.users)
const meta = computed(() => userStore.meta)
const links = computed(() => userStore.links)
const loading = computed(() => userStore.loading)
const error = computed(() => userStore.error)
const syncData = computed(() => poll.updateAvailable.value)

userStore.fetchRecords(route.query.page, route.query)
poll.start()
</script>

<template>
  <main>
    <template v-if="error">
      <h3>{{ error }}</h3>
    </template>
    <template v-else>
      <sync-notice v-if="syncData" />

      <user-list
        v-if="!loading"
        :users="users"
        :meta="meta"
        :links="links"
        :loading="loading"
        :store="userStore"
      />

      <p v-else class="placeholder">loading ...</p>
    </template>
  </main>
</template>