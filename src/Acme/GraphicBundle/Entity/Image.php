<?php
namespace Acme\GraphicBundle\Entity;
class Image {
	protected $page;
	protected $smallPath;
	protected $bigPath;
	protected $downloadPath;
	protected $altText;
	protected $description; 
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set page
     *
     * @param string $page
     * @return Image
     */
    public function setPage($page)
    {
        $this->page = $page;
    
        return $this;
    }

    /**
     * Get page
     *
     * @return string 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set smallPath
     *
     * @param string $smallPath
     * @return Image
     */
    public function setSmallPath($smallPath)
    {
        $this->smallPath = $smallPath;
    
        return $this;
    }

    /**
     * Get smallPath
     *
     * @return string 
     */
    public function getSmallPath()
    {
        return $this->smallPath;
    }

    /**
     * Set bigPath
     *
     * @param string $bigPath
     * @return Image
     */
    public function setBigPath($bigPath)
    {
        $this->bigPath = $bigPath;
    
        return $this;
    }

    /**
     * Get bigPath
     *
     * @return string 
     */
    public function getBigPath()
    {
        return $this->bigPath;
    }

    /**
     * Set downloadPath
     *
     * @param string $downloadPath
     * @return Image
     */
    public function setDownloadPath($downloadPath)
    {
        $this->downloadPath = $downloadPath;
    
        return $this;
    }

    /**
     * Get downloadPath
     *
     * @return string 
     */
    public function getDownloadPath()
    {
        return $this->downloadPath;
    }

    /**
     * Set altText
     *
     * @param string $altText
     * @return Image
     */
    public function setAltText($altText)
    {
        $this->altText = $altText;
    
        return $this;
    }

    /**
     * Get altText
     *
     * @return string 
     */
    public function getAltText()
    {
        return $this->altText;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}