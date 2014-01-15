<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author user
 */
class Product extends AppModel {

    public $belongsTo = array(
                        'Category' => array(
                            'className' => 'Category',
                            'dependent' => true,
                            'foreignKey' => 'category_id'
                        ),
                        'Color' => array(
                            'className' => 'Color',
                            'dependent' => true,
                            'foreignKey' => 'color_id'
                        ),
                        'Style' => array(
                            'className' => 'Style',
                            'dependent' => true,
                            'foreignKey' => 'style_id'
                        ),
						'User' => array(
											'className' => 'User',
											'dependent' => true,
											'foreignKey' => 'author'
										)
									);
					
					
 		var $validate = array(
								'title' 		=> array(
														'rule' => 'notEmpty',
    													'message' => 'Title cannot be left blank.'								
													),
								'description'	=> array(
														'rule' => 'notEmpty',
    													'message' => 'Description cannot be left blank.'									
													),
								'price' 		=> array(
														'rule' => 'notEmpty',
    													'message' => 'Price cannot be left blank.'								
													),
													
								'category_id'	=> array(
														'rule' => 'notEmpty',
    													'message' => 'Category cannot be left blank.'									
													),	
								'style_id'	=> array(
														'rule' => 'notEmpty',
    													'message' => 'Style cannot be left blank.'									
													),	
								'color_id'	=> array(
														'rule' => 'notEmpty',
    													'message' => 'Color cannot be left blank.'									
													)												
													
				 			  );					
				

}

?>
