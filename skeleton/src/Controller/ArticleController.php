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
     * @route("/")
     */
    public function homepage() {
        return new Response('test');
    }
    /** @route("/articles/{titre}") */
    function show($titre){
$comments=["mon premier commentaire","mon deuxieme commentaire","mon troisieme commentaire"];
        return $this->render('article/show.html.twig',[
            "title"=>$titre,
            "comments"=>$comments,

        ]);

    }

}