<?php

namespace PortfolioBundle\Entity;

/**
 * ArticleMeta
 */
class ArticleMeta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keyField;

    /**
     * @var string
     */
    private $valField;

    /**
     * @var \PortfolioBundle\Entity\Article
     */
    private $article;


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
     * Set keyField
     *
     * @param string $keyField
     *
     * @return ArticleMeta
     */
    public function setKeyField($keyField)
    {
        $this->keyField = $keyField;

        return $this;
    }

    /**
     * Get keyField
     *
     * @return string
     */
    public function getKeyField()
    {
        return $this->keyField;
    }

    /**
     * Set valField
     *
     * @param string $valField
     *
     * @return ArticleMeta
     */
    public function setValField($valField)
    {
        $this->valField = $valField;

        return $this;
    }

    /**
     * Get valField
     *
     * @return string
     */
    public function getValField()
    {
        return $this->valField;
    }

    /**
     * Set article
     *
     * @param \PortfolioBundle\Entity\Article $article
     *
     * @return ArticleMeta
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
}

