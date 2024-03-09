<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;
//use Gloudemans\Shoppingcart\Cart;
use Symfony\Component\HttpFoundation\Session\Session;
class SearchComponent extends Component
{
    use WithPagination;
    public $pageSize =12;
    public $orderBy ="Default Sorting";
    public $q;
    public $search_term;
    public function mount(){
        $this->fill(request()->only('q'));
        $this->search_term= '%'.$this->q . '%';
    }
    public function changeOrderBy($order){
        $this->orderBy =$order;
    }
    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name,1, $product_price)->associate('\App\Models\Product');
        session()->flash('success message', 'Item added to Cart');
        return redirect()->route('shop.cart');
    }


    public function render()
    {
        if ($this->orderBy =='Price: Low to High'){
            $products =Product::where('name','like',$this->search_term)-> orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy=='Price: High to Low'){
            $products =Product::where('name','like',$this->search_term)->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy=='Sort By Newness'){
            $products =Product::where('name','like',$this->search_term)->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where('name','like',$this->search_term)->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name','ASC')->get();
        $nproducts = Product::latest()->take(4)->get();
        return view('livewire.search-component',['products'=>$products,'categories'=>$categories,'nproducts'=>$nproducts]);
    }
}
