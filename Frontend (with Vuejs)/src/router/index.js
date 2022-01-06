import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home'
import Client from '../views/client'
import Ordonnance from '../views/ordonnance'
import NouveauClient from '../views/client/nouveauClient.vue'
import MesOrdonnances from '../views/client/mesOrdonnances.vue'
import NouveauOrdonnance from "../views/ordonnance/nouveauOrdonnance.vue"

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/clients',
    name: 'Client',
    component: Client
  },
  {
    path: '/ordonnance',
    name: 'Ordonnance',
    component: Ordonnance
  },
  {
    path: '/clients/nouveau',
    name: 'NouveauClient',
    component: NouveauClient
  },
  {
    path: '/clients/:id/ordonnances',
    name: 'mesOrdonnances',
    component: MesOrdonnances,
  },
  {
    path: '/clients/:id/nouveauOrdonnance',
    name: 'nouveauOrdonnance',
    component: NouveauOrdonnance,
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
