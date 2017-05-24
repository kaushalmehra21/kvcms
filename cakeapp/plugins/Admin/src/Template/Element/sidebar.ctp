<?php
/**
* @var \App\View\AppView $this
*/
?>
<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu">

            <li>
                <?= $this->Html->link('<i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div>', 
                    ['controller'=>'dashboard', 'action' => 'index'],
                    ['escape'=>false]
                ) ?>
            </li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Library</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'documents', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'documents', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Roles</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'roles', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'roles', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Users</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'users', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'users', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Company</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'companies', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'companies', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

            

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Categories</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'categories', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'categories', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Posts</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'posts', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'posts', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Menus</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('Add New', 
                            ['controller'=>'menus', 'action' => 'add']
                        ) ?>
                    </li>
                    <li id="menu-academico-avaliacoes" >
                        <?= $this->Html->link('View All', 
                            ['controller'=>'menus', 'action' => 'index']
                        ) ?>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<div class="clearfix"></div>   