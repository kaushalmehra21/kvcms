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
    <h2>Categories</h2>
    <table id="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serial_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menus as $menu): ?>
            <tr>
                <td><?= $this->Number->format($menu->id) ?></td>
                <td><?= h($menu->title) ?></td>
                <td><?= h($menu->short_description) ?></td>
                <td><?= h($menu->url) ?></td>
                <td><?= $this->Number->format($menu->serial_number) ?></td>
                <td><?= $menu->has('parent_menu') ? $this->Html->link($menu->parent_menu->title, ['controller' => 'Menus', 'action' => 'view', $menu->parent_menu->id]) : '' ?></td>
                <td><?= h($menu->created) ?></td>
                <td><?= h($menu->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $menu->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $menu->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?>
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
