import { createApp } from 'vue'
import App from './App.vue'
import Vue from 'vue'

Vue.config.procutionTip = false

new Vue({
    render: h => h(App),
}).$mount('#app')

createApp(App).$mount('#app')