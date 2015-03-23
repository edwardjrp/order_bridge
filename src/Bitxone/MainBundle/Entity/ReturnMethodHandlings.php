<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/17/15
 * Time: 5:10 PM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnMethodHandlings
 *
 * @ORM\Table(name="return_method_handlings")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */

class ReturnMethodHandlings 
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
	* @ORM\Column(name="guid", type="string", length=100, nullable=false)
	*/
	private $guid;

	/**
	* @var string
	*
	* @ORM\Column(name="method_name", type="string", length=255, nullable=false)
	*/
	private $methodName;

	/**
	* @var string
	*
	* @ORM\Column(name="method_code", type="string", length=255, nullable=false)
	*/
	private $methodCode;

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
	 * @return string
	 */
	public function getMethodName()
	{
		return $this->methodName;
	}

	/**
	 * @param string $methodName
	 */
	public function setMethodName( $methodName )
	{
		$this->methodName = $methodName;
	}

	/**
	 * @return string
	 */
	public function getMethodCode()
	{
		return $this->methodCode;
	}

	/**
	 * @param string $methodCode
	 */
	public function setMethodCode( $methodCode )
	{
		$this->methodCode = $methodCode;
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
		return $this->getMethodName();
	}

}

