<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Service\Form;
use App\Service\Validation;
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

    public function add()
    {
        $errors = [];
        
        if (!empty($_POST['submitted']))
        {
            $postArticle = $this->cleanXss($_POST);
            $validerArticle = new Validation();

            $errors['titre'] = $validerArticle->textValid($postArticle['titre'],'titre',5,100);
            $errors['contenu'] = $validerArticle->textValid($postArticle['contenu'],'contenu',50,1000);

            if ($validerArticle->IsValid($errors))
            {
                //Methode d'insertion
                ArticleModel::insert($postArticle);
                $this->redirect('articles');
                echo "Insertion";
            }
        }

        $formAdd = new Form($errors);
        $this->render('app.article.addarticle',array(
            'formAdd' => $formAdd,
        ));
    }

    public function edit($id)
    {
        $articleEdit = $this->isArticleExist($id);
        $errors = [];

        
        if (!empty($_POST['submitted']))
        {
            $postArticleEdit = $this->cleanXss($_POST);
            $validerArticleEdit = new Validation();

            $errors['titre'] = $validerArticleEdit->textValid($postArticleEdit['titre'],'titre',5,100);
            $errors['contenu'] = $validerArticleEdit->textValid($postArticleEdit['contenu'],'contenu',50,1000);

            if ($validerArticleEdit->IsValid($errors))
            {
                //Methode d'insertion
                ArticleModel::update($postArticleEdit, $id);
                $this->redirect('articles');
            }
        }

        $formEdit = new Form($errors);
        $this->render('app.article.editarticle',array(
            'formEdit' => $formEdit,
            'articleEdit' => $articleEdit
        ));
    }

    public function isArticleExist($id)
    {
        $article = ArticleModel::findById($id);
        return (empty($article)) ? $this->Abort404() : $article;
    }
}
