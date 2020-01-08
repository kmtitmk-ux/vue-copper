import Vue from 'vue'
import 'bootstrap-css-only'

import Croppa from 'vue-croppa'
import 'vue-croppa/dist/vue-croppa.css'
Vue.use(Croppa)

Vue.component('croppa-component', require('./components/CroppaComponent.vue').default)

var vm = new Vue({
  el: '#app'
})