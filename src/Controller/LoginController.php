<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class LoginController extends AppController
{
    public function index()
    {

    }

    public function sessao(){
        $usuario = TableRegistry::get('usuarios')
            ->find()
            ->where(['email' => $_REQUEST['email']])
            ->first();

        if($usuario->id){
            session_start();

            $_SESSION['usuario'] = $usuario;

            $this->redirect('/');
        }else{
            echo "SEM ACESSO";
        }
    }
}
