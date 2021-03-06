<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competions
 *
 * @ORM\Table(name="competions")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CompetionsRepository")
 */
class Competions
{
    const IS_CONFEDRATION = 1;
    const IS_LIGUE = 2;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Levels", mappedBy="competition", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $levels;

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
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="font", type="string", length=255, nullable=true)
     */
    private $fond;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contentClassement", type="text", nullable=true)
     */
    private $contentClassement;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="string", nullable=true)
     */
    private $region;


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
     * @return Competions
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
     * @return Competions
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
    
    /**
     * Get contentClassement
     *
     * @return string
     */
    public function getContentClassement()
    {
        return $this->contentClassement;
    }
    
    /**
     * Set contentClassement
     *
     * @param string $contentClassement
     *
     * @return Competions
     */
    public function setContentClassement($contentClassement)
    {
        $this->contentClassement = $contentClassement;

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
     * Get title
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Competions
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->levels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add level
     *
     * @param \BackBundle\Entity\Levels $level
     *
     * @return Competions
     */
    public function addLevel(\BackBundle\Entity\Levels $level)
    {
        $this->levels[] = $level;

        return $this;
    }

    /**
     * Remove level
     *
     * @param \BackBundle\Entity\Levels $level
     */
    public function removeLevel(\BackBundle\Entity\Levels $level)
    {
        $this->levels->removeElement($level);
    }

    /**
     * Get levels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLevels()
    {
        return $this->levels;
    }
    
    public function __toString() {
        return $this->getTitle();
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Competions
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set fond
     *
     * @param string $fond
     *
     * @return Competions
     */
    public function setFond($fond)
    {
        $this->fond = $fond;

        return $this;
    }

    /**
     * Get fond
     *
     * @return string
     */
    public function getFond()
    {
        return $this->fond;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Competions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
}
