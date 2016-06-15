<?php

namespace PortfolioBundle\Entity;

/**
 * Media
 */
class Media
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \PortfolioBundle\Entity\Article
     */
    private $thumbneil;

    /**
     * @var \PortfolioBundle\Entity\User
     */
    private $avatar;


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
     * Set url
     *
     * @param string $url
     *
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Media
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
     * Set thumbneil
     *
     * @param \PortfolioBundle\Entity\Article $thumbneil
     *
     * @return Media
     */
    public function setThumbneil(\PortfolioBundle\Entity\Article $thumbneil = null)
    {
        $this->thumbneil = $thumbneil;

        return $this;
    }

    /**
     * Get thumbneil
     *
     * @return \PortfolioBundle\Entity\Article
     */
    public function getThumbneil()
    {
        return $this->thumbneil;
    }

    /**
     * Set avatar
     *
     * @param \PortfolioBundle\Entity\User $avatar
     *
     * @return Media
     */
    public function setAvatar(\PortfolioBundle\Entity\User $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \PortfolioBundle\Entity\User
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}

