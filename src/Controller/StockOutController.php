<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StockOut Controller
 *
 * @property \App\Model\Table\StockOutTable $StockOut
 */
class StockOutController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $stockOut = $this->paginate($this->StockOut);

        $this->set(compact('stockOut'));
        $this->set('_serialize', ['stockOut']);
    }

    /**
     * View method
     *
     * @param string|null $id Stock Out id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stockOut = $this->StockOut->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('stockOut', $stockOut);
        $this->set('_serialize', ['stockOut']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stockOut = $this->StockOut->newEntity();
        if ($this->request->is('post')) {
            $stockOut = $this->StockOut->patchEntity($stockOut, $this->request->getData());
            if ($this->StockOut->save($stockOut)) {
                $product_id = $this->request->data['product_id'];
                $product = $this->StockOut->Products->get($product_id);
                $this->StockOut->stockOut($product, $this->request->data['quantity']);
                $this->Flash->success(__('The stock out has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock out could not be saved. Please, try again.'));
        }
        $products = $this->StockOut->Products->find('list', ['limit' => 200]);
        $this->set(compact('stockOut', 'products'));
        $this->set('_serialize', ['stockOut']);
    }
}
