import { computed, ref } from 'vue'
import axios from 'axios'

const state = ref({ reset: false, id: 0 })

export function usePoll() {
  async function poll() {
    try {
      const response = await axios.get('http://localhost/weather')
      state.value.reset = response.status === 205
    } catch (error) {
      console.log(error)
    }
  }

  const start = () => {
    if (state.value.id === 0) {
      state.value.id = setInterval(poll, 150000)
      // state.value.id = setInterval(poll, 60000)
    }
  }

  const stop = () => {
    if (state.value.id !== 0) {
      clearInterval(state.value.id)
      state.value.id = 0
    }
  }

  const updateAvailable = computed(() => state.value.reset)

  return {
    updateAvailable,

    start,
    stop
  }
}
