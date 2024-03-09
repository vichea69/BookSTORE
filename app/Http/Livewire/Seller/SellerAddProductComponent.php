<?php

namespace App\Http\Livewire\Seller;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class SellerAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sell_price;
    public $SKU;
//    public $stuatus = 'pending';
    public $stock_status  = 'instock';
    public $featured = 0;
    public $quantity;
    public $image;
    public $category_id;
    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    public function submitProduct(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required',
            'sell_price'=>'required',
            'SKU'=>'required',
            'stock_status'=>'required',
            'featured'=>'nullable',
            'quantity'=>'required',
            //'image' => $this->image ? 'required' : '',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:20000',
            'category_id'=>'required',
//            'status' => 'nullable',

        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sell_price =$this->sell_price;
        $product->SKU =$this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;

        if ($this->image) {
            $extension = $this->image->extension();
            $fileName = date('ymdHis') . '.' . $extension;
            $this->image->storeAs('products', $fileName);
            $product->image = $fileName;
        }
        $product->featured = $this->featured ?? 0;
        $product->category_id = $this->category_id;
//        $product->status = $this->status;
        $product->save();
        session()->flush('message','Product submitted for approval');
    }
    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.seller.seller-add-product-component',['categories'=>$categories]);
    }
}
