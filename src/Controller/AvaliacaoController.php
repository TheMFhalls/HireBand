<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avaliacao Controller
 *
 * @property \App\Model\Table\AvaliacaoTable $Avaliacao
 *
 * @method \App\Model\Entity\Avaliacao[] paginate($object = null, array $settings = [])
 */
class AvaliacaoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bandas', 'Usuarios']
        ];
        $avaliacao = $this->paginate($this->Avaliacao);

        $this->set(compact('avaliacao'));
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacao = $this->Avaliacao->get($id, [
            'contain' => ['Bandas', 'Usuarios']
        ]);

        $this->set('avaliacao', $avaliacao);
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacao = $this->Avaliacao->newEntity();
        if ($this->request->is('post')) {
            $avaliacao = $this->Avaliacao->patchEntity($avaliacao, $this->request->getData());
            if ($this->Avaliacao->save($avaliacao)) {
                $this->Flash->success(__('The avaliacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avaliacao could not be saved. Please, try again.'));
        }
        $bandas = $this->Avaliacao->Bandas->find('list', ['limit' => 200]);
        $usuarios = $this->Avaliacao->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('avaliacao', 'bandas', 'usuarios'));
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacao = $this->Avaliacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacao = $this->Avaliacao->patchEntity($avaliacao, $this->request->getData());
            if ($this->Avaliacao->save($avaliacao)) {
                $this->Flash->success(__('The avaliacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avaliacao could not be saved. Please, try again.'));
        }
        $bandas = $this->Avaliacao->Bandas->find('list', ['limit' => 200]);
        $usuarios = $this->Avaliacao->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('avaliacao', 'bandas', 'usuarios'));
        $this->set('_serialize', ['avaliacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacao = $this->Avaliacao->get($id);
        if ($this->Avaliacao->delete($avaliacao)) {
            $this->Flash->success(__('The avaliacao has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
