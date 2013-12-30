<?php ?>

<table cellpatding="0" cellspacing="0" class="table table-condensed table-bordered">
    <tr>
        <td<?php
        $i = 0;
        $class = ' class="altrow space_row"';
        ?></td>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Id</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $slider['Slider']['id']; ?>
            &nbsp;</td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Title</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $slider['Slider']['title']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td<?php if ($i % 2 == 0) echo $class; ?>>Url</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php echo $slider['Slider']['url']; ?>
            &nbsp;
        </td>
    </tr>
    <tr>    
        <td<?php if ($i % 2 == 0) echo $class; ?>>Slider Images</td>
        <td<?php if ($i++ % 2 == 0) echo $class; ?>>
            <?php
            if (!empty($imagesList)) {
                foreach ($imagesList as $image) {
                    echo "<div>";
                    echo "<img class='sliderImage' src='" . $image . "' alt='sliderImage' witdh='70'  />";
                    echo "</div>";
                }
            }
            ?>
            &nbsp;
        </td>
    </tr>
</table>