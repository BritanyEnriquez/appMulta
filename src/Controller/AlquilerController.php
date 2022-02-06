<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alquiler Controller
 *
 * @property \App\Model\Table\AlquilerTable $Alquiler
 * @method \App\Model\Entity\Alquiler[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlquilerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alquiler = $this->paginate($this->Alquiler);

        $this->set(compact('alquiler'));
    }

    /**
     * View method
     *
     * @param string|null $id Alquiler id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alquiler = $this->Alquiler->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alquiler'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alquiler = $this->Alquiler->newEmptyEntity();
        if ($this->request->is('post')) {
            $alquiler = $this->Alquiler->patchEntity($alquiler, $this->request->getData());
            if ($this->Alquiler->save($alquiler)) {
                $this->Flash->success(__('The alquiler has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alquiler could not be saved. Please, try again.'));
        }
        $this->set(compact('alquiler'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alquiler id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alquiler = $this->Alquiler->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alquiler = $this->Alquiler->patchEntity($alquiler, $this->request->getData());
            if ($this->Alquiler->save($alquiler)) {
                $this->Flash->success(__('The alquiler has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alquiler could not be saved. Please, try again.'));
        }
        $this->set(compact('alquiler'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alquiler id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alquiler = $this->Alquiler->get($id);
        if ($this->Alquiler->delete($alquiler)) {
            $this->Flash->success(__('The alquiler has been deleted.'));
        } else {
            $this->Flash->error(__('The alquiler could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
