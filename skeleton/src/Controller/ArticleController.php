<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 13/02/2019
 * Time: 11:21
 */

namespace App\Controller;




use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function homepage() {
        return new Response('test');
    }

}