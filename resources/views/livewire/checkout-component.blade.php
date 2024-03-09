<div>
    {{-- Stop trying to control. --}}
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('home.index')}}" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                       <form  id="checkout-form" action="https://formsubmit.co/dd2f49d1ddfdaecda2ab91404c7784db" method="POST" enctype="multipart/form-data">
{{--                            <form  id="checkout-form" >--}}
                            <div class="form-group">
                                <input type="text" required="required" placeholder="Full Name *" name="Name">
                                @error('fullname') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" required="" placeholder="Address *" name="Address">
                                @error('address') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="form-group">
                                <input required="required" type="text" name="City" placeholder="City / Town *">
                            </div>
                            <div class="form-group">
                                <input required="required" type="text" name="Phone Number" placeholder="Phone *">
                                @error('phone') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="form-group">
                                <input required="required" type="text" placeholder="Email address *" name="Email">
                                @error('email') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="form-group">
                                <input required="required" type="hidden"  name="payment" value="Cash On Delivery">
                            </div>
                                @foreach(Cart::content() as $item)
                                    <input type="hidden" name="ID" value="{{$item->id}}">
                                    <input type="hidden" name="Book Name" value="{{$item->name}}">
                                    <input type="hidden" name="Quantity" value="{{$item->qty}}">
                                    <input type="hidden" name="Total" value="${{$item->subtotal}}">
                                @endforeach
                           <div class="mb-3 mt-3">
                               <label for="image" class="form-label">If you paid online, provide your receipt here.</label>
                               <input type="file" class="form-control" name="image">
                           </div>
                            <input type="hidden" name="_next" value="{{route('thank')}}">
                            <input type="hidden" name="_captcha" value="false">
                            <button class="btn btn-fill-out btn-block mt-30 items-center" type="submit">Place Order</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Session::has('success message'))
                                        <div class="alert alert-success">
                                            <strong> Success | {{Session::get('success message')}}</strong>
                                        </div>
                                    @endif
                                    @if(Cart::count() > 0)
                                        @foreach(Cart::content() as $item)
                                            <tr>
                                                <td class="image product-thumbnail"><img
                                                        src="{{asset('assets/imgs/products')}}/{{$item->model->image}}"
                                                        alt="#"></td>
                                                <td>
                                                    <h5><a href="#">{{$item->name}}</a></h5> <span
                                                        class="product-qty">{{$item->qty}}</span>
                                                </td>
                                                <td>${{$item->subtotal}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @endif
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5 class="text-center text-primary">Total: ${{Cart::subtotal()}}</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="text-center">
                                        <img class="default-img" src="{{asset('assets/imgs/ABA.JPG')}}" height="300px"
                                             width="auto">
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked>
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option"
                                               id="exampleRadios4">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse"
                                               data-target="#cardPayment" aria-controls="cardPayment">Card
                                            Payment</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>








