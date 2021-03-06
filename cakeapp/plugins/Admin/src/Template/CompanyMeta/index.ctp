<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Company Metum'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companyMeta index large-9 medium-8 columns content">
    <h3><?= __('Company Meta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companyMeta as $companyMetum): ?>
            <tr>
                <td><?= $this->Number->format($companyMetum->id) ?></td>
                <td><?= $companyMetum->has('company') ? $this->Html->link($companyMetum->company->title, ['controller' => 'Companies', 'action' => 'view', $companyMetum->company->id]) : '' ?></td>
                <td><?= h($companyMetum->company_key) ?></td>
                <td><?= h($companyMetum->created) ?></td>
                <td><?= h($companyMetum->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $companyMetum->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companyMetum->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companyMetum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyMetum->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
