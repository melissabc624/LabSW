<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Conservations Controller
 *
 * @property \App\Model\Table\ConservationsTable $Conservations
 *
 * @method \App\Model\Entity\Conservation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConservationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assets']
        ];
        $conservations = $this->paginate($this->Conservations);

        $this->set(compact('conservations'));
    }

    /**
     * View method
     *
     * @param string|null $id Conservation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conservation = $this->Conservations->get($id, [
            'contain' => ['Assets']
        ]);

        $this->set('conservation', $conservation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conservation = $this->Conservations->newEntity();
        if ($this->request->is('post')) {
            $conservation = $this->Conservations->patchEntity($conservation, $this->request->getData());
            if ($this->Conservations->save($conservation)) {
                $this->Flash->success(__('The conservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conservation could not be saved. Please, try again.'));
        }
        $assets = $this->Conservations->Assets->find('list', ['limit' => 200]);
        $this->set(compact('conservation', 'assets'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conservation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conservation = $this->Conservations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conservation = $this->Conservations->patchEntity($conservation, $this->request->getData());
            if ($this->Conservations->save($conservation)) {
                $this->Flash->success(__('The conservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conservation could not be saved. Please, try again.'));
        }
        $assets = $this->Conservations->Assets->find('list', ['limit' => 200]);
        $this->set(compact('conservation', 'assets'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conservation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conservation = $this->Conservations->get($id);
        if ($this->Conservations->delete($conservation)) {
            $this->Flash->success(__('The conservation has been deleted.'));
        } else {
            $this->Flash->error(__('The conservation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
