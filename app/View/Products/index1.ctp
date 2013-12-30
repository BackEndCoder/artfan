<div class="products index">
    <h2>Products</h2>
    <?php echo $this->Html->link("Add New Product", array('action'=>'add'));?>
    <table cellpadding="0" cellspacing="0">
        <tbody><tr>
                <th><a href="/wilson/artfan/Products/index/sort:id/direction:asc">Id</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:title/direction:asc" class="desc">Title</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:description/direction:asc">Description</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:price/direction:asc">Price</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:author/direction:asc">Author</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:entered_on/direction:asc">Entered On</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:modified_on/direction:asc">Modified On</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:category_id/direction:asc">Category</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:style_id/direction:asc">Style</a></th>
                <th><a href="/wilson/artfan/Products/index/sort:color_id/direction:asc">Color</a></th>
                <th>Actions</th>
            </tr>
            <?php foreach ($products as $product): ?>

                <tr>
                    <td><?php echo $product['Product']['id']; ?></td>
                    <td><?php echo $product['Product']['title']; ?></td>
                    <td><?php echo $product['Product']['description']; ?></td>
                    <td><?php echo $product['Product']['price']; ?></td>
                    <td><?php echo $product['User']['first_name']; ?></td>
                    <td><?php echo $product['Product']['entered_on']; ?></td>
                    <td><?php echo $product['Product']['modified_on']; ?></td>
                    <td><?php echo $product['Category']['catname']; ?></td>
                    <td><?php echo $product['Style']['stylename']; ?></td>
                    <td><?php echo $product['Color']['colorname']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link('View', array('action' => 'view', $product['Product']['id'])); ?>
                        <?php echo $this->Html->link('Edit', array('action' => 'edit', $product['Product']['id'])); ?>
                        <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $product['Product']['id']), array('confirm' => 'Are you sure you want to delete that product?', 'id' => 'red')); ?>
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