<?php
/**
 * TOP API: taobao.openuid.get.bytrade request
 * 
 * @author auto create
 * @since 1.0, 2018.10.17
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;
use OpenSDK\TaoBao\Libs\RequestCheckUtil;

class OpenuidGetBytradeRequest implements Request
{
	/** 
	 * 订单ID
	 **/
	private $tid;
	
	private $apiParas = [];
	
	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas['tid'] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return 'taobao.openuid.get.bytrade';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->tid, 'tid');
	}
	
	public function putOtherTextParam($key, $value)
    {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
