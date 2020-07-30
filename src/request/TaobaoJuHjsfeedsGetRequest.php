<?php
/**
 * TOP API: taobao.ju.hjsfeeds.get
 * 
 * @author Ken.Zhang
 * @since 1.0, 2020-07-30
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;
use OpenSDK\TaoBao\Libs\RequestCheckUtil;

class TaobaoJuHjsfeedsGetRequest implements Request
{

	/** 
	 *
	 */
	private $requestItems;

	private $apiParas = [];


    public function setRequestItems($requestItems)
    {
        $this->requestItems = $requestItems;
        $this->apiParas['request_items'] = $requestItems;
    }

    public function getRequestItems()
    {
        return $this->requestItems;
    }

	public function getApiMethodName()
	{
		return 'taobao.ju.hjsfeeds.get';
	}
	
	public function getApiParas()
	{
	    $this->apiParas['request_items'] = @json_encode($this->requestItems);
		return $this->apiParas;
	}
	
	public function check()
	{

	}

}
