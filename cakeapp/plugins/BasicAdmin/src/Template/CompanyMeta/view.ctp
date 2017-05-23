<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company Metum'), ['action' => 'edit', $companyMetum->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company Metum'), ['action' => 'delete', $companyMetum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyMetum->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Company Meta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Metum'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companyMeta view large-9 medium-8 columns content">
    <h3><?= h($companyMetum->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $companyMetum->has('company') ? $this->Html->link($companyMetum->company->title, ['controller' => 'Companies', 'action' => 'view', $companyMetum->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Key') ?></th>
            <td><?= h($companyMetum->company_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companyMetum->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($companyMetum->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($companyMetum->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Company Value') ?></h4>
        <?= $this->Text->autoParagraph(h($companyMetum->company_value)); ?>
    </div>
</div>
