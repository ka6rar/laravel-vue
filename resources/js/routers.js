import Vue from 'vue';
import Router from 'vue-router'
import Test from './components/test.vue'
import Test2 from './components/test1.vue'
import login  from './components/Auth/singup.vue'
Vue.use(Router);

const routes  = [
{
    path: '/test' ,
    name: 'test'  ,
    component: Test
},
{
    path: '/test1',
    name: 'test1' ,
    component: Test2
},
{
    path: '/singup' ,
    name: 'singup'    ,
    component: login
}
]

const  router =  new Router({
    routes: routes ,
    linkActiveClass: 'active' ,
    mode: 'history'
})

export default router ;
