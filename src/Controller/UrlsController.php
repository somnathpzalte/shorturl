<?php
namespace App\Controller;

use App\Controller\AppController;
use cake\Routing\Router;
/**
 * Urls Controller
 *
 * @property \App\Model\Table\UrlsTable $Urls
 *
 * @method \App\Model\Entity\Url[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UrlsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $base=Router::url('/', true);
        $this->viewBuilder()->setLayout(false);
        $genData=array();
        $url = $this->Urls->newEntity();
        if ($this->request->is('post')) {
            $data=$this->request->getData();
            $data['tiny_url']=substr(str_shuffle(str_repeat('ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890', 6)), 0, 6);
            $data['user_ip']=Router::getRequest()->clientIp();
            $genData=$data;
            $url = $this->Urls->patchEntity($url, $data);
            if ($this->Urls->save($url)) {
               
            }
        }
        $this->set(compact('genData','base'));
    }

    
    public function add()
    {
        $url = $this->Urls->newEntity();
        if ($this->request->is('post')) {
            $url = $this->Urls->patchEntity($url, $this->request->getData());
            if ($this->Urls->save($url)) {
                $this->Flash->success(__('The url has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The url could not be saved. Please, try again.'));
        }
        $this->set(compact('url'));
    }

    
}
