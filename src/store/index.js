import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        // 网站基础信息
        webBaseInfo: {
            title: '',
            description: '',
            webDomain: '',
            customServiceQQ: '',
            customServiceWeChat: '',
            customServiceEmail: '',
            customServiceTel: '',
            webState: 1,
            webCloseMsg: '',
        }
    },
    getters: {

    },
    mutations: {
        // 初始化网站基础信息
        webInit (state, obj) {
            state.webBaseInfo.title = obj.title;
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