<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 *
 * @method \App\Model\Entity\Usuario[] paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        /*
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
        */
        @session_start();
        $_SESSION['mensagem'] = "Obrigado por se cadastrar. Favor realizar o login...";
        $this->redirect(
            ['controller' => 'Login', 'action' => 'index']
        );
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        /*
        @session_start();
        if($_SESSION["usuario"]->id == $id) {
            $usuario = $this->Usuarios->get($id, [
                'contain' => ['Bandas', 'Estabelecimentos', 'Videos']
            ]);

            $this->set('usuario', $usuario);
            $this->set('_serialize', ['usuario']);
        }else{
            @session_start();
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            $this->redirect("/");
        }
        */
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();

        if ($this->request->is('post')) {
            if($this->request->getData("tipo") != ""){
                $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
                if ($this->Usuarios->save($usuario)) {

                    $new_user = TableRegistry::get('usuarios')
                        ->find()
                        ->select([
                            'id',
                            'nome',
                            'email'
                        ])
                        ->where(['email' => $this->request->getData("email")])
                        ->first();

                    @session_start();
                    $_SESSION['usuario'] = $new_user;

                    if($this->request->getData("tipo") == "estabelecimento"){
                        $this->redirect(
                            ['controller' => 'Estabelecimentos', 'action' => 'add']
                        );
                    }elseif($this->request->getData("tipo") == "banda"){
                        $this->redirect(
                            ['controller' => 'Bandas', 'action' => 'add']
                        );
                    }
                }
            }else{
                @session_start();
                $_SESSION['mensagem'] = "Favor, informe se vc é uma Banda ou um Estabelecimento.";
                $this->redirect(["action" => "add"]);
            }
        }

        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        @session_start();
        if(
            isset($_SESSION["usuario"]) &&
            $_SESSION["usuario"]->id == $id
        ) {
            $usuario = $this->Usuarios->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
                if ($this->Usuarios->save($usuario)) {
                    $this->Flash->success(__('The usuario has been saved.'));
                    @session_start();
                    $_SESSION['mensagem'] = "Usuário alterado com sucesso!";
                    return $this->redirect("/");
                }
                @session_start();
                $_SESSION['mensagem'] = "Erro ao alterado o Usuário!";
                return $this->redirect("/");
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
            $this->set(compact('usuario'));
            $this->set('_serialize', ['usuario']);
        }else{
            @session_start();
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            $this->redirect("/");
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        /*
        @session_start();
        if($_SESSION["usuario"]->id == $id) {
            $this->request->allowMethod(['post', 'delete']);
            $usuario = $this->Usuarios->get($id);
            if ($this->Usuarios->delete($usuario)) {
                $this->Flash->success(__('The usuario has been deleted.'));
            } else {
                $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }else{
            @session_start();
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            $this->redirect("/");
        }
        */
    }
}
