<template>
    <div class="container">
        <div>
            <croppa v-model="myCroppa" canvas-color="transparent"></croppa>
            <p><button @click="generateImage">画像作成</button></p>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    
    export default {
        data: function() {
            return {
                myCroppa: null,
            }
        },
        methods: {
            generateImage: function () {
                let url = this.myCroppa.generateDataUrl()
                if (!url) {
                    alert('no image')
                    return
                }

                var params = new URLSearchParams();
                params.append("imgUrl", url);
                axios
                    .post('/save.php', params)
                    .then(function(response) {
                        console.log(response.data)
                    })
                    .catch(error => {
                        console.log(error.response);
                    });
            },
        }
    }
</script>
