import Vue from 'vue';
import Router from 'vue-router'

import create  from './components/Post/create.vue'
import index  from './components/Post/index.vue'

Vue.use(Router);


const routes  = [

{
    path: '/create'    ,
    name:  'create',
    component: create ,
},
{
    path: '/index'   ,
    name:  'index'    ,
    component: index

}

 ]

const  router =  new Router({
    routes: routes ,
    mode: 'history'
})

export default router ;
