<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/17/15
 * Time: 3:46 PM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * RetailersStatuses
 *
 * @ORM\Table(name="retailers")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Retailers 
{
	function __construct()
	{
		$this->orders = new ArrayCollection();
		$this->shippingCodes = new ArrayCollection();
	}

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
	* @var string
	*
	* @ORM\Column(name="retailer_name", type="string", length=255, nullable=false)
	*/
	private $retailerName;

	/**
	* @var string
	*
	* @ORM\Column(name="remote_folder_name", type="string", length=255, nullable=false)
	*/
	private $remoteFolderName;

	/**
	* @var string
	*
	* @ORM\Column(name="icon_name", type="string", length=255, nullable=true)
	*/
	private $iconName;

	/**
	* @var string
	*
	* @ORM\Column(name="css_color", type="string", length=255, nullable=true)
	*/
	private $cssColor;

	/**
	* @var integer
	* @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\RetailersStatuses")
    * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=true)
	*/
	private $statusId = 1;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="created_at", type="datetime", nullable=false)
	*/
	private $createdAt;

	/**
	* @var \DateTime
	*
	* @ORM\Column(name="updated_at", type="datetime", nullable=true)
	*/
	private $updatedAt;

	/**
	* @var integer
    * @ORM\OneToOne(targetEntity="Bitxone\MainBundle\Entity\ShipmentTypes")
	* @ORM\JoinColumn(name="shipment_type_id", referencedColumnName="id", nullable=true)
	*/
	private $shipmentTypeId = 1;

	/**
	* @var string
	*
	* @ORM\Column(name="erp_custom_code", type="string", length=255, nullable=true)
	*/
	private $erpCustomCode;

	/**
	* @var string
	*
	* @ORM\Column(name="sales_person", type="string", length=255, nullable=true)
	*/
	private $salesPerson;

	/**
	  * @ORM\OneToMany(targetEntity="Bitxone\MainBundle\Entity\Orders", mappedBy="retailer_id")
	  * @ORM\JoinColumns({
	  *   @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
	  * })
	  */
	protected $orders;

	/**
	  * @ORM\OneToMany(targetEntity="Bitxone\MainBundle\Entity\ShippingCodes", mappedBy="retailerId")
	  * @ORM\JoinColumns({
	  *   @ORM\JoinColumn(name="retailer_id", referencedColumnName="id")
	  * })
	  */
	protected $shippingCodes;

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
	 * @return string
	 */
	public function getRetailerName()
	{
		return $this->retailerName;
	}

	/**
	 * @param string $retailerName
	 */
	public function setRetailerName( $retailerName )
	{
		$this->retailerName = $retailerName;
	}

	/**
	 * @return string
	 */
	public function getRemoteFolderName()
	{
		return $this->remoteFolderName;
	}

	/**
	 * @param string $remoteFolderName
	 */
	public function setRemoteFolderName( $remoteFolderName )
	{
		$this->remoteFolderName = $remoteFolderName;
	}

	/**
	 * @return string
	 */
	public function getIconName()
	{
		return $this->iconName;
	}

	/**
	 * @param string $iconName
	 */
	public function setIconName( $iconName )
	{
		$this->iconName = $iconName;
	}

	/**
	 * @return string
	 */
	public function getCssColor()
	{
		return $this->cssColor;
	}

	/**
	 * @param string $cssColor
	 */
	public function setCssColor( $cssColor )
	{
		$this->cssColor = $cssColor;
	}

	/**
	 * @return mixed
	 */
	public function getStatusId()
	{
		return $this->statusId;
	}

	/**
	 * @param mixed $statusId
	 */
	public function setStatusId( $statusId )
	{
		$this->statusId = $statusId;
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
	 * @return mixed
	 */
	public function getShipmentTypeId()
	{
		return $this->shipmentTypeId;
	}

	/**
	 * @param mixed $shipmentTypeId
	 */
	public function setShipmentTypeId( $shipmentTypeId )
	{
		$this->shipmentTypeId = $shipmentTypeId;
	}

	/**
	 * @return string
	 */
	public function getErpCustomCode()
	{
		return $this->erpCustomCode;
	}

	/**
	 * @param string $erpCustomCode
	 */
	public function setErpCustomCode( $erpCustomCode )
	{
		$this->erpCustomCode = $erpCustomCode;
	}

	/**
	 * @return string
	 */
	public function getSalesPerson()
	{
		return $this->salesPerson;
	}

	/**
	 * @param string $salesPerson
	 */
	public function setSalesPerson( $salesPerson )
	{
		$this->salesPerson = $salesPerson;
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
		return $this->getRetailerName();
	}

	/**
	 * @return mixed
	 */
	public function getOrders()
	{
		return $this->orders;
	}

	/**
	 * @param mixed $orders
	 */
	public function setOrders( $orders )
	{
		$this->orders = $orders;
	}

	/**
	 * @return mixed
	 */
	public function getShippingCodes()
	{
		return $this->shippingCodes;
	}

	/**
	 * @param mixed $shippingCodes
	 */
	public function setShippingCodes( $shippingCodes )
	{
		$this->shippingCodes = $shippingCodes;
	}



}

