<script setup lang="ts">
import { computed } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const props = defineProps({
  path: { type: String, default: null },
  meta: { type: Object, required: true },
  links: { type: Object, required: true },
  loading: { type: Boolean, default: false },
  store: { type: Object, required: true },
})

const prevPage = () => {
  props.store.paginateRecords(props.links.prev, query.value)
    .then(() => {
      if (props.path) {
        router.push({
          path: props.path,
          query: { page: props.meta.current_page },
        })
      }
    })
}
const nextPage = () => {
  props.store.paginateRecords(props.links.next, query.value)
    .then(() => {
      if (props.path) {
        router.push({
          path: props.path,
          query: { page: props.meta.current_page },
        })
      }
    })
}

const query = computed(() => router.currentRoute.value.query?.query || '')
</script>

<template>
  <nav aria-label="Pagination">
    <div>
      <p>
        Showing
        {{ ' ' }}
        <span>{{ meta.from }}</span>
        {{ ' ' }}
        to
        {{ ' ' }}
        <span>{{ meta.to }}</span>
        {{ ' ' }}
        of
        {{ ' ' }}
        <span>{{ meta.total }}</span>
        {{ ' ' }}
        results
      </p>
    </div>
    <div>
      <button
        @click="prevPage"
        v-if="links.prev"
        rel="prev"
        type="button"
        :disabled="loading"
      >
        Previous
      </button>
      <button
        @click="nextPage"
        v-if="links.next"
        rel="prev"
        type="button"
        :disabled="loading"
      >
        Next
      </button>
    </div>
  </nav>
</template>
