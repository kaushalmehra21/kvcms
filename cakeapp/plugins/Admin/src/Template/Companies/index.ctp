<?php
/**
* @var \App\View\AppView $this
*/
?>
<?= $this->Html->css('/libs/pooled/css/table-style.css') ?>
<?= $this->Html->css('/libs/pooled/css/basictable.css') ?>
<?= $this->Html->css('/libs/pooled/css/basictable.css') ?>
<!-- //Custom Theme files -->

<?= $this->Html->script('/libs/pooled/js/jquery.basictable.min.js') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').basictable();
    });
</script>

<div class="w3l-table-info">
    <h2>Companies</h2>
    <table id="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td><?= $this->Number->format($company->id) ?></td>
                <td><?= h($company->title) ?></td>
                <td><?= h($company->logo) ?></td>
                <td><?= h($company->banner) ?></td>
                <td><?= $company->has('user') ? $this->Html->link($company->user->id, ['controller' => 'Users', 'action' => 'view', $company->user->id]) : '' ?></td>
                <td><?= h($company->created) ?></td>
                <td><?= h($company->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $company->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6" style="text-align: left;">
                <nav class="row">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('')) ?>
                        <?= $this->Paginator->prev('< ' . __('')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('') . ' >') ?>
                        <?= $this->Paginator->last(__('') . ' >>') ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6" style="margin-top:30px; text-align: right;">
                <P><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></P>
            </div>
        </div>
    </div>
</div>