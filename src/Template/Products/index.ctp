<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', [__('Product')]), ['action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="products col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Products');?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('title') ?></th>
                                        <th><?= $this->Paginator->sort('price') ?></th>
                                        <th><?= $this->Paginator->sort('quantity') ?></th>
                                        <th><?= $this->Paginator->sort('alert_quantity') ?></th>
                                        <th><?= $this->Paginator->sort('created') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr class="<?php echo $this->StockStatus->status($product->stock->quantity, $product->alert_quantity);?>">
                                        <td><?= $this->Number->format($product->id) ?></td>
                                        <td><?= h($product->title) ?></td>
                                        <td><?= $this->Number->format($product->price) ?></td>
                                        <td><?= $this->Number->format($product->stock->quantity) ?></td>
                                        <td><?= $this->Number->format($product->alert_quantity) ?></td>
                                        <td><?= h($product->created) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class'=>'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                        <?= $this->Paginator->numbers(['escape'=>false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>