<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/24/15
 * Time: 4:54 PM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\DecimalType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Inventories
 *
 * @ORM\Table(name="inventories")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Inventories 
{
	/**
	 * @var integer
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string
	*
	* @ORM\Column(name="guid", type="string", length=255, nullable=true)
	*/
	private $guid;

	/**
	* @var integer
	* @ORM\ManyToOne(targetEntity="Bitxone\MainBundle\Entity\Retailers")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="retailer_id", referencedColumnName="id", nullable=true)
    * })
	*/
	private $retailerId;

	/**
	* @var string
	*
	* @ORM\Column(name="itemno", type="string", length=255, nullable=true)
	*/
	private $itemNo;

	/**
	* @var string
	*
	* @ORM\Column(name="bitem", type="string", length=255, nullable=true)
	*/
	private $bItem;

	/**
	* @var string
	*
	* @ORM\Column(name="status", type="string", length=255, nullable=true)
	*/
	private $status;

	/**
	* @var string
	*
	* @ORM\Column(name="metal", type="string", length=255, nullable=true)
	*/
	private $metal;

	/**
	*
	* @ORM\Column(name="cost", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $cost;

	/**
	* @var string
	*
	* @ORM\Column(name="description", type="string", length=255, nullable=true)
	*/
	private $description;

	/**
	* @var string
	*
	* @ORM\Column(name="upccode", type="string", length=255, nullable=true)
	*/
	private $upcCode;

	/**
	*
	* @ORM\Column(name="weight", type="decimal", precision=12, scale=4, nullable=true)
	*/
	private $weight;

	/**
	* @var string
	*
	* @ORM\Column(name="sku", type="string", length=255, nullable=true)
	*/
	private $sku;

	/**
	* @var integer
	*
	* @ORM\Column(name="qty", type="integer")
	*/
	private $qty;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="created_at", type="datetime", nullable=true)
	*/
	private $created_at;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="updated_at", type="datetime", nullable=true)
	*/
	private $updated_at;

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
	public function getItemNo()
	{
		return $this->itemNo;
	}

	/**
	 * @param string $itemNo
	 */
	public function setItemNo( $itemNo )
	{
		$this->itemNo = $itemNo;
	}

	/**
	 * @return string
	 */
	public function getBItem()
	{
		return $this->bItem;
	}

	/**
	 * @param string $bItem
	 */
	public function setBItem( $bItem )
	{
		$this->bItem = $bItem;
	}

	/**
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus( $status )
	{
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getMetal()
	{
		return $this->metal;
	}

	/**
	 * @param string $metal
	 */
	public function setMetal( $metal )
	{
		$this->metal = $metal;
	}

	/**
	 * @return mixed
	 */
	public function getCost()
	{
		return $this->cost;
	}

	/**
	 * @param mixed $cost
	 */
	public function setCost( $cost )
	{
		$this->cost = $cost;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description )
	{
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getUpcCode()
	{
		return $this->upcCode;
	}

	/**
	 * @param string $upcCode
	 */
	public function setUpcCode( $upcCode )
	{
		$this->upcCode = $upcCode;
	}

	/**
	 * @return mixed
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * @param mixed $weight
	 */
	public function setWeight( $weight )
	{
		$this->weight = $weight;
	}

	/**
	 * @return string
	 */
	public function getSku()
	{
		return $this->sku;
	}

	/**
	 * @param string $sku
	 */
	public function setSku( $sku )
	{
		$this->sku = $sku;
	}

	/**
	 * @return int
	 */
	public function getQty()
	{
		return $this->qty;
	}

	/**
	 * @param int $qty
	 */
	public function setQty( $qty )
	{
		$this->qty = $qty;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->created_at;
	}

	/**
	 * @param \DateTime $created_at
	 */
	public function setCreatedAt( $created_at )
	{
		$this->created_at = $created_at;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updated_at;
	}

	/**
	 * @param \DateTime $updated_at
	 */
	public function setUpdatedAt( $updated_at )
	{
		$this->updated_at = $updated_at;
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
		return $this->getDescription();
	}

}

