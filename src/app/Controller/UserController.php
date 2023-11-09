<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;

/**
 *
 */
class UserController extends Controller
{

    public function listUsers()
    {
        $message = 'Liste des users';
        $users = UserModel::all();
        $nbUsers = UserModel::count();

        $this->render('app.users.listuser',array(
            'message' => $message,
            'users' => $users,
            'nbUsers' => $nbUsers
        ));
    }

    public function show($id)
    {
        $message = 'User :';
        $user = $this->isUserExist($id);
        $this->render('app.users.user',array(
            'message' => $message,
            'user' => $user,
        ));
    }

    public function delete($id)
    {
        $user = $this->isUserExist($id);
        UserModel::delete($id);
        $this->redirect('users');
    }

    public function add()
    {
        $errors = [];
        
        if (!empty($_POST['submitted']))
        {
            $newUser = $this->cleanXss($_POST);
            $validerUser = new Validation();

            $errors['nom'] = $validerUser->textValid($newUser['nom'],'nom',3,100);
            $errors['email'] = $validerUser->textValid($newUser['email'],'email',3,100);

            if ($validerUser->IsValid($errors))
            {
                //Methode d'insertion
                UserModel::insert($newUser);
                $this->redirect('users');
            }
        }

        $formAdd = new Form($errors);
        $this->render('app.users.adduser',array(
            'formAdd' => $formAdd,
        ));
    }

    public function edit($id)
    {
        $userEdit = $this->isUserExist($id);
        $errors = [];

        
        if (!empty($_POST['submitted']))
        {
            $userEdit = $this->cleanXss($_POST);
            $validerUserEdit = new Validation();

            $errors['nom'] = $validerUserEdit->textValid($userEdit['nom'],'nom',3,100);
            $errors['email'] = $validerUserEdit->textValid($userEdit['email'],'email',3,100);

            if ($validerUserEdit->IsValid($errors))
            {
                //Methode d'insertion
                UserModel::update($userEdit, $id);
                $this->redirect('users');
            }
        }

        $formEdit = new Form($errors);
        $this->render('app.users.edituser',array(
            'formEdit' => $formEdit,
            'userEdit' => $userEdit
        ));
    }

    public function isUserExist($id)
    {
        $User = UserModel::findById($id);
        return (empty($User)) ? $this->Abort404() : $User;
    }
}
