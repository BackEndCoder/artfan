<?php ?>
<table cellpatding="0" cellspacing="0" class="table table-condensed table-bordered">
    
    <tr>
        <td<?php
        $i = 0;
        $class = ' class="altrow space_row"';
        ?></td>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Id</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $page['Page']['id']; ?>
            &nbsp;</td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Name</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $page['Page']['title']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Description</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $page['Page']['content']; ?>
            &nbsp;
        </td>
    </tr>
</table>

