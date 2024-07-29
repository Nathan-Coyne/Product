import { createMemoryHistory, createRouter } from 'vue-router'

import index from './pages/HomeView.vue'

const routes = [
    { path: '', name: 'home', component: index },
]

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

export default router