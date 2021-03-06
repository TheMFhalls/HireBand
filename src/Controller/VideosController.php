<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Videos Controller
 *
 * @property \App\Model\Table\VideosTable $Videos
 *
 * @method \App\Model\Entity\Video[] paginate($object = null, array $settings = [])
 */
class VideosController extends AppController
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
        $videos = $this->paginate($this->Videos);

        $this->set(compact('videos'));
        $this->set('_serialize', ['videos']);
        */
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        /*
        $video = $this->Videos->get($id, [
            'contain' => ['Usuarios']
        ]);

        $this->set('video', $video);
        $this->set('_serialize', ['video']);
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
            isset($_SESSION['usuario']['estabelecimento'])
        ){
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            return $this->redirect("/");
        }
        $video = $this->Videos->newEntity();
        if ($this->request->is('post')) {
            $video->usuario_id = $_SESSION["usuario"]->id;
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                $_SESSION['mensagem'] = "Vídeo inserido com sucesso!";
                return $this->redirect("/");
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $usuarios = $this->Videos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('video', 'usuarios'));
        $this->set('_serialize', ['video']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        @session_start();

        $video = $this->Videos->get($id, [
            'contain' => []
        ]);

        if($video->usuario_id != @$_SESSION["usuario"]->id){
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            return $this->redirect("/");
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                $_SESSION['mensagem'] = "Vídeo editado com sucesso!!";
                return $this->redirect("/");
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        $usuarios = $this->Videos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('video', 'usuarios'));
        $this->set('_serialize', ['video']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        @session_start();

        $video = $this->Videos->get($id, [
            'contain' => []
        ]);

        if($video->usuario_id != @$_SESSION["usuario"]->id){
            $_SESSION['mensagem'] = "Você não tem permissão para acessar esta página.";
            return $this->redirect("/");
        }

        //$this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success(__('The video has been deleted.'));

            $_SESSION['mensagem'] = "Vídeo deletado com sucesso!!";
            return $this->redirect("/");
        } else {
            $this->Flash->error(__('The video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
