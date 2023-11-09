<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Weblitzer\Controller;

/**
 *
 */
class AdminController extends Controller
{
    public function dashBoard()
    {
        $message = 'DashBoard articles';
        $articles = ArticleModel::all();
        $nbArticle = ArticleModel::count();

        $this->render('app.article.dashboard',array(
            'message' => $message,
            'articles' => $articles,
            'nbArticle' => $nbArticle
        ));
    }
}
