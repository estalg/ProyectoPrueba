<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enrollments Controller
 *
 * @property \App\Model\Table\EnrollmentsTable $Enrollments
 *
 * @method \App\Model\Entity\Enrollment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnrollmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Subjects']
        ];
        $enrollments = $this->paginate($this->Enrollments);

        $this->set(compact('enrollments'));
    }

    /**
     * View method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enrollment = $this->Enrollments->get($id, [
            'contain' => ['Students', 'Subjects']
        ]);

        $this->set('enrollment', $enrollment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enrollment = $this->Enrollments->newEntity();
        if ($this->request->is('post')) {
            $enrollment = $this->Enrollments->patchEntity($enrollment, $this->request->getData());
            if ($this->Enrollments->save($enrollment)) {
                $this->Flash->success(__('The enrollment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrollment could not be saved. Please, try again.'));
        }
        $students = $this->Enrollments->Students->find('list', ['limit' => 200]);
        $subjects = $this->Enrollments->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('enrollment', 'students', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enrollment = $this->Enrollments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enrollment = $this->Enrollments->patchEntity($enrollment, $this->request->getData());
            if ($this->Enrollments->save($enrollment)) {
                $this->Flash->success(__('The enrollment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrollment could not be saved. Please, try again.'));
        }
        $students = $this->Enrollments->Students->find('list', ['limit' => 200]);
        $subjects = $this->Enrollments->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('enrollment', 'students', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enrollment = $this->Enrollments->get($id);
        if ($this->Enrollments->delete($enrollment)) {
            $this->Flash->success(__('The enrollment has been deleted.'));
        } else {
            $this->Flash->error(__('The enrollment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
