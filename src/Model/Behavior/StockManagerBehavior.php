<?php
namespace App\Model\Behavior;

use App\Model\Entity\Product;
use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

/**
 * StockManager behavior
 */
class StockManagerBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function stockIn(Product $product, int $qtd)
    {
        $this->createOrUpdateStock($product, $qtd, true);
    }

    public function stockOut(Product $product, int $qtd)
    {
        $this->createOrUpdateStock($product, $qtd, false);
    }

    private function createOrUpdateStock(Product $product, int $qtd, bool $in)
    {
        $stockTable = TableRegistry::get('Stock');
        $stock = $stockTable->find()
                ->where(['product_id'=>$product->id])
                ->first();

        if (!$stock and $in) {
            $stock = $stockTable->newEntity();
            $stock->product_id = $product->id;
            $stock->quantity = $qtd;
            $stock->unit_price = $product->price;
            $stock->unit_cost = $product->cost;
            return $stockTable->save($stock);
        }

        if ($in) {
            $stock->quantity +=$qtd;
        } else {
            $stock->quantity -=$qtd;
        }

        return $stockTable->save($stock);
    }
}
