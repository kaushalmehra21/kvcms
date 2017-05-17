<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Company Meta'), ['controller' => 'CompanyMeta', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Metum'), ['controller' => 'CompanyMeta', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($company->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($company->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banner') ?></th>
            <td><?= h($company->banner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $company->has('user') ? $this->Html->link($company->user->id, ['controller' => 'Users', 'action' => 'view', $company->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($company->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($company->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($company->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Company Meta') ?></h4>
        <?php if (!empty($company->company_meta)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Company Key') ?></th>
                <th scope="col"><?= __('Company Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->company_meta as $companyMeta): ?>
            <tr>
                <td><?= h($companyMeta->id) ?></td>
                <td><?= h($companyMeta->company_id) ?></td>
                <td><?= h($companyMeta->company_key) ?></td>
                <td><?= h($companyMeta->company_value) ?></td>
                <td><?= h($companyMeta->created) ?></td>
                <td><?= h($companyMeta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompanyMeta', 'action' => 'view', $companyMeta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompanyMeta', 'action' => 'edit', $companyMeta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanyMeta', 'action' => 'delete', $companyMeta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyMeta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
