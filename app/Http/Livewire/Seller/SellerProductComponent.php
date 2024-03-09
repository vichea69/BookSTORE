<?php

namespace App\Http\Livewire\Seller;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SellerProductComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.seller.seller-product-component',['products' => $products]);
    }
}
