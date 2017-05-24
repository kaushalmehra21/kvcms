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
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activation_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= $user->has('role') ? $this->Html->link($user->role->title, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                <td><?= h($user->activation_key) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', 
                        ['action' => 'view', $user->id], 
                        ['escape' => false]
                    ) ?>

                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', 
                        ['action' => 'edit', $user->id], 
                        ['escape' => false]
                    ) ?>

                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', 
                        ['action' => 'delete', $user->id],
                        ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]

                    ) ?>
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