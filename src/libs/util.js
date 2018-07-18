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
util.initBaseWeb = function () {
	return new promise(function(resolve, reject, store) {
		if (!store.state.webInit) {
			util.ajax.get('/v1/init/web',{})
				.then(function (response) {
					console.log(response);
					let ret = response.data;

					if (ret.retCode == 20000) {
						store.commit('webInitStatus', true);
						store.commit('webBaseInit', ret.retData.Value);
					} else {
						store.commit('webInitStatus', false);
					}
					resolve(store.getters.getSystemRunStatus);
				})
				.catch(function (error) {
					store.commit('webInitStatus', false);
					rejiect(store.getters.getSystemRunStatus)
				});
			});
		} else {
			resolve(store.getters.getSystemRunStatus)
		}
	}
};

util.title = function(title) {
    title = title ? title + ' - Home' : 'iView project';
    window.document.title = title;
};



export default util;