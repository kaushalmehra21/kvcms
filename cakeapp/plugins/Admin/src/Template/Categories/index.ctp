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
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->title) ?></td>
                <td><?= h($category->short_description) ?></td>
                <td><?= h($category->image) ?></td>
                <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->title, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                <td><?= h($category->created) ?></td>
                <td><?= h($category->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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
