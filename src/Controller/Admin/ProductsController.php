<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Filesystem\File;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $products = $this->paginate($this->Products,['limit' => 4]);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('product', $product);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $form_data = $this->request->getData();

            $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
            $path = '/img/product_img/'; //image upload path

            //Upload product image
            $imageFileName = null;
            if(!empty($form_data['image_link'])){
                $file = $form_data['image_link'];
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension

                $setNewFileName = time() . "_" . rand(000000, 999999);

                //only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . $path . $setNewFileName . '.' . $ext);

                    //prepare the filename for database entry
                    $imageFileName = $setNewFileName . '.' . $ext;
                }
            }

            //Upload product image list
            $image_list = array();
            if(!empty($form_data['image_list'])) {
                $images = $form_data['image_list'];

                foreach ($images as $image) {
                    if(!empty($image['name'])) {
                        $ext = substr(strtolower(strrchr($image['name'], '.')), 1); //get the extension
                        $setNewFileName = time() . "_" . rand(000000, 999999);
                        $uploadFile = WWW_ROOT . $path . $setNewFileName . '.' . $ext;

                        //only process if the extension is valid
                        if (in_array($ext, $arr_ext)) {
                            if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
                                $image_list[] = $setNewFileName . '.' . $ext;
                            } else {
                                $this->Flash->error(__('Unable to upload image, please try again.'));
                            }
                        }
                    }
                }
            }

            $product = $this->Products->patchEntity($product, $form_data);

            if (!empty($form_data['image_link'])) {
                $product->image_link = $imageFileName;
            }
            if(!empty($form_data['image_list'])) {
                $product->image_list = json_encode($image_list);
            }

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }

        $categories = $this->Products->Categories->find()->where(['parent_id' => 0])->toList();
        foreach ($categories as $category) {
            $subs = $this->Products->Categories->find()->where(['parent_id' => $category->id])->toList();
            $category->subs = $subs;
        }
        $this->set(compact('product', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product_get = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $form_data = $this->request->getData();
            $this->log($form_data,'debug');
            $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
            $path = '/img/product_img/'; //image upload path

            //Upload product image
            $imageFileName = null;
            if(!empty($form_data['image_link']['tmp_name'])){
                //delete old product image
                $file = new File(WWW_ROOT . 'img/product_img/'.$product_get->image_link, false, 0777);
                $file->delete();

                $file = $form_data['image_link'];
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension

                $setNewFileName = time() . "_" . rand(000000, 999999);

                //only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . $path . $setNewFileName . '.' . $ext);

                    //prepare the filename for database entry
                    $imageFileName = $setNewFileName . '.' . $ext;
                }
            }

            //Upload product image list
            $image_list = array();
            if(!empty($form_data['image_list']['0']['tmp_name'])) {
                //delete old product image list
                $image_listd = json_decode($product_get->image_list);
                if(is_array($image_listd)){
                    foreach ($image_listd as $img){
                        $file = new File(WWW_ROOT . 'img/product_img/'.$img, false, 0777);
                        $file->delete();
                    }
                }
                $images = $form_data['image_list'];

                foreach ($images as $image) {
                    if(!empty($image['name'])) {
                        $ext = substr(strtolower(strrchr($image['name'], '.')), 1); //get the extension
                        $setNewFileName = time() . "_" . rand(000000, 999999);
                        $uploadFile = WWW_ROOT . $path . $setNewFileName . '.' . $ext;

                        //only process if the extension is valid
                        if (in_array($ext, $arr_ext)) {
                            if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
                                $image_list[] = $setNewFileName . '.' . $ext;
                            } else {
                                $this->Flash->error(__('Unable to upload image, please try again.'));
                            }
                        }
                    }
                }
            }
            $product = $this->Products->patchEntity($product_get, $form_data);

            if (!empty($form_data['image_link'])) {
                $product->image_link = $imageFileName;
            }

            if(!empty($form_data['image_list']['0']['tmp_name'])) {
                $product->image_list = json_encode($image_list);
            }else{
                $product->image_list = null;
            }

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product_get', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);

        //delete product image
        $file = new File(WWW_ROOT . 'img/product_img/'.$product->image_link, false, 0777);
        $file->delete();

        //delete product image list
        $image_list = json_decode($product->image_list);
        if(is_array($image_list)){
            foreach ($image_list as $img){
                $file = new File(WWW_ROOT . 'img/product_img/'.$img, false, 0777);
                $file->delete();
            }
        }

        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function excel(){

    }
}
