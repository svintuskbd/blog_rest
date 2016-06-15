<?php

namespace PortfolioBundle\Entity;

/**
 * Rating
 */
class Rating
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $likeVal;

    /**
     * @var string
     */
    private $disLikeVal;

    /**
     * @var \PortfolioBundle\Entity\Article
     */
    private $article;

    /**
     * @var \PortfolioBundle\Entity\Portfolio
     */
    private $portfolio;


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
     * Set likeVal
     *
     * @param string $likeVal
     *
     * @return Rating
     */
    public function setLikeVal($likeVal)
    {
        $this->likeVal = $likeVal;

        return $this;
    }

    /**
     * Get likeVal
     *
     * @return string
     */
    public function getLikeVal()
    {
        return $this->likeVal;
    }

    /**
     * Set disLikeVal
     *
     * @param string $disLikeVal
     *
     * @return Rating
     */
    public function setDisLikeVal($disLikeVal)
    {
        $this->disLikeVal = $disLikeVal;

        return $this;
    }

    /**
     * Get disLikeVal
     *
     * @return string
     */
    public function getDisLikeVal()
    {
        return $this->disLikeVal;
    }

    /**
     * Set article
     *
     * @param \PortfolioBundle\Entity\Article $article
     *
     * @return Rating
     */
    public function setArticle(\PortfolioBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \PortfolioBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set portfolio
     *
     * @param \PortfolioBundle\Entity\Portfolio $portfolio
     *
     * @return Rating
     */
    public function setPortfolio(\PortfolioBundle\Entity\Portfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    /**
     * Get portfolio
     *
     * @return \PortfolioBundle\Entity\Portfolio
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
}

