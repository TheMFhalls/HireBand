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
            session_start();

            $_SESSION['usuario'] = $usuario;

            $this->redirect('/');
        }else{
            $this->redirect(
                ['controller' => 'Login', 'action' => 'index']
            );
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        $_SESSION = null;
    }
}
