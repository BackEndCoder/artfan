<?php
$this->Html->addCrumb('Inspired', $this->here);
?>
<h3>Be inspired...</h3>
<div class="content-container">
<?php /* ?>
<table>
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
        <?php if ($this->Session->read('level') == 1) { ?>
            <th></th>
            <th></th>
        <?php } ?>
    </tr>

    <?php foreach ($inspired as $i): ?>
    <tr>
        <td><?php echo $i['Inspired']['title'] ?></td>
        <td><?php echo $i['Inspired']['image'] ?></td>
        <td><?php echo $i['Inspired']['body'] ?></td>
        <?php if ($this->Session->read('level') == 1) { ?>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $i['Inspired']['id'])); ?></a></td>
        <td><?php echo $this->Html->link('Remove', array('action' => 'remove', $i['Inspired']['id'])); ?></a></td>
        <?php } ?>
    </tr>
    <?php endforeach; */?>
    <style>
        .inspired-container {
            height: 750px;
            width: 750px;
        }
        .inspired-container li {
            position: relative;
            font: normal 14px/18px 'HelveticaNeueRegular', Helvetica, Arial, sans-serif;
            float: left;
            padding: 5px;
        }
        .inspired-container h3 {
            color: black;
            padding: 0;
            margin 0;
            width: 100%;
            font: normal 16px/20px 'HelveticaNeueRegular', Helvetica, Arial, sans-serif;
        }

        .inspired-wide {
            height: 220px;
            width: 450px;
        }
        .inspired-skinny {
            height: 220px;
            width: 230px;
        }
        .inspired-banner {
            height: 220px;
            width: 690px;
        }

        .hide {
            display: none;
        }

        li:hover .hide {
            display:block;
            position:absolute;
            background:url(../img/show-bg.png) repeat;
            top:0;
            left:0;
            padding:5px;
        }

        .hide-wide {
            height: 220px;
            width: 450px;
        }
        .hide-skinny {
            height: 220px;
            width: 230px;
        }
        .hide-banner {
            height: 220px;
            width: 690px;
        }


    </style>
    <?php // Inspired section ?>
    <div class="inspired-container">
    <ul>
        <li>
            <a href="#"><img src="/img/inspired/banner1.jpg" class="inspired-banner" /></a>
            <div class="hide hide-banner">
            <h3>This is a title</h3>
            Has eu essent causae cotidieque, eu affert graecis quaerendum vel, quo ad libris veritus reprimique. Sed eruditi alienum ad. Eu congue sanctus nec, nusquam eleifend an sea. Pri in autem aeque graeci, et vel omnesque persequeris. At munere maiorum theophrastus vel, nam ei assentior assueverit necessitatibus, at odio qualisque vix.
            <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', '1')); ?>
            </div>
        </li>
        <li>
            <a href="#"><img src="/img/inspired/skinny1.jpg" class="inspired-skinny" /></a>
            <div class="hide hide-skinny">
            <h3>This is a title</h3>
            Minim melius oblique eu his, ut dolorum dissentiet definitionem vim. Ea quas harum eos. Facilisi salutandi euripidis pro te, sea utinam quidam cu. Ut luptatum probatus intellegebat vel, ad sed ferri conceptam mediocritatem. Dicam maiorum per ex. Eum ei utinam constituam, luptatum consetetur honestatis ei vel, ius ad modo congue.
            <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', '1')); ?>
            </div>
        </li>
        <li>
            <a href="#"><img src="/img/inspired/wide1.jpg" class="inspired-wide" /></a>
            <div class="hide hide-wide">
            <h3>This is a title</h3>
            Ea repudiandae contentiones sit, cum ad partiendo reprehendunt. Est eu malis tacimates, an reque erant usu. Duo quaestio quaerendum ea, luptatum dissentiet cu usu. Sale brute putent ex sit. No duo graecis fuisset contentiones.
            <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', '1')); ?>
            </div>
        </li>
        <li>
            <a href="#"><img src="/img/inspired/wide2.jpg" class="inspired-wide" /></a>
            <div class="hide hide-wide">
            <h3>This is a title</h3>
            Ad sed ubique splendide. An sea dicant cetero quaerendum. Aperiam sapientem adolescens nec id, esse tation everti ne mea. Regione dolorum sensibus ut mel, ubique invidunt sea ea, duo ne altera laoreet phaedrum.
            <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', '1')); ?>
            </div>
        </li>
        <li>
            <a href="#"><img src="/img/inspired/skinny2.jpg" class="inspired-skinny" /></a>
            <div class="hide hide-skinny">
            <h3>This is a title</h3>
            Usu solum zril assueverit ne, te sit sanctus platonem, duo ei atqui iriure fabellas. Quod nostro percipit ea mei, dolore feugiat lucilius nec eu, delectus verterem cu mel. Eam rebum sanctus cu, debet utroque eloquentiam sea te.
            <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', '1')); ?>
            </div>
        </li>
    </ul>
    </div>
    <div style="clear: both;"></div>

</table>
</div>