<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DictionaryComponent
 *
 * @author Wilson<mailwilson007@gmail.com>
 */

class DictionaryComponent extends Component {

    var $__controller = null;

    /*function startup(&$controller) {
        $this->__controller = &$controller;
    }*/

    function addItem(&$arrays = array(), $key = null, $value = null) {
        if (is_array($arrays) && $key != null) {
            if (!$this->containsKey($arrays, $key)) {
                $arrays[$key] = $value;
            }
        }
    }

    function removeItem(&$arrays = array(), $key = null) {
        $temp_arrays = array();
        foreach ($arrays as $temp_key => $temp_value) {
            if ($temp_key != $key) {
                $temp_arrays[$temp_key] = $temp_value;
            }
        }
        $arrays = $temp_arrays;
    }

    function containsKey($arrays = array(), $key = null) {
        if (array_key_exists($key, $arrays)) {
            return true;
        }
        return false;
    }
    
    public function getItem(&$arrays = array(), $key = null){
        foreach ($arrays as $temp_key => $temp_value) {
            if ($temp_key == $key) {
                return $temp_value;
            }
        }
    }
}

?>
