<?php
    $this->Html->addCrumb('Search', $this->here);
?>

<h3>Search</h3>
<div id="search-container">
<div id="search-form-container">
<div id="search-form">
    <div id="search-holder">
        <?php
        echo $this->Html->css(array(
            '/Contactform/css/Contactform.css'
        ));
        echo $this->Form->create('Art',array('action'=>'index','type' => 'GET'));
            echo $this->Form->input("category", array(
                'options' => $catname,
                'empty' => '(select)',
                'selected' => $search_cat,
                'label' => __d('Art', 'Category')
            ));
            echo $this->Form->input('color', array(
                'options' => $colorname,
                'empty' => '(select)',
                'selected' => $search_color,
            ));
            echo $this->Form->input('style', array(
               'options' => $stylename,
               'empty' => '(select)',
               'selected' => $search_style,
            ));
            echo $this->Form->input('price', array(
                'options' => $pricerange,
                'empty' => '(select)',
                'selected' => '',
            ));?>

         <?php echo $this->Form->end('Search'); ?>
    </div>
</div>
</div>
    <h3>Results</h3>
    <div class="search-results">

        <?php if (!isset($search_results) || count($search_results) == 0) {?>
            <div class="search-results-none">
            No results!
            </div>
        <?php } else { ?>
            <?php foreach ($search_results as $s){
                    $id = $s['Art']['id'];
                    $folder_url = WWW_ROOT . "/files/ArtImages/" . $id . "/";
                    $http_url = $this->base . "/files/ArtImages/" . $id . "/";
                    $images = '';
                    if (is_dir($folder_url) != 1) {

                    } else {
                        foreach (new DirectoryIterator($folder_url) as $fn) {
                            if ($fn->getFilename() != "." && $fn->getFilename() != ".." && !is_dir($folder_url . $fn->getFilename())) {
                                $images = $http_url . $fn->getFilename();
                                break;
                            }
                        }
                    }
                    ?>
                <div class="search-results-item">
                    <ul>
                    <li><b>Title:&nbsp;</b><?php echo $s['Art']['title']; ?></li>
                        <li><img src="<?php echo $images; ?>" alt="iphone"  class="" /></li>
                        <!--<li>Description: <?php echo $s['Art']['description']; ?></li>-->
                        <li><b>Author:&nbsp;</b><?php echo $s['User']['username']; ?></li>
                        <li><b>Price:&nbsp;</b><?php echo $s['Art']['price']; ?></li>
                    </ul>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div style="clear:both"></div>
</div>
