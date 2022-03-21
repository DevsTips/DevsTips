import { createApp } from 'vue'
import Vue from 'vue'
import App from './App.vue'
import '../src/assets/style/bootstrap-4.1.3-dist/css/bootstrap.min.css'

new Vue({
    render: h => h(App),
}).$mount('#app')

//createApp(App).mount('#app') 
