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
            ->select([
                'id',
                'nome',
                'email'
            ])
            ->where(['email' => $_REQUEST['email']])
            ->first();

        if($usuario->id){
            @session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['mensagem'] = "Obrigado por logar, $usuario->nome";
            $this->redirect('/');
        }else{
            @session_start();
            $_SESSION['mensagem'] = "Usuário ou senha inválidas!";
            $this->redirect(
                ['controller' => 'Login', 'action' => 'index']
            );
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION);
        session_destroy();
        $this->redirect('/');
    }
}
