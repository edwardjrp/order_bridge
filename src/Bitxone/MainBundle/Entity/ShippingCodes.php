<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/10/15
 * Time: 11:28 AM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShippingCodes
 *
 * @ORM\Table(name="shipping_codes")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */

class ShippingCodes 
{
	/**
	* @var integer
	*
	* @ORM\Column(name="id", type="integer", nullable=false)
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string
	*
	* @ORM\Column(name="guid", type="string", length=255, nullable=false)
	*/
	private $guid;

	/**
	 * @var integer
	 *
	 * @ORM\ManyToOne(targetEntity="Bitxone\MainBundle\Entity\Retailers", inversedBy="shippingCodes", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="retailer_id", referencedColumnName="id", nullable=false)
     * })
	 *
	*/
	private $retailerId;

	/**
	* @var string
	*
	* @ORM\Column(name="chub_code", type="string", length=255, nullable=false)
	*/
	private $chubCode;

	/**
	* @var string
	*
	* @ORM\Column(name="erp_ship_code", type="string", length=255, nullable=false)
	*/
	private $erpShipCode;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="created_at", type="datetime", nullable=true)
	*/
	private $createdAt;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="updated_at", type="datetime", nullable=true)
	*/
	private $updatedAt;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getGuid()
	{
		return $this->guid;
	}

	/**
	 * @param string $guid
	 */
	public function setGuid( $guid )
	{
		$this->guid = $guid;
	}

	/**
	 * @return int
	 */
	public function getRetailerId()
	{
		return $this->retailerId;
	}

	/**
	 * @param int $retailerId
	 */
	public function setRetailerId( $retailerId )
	{
		$this->retailerId = $retailerId;
	}

	/**
	 * @return string
	 */
	public function getChubCode()
	{
		return $this->chubCode;
	}

	/**
	 * @param string $chubCode
	 */
	public function setChubCode( $chubCode )
	{
		$this->chubCode = $chubCode;
	}

	/**
	 * @return string
	 */
	public function getErpShipCode()
	{
		return $this->erpShipCode;
	}

	/**
	 * @param string $erpShipCode
	 */
	public function setErpShipCode( $erpShipCode )
	{
		$this->erpShipCode = $erpShipCode;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt( $createdAt )
	{
		$this->createdAt = $createdAt;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * @param \DateTime $updatedAt
	 */
	public function setUpdatedAt( $updatedAt )
	{
		$this->updatedAt = $updatedAt;
	}

	/**
	* @ORM\PrePersist
	*/
	public function setPrePersistGuid()
	{
		$this->setGuid( \uuid_create() );
	}

	/**
	* @ORM\PrePersist
	*/
	public function setPrePersistCreatedAt()
	{
		$this->setCreatedAt(new \DateTime());
	}

	/**
	* @ORM\PreUpdate
	*/
	public function setPreUpdateUpdatedAt()
	{
		$this->setUpdatedAt(new \DateTime());
	}

	public function __toString()
	{
		return $this->getErpShipCode();
	}


}

