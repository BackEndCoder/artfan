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

	public function addToCart($id = null) {
		if ($this->Session->read('cart') == null) {
			$artDict = array();
		} else {
			$artDict = $this->Session->read('cart');
		}

		if ($this->Dictionary->containsKey($artDict, $id)) {
			$prevQty = $this->Dictionary->getItem($artDict, $id);
			$this->Dictionary->removeItem($artDict, $id);
			$this->Dictionary->addItem($artDict, $id, $prevQty + 1);
		} else {
			echo 'new';
			$this->Dictionary->addItem($artDict, $id, 1);
		}

		$this->Session->write('cart', $artDict);
		$this->redirect(array("controller" => "art",
			"action" => "cart"));
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
}