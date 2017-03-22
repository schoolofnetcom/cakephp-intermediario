<?php
use Migrations\AbstractMigration;

class CreateProduct extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('title', 'string', [
            'limit'=>100
        ]);
        $table->addColumn('price', 'decimal', [
            'precision'=> 11,
            'scale'=>2
        ]);
        $table->addColumn('cost', 'decimal', [
            'precision'=> 11,
            'scale'=>2
        ]);
        $table->addColumn('status', 'integer', [
            'default'=> 1,
        ]);
        $table->addColumn('description', 'text', [
            'null'=>true,
            'default'=>null
        ]);
        $table->addColumn('alert_quantity', 'integer', [
            'default'=>0
        ]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
}
