import Vue from 'vue';
import App from './App.vue'
import 'bootstrap';
import router from './routers';

const app = new Vue({
    el: '#app',
    router ,
    // render: h => h(App)
});



// map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

