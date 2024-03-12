
<?php

$cakeDescription = 'Plan Plugin';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    
</style>

</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
       

            <li><a>   <?= $this->Html->link("Plan Table", [
    'controller' => 'Ptable',
    'action' => 'index']) ?></a></li>

                 <li><a> <?= $this->Html->link("Plan Level",[
                    'controller'=>'Plan',
                    'action'=>'index'
                ]) ?></a></li>
                   
                   <li><a> <?= $this->Html->link("Plan Item",[
                    'controller'=>'Pitem',
                    'action'=>'index'
                ]) ?> </a></li>
               
               
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
