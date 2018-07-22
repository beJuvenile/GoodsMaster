<style scoped>
    .layout{
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        height: 100%;
    }
    .layout-content{
        min-height: 100px;
    }
    .layout-copy{
        text-align: center;
        padding: 10px 0 20px;
        color: #9ea7b4;
    }
    .layout-ceiling{
        background: #464c5b;
        padding: 10px 0;
        overflow: hidden;
    }
    .layout-ceiling-main{
        float: right;
        margin-right: 15px;
    }
    .layout-ceiling-main a{
        color: #9ba7b5;
    }
    .login-window{
        width: 320px;
        display: inline-block;
        position: fixed;
        top: 10%;
    }
</style>
<template>
    <div class="layout">
        <div class="layout-ceiling">
            <div class="layout-ceiling-main">
                <a href="#">Goods Master</a> |
                <a href="#">联系客服</a> |
                <a href="#">关于我们</a>
            </div>
        </div>
        <div class="layout-content" >
            <Carousel
                    v-model="carouse.value"
                    :loop="carouse.loop"
                    :autoplay="carouse.autoplay"
                    :autoplay-speed="carouse.autoplaySpeed"
                    :dots="carouse.dots"
                    :radius-dot="carouse.radiusDot"
                    :trigger="carouse.trigger"
                    :arrow="carouse.arrow"
                    :easing="carouse.easing">
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
        </div>
        <div class="layout-copy" v-html="copyright"></div>

        <!--登录框-->
        <Card class="login-window">
            <div style="text-align:center">
                <img src="https://raw.githubusercontent.com/iview/iview/master/assets/logo.png">
                <h3>A high quality UI Toolkit based on Vue.js</h3>
            </div>
        </Card>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                copyright: '',
                carouse: {
                    value: 0,
                    height: 'auto',
                    loop: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: 'none',
                    radiusDot: false,
                    trigger: 'click',
                    arrow: 'never',
                    easing: 'ease'
                }
            };
        },
        created() {
            // 数据初始化
            let webInfo = this.$localStore.getItem('webBaseData');
            this.copyright = webInfo.copyright;

        }
    };
</script>
