<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2020/06/29
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\TaoBao\Client;
use OpenSDK\TaoBao\Request\TaobaoJuHjsfeedsGetRequest;

class TaobaoJuHjsfeedsGetTest
{

    private $appKey;

    private $appSecret;

    public function __construct()
    {
        $config = require 'config.php';
        $this->appKey = $config['appkey'];
        $this->appSecret = $config['appsecret'];
    }

    public function __invoke()
    {
        $params = [
            [
                'data' => [
                    'page_num' => 1,
                    'from' => 'gengsheng',
                    'version' => 1,
                    'page_size' => 20,
                ],
                'res_id' => '9162423',
                'res_id_mapping' => 'resIdResult',
            ]
        ];

        $c = new Client();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $req = new TaobaoJuHjsfeedsGetRequest();
        $req->setRequestItems($params);
        $result = $c->execute($req, '6202024a22c7f2fec8f7c481189c7853ZZ111e9b69164de2942106241');
        file_put_contents('./data.json', json_encode($result));
        var_dump($result);
    }

}

(new TaobaoJuHjsfeedsGetTest())();