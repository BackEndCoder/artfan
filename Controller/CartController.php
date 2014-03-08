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
		$cart[] = $this->request->data;
		$this->Session->write('Cart', $cart);
		$this->redirect(array('controller' => 'cart',
			'action' => 'index'));
	}

	public function updateCart() {
		if ($this->Session->read('cart') == null) {
			$artDict = array();
		} else {
			$artDict = $this->Session->read('cart');
		}
		foreach ($_POST['prodId'] as $key => $prodId) {
			if ($this->Dictionary->containsKey($artDict, $prodId)) {
				$this->Dictionary->removeItem($artDict, $prodId);
				$this->Dictionary->addItem($artDict, $prodId, $_POST['prod_qty'][$key]);
			}
		}
		$this->Session->write('cart', $artDict);

		$artArray = $this->Session->read('cart');

		$art = array();
		if (count($artArray) > 0) {
			foreach ($artArray as $cartItemKey => $cartItemValue) {
				if ($cartItemValue > 0) {
					$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
					if ($art != null) {
						$art['Art']['Quantity'] = $cartItemValue;
						$art[] = $art;
					}
				}
			}
		}

		$this->set('art', $art);
		$this->set('cartart', $art);
	}

	public function index() {
		if($this->Session->check('Cart')){
		$cart = $this->Session->read('Cart');
		debug($cart);
		die;
		$art = array();
			if (count($artArray) > 0) {
				foreach ($artArray as $cartItemKey => $cartItemValue) {
					if ($cartItemValue > 0) {
						$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
						if ($art != null) {
							$art['Art']['Quantity'] = $cartItemValue;
							$art[] = $art;
						}
					}
				}
			}

		}
		$this->set('art', $art);
		$this->set('cartart', $art);
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
				
        $productArray = $this->Session->read('cart');
        $products = array();
        if (count($productArray) > 0) {
            foreach ($productArray as $cartItemKey => $cartItemValue) {
                $product = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
                if ($product != null) {
                    $product['Art']['Quantity'] = $cartItemValue;
                    $products[] = $product;
                }
            }
        }
        $this->set('products', $products);	
		$this->set('cartproducts', $products);

		if($this->request->is('post')):
			$this->render('payform');
		else:
			$this->render('checkout');
		endif;
    }
}