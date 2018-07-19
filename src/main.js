import Vue from 'vue';
import Store from './libs/store';
import iView from 'iview';
import VueRouter from 'vue-router';
import Routers from './router';
import Util from './libs/util';
import App from './app.vue';
import LocalStore from './libs/localStore';
import 'iview/dist/styles/iview.css';


Vue.use(VueRouter);
Vue.use(iView);


// 路由配置
const RouterConfig = {
    mode: 'history',
    routes: Routers
};
const router = new VueRouter(RouterConfig);

router.beforeEach((to, from, next) => {
    iView.LoadingBar.start();

	// 初始化网站
    Util.initBaseWeb(LocalStore).then(function (ret) {
        Util.title(to.meta.title);

        if (to.path === '/404' || to.path === '/prompt' || ret.status) {
            next();
        } else {
            to.params.msg = ret.msg;
            next('/prompt');
        }
    }).catch(function (err) {
        Util.title(to.meta.title);

        if (to.path === '/404' || to.path === '/prompt' || err.status) {
            next();
        } else {
            to.params.msg = err.msg;
            next('/prompt');
        }
    });
});

router.afterEach(() => {
    iView.LoadingBar.finish();
    window.scrollTo(0, 0);
});

new Vue({
    el: '#app',
    router: router,
    store: Store,
    render: h => h(App)
});