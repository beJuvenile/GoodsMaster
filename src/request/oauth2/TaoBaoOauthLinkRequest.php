<?php
/**
 * 淘宝用户授权
 *
 * @link https://open.taobao.com/doc.htm?spm=a219a.7386797.0.0.63c1669aHDAI9i&source=search&docId=102635&docType=1
 */

namespace OpenSDK\TaoBao\Request\Oauth2;


class TaoBaoOauthLinkRequest
{

    public $gateway = 'https://oauth.taobao.com/authorize';

    public $clientId; // 等同于appkey，创建应用时获得。

    public $responseType = 'code'; // 授权类型 ，值为code。

    public $redirectUri; // redirect_uri指的是应用发起请求时，所传的回调地址参数，在用户授权后应用会跳转至redirect_uri。要求与应用注册时填写的回调地址域名一致或顶级域名一致

    public $state; // 维持应用的状态，传入值与返回值保持一致。

    public $view; // web对应PC端（淘宝logo）浏览器页面样式；tmall对应天猫的浏览器页面样式；wap对应无线端的浏览器页面样式。


    public function genUrl()
    {
        $query = [];
        $query['response_type'] = $this->responseType;
        $query['client_id'] = $this->clientId;
        $query['redirect_uri'] = $this->redirectUri;
        $this->state && $query['state'] = $this->state;
        $this->view && $query['view'] = $this->view;

        return $this->gateway . '?' . http_build_query($query);
    }

}