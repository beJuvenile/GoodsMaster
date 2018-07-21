const routers = [{
    path: '/',
    meta: {
        title: '用户登录'
    },
    component: (resolve) => require(['./views/index.vue'], resolve)
},{
    path: '/main',
    meta: {
        title: '主面板'
    },
    component: (resolve) => require(['./views/main.vue'], resolve)
},{
    path: '/prompt',
    meta: {
        title: '提示'
    },
    component: (resolve) => require(['./views/prompt.vue'], resolve)
},{
    path: '/404',
    meta: {
        title: '404'
    },
    component: (resolve) => require(['./views/404.vue'], resolve)
}];
export default routers;