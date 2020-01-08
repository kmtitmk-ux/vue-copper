<template>
    <div class="container">
        <div>
            <croppa v-model="myCroppa" canvas-color="transparent"></croppa>
            <p><button @click="generateImage">画像作成</button></p>
        </div>
        <div>
            <img class="output" :src="imgUrl">
        </div>
        <form action="/" method="post">
            <input type="hidden" name="img" :value="imgUrl">
            <button type="submit">送信する</button>
        </form>
    </div>
</template>

<script>
    import Vue from 'vue'
    import Croppa from 'vue-croppa'
    import 'vue-croppa/dist/vue-croppa.css'
    import axios from 'axios'

    export default {
        data: function() {
            return {
                myCroppa: null,
                imgUrl: ''
            }
        },
        created: function() {
            Vue.use(Croppa)
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
    }
</script>
