<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 */
class News
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\Length(
     *          min = 1,
     *          max = 40,
     *          minMessage = "Your news title must be at least 5 characters long",
     *          maxMessage = "Your news title cannot be longer than 40 characters"
     * )
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     * @Assert\Length(
     *          min = 5,
     *          max = 250,
     *          minMessage = "Your news descriptrion must be at least 5 characters long",
     *          maxMessage = "Your news description cannot be longer than 250 characters"
     * )
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     * @Assert\Length(
     *          min = 2,
     *          max = 40,
     *          minMessage = "Your news place name must be at least 2 characters long",
     *          maxMessage = "Your news place name cannot be longer than 40 characters"
     * )
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="photoName", type="string", length=255)
     */
    private $photoName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uploadDate", type="datetimetz")
     */
    private $uploadDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="bought", type="boolean")
     */
    private $bought;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;
    
    /**
     * @var string
     *
     * @ORM\Column(name="uploadedBy", type="string", length=255)
     */
    private $uploadedBy;
    
    /**
     * @var string
     *
     * @ORM\Column(name="boughtBy", type="string", length=255)
     */
    private $boughtBy;
    
    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob")
     */
    private $photo;
    
    /**
     * @var int
     *
     * @ORM\Column(name="uploaderId", type="integer")
     */
    private $uploaderId;
    
    /**
     * @var int
     *
     * @ORM\Column(name="buyerId", type="integer")
     */
    private $buyerId;

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
     * @return News
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
     * @return News
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
     * Set place
     *
     * @param string $place
     *
     * @return News
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set photoName
     *
     * @param string $photoName
     *
     * @return News
     */
    public function setPhotoName($photoName)
    {
        $this->photoName = $photoName;

        return $this;
    }

    /**
     * Get photoName
     *
     * @return string
     */
    public function getPhotoName()
    {
        return $this->photoName;
    }

    /**
     * Set uploadDate
     *
     * @param \DateTime $uploadDate
     *
     * @return News
     */
    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;

        return $this;
    }

    /**
     * Get uploadDate
     *
     * @return \DateTime
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    /**
     * Set bought
     *
     * @param boolean $bought
     *
     * @return News
     */
    public function setBought($bought)
    {
        $this->bought = $bought;

        return $this;
    }

    /**
     * Get bought
     *
     * @return bool
     */
    public function getBought()
    {
        return $this->bought;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return News
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set uploadedBy
     *
     * @param string $uploadedBy
     *
     * @return News
     */
    public function setUploadedBy($uploadedBy)
    {
        $this->uploadedBy = $uploadedBy;

        return $this;
    }

    /**
     * Get uploadedBy
     *
     * @return string
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return News
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set boughtBy
     *
     * @param string $boughtBy
     *
     * @return News
     */
    public function setBoughtBy($boughtBy)
    {
        $this->boughtBy = $boughtBy;

        return $this;
    }

    /**
     * Get boughtBy
     *
     * @return string
     */
    public function getBoughtBy()
    {
        return $this->boughtBy;
    }

    /**
     * Set uploaderId
     *
     * @param integer $uploaderId
     *
     * @return News
     */
    public function setUploaderId($uploaderId)
    {
        $this->uploaderId = $uploaderId;

        return $this;
    }

    /**
     * Get uploaderId
     *
     * @return integer
     */
    public function getUploaderId()
    {
        return $this->uploaderId;
    }

    /**
     * Set buyerId
     *
     * @param integer $buyerId
     *
     * @return News
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;

        return $this;
    }

    /**
     * Get buyerId
     *
     * @return integer
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }
}
