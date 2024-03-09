<?php

namespace App\Http\Livewire;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;
//use Gloudemans\Shoppingcart\Cart;
use Symfony\Component\HttpFoundation\Session\Session;
class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize =12;
    public $orderBy ="Default Sorting";
    public $slug;
    public function mount($slug){
        $this->slug=$slug;
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


    public function render(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {

        $category =Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if ($this->orderBy =='Price: Low to High'){
            $products =Product::where('category_id',$category_id)-> orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy=='Price: High to Low'){
            $products =Product::where('category_id',$category_id)->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy=='Sort By Newness'){
            $products =Product::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where('category_id',$category_id)->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name','ASC')->get();
        $nproducts = Product::latest()->take(4)->get();
        return view('livewire.category-component',['products'=>$products,'categories'=>$categories,'category_name'=>$category_name,'nproducts'=>$nproducts]);

    }
}
