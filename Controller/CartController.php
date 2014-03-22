<?php
class CartController extends AppController {

	public $name = 'Cart';

	public $uses = array();

	public $helpers = array('Html', 'Form', 'Text');

	public function getTotalCartPrice($id = null) {
		$artArray = $this->Session->read('cart');
		$art = array();
		if (count($artArray) > 0) {
			foreach ($artArray as $cartItemKey => $cartItemValue) {
				$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
				if ($art != null) {
					$art['Art']['Quantity'] = $cartItemValue;
					$art[] = $art;
				}
			}
		}
		$cartCnt = 0;
		$total = 0;
		foreach ($art as $art):
			$prodCharge = $art['Art']['price'];
			$prodQty = $art['Art']['Quantity'];
			$total += $prodCharge * $prodQty;
			$cartCnt++;
		endforeach;
		return $total;
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$user = $this->Auth->user();
		$this->set('current_user', $user);
		$this->Auth->allow('index');
		$this->Auth->allow('addToCart');
		$this->Auth->allow('updateCart');
		$this->Auth->allow('cart');
		$this->Auth->allow('category');
		$this->Auth->allow('color');
		$this->Auth->allow('style');
		$this->Auth->allow('search');
		$this->Auth->allow('price');
		$this->layout = "default";
	}

	public function add() {
		$array_keys = array_keys($this->request->data);
		$array_key = $array_keys[0];

		$added = false;

		if($this->Session->check('Cart')){
			$cart = $this->Session->read('Cart');
			foreach($cart[$array_key] as $k => $c){
				if($c['id']==$this->request->data[$array_key]['id']){
					$cart[$array_key][$k]['quantity'] = $cart[$array_key][$k]['quantity']+1;
					$added = true;
				}
			}
			if(!$added){
				$count = count($cart[$array_key]);
				$cart[$array_key][$count] = $this->request->data[$array_key];
				$cart[$array_key][$count]['quantity'] = 1;
			}
		}
		else{
			$cart[$array_key][0] = $this->request->data[$array_key];
			$cart[$array_key][0]['quantity'] = 1;
		}

		$this->Session->write('Cart', $cart);
		$this->redirect(array('controller' => 'cart','action' => 'index'));
	}

	public function updateCart() {
		if ($this->Session->check('Cart')) {
			$cart = $this->Session->read('Cart');
		} else {
			$cart = array();
		}
		foreach ($_POST['prodId'] as $array_key => $prodId) {
			foreach ($prodId as $key => $item) {
				if($_POST['prodQty'][$array_key][$key]!=$cart[$array_key][$key]['quantity']){
					$cart[$array_key][$key]['quantity'] = $_POST['prodQty'][$array_key][$key];
				}
			}
		}
		$this->Session->write('Cart', $cart);
		$this->redirect(array('controller' => 'cart','action' => 'index'));
	}

	public function index() {
		if($this->Session->check('Cart')){
			$cart = $this->Session->read('Cart');
			$array_keys = array_keys($cart);
			foreach ($array_keys as $key => $item) {
				foreach($cart[$item] as $i){
					$id_array[$i['id']] = $i['id'];
				}
				$this->loadModel($item);
				$data[$item] = $this->$item->find('all', array('conditions' => array($item.'.id' => $id_array)));
			}
		}
		if(!empty($data)){
			foreach ($array_keys as $key => $item) {
				foreach($cart[$item] as $k => $i){
					if(!empty($cart[$item][$k]['quantity'])){
						$data[$item][$k]['quantity'] = $cart[$item][$k]['quantity'];
					}
				}
			}
			$this->set('data', $data);
		}
	}

	function getCarts() {
        $artArray = $this->Session->read('cart');
        $art = array();
        if (count($artArray) > 0) {
            foreach ($artArray as $cartItemKey => $cartItemValue) {
                $art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
                if ($art != null) {
                    $art['Art']['Quantity'] = $cartItemValue;
                    $art[] = $art;
                }
            }
        }
        $this->set('cartart', $art);	
	}

	public function check_search_array($value, $inputArray) {
		if (array_key_exists($value, $inputArray) || $value == '') {
			return 0;
		} else {
			return 1;
		}
	}
 
    public function checkout($id = null) {
	
		$first_name 	= '';
		$last_name 		= '';		
		$email 			= '';	
		if ($this->Auth->loggedIn()){
			$u = $this->Auth->user();			
						
			$log_first_name 	= $u['first_name'];
			$log_last_name 		= $u['last_name'];			
			$log_email 			= $u['email'];	
			$log_address		= $u['address'];						
		}
		else {
			$log_first_name 	= '';
			$log_last_name 		= '';
			$log_email 			= '';
			$log_address		= '';
		}
		$this->set('log_first_name', $log_first_name);
		$this->set('log_last_name', $log_last_name);
		$this->set('log_email', $log_email);
		$this->set('log_address', $log_address);			
	
		//$res_model = $this->Checkout->aaa();		
		$this->set('id', $id);		
        $this->set('res_model', $res_model);		
				
		if($this->Session->check('Cart')){
			$cart = $this->Session->read('Cart');
			$array_keys = array_keys($cart);
			foreach ($array_keys as $key => $item) {
				foreach($cart[$item] as $i){
					$id_array[$i['id']] = $i['id'];
				}
				$this->loadModel($item);
				$data[$item] = $this->$item->find('all', array('conditions' => array($item.'.id' => $id_array)));
			}
		}
		if(!empty($data)){
			foreach ($array_keys as $key => $item) {
				foreach($cart[$item] as $k => $i){
					if(!empty($cart[$item][$k]['quantity'])){
						$data[$item][$k]['quantity'] = $cart[$item][$k]['quantity'];
					}
				}
			}
			$this->set('data', $data);
		}

		if($this->request->is('post')):
			$this->render('payform');
		else:
			$this->render('checkout');
		endif;
    }
}