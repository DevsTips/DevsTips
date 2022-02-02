import { createApp } from 'vue'
import App from '../../App.vue'
import '../style/bootstrap-4.1.3-dist/css/bootstrap.min.css'
//©import '../dist/css/bootstrap.min.css'

new Vue({
    render: h => h(App),
}).$mount('#app')

createApp(App).mount('#app')
