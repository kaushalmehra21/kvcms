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
    <h2>Users</h2>
    <table id="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= h($role->title) ?></td>
                <td><?= h($role->description) ?></td>
                <td><?= h($role->created) ?></td>
                <td><?= h($role->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $role->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
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