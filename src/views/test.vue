<template>
    <div>
        <Carousel v-model="value1" loop>
            <CarouselItem>
                <div class="demo-carousel">
                    <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1532284462051&di=fb227a99dce74265c384c66905be7b22&imgtype=0&src=http%3A%2F%2Fimg.tuku.cn%2Ffile_thumb%2F201505%2Fm2015050421415301.jpg" style="width: 100%;">
                </div>
            </CarouselItem>
            <CarouselItem>
                <div class="demo-carousel">
                    <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1532284614425&di=6fa194a55759d5d3eb9b0bc93df50b16&imgtype=0&src=http%3A%2F%2Fwww.uweishi.com%2Fzhuti%2FUploadPic%2F2016-5%2F2016514101437707.jpg" style="width: 100%;">
                </div>
            </CarouselItem>
            <CarouselItem>
                <div class="demo-carousel">
                    <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1532284680816&di=940af4d85b988bb5fa7cc1298b9bd7eb&imgtype=0&src=http%3A%2F%2Fs13.sinaimg.cn%2Fmw690%2F003xaiyOzy6LvG2MstC3c%26690" style="width: 100%;">
                </div>
            </CarouselItem>
            <CarouselItem>
                <div class="demo-carousel">
                    <img src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=980405972,4284130447&fm=27&gp=0.jpg" style="width: 100%;">
                </div>
            </CarouselItem>
        </Carousel>


        <Card style="width:320px">
            <div style="text-align:center">

                <h3>A high quality UI Toolkit based on Vue.js</h3>
            </div>
        </Card>
    </div>

</template>
<script>
    export default {
        data () {
            return {
                value1: 0
            };
        }
    };
</script>
