<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <!-- Custom Theme files -->
    <?= $this->Html->css('/libs/pooled/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/libs/pooled/css/style.css') ?>
    <?= $this->Html->css('/libs/pooled/css/morris.css') ?>
    <?= $this->Html->css('/libs/pooled/css/font-awesome.css') ?>
    <?= $this->Html->css('/libs/pooled/css/icon-font.min.css') ?>
    <?= $this->Html->css('/libs/pooled/css/jquery-ui.css') ?>
    <!-- //Custom Theme files -->

    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <?= $this->Html->script('//code.jquery.com/jquery-2.2.4.min.js') ?>

    <?= $this->Html->script('/libs/pooled/js/scripts.js') ?>
    <!-- Bootstrap Core JavaScript -->
    <?= $this->Html->script('/libs/pooled/js/bootstrap.min.js') ?>
    <!-- /Bootstrap Core JavaScript -->    

    <!-- morris JavaScript -->  
    <?= $this->Html->script('/libs/pooled/js/raphael-min.js') ?>
    <?= $this->Html->script('/libs/pooled/js/morris.js') ?>
    <!-- //jQuery -->
</head> 
<body>
    <div class="main-wthree">
        <div class="container">
            <div class="sin-w3-agile">
                <?= $this->fetch('content') ?>
                <?= $this->element('footer-login'); ?>
            </div>
        </div>
    </div>
</body>
</html>