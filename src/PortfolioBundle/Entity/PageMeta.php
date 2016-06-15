<?php

namespace PortfolioBundle\Entity;

/**
 * PageMeta
 */
class PageMeta
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
     * @var \PortfolioBundle\Entity\Page
     */
    private $page;


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
     * @return PageMeta
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
     * @return PageMeta
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
     * Set page
     *
     * @param \PortfolioBundle\Entity\Page $page
     *
     * @return PageMeta
     */
    public function setPage(\PortfolioBundle\Entity\Page $page = null)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \PortfolioBundle\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }
}

