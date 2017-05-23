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

    <script>
        var toggle = true;

        $(".sidebar-icon").click(function() {                
            if (toggle)
            {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
            }
            else
            {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({"position":"relative"});
                }, 400);
            }

            toggle = !toggle;
        });
    </script>

    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
              jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
              jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
              jQuery(this).closest('.small-graph-box').fadeOut(200);
              return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
                data: [
                    {period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
                    {period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                    {period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                    {period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                    {period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                    {period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                    {period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                    {period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                    {period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
                    {period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
                ],
                lineColors:['#ff4a43','#a2d200','#22beef'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });
        });
    </script>

</head> 
<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                <?= $this->element('header'); ?>
                <!--heder end here-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
                </ol>
                <?= $this->fetch('content') ?>
                <!--inner block start here-->
                <div class="inner-block"></div>
                <div class="row"><br><br></div>
                <div class="clear"></div>
                <!--inner block end here--> 
                <!--copy rights start here-->
                <?= $this->element('footer'); ?>
                <!--COPY rights end here-->
            </div>
        </div>
        <!--//content-inner-->

        <!--/sidebar-menu-->
        <?= $this->element('sidebar'); ?>
    </div>
    
</body>
</html>