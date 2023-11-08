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
        $nbArticle = ArticleModel::count();

        $this->render('app.article.listarticle',array(
            'message' => $message,
            'articles' => $articles,
            'nbArticle' => $nbArticle
        ));
    }

    public function show($id)
    {
        $message = 'Votre article :';
        $article = $this->isArticleExist($id);
        $this->render('app.article.article',array(
            'message' => $message,
            'article' => $article,
        ));
    }

    public function delete($id)
    {
        $article = $this->isArticleExist($id);
        ArticleModel::delete($id);
        $this->redirect('articles');
    }



    public function isArticleExist($id)
    {
        $article = ArticleModel::findById($id);
        return (empty($article)) ? $this->Abort404() : $article;
    }
}
