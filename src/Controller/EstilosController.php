<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estilos Controller
 *
 * @property \App\Model\Table\EstilosTable $Estilos
 *
 * @method \App\Model\Entity\Estilo[] paginate($object = null, array $settings = [])
 */
class EstilosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $estilos = $this->paginate($this->Estilos);

        $this->set(compact('estilos'));
        $this->set('_serialize', ['estilos']);
    }

    /**
     * View method
     *
     * @param string|null $id Estilo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estilo = $this->Estilos->get($id, [
            'contain' => ['Bandas']
        ]);

        $this->set('estilo', $estilo);
        $this->set('_serialize', ['estilo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estilo = $this->Estilos->newEntity();
        if ($this->request->is('post')) {
            $estilo = $this->Estilos->patchEntity($estilo, $this->request->getData());
            if ($this->Estilos->save($estilo)) {
                $this->Flash->success(__('The estilo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estilo could not be saved. Please, try again.'));
        }
        $bandas = $this->Estilos->Bandas->find('list', ['limit' => 200]);
        $this->set(compact('estilo', 'bandas'));
        $this->set('_serialize', ['estilo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estilo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estilo = $this->Estilos->get($id, [
            'contain' => ['Bandas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estilo = $this->Estilos->patchEntity($estilo, $this->request->getData());
            if ($this->Estilos->save($estilo)) {
                $this->Flash->success(__('The estilo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estilo could not be saved. Please, try again.'));
        }
        $bandas = $this->Estilos->Bandas->find('list', ['limit' => 200]);
        $this->set(compact('estilo', 'bandas'));
        $this->set('_serialize', ['estilo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estilo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estilo = $this->Estilos->get($id);
        if ($this->Estilos->delete($estilo)) {
            $this->Flash->success(__('The estilo has been deleted.'));
        } else {
            $this->Flash->error(__('The estilo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
