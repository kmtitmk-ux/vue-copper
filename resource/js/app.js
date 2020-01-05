import Vue from 'vue'
import Croppa from 'vue-croppa'
import 'vue-croppa/dist/vue-croppa.css'

Vue.use(Croppa)

var vm = new Vue({
  el: '#app',
  data: {
    myCroppa: null,
    imgUrl: ''
  },
  methods: {
    generateImage: function () {
      let url = this.myCroppa.generateDataUrl()
      if (!url) {
        alert('no image')
        return
      }
      this.imgUrl = url
    },
  }
})