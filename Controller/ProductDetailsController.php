<?php

App::uses('CategoriesController', 'Controller');
App::uses('ProductsController', 'Controller');
App::uses('ColorsController', 'Controller');
App::uses('StylesController', 'Controller');
App::uses('GiftcardsController', 'Controller');

class ProductDetailsController extends AppController {

    public $uses = array();
    public $components = array(
        'Dictionary',
        'Session',
        'Auth' => array(
            //'loginAction' => array('controller' => 'Users', 'action' => 'login'), 
            'loginRedirect' => array('controller' => 'Pages', 'action' => 'display'),
            'logoutRedirect' => array('controller' => 'Pages', 'action' => 'index'),
            'authError' => 'Did you really think you are allowed to see that?',
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($user) {
        if ($user['role_id'] == 1 || $user['role_id'] == 2) {
            return true;
        }
        return false;
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

    public function index($id = null) {
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $product = $productsCtrl->Product->find('first', array('conditions' => array('Product.id' => $id)));

        $userproducts = $productsCtrl->Product->find('all', array(
            'conditions' => array('NOT' => array('Product.id' => array($id)),
                'Product.author' => $product['Product']['author']),
            'limit' => 4));

        $this->set('product', $product);
        $this->set('userproducts', $userproducts);
		
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $productArray = $this->Session->read('cart');
        $products = array();
        if (count($productArray) > 0) {
            foreach ($productArray as $cartItemKey => $cartItemValue) {
                $product = $productsCtrl->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
                if ($product != null) {
                    $product['Product']['Quantity'] = $cartItemValue;
                    $products[] = $product;
                }
            }
        }
        $this->set('cartproducts', $products);
    }

    public function addToCart($id = null) {
        if ($this->Session->read('cart') == null) {
            $productDict = array();
        } else {
            $productDict = $this->Session->read('cart');
        }

        if ($this->Dictionary->containsKey($productDict, $id)) {
            $prevQty = $this->Dictionary->getItem($productDict, $id);
            $this->Dictionary->removeItem($productDict, $id);
            $this->Dictionary->addItem($productDict, $id, $prevQty + 1);
        } else {
            echo 'new';
            $this->Dictionary->addItem($productDict, $id, 1);
        }

        $this->Session->write('cart', $productDict);
        $this->redirect(array("controller" => "ProductDetails",
            "action" => "cart"));
    }

	
	public function updateCart() {
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
		
        if ($this->Session->read('cart') == null) {
            $productDict = array();
        } else {
            $productDict = $this->Session->read('cart');
        }		
		foreach($_POST['prod_id'] as $key => $prod_id) {
					
			if ($this->Dictionary->containsKey($productDict, $prod_id)) {
				$this->Dictionary->removeItem($productDict, $prod_id);
				$this->Dictionary->addItem($productDict, $prod_id, $_POST['prod_qty'][$key]);
			}			
		}
		$this->Session->write('cart', $productDict);


        $productArray = $this->Session->read('cart');


        $products = array();
        if (count($productArray) > 0) {
            foreach ($productArray as $cartItemKey => $cartItemValue) {
                if ($cartItemValue > 0){
                    $product = $productsCtrl->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
                    if ($product != null) {
                        $product['Product']['Quantity'] = $cartItemValue;
                        $products[] = $product;
                    }
                }
            }
        }

        $this->set('products', $products);
		$this->set('cartproducts', $products);
	}

    public function cart() {
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $productArray = $this->Session->read('cart');
        $products = array();
        if (count($productArray) > 0) {
            foreach ($productArray as $cartItemKey => $cartItemValue) {
                if ($cartItemValue > 0){
                    $product = $productsCtrl->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
                    if ($product != null) {
                        $product['Product']['Quantity'] = $cartItemValue;
                        $products[] = $product;
                    }
                }
            }
        }
        $this->set('products', $products);
		$this->set('cartproducts', $products);
    }

    public function price($id = ''){
        // Price range array
        $price_range = array(
            '1' => 'Less than £250',
            '2' => '£250 - £500',
            '3' => '£500 - £1,000',
            '4' => '£1,000 - £2,000',
            '5' => '£2,000 - £10,000',
            '6' => 'More than £10,000'
        );

        if ($this->check_search_array($id, $price_range) == 1 || $id == ''){
            $this->redirect(Router::url('/', true));
        } else {
            // Create controller, sigh
            $productsCtrl = new ProductsController();
            $productsCtrl->constructClasses();

            // Use correct condition
            $conditions = array();
            switch ($id) {
                case '1':
                    array_push($conditions, array('product.price BETWEEN ? AND ?' => array(0, 250)));
                    break;
                case '2':
                    array_push($conditions, array('product.price BETWEEN ? AND ?' => array(250, 500)));
                    break;
                case '3':
                    array_push($conditions, array('product.price BETWEEN ? AND ?' => array(500, 1000)));
                    break;
                case '4':
                    array_push($conditions, array('product.price BETWEEN ? AND ?' => array(1000, 2000)));
                    break;
                case '5':
                    array_push($conditions, array('product.price BETWEEN ? AND ?' => array(2000, 10000)));
                    break;
                case '6':
                    array_push($conditions, array('product.price BETWEEN ? AND ?' => array(10000, 999999)));
                    break;
            }

            // Get products
            $products = $productsCtrl->Product->find('all', array('conditions' => $conditions));
            $this->set('products', $products);

            // Set range for breadcrumb
            $this->set('price_range', $price_range[$id]);
        }

    }

    public function search() {
        // Bad way of doing this, but the bloke who did this before me did it so meh
        $gc = new GiftcardsController();

        // Get categories for form
        $categoriesCtrl = new CategoriesController();
        $categoriesCtrl->constructClasses();
        $cat_name = $categoriesCtrl->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
            'conditions' => array('id NOT' => $gc->category_gift_id)));
        $this->set('catname', $cat_name);

        // get colors for form
        $colorsCtrl = new ColorsController();
        $colorsCtrl->constructClasses();
        $color_name = $colorsCtrl->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
            'conditions' => array('id NOT' => $gc->color_gift_id)));
        $this->set('colorname',$color_name);

        // get styles for form
        $stylesCtrl = new StylesController();
        $stylesCtrl->constructClasses();
        $style_name = $stylesCtrl->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
            'conditions' => array('id NOT' => $gc->style_gift_id)));
        $this->set('stylename',$style_name);

        // Define price range
        $price_range = array(
           '1' => 'Less than £250',
           '2' => '£250 - £500',
           '3' => '£500 - £1,000',
           '4' => '£1,000 - £2,000',
           '5' => '£2,000 - £10,000',
           '6' => 'More than £10,000'
        );
        $this->set('pricerange', $price_range);

        // Logic for the search function to return results
        if ($this->request->is('post')) {
            $error = 0;

            $error += $this->check_search_array($this->request->data['Product']['Category'], $cat_name);
            $error += $this->check_search_array($this->request->data['Product']['Colour'], $color_name);
            $error += $this->check_search_array($this->request->data['Product']['Style'], $style_name);
            $error += $this->check_search_array($this->request->data['Product']['Price Range'], $price_range);

            // If error, shout
            if ($error > 0) {
                $this->Session->setFlash("An error occurred with the search!");
            } else {
                // Make controller and search
                $productsCtrl = new ProductsController();
                $productsCtrl->constructClasses();

                // Build conditions
                $conditions = array();
                if ($this->request->data['Product']['Category']){
                    array_push($conditions,  array('category_id' => $this->request->data['Product']['Category']));

                }
                if ($this->request->data['Product']['Colour']){
                    array_push($conditions,  array('color_id' => $this->request->data['Product']['Colour']));

                }
                if ($this->request->data['Product']['Style']){
                    array_push($conditions,  array('style_id' => $this->request->data['Product']['Style']));

                }
                if ($this->request->data['Product']['Price Range']){
                    switch ($this->request->data['Product']['Price Range']) {
                        case '1':
                            array_push($conditions, array('product.price BETWEEN ? AND ?' => array(0, 250)));
                            break;
                        case '2':
                            array_push($conditions, array('product.price BETWEEN ? AND ?' => array(250, 500)));
                            break;
                        case '3':
                            array_push($conditions, array('product.price BETWEEN ? AND ?' => array(500, 1000)));
                            break;
                        case '4':
                            array_push($conditions, array('product.price BETWEEN ? AND ?' => array(1000, 2000)));
                            break;
                        case '5':
                            array_push($conditions, array('product.price BETWEEN ? AND ?' => array(2000, 10000)));
                            break;
                        case '6':
                            array_push($conditions, array('product.price BETWEEN ? AND ?' => array(10000, 999999)));
                            break;
                    }

                }

                // query
                $products = $productsCtrl->Product->find('all', array('conditions' => $conditions));
                $this->set('search_results', $products);

                // Set these for selected values later
                $this->set('search_cat', $this->request->data['Product']['Category']);
                $this->set('search_color', $this->request->data['Product']['Colour']);
                $this->set('search_style', $this->request->data['Product']['Style']);
                $this->set('search_price', $this->request->data['Product']['Price Range']);
            }
        } else {
            // If there was no post search items should be blank for pre selected values
            $this->set('search_cat', '');
            $this->set('search_color', '');
            $this->set('search_style', '');
            $this->set('search_price', '');
        }
    }

    /* From the search controller above, using the arrays created for input_array
       check to see if the key exists, also check to see if none is selected
       returns 1 to increment error counter
    */
    private function check_search_array($value, $input_array) {
        if (array_key_exists($value, $input_array) || $value == '') {
            return 0;
        } else {
            return 1;
        }
    }

    public function category($id = '') {
        $categoriesCtrl = new CategoriesController();
        $categoriesCtrl->constructClasses();
        $cat_name = $categoriesCtrl->Category->find('first', array('conditions' => array('Category.id' => $id),
            'fields' => array('Category.catname')));
        $this->set('catname',$cat_name['Category']['catname']);

        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $products = $productsCtrl->Product->find('all', array('conditions' => array('Product.category_id' => $id)));
        $this->set('products', $products);
    }
    
    public function color($id = '') {
        $colorsCtrl = new ColorsController();
        $colorsCtrl->constructClasses();
        $color_name = $colorsCtrl->Color->find('first', array('conditions' => array('Color.id' => $id),
            'fields' => array('Color.colorname')));
        $this->set('colorname',$color_name['Color']['colorname']);

        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $products = $productsCtrl->Product->find('all', array('conditions' => array('Product.color_id' => $id)));
        $this->set('products', $products);
    }
    
    public function style($id = '') {
        $stylesCtrl = new StylesController();
        $stylesCtrl->constructClasses();
        $style_name = $stylesCtrl->Style->find('first', array('conditions' => array('Style.id' => $id),
            'fields' => array('Style.stylename')));
        $this->set('stylename',$style_name['Style']['stylename']);

        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $products = $productsCtrl->Product->find('all', array('conditions' => array('Product.color_id' => $id)));
        $this->set('products', $products);
    }

}

?>
