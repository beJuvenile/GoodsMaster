<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2020/06/29
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\TaoBao\Client;
use OpenSDK\TaoBao\Request\TbkOrderDetailsGetRequest;

class TbkOrderDetailsGetTest
{

    private $appKey = '2526218';

    private $appSecret = 'da2e7dd98976df40fae3899afab4bfe';

    public function __invoke()
    {
        $c = new Client();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $req = new TbkOrderDetailsGetRequest();
        $req->setQueryType(1);
        $req->setJumpType(1);
        $req->setOrderScene(1);
        $req->setStartTime('2020-06-25 21:00:00');
        $req->setEndTime('2020-06-25 22:00:00');
        $result = $c->execute($req);

        var_dump($result);
    }

}

(new TbkOrderDetailsGetTest())();