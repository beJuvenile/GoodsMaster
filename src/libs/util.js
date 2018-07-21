import axios from 'axios';
import config from '../config/config';
import localStore from './localStore';

let util = {

};

const ajaxUrl = config.apiUrl;

util.ajax = axios.create({
    baseURL: ajaxUrl,
    timeout: 30000
});

// 初始化网站
util.initBaseWeb = function () {
	return new Promise((resolve, reject) => {
        if (!localStore.getItem('webInitStatus')) {
            util.ajax.get('/v1/init/web')
                .then(function (response) {
                    let ret = response.data;

                    if (ret.retCode === 20000) {
                        localStore.setItem('webInitStatus', true);
                        localStore.setItem('webBaseData', ret.retData.Value);
                    } else {
                        localStore.setItem('webInitStatus', false);
                    }
                    resolve(util.getSystemRunStatus());
                })
                .catch(function (error) {
                    localStore.setItem('webInitStatus', false);
                    reject(util.getSystemRunStatus())
                });
		} else {
			resolve(util.getSystemRunStatus());
		}
	});
};

util.title = function(title) {
    title = title ? title + ' - ' : this.getWebTitle();
    title += this.getWebSlogon();
    window.document.title = title;
};
/*--------------------- 函数封装 ----------------------*/
// 获取系统状态
util.getSystemRunStatus = function() {
    let webInfo = localStore.getItem('webBaseData')
        ,result = {};

    if (webInfo) {
        result.status = webInfo.webState;
        result.msg = webInfo.webCloseMsg;
    } else {
        result.status = false;
        result.msg = '系统异常，请联系管理员'
    }

    return result;
};
// 获取网站名称
util.getWebTitle = function () {
    let webInfo = localStore.getItem('webBaseData');

    return webInfo ? webInfo.title : '';
};
// 获取网站标题
util.getWebSlogon = function () {
    let webInfo = localStore.getItem('webBaseData');

    return webInfo ? webInfo.slogon : '';
};

export default util;