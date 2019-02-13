<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 13/02/2019
 * Time: 11:21
 */

namespace App\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @return Response
     * @route("/", name="app_homepage")
     */
    public function homepage() {
        return $this->render('article/home.html.twig') ;
    }
    /** @route("/articles/{titre}",name="article_show") */
    function show($titre){
$comments=["mon premier commentaire","mon deuxieme commentaire","mon troisieme commentaire"];
        return $this->render('article/show.html.twig',[
            "title"=>$titre,
            "comments"=>$comments,

        ]);

    }

}