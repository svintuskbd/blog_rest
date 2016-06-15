<?php

namespace PortfolioBundle\Entity;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $view;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \PortfolioBundle\Entity\Media
     */
    private $article;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fields;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rating;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fields = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rating = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Article
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
     * Set view
     *
     * @param integer $view
     *
     * @return Article
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
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
     * Set description
     *
     * @param string $description
     *
     * @return Article
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

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Article
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Article
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
     * Set article
     *
     * @param \PortfolioBundle\Entity\Media $article
     *
     * @return Article
     */
    public function setArticle(\PortfolioBundle\Entity\Media $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \PortfolioBundle\Entity\Media
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Add field
     *
     * @param \PortfolioBundle\Entity\ArticleMeta $field
     *
     * @return Article
     */
    public function addField(\PortfolioBundle\Entity\ArticleMeta $field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * Remove field
     *
     * @param \PortfolioBundle\Entity\ArticleMeta $field
     */
    public function removeField(\PortfolioBundle\Entity\ArticleMeta $field)
    {
        $this->fields->removeElement($field);
    }

    /**
     * Get fields
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Add comment
     *
     * @param \PortfolioBundle\Entity\Comment $comment
     *
     * @return Article
     */
    public function addComment(\PortfolioBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \PortfolioBundle\Entity\Comment $comment
     */
    public function removeComment(\PortfolioBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add rating
     *
     * @param \PortfolioBundle\Entity\Rating $rating
     *
     * @return Article
     */
    public function addRating(\PortfolioBundle\Entity\Rating $rating)
    {
        $this->rating[] = $rating;

        return $this;
    }

    /**
     * Remove rating
     *
     * @param \PortfolioBundle\Entity\Rating $rating
     */
    public function removeRating(\PortfolioBundle\Entity\Rating $rating)
    {
        $this->rating->removeElement($rating);
    }

    /**
     * Get rating
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRating()
    {
        return $this->rating;
    }
}

