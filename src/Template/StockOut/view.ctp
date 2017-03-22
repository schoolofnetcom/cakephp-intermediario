<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('List {0}', ['Stock Out']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Stock Out']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="stockOut col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($stockOut->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Product</th>
                        <td><?= $stockOut->has('product') ? $this->Html->link($stockOut->product->title, ['controller' => 'Products', 'action' => 'view', $stockOut->product->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($stockOut->id) ?></td>
                    </tr>
                                <tr>
                        <th>Quantity</th>
                        <td><?= $this->Number->format($stockOut->quantity) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($stockOut->created) ?></tr>
                    </tr>
                                                    </table>
                                </div>
    </div>
</div>
