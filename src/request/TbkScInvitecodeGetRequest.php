<?php
/**
 * TOP API: taobao.tbk.sc.invitecode.get request
 *
 * @link https://open.taobao.com/api.htm?docId=38046&docType=2&scopeId=14474
 * @author auto create
 * @since 1.0, 2019.07.04
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;
use OpenSDK\TaoBao\Libs\RequestCheckUtil;

class TbkScInvitecodeGetRequest implements Request
{
	/** 
	 * 邀请码类型，1 - 渠道邀请，2 - 渠道裂变，3 -会员邀请
	 **/
	private $codeType;
	
	/** 
	 * 渠道推广的物料类型
	 **/
	private $relationApp;
	
	/** 
	 * 渠道关系ID
	 **/
	private $relationId;
	
	private $apiParas = [];
	
	public function setCodeType($codeType)
	{
		$this->codeType = $codeType;
		$this->apiParas['code_type'] = $codeType;
	}

	public function getCodeType()
	{
		return $this->codeType;
	}

	public function setRelationApp($relationApp)
	{
		$this->relationApp = $relationApp;
		$this->apiParas['relation_app'] = $relationApp;
	}

	public function getRelationApp()
	{
		return $this->relationApp;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas['relation_id'] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function getApiMethodName()
	{
		return 'taobao.tbk.sc.invitecode.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->codeType,'codeType');
		RequestCheckUtil::checkNotNull($this->relationApp,'relationApp');
	}

}
