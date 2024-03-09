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
                                    <a href="{{route('admin.product.add')}}" class="btn btn-primary float-end">Add new Product</a>
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>

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
                                        <td>{{$product->category->name ?? 'None'}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.product.edit',['product_id'=>$product->id])}}"><i class="text-info">Edit</i></a>
                                            <a wire:click="deleteProduct({{ $product->id }})" onclick="return confirm('Are you sure to delete?')" class="text-danger" style="margin-left: 20px">Delete</a>
                                        </td>
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


