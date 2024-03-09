<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CheckoutComponent extends Component
{

    public $fullname, $email, $phone, $address;
    public function rules(){
        return [
        'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required'
        ];
    }
    public function codOrder(){

    }
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty +1 ;
        Cart::update($rowId,$qty);
        $this->emit('cart-icon-component','refresh-component');
    }
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty -1 ;
        Cart::update($rowId,$qty);
        $this->emit('cart-icon-component','refresh-component');
    }
    public function destroy($id){
        Cart::remove($id);
        session()->flash('success message', 'Item has been removed');
        $this->emit('cart-icon-component','refresh-component');
    }
    public function clearAll(){
        Cart::destroy();
        $this->emit('cart-icon-component','refresh-component');
    }
    public function render()

    {
        return view('livewire.checkout-component');
    }
}
