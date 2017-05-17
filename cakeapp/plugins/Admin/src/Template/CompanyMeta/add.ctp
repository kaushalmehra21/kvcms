<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Company Meta'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companyMeta form large-9 medium-8 columns content">
    <?= $this->Form->create($companyMetum) ?>
    <fieldset>
        <legend><?= __('Add Company Metum') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('company_key');
            echo $this->Form->control('company_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
