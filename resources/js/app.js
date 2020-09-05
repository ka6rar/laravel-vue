import Vue from 'vue';
import 'bootstrap';
import router from './routers';
window.axios = require('axios');
import VueProgressBar from 'vue-progressbar'


import { Form, HasError, AlertSuccess } from 'vform'

let Fire = new Vue()
window.Fire = Fire;


window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertSuccess.name, AlertSuccess)




Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})



const app = new Vue({
    el: '#app',
    router ,
//    render: h => h(App)
});



// map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

