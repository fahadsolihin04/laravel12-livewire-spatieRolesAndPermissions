<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.products.product-index', compact("products"));
    }

    function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        
        session()->flash("success", "Product deleted successfully.");
        
        }
}
