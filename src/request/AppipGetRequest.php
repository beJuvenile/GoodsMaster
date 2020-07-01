<?php
/**
 * TOP API: taobao.appip.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;

class AppipGetRequest implements Request
{
	
	private $apiParas = [];
	
	public function getApiMethodName()
	{
		return 'taobao.appip.get';
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
