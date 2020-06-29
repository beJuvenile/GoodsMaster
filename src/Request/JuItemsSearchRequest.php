<?php
/**
 * TOP API: taobao.ju.items.search request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;

class JuItemsSearchRequest implements Request
{
	/** 
	 * query
	 **/
	private $paramTopItemQuery;
	
	private $apiParas = [];
	
	public function setParamTopItemQuery($paramTopItemQuery)
	{
		$this->paramTopItemQuery = $paramTopItemQuery;
		$this->apiParas['param_top_item_query'] = $paramTopItemQuery;
	}

	public function getParamTopItemQuery()
	{
		return $this->paramTopItemQuery;
	}

	public function getApiMethodName()
	{
		return 'taobao.ju.items.search';
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
