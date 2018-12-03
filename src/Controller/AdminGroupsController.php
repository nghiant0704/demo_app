<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminGroups Controller
 *
 * @property \App\Model\Table\AdminGroupsTable $AdminGroups
 *
 * @method \App\Model\Entity\AdminGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adminGroups = $this->paginate($this->AdminGroups);

        $this->set(compact('adminGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Group id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminGroup = $this->AdminGroups->get($id, [
            'contain' => ['Admins']
        ]);

        $this->set('adminGroup', $adminGroup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminGroup = $this->AdminGroups->newEntity();
        if ($this->request->is('post')) {
            $adminGroup = $this->AdminGroups->patchEntity($adminGroup, $this->request->getData());
            if ($this->AdminGroups->save($adminGroup)) {
                $this->Flash->success(__('The admin group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin group could not be saved. Please, try again.'));
        }
        $this->set(compact('adminGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminGroup = $this->AdminGroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminGroup = $this->AdminGroups->patchEntity($adminGroup, $this->request->getData());
            if ($this->AdminGroups->save($adminGroup)) {
                $this->Flash->success(__('The admin group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin group could not be saved. Please, try again.'));
        }
        $this->set(compact('adminGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminGroup = $this->AdminGroups->get($id);
        if ($this->AdminGroups->delete($adminGroup)) {
            $this->Flash->success(__('The admin group has been deleted.'));
        } else {
            $this->Flash->error(__('The admin group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
