<?php
namespace App\Http\Livewire\Admin;
use App\Models\Product;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
//    public $products;
//
//    public function mount()
//    {
//        // Fetch all products with pending status
//        $this->products = Product::where('status', 'pending')->get();
//    }
//
//    public function approveProduct($productId)
//    {
//        $product = Product::find($productId);
//        $product->status = 'approved';
//        $product->save();
//
//        session()->flash('message', 'Product approved successfully.');
//    }
//
//    public function rejectProduct($productId)
//    {
//        $product = Product::find($productId);
//        $product->status = 'rejected';
//        $product->save();
//
//        session()->flash('message', 'Product rejected successfully.');
//    }
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component');
    }
}
