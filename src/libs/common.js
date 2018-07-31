// +-------------------------------------------------
// | 公共函数库
// |-------------------------------------------------
// | Author: beJuvenile
// | Date: 2018.07.21
// | Version: 0.0.1
// |-------------------------------------------------

let common = {};

// 安装方法
common.install = function (Vue) {
    Object.defineProperty(Vue.prototype, '$common', {value: common});
};
// 各种类型转字符串
common.dataTransformString = function(data) {
    if (this.isArray(data) || this.isObject(data)) {
        return JSON.stringify(data);
    } else if (this.isString(data) || this.isNumber(data) || this.isBool(data)) {
        return String(data);
    } else if (this.isNull(data) || this.isUndefined(data)) {
        return '';
    } else {
        return '';
    }
};
common.isEmpty = function (data) {
    if (this.isObject(data)) {
        for (var key in data) {
            return false;
        }
        return true;
    } else if (this.isArray(data)) {
        return !data.length;
    } else if (this.isNumber(data) || this.isString(data) || this.isBool(data)) {
        return !data;
    } else if (this.isUndefined(data) || this.isNull(data)) {
        return true;
    } else {
        return false;
    }
};
// 是否是数组
common.isArray = function (data) {
    return data.constructor === Array;
};
// 是否是整数
common.isNumber = function (data) {
    return data.constructor === Number;
};
// 是否是字符串
common.isString = function (data) {
    return data.constructor === String;
};
// 是否是对象
common.isObject = function (data) {
    return data.constructor === Object;
};
// 是否是布尔
common.isBool = function (data) {
    return data.constructor === Boolean;
};
// 是否是函数
common.isFunction = function (data) {
    return data.constructor === Function;
};
// 是否是undefined
common.isUndefined = function (data) {
    return Object.prototype.toString.call(data) === '[object Undefined]';
};
// 是否是Null
common.isNull = function (data) {
    return Object.prototype.toString.call(data) === '[object Null]';
};

export default common;