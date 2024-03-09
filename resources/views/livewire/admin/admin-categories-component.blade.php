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
                <span></span> All Categories
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        All Categories
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.categories.add')}}" class="btn btn-primary float-end">Add new category</a>
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
                                <th>image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>popular</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=($categories->currentPage()-1)*$categories->perPage();
                            @endphp
                            @foreach($categories as $category)
                                <tr class="text-center">
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset('assets/imgs/categories/')}}/{{$category->image}}" alt="{{$category->name}}" width="60"></td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->is_popular == 1 ? 'Yes': 'No'}}</td>
                                    <td>
                                        <a href="{{route('admin.categories.edit',['category_id'=>$category])}}" class="btn btn-outline-dark">Edit</a>
{{--                                        <a href="{{route('admin.categories.delete',['category_id'=>$categories])}} "  onclick="return confirm('Are you sure to delete?') " class="text-danger" style="margin-left: 20px">Delete</a>--}}
                                        <a wire:click="deleteCategory({{ $category->id }})" onclick="return confirm('Are you sure to delete?')" class="btn btn-secondary" style="margin-left: 20px">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>




