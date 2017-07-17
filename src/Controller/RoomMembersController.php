<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomMembers Controller
 *
 *
 * @method \App\Model\Entity\RoomMember[] paginate($object = null, array $settings = [])
 */
class RoomMembersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $roomMembers = $this->paginate($this->RoomMembers);

        $this->set(compact('roomMembers'));
        $this->set('_serialize', ['roomMembers']);
    }

    /**
     * View method
     *
     * @param string|null $id Room Member id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomMember = $this->RoomMembers->get($id, [
            'contain' => []
        ]);

        $this->set('roomMember', $roomMember);
        $this->set('_serialize', ['roomMember']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomMember = $this->RoomMembers->newEntity();
        if ($this->request->is('post')) {
            $roomMember = $this->RoomMembers->patchEntity($roomMember, $this->request->getData());
            if ($this->RoomMembers->save($roomMember)) {
                $this->Flash->success(__('The room member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room member could not be saved. Please, try again.'));
        }
        $this->set(compact('roomMember'));
        $this->set('_serialize', ['roomMember']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Member id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomMember = $this->RoomMembers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomMember = $this->RoomMembers->patchEntity($roomMember, $this->request->getData());
            if ($this->RoomMembers->save($roomMember)) {
                $this->Flash->success(__('The room member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room member could not be saved. Please, try again.'));
        }
        $this->set(compact('roomMember'));
        $this->set('_serialize', ['roomMember']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Member id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomMember = $this->RoomMembers->get($id);
        if ($this->RoomMembers->delete($roomMember)) {
            $this->Flash->success(__('The room member has been deleted.'));
        } else {
            $this->Flash->error(__('The room member could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
