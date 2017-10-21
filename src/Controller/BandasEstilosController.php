<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BandasEstilos Controller
 *
 * @property \App\Model\Table\BandasEstilosTable $BandasEstilos
 *
 * @method \App\Model\Entity\BandasEstilo[] paginate($object = null, array $settings = [])
 */
class BandasEstilosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bandas', 'Estilos']
        ];
        $bandasEstilos = $this->paginate($this->BandasEstilos);

        $this->set(compact('bandasEstilos'));
        $this->set('_serialize', ['bandasEstilos']);
    }

    /**
     * View method
     *
     * @param string|null $id Bandas Estilo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bandasEstilo = $this->BandasEstilos->get($id, [
            'contain' => ['Bandas', 'Estilos']
        ]);

        $this->set('bandasEstilo', $bandasEstilo);
        $this->set('_serialize', ['bandasEstilo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bandasEstilo = $this->BandasEstilos->newEntity();
        if ($this->request->is('post')) {
            $bandasEstilo = $this->BandasEstilos->patchEntity($bandasEstilo, $this->request->getData());
            if ($this->BandasEstilos->save($bandasEstilo)) {
                $this->Flash->success(__('The bandas estilo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bandas estilo could not be saved. Please, try again.'));
        }
        $bandas = $this->BandasEstilos->Bandas->find('list', ['limit' => 200]);
        $estilos = $this->BandasEstilos->Estilos->find('list', ['limit' => 200]);
        $this->set(compact('bandasEstilo', 'bandas', 'estilos'));
        $this->set('_serialize', ['bandasEstilo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bandas Estilo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bandasEstilo = $this->BandasEstilos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bandasEstilo = $this->BandasEstilos->patchEntity($bandasEstilo, $this->request->getData());
            if ($this->BandasEstilos->save($bandasEstilo)) {
                $this->Flash->success(__('The bandas estilo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bandas estilo could not be saved. Please, try again.'));
        }
        $bandas = $this->BandasEstilos->Bandas->find('list', ['limit' => 200]);
        $estilos = $this->BandasEstilos->Estilos->find('list', ['limit' => 200]);
        $this->set(compact('bandasEstilo', 'bandas', 'estilos'));
        $this->set('_serialize', ['bandasEstilo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bandas Estilo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bandasEstilo = $this->BandasEstilos->get($id);
        if ($this->BandasEstilos->delete($bandasEstilo)) {
            $this->Flash->success(__('The bandas estilo has been deleted.'));
        } else {
            $this->Flash->error(__('The bandas estilo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
