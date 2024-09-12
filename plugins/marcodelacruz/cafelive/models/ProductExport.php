<?php namespace MarcoDeLaCruz\Cafelive\Models;

use MarcoDeLaCruz\Cafelive\Models\Product;

class ProductExport extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $products = Product::all();

        $products->each(function($product) use ($columns) {
            
            
            $product->available = $product->available ? true : false;
            $product->special_meal_of_week = $product->special_meal_of_week ? true : false;
            $product->description = htmlentities($product->description, ENT_QUOTES);
                
            
            $product->addVisible($columns);
        });

        return $products->toArray();
    }
}