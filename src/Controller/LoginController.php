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
        @session_start();
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
            $user_banda = TableRegistry::get('bandas')
                ->find()
                ->select([
                    'id',
                    'nome_banda'
                ])
                ->where(['usuario_id' => $usuario->id])
                ->first();
            $user_estabelecimento = TableRegistry::get('estabelecimentos')
                ->find()
                ->select([
                    'id',
                    'nome_fantasia'
                ])
                ->where(['usuario_id' => $usuario->id])
                ->first();

            $_SESSION['usuario'] = $usuario;

            if(isset($user_banda->id)){
                $_SESSION['usuario']['banda'] = $user_banda;
            }elseif(isset($user_estabelecimento->id)){
                $_SESSION['usuario']['estabelecimento'] = $user_estabelecimento;
            }else{
                $this->logout();
            }

            $_SESSION['mensagem'] = "Obrigado por logar, $usuario->nome";
            $this->redirect('/');
        }else{
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
