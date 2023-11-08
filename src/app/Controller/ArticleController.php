<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function listArticle()
    {
        $message = 'Liste des articles';

        $this->render('app.article.listarticle',array(
            'message' => $message,
        ));
    }

}
