<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bandas Controller
 *
 * @property \App\Model\Table\BandasTable $Bandas
 *
 * @method \App\Model\Entity\Banda[] paginate($object = null, array $settings = [])
 */
class BandasController extends AppController
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
        $bandas = $this->paginate($this->Bandas);

        $this->set(compact('bandas'));
        $this->set('_serialize', ['bandas']);
        */
    }

    /**
     * View method
     *
     * @param string|null $id Banda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        @session_start();
        if($_SESSION["usuario"]->id == $id) {
            $banda = $this->Bandas->get($id, [
                'contain' => ['Usuarios', 'Estilos']
            ]);

            $this->set('banda', $banda);
            $this->set('_serialize', ['banda']);
        }else{
            @session_start();
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            $this->redirect("/");
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banda = $this->Bandas->newEntity();
        @session_start();
        $banda->usuario_id = $_SESSION["usuario"]->id;
        if ($this->request->is('post')) {
            $banda = $this->Bandas->patchEntity($banda, $this->request->getData());
            if ($this->Bandas->save($banda)) {
                $this->Flash->success(__('The banda has been saved.'));
            }
            $this->Flash->error(__('The banda could not be saved. Please, try again.'));
        }
        $usuarios = $this->Bandas->Usuarios->find('list', ['limit' => 200]);
        $estilos = $this->Bandas->Estilos->find('list', ['limit' => 200]);
        $this->set(compact('banda', 'usuarios', 'estilos'));
        $this->set('_serialize', ['banda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Banda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banda = $this->Bandas->get($id, [
            'contain' => ['Estilos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banda = $this->Bandas->patchEntity($banda, $this->request->getData());
            if ($this->Bandas->save($banda)) {
                $this->Flash->success(__('The banda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banda could not be saved. Please, try again.'));
        }
        $usuarios = $this->Bandas->Usuarios->find('list', ['limit' => 200]);
        $estilos = $this->Bandas->Estilos->find('list', ['limit' => 200]);
        $this->set(compact('banda', 'usuarios', 'estilos'));
        $this->set('_serialize', ['banda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Banda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banda = $this->Bandas->get($id);
        if ($this->Bandas->delete($banda)) {
            $this->Flash->success(__('The banda has been deleted.'));
        } else {
            $this->Flash->error(__('The banda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
