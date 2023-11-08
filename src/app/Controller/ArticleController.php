<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function listArticle()
    {
        $message = 'Liste des articles';
        $articles = ArticleModel::all();

        $this->render('app.article.listarticle',array(
            'message' => $message,
            'articles' => $articles
        ));
    }

}