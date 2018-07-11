const routers = [{
    path: '/',
    meta: {
        title: 'MuBai'
    },
    component: (resolve) => require(['./views/index.vue'], resolve)
},{
    path: '/main',
    meta: {
        title: 'GoodsMaster - 主面板'
    },
    component: (resolve) => require(['./views/main.vue'], resolve)
}];
export default routers;