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

    <!-- Custom Theme files -->
    <?= $this->Html->css('/libs/login-page/css/font-awesome.min.css') ?>
    <?= $this->Html->css('/libs/login-page/css/popuo-box.css') ?>
    <?= $this->Html->css('/libs/login-page/css/style.css') ?>
    <!-- //Custom Theme files -->

    <?= $this->Html->script('//code.jquery.com/jquery-2.2.4.min.js') ?>
    <?= $this->Html->script('/libs/login-page/js/jquery.magnific-popup.js') ?>

    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
    
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>
<body>
<h1> Login / Register Form</h1>
<span style="color: #fff; text-align: center;"><?= $this->Flash->render() ?></span>
<div class="main-agileits">
    <?= $this->fetch('content') ?>
</div>
<!-- copyright -->
<div class="copyright w3-agile">
    <p> © 2017 Credit Login / Register Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
<!-- //copyright -->

</body>
</html>
