<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function contact()
    {
        $message = 'Bienvenue sur la page contact';
        $fruits = ['banane','pomme','orange'];
        $this->render('app.contactpage',array(
            'message' => $message,
            'fruits' => $fruits
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}