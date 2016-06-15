<?php

namespace PortfolioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcher;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\Validator\ConstraintViolationList;

use PortfolioBundle\Entity\Article;
use PortfolioBundle\Entity\ArticleMeta;

class RestArticleController extends FOSRestController
{
    
    /**
     * Return the overall Post List.
     * @ApiDoc(
     *   section = "Articles",
     *   description = "Return the overall Articles List",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     */
    public function getArticlesAction()
    {
        $repo = $this->get('portfolio_article.article_repository');
        $data = $repo->findAll();
        $view = $this->view($data);
        return $this->handleView($view);
    }

}
