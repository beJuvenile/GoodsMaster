// +-------------------------------------------------
// | localStorage 封装
// |-------------------------------------------------
// | Author: beJuvenile
// | Date: 2018.07.19
// | Version: 0.0.1
// |-------------------------------------------------

let localStore = {};
let store = window.localStorage;

// 安装方法
localStore.install = function (Vue) {
    Object.defineProperty(Vue.prototype, '$localStore', {value: localStore});
};
// 检测是否支持localStorage
localStore.isSupportLocalStorage = function () {
    return !!window.localStorage;
};
// 数据存入
localStore.setItem = function (key, value) {
    store.setItem(key, this.valueTransformString(value));
};
// 数据读取
localStore.getItem = function (key) {
    if (this.isSetItem(key)) {
        let data = JSON.parse(store.getItem(key));

        return data.data;
    } else {
        return '';
    }
};
// 数据删除
localStore.delItem = function (key) {
    store.removeItem(key);
};
// 所有数据清除
localStore.clear = function () {
    store.clear();
};

/*---------------------------  函数封装  ----------------------------*/
// 各种类型转字符串
localStore.valueTransformString = function(data) {
    let result = {
        timestamp: this.msTimeStamp()
    };

    if (this.isNull(data) || this.isUndefined(data)) {
        result.data = '';
    } else {
        result.data = data;
    }

    return JSON.stringify(result);
};
// 是否是数组
localStore.isArray = function (data) {
    return data.constructor === Array;
};
// 是否是整数
localStore.isNumber = function (data) {
    return data.constructor === Number;
};
// 是否是字符串
localStore.isString = function (data) {
    return data.constructor === String;
};
// 是否是对象
localStore.isObject = function (data) {
    return data.constructor === Object;
};
// 是否是布尔
localStore.isBool = function (data) {
    return data.constructor === Boolean;
};
// 是否是函数
localStore.isFunction = function (data) {
    return data.constructor === Function;
};
// 是否是undefined
localStore.isUndefined = function (data) {
    return Object.prototype.toString.call(data) === '[object Undefined]';
};
// 是否是Null
localStore.isNull = function (data) {
    return Object.prototype.toString.call(data) === '[object Null]';
};
// 毫秒级时间戳
localStore.msTimeStamp = function () {
    return new Date().getTime();
};
// 检测是否存在key
localStore.isSetItem = function (key) {
    return !this.isNull(store.getItem(key));
};


export default localStore;