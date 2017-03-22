<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Category']), ['action' => 'edit', $category->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Category']), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Categories']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Category']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="categories col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($category->title) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Title</th>
                        <td><?= h($category->title) ?></td>
                    </tr>
                                                        <tr>
                        <th>Url</th>
                        <td><?= h($category->url) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($category->id) ?></td>
                    </tr>
                                                                </table>
                                        <div class="related">
                    <?php if (!empty($category->products)): ?>
                    <h4><?= __('Related {0}', ['Products']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Cost</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Alert Quantity</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->products as $products): ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->title) ?></td>
                            <td><?= h($products->price) ?></td>
                            <td><?= h($products->cost) ?></td>
                            <td><?= h($products->status) ?></td>
                            <td><?= h($products->description) ?></td>
                            <td><?= h($products->alert_quantity) ?></td>
                            <td><?= h($products->created) ?></td>
                            <td><?= h($products->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>

                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>

                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
