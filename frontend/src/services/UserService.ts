import axios from 'axios'

export const apiClient = axios.create({
  baseURL: 'http://localhost:8000'
})

export default {
  fetchUsers(page: number, query: string) {
    return apiClient.get(`/user?page=${page}`, { params: query })
  },
  paginateUsers(link: string, query: string) {
    return apiClient.get(link, { params: query })
  },
  fetchUser(id: string) {
    return apiClient.get(`/user/${id}`)
  },
}
