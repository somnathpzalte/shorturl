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
class UrController extends AppController
{
    public function index($url=null)
    {
        $ur=Router::url( $this->here, true );
        $url=explode("/",$ur);
        $key=$url[count($url)-1];
       
        $this->loadModel('Urls');
        $url=$this->Urls->find('all')->where(['tiny_url'=>$key])->first();
        if(!empty($url)){
            $this->redirect($url->main_url);
        }
    }

}
