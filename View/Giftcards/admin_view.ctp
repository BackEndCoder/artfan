<table cellpatding="0" cellspacing="0" class="table table-condensed table-bordered">
    <tr>
        <td<?php
        $i = 0;
        $class = ' class="altrow space_row"';
        ?></td>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Id</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Giftcard']['id']; ?>
            &nbsp;</td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Name</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Giftcard']['title']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Description</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Giftcard']['description']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Price</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Giftcard']['price']; ?>
            &nbsp;
        </td>
    </tr>

    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Category</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Category']['catname']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Style</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Style']['stylename']; ?>
            &nbsp;
        </td>
    </tr>


    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Color</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $giftcard['Color']['colorname']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>    
        <td<?php if ($i % 2 == 0) echo $class; ?>>Giftcard Images</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php
            if (!empty($imagesList)) {
                foreach ($imagesList as $image) {
                    echo "<div>";
                    echo "<img class='giftcardImage' src='" . $image . "' alt='giftcardImage' witdh='70'  />";
                    echo "</div>";
                }
            }
            ?>
            &nbsp;
        </td>
    </tr>
</table>