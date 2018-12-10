<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;

class ProductController extends AppController
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Auth->allow();

        $this->loadModel('Products');
        $this->loadModel('Categories');
    }

    public function detail($id = null){
        $product = $this->Products->get($id);

        if(!$product)
            $this->redirect('/');

        $pdcategory = $this->Categories->get($product->category_id);

        $this->set(compact('product','pdcategory'));
    }

    public function search(){
        $search_key = '';
        if($this->request->getQuery('search')){
            $search_key = $this->request->getQuery('search');
        }else if($this->request->getQuery('term')){ //use autocomplete
            $search_key = $this->request->getQuery('term');
        }else{
            return $this->redirect('/');
        }

        $list = $this->Products->find()
            ->where(function ($exp, $q)use($search_key) {
                return $exp->like('name', '%'.$search_key.'%');
            })->limit(50)->toList();

        if($this->request->getQuery('term')){
            //xu ly autocomplete
            $result = array();
            foreach ($list as $row) {
                $item = array();
                $item['id'] = $row->id;
                $item['label'] = $row->name;
                $item['value'] = $row->name;
                $result[] = $item;
            }

            $response = $this->response->withType('json')->withStringBody(json_encode($result));
            return $response;
        }

        $this->set(compact('search_key','list'));
    }

    function category($id = null){
        $categorya = $this->Categories->get($id);

        if(!$categorya)
            $this->redirect('/');


        $products = $this->Products->find()->where(['category_id' => $id]);
        $products = $this->paginate($products);


        $this->set(compact('categorya','products'));
    }
}
