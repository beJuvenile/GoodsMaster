<style scoped>
    .layout{
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        height: 100%;
    }
    .layout-content {
        min-width: 1200px;
        height: 550px;
        margin: auto;
        overflow: hidden;
        text-align: center;
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
    /*动画*/
    .fade-enter-active {
        animation: bounce-in .5s;
    }
    .fade-leave-active {
        animation: bounce-in .5s reverse;
    }
    @keyframes fade-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
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
        <div class="layout-content" :style="{backgroundImage: 'url('+bgImg+')', backgroundRepeat: 'no-repeat', backgroundPosition: 'center center', backgroundSize: '100% 100%'}">
            <Alert v-show="alert.show" v-bind:type="alert.type" v-bind:showIcon="alert.showIcon" v-bind:closable="alert.closable" >{{ alert.msg }}</Alert>

            <transition name="fade">
                <div v-if="show.user">
                    <Input v-model="user.account" :autofocus="true" @on-enter="checkUser" @on-click="checkUser" icon="arrow-right-a" placeholder="用户名" style="width: 200px; position: relative; top: 210px; opacity: 0.8;"></Input>
                </div>
            </transition>

            <transition name="fade">
                <div v-if="show.pass">
                    <Input v-model="user.password" :autofocus="true" @on-enter="userLogin" @on-click="userLogin" icon="log-in" placeholder="密码" style="width: 200px; position: relative; top: 210px; opacity: 0.8;"></Input>
                </div>
            </transition>
        </div>
        <div class="layout-copy" v-html="copyright"></div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                copyright: '',
                bgImg: 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1532284462051&di=fb227a99dce74265c384c66905be7b22&imgtype=0&src=http%3A%2F%2Fimg.tuku.cn%2Ffile_thumb%2F201505%2Fm2015050421415301.jpg',
                user: {
                    account: '',
                    password: ''
                },
                show: {
                    user: true,
                    pass: false
                },
                alert: {
                    show: false,
                    type: 'info',
                    closable: false,
                    showIcon: true,
                    msg: ''
                }
            };
        },
        created() {
            // 数据初始化
            let webInfo = this.$localStore.getItem('webBaseData');
            this.copyright = webInfo.copyright;

        },
        methods: {
            checkUser () {
                let _this = this;

                // 为空不能验证
                if (_this.$common.isEmpty(_this.user.account)) {
                    _this.show.user = true;
                    _this.show.pass = false;

                    return false;
                }

                _this.$axios.post('/v1/user/check', {
                    account: _this.user.account
                }).then(function (response) {
                    if (response.data.retCode==20000) {
                        _this.show.user = false;
                        _this.show.pass = true;
                    } else {
                        _this.show.user = true;
                        _this.show.pass = false;
                        _this.alert.show = true;
                        _this.alert.type = 'error';
                        _this.alert.msg = response.data.retMsg;
                    }
                }).catch(function () {
                    _this.show.user = true;
                    _this.show.pass = false;
                    _this.alert.show = true;
                    _this.alert.type = 'error';
                    _this.alert.msg = '验证失败';
                });
            },
            userLogin () {
                let _this = this;

                // 为空不能验证
                if (_this.$common.isEmpty(_this.user.account)) {
                    _this.show.user = true;
                    _this.show.pass = false;

                    return false;
                }

                _this.$axios.post('/v1/user/check', {
                    account: _this.user.account
                }).then(function (response) {
                    if (response.data.retCode==20000) {
                        _this.show.user = false;
                        _this.show.pass = true;
                    } else {
                        _this.show.user = true;
                        _this.show.pass = false;
                        _this.alert.show = true;
                        _this.alert.type = 'error';
                        _this.alert.msg = response.data.retMsg;
                    }
                }).catch(function () {
                    _this.show.user = true;
                    _this.show.pass = false;
                    _this.alert.show = true;
                    _this.alert.type = 'error';
                    _this.alert.msg = '验证失败';
                });
            }
        }
    };
</script>
