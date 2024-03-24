import Dashboard from "../vue/dashboard.vue";



import NotFound from '../vue/Pages/404.vue'

const routes = [
    { path: '/guadalupe-reports/dashboard', name: 'guadalupe-reports.index', component: Dashboard },



    { path: '/guadalupe-reports/not-found/:pathMatch(.*)*', name: 'purchase.not-found', component: NotFound },
]

export default routes
