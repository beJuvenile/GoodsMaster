<?php
/**
 * 淘宝客 - 推广者 - 高效转链
 * TOP API: taobao.appip.get request
 *
 * @link https://open.taobao.com/api.htm?spm=a219a.7386653.0.0.3d34669ac1RjHI&source=search&docId=29289&docType=2
 * @author Ken.Zhang <kenphp@yeah.net>
 * @since 1.0, 2020.07.03
 */

namespace OpenSDK\TaoBao\Request;

use OpenSDK\TaoBao\Interfaces\Request;
use OpenSDK\TaoBao\Libs\RequestCheckUtil;

class TbkCouponConvertRequest implements Request
{
	private $itemId; // 淘客商品id

    private $adzoneId; // 推广位id，mm_xx_xx_xx pid三段式中的第三段

    private $platform; // 1：PC，2：无线，默认：１

    private $me; // 营销计划链接中的me参数

    private $url; // 淘宝客推广链接(测试中请勿使用)

    private $xId; // 物料块id(测试中请勿使用)

    private $externalId; // 淘宝客外部用户标记，如自身系统账户ID；微信ID等

    private $specialId; // 会员运营ID

    private $relationId; // 渠道管理ID

	private $apiParas = [];
	
	public function getApiMethodName()
	{
		return 'taobao.tbk.coupon.convert';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
        RequestCheckUtil::checkNotNull($this->itemId,'item_id');
        RequestCheckUtil::checkNotNull($this->adzoneId,'adzone_id');
	}

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId($itemId)
    {
        $this->apiParas['item_id'] = $itemId;
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getAdzoneId()
    {
        return $this->adzoneId;
    }

    /**
     * @param int $adzoneId
     */
    public function setAdzoneId($adzoneId)
    {
        $this->apiParas['adzone_id'] = $adzoneId;
        $this->adzoneId = $adzoneId;
    }

    /**
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param int $platform
     */
    public function setPlatform($platform)
    {
        $this->apiParas['platform'] = $platform;
        $this->platform = $platform;
    }

    /**
     * @return string
     */
    public function getMe()
    {
        return $this->me;
    }

    /**
     * @param string $me
     */
    public function setMe($me)
    {
        $this->apiParas['me'] = $me;
        $this->me = $me;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->apiParas['url'] = $url;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getXId()
    {
        return $this->xId;
    }

    /**
     * @param string $xId
     */
    public function setXId($xId)
    {
        $this->apiParas['x_id'] = $xId;
        $this->xId = $xId;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->apiParas['external_id'] = $externalId;
        $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getSpecialId()
    {
        return $this->specialId;
    }

    /**
     * @param string $specialId
     */
    public function setSpecialId($specialId)
    {
        $this->apiParas['special_id'] = $specialId;
        $this->specialId = $specialId;
    }

    /**
     * @return string
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * @param string $relationId
     */
    public function setRelationId($relationId)
    {
        $this->apiParas['relation_id'] = $relationId;
        $this->relationId = $relationId;
    }

}
