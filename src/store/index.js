import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        // 初始化标志
        webInit: false,
        // 网站基础信息
        webBaseInfo: {
            title: '',
            keywords: '',
            description: '',
            webDomain: '',
            customServiceQQ: '',
            customServiceWeChat: '',
            customServiceEmail: '',
            customServiceTel: '',
            webState: false,
            webCloseMsg: '',
        }
    },
    getters: {

        // 网站状态
        getSystemRunStatus: state => {
            let response = {};
            response.status = !!state.webBaseInfo.webState;
            response.msg = state.webBaseInfo.webCloseMsg;

            return response;
        }
    },
    mutations: {
        // 初始化状态
        webInitStatus (state, status) {
            state.webInit = status;
        },
        // 初始化网站基础信息
        webBaseInit (state, obj) {
            state.webBaseInfo.title = obj.title;
            state.webBaseInfo.keywords = obj.keywords;
            state.webBaseInfo.description = obj.description;
            state.webBaseInfo.webDomain = obj.webDomain;
            state.webBaseInfo.customServiceQQ = obj.customServiceQQ;
            state.webBaseInfo.customServiceWeChat = obj.customServiceWeChat;
            state.webBaseInfo.customServiceEmail = obj.customServiceEmail;
            state.webBaseInfo.customServiceTel = obj.customServiceTel;
            state.webBaseInfo.webState = obj.webState;
            state.webBaseInfo.webCloseMsg = obj.webCloseMsg;
        }
    },
    actions: {
        // 初始化网站基础信息
        webInit (context) {
            context.commit('webInit');
        }
    }
});