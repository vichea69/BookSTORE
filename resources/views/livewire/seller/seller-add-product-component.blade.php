<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    {{-- The whole world belongs to you. --}}
    <main>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="" rel="nofollow">Home</a>
                    <span></span> ADD New Product
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row-cols-md-6">
                                Add Product
                            </div>
                            <div class="row-cols-md-6">
                                <a href="{{route('seller.product')}}" class="btn btn-primary float-end">All Product</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"{{Session::get('message')}}>

                                </div>
                            @endif
                            <form enctype="multipart/form-data" wire:submit.prevent="submitProduct">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Category Name" wire:model="name" wire:keyup="generateSlug">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Enter Category slug" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control" name="short_description" placeholder="Enter short_description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Enter Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="regular_price" class="form-label">Regular Price</label>
                                    <input type="text" class="form-control" name="regular_price" placeholder="Regular_price" wire:model="regular_price">
                                    @error('regular_price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="sell_price" class="form-label">Sale Price</label>
                                    <input type="text" class="form-control" name="sell_price" placeholder="Sale_price" wire:model="sell_price">
                                    @error('sell_price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="SKU" class="form-label">SKU</label>
                                    <input type="text" class="form-control" name="SKU" placeholder="sku" wire:model="SKU">
                                    @error('SKU')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="stock_status" class="form-label" wire:model="stock_status">Stock Status</label>
                                    <select class="form-control" name="sku" placeholder="sku">
                                        <option value="instock">
                                            In Stock
                                        </option>
                                        <option value="Out of Stock">
                                            Out of Stock
                                        </option>
                                    </select>

                                    @error('stock_status')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="featured" class="form-label" >Featured</label>
                                    <select class="form-control" name="featured" placeholder="featured" wire:model="featured">
                                        <option value="0">
                                            No
                                        </option>
                                        <option value="1">
                                            Yes
                                        </option>
                                    </select>

                                    @error('featured')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Input Quantity" wire:model="quantity">
                                    @error('quantity')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="Image" wire:model="image">
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" alt="name"/>
                                    @endif
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-control" name="category_id"  wire:model="category_id" placeholder="category">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


