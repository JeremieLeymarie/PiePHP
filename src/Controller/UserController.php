<?php


class UserController extends Core\Controller
{
    public function addAction()
    {
        $this->render("register");
    }

    public function registerAction(){
        $user = new UserModel(); 
        $user->setPassword($_POST["register-password"]);
        $user->setEmail($_POST["register-email"]);
        $user->save(); 
    }
}
