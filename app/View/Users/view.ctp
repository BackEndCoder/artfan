<div class="users view">
    <h2>User<span class="arro"></span></h2>
    <div class="actions group">

        <ul>

            <li><?php echo $this->Html->link('Edit User', array('action' => 'edit', $user['User']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink('Delete User', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Are you sure you want to delete that user?')); ?> </li>
            <li><?php echo $this->Html->link('List Users', array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link('New User', array('action' => 'atr')); ?> </li>
        </ul>
    </div>

    <table cellpatding="0" cellspacing="0" class="table table-condensed table-bordered">


        <tr><?php $i = 0;
$class = ' class="altrow"';
?>
            <td<?php if ($i % 2 == 0) echo $class; ?>>Id</td>
            <td<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $user['User']['id']; ?>
                &nbsp;
        </tr>
        <tr>
            <td<?php if ($i % 2 == 0) echo $class; ?>>Name</td>
            <td<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name']; ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td<?php if ($i % 2 == 0) echo $class; ?>>Username</td>
            <td<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $user['User']['username']; ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td<?php if ($i % 2 == 0) echo $class; ?>>Email</td>
            <td<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $user['User']['email']; ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td<?php if ($i % 2 == 0) echo $class; ?>>Role</td>
            <td<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $user['Role']['name']; ?>
                &nbsp;
            </td>
        </tr>

    </table>
</div>
