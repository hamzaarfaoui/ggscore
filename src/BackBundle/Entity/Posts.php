<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\PostsRepository")
 */
class Posts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="FrontBundle\Entity\Langues", cascade={"remove", "persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="isVertical", type="integer", nullable=true)
     */
    private $isVertical;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="isLeft", type="integer", nullable=true)
     */
    private $isLeft;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="inSlider", type="integer", nullable=true)
     */
    private $inSlider;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="OrderInSlider", type="integer", nullable=true)
     */
    private $OrderInSlider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Posts
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Posts
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Posts
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Posts
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Posts
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set langue
     *
     * @param \FrontBundle\Entity\Langues $langue
     *
     * @return Posts
     */
    public function setLangue(\FrontBundle\Entity\Langues $langue = null)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return \FrontBundle\Entity\Langues
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set isVertical
     *
     * @param integer $isVertical
     *
     * @return Posts
     */
    public function setIsVertical($isVertical)
    {
        $this->isVertical = $isVertical;

        return $this;
    }

    /**
     * Get isVertical
     *
     * @return integer
     */
    public function getIsVertical()
    {
        return $this->isVertical;
    }

    /**
     * Set isLeft
     *
     * @param integer $isLeft
     *
     * @return Posts
     */
    public function setIsLeft($isLeft)
    {
        $this->isLeft = $isLeft;

        return $this;
    }

    /**
     * Get isLeft
     *
     * @return integer
     */
    public function getIsLeft()
    {
        return $this->isLeft;
    }

    /**
     * Set inSlider
     *
     * @param integer $inSlider
     *
     * @return Posts
     */
    public function setInSlider($inSlider)
    {
        $this->inSlider = $inSlider;

        return $this;
    }

    /**
     * Get inSlider
     *
     * @return integer
     */
    public function getInSlider()
    {
        return $this->inSlider;
    }

    /**
     * Set orderInSlider
     *
     * @param integer $orderInSlider
     *
     * @return Posts
     */
    public function setOrderInSlider($orderInSlider)
    {
        $this->OrderInSlider = $orderInSlider;

        return $this;
    }

    /**
     * Get orderInSlider
     *
     * @return integer
     */
    public function getOrderInSlider()
    {
        return $this->OrderInSlider;
    }
}
