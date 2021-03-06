<div class="giftcards index">
    <h2>Giftcards</h2>
    <div class="top_button">
        <?php echo $this->Html->link("Add New Giftcard", array('action'=>'add'));?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <tbody><tr>
                <th><a href="/wilson/artfan/Giftcards/index/sort:id/direction:asc">Id</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:title/direction:asc" class="desc">Title</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:description/direction:asc">Description</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:price/direction:asc">Price</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:author/direction:asc">Author</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:entered_on/direction:asc">Entered On</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:modified_on/direction:asc">Modified On</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:category_id/direction:asc">Category</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:style_id/direction:asc">Style</a></th>
                <th><a href="/wilson/artfan/Giftcards/index/sort:color_id/direction:asc">Color</a></th>
                <th>Actions</th>
            </tr>
            <?php foreach ($giftcards as $giftcard): ?>

                <tr>
                    <td><?php echo $giftcard['Giftcard']['id']; ?></td>
                    <td><?php echo $giftcard['Giftcard']['title']; ?></td>
                    <td><?php echo $giftcard['Giftcard']['description']; ?></td>
                    <td><?php echo $giftcard['Giftcard']['price']; ?></td>
                    <td><?php echo $giftcard['User']['first_name']; ?></td>
                    <td><?php echo $giftcard['Giftcard']['entered_on']; ?></td>
                    <td><?php echo $giftcard['Giftcard']['modified_on']; ?></td>
                    <td><?php echo $giftcard['Category']['catname']; ?></td>
                    <td><?php echo $giftcard['Style']['stylename']; ?></td>
                    <td><?php echo $giftcard['Color']['colorname']; ?></td>

                    <td  id="pop_menu" class="actions">
                        <a class="popup-anc" href="" id="popup-anc">Action<i class="icon-arrow-down"></i></a>

                                        <div class="row_fluid popup-menu" id="popup-anc">
                                            <ul>
                                            
                                                <li><?php echo $this->Html->link('View', array('action' => 'view', $giftcard['Giftcard']['id'])); ?></li>
                                                <li><?php echo $this->Html->link('Edit', array('action' => 'edit', $giftcard['Giftcard']['id'])); ?></li>
                                           
                                        
                                                <li><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $giftcard['Giftcard']['id']), array('confirm' => 'Are you sure you want to delete that giftcard?', 'id' => 'red')); ?></li>
                                               
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