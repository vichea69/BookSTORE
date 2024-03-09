<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="" rel="nofollow">Home</a>
                    <span></span> All Products
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            All Products
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('seller.product.add')}}" class="btn btn-primary float-end">Add new Product</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"{{Session::get('message')}}>
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th class="text-danger">Image</th>
                                    <th class="text-danger">Name</th>
                                    <th class="text-danger">Stock</th>
                                    <th class="text-danger">Price</th>
                                    <th class="text-danger">Category</th>
                                    <th class="text-danger">Code</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=($products->currentPage()-1)*$products->perPage();
                                @endphp
                                @foreach($products as $product)
                                    <tr class="text-center">
                                        <td>{{$i++}}</td>
                                        <td><img src="{{asset('assets/imgs/products/')}}/{{$product->image}}" alt="{{$product->name}}" width="60"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>${{$product->regular_price}}</td>
                                        <td class="text-info">{{$product->category->name ?? 'None'}}</td>
                                        <td>{{$product->SKU}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>



