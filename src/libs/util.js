import axios from 'axios';
import config from '../config/config';
import store from '../store';

let util = {

};

const ajaxUrl = config.apiUrl;

util.ajax = axios.create({
    baseURL: ajaxUrl,
    timeout: 30000
});

// 初始化网站
util.initBaseWeb = function (store) {
	return new Promise((resolve, reject) => {

        if (!store.state.webInit) {
            util.ajax.get('/v1/init/web')
                .then(function (response) {
                    let ret = response.data;

                    if (ret.retCode === 20000) {
                        store.commit('webInitStatus', true);
                        store.commit('webBaseInit', ret.retData.Value);
                    } else {
                        store.commit('webInitStatus', false);
                    }
                    resolve(store.getters.getSystemRunStatus);
                })
                .catch(function (error) {
                    store.commit('webInitStatus', false);
                    reject(store.getters.getSystemRunStatus)
                });
		} else {
			resolve(store.getters.getSystemRunStatus)
		}
	});
};

util.title = function(title) {
    title = title ? title + ' - ' : store.state.title;
    title += store.state.webBaseInfo.slogon;
    window.document.title = title;
};



export default util;