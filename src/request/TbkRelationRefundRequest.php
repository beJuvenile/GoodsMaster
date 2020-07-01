<?php
/**
 * TOP API: taobao.tbk.relation.refund request
 * 
 * @author auto create
 * @since 1.0, 2020.03.23
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;

class TbkRelationRefundRequest implements Request
{
	/** 
	 * 参数option
	 **/
	private $searchOption;
	
	private $apiParas = [];
	
	public function setSearchOption($searchOption)
	{
		$this->searchOption = $searchOption;
		$this->apiParas['search_option'] = $searchOption;
	}

	public function getSearchOption()
	{
		return $this->searchOption;
	}

	public function getApiMethodName()
	{
		return 'taobao.tbk.relation.refund';
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
