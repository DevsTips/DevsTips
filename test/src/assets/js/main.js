import { createApp } from 'vue'
import App from '../../App.vue'
import 'bootstrap/dist/css/bootstrap.min.css'

new Vue({
    render: h => h(App),
}).$mount('#app')

 createApp(App).mount('#app')
