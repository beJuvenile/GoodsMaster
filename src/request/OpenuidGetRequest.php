<?php
/**
 * TOP API: taobao.openuid.get request
 * 
 * @author auto create
 * @since 1.0, 2018.10.17
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;

class OpenuidGetRequest implements Request
{
	
	private $apiParas = [];
	
	public function getApiMethodName()
	{
		return 'taobao.openuid.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value)
    {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
