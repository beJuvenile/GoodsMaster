<?php
/**
 * TOP API: taobao.tbk.dg.vegas.tlj.instance.report request
 * 
 * @author auto create
 * @since 1.0, 2019.09.11
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;
use OpenSDK\TaoBao\Libs\RequestCheckUtil;

class TbkDgVegasTljInstanceReportRequest implements Request
{
	/** 
	 * 实例ID
	 **/
	private $rightsId;
	
	private $apiParas = [];
	
	public function setRightsId($rightsId)
	{
		$this->rightsId = $rightsId;
		$this->apiParas['rights_id'] = $rightsId;
	}

	public function getRightsId()
	{
		return $this->rightsId;
	}

	public function getApiMethodName()
	{
		return 'taobao.tbk.dg.vegas.tlj.instance.report';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->rightsId,'rightsId');
	}
	
	public function putOtherTextParam($key, $value)
    {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
