<style scoped>
    .index {
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        text-align: center;
    }

    .index h1 {
        height: 150px;
    }

    .index h1 img {
        height: 100%;
    }

    .index h2 {
        color: #666;
        margin-bottom: 200px;
    }

    .index h2 p {
        margin: 0 0 50px;
    }

    .index .ivu-row-flex {
        height: 100%;
    }
</style>
<template>
    <div class="index">
        <Row type="flex" justify="center" align="middle">
            <Col span="24">
                <h1>
                    <img :src="alertImg">
                </h1>
                <h2>
                    <p>{{ alertMsg }}</p>
                    <Button type="ghost" @click="previousPage">返回上一页</Button>
                    <Button type="ghost" @click="homePage">首页</Button>
                </h2>
            </Col>
        </Row>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                alertMsg: '',
                alertImg: 'https://raw.githubusercontent.com/iview/iview/master/assets/logo.png',
                // prevPageUrl: '',
                // homePageUrl: '',
            };
        },
        created() {
            // 提示信息
            if (!this.$common.isUndefined(this.$route.params.msg)) {
                this.alertMsg = this.$route.params.msg;
            }
            // 管理主页
            // let webInfo = this.$localStore.getItem('webBaseData');
            // if (webInfo) this.homePageUrl = webInfo.webDomain;

        },
        methods: {
            previousPage() {
                this.$router.back(-1);
            },
            homePage() {
                this.$router.push('/main');
            }
        }
    };
</script>