<div class="users index">
    <h2>Users <span class="arrowss111"></span></h2>
    <div class="actions">

        <ul>
            <li><?php echo $this->Html->link('New User', array('action' => 'register')); ?></li>
        </ul>
    </div>
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-condensed">
        <tr class="title_black">
            <th><?php echo $this->Paginator->sort('ID', 'user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('Username', 'username'); ?></th>
            <th><?php echo $this->Paginator->sort('Email', 'email'); ?></th>
            <th><?php echo $this->Paginator->sort('first_name', 'first_name'); ?></th>
            <th><?php echo $this->Paginator->sort('Role', 'role_id'); ?></th>
            <th class="actions">Actions</th>
        </tr>
        <?php
        $i = 0;
        foreach ($users as $user):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td class="title_black"><?php echo $user['User']['id']; ?>&nbsp;</td>                
                <td class="title_black"><?php echo $user['User']['username']; ?>&nbsp;</td>
                <td class="title_black"><?php echo $user['User']['email']; ?>&nbsp;</td>
                <td class="title_black"><?php echo $user['User']['first_name']; ?>&nbsp;</td>
                <td class="title_black"><?php echo $user['Role']['name']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>
                    <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
                    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Are you sure you want to delete that user?', 'id' => 'red')); ?>

                </td>
            </tr>
        <?php endforeach; ?>

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

