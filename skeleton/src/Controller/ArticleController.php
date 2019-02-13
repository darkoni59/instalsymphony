<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 13/02/2019
 * Time: 11:21
 */

namespace App\Controller;




use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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

        return new Response("Mon article ayant pour titre".$titre."s'affiche");
    }

}