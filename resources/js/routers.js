import Vue from 'vue';
import Router from 'vue-router'
import create  from './components/Post/create.vue'

Vue.use(Router);

//    Vue.component('sadbar' , require('./components/Post/create.vue').default);
// Vue.component('navbar' , require('./components/layout/navbar.vue').default);



const routes  = [

{
    path: '/create'    ,
    name:  'create',
    component: create ,
}

 ]

const  router =  new Router({
    routes: routes ,
    mode: 'history'
})

export default router ;
