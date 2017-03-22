<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $product->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
                    )
                ?></li>
                    <li><?= $this->Html->link(__('List {0}', 'Products'), ['action' => 'index']) ?></li>
                </ul>
        </div>
    </div>
    <div class="products col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Product' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($product) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('title');
                                    echo $this->Form->input('price');
                                    echo $this->Form->input('cost');
                                    echo $this->Form->input('status');
                                    echo $this->Form->input('description');
                                    echo $this->Form->input('alert_quantity');
                                    echo $this->Form->input('categories._ids', ['options' => $categories]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
