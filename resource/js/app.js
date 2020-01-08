import Vue from 'vue'
import 'bootstrap-css-only'

Vue.component('croppa-component', require('./components/CroppaComponent.vue').default)

var vm = new Vue({
  el: '#app'
})