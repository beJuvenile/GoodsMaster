# opensdk-taobao

### 介绍
本类库是对大淘客开放平台API的封装  
接口文档请参见 [淘宝开放平台](https://open.taobao.com)  

### 使用示例
~~~php
use OpenSDK\TaoBao\Client;
use OpenSDK\TaoBao\Request\TopAuthTokenCreateRequest;

$c = new Client();
$c->appkey = $this->appKey;
$c->secretKey = $this->appSecret;
$req = new TopAuthTokenCreateRequest();
$req->setCode('uzIVZ0GaWGR0fON9sbqoQjRU15687760');
$result = $c->execute($req);

var_dump($result);
~~~