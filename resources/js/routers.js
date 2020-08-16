import Vue from 'vue';
import Router from 'vue-router'
import Test from './components/test.vue'



Vue.use(Router);

const routes  = [
{
    path: '/test' ,
    name: 'test'  ,
    component: Test
}
]

const  router =  new Router({
    routes: routes
})

export default router ;
