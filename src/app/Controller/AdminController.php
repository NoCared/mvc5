<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Model\UserModel;
use App\Weblitzer\Controller;

/**
 *
 */
class AdminController extends Controller
{
    public function dashBoardArticles()
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
    public function dashBoardUsers()
    {
        $message = 'DashBoard users';
        $users = UserModel::all();
        $nbUser = UserModel::count();

        $this->render('app.users.dashboard',array(
            'message' => $message,
            'users' => $users,
            'nbUser' => $nbUser
        ));
    }
}
