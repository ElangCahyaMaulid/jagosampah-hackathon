import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue'
import Lapor from '../pages/Lapor.vue'
import Leaderboard from '../pages/Leaderboard.vue'
import Dashboard from '../pages/Dashboard.vue'
import Redeem from '../pages/Redeem.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/lapor', component: Lapor },
  { path: '/leaderboard', component: Leaderboard },
  { path: '/dashboard', component: Dashboard },
  { path: '/redeem', component: Redeem },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
