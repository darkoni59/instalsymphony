<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 13/02/2019
 * Time: 11:21
 */

namespace App\Controller;



use App\Entity\Article;
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
        $articlerep=$this->getDoctrine()->getRepository(Article::class);
        $articles=$articlerep->findAll();
        return $this->render('article/home.html.twig',[
            'articles'=>$articles
        ]) ;
// returne un tableau $tbl = $stmt->fetchAll();
    }
    /**

    @Route("/article/{id}", name="article_show_from_db") */

    public function showFromDB(Article $article) {

        $comments = ["Commentaire 1","Commentaire 2","Commentaire "];

        return $this->render('article/show.html.twig',
            ["title"=>$article->getTitre(),
                "contenu"=>$article->getContenu(),
                "comments"=>$comments
            ]);

    }
    /** @route("/articles/{titre}",name="article_show") */
    function show($titre){
$comments=["mon premier commentaire","mon deuxieme commentaire","mon troisieme commentaire"];
        return $this->render('article/show.html.twig',[
            "title"=>$titre,
            "comments"=>$comments,

        ]
        );
    }
    /**
     * @Route("/articleCreate", name="article_create")
     */
    function creat(){

        $entityManager = $this->getDoctrine()->getManager();

        $article = new Article();
        $article->setTitre('titre');
        $article->setContenu('contenu');


        // Cette instruction permet d'indiquer à Doctrine qu'on souhaite sauvegarder en mémoire le nouvel enregistrement
        $entityManager->persist($article);

        // Cette instruction éxécute la requete , en réalité il s'agit d'éxécuter toutes les requetes plaçées en mémoire,
        // dans notre cas, il n'y en a qu'une
        $entityManager->flush();

        return new Response('Saved new article with id '.$article->getId());

    }


}