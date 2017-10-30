<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Estabelecimentos Controller
 *
 * @property \App\Model\Table\EstabelecimentosTable $Estabelecimentos
 *
 * @method \App\Model\Entity\Estabelecimento[] paginate($object = null, array $settings = [])
 */
class EstabelecimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        /*
        $this->paginate = [
            'contain' => ['Usuarios']
        ];
        $estabelecimentos = $this->paginate($this->Estabelecimentos);

        $this->set(compact('estabelecimentos'));
        $this->set('_serialize', ['estabelecimentos']);
        */
    }

    /**
     * View method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        /*
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => ['Usuarios']
        ]);

        $this->set('estabelecimento', $estabelecimento);
        $this->set('_serialize', ['estabelecimento']);
        */
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        @session_start();
        if(
            isset($_SESSION['usuario']['banda']) ||
            isset($_SESSION['usuario']['estabelecimento'])
        ){
            $_SESSION['mensagem'] = "Você já possui um cadastro!";
            return $this->redirect("/");
        }
        $estabelecimento = $this->Estabelecimentos->newEntity();
        if ($this->request->is('post')) {
            @session_start();
            $estabelecimento->usuario_id = $_SESSION["usuario"]->id;
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->getData());
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The estabelecimento has been saved.'));

                $new_estabelecimento = TableRegistry::get('estabelecimentos')
                    ->find()
                    ->select([
                        'id',
                        'nome_fantasia'
                    ])
                    ->where(['usuario_id' => $_SESSION['usuario']->id])
                    ->first();

                $_SESSION['usuario']['estabelecimento'] = $new_estabelecimento;
                $_SESSION['mensagem'] = "Usuário inserido com sucesso!";
                return $this->redirect("/");
            }
            $this->Flash->error(__('The estabelecimento could not be saved. Please, try again.'));
        }
        $usuarios = $this->Estabelecimentos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimento', 'usuarios'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        @session_start();
        if(@$_SESSION['usuario']['estabelecimento']->id != $id){
            $_SESSION['mensagem'] = "Você não tem permissão para editar um estabelecimento!";
            return $this->redirect("/");
        }
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->getData());
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The estabelecimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estabelecimento could not be saved. Please, try again.'));
        }
        $usuarios = $this->Estabelecimentos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('estabelecimento', 'usuarios'));
        $this->set('_serialize', ['estabelecimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        /*
        $this->request->allowMethod(['post', 'delete']);
        $estabelecimento = $this->Estabelecimentos->get($id);
        if ($this->Estabelecimentos->delete($estabelecimento)) {
            $this->Flash->success(__('The estabelecimento has been deleted.'));
        } else {
            $this->Flash->error(__('The estabelecimento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        */
    }
}
