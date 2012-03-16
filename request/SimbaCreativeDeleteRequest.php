<?php
/**
 * TOP API: taobao.simba.creative.delete request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class SimbaCreativeDeleteRequest
{
	/** 
	 * 创意Id
	 **/
	private $creativeId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
		$this->apiParas["creative_id"] = $creativeId;
	}

	public function getCreativeId()
	{
		return $this->creativeId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.creative.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->creativeId,"creativeId");
	}
}
