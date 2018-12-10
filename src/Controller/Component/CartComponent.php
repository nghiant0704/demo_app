<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

class CartComponent extends Component
{


    public function getcart()
    {
        return $this->request->session()->read('Shop');
    }

    public function cart()
    {
        $shop = $this->getcart();
        // print_r($shop);
        $quantity = 0;
        $subtotal = 0;
        $total = 0;
        $order_item_count = 0;
        // $order = $shop['Order'];
        if (count($shop['Orderproducts']) > 0) {
            foreach ($shop['Orderproducts'] as $item) {
                $quantity += $item['quantity'];
                $subtotal += $item['subtotal'];
                $total += $item['subtotal'];
                $order_item_count++;
            }
            $order['order_item_count'] = $order_item_count;
            $order['quantity'] = $quantity;
            $order['subtotal'] = sprintf('%01.2f', $subtotal);
            $order['total'] = sprintf('%01.2f', $total);
            $this->request->session()->write('Shop.Order', $order);
            return true;
        }
        else {
            $this->clear();
            return false;
        }
    }

    /**
     * Add product to cart
     *
     * @param $id
     * @param int $quantity
     */
    public function add($id, $quantity = 1)
    {
        $controller = $this->_registry->getController();
        if(!is_numeric($quantity) || $quantity < 1) {
            $quantity = 1;
        }

        $quantity = abs($quantity);
        $data = [];
        $product = $controller->Products->get($id, [
            'contain' => []
        ]);

        $price = $product->price;
        if($product->discount > 0){
            $price = $product->price - $product->discount;
        }

        if($this->request->session()->read('Shop.Orderproducts.' . $id)){
            $product_tmp = $this->request->session()->read('Shop.Orderproducts.' . $id);
            $quantity += $product_tmp['quantity'];
        }

        $data = [
            'product_id' => $product->id,
            'name' => $product->name,
            'image_link' => $product->image_link,
            'price' => sprintf('%01.2f', $price),
            'quantity' => $quantity,
            'subtotal' => sprintf('%01.2f', $price * $quantity),
        ];
        $this->request->session()->write('Shop.Orderproducts.' . $id, $data);
        $this->cart();
    }

    /**
     * Update quatity for item in cart
     *
     * @param $id
     * @param int $quantity
     * @return bool
     */
    public function update($id, $quantity = 1){
        if($this->request->session()->read('Shop.Orderproducts.' . $id)) {
            if(!is_numeric($quantity) || $quantity < 1) {
                $quantity = 1;
            }

            $quantity = abs($quantity);

            //get cart product quantity from session
            $product = $this->request->session()->read('Shop.Orderproducts.' . $id);
            $product['quantity'] = $quantity;

            //update cart to session
            $this->request->session()->write('Shop.Orderproducts.' . $id, $product);
            $this->cart();
        }
        return false;
    }

    /**
     * Remove product from cart
     * @param $id
     * @return array|bool|string|null
     */
    public function remove($id) {
        if($this->request->session()->read('Shop.Orderproducts.' . $id)) {
            $product = $this->request->session()->read('Shop.Orderproducts.' . $id);
            $this->request->session()->delete('Shop.Orderproducts.' . $id);
            $this->cart();
            return $product;
        }
        return false;
    }

    /**
     * Clear cart
     */
    public function clear()
    {
        $this->request->session()->delete('Shop');
    }

}