import Vue from 'vue';
import 'bootstrap';
import router from './routers';
import App  from    './components/Post/create'



import { Form, HasError, AlertError } from 'vform'

window.Form = Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)




const app = new Vue({
    el: '#app',
    router ,
//    render: h => h(App)
});



// map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

