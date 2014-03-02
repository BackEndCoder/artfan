<div class="art index">
    <h2>Art</h2>
    <div class="top_button">
        <?php echo $this->Html->link("Add New Art", array('action'=>'add'));?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <tbody><tr>
                <th><a href="/wilson/artfan/Art/index/sort:id/direction:asc">Id</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:title/direction:asc" class="desc">Title</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:description/direction:asc">Description</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:price/direction:asc">Price</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:author/direction:asc">Author</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:entered_on/direction:asc">Entered On</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:modified_on/direction:asc">Modified On</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:category_id/direction:asc">Category</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:style_id/direction:asc">Style</a></th>
                <th><a href="/wilson/artfan/Art/index/sort:color_id/direction:asc">Color</a></th>
                <th>Actions</th>
            </tr>
            <?php foreach ($art as $art): ?>

                <tr>
                    <td><?php echo $art['Art']['id']; ?></td>
                    <td><?php echo $art['Art']['title']; ?></td>
                    <td><?php echo $art['Art']['description']; ?></td>
                    <td><?php echo $art['Art']['price']; ?></td>
                    <td><?php echo $art['User']['first_name']; ?></td>
                    <td><?php echo $art['Art']['entered_on']; ?></td>
                    <td><?php echo $art['Art']['modified_on']; ?></td>
                    <td><?php echo $art['Category']['catname']; ?></td>
                    <td><?php echo $art['Style']['stylename']; ?></td>
                    <td><?php echo $art['Color']['colorname']; ?></td>

                    <td  id="pop_menu" class="actions">
                        <a class="popup-anc" href="" id="popup-anc">Action<i class="icon-arrow-down"></i></a>

                                        <div class="row_fluid popup-menu" id="popup-anc">
                                            <ul>
                                            
                                                <li><?php echo $this->Html->link('View', array('action' => 'view', $art['Art']['id'])); ?></li>
                                                <li><?php echo $this->Html->link('Edit', array('action' => 'edit', $art['Art']['id'])); ?></li>
                                           
                                        
                                                <li><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $art['Art']['id']), array('confirm' => 'Are you sure you want to delete that art?', 'id' => 'red')); ?></li>
                                               
                                            </ul>
                                           

                                        </div>
                       
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <!-- Shows the page numbers -->
        <?php echo $this->Paginator->numbers(); ?>
        <!-- Shows the next and previous links -->
        <?php echo $this->Paginator->prev('Previous', null, null, array('class' => 'disabled')); ?>
        <?php echo $this->Paginator->next('Next', null, null, array('class' => 'disabled')); ?> 
        <!-- prints X of Y, where X is current page and Y is number of pages -->
        <?php echo $this->Paginator->counter(); ?>
    </div>
</div>
 <script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.1.9.1.min.js"></script>
 <script type="text/javascript">
            $('.popup-anc').click(function(e){
                e.preventDefault();
                $(this).next('.row_fluid.popup-menu').slideToggle();;
            });
        </script>