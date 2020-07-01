<?php

/**
 * 共享字段 - 渠道或会员列表
 * @author auto create
 */

namespace OpenSDK\TaoBao\Domain;

class MapData
{
	
	/** 
	 * 共享字段 - 渠道/会员昵称
	 **/
	public $account_name;
	
	/** 
	 * 共享字段 - 备案日期
	 **/
	public $create_date;
	
	/** 
	 * 渠道独有 - 媒体侧渠道备注信息
	 **/
	public $note;
	
	/** 
	 * 线下备案专属信息
	 **/
	public $offline_info;
	
	/** 
	 * 渠道独有 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他
	 **/
	public $offline_scene;
	
	/** 
	 * 渠道独有 - 线上场景信息，1 - 微信群，2- QQ群，3 - 其他
	 **/
	public $online_scene;
	
	/** 
	 * 渠道独有 - 处罚状态
	 **/
	public $punish_status;
	
	/** 
	 * 共享字段 - 渠道/会员姓名
	 **/
	public $real_name;
	
	/** 
	 * 共享字段 - 备案场景：common（通用备案），etao（一淘备案），minietao（一淘小程序备案），offlineShop（线下门店备案），offlinePerson（线下个人备案）
	 **/
	public $relation_app;
	
	/** 
	 * 渠道独有 - 渠道关系ID
	 **/
	public $relation_id;
	
	/** 
	 * 共享字段 - 渠道/会员专属pid
	 **/
	public $root_pid;
	
	/** 
	 * 共享字段 - 渠道/会员原始身份信息
	 **/
	public $rtag;
	
	/** 
	 * 会员独有 - 会员运营ID
	 **/
	public $special_id;	
}