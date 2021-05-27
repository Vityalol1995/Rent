
const routes = [
  {
    path: '/',
    component: () => import('../pages/Home')
  },
  {
    path: '/Tenant',
    component: () => import('../pages/Tenant')
  },
  {
    path: '/MobileApp',
    component: () => import('../pages/MobileApp')
  },
  {
    path: '/ObjectPage/:id',
    component: () => import('../pages/ObjectPages'),
    props: true
  },
  {
    path: '/AllObject',
    component: () => import('../pages/AllObjects')
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
