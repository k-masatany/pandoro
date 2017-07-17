<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Whispers Controller
 *
 *
 * @method \App\Model\Entity\Whisper[] paginate($object = null, array $settings = [])
 */
class WhispersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $whispers = $this->paginate($this->Whispers);

        $this->set(compact('whispers'));
        $this->set('_serialize', ['whispers']);
    }

    /**
     * View method
     *
     * @param string|null $id Whisper id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $whisper = $this->Whispers->get($id, [
            'contain' => []
        ]);

        $this->set('whisper', $whisper);
        $this->set('_serialize', ['whisper']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $whisper = $this->Whispers->newEntity();
        if ($this->request->is('post')) {
            $whisper = $this->Whispers->patchEntity($whisper, $this->request->getData());
            if ($this->Whispers->save($whisper)) {
                $this->Flash->success(__('The whisper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The whisper could not be saved. Please, try again.'));
        }
        $this->set(compact('whisper'));
        $this->set('_serialize', ['whisper']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Whisper id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $whisper = $this->Whispers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $whisper = $this->Whispers->patchEntity($whisper, $this->request->getData());
            if ($this->Whispers->save($whisper)) {
                $this->Flash->success(__('The whisper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The whisper could not be saved. Please, try again.'));
        }
        $this->set(compact('whisper'));
        $this->set('_serialize', ['whisper']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Whisper id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $whisper = $this->Whispers->get($id);
        if ($this->Whispers->delete($whisper)) {
            $this->Flash->success(__('The whisper has been deleted.'));
        } else {
            $this->Flash->error(__('The whisper could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
