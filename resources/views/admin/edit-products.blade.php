@extends('master-admin')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Products</h5>
                                </div>
                                <div class="card-block">
                                    <form action="{{route('admin.posteditproducts',$products->id)}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product Name</label>      
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" value="{{$products->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product Type</label>
                                            <div class="col-sm-10">
                                                <select id="hello-single" class="form-control" name="products_type">
                                                    <option value="">---- Select Type ----</option>
                                                    @foreach($product_type as $type)
                                                        <option value="{{$type->id}}" @if($products->type_id == $type->id) selected @endif>{{$type->name_type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Technical Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="technical_description"></textarea>
                                            </div>                                                    
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>                                                    
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="price" value="{{$products->price}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sale</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sale_price" value="{{$products->sale_price}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Available</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="available">
                                                    <option value="0" @if($products->available = 0) selected @endif>Out of Stock</option>
                                                    <option value="1" @if($products->available = 1) selected @endif>In Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Is New</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="new_product">
                                                    <option value="0" @if($products->new_product = 0) selected @endif>Old Products</option>
                                                    <option value="1" @if($products->new_product = 1) selected @endif>New Products</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Images</label>
                                            <div class="col-sm-10">
                                                <img src="{{url($products->image)}}" alt="Image">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Details Images</label>
                                            <div class="col-sm-10">
                                                @if($products->details_image != NULL)
                                                    @foreach(json_decode($products->details_image) as $key => $single_image)
                                                    <li>
                                                        <h5>Image {{$key+1}}</h5>
                                                        <img src="{{url($single_image)}}" alt="Carousel Image" width="50px" height="50px" class="img-responsive">
                                                    </li>
                                                    @endforeach
                                                @endif
                                                <input type="file" class="form-control" name="image_1">
                                                <input type="file" class="form-control" name="image_2">
                                                <input type="file" class="form-control" name="image_3">
                                                <input type="file" class="form-control" name="image_4">
                                                <input type="file" class="form-control" name="image_5">
                                                <input type="file" class="form-control" name="image_6">
                                            </div>
                                        </div>            
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary waves-effect">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    $products['technical_description']=trim(preg_replace('/\s\s+/', ' ', $products['technical_description']));
    $products['description']=trim(preg_replace('/\s\s+/', ' ', $products['description']));
?>
@endsection
@section('ckeditor')
    <script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '{{ url('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
    <script>
        CKEDITOR.instances['description'].setData('{!! $products->description !!}');
    </script>
    <script>
        CKEDITOR.replace('technical_description', {
            filebrowserBrowseUrl: '{{ url('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
    <script>CKEDITOR.instances['technical_description'].setData('{!! $products->technical_description !!}');</script>
    <script type="text/javascript"
            src="{{url('ckfinder/ckfinder-laravel-package/public/ckfinder/ckfinder.js')}}"></script>
@endsection
