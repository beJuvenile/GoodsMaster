import axios from 'axios';
import config from '../config/config';

let util = {

};

const ajaxUrl = config.apiUrl;

util.ajax = axios.create({
    baseURL: ajaxUrl,
    timeout: 30000
});

// 初始化网站
util.initBaseWeb = function () {

};

util.title = function(title) {
    title = title ? title + ' - Home' : 'iView project';
    window.document.title = title;
};



export default util;