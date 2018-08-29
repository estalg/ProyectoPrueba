<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ViewEnrollments Controller
 *
 * @property \App\Model\Table\ViewEnrollmentsTable $ViewEnrollments
 *
 * @method \App\Model\Entity\ViewEnrollment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ViewEnrollmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Enrollments', 'Students', 'Subjects']
        ];
        $viewEnrollments = $this->paginate($this->ViewEnrollments);

        $this->set(compact('viewEnrollments'));
    }

    /**
     * View method
     *
     * @param string|null $id View Enrollment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        /*$viewEnrollment = $this->ViewEnrollments->get($id, [
            'contain' => ['Enrollments', 'Students', 'Subjects']
        ]);

        $this->set('viewEnrollment', $viewEnrollment);*/
        //* cargamos el modelo para poder usar la funcion que programamos el en table*/
        $ViEnTable=$this->loadmodel('ViewEnrollments');
        $viewEnrollment = $ViEnTable->getViewEnrollment($id);
        $this->set('viewEnrollment', $viewEnrollment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $viewEnrollment = $this->ViewEnrollments->newEntity();
        if ($this->request->is('post')) {
            $viewEnrollment = $this->ViewEnrollments->patchEntity($viewEnrollment, $this->request->getData());
            if ($this->ViewEnrollments->save($viewEnrollment)) {
                $this->Flash->success(__('The view enrollment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The view enrollment could not be saved. Please, try again.'));
        }
        $enrollments = $this->ViewEnrollments->Enrollments->find('list', ['limit' => 200]);
        $students = $this->ViewEnrollments->Students->find('list', ['limit' => 200]);
        $subjects = $this->ViewEnrollments->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('viewEnrollment', 'enrollments', 'students', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id View Enrollment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $viewEnrollment = $this->ViewEnrollments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $viewEnrollment = $this->ViewEnrollments->patchEntity($viewEnrollment, $this->request->getData());
            if ($this->ViewEnrollments->save($viewEnrollment)) {
                $this->Flash->success(__('The view enrollment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The view enrollment could not be saved. Please, try again.'));
        }
        $enrollments = $this->ViewEnrollments->Enrollments->find('list', ['limit' => 200]);
        $students = $this->ViewEnrollments->Students->find('list', ['limit' => 200]);
        $subjects = $this->ViewEnrollments->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('viewEnrollment', 'enrollments', 'students', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id View Enrollment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $viewEnrollment = $this->ViewEnrollments->get($id);
        if ($this->ViewEnrollments->delete($viewEnrollment)) {
            $this->Flash->success(__('The view enrollment has been deleted.'));
        } else {
            $this->Flash->error(__('The view enrollment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
