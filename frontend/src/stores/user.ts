import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

import UserService from '@/services/UserService'

export const useUserStore = defineStore('users', () => {
  const state = ref({
    /** @type {{ name: string, email: string, latitude: string, longitude: string, weather: object }[]} */
    user: { name: '', email: '', latitude: '', longitude: '', weather: {} },
    /** @type {{ name: string, email: string, latitude: string, longitude: string, weather: object }[]} */
    users: [],
    /** @type {current_page: int, from: int, last_page: int, links: {url: string, label: string, active: boolean}[]} */
    meta: { current_page: 1, from: 1, last_page: 1, links: [] },
    /** @type {first: string, last: string, prev: string, next: string} */
    links: { first: '', last: '', prev: '', next: '' },
    /** @type {boolean} */
    loading: false,
    /** @type {object} */
    error: {},
  })

  const users = computed(() => state.value.users)
  const user = computed(() => state.value.user)
  const links = computed(() => state.value.links)
  const meta = computed(() => state.value.meta)
  const loading = computed(() => state.value.loading)
  const error = computed(() => state.value.error)

  function fetchRecords(page: any, query: any) {
    state.value.loading = true
    UserService.fetchUsers(page, query)
    .then(response => {
      state.value.users = response.data.data
      state.value.meta = response.data.meta
      state.value.links = response.data.links
    })
    .catch(error => {
      state.value.error = getError(error)
    })
    .finally(() => {
      state.value.loading = false
    })
  }
  async function paginateRecords(url: string, query: string) {
    state.value.loading = true
    try {
      const response = await UserService.paginateUsers(url, query)
      state.value.users = response.data.data
      state.value.meta = response.data.meta
      state.value.links = response.data.links
    } catch (error) {
      state.value.error = getError(error)
    } finally {
      state.value.loading = false
    }
  }
  function fetchRecord(id: any) {
    state.value.loading = true
    UserService.fetchUser(id)
    .then(response => {
      state.value.user = response.data.data
      state.value.meta = response.data.meta
    })
    .catch(error => {
      state.value.error = getError(error)
    })
    .finally(() => {
      state.value.loading = false
    })
  }

  const getError = (error: any) => {
    const errorMessage = error['response']?.['data'] || 'API Error, please try again.'

    if (!error.response) {
      console.error(`API ${error['config']?.['url']} not found`)
      return errorMessage
    }

    if (process.env.NODE_ENV === 'development') {
      console.error(error.response.data)
      console.error(error.response.status)
      console.error(error.response.headers)
    }

    return errorMessage
  }

  return {
    users,
    user,
    links,
    meta,
    loading,
    error,

    fetchRecords,
    paginateRecords,
    fetchRecord,
  }
})
