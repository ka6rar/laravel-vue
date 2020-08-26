import Vue from 'vue';
import 'bootstrap';
import router from './routers';
import App  from    './components/Post/create'



import { Form, HasError, AlertSuccess } from 'vform'

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertSuccess.name, AlertSuccess)




const app = new Vue({
    el: '#app',
    router ,
//    render: h => h(App)
});



// map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

