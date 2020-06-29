<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2020/06/29
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\TaoBao\Client;
use OpenSDK\TaoBao\Request\TopAuthTokenCreateRequest;

class TopAuthTokenCreateTest
{

    private $appKey = '2526218';

    private $appSecret = 'da2e7dd98976df40fae3899afab4bfe';

    public function __invoke()
    {
        $c = new Client();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $req = new TopAuthTokenCreateRequest();
        $req->setCode('uzIVZ0GaWGR0fON9sbqoQjRU15687760');
        $result = $c->execute($req);

        var_dump($result);
    }

}

(new TopAuthTokenCreateTest())();